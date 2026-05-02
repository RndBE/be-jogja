<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'client' => 'BBWS Ciliwung Cisadane',
                'name' => 'Prahasdipta Bayu Adhi Koesoemo',
                'position' => 'Kepala Satuan Unit Pengelola Bendungan Ciawi-Sukamahi-Gintung',
                'organization' => 'BBWS Ciliwung-Cisadane',
                'quote' => 'Perangkat ADR dari Beacon memberikan presisi data deformasi yang sangat kami butuhkan untuk monitoring keamanan bendungan secara real-time. Respons tim teknis mereka terhadap kebutuhan di lapangan sangat cepat dan profesional.',
                'initials' => 'PB',
                'sort_order' => 1,
            ],
            [
                'name' => 'Ali Sukali, S.Sos, S.T, M.Si',
                'position' => 'PPK Bendungan II',
                'organization' => 'Kementerian PUPR',
                'quote' => 'Mitra yang berkomitmen terhadap kualitas buatan anak negeri. Beacon membuktikan bahwa produk lokal mampu bersaing dengan impor, bahkan dalam hal after-sales support jauh lebih unggul karena tim teknisnya ada di Indonesia.',
                'initials' => 'AS',
                'sort_order' => 2,
            ],
            [
                'client' => 'BBWS Serayu Opak',
                'name' => 'Seto Ariwibowo, ST. MT.',
                'position' => 'PPKom Operasi & Pemeliharaan Pos Hidrologi',
                'organization' => 'BBWS Serayu Opak',
                'quote' => 'Akurasi dan konektivitas perangkat Beacon sudah teruji di berbagai kondisi lapangan yang ekstrem. Data terkirim real-time 24 jam, dan ketika ada kendala, tim support selalu bisa diandalkan untuk penyelesaian cepat.',
                'initials' => 'SA',
                'sort_order' => 3,
            ],
        ];

        foreach ($items as $item) {
            $clientName = $item['client'] ?? null;
            unset($item['client']);

            Testimonial::updateOrCreate(
                ['name' => $item['name']],
                [
                    ...$item,
                    'client_id' => $clientName ? Client::where('name', $clientName)->value('id') : null,
                    'is_featured' => true,
                    'is_active' => true,
                ],
            );
        }
    }
}
