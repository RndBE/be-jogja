<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Client;
use App\Models\Product;
use App\Models\Project;
use App\Models\Solution;
use App\Models\SubSolution;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 0;

    protected function getStats(): array
    {
        return [
            Stat::make('Solusi', Solution::active()->count())
                ->description('Pilar aktif')
                ->descriptionIcon('heroicon-m-cube')
                ->color('primary'),

            Stat::make('Sub Solusi', SubSolution::active()->count())
                ->description('Kategori produk aktif')
                ->descriptionIcon('heroicon-m-squares-2x2')
                ->color('info'),

            Stat::make('Produk', Product::active()->count())
                ->description('Perangkat terdaftar')
                ->descriptionIcon('heroicon-m-cpu-chip')
                ->color('success'),

            Stat::make('Proyek', Project::active()->count())
                ->description(Project::active()->where('is_featured', true)->count().' featured')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->color('warning'),

            Stat::make('Klien', Client::active()->count())
                ->description('Mitra aktif')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->color('danger'),

            Stat::make('Artikel', Article::active()->count())
                ->description(Article::active()->where('is_featured', true)->count().' featured')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('gray'),
        ];
    }
}
