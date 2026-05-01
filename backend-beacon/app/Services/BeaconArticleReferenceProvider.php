<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use RuntimeException;

class BeaconArticleReferenceProvider
{
    /**
     * @param  array<string, mixed>  $topic
     * @param  array<int, string>  $recentTitles
     */
    public function contextForTopic(array $topic, array $recentTitles = []): string
    {
        $recent = collect($recentTitles)
            ->filter()
            ->take(20)
            ->map(fn (string $title): string => "- {$title}")
            ->implode("\n");

        return trim(<<<TEXT
## Profil Beacon Engineering
{$this->companyReference()}

## Referensi produk yang relevan
{$this->productReference($topic)}

## Judul artikel terbaru yang perlu dihindari
{$recent}

## Cara memakai referensi
- Jadikan artikel sebagai edukasi umum yang relevan dengan masalah lapangan.
- Gunakan data perusahaan dan produk sebagai konteks akurat, bukan sebagai brosur panjang.
- Promosi Beacon hanya muncul halus di bagian akhir sebagai contoh solusi yang relevan.
- Jangan mengarang angka, sertifikasi, proyek, nama klien, atau spesifikasi yang tidak ada di referensi.
TEXT);
    }

    private function companyReference(): string
    {
        $profile = $this->readRequiredReference('company');
        $limit = (int) config('ai_article.daily.max_company_reference_characters', 3400);

        return Str::limit($profile, $limit, "\n[Profil dipotong agar input AI tetap hemat token]");
    }

    /**
     * @param  array<string, mixed>  $topic
     */
    private function productReference(array $topic): string
    {
        $products = $this->readRequiredReference('products');
        $profile = $this->readRequiredReference('company');
        $limit = (int) config('ai_article.daily.max_product_reference_characters', 5600);

        $sections = collect($topic['product_headings'] ?? [])
            ->filter(fn ($heading): bool => is_string($heading) && $heading !== '')
            ->map(fn (string $heading): ?string => $this->productSection($products, $heading))
            ->filter();

        $profileSnippets = collect($topic['profile_keywords'] ?? [])
            ->filter(fn ($keyword): bool => is_string($keyword) && $keyword !== '')
            ->flatMap(fn (string $keyword): Collection => $this->profileSectionsByKeyword($profile, $keyword));

        $reference = $sections
            ->merge($profileSnippets)
            ->unique(fn (string $section): string => md5($section))
            ->implode("\n\n---\n\n");

        if ($reference === '') {
            $reference = $products;
        }

        return Str::limit($reference, $limit, "\n[Referensi produk dipotong agar input AI tetap hemat token]");
    }

    private function productSection(string $markdown, string $heading): ?string
    {
        $pattern = '/^###\s+'.preg_quote($heading, '/').'\s*$(.*?)(?=^###\s|\z)/msu';

        if (! preg_match($pattern, $markdown, $matches)) {
            return null;
        }

        return trim("### {$heading}\n".$matches[1]);
    }

    /**
     * @return Collection<int, string>
     */
    private function profileSectionsByKeyword(string $markdown, string $keyword): Collection
    {
        preg_match_all('/^###\s+.*$.*?(?=^###\s|\z)/msu', $markdown, $matches);

        return collect($matches[0] ?? [])
            ->filter(fn (string $section): bool => Str::contains(Str::lower($section), Str::lower($keyword)))
            ->values();
    }

    private function readRequiredReference(string $key): string
    {
        $path = config("ai_article.daily.reference_files.{$key}");

        if (! is_string($path) || $path === '' || ! is_file($path)) {
            throw new RuntimeException("File referensi AI artikel tidak ditemukan: {$key}");
        }

        $contents = file_get_contents($path);

        if (! is_string($contents) || trim($contents) === '') {
            throw new RuntimeException("File referensi AI artikel kosong: {$key}");
        }

        return $contents;
    }
}
