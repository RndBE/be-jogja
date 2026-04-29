<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

/**
 * ClientSeeder
 *
 * Data bersumber dari dokumentasi_client_be_profile.md.
 * Deduplikasi: BBWS Bengawan Solo (ID 19 & 480) dan BBWS Serayu Opak (ID 1 & 481)
 * hanya disimpan satu entri masing-masing dengan logo yang lebih representatif.
 * Total: 38 client unik.
 */
class ClientSeeder extends Seeder
{
    public function run(): void
    {
        // Gunakan updateOrCreate agar aman dengan FK constraint dari tabel projects
        // dan idempoten (bisa dijalankan ulang tanpa duplikat)
        $clients = [

            // ── BUMN / Konstruksi Infrastruktur ─────────────────────────────
            [
                'name'      => 'PT. Adhi Karya',
                'logo'      => 'klien/1762333140_1733201944_PT. Adhi Karya.webp',
                'website'   => 'https://adhi.co.id',
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Brantas Abipraya',
                'logo'      => 'klien/1762333118_1733201952_PT. Brantas Abipraya.webp',
                'website'   => 'https://www.brantas-abipraya.co.id',
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Hutama Karya',
                'logo'      => 'klien/1762333098_1733201962_PT. Hutama Karya.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Nindya Karya',
                'logo'      => 'klien/1762333239_1731312640_PT. Nindya Karya.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. PP',
                'logo'      => 'klien/1762333217_1733201333_PT. PP.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Waskita Karya',
                'logo'      => 'klien/1762333051_1733201980_PT. Waskita Karya.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Wijaya Karya',
                'logo'      => 'klien/1762333191_1731312675_PT. Wijaya Karya.webp',
                'website'   => null,
                'is_active' => true,
            ],

            // ── Instansi SDA / Pemerintahan / Pengelola Air ─────────────────
            [
                // Deduplikasi: gunakan entri ID 19 sebagai representatif
                'name'      => 'BBWS Bengawan Solo',
                'logo'      => 'klien/1762332244_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BBWS Brantas',
                'logo'      => 'klien/1762332245_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BBWS Ciliwung Cisadane',
                'logo'      => 'klien/1762332241_1733201796_BBWS Serayu Opak.webp',
                'website'   => 'https://bbwscimancis.id',
                'is_active' => true,
            ],
            [
                'name'      => 'BBWS Cimanuk Cisanggarung',
                'logo'      => 'klien/1762332246_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BBWS Citanduy',
                'logo'      => 'klien/1762332247_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BBWS Citarum',
                'logo'      => 'klien/1762332248_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                // Deduplikasi: gunakan entri ID 1 sebagai representatif
                'name'      => 'BBWS Serayu Opak',
                'logo'      => 'klien/1762332250_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BWS Kalimantan IV',
                'logo'      => 'klien/1762332162_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BWS NT1',
                'logo'      => 'klien/1762332243_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BWS NT2',
                'logo'      => 'klien/1762332242_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BWS Papua Barat',
                'logo'      => 'klien/1762332249_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BWS Sulawesi I',
                'logo'      => 'klien/1762332043_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'BWS Sumatra I Aceh',
                'logo'      => 'klien/1762332240_1733201796_BBWS Serayu Opak.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'Dinas PUSDA Provinsi Jawa Timur',
                'logo'      => 'klien/1762332803_1744616486_8.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'Dinas SDA Provinsi DKI Jakarta',
                'logo'      => 'klien/1762332845_1744616457_6.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'Perum. Jasa Tirta I',
                'logo'      => 'klien/1762332764_1744616537_10.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'Perum. Jasa Tirta II',
                'logo'      => 'klien/1762332980_1744616390_1.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'SDA ESDM Provinsi DIY',
                'logo'      => 'klien/1762333004_1733201997_SDA ESDM Provinsi DIY.webp',
                'website'   => null,
                'is_active' => true,
            ],

            // ── Mitra / Distributor / Kontraktor ────────────────────────────
            [
                'name'      => 'CV. Naufalindo Sci',
                'logo'      => 'klien/1762333165_1733201934_CV. Naufalindo Sci..webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'CV. Sinar Saka Utama',
                'logo'      => 'klien/1762331918_CV. Sinar Saka Utama.webp',
                'website'   => null,
                'is_active' => true,
            ],

            // ── Pendidikan / Riset ───────────────────────────────────────────
            [
                'name'      => 'Universitas Gadjah Mada',
                'logo'      => 'klien/1762332917_1744616420_3.webp',
                'website'   => 'https://ugm.ac.id',
                'is_active' => true,
            ],

            // ── Swasta / Industri / Teknologi ────────────────────────────────
            [
                'name'      => 'PT. ASABA',
                'logo'      => 'klien/1762332893_1744616432_4.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Advance Technology Solution',
                'logo'      => 'klien/1762332783_1744616498_9.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Dyfco Energy',
                'logo'      => 'klien/1762332669_1744616587_13.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Guna Rogate Indah',
                'logo'      => 'klien/1762332870_1744616444_5.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Hydro Techno Utama',
                'logo'      => 'klien/1762332686_1744616573_12.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Linde Indonesia',
                'logo'      => 'klien/1762332647_1744616601_14.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Madya Perdana Prima',
                'logo'      => 'klien/1762332823_1744616472_7.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Medco Energi',
                'logo'      => 'klien/1762333073_1733201971_PT. Medco Energi.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Multi Fabrindo Gemilang',
                'logo'      => 'klien/1762333262_1731312627_PT. Multi Fabrindo Gemilang.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. PLN UIB JBT II',
                'logo'      => 'klien/1762332958_1744616407_2.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Teknindo Geosistem Unggul',
                'logo'      => 'klien/1762333028_1733201989_PT.Teknindo Geosistem Unggul.webp',
                'website'   => null,
                'is_active' => true,
            ],
            [
                'name'      => 'PT. Triguna Inti Solusi',
                'logo'      => 'klien/1762332742_1744616550_11.webp',
                'website'   => null,
                'is_active' => true,
            ],
        ];

        foreach ($clients as $data) {
            Client::updateOrCreate(
                ['name' => $data['name']],
                $data
            );
        }

        $this->command->info('✅ ClientSeeder: ' . count($clients) . ' client berhasil di-seed.');
    }
}
