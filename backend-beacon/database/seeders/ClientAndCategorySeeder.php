<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ClientAndCategorySeeder extends Seeder
{
    public function run(): void
    {
        // Project Categories
        $cats = [
            ['name' => 'Irigasi', 'slug' => 'irigasi'],
            ['name' => 'Bendungan', 'slug' => 'bendungan'],
            ['name' => 'Klimatologi', 'slug' => 'klimatologi'],
            ['name' => 'Geothermal', 'slug' => 'geothermal'],
        ];
        foreach ($cats as $c) { ProjectCategory::create($c); }

        // Clients (deduplicated from documentation)
        $clients = [
            ['name' => 'BWS Kalimantan IV', 'logo' => 'klien/1762332162_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'BBWS Serayu Opak', 'logo' => 'klien/1762332250_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'PT. Brantas Abipraya', 'logo' => 'klien/1762333118_1733201952_PT. Brantas Abipraya.webp', 'website' => 'https://www.brantas-abipraya.co.id/'],
            ['name' => 'Dinas PUSDA Provinsi Jawa Timur', 'logo' => 'klien/1762332803_1744616486_8.webp'],
            ['name' => 'BBWS Cimanuk Cisanggarung', 'logo' => 'klien/1762332246_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'BBWS Ciliwung Cisadane', 'logo' => 'klien/1762332241_1733201796_BBWS Serayu Opak.webp', 'website' => 'https://bbwscimancis.id'],
            ['name' => 'Dinas SDA Provinsi DKI Jakarta', 'logo' => 'klien/1762332845_1744616457_6.webp'],
            ['name' => 'BWS Sumatra I Aceh', 'logo' => 'klien/1762332240_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'BBWS Citarum', 'logo' => 'klien/1762332248_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'BBWS Brantas', 'logo' => 'klien/1762332245_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'BWS NT1', 'logo' => 'klien/1762332243_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'BWS NT2', 'logo' => 'klien/1762332242_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'BBWS Bengawan Solo', 'logo' => 'klien/1762332244_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'BBWS Citanduy', 'logo' => 'klien/1762332247_1733201796_BBWS Serayu Opak.webp'],
            ['name' => 'Perum. Jasa Tirta I', 'logo' => 'klien/1762332764_1744616537_10.webp'],
            ['name' => 'SDA ESDM Provinsi DIY', 'logo' => 'klien/1762333004_1733201997_SDA ESDM Provinsi DIY.webp'],
            ['name' => 'PT. Medco Energi', 'logo' => 'klien/1762333073_1733201971_PT. Medco Energi.webp'],
            ['name' => 'PT. Adhi Karya', 'logo' => 'klien/1762333140_1733201944_PT. Adhi Karya.webp', 'website' => 'https://adhi.co.id/'],
        ];
        foreach ($clients as $c) { Client::create($c); }
    }
}
