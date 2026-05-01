<?php

namespace App\Services;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RuntimeException;

class AiArticleGenerator
{
    /**
     * @param  array<int, array{mime_type: string, data: string}>  $images
     * @return array<string, mixed>
     */
    public function generate(string $prompt, ?string $materials = null, array $images = [], ?callable $progress = null): array
    {
        $materials = Str::limit($materials ?? '', (int) config('openai.max_input_characters'), '');

        return $this->requestDraft(
            inputText: $this->userInput($prompt, $materials, count($images)),
            images: $images,
            progress: $progress,
            context: [
                'prompt_characters' => mb_strlen($prompt),
                'materials_characters' => mb_strlen($materials),
                'image_count' => count($images),
            ],
        );
    }

    /**
     * @param  array<string, mixed>  $currentDraft
     * @param  array<int, array{label: string, instruction: string|null, title: string|null}>  $history
     * @param  array<int, array{mime_type: string, data: string}>  $images
     * @return array<string, mixed>
     */
    public function revise(
        string $revisionPrompt,
        array $currentDraft,
        ?string $materials = null,
        array $images = [],
        array $history = [],
        ?callable $progress = null,
    ): array {
        $materials = Str::limit($materials ?? '', (int) config('openai.max_input_characters'), '');

        return $this->requestDraft(
            inputText: $this->revisionInput($revisionPrompt, $currentDraft, $materials, $history, count($images)),
            images: $images,
            progress: $progress,
            context: [
                'revision_prompt_characters' => mb_strlen($revisionPrompt),
                'materials_characters' => mb_strlen($materials),
                'image_count' => count($images),
                'history_count' => count($history),
            ],
        );
    }

    /**
     * @param  array<int, array{mime_type: string, data: string}>  $images
     * @param  array<string, mixed>  $context
     * @return array<string, mixed>
     */
    private function requestDraft(string $inputText, array $images, ?callable $progress, array $context): array
    {
        $startedAt = microtime(true);
        $apiKey = config('openai.api_key');

        if (! is_string($apiKey) || $apiKey === '') {
            throw new RuntimeException('OPENAI_API_KEY belum dikonfigurasi.');
        }

        $this->progress($progress, 'preparing OpenAI request', [
            'model' => config('openai.model'),
            'max_output_tokens' => config('openai.max_output_tokens'),
            ...$context,
        ]);

        $content = [
            [
                'type' => 'input_text',
                'text' => $inputText,
            ],
        ];

        foreach ($images as $image) {
            $content[] = [
                'type' => 'input_image',
                'detail' => 'low',
                'image_url' => "data:{$image['mime_type']};base64,{$image['data']}",
            ];
        }

        $this->progress($progress, 'sending request to OpenAI');

        $response = Http::withToken($apiKey)
            ->acceptJson()
            ->asJson()
            ->timeout((int) config('openai.timeout'))
            ->post('https://api.openai.com/v1/responses', [
                'model' => config('openai.model'),
                'instructions' => $this->instructions(),
                'input' => [
                    [
                        'role' => 'user',
                        'content' => $content,
                    ],
                ],
                'max_output_tokens' => (int) config('openai.max_output_tokens'),
                'text' => [
                    'format' => [
                        'type' => 'json_schema',
                        'name' => 'beacon_article_draft',
                        'strict' => true,
                        'schema' => $this->schema(),
                    ],
                ],
            ]);

        try {
            $response->throw();
        } catch (RequestException $exception) {
            $message = $exception->response?->json('error.message') ?: $exception->getMessage();

            throw new RuntimeException("Gagal generate artikel: {$message}", previous: $exception);
        }

        $responseBody = $response->json();

        $this->progress($progress, 'received OpenAI response', [
            'response_id' => $responseBody['id'] ?? null,
            'status' => $responseBody['status'] ?? null,
            'input_tokens' => $responseBody['usage']['input_tokens'] ?? null,
            'output_tokens' => $responseBody['usage']['output_tokens'] ?? null,
            'total_tokens' => $responseBody['usage']['total_tokens'] ?? null,
        ]);

        $json = $this->extractOutputText($responseBody);
        $draft = json_decode($json, true);

        if (! is_array($draft)) {
            throw new RuntimeException('Respons AI tidak bisa dibaca sebagai JSON artikel.');
        }

        $draft['content'] = app(AiArticleHtmlSanitizer::class)->sanitize((string) ($draft['content'] ?? '')) ?? '';
        $draft['slug'] = Str::slug($draft['slug'] ?: $draft['title']);
        $draft['tags'] = Arr::wrap($draft['tags'] ?? []);
        $draft['title_options'] = Arr::wrap($draft['title_options'] ?? []);

        $this->progress($progress, 'draft parsed successfully', [
            'title' => $draft['title'] ?? null,
            'slug' => $draft['slug'] ?? null,
            'category' => $draft['category'] ?? null,
            'tag_count' => count($draft['tags']),
            'title_option_count' => count($draft['title_options']),
            'duration_ms' => (int) ((microtime(true) - $startedAt) * 1000),
        ]);

        return $draft;
    }

    private function instructions(): string
    {
        return collect([
            $this->promptSection('SOUL.md'),
            $this->promptSection('AGENT.md'),
            $this->promptSection('STYLE.md'),
            $this->promptSection('COMPONENTS.md'),
            $this->promptSection('GUARDRAILS.md'),
            $this->promptSection('CHECKLIST.md'),
            $this->outputContract(),
        ])->filter()->implode("\n\n---\n\n");
    }

