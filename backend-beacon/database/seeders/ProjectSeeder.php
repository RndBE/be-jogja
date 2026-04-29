<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Client;
use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $cl = Client::pluck('id', 'name');
        $cat = ProjectCategory::pluck('id', 'slug');

        $projects = [
            ['client_id' => $cl['BWS Kalimantan IV'], 'project_category_id' => $cat['bendungan'], 'name' => 'Bendungan Sepaku Semoi (IKN)', 'slug' => 'bendungan-sepaku-semoi-ikn', 'location' => 'Kalimantan Timur', 'year' => '2024', 'description' => 'Pekerjaan Pemasangan dan Pengoperasian AWLR pada Pos Hidrologi DAS Sepaku Semoi', 'thumbnail' => 'projek_thumbnails/1744616074.webp', 'main_image' => 'projek_gambar_proyeks/1744616074.webp', 'is_featured' => true, 'sort_order' => 1],
            ['client_id' => $cl['BBWS Serayu Opak'], 'project_category_id' => $cat['bendungan'], 'name' => 'Bendungan Bener', 'slug' => 'bendungan-bener', 'location' => 'Purworejo, Jawa Tengah', 'year' => '2024', 'description' => 'Pengadaan dan Pemasangan AWLR, ADR Telemetri pada Bendungan Bener', 'thumbnail' => 'projek_thumbnails/1744616092.webp', 'main_image' => 'projek_gambar_proyeks/1744616092.webp', 'is_featured' => true, 'sort_order' => 2],
            ['client_id' => $cl['BBWS Serayu Opak'], 'project_category_id' => $cat['irigasi'], 'name' => 'DI Slinga', 'slug' => 'di-slinga', 'location' => 'Purbalingga, Jawa Tengah', 'year' => '2024', 'description' => 'Pemasangan Sistem AWGC (Automatic Water Gate Controller) di wilayah DI Slinga', 'thumbnail' => 'projek_thumbnails/1744616106.webp', 'main_image' => 'projek_gambar_proyeks/1744616106.webp', 'sort_order' => 3],
            ['client_id' => $cl['BBWS Serayu Opak'], 'project_category_id' => $cat['irigasi'], 'name' => 'DI Serayu', 'slug' => 'di-serayu', 'location' => 'Banyumas, Jawa Tengah', 'year' => '2024', 'description' => 'Pemasangan Sistem AWGC (Automatic Water Gate Controller) di wilayah DI Serayu', 'thumbnail' => 'projek_thumbnails/1744616118.webp', 'main_image' => 'projek_gambar_proyeks/1744616118.webp', 'sort_order' => 4],
            ['client_id' => $cl['PT. Brantas Abipraya'], 'project_category_id' => $cat['bendungan'], 'name' => 'Bendungan Ciawi-Sukamahi', 'slug' => 'bendungan-ciawi-sukamahi', 'location' => 'Bogor, Jawa Barat', 'year' => '2024', 'description' => 'Implementasi Instrumentasi Keamanan dan Peringatan Dini pada Bendungan Ciawi dan Sukamahi', 'thumbnail' => 'projek_thumbnails/1744616133.webp', 'main_image' => 'projek_gambar_proyeks/1744616133.webp', 'is_featured' => true, 'sort_order' => 5],
            ['client_id' => $cl['Dinas PUSDA Provinsi Jawa Timur'], 'project_category_id' => $cat['irigasi'], 'name' => 'DI Tugu Sari', 'slug' => 'di-tugu-sari', 'location' => 'Lumajang, Jawa Timur', 'year' => '2024', 'description' => 'Pemasangan AWGC dan Pembuatan Sistem Monitoring Irigasi', 'thumbnail' => 'projek_thumbnails/1744616156.webp', 'main_image' => 'projek_gambar_proyeks/1744616156.webp', 'sort_order' => 6],
            ['client_id' => $cl['BBWS Cimanuk Cisanggarung'], 'project_category_id' => $cat['irigasi'], 'name' => 'DI Rentang', 'slug' => 'di-rentang', 'location' => 'Cirebon, Jawa Barat', 'year' => '2024', 'description' => 'Pemasangan 10 Titik AWGC (Automatic Water Gate Controller)', 'thumbnail' => 'projek_thumbnails/1744616172.webp', 'main_image' => 'projek_gambar_proyeks/1744616172.webp', 'sort_order' => 7],
            ['client_id' => $cl['BBWS Ciliwung Cisadane'], 'project_category_id' => $cat['bendungan'], 'name' => 'Bendungan Ciawi', 'slug' => 'bendungan-ciawi', 'location' => 'Bogor, Jawa Barat', 'year' => '2023', 'description' => 'Pengadaan dan Pemasangan AWLR dan ADR pada Bendungan Ciawi', 'thumbnail' => 'projek_thumbnails/1744616205.webp', 'main_image' => 'projek_gambar_proyeks/1744616205.webp', 'sort_order' => 8],
            ['client_id' => $cl['BBWS Ciliwung Cisadane'], 'project_category_id' => $cat['irigasi'], 'name' => 'DI Cisadane', 'slug' => 'di-cisadane', 'location' => 'Tangerang, Banten', 'year' => '2023', 'description' => 'Pemasangan Perangkat AWGC dan Pembuatan Sistem Monitoring', 'thumbnail' => 'projek_thumbnails/1744616237.webp', 'main_image' => 'projek_gambar_proyeks/1744616237.webp', 'sort_order' => 9],
            ['client_id' => $cl['Dinas SDA Provinsi DKI Jakarta'], 'project_category_id' => $cat['irigasi'], 'name' => 'DI Kelapa Dua Wetan', 'slug' => 'di-kelapa-dua-wetan', 'location' => 'DKI Jakarta', 'year' => '2023', 'description' => 'Pemasangan AWGC pada Pintu Air dan Pembuatan Sistem Monitoring', 'thumbnail' => 'projek_thumbnails/1744616261.webp', 'main_image' => 'projek_gambar_proyeks/1744616261.webp', 'sort_order' => 10],
            ['client_id' => $cl['BBWS Serayu Opak'], 'project_category_id' => $cat['irigasi'], 'name' => 'DI Serayu 2023', 'slug' => 'di-serayu-2023', 'location' => 'Banyumas, Jawa Tengah', 'year' => '2023', 'description' => 'Pemasangan Sistem AWGC (Automatic Water Gate Controller)', 'thumbnail' => 'projek_thumbnails/1744616285.webp', 'main_image' => 'projek_gambar_proyeks/1744616285.webp', 'sort_order' => 11],
            ['client_id' => $cl['BWS Sumatra I Aceh'], 'project_category_id' => $cat['bendungan'], 'name' => 'Bendungan Keureuto', 'slug' => 'bendungan-keureuto', 'location' => 'Aceh Utara', 'year' => '2023', 'description' => 'Penyediaan dan Pemasangan Instrumentasi Keamanan Bendungan', 'thumbnail' => 'projek_thumbnails/1744616305.webp', 'main_image' => 'projek_gambar_proyeks/1744616305.webp', 'is_featured' => true, 'sort_order' => 12],
            ['client_id' => $cl['BBWS Citarum'], 'project_category_id' => $cat['bendungan'], 'name' => 'Bendungan Cipanas', 'slug' => 'bendungan-cipanas', 'location' => 'Sumedang, Jawa Barat', 'year' => '2022', 'description' => 'Pengadaan dan Pemasangan AWLR, ADR, dan Sistem STESY', 'thumbnail' => 'projek_thumbnails/1744616324.webp', 'main_image' => 'projek_gambar_proyeks/1744616324.webp', 'sort_order' => 13],
            ['client_id' => $cl['BBWS Brantas'], 'project_category_id' => $cat['irigasi'], 'name' => 'DI Mrican Kiri', 'slug' => 'di-mrican-kiri', 'location' => 'Kediri, Jawa Timur', 'year' => '2022', 'description' => 'Pengadaan dan Pemasangan Sistem AWGC pada DI Mrican Kiri', 'thumbnail' => 'projek_thumbnails/1744616346.webp', 'main_image' => 'projek_gambar_proyeks/1744616346.webp', 'sort_order' => 14],
        ];

        foreach ($projects as $data) {
            Project::create($data);
        }
    }
}
