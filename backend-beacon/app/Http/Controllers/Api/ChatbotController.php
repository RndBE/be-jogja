<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ChatMessage;
use App\Models\ChatSession;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class ChatbotController extends Controller
{
    /**
     * Main chat endpoint — handles AI responses and live agent polling.
     */
    public function chat(Request $request): JsonResponse
    {
        $request->validate([
            'session_token' => ['nullable', 'string', 'max:64'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Rate limit
        $key = 'chatbot:'.$request->ip();
        if (RateLimiter::tooManyAttempts($key, 30)) {
            return response()->json(['error' => 'Terlalu banyak permintaan. Silakan tunggu sebentar.'], 429);
        }
        RateLimiter::hit($key, 60);

        // Find or create session
        $session = $this->resolveSession($request);

        // Store visitor message
        $visitorMessage = $session->messages()->create([
            'sender_type' => 'visitor',
            'content' => $request->message,
        ]);
        $session->update(['last_activity_at' => now()]);

        // If session is escalated/live, don't call AI — just confirm receipt
        if ($session->isLive()) {
            return response()->json([
                'session_token' => $session->session_token,
                'mode' => $session->status,
                'reply' => null,
                'received_message_id' => $visitorMessage->id,
                'info' => 'Pesan Anda sudah diterima. Tim kami akan segera membalas.',
            ]);
        }

        // AI mode: call OpenAI
        $apiKey = config('openai.api_key');
        if (! is_string($apiKey) || $apiKey === '') {
            $replyText = 'Layanan AI belum dikonfigurasi. Silakan hubungi kami via WhatsApp: 0811-2850-9986.';
            $replyMessage = $session->messages()->create([
                'sender_type' => 'ai',
                'content' => $replyText,
            ]);

            return response()->json([
                'session_token' => $session->session_token,
                'mode' => 'ai',
                'reply' => $replyText,
                'reply_message_id' => $replyMessage->id,
            ]);
        }

        try {
            // Build conversation from DB (last 20 messages)
            $conversationHistory = $session->messages()
                ->orderBy('created_at')
                ->latest()
                ->take(20)
                ->get()
                ->sortBy('created_at')
                ->values()
                ->map(fn (ChatMessage $m) => [
                    'role' => $m->sender_type === 'visitor' ? 'user' : 'assistant',
                    'content' => $m->content,
                ])
                ->all();

            $response = Http::withToken($apiKey)
                ->acceptJson()
                ->asJson()
                ->timeout(45)
                ->post('https://api.openai.com/v1/responses', [
                    'model' => config('openai.model', 'gpt-4o-mini'),
                    'instructions' => $this->systemPrompt(),
                    'input' => $conversationHistory,
                    'max_output_tokens' => 1200,
                ]);

            $response->throw();
            $body = $response->json();
            $replyText = $this->extractOutputText($body);

            // Check if user wants to talk to a human
            $needsForm = $this->detectEscalation($replyText, $request->message);

            // Store AI reply
            $replyMessage = $session->messages()->create([
                'sender_type' => 'ai',
                'content' => $replyText,
            ]);

            return response()->json([
                'session_token' => $session->session_token,
                'mode' => 'ai',
                'reply' => $replyText,
                'reply_message_id' => $replyMessage->id,
                'needs_form' => $needsForm,
            ]);

        } catch (\Throwable $e) {
            Log::error('Chatbot API error', ['message' => $e->getMessage(), 'ip' => $request->ip()]);

            $fallback = 'Maaf, saya sedang mengalami gangguan. Silakan hubungi tim kami via WhatsApp: 0811-2850-9986.';
            $replyMessage = $session->messages()->create([
                'sender_type' => 'ai',
                'content' => $fallback,
            ]);

            return response()->json([
                'session_token' => $session->session_token,
                'mode' => 'ai',
                'reply' => $fallback,
                'reply_message_id' => $replyMessage->id,
            ]);
        }
    }

    /**
     * Submit visitor contact details and escalate to live agent.
     */
    public function escalate(Request $request): JsonResponse
    {
        $request->validate([
            'session_token' => ['required', 'string', 'max:64'],
            'name' => ['required', 'string', 'max:100'],
            'organization' => ['required', 'string', 'max:200'],
            'phone' => ['required', 'string', 'max:30'],
        ]);

        $session = ChatSession::where('session_token', $request->session_token)->first();

        if (! $session) {
            return response()->json(['error' => 'Sesi tidak ditemukan.'], 404);
        }

        $session->update([
            'visitor_name' => $request->name,
            'visitor_organization' => $request->organization,
            'visitor_phone' => $request->phone,
            'status' => 'escalated',
            'topic_summary' => Str::limit(
                $session->messages()->where('sender_type', 'visitor')->latest()->first()?->content ?? 'Permintaan bantuan CS',
                200
            ),
            'last_activity_at' => now(),
        ]);

        // Store system message
        $reply = "Terima kasih, {$request->name}. Data Anda sudah kami terima. Tim CS kami akan segera membalas di chat ini. Mohon ditunggu sebentar.";

        $replyMessage = $session->messages()->create([
            'sender_type' => 'ai',
            'content' => $reply,
        ]);

        return response()->json([
            'session_token' => $session->session_token,
            'mode' => 'escalated',
            'reply' => $reply,
            'reply_message_id' => $replyMessage->id,
        ]);
    }

    /**
     * Poll for new messages (used by frontend when in live mode).
     */
    public function poll(Request $request): JsonResponse
    {
        $request->validate([
            'session_token' => ['required', 'string', 'max:64'],
            'after_id' => ['nullable', 'integer'],
        ]);

        $session = ChatSession::where('session_token', $request->session_token)->first();

        if (! $session) {
            return response()->json(['messages' => [], 'mode' => 'ai']);
        }

        $query = $session->messages()
            ->whereIn('sender_type', ['agent', 'ai'])
            ->orderBy('id');

        if ($request->after_id) {
            $query->where('id', '>', $request->after_id);
        }

        $messages = $query->get()->map(fn (ChatMessage $m) => [
            'id' => $m->id,
            'sender_type' => $m->sender_type,
            'sender_name' => $m->sender_name,
            'content' => $m->content,
            'created_at' => $m->created_at->format('H:i'),
        ]);

        return response()->json([
            'messages' => $messages,
            'mode' => $session->status,
        ]);
    }

    // ── Private helpers ──────────────────────────────────

    private function resolveSession(Request $request): ChatSession
    {
        if ($request->session_token) {
            $session = ChatSession::where('session_token', $request->session_token)
                ->whereIn('status', ['ai', 'escalated', 'live'])
                ->first();

            if ($session) {
                return $session;
            }
        }

        return ChatSession::create([
            'session_token' => Str::random(48),
            'visitor_ip' => $request->ip(),
            'status' => 'ai',
            'last_activity_at' => now(),
        ]);
    }

    private function detectEscalation(string $aiReply, string $userMessage): bool
    {
        $escalationKeywords = [
            'hubungi sales', 'bicara dengan', 'hubungkan dengan', 'customer service',
            'berbicara dengan manusia', 'minta bantuan cs', 'live chat', 'hubungi tim',
            'kontak langsung', 'mau ngobrol dengan orang', 'bisa ngomong sama orang',
            'tolong sambungkan', 'mau tanya langsung', 'ada cs', 'minta dibantu orang',
        ];

        $lower = mb_strtolower($userMessage);
        foreach ($escalationKeywords as $keyword) {
            if (str_contains($lower, $keyword)) {
                return true;
            }
        }

        // Also check if AI reply itself suggests escalation
        $aiLower = mb_strtolower($aiReply);
        if (str_contains($aiLower, 'saya akan menghubungkan') || str_contains($aiLower, 'tim kami akan membantu')) {
            return true;
        }

        return false;
    }

    private function extractOutputText(array $response): string
    {
        foreach ($response['output'] ?? [] as $item) {
            foreach ($item['content'] ?? [] as $content) {
                if (($content['type'] ?? null) === 'output_text' && is_string($content['text'] ?? null)) {
                    return $content['text'];
                }
            }
        }

        if (is_string($response['output_text'] ?? null)) {
            return $response['output_text'];
        }

        return 'Maaf, saya tidak bisa memproses permintaan saat ini.';
    }

    private function systemPrompt(): string
    {
        $companyContext = $this->loadReference(
            config('ai_article.daily.reference_files.company', ''),
            3000
        );

        $productContext = $this->loadReference(
            config('ai_article.daily.reference_files.products', ''),
            4000
        );

        return <<<PROMPT
# IDENTITAS

Kamu adalah **Beacon Assistant** — engineer virtual dari Beacon Engineering (PT Arta Teknologi Comunindo), perusahaan manufaktur perangkat telemetri dan monitoring pintar berbasis di Yogyakarta.

Kamu bukan chatbot generik. Kamu adalah konsultan teknis yang ramah, tenang, dan membumi. Kamu memahami dunia data logger, sensor level air, curah hujan, cuaca, deformasi, kualitas air, dan platform STESY.

# SOUL

- Profesional tanpa kaku.
- Teknis tanpa menggurui.
- Percaya diri tanpa klaim berlebihan.
- Lokal Indonesia, dengan standar engineering yang serius.
- Selalu cari nyawa jawaban: masalah apa yang dibantu, keputusan apa yang jadi lebih mudah.

# PERILAKU

1. Jawab pertanyaan tentang produk, solusi, spesifikasi, instalasi, kalibrasi, dan proyek Beacon dengan akurat berdasarkan konteks yang diberikan.
2. Jika ditanya harga, jawab bahwa harga bersifat konsultatif dan arahkan ke WhatsApp: 0811-2850-9986 atau email: info@bejogja.com.
3. Jika ditanya hal di luar konteks Beacon (politik, gosip, hal random), jawab singkat bahwa kamu fokus membantu pertanyaan seputar telemetri dan produk Beacon, lalu tawarkan bantuan yang relevan.
4. Gunakan Bahasa Indonesia yang natural dan profesional. Boleh gunakan istilah teknis jika konteksnya tepat.
5. Jawab ringkas dan padat (maksimal 3 paragraf pendek). Jangan menulis esai panjang.
6. Jangan mengarang fakta. Jika kamu tidak yakin, bilang jujur dan arahkan ke tim Beacon.
7. Jika user meminta dihubungkan ke sales, CS, atau manusia, jawab: "Baik, saya akan menghubungkan Anda dengan tim kami. Mohon tunggu sebentar, tim kami akan segera membalas di chat ini." Jangan mengarahkan ke WhatsApp jika user sudah eksplisit minta live chat.

# KONTEKS PERUSAHAAN

{$companyContext}

# KONTEKS PRODUK

{$productContext}

# FORMAT JAWABAN

- Gunakan plain text. Jangan gunakan markdown heading (#), bold (**), atau formatting kompleks.
- Paragraf pendek, langsung ke inti.
- Jika perlu list, gunakan tanda strip (-) sederhana.
PROMPT;
    }

    private function loadReference(string $path, int $maxChars): string
    {
        if ($path === '' || ! is_file($path)) {
            return '(tidak tersedia)';
        }

        return Str::limit(file_get_contents($path) ?: '', $maxChars, '');
    }
}
