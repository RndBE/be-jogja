<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RuntimeException;

class DailyAiArticleDraftService
{
    public function __construct(
        private readonly AiArticleGenerator $generator,
        private readonly BeaconArticleReferenceProvider $referenceProvider,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function preview(?string $date = null): array
    {
        $date = $this->resolveDate($date);
        $topic = $this->topicForDate($date);
        $recentTitles = $this->recentArticleTitles();

        return [
            'date' => $date->toDateString(),
            'topic' => $topic,
            'prompt' => $this->promptForTopic($topic, $date),
            'materials' => $this->referenceProvider->contextForTopic($topic, $recentTitles),
            'recent_titles' => $recentTitles,
        ];
    }

    /**
     * @return array{skipped: bool, article: Article|null, topic: array<string, mixed>, date: string}
     */
    public function generate(bool $force = false, ?string $date = null): array
    {
        $date = $this->resolveDate($date);
        $topic = $this->topicForDate($date);

        if (! $force && $existing = $this->existingDailyDraft($date)) {
            return [
                'skipped' => true,
                'article' => $existing,
                'topic' => $topic,
                'date' => $date->toDateString(),
            ];
        }

        $preview = $this->preview($date->toDateString());

        Log::info('Daily AI article draft: generating', [
            'date' => $preview['date'],
            'topic' => $topic['topic'] ?? null,
            'product' => $topic['product'] ?? null,
            'materials_characters' => mb_strlen((string) $preview['materials']),
        ]);

        $draft = $this->generator->generate(
            prompt: (string) $preview['prompt'],
            materials: (string) $preview['materials'],
            images: [],
            progress: fn (string $message, array $context = []) => Log::info($message, $context),
        );

        $article = $this->persistDraft($draft, $topic, $date);

        Log::info('Daily AI article draft: saved', [
            'article_id' => $article->id,
            'slug' => $article->slug,
            'topic' => $topic['topic'] ?? null,
        ]);

        return [
            'skipped' => false,
            'article' => $article,
            'topic' => $topic,
            'date' => $date->toDateString(),
        ];
    }

    /**
     * @param  array<string, mixed>  $topic
     */
    private function promptForTopic(array $topic, Carbon $date): string
    {
        return <<<TEXT
Buat satu draft artikel CMS Beacon Engineering untuk direview editor.

Tanggal draft: {$date->toDateString()}
Jenis artikel: pengetahuan umum / edukasi teknis yang relevan dengan produk Beacon.

Topik harian:
{$topic['topic']}

Angle:
{$topic['angle']}

Audiens:
{$topic['audience']}

Produk Beacon yang relevan untuk disebut secara halus di akhir:
{$topic['product']}

Aturan khusus:
- Artikel harus terasa seperti wawasan profesional, bukan brosur produk.
- Porsi edukasi umum minimal 80%. Promosi Beacon maksimal 20% dan hanya di bagian akhir.
- Jelaskan masalah lapangan, konsep teknis, dampak data realtime/berkelanjutan, lalu tutup dengan rekomendasi halus.
- Boleh menyebut Beacon Engineering dan produk terkait sebagai contoh solusi pada 1-2 paragraf terakhir.
- Gunakan 2-4 komponen visual HTML dari daftar komponen yang tersedia bila relevan.
- Jangan menyebut bahwa artikel dibuat otomatis, harian, atau oleh AI.
- Hindari judul yang mirip dengan judul artikel terbaru di bahan.
- Output tetap mengikuti schema JSON artikel yang diminta sistem.
TEXT;
    }

    /**
     * @param  array<string, mixed>  $draft
     * @param  array<string, mixed>  $topic
     */
    private function persistDraft(array $draft, array $topic, Carbon $date): Article
    {
        $title = (string) ($draft['title'] ?? $topic['topic'] ?? 'Draft Artikel Harian');
        $slugSource = (string) ($draft['slug'] ?? '');
        $slug = $this->uniqueSlug(Str::slug(($slugSource !== '' ? $slugSource : $title).'-'.$date->format('Ymd')));
        $tags = collect($draft['tags'] ?? [])
            ->merge([
                'ai-daily-draft',
                Str::slug((string) ($topic['product'] ?? 'beacon')),
                $date->toDateString(),
            ])
            ->filter()
            ->unique()
            ->values()
            ->all();

        return Article::create([
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $draft['excerpt'] ?? null,
            'content' => $draft['content'] ?? null,
            'thumbnail' => null,
            'category' => $draft['category'] ?? 'Artikel Teknis',
            'category_color' => $draft['category_color'] ?? '#C8102E',
            'author' => $draft['author'] ?? 'Tim Engineering',
            'read_time' => $draft['read_time'] ?? null,
            'tags' => $tags,
            'published_at' => null,
            'is_active' => false,
            'is_featured' => false,
        ]);
    }

    private function existingDailyDraft(Carbon $date): ?Article
    {
        $start = $date->copy()->startOfDay()->timezone(config('app.timezone', 'UTC'));
        $end = $date->copy()->endOfDay()->timezone(config('app.timezone', 'UTC'));

        return Article::query()
            ->whereBetween('created_at', [$start, $end])
            ->where('is_active', false)
            ->where('tags', 'like', '%ai-daily-draft%')
            ->latest()
            ->first();
    }

    private function uniqueSlug(string $base): string
    {
        $base = $base !== '' ? $base : 'draft-artikel-harian';
        $candidate = $base;
        $counter = 2;

        while (Article::query()->where('slug', $candidate)->exists()) {
            $candidate = "{$base}-{$counter}";
            $counter++;
        }

        return $candidate;
    }

    /**
     * @return array<int, string>
     */
    private function recentArticleTitles(): array
    {
        return Article::query()
            ->latest('created_at')
            ->limit(20)
            ->pluck('title')
            ->filter()
            ->values()
            ->all();
    }

    /**
     * @return array<string, mixed>
     */
    private function topicForDate(Carbon $date): array
    {
        $topics = config('ai_article.daily.topics', []);

        if (! is_array($topics) || $topics === []) {
            throw new RuntimeException('Topik harian AI artikel belum dikonfigurasi.');
        }

        $index = ((int) $date->format('z') + ((int) $date->format('Y') * 17)) % count($topics);
        $topic = $topics[$index] ?? null;

        if (! is_array($topic)) {
            throw new RuntimeException('Format topik harian AI artikel tidak valid.');
        }

        return $topic;
    }

    private function resolveDate(?string $date): Carbon
    {
        $timezone = (string) config('ai_article.daily.timezone', 'Asia/Jakarta');

        return $date
            ? Carbon::parse($date, $timezone)->startOfDay()
            : now($timezone);
    }
}