    private function userInput(string $prompt, string $materials, int $imageCount): string
    {
        return <<<TEXT
Instruksi user:
{$prompt}

Bahan/konteks:
{$materials}

Jumlah gambar referensi: {$imageCount}
Jika ada gambar referensi, gunakan gambar untuk memahami konteks visual, urutan kegiatan, objek/perangkat, lokasi, dan poin penting yang layak masuk artikel. Jangan mengarang detail yang tidak terlihat jelas.
TEXT;
    }

    /**
     * @param  array<string, mixed>  $currentDraft
     * @param  array<int, array{label: string, instruction: string|null, title: string|null}>  $history
     */
    private function revisionInput(string $revisionPrompt, array $currentDraft, string $materials, array $history, int $imageCount): string
    {
        $currentDraftForPrompt = [
            'title' => $currentDraft['title'] ?? null,
            'slug' => $currentDraft['slug'] ?? null,
            'excerpt' => $currentDraft['excerpt'] ?? null,
            'content' => Str::limit((string) ($currentDraft['content'] ?? ''), 14000, ''),
            'category' => $currentDraft['category'] ?? null,
            'category_color' => $currentDraft['category_color'] ?? null,
            'author' => $currentDraft['author'] ?? null,
            'read_time' => $currentDraft['read_time'] ?? null,
            'tags' => $currentDraft['tags'] ?? [],
            'is_featured' => $currentDraft['is_featured'] ?? false,
        ];

        $historyForPrompt = collect($history)
            ->take(-8)
            ->values()
            ->map(fn (array $item): array => [
                'label' => $item['label'] ?? null,
                'instruction' => $item['instruction'] ?? null,
                'title' => $item['title'] ?? null,
            ])
            ->all();

        return <<<TEXT
Mode:
Revisi draft artikel yang sudah ada. Jangan mulai dari nol kecuali instruksi revisi meminta perubahan total.

Instruksi revisi user:
{$revisionPrompt}

Draft saat ini dalam JSON:
"""json
{$this->json($currentDraftForPrompt)}
"""

History versi/ringkasan instruksi:
"""json
{$this->json($historyForPrompt)}
"""

Bahan/konteks tambahan:
{$materials}

Jumlah gambar referensi tambahan: {$imageCount}

Aturan revisi:
- Pertahankan struktur, fakta, tone, dan bagian yang sudah bagus.
- Terapkan hanya perubahan yang diminta user.
- Jika user meminta "buat lebih marketing", perkuat angle, opening, judul, excerpt, dan subheading tanpa mengarang fakta.
- Jika user meminta "lebih teknis", tambahkan penjelasan teknis yang masih konsisten dengan bahan.
- Kembalikan artikel penuh dalam schema yang sama, bukan potongan/diff.
TEXT;
    }

    private function json(mixed $value): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?: 'null';
    }

    /**
     * @param  array<string, mixed>  $response
     */
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

        throw new RuntimeException('Respons AI tidak berisi output teks.');
    }

    /**
     * @return array<string, mixed>
     */
    private function schema(): array
    {
        return [
            'type' => 'object',
            'additionalProperties' => false,
            'required' => [
                'title',
                'title_options',
                'slug',
                'excerpt',
                'content',
                'category',
                'category_color',
                'author',
                'read_time',
                'tags',
                'is_featured',
            ],
            'properties' => [
                'title' => [
                    'type' => 'string',
                ],
                'slug' => [
                    'type' => 'string',
                ],
                'title_options' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'string',
                    ],
                ],
                'excerpt' => [
                    'type' => 'string',
                ],
                'content' => [
                    'type' => 'string',
                ],
                'category' => [
                    'type' => 'string',
                    'enum' => ['Studi Kasus', 'Artikel Teknis', 'Berita Produk'],
                ],
                'category_color' => [
                    'type' => 'string',
                    'pattern' => '^#[0-9A-Fa-f]{6}$',
                ],
                'author' => [
                    'type' => 'string',
                ],
                'read_time' => [
                    'type' => 'string',
                    'pattern' => '^[0-9]{1,2} min$',
                ],
                'tags' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'string',
                    ],
                ],
                'is_featured' => [
                    'type' => 'boolean',
                ],
            ],
        ];
    }

    /**
     * @param  array<string, mixed>  $context
     */
    private function progress(?callable $progress, string $message, array $context = []): void
    {
        Log::info("AI article generation: {$message}", $context);

        if ($progress) {
            $progress("AI article generation: {$message}", $context);
        }
    }

    private function promptSection(string $file): string
    {
        $path = resource_path("prompts/ai-article/{$file}");

        if (! is_file($path)) {
            return '';
        }

        return Str::limit(file_get_contents($path) ?: '', 10000, '');
    }

    private function outputContract(): string
    {
        return <<<'PROMPT'
# OUTPUT CONTRACT

Kembalikan hanya JSON sesuai schema. Jangan menambahkan markdown, komentar, atau teks di luar JSON.

Field content harus berupa HTML ringan.

Pilih category dari:
- Studi Kasus
- Artikel Teknis
- Berita Produk

Gunakan category_color "#C8102E" kecuali brief memberi konteks warna lain yang masuk akal.
PROMPT;
    }
}
