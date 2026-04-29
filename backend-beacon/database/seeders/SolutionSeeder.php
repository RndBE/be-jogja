<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    public function run(): void
    {
        $solutions = [
            ['name' => 'Water Security', 'slug' => 'water-security', 'description' => 'Solusi keamanan air di wilayah irigasi dan bendungan.', 'thumbnail' => 'konten/solutions/thumbnail/1744612279.webp', 'icon' => 'konten/solutions/icon/1744342523_1734658507_water-solid (1).svg', 'color' => '#0EA5E9', 'sort_order' => 1],
            ['name' => 'Weather Forecast', 'slug' => 'weather-forecast', 'description' => 'Solusi pemantauan cuaca yang terintegrasi dan berkelanjutan.', 'thumbnail' => 'konten/solutions/thumbnail/1744612701.webp', 'icon' => 'konten/solutions/icon/1744341932_1734658091_cloud-sun-fill.svg', 'color' => '#6366F1', 'sort_order' => 2],
            ['name' => 'Early Warning', 'slug' => 'early-warning', 'description' => 'Pantau potensi bencana secara online 24 jam non stop.', 'thumbnail' => 'konten/solutions/thumbnail/1744613052.webp', 'icon' => 'konten/solutions/icon/1744341950_1734658002_gridicons--speaker.svg', 'color' => '#F59E0B', 'sort_order' => 3],
            ['name' => 'Pressure Measurement', 'slug' => 'pressure-measurement', 'description' => 'Solusi keamanan data berbasis tekanan dengan daya tahan dan akurasi tinggi.', 'thumbnail' => 'konten/solutions/thumbnail/1744874784.webp', 'icon' => 'konten/solutions/icon/1762336968_1747717165_Icon pressure.webp', 'color' => '#10B981', 'sort_order' => 4],
            ['name' => 'STESY Application', 'slug' => 'stesy', 'description' => 'Solusi integrasi semua data monitoring dalam satu platform fleksibel.', 'thumbnail' => 'konten/solutions/thumbnail/1744614085.webp', 'icon' => 'konten/solutions/icon/1744342016_1734657633_lucide--tablet-smartphone.svg', 'color' => '#C8102E', 'sort_order' => 5],
        ];

        foreach ($solutions as $data) {
            Solution::create($data);
        }
    }
}
