<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Bagaimana Telemetri ADR Menyelamatkan Keamanan Bendungan Ciawi',
                'slug' => 'adr-bendungan-ciawi',
                'excerpt' => 'Studi kasus implementasi Automatic Deformation Recorder di Bendungan Ciawi-Sukamahi yang mampu mendeteksi pergeseran mikro-milimeter secara real-time.',
                'content' => '
    <div class="p-6 rounded-2xl" style="background: #FBE9EC; border-left: 4px solid #C8102E;">
        <p class="text-sm font-medium" style="color: #8B0A1F;">
            <strong>Ringkasan:</strong> Bendungan Ciawi-Sukamahi di Bogor adalah salah satu infrastruktur pengendalian banjir paling kritis di Jabodetabek. Monitoring deformasi struktur bendungan menjadi kebutuhan vital — dan di sinilah ADR Beacon berperan.
        </p>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Latar Belakang</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">
        Bendungan Ciawi dan Sukamahi dibangun sebagai bagian dari sistem pengendalian banjir DKI Jakarta dan sekitarnya. Terletak di hulu Sungai Ciliwung, kedua bendungan ini menampung volume air yang signifikan dan berperan krusial dalam mitigasi banjir.
    </p>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">
        Monitoring keamanan struktural bendungan — khususnya deformasi (pergeseran) — adalah keharusan. Pergeseran sekecil apapun pada tubuh bendungan bisa menjadi indikator awal masalah serius. Metode konvensional yang mengandalkan pengukuran manual periodik memiliki keterbatasan: interval pengukuran panjang, tergantung cuaca, dan rentan human error.
    </p>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Tantangan</h2>
    <div class="grid sm:grid-cols-2 gap-4">
        <div class="flex items-start gap-3 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-2 h-2 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
            <span class="text-sm" style="color: #3A3A3A;">Deteksi pergeseran dalam satuan sub-milimeter</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-2 h-2 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
            <span class="text-sm" style="color: #3A3A3A;">Monitoring 24/7 tanpa interupsi</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-2 h-2 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
            <span class="text-sm" style="color: #3A3A3A;">Transmisi data real-time ke pusat kendali</span>
        </div>
        <div class="flex items-start gap-3 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-2 h-2 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
            <span class="text-sm" style="color: #3A3A3A;">Ketahanan perangkat di kondisi outdoor ekstrem</span>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Solusi: ADR Beacon + STESY</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">
        Beacon Engineering memasang sistem <strong>ADR (Automatic Deformation Recorder)</strong> yang mengkombinasikan <strong>Beacon Logger BL-1100</strong> dengan <strong>Robotic Total Station</strong>. Sistem ini mampu:
    </p>
    <ul class="space-y-2">
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Mendeteksi pergeseran struktur hingga resolusi 0.001mm</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Melakukan pengukuran otomatis multi-axis secara simultan</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Mengirim data real-time ke dashboard STESY 24/7</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Memberikan alert otomatis ketika pergeseran melampaui threshold</span>
        </li>
    </ul>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Hasil & Dampak</h2>
    <div class="grid sm:grid-cols-2 gap-4">
        <div class="p-5 rounded-2xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <span class="text-[10px] uppercase tracking-widest font-semibold" style="color: #9A9A9A;">Resolusi deteksi</span>
            <span class="block font-heading text-2xl font-bold mt-1 font-mono tabular-nums" style="color: #C8102E;">0.001mm</span>
        </div>
        <div class="p-5 rounded-2xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <span class="text-[10px] uppercase tracking-widest font-semibold" style="color: #9A9A9A;">Monitoring</span>
            <span class="block font-heading text-2xl font-bold mt-1" style="color: #C8102E;">24/7 Non-stop</span>
        </div>
        <div class="sm:col-span-2 p-5 rounded-2xl flex items-center justify-between" style="background: #FBE9EC; border: 1px solid rgba(200,16,46,0.1);">
            <div>
                <span class="text-[10px] uppercase tracking-widest font-semibold" style="color: #9A9A9A;">Transmisi data</span>
                <span class="block font-heading text-lg font-bold mt-0.5" style="color: #C8102E;">Real-time ke STESY</span>
            </div>
            <div class="w-2 h-2 rounded-full animate-pulse" style="background: #1B7F3A;"></div>
        </div>
    </div>

    <!-- Testimoni -->
    <div class="relative p-8 rounded-2xl" style="background: rgba(200,16,46,0.04); border: 1px solid rgba(200,16,46,0.08); box-shadow: inset 0 1px 0 rgba(255,255,255,0.5);">
        <div class="absolute top-4 left-6 text-5xl font-heading font-bold" style="color: #C8102E; opacity: 0.1;">"</div>
        <p class="text-sm leading-relaxed mb-4 relative z-10" style="color: #3A3A3A; font-style: italic;">
            "Hasil pengukuran lapangan cukup presisi dan konsisten di lapangan, interface alat mudah dipahami dan intuitif, sangat membantu untuk mendapatkan hasil pengukuran deformasi permukaan bendungan dengan cepat dan akurat."
        </p>
        <div class="flex items-center gap-3 relative z-10">
            <div class="w-9 h-9 rounded-full flex items-center justify-center text-xs font-bold text-white" style="background: #C8102E;">PB</div>
            <div>
                <span class="text-sm font-semibold" style="color: #1A1A1A;">Prahasdipta Bayu Adhi Koesoemo</span>
                <span class="block text-xs" style="color: #7A7A7A;">Kepala Satuan Unit Pengelola Bendungan Ciawi-Sukamahi-Gintung</span>
            </div>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Kesimpulan</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">
        Implementasi ADR Beacon di Bendungan Ciawi-Sukamahi membuktikan bahwa teknologi monitoring deformasi buatan Indonesia mampu memberikan presisi setara standar internasional. Dengan dukungan STESY sebagai platform monitoring terpadu, data deformasi tersedia real-time untuk pengambilan keputusan cepat terkait keamanan bendungan.
    </p>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">
        Proyek ini menjadi referensi kuat bahwa produk lokal — dengan after-sales support langsung dari tim teknis di Yogyakarta — bukan kompromi, melainkan pilihan strategis.
    </p>',
                'thumbnail' => null,
                'category' => 'Studi Kasus',
                'category_color' => '#C8102E',
                'author' => 'Tim Engineering',
                'read_time' => '8 min',
                'tags' => ['ADR', 'STESY'],
                'published_at' => Carbon::parse('2026-04-12'),
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'title' => 'Memahami Standar SNI untuk Sistem Telemetri AWLR di Indonesia',
                'slug' => 'standar-sni-awlr',
                'excerpt' => 'Panduan teknis lengkap mengenai standar SNI yang berlaku untuk pemasangan dan kalibrasi AWLR di pos hidrologi Indonesia.',
                'content' => '
    <div class="p-6 rounded-2xl" style="background: #EBF8FF; border-left: 4px solid #0EA5E9;">
        <p class="text-sm font-medium" style="color: #0369A1;"><strong>Untuk siapa artikel ini:</strong> PPK, Kepala Satuan, engineer di BBWS/BWS, dan vendor telemetri yang akan memasang AWLR pada pos hidrologi standar pemerintah.</p>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Apa Itu AWLR dan Mengapa SNI Penting?</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">AWLR (Automatic Water Level Recorder) adalah perangkat pencatatan ketinggian muka air otomatis yang menjadi tulang punggung sistem monitoring hidrologi Indonesia. Setiap pos hidrologi yang dikelola BBWS, BWS, atau Dinas SDA wajib mengacu pada standar SNI untuk memastikan data yang dihasilkan akurat, konsisten, dan bisa dipertanggungjawabkan.</p>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Standar SNI yang Berlaku</h2>
    <div class="rounded-2xl overflow-hidden" style="border: 1px solid #E5E5E5;">
        <div class="p-5 bg-[#FAFAFA]" style="border-bottom: 1px solid #E5E5E5;">
            <span class="text-xs font-mono font-bold" style="color: #C8102E;">SNI 7716:2011</span>
            <h3 class="font-heading text-sm font-bold mt-1" style="color: #1A1A1A;">Tata cara pemasangan peralatan ukur muka air</h3>
            <p class="text-xs mt-1" style="color: #5C5C5C;">Mengatur lokasi pemasangan, orientasi sensor, proteksi perangkat, dan validasi instalasi.</p>
        </div>
        <div class="p-5 bg-white" style="border-bottom: 1px solid #E5E5E5;">
            <span class="text-xs font-mono font-bold" style="color: #C8102E;">SNI 7741:2011</span>
            <h3 class="font-heading text-sm font-bold mt-1" style="color: #1A1A1A;">Tata cara pengelolaan pos hidrologi</h3>
            <p class="text-xs mt-1" style="color: #5C5C5C;">Mengatur operasional harian pos hidrologi, interval pengukuran, dan pelaporan data.</p>
        </div>
        <div class="p-5 bg-[#FAFAFA]" style="border-bottom: 1px solid #E5E5E5;">
            <span class="text-xs font-mono font-bold" style="color: #C8102E;">SNI 2415:2016</span>
            <h3 class="font-heading text-sm font-bold mt-1" style="color: #1A1A1A;">Tata cara perhitungan debit air sungai</h3>
            <p class="text-xs mt-1" style="color: #5C5C5C;">Standar perhitungan debit menggunakan data level air dari AWLR.</p>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Persyaratan Teknis AWLR Sesuai SNI</h2>
    <div class="grid sm:grid-cols-2 gap-4">
        <div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <span class="text-[10px] uppercase tracking-wider" style="color: #9A9A9A;">Akurasi Minimum</span>
            <span class="block text-sm font-mono font-bold mt-0.5" style="color: #1A1A1A;">±1 cm (level air)</span>
        </div>
        <div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <span class="text-[10px] uppercase tracking-wider" style="color: #9A9A9A;">Resolusi</span>
            <span class="block text-sm font-mono font-bold mt-0.5" style="color: #1A1A1A;">≤ 1 mm</span>
        </div>
        <div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <span class="text-[10px] uppercase tracking-wider" style="color: #9A9A9A;">Interval Data</span>
            <span class="block text-sm font-mono font-bold mt-0.5" style="color: #1A1A1A;">≤ 15 menit</span>
        </div>
        <div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <span class="text-[10px] uppercase tracking-wider" style="color: #9A9A9A;">Penyimpanan Data</span>
            <span class="block text-sm font-mono font-bold mt-0.5" style="color: #1A1A1A;">≥ 1 tahun offline</span>
        </div>
        <div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <span class="text-[10px] uppercase tracking-wider" style="color: #9A9A9A;">Proteksi</span>
            <span class="block text-sm font-mono font-bold mt-0.5" style="color: #1A1A1A;">IP67 atau lebih</span>
        </div>
        <div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <span class="text-[10px] uppercase tracking-wider" style="color: #9A9A9A;">Komunikasi</span>
            <span class="block text-sm font-mono font-bold mt-0.5" style="color: #1A1A1A;">GSM/4G atau satelit</span>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Bagaimana AWLR Beacon Memenuhi SNI?</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">AWLR Beacon (model BL-1100 dan BL-110) dirancang dari awal untuk memenuhi dan melampaui persyaratan SNI:</p>
    <ul class="space-y-2">
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Akurasi ±1mm — 10x lebih presisi dari persyaratan minimum SNI</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">IP68 waterproof — di atas standar IP67 yang disyaratkan</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Interval data konfigurabel 1-60 menit — melebihi kebutuhan 15 menit</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Kapasitas penyimpanan 100.000+ data points</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Multi-konektivitas: 4G/LTE, GSM, opsi satelit</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Terintegrasi STESY untuk akses data online 24/7</span>
        </li>
    </ul>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Tips Pemasangan Sesuai SNI</h2>
    <div class="space-y-3">
        <div class="flex gap-4 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background: #C8102E;"><span class="text-white text-xs font-bold">1</span></div>
            <div>
                <h3 class="text-sm font-bold" style="color: #1A1A1A;">Pemilihan Lokasi</h3>
                <p class="text-xs mt-0.5 leading-relaxed" style="color: #5C5C5C;">Pilih titik di penampang sungai yang lurus minimal 10x lebar sungai. Hindari area turbulensi, sedimentasi tinggi, atau vegetasi rapat.</p>
            </div>
        </div>
        <div class="flex gap-4 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background: #C8102E;"><span class="text-white text-xs font-bold">2</span></div>
            <div>
                <h3 class="text-sm font-bold" style="color: #1A1A1A;">Pemasangan Sensor</h3>
                <p class="text-xs mt-0.5 leading-relaxed" style="color: #5C5C5C;">Sensor pressure transducer harus terlindung dari benturan debris. Gunakan stilling well atau pipa pelindung yang sesuai.</p>
            </div>
        </div>
        <div class="flex gap-4 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background: #C8102E;"><span class="text-white text-xs font-bold">3</span></div>
            <div>
                <h3 class="text-sm font-bold" style="color: #1A1A1A;">Kalibrasi Awal</h3>
                <p class="text-xs mt-0.5 leading-relaxed" style="color: #5C5C5C;">Lakukan kalibrasi terhadap peil tetap (benchmark) terdekat. Catat offset dan faktor koreksi.</p>
            </div>
        </div>
        <div class="flex gap-4 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background: #C8102E;"><span class="text-white text-xs font-bold">4</span></div>
            <div>
                <h3 class="text-sm font-bold" style="color: #1A1A1A;">Validasi Data</h3>
                <p class="text-xs mt-0.5 leading-relaxed" style="color: #5C5C5C;">Bandingkan data AWLR dengan pembacaan manual staff gauge minimal 7 hari setelah pemasangan.</p>
            </div>
        </div>
        <div class="flex gap-4 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background: #C8102E;"><span class="text-white text-xs font-bold">5</span></div>
            <div>
                <h3 class="text-sm font-bold" style="color: #1A1A1A;">Maintenance Berkala</h3>
                <p class="text-xs mt-0.5 leading-relaxed" style="color: #5C5C5C;">Jadwalkan kalibrasi ulang setiap 6-12 bulan sesuai rekomendasi SNI.</p>
            </div>
        </div>
    </div>',
                'thumbnail' => null,
                'category' => 'Artikel Teknis',
                'category_color' => '#0EA5E9',
                'author' => 'Tim Engineering',
                'read_time' => '12 min',
                'tags' => ['AWLR'],
                'published_at' => Carbon::parse('2026-04-05'),
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'STESY 3.0: Fitur Baru yang Mengubah Cara Anda Memantau Infrastruktur',
                'slug' => 'stesy-3-update',
                'excerpt' => 'Pembaruan platform STESY 3.0 membawa AI-powered analytics, multi-tenant dashboard, dan integrasi CCTV real-time.',
                'content' => '
    <div class="p-6 rounded-2xl" style="background: #ECFDF5; border-left: 4px solid #1B7F3A;">
        <p class="text-sm font-medium" style="color: #166534;"><strong>Update terbaru:</strong> STESY 3.0 sudah tersedia untuk semua pengguna Beacon aktif. Migrasi otomatis — tidak perlu instalasi ulang.</p>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Evolusi STESY</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">STESY (Smart Telemetry System) adalah platform monitoring yang menyatukan semua perangkat Beacon — dari AWLR di pos hidrologi sampai ADR di bendungan — dalam satu dashboard. Dengan versi 3.0, STESY mengalami lompatan signifikan dalam kemampuan analitik dan pengalaman pengguna.</p>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Fitur Baru STESY 3.0</h2>
    <div class="grid sm:grid-cols-2 gap-4">
        <div class="group p-5 rounded-xl hover:bg-[#ECFDF5] transition-all" style="border: 1px solid #E5E5E5;">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: #ECFDF5;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1B7F3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
            </div>
            <h3 class="font-heading text-sm font-bold mb-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">AI-Powered Analytics</h3>
            <p class="text-xs leading-relaxed" style="color: #5C5C5C;">Deteksi anomali otomatis menggunakan machine learning. Sistem akan memberi peringatan sebelum threshold kritis tercapai.</p>
        </div>
        <div class="group p-5 rounded-xl hover:bg-[#ECFDF5] transition-all" style="border: 1px solid #E5E5E5;">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: #ECFDF5;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1B7F3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
            </div>
            <h3 class="font-heading text-sm font-bold mb-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">Multi-Tenant Dashboard</h3>
            <p class="text-xs leading-relaxed" style="color: #5C5C5C;">Setiap instansi punya workspace terpisah dengan role-based access. Aman, terisolasi, dan mudah dikelola.</p>
        </div>
        <div class="group p-5 rounded-xl hover:bg-[#ECFDF5] transition-all" style="border: 1px solid #E5E5E5;">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: #ECFDF5;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1B7F3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>
            </div>
            <h3 class="font-heading text-sm font-bold mb-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">Integrasi CCTV Real-time</h3>
            <p class="text-xs leading-relaxed" style="color: #5C5C5C;">Lihat kondisi visual lokasi bersamaan dengan data telemetri. Split screen dashboard + live camera.</p>
        </div>
        <div class="group p-5 rounded-xl hover:bg-[#ECFDF5] transition-all" style="border: 1px solid #E5E5E5;">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: #ECFDF5;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1B7F3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>
            </div>
            <h3 class="font-heading text-sm font-bold mb-1 group-hover:text-[#C8102E] transition-colors" style="color: #1A1A1A;">Progressive Web App</h3>
            <p class="text-xs leading-relaxed" style="color: #5C5C5C;">Akses STESY seperti native app di Android dan iOS tanpa download dari Play Store/App Store.</p>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Perbandingan Versi</h2>
    <div class="rounded-2xl overflow-hidden" style="border: 1px solid #E5E5E5;">
        <div class="grid grid-cols-3 gap-0" style="background: #1A1A1A;">
            <div class="p-3"><span class="text-xs font-semibold text-white">Fitur</span></div>
            <div class="p-3 text-center"><span class="text-xs font-semibold text-white">STESY 2.x</span></div>
            <div class="p-3 text-center"><span class="text-xs font-semibold" style="color: #C8102E;">STESY 3.0</span></div>
        </div>
        <div class="grid grid-cols-3 gap-0 bg-[#FAFAFA]" style="border-bottom: 1px solid #E5E5E5;">
            <div class="p-3"><span class="text-xs" style="color: #3A3A3A;">Dashboard real-time</span></div>
            <div class="p-3 text-center"><span class="text-xs" style="color: #9A9A9A;">Ya</span></div>
            <div class="p-3 text-center"><span class="text-xs font-semibold" style="color: #C8102E;">Ya</span></div>
        </div>
        <div class="grid grid-cols-3 gap-0 bg-white" style="border-bottom: 1px solid #E5E5E5;">
            <div class="p-3"><span class="text-xs" style="color: #3A3A3A;">AI anomaly detection</span></div>
            <div class="p-3 text-center"><span class="text-xs" style="color: #9A9A9A;">—</span></div>
            <div class="p-3 text-center"><span class="text-xs font-semibold" style="color: #C8102E;">Ya</span></div>
        </div>
        <div class="grid grid-cols-3 gap-0 bg-[#FAFAFA]" style="border-bottom: 1px solid #E5E5E5;">
            <div class="p-3"><span class="text-xs" style="color: #3A3A3A;">Multi-tenant</span></div>
            <div class="p-3 text-center"><span class="text-xs" style="color: #9A9A9A;">—</span></div>
            <div class="p-3 text-center"><span class="text-xs font-semibold" style="color: #C8102E;">Ya</span></div>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Cara Mendapatkan STESY 3.0</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">Semua pengguna Beacon aktif dengan kontrak maintenance mendapatkan akses otomatis ke STESY 3.0 — tanpa biaya upgrade tambahan. Migrasi data dari versi sebelumnya dilakukan otomatis oleh tim teknis kami.</p>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">Untuk pengguna baru atau instansi yang ingin mencoba, tersedia <strong>demo langsung</strong> dari tim engineer kami. Cukup hubungi via WhatsApp atau email.</p>',
                'thumbnail' => null,
                'category' => 'Berita Produk',
                'category_color' => '#1B7F3A',
                'author' => 'Tim STESY',
                'read_time' => '5 min',
                'tags' => ['STESY'],
                'published_at' => Carbon::parse('2026-03-28'),
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'title' => 'Implementasi EWS di DAS Citarum: Pelajaran dari Lapangan',
                'slug' => 'ews-citarum',
                'excerpt' => 'Bagaimana sistem peringatan dini multi-sensor berhasil diimplementasikan di salah satu DAS paling kritis di Indonesia.',
                'content' => '
    <div class="p-6 rounded-2xl" style="background: #FEF9C3; border-left: 4px solid #D97706;">
        <p class="text-sm font-medium" style="color: #92400E;"><strong>Konteks:</strong> DAS Citarum melayani 28 juta penduduk di Jawa Barat. Sistem peringatan dini yang andal bukan lagi pilihan — melainkan keharusan.</p>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">DAS Citarum: Sungai Paling Kritis di Jawa Barat</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">Sungai Citarum adalah sungai terpanjang di Jawa Barat dengan catchment area yang meliputi wilayah padat penduduk dan industri. Risiko banjir, longsor, dan pencemaran air menjadi ancaman nyata setiap musim hujan. BBWS Citarum membutuhkan sistem early warning yang bisa mendeteksi dan memperingatkan secara otomatis — dari sensor di hulu sampai sirene di hilir.</p>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Arsitektur Sistem EWS</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">Implementasi menggunakan pendekatan multi-layer dengan komponen berikut:</p>

    <div class="space-y-3">
        <div class="flex gap-4 p-5 rounded-xl" style="border: 1px solid #0EA5E920; background: #0EA5E905;">
            <div class="w-1 shrink-0 rounded-full" style="background: #0EA5E9;"></div>
            <div>
                <h3 class="text-sm font-bold" style="color: #0EA5E9;">Layer 1 — Sensing</h3>
                <p class="text-xs mt-1 leading-relaxed" style="color: #3A3A3A;">AWLR di pos hidrologi hulu untuk monitoring muka air + ARR untuk curah hujan real-time. Data dikirim setiap 5 menit via 4G/LTE.</p>
            </div>
        </div>
        <div class="flex gap-4 p-5 rounded-xl" style="border: 1px solid #1B7F3A20; background: #1B7F3A05;">
            <div class="w-1 shrink-0 rounded-full" style="background: #1B7F3A;"></div>
            <div>
                <h3 class="text-sm font-bold" style="color: #1B7F3A;">Layer 2 — Processing</h3>
                <p class="text-xs mt-1 leading-relaxed" style="color: #3A3A3A;">Beacon Logger BL-1100 mengolah data sensor dan mengirim ke cloud server STESY. AI engine mendeteksi pola anomali.</p>
            </div>
        </div>
        <div class="flex gap-4 p-5 rounded-xl" style="border: 1px solid #D9770620; background: #D9770605;">
            <div class="w-1 shrink-0 rounded-full" style="background: #D97706;"></div>
            <div>
                <h3 class="text-sm font-bold" style="color: #D97706;">Layer 3 — Warning</h3>
                <p class="text-xs mt-1 leading-relaxed" style="color: #3A3A3A;">STESY mengevaluasi threshold dan mengirim perintah ke sirene outdoor. Notifikasi SMS ke PPK, Camat, dan Lurah secara bersamaan.</p>
            </div>
        </div>
        <div class="flex gap-4 p-5 rounded-xl" style="border: 1px solid #C8102E20; background: #C8102E05;">
            <div class="w-1 shrink-0 rounded-full" style="background: #C8102E;"></div>
            <div>
                <h3 class="text-sm font-bold" style="color: #C8102E;">Layer 4 — Response</h3>
                <p class="text-xs mt-1 leading-relaxed" style="color: #3A3A3A;">Dashboard STESY menampilkan status real-time semua stasiun. CCTV live feed untuk verifikasi visual kondisi lapangan.</p>
            </div>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Tantangan di Lapangan</h2>
    <div class="grid sm:grid-cols-2 gap-4">
        <div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <h3 class="text-sm font-bold mb-1" style="color: #1A1A1A;">Konektivitas</h3>
            <p class="text-xs leading-relaxed" style="color: #5C5C5C;">Beberapa pos hidrologi di hulu berada di area dengan sinyal seluler lemah. Solusi: dual-SIM 4G/LTE + opsi modem satelit.</p>
        </div>
        <div class="p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <h3 class="text-sm font-bold mb-1" style="color: #1A1A1A;">Power Supply</h3>
            <p class="text-xs leading-relaxed" style="color: #5C5C5C;">Tidak ada akses PLN di lokasi remote. Solusi: panel surya 100W + baterai deep cycle dengan backup 3 hari tanpa matahari.</p>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Pelajaran Utama</h2>
    <ul class="space-y-2">
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Redundansi konektivitas (dual-SIM + satelit) adalah investasi wajib untuk pos hidrologi di area kritis.</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Maintenance preventif lebih murah daripada respons darurat. Jadwalkan kalibrasi setiap 6 bulan.</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Dashboard yang intuitif mengurangi waktu keputusan PPK dari jam menjadi menit.</span>
        </li>
    </ul>',
                'thumbnail' => null,
                'category' => 'Studi Kasus',
                'category_color' => '#C8102E',
                'author' => 'Tim Engineering',
                'read_time' => '10 min',
                'tags' => ['EWS', 'AWLR', 'ARR'],
                'published_at' => Carbon::parse('2026-03-20'),
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'Panduan Maintenance Perangkat Telemetri: Kapan dan Bagaimana',
                'slug' => 'panduan-maintenance-telemetri',
                'excerpt' => 'Investasi perangkat telemetri tanpa maintenance yang tepat ibarat membeli mobil tanpa servis. Panduan lengkap dari Beacon.',
                'content' => '
    <div class="p-6 rounded-2xl" style="background: #EBF8FF; border-left: 4px solid #0EA5E9;">
        <p class="text-sm font-medium" style="color: #0369A1;"><strong>Penting:</strong> Maintenance berkala bukan pengeluaran — melainkan investasi. Perangkat yang terawat bertahan 2-3x lebih lama dan menghasilkan data yang lebih akurat.</p>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Mengapa Maintenance Penting?</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">Perangkat telemetri beroperasi 24/7 di kondisi outdoor yang keras — panas terik, hujan deras, kelembaban tinggi, dan paparan debris. Tanpa maintenance teratur, akurasi sensor menurun secara gradual, konektivitas terganggu, dan usia operasional berkurang drastis.</p>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Jadwal Maintenance Rekomendasi</h2>
    <div class="rounded-2xl overflow-hidden" style="border: 1px solid #E5E5E5;">
        <div class="p-5 bg-[#FAFAFA]" style="border-bottom: 1px solid #E5E5E5;">
            <div class="flex items-center gap-2 mb-2">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                <h3 class="text-sm font-bold" style="color: #C8102E;">Bulanan</h3>
            </div>
            <ul class="space-y-1">
                <li class="flex items-start gap-2">
                    <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
                    <span class="text-xs" style="color: #3A3A3A;">Inspeksi visual panel surya (keretakan, kotoran)</span>
                </li>
                <li class="flex items-start gap-2">
                    <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
                    <span class="text-xs" style="color: #3A3A3A;">Cek level baterai dan charging status</span>
                </li>
                <li class="flex items-start gap-2">
                    <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
                    <span class="text-xs" style="color: #3A3A3A;">Verifikasi konektivitas data ke STESY</span>
                </li>
                <li class="flex items-start gap-2">
                    <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
                    <span class="text-xs" style="color: #3A3A3A;">Bersihkan housing sensor dari lumut/debris</span>
                </li>
            </ul>
        </div>
        <div class="p-5 bg-white" style="border-bottom: 1px solid #E5E5E5;">
            <div class="flex items-center gap-2 mb-2">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                <h3 class="text-sm font-bold" style="color: #C8102E;">Per 3 Bulan</h3>
            </div>
            <ul class="space-y-1">
                <li class="flex items-start gap-2">
                    <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
                    <span class="text-xs" style="color: #3A3A3A;">Kalibrasi sensor terhadap referensi manual</span>
                </li>
                <li class="flex items-start gap-2">
                    <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
                    <span class="text-xs" style="color: #3A3A3A;">Update firmware data logger (jika tersedia)</span>
                </li>
                <li class="flex items-start gap-2">
                    <div class="w-1.5 h-1.5 rounded-full mt-1.5 shrink-0" style="background: #C8102E;"></div>
                    <span class="text-xs" style="color: #3A3A3A;">Periksa konektor dan kabel — ganti yang korosi</span>
                </li>
            </ul>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">5 Tanda Perangkat Butuh Servis Segera</h2>
    <div class="space-y-3">
        <div class="flex gap-4 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background: #FBE9EC;"><span class="text-xs font-bold" style="color: #C8102E;">1</span></div>
            <div><h3 class="text-sm font-bold" style="color: #1A1A1A;">Data Gap</h3><p class="text-xs mt-0.5 leading-relaxed" style="color: #5C5C5C;">Ada jeda kosong dalam log data yang sebelumnya tidak pernah terjadi — bisa indikasi masalah konektivitas atau power.</p></div>
        </div>
        <div class="flex gap-4 p-4 rounded-xl" style="background: #FAFAFA; border: 1px solid #E5E5E5;">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" style="background: #FBE9EC;"><span class="text-xs font-bold" style="color: #C8102E;">2</span></div>
            <div><h3 class="text-sm font-bold" style="color: #1A1A1A;">Drift Sensor</h3><p class="text-xs mt-0.5 leading-relaxed" style="color: #5C5C5C;">Pembacaan sensor bergeser secara gradual dari nilai referensi — sensor perlu dikalibrasi ulang.</p></div>
        </div>
    </div>

    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Layanan Maintenance Beacon</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">Beacon Engineering menyediakan paket maintenance komprehensif yang mencakup:</p>
    <div class="grid sm:grid-cols-2 gap-3">
        <div class="flex items-center gap-2 p-3 rounded-lg" style="background: #FBE9EC;">
            <svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-xs font-medium" style="color: #3A3A3A;">Kunjungan teknisi ke lokasi</span>
        </div>
        <div class="flex items-center gap-2 p-3 rounded-lg" style="background: #FBE9EC;">
            <svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-xs font-medium" style="color: #3A3A3A;">Kalibrasi sensor dengan sertifikat</span>
        </div>
        <div class="flex items-center gap-2 p-3 rounded-lg" style="background: #FBE9EC;">
            <svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-xs font-medium" style="color: #3A3A3A;">Penggantian suku cadang asli</span>
        </div>
        <div class="flex items-center gap-2 p-3 rounded-lg" style="background: #FBE9EC;">
            <svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-xs font-medium" style="color: #3A3A3A;">Laporan kondisi perangkat</span>
        </div>
    </div>',
                'thumbnail' => null,
                'category' => 'Artikel Teknis',
                'category_color' => '#0EA5E9',
                'author' => 'Tim Maintenance',
                'read_time' => '7 min',
                'tags' => ['Maintenance', 'Kalibrasi'],
                'published_at' => Carbon::parse('2026-03-10'),
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'Vibrating Wire vs Strain Gauge: Mana yang Cocok untuk Bendungan Anda?',
                'slug' => 'vibrating-wire-vs-strain-gauge',
                'excerpt' => 'Perbandingan teknis dua jenis sensor deformasi untuk monitoring keamanan bendungan — kelebihan, kekurangan, dan rekomendasi.',
                'content' => '
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">Pemilihan sensor untuk mengukur tegangan dan deformasi pada bendungan sering kali mengerucut pada dua teknologi: Vibrating Wire (VW) dan Strain Gauge konvensional. Keduanya memiliki prinsip kerja dan karakteristik yang berbeda.</p>
    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Prinsip Kerja Vibrating Wire</h2>
    <p class="text-sm leading-relaxed" style="color: #3A3A3A;">Sensor VW bekerja berdasarkan prinsip frekuensi resonansi. Sebuah kawat baja yang diregangkan akan bergetar pada frekuensi tertentu. Saat struktur mengalami deformasi, regangan kawat berubah, yang menyebabkan perubahan frekuensi resonansi. Sinyal frekuensi ini sangat kebal terhadap pelemahan sinyal di kabel yang panjang.</p>
    <h2 class="font-heading text-2xl font-bold" style="color: #1A1A1A;">Kelebihan Vibrating Wire untuk Bendungan</h2>
    <ul class="space-y-2">
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Kestabilan Jangka Panjang: Sangat stabil dalam hitungan dekade, ideal untuk bendungan.</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Tahan Kabel Panjang: Sinyal frekuensi tidak terpengaruh resistansi kabel (bisa >1000m).</span>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5" style="background: #FBE9EC;">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#C8102E" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-sm" style="color: #3A3A3A;">Tahan Air dan Lingkungan Keras: Cocok ditanam di beton atau tanah (geoteknik).</span>
        </li>
    </ul>',
                'thumbnail' => null,
                'category' => 'Artikel Teknis',
                'category_color' => '#0EA5E9',
                'author' => 'Tim Engineering',
                'read_time' => '7 min',
                'tags' => ['AVWR', 'ADR'],
                'published_at' => Carbon::parse('2026-03-01'),
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'Beacon Dipercaya untuk Monitoring Bendungan IKN',
                'slug' => 'monitoring-bendungan-ikn',
                'excerpt' => 'PT Arta Teknologi Comunindo dipercaya BWS Kalimantan IV untuk memasang sistem telemetri AWLR di Bendungan Sepaku, Ibu Kota Nusantara.',
                'content' => '<p class="text-sm leading-relaxed" style="color: #3A3A3A;">Bendungan Sepaku Semoi merupakan salah satu infrastruktur penyedia air baku utama untuk Ibu Kota Nusantara (IKN). Beacon Engineering bangga dapat berkontribusi dengan menyediakan sistem telemetri AWLR dan ADR untuk memantau ketinggian muka air dan keamanan struktur bendungan secara real-time.</p>',
                'thumbnail' => null,
                'category' => 'Berita Produk',
                'category_color' => '#1B7F3A',
                'author' => 'Humas Beacon',
                'read_time' => '4 min',
                'tags' => ['AWLR', 'STESY'],
                'published_at' => Carbon::parse('2026-02-20'),
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'AWGC: Revolusi Pengelolaan Pintu Air di Indonesia',
                'slug' => 'awgc-revolusi-pintu-air',
                'excerpt' => 'Bagaimana Automatic Water Gate Controller mengubah cara operator mengelola pintu air — dari lapangan ke smartphone.',
                'content' => '<p class="text-sm leading-relaxed" style="color: #3A3A3A;">Pengelolaan pintu air tradisional mengharuskan operator berada di lokasi 24/7. Dengan AWGC (Automatic Water Gate Controller), operasi buka-tutup pintu air dapat dilakukan secara otomatis berdasarkan sensor muka air atau dikendalikan dari jarak jauh via dashboard STESY.</p>',
                'thumbnail' => null,
                'category' => 'Studi Kasus',
                'category_color' => '#C8102E',
                'author' => 'Tim Engineering',
                'read_time' => '9 min',
                'tags' => ['AWGC'],
                'published_at' => Carbon::parse('2026-02-10'),
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'Geothermal Monitoring: APLR di Kawah Ijen bersama Medco Energi',
                'slug' => 'geothermal-monitoring-kawah-ijen',
                'excerpt' => 'Studi kasus implementasi APLR untuk well testing geothermal di Kawah Ijen — tantangan medan ekstrem dan solusi teknis.',
                'content' => '<p class="text-sm leading-relaxed" style="color: #3A3A3A;">Lingkungan geothermal Kawah Ijen menghadirkan tantangan ekstrem: gas korosif (H2S), suhu tinggi, dan lokasi remote. APLR (Automatic Pressure Level Recorder) Beacon dimodifikasi khusus dengan material tahan korosi untuk memantau tekanan sumur (well testing) secara andal bagi Medco Energi.</p>',
                'thumbnail' => null,
                'category' => 'Studi Kasus',
                'category_color' => '#C8102E',
                'author' => 'Tim Engineering',
                'read_time' => '6 min',
                'tags' => ['APLR'],
                'published_at' => Carbon::parse('2026-02-01'),
                'is_active' => true,
                'is_featured' => false,
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
