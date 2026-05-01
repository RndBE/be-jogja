<?php

use App\Services\DailyAiArticleDraftService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Symfony\Component\Console\Command\Command;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('articles:generate-daily-draft {--force : Tetap generate walau draft hari ini sudah ada} {--date= : Tanggal referensi YYYY-MM-DD} {--dry-run : Tampilkan topik dan ukuran bahan tanpa memakai token OpenAI}', function () {
    $service = app(DailyAiArticleDraftService::class);
    $date = $this->option('date') ?: null;

    if ($this->option('dry-run')) {
        $preview = $service->preview($date);
        $topic = $preview['topic'];

        $this->info('Daily AI article draft preview');
        $this->line('Date: '.$preview['date']);
        $this->line('Topic: '.($topic['topic'] ?? '-'));
        $this->line('Product: '.($topic['product'] ?? '-'));
        $this->line('Prompt characters: '.mb_strlen((string) $preview['prompt']));
        $this->line('Materials characters: '.mb_strlen((string) $preview['materials']));

        return Command::SUCCESS;
    }

    $result = $service->generate(
        force: (bool) $this->option('force'),
        date: $date,
    );

    if ($result['skipped']) {
        $this->warn("Draft harian {$result['date']} sudah ada. Gunakan --force kalau ingin membuat lagi.");
        $this->line('Article ID: '.$result['article']?->id);

        return Command::SUCCESS;
    }

    $this->info('Draft artikel harian berhasil dibuat.');
    $this->line('Article ID: '.$result['article']?->id);
    $this->line('Title: '.$result['article']?->title);
    $this->line('Slug: '.$result['article']?->slug);
    $this->line('Status: draft / inactive, siap direview di CMS.');

    return Command::SUCCESS;
})->purpose('Generate one AI article draft for editorial review');

if (config('ai_article.daily.enabled')) {
    Schedule::command('articles:generate-daily-draft')
        ->dailyAt((string) config('ai_article.daily.time', '08:00'))
        ->timezone((string) config('ai_article.daily.timezone', 'Asia/Jakarta'))
        ->withoutOverlapping(120);
}
