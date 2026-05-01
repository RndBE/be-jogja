<?php

namespace App\Filament\Pages;

use App\Filament\Resources\ArticleResource;
use App\Models\Article;
use App\Services\AiArticleGenerator;
use App\Services\AiArticleHtmlSanitizer;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Enums\Width;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Throwable;

class AiArticleAssistant extends Page
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationLabel = 'AI Artikel';

    protected static ?string $title = 'AI Artikel';

    protected static string|\UnitEnum|null $navigationGroup = 'Konten';

    protected static ?int $navigationSort = 4;

    protected static ?string $slug = 'ai-artikel';

    protected string $view = 'filament.pages.ai-article-assistant';

    public string $prompt = '';

    public string $materials = '';

    public string $revisionPrompt = '';

    /**
     * @var array<int, TemporaryUploadedFile>
     */
    public array $images = [];

    public ?string $articleTitle = null;

    /**
     * @var array<int, string>
     */
    public array $titleOptions = [];

    public ?string $articleSlug = null;

    public ?string $excerpt = null;

    public ?string $content = null;

    public ?string $category = 'Artikel Teknis';

    public ?string $category_color = '#C8102E';

    public ?string $author = 'Tim Engineering';

    public ?string $read_time = null;

    public string $tags = '';

    public bool $is_featured = false;

    public ?int $createdArticleId = null;

    /**
     * @var array<int, array<string, mixed>>
     */
    public array $draftHistory = [];

    public function generate(): void
    {
        $this->browserLog('AI article assistant: generate button clicked', [
            'prompt_characters' => mb_strlen($this->prompt),
            'materials_characters' => mb_strlen($this->materials),
            'uploaded_image_count' => count($this->images),
        ]);

        $this->validate([
            'prompt' => ['required', 'string', 'min:10'],
            'materials' => ['nullable', 'string'],
            'images' => ['nullable', 'array', 'max:6'],
            'images.*' => ['image', 'max:4096'],
        ]);

        try {
            $generator = app(AiArticleGenerator::class);
            $this->browserLog('AI article assistant: validation passed, building image inputs');
            $draft = $generator->generate(
                $this->prompt,
                $this->materials,
                $this->imageInputs(),
                fn (string $message, array $context = []) => $this->browserLog($message, $context),
            );
        } catch (Throwable $exception) {
            $this->browserLog('AI article assistant: generation failed', [
                'message' => $exception->getMessage(),
                'exception' => $exception::class,
            ], 'error');

            report($exception);

            Notification::make()
                ->danger()
                ->title('Gagal generate artikel')
                ->body($exception->getMessage())
                ->send();

            return;
        }

        $this->articleTitle = $draft['title'] ?? null;
        $this->createdArticleId = null;
        $this->draftHistory = [];
        $this->applyDraft($draft);
        $this->pushHistory('Draft awal', $this->prompt);

        $this->browserLog('AI article assistant: draft loaded into preview', [
            'title' => $this->articleTitle,
            'slug' => $this->articleSlug,
            'category' => $this->category,
            'title_options' => $this->titleOptions,
        ]);

        Notification::make()
            ->success()
            ->title('Draft artikel berhasil dibuat')
            ->body('Silakan review dan edit sebelum disimpan.')
            ->send();
    }

    public function revise(): void
    {
        $this->browserLog('AI article assistant: revise button clicked', [
            'revision_prompt_characters' => mb_strlen($this->revisionPrompt),
            'has_current_draft' => (bool) $this->content,
            'history_count' => count($this->draftHistory),
        ]);

        $this->validate([
            'revisionPrompt' => ['required', 'string', 'min:5'],
            'images' => ['nullable', 'array', 'max:6'],
            'images.*' => ['image', 'max:4096'],
        ]);

        if (! $this->content) {
            Notification::make()
                ->warning()
                ->title('Belum ada draft untuk direvisi')
                ->body('Generate draft pertama dulu, lalu gunakan instruksi revisi.')
                ->send();

            return;
        }

        try {
            $generator = app(AiArticleGenerator::class);
            $this->browserLog('AI article assistant: revising current draft');
            $draft = $generator->revise(
                $this->revisionPrompt,
                $this->currentDraft(),
                $this->materials,
                $this->imageInputs(),
                $this->historyForPrompt(),
                fn (string $message, array $context = []) => $this->browserLog($message, $context),
            );
        } catch (Throwable $exception) {
            $this->browserLog('AI article assistant: revision failed', [
                'message' => $exception->getMessage(),
                'exception' => $exception::class,
            ], 'error');

            report($exception);

            Notification::make()
                ->danger()
                ->title('Gagal revisi artikel')
                ->body($exception->getMessage())
                ->send();

            return;
        }

        $instruction = $this->revisionPrompt;
        $this->applyDraft($draft);
        $this->pushHistory('Revisi '.count($this->draftHistory), $instruction);
        $this->revisionPrompt = '';

        Notification::make()
            ->success()
            ->title('Draft berhasil direvisi')
            ->body('Versi baru sudah masuk preview. Versi sebelumnya tetap ada di history.')
            ->send();
    }

    public function removeImage(int $index): void
    {
        $this->browserLog('AI article assistant: removing uploaded image', [
            'index' => $index,
        ]);

        unset($this->images[$index]);
        $this->images = array_values($this->images);
    }

    public function useTitleOption(int $index): void
    {
        if (! isset($this->titleOptions[$index])) {
            return;
        }

        $this->articleTitle = $this->titleOptions[$index];
        $this->articleSlug = Str::slug($this->articleTitle);

        $this->browserLog('AI article assistant: title option selected', [
            'index' => $index,
            'title' => $this->articleTitle,
        ]);
    }

    public function restoreDraftVersion(int $index): void
    {
        if (! isset($this->draftHistory[$index])) {
            return;
        }

        $this->applyDraft($this->draftHistory[$index]);

        $this->browserLog('AI article assistant: draft version restored', [
            'index' => $index,
            'label' => $this->draftHistory[$index]['label'] ?? null,
            'title' => $this->articleTitle,
        ]);
    }

    public function saveDraft(): void
    {
        $this->persistArticle(isActive: false);
    }

    public function publish(): void
    {
        $this->persistArticle(isActive: true);
    }

    public function resetDraft(): void
    {
        $this->reset([
            'articleTitle',
            'titleOptions',
            'articleSlug',
            'excerpt',
            'content',
            'read_time',
            'createdArticleId',
            'revisionPrompt',
            'draftHistory',
        ]);

        $this->category = 'Artikel Teknis';
        $this->category_color = '#C8102E';
        $this->author = 'Tim Engineering';
        $this->tags = '';
        $this->is_featured = false;
    }

    public function updatedArticleTitle(?string $value): void
    {
        if (! $this->createdArticleId) {
            $this->articleSlug = Str::slug($value ?? '');
        }
    }

    public function getMaxContentWidth(): Width|string|null
    {
        return Width::Full;
    }

    private function persistArticle(bool $isActive): void
    {
        $data = $this->validate([
            'articleTitle' => ['required', 'string', 'max:255'],
            'articleSlug' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'category' => ['nullable', 'string', 'max:255'],
            'category_color' => ['nullable', 'string', 'max:20'],
            'author' => ['nullable', 'string', 'max:255'],
            'read_time' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'string'],
            'is_featured' => ['boolean'],
        ]);

        $slug = $this->uniqueSlug($data['articleSlug'], $this->createdArticleId);

        $this->browserLog('AI article assistant: saving article', [
            'mode' => $isActive ? 'publish' : 'draft',
            'existing_article_id' => $this->createdArticleId,
            'slug' => $slug,
        ]);

        $article = Article::updateOrCreate(
            ['id' => $this->createdArticleId],
            [
                'title' => $data['articleTitle'],
                'slug' => $slug,
                'excerpt' => $data['excerpt'] ?? null,
                'content' => app(AiArticleHtmlSanitizer::class)->sanitize($data['content']) ?? '',
                'category' => $data['category'] ?? null,
                'category_color' => $data['category_color'] ?? '#C8102E',
                'author' => $data['author'] ?? 'Tim Engineering',
                'read_time' => $data['read_time'] ?? null,
                'tags' => $this->parseTags($data['tags'] ?? ''),
                'published_at' => now()->toDateString(),
                'is_active' => $isActive,
                'is_featured' => $data['is_featured'] ?? false,
            ],
        );

        $this->createdArticleId = $article->id;
        $this->articleSlug = $article->slug;

        $this->browserLog('AI article assistant: article saved', [
            'article_id' => $article->id,
            'slug' => $article->slug,
            'is_active' => $article->is_active,
        ]);

        Notification::make()
            ->success()
            ->title($isActive ? 'Artikel dipublish' : 'Draft artikel disimpan')
            ->body('Artikel tersimpan dan bisa diedit lagi dari menu Artikel.')
            ->actions([
                Action::make('edit')
                    ->label('Edit Artikel')
                    ->url(ArticleResource::getUrl('edit', ['record' => $article])),
            ])
            ->send();
    }

    /**
     * @param  array<string, mixed>  $draft
     */
    private function applyDraft(array $draft): void
    {
        $this->articleTitle = $draft['title'] ?? null;
        $this->titleOptions = $draft['title_options'] ?? [];
        $this->articleSlug = $draft['slug'] ?? Str::slug($this->articleTitle ?? '');
        $this->excerpt = $draft['excerpt'] ?? null;
        $this->content = app(AiArticleHtmlSanitizer::class)->sanitize($draft['content'] ?? null);
        $this->category = $draft['category'] ?? 'Artikel Teknis';
        $this->category_color = $draft['category_color'] ?? '#C8102E';
        $this->author = $draft['author'] ?? 'Tim Engineering';
        $this->read_time = $draft['read_time'] ?? null;
        $this->tags = is_array($draft['tags'] ?? null) ? implode(', ', $draft['tags']) : (string) ($draft['tags'] ?? '');
        $this->is_featured = (bool) ($draft['is_featured'] ?? false);
    }

    private function pushHistory(string $label, ?string $instruction): void
    {
        $this->draftHistory[] = [
            'label' => $label,
            'instruction' => $instruction,
            'title' => $this->articleTitle,
            'title_options' => $this->titleOptions,
            'slug' => $this->articleSlug,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'category' => $this->category,
            'category_color' => $this->category_color,
            'author' => $this->author,
            'read_time' => $this->read_time,
            'tags' => $this->parseTags($this->tags),
            'is_featured' => $this->is_featured,
            'created_at' => now()->format('H:i:s'),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function currentDraft(): array
    {
        return [
            'title' => $this->articleTitle,
            'title_options' => $this->titleOptions,
            'slug' => $this->articleSlug,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'category' => $this->category,
            'category_color' => $this->category_color,
            'author' => $this->author,
            'read_time' => $this->read_time,
            'tags' => $this->parseTags($this->tags),
            'is_featured' => $this->is_featured,
        ];
    }

    /**
     * @return array<int, array{label: string, instruction: string|null, title: string|null}>
     */
    private function historyForPrompt(): array
    {
        return collect($this->draftHistory)
            ->map(fn (array $item): array => [
                'label' => (string) ($item['label'] ?? ''),
                'instruction' => $item['instruction'] ?? null,
                'title' => $item['title'] ?? null,
            ])
            ->values()
            ->all();
    }

    /**
     * @return array<int, array{mime_type: string, data: string}>
     */
    private function imageInputs(): array
    {
        return collect($this->images)
            ->filter(fn ($image): bool => $image instanceof TemporaryUploadedFile)
            ->map(fn (TemporaryUploadedFile $image): array => [
                'mime_type' => $image->getMimeType(),
                'data' => base64_encode($image->get()),
            ])
            ->values()
            ->all();
    }

    /**
     * @param  array<string, mixed>  $context
     */
    private function browserLog(string $message, array $context = [], string $level = 'log'): void
    {
        match ($level) {
            'error' => Log::error($message, $context),
            'warn' => Log::warning($message, $context),
            default => Log::info($message, $context),
        };

        $this->dispatch('ai-article-console-log',
            level: $level,
            message: $message,
            context: $this->browserContext($context),
        );
    }

    /**
     * @param  array<string, mixed>  $context
     * @return array<string, mixed>
     */
    private function browserContext(array $context): array
    {
        return collect($context)
            ->map(fn ($value) => is_scalar($value) || $value === null ? $value : json_encode($value))
            ->toArray();
    }

    /**
     * @return array<int, string>
     */
    private function parseTags(string $tags): array
    {
        return collect(explode(',', $tags))
            ->map(fn (string $tag): string => trim($tag))
            ->filter()
            ->values()
            ->all();
    }

    private function uniqueSlug(string $slug, ?int $ignoreId = null): string
    {
        $base = Str::slug($slug);

        if ($base === '') {
            $base = Str::slug($this->articleTitle ?? 'artikel');
        }

        $candidate = $base;
        $counter = 2;

        while (
            Article::query()
                ->where('slug', $candidate)
                ->when($ignoreId, fn ($query) => $query->whereKeyNot($ignoreId))
                ->exists()
        ) {
            $candidate = "{$base}-{$counter}";
            $counter++;
        }

        return $candidate;
    }
}
