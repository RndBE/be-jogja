<?php

namespace Database\Seeders;

use App\Models\SubSolution;
use App\Models\SubSolutionFeature;
use Illuminate\Database\Seeder;

class SubSolutionFeatureSeeder extends Seeder
{
    public function run(): void
    {
        $ss = SubSolution::pluck('id', 'slug');

        $features = [
            // AWLR
            ['sub_solution_id' => $ss['awlr'], 'title' => 'Akurasi Lab-Grade', 'description' => 'Sensor pressure transducer dengan akurasi ±1mm, melebihi standar SNI untuk pos hidrologi.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['awlr'], 'title' => 'Real-time 24/7', 'description' => 'Data terkirim setiap interval yang dikonfigurasi langsung ke dashboard STESY.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['awlr'], 'title' => 'Tahan Iklim Tropis', 'description' => 'IP68 waterproof, teruji di banjir, sungai deras, dan suhu ekstrem Indonesia.', 'sort_order' => 3],
            // AWGC
            ['sub_solution_id' => $ss['awgc'], 'title' => 'Kontrol 100% Online', 'description' => 'Buka tutup pintu air dari mana saja melalui dashboard STESY.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['awgc'], 'title' => 'Multi-Gearbox', 'description' => 'Mendukung torsi tinggi hingga 2x2000 Nm untuk pintu air besar.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['awgc'], 'title' => 'Sensor Terintegrasi', 'description' => 'Level sensor dan limit switch terintegrasi untuk keamanan operasi.', 'sort_order' => 3],
            // AFMR
            ['sub_solution_id' => $ss['afmr'], 'title' => 'Dual Parameter', 'description' => 'Mengukur debit (flow rate) dan level ketinggian air sekaligus.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['afmr'], 'title' => 'Non-Contact', 'description' => 'Sensor non-kontak tanpa bagian yang terendam, minim perawatan.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['afmr'], 'title' => 'Jangkauan Lebar', 'description' => 'Pengukuran kecepatan aliran 0.03-20 m/s untuk berbagai kondisi.', 'sort_order' => 3],
            // ADR
            ['sub_solution_id' => $ss['adr'], 'title' => 'Presisi Tinggi', 'description' => 'Jangkauan ukur hingga 3500 meter dengan akurasi sub-milimeter.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['adr'], 'title' => 'Multi-Target', 'description' => 'Monitoring deformasi dari puluhan prism target secara simultan.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['adr'], 'title' => 'Robotic Total Station', 'description' => 'Menggunakan RTS untuk pengukuran otomatis tanpa operator.', 'sort_order' => 3],
            // AWQR
            ['sub_solution_id' => $ss['awqr'], 'title' => '8 Parameter Sekaligus', 'description' => 'pH, temperatur, ORP, DO, konduktivitas, kekeruhan, dan lainnya.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['awqr'], 'title' => 'Kedalaman 61m', 'description' => 'Sensor submersible hingga kedalaman 61 meter.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['awqr'], 'title' => 'Deteksi Pencemaran', 'description' => 'Identifikasi cepat perubahan kualitas air secara real-time.', 'sort_order' => 3],
            // AVWR
            ['sub_solution_id' => $ss['avwr'], 'title' => 'Multi-Channel', 'description' => 'Mampu mengukur data dari puluhan sensor vibrating wire sekaligus.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['avwr'], 'title' => 'Long-Term Monitoring', 'description' => 'Dirancang untuk pemantauan jangka panjang struktur bendungan.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['avwr'], 'title' => 'Expandable', 'description' => 'Dapat diperluas untuk mendukung aplikasi pengukuran lebih luas.', 'sort_order' => 3],
            // ARR
            ['sub_solution_id' => $ss['arr'], 'title' => 'Magnetic Hall Effect', 'description' => 'Sensor berbasis Magnetic Hall Effect dengan resolusi 0.2mm.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['arr'], 'title' => 'Self-Emptying', 'description' => 'Tipping bucket otomatis mengosongkan diri, minim perawatan.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['arr'], 'title' => 'Akurasi ±2%', 'description' => 'Data curah hujan presisi tinggi untuk analisis hidrometeorologi.', 'sort_order' => 3],
            // AWR
            ['sub_solution_id' => $ss['awr'], 'title' => '8 Parameter Cuaca', 'description' => 'Suhu, kelembaban, tekanan udara, kecepatan & arah angin, dll.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['awr'], 'title' => 'IP65 Outdoor', 'description' => 'Kokoh untuk penggunaan luar ruangan dalam segala cuaca.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['awr'], 'title' => 'Terintegrasi STESY', 'description' => 'Dashboard monitoring cuaca real-time melalui STESY.', 'sort_order' => 3],
            // EWS
            ['sub_solution_id' => $ss['ews'], 'title' => '4 Level Peringatan', 'description' => 'Sistem eskalasi bertingkat dari Normal hingga Bahaya.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['ews'], 'title' => 'Suara 117 dB', 'description' => 'Sound buzzer keras hingga 117 dB, efektif untuk area luas.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['ews'], 'title' => 'Siaga 24/7', 'description' => 'Sistem peringatan aktif non-stop tanpa intervensi manual.', 'sort_order' => 3],
            // APLR
            ['sub_solution_id' => $ss['aplr'], 'title' => 'Tekanan Tinggi', 'description' => 'Pengukuran tekanan hingga 3000 psi untuk aplikasi geothermal.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['aplr'], 'title' => 'Sensitivitas Tinggi', 'description' => 'Deteksi fluktuasi kecil untuk monitoring pipa dan reservoir.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['aplr'], 'title' => 'Tanpa Intervensi', 'description' => 'Monitoring otomatis penuh tanpa kunjungan lapangan.', 'sort_order' => 3],
            // STESY
            ['sub_solution_id' => $ss['smart-telemetry-system'], 'title' => 'Open API', 'description' => 'Integrasi fleksibel dengan sistem pihak ketiga via REST API.', 'sort_order' => 1],
            ['sub_solution_id' => $ss['smart-telemetry-system'], 'title' => 'RBAC & Audit Log', 'description' => 'Kontrol akses berbasis peran dengan pencatatan aktivitas lengkap.', 'sort_order' => 2],
            ['sub_solution_id' => $ss['smart-telemetry-system'], 'title' => 'Ekspor Data', 'description' => 'Unduh data monitoring dalam berbagai format untuk pelaporan.', 'sort_order' => 3],
        ];

        foreach ($features as $f) {
            SubSolutionFeature::create($f);
        }
    }
}
