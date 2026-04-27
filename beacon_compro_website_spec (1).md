# PANDUAN WEBSITE MARKETING — BEACON ENGINEERING

> Spesifikasi website company profile yang dirancang sebagai **alat marketing aktif**, bukan sekedar etalase produk. Dokumen ini untuk agent pembangun website.
>
> **Posisi strategis:** Beacon Engineering = pionir telemetri pintar buatan Indonesia. Website harus menjual narasi ini sekuat menjual produknya.

---

## 1. STRATEGI MARKETING & TARGET MARKET

### 1.1 Siapa yang kita kejar (3 persona utama)

**Persona A — "Pak Engineer PPK"** (decision maker teknis di pemerintah)
- Posisi: PPK / Kepala Satuan / Engineer di BBWS, BWS, Dinas SDA, Dinas PU
- Umur 35–55, banyak akses website dari laptop kantor & HP saat survey lapangan
- Yang dia cari: bukti spesifikasi sesuai SNI/standar, track record di proyek serupa, kepastian after-sales
- Yang membuat dia tertarik: foto instalasi nyata di bendungan, testimoni dari sesama PPK, daftar BBWS yang sudah pakai
- Yang membuat dia ragu: produk impor mahal & lambat support, vendor lokal yang spec-nya masih meragukan
- **Pesan kunci untuk dia:** "Sudah dipakai BBWS X, Y, Z. Garansi maintenance + kalibrasi. Tim teknis di Jogja, datang ke lapangan."

**Persona B — "Bu Procurement BUMN Konstruksi"** (decision maker komersial)
- Posisi: tim procurement/engineering di Waskita, Hutama Karya, Brantas Abipraya, PP, Adhi Karya, Wijaya Karya, Nindya, PLN
- Yang dia cari: vendor yang bisa deliver tepat waktu, dokumentasi lengkap, harga kompetitif vs impor
- Yang membuat dia tertarik: list proyek BUMN yang sudah jalan, testimoni dari direksi, kelengkapan sertifikasi
- **Pesan kunci untuk dia:** "Mitra 8+ BUMN konstruksi. Hak cipta lokal, harga kompetitif, after-sales langsung."

**Persona C — "Mas Engineer Swasta"** (energy, mining, geothermal, konsultan)
- Posisi: engineer di Medco, Linde, konsultan geoteknik, kontraktor swasta
- Yang dia cari: solusi spesifik (geothermal pressure, vibrating wire, deformation) yang impor biasanya mahal
- **Pesan kunci untuk dia:** "Spec setara impor, lead time 1/3 nya, support langsung dari engineer Indonesia."

### 1.2 Core marketing message

Ini benang merah yang harus konsisten di seluruh website:

> **"Setiap bendungan, sungai, dan stasiun cuaca strategis di Indonesia layak dipantau dengan teknologi yang dimengerti, dirawat, dan dimiliki anak bangsa sendiri."**

Tiga pilar pesan turunannya:
1. **Lokal yang andal** — bukan kompromi, tapi pilihan strategis. Hak cipta sendiri, R&D di Indonesia.
2. **Terbukti di skala nasional** — 300+ proyek, 200+ partner, 14 tahun, dari Aceh sampai Papua, dari IKN sampai Ijen.
3. **Satu ekosistem, bukan sekedar alat** — STESY mengikat semua perangkat jadi satu platform monitoring real-time.

### 1.3 Funnel website

```
AWARENESS  →  CONSIDERATION  →  DECISION  →  CONVERSION
Home          Solusi/Produk     Proyek       Konsultasi
Wawasan       STESY page        Bandingkan   WhatsApp
              Testimoni                       Form kontak
```

Setiap halaman harus tahu posisinya di funnel ini dan punya CTA yang sesuai.

---

## 2. IDENTITAS VISUAL — MERAH PUTIH

### 2.1 Filosofi warna
Merah-putih bukan pilihan estetika random — ini **statement positioning**. Beacon adalah perangkat strategis untuk infrastruktur negara, dibuat di Indonesia. Merah-putih memperkuat narasi "buatan anak bangsa" tanpa harus diucapkan terus-menerus.

### 2.2 Palet warna

| Token | Hex | Penggunaan |
|---|---|---|
| **Merah Utama** | `#C8102E` | CTA primer, header brand element, accent strategis, hover state penting |
| **Merah Gelap** | `#8B0A1F` | Hover state CTA, footer dark mode, heading dramatic |
| **Merah Lembut** | `#FBE9EC` | Background section ringan, badge soft, hover card |
| **Putih** | `#FFFFFF` | Background utama, surface card |
| **Putih Tulang** | `#FAFAFA` | Background section selang-seling |
| **Abu Tinta** | `#1A1A1A` | Heading, body text utama |
| **Abu Sedang** | `#5C5C5C` | Body text sekunder, caption |
| **Abu Garis** | `#E5E5E5` | Border, divider |
| **Hijau Sukses** | `#1B7F3A` | Status "online", indikator sehat |
| **Kuning Peringatan** | `#F5A623` | Indikator EWS level menengah |

**Aturan penggunaan merah:**
- Merah TIDAK boleh dominan visual (max 15-20% area). Dominasi harus putih + abu tinta.
- Merah DIPAKAI di: tombol CTA, link aktif, garis bawah heading penting, ikon kategori unggulan, accent pada angka kepercayaan, badge "TERBUKTI", border kartu featured.
- Merah JANGAN DIPAKAI di: large background block (kecuali CTA strip penutup), body text panjang, gradient norak.

### 2.3 Tipografi
- **Heading:** Plus Jakarta Sans Bold/ExtraBold — bagus untuk Indonesian content, modern, kuat.
- **Body:** Inter Regular/Medium — universal, readability tinggi.
- **Numerik (counter, spec):** JetBrains Mono atau IBM Plex Mono — bikin angka teknis terlihat presisi.

### 2.4 Treatment visual khas
- **Garis merah tipis 4px** sebagai divider section penting (mirip pita merah-putih yang dibalik horizontal).
- **Bendera mini** atau ikon merah kecil di samping label "Buatan Indonesia" / "Produk Lokal".
- **Foto dominan hitam-putih dengan satu titik aksen merah** (cth. lampu indikator EWS yang menyala merah di foto bendungan grayscale) — bagus untuk hero & visual storytelling.
- **Modern, tidak kaku.** Lihat **Section 11 — Modern Design Language** untuk detail gradasi, motion, glassmorphism, dan efek kontemporer lainnya yang dipakai di seluruh website.

---

## 3. STRUKTUR HEADER & NAVIGASI

### 3.1 Header — bukan sekedar nav, tapi statement

**Top utility bar (tipis, di atas main header):**
Strip merah `#C8102E` setinggi 32px berisi:
- Kiri: `Sistem Telemetri Buatan Indonesia · Sejak 2013`
- Kanan: `(0274) 4986899` · `WA 0811-2850-9986` · `info@bejogja.com`

Strip ini langsung menanam 2 hook: kebanggaan lokal + akses kontak instan.

**Main header (putih, sticky, shrink saat scroll):**
- **Kiri:** Logo Beacon Engineering + tagline kecil "Smart Telemetry Systems"
- **Tengah:** Menu navigasi
- **Kanan:** Tombol CTA merah "Konsultasi Gratis" + ikon search

**Menu navigasi (urutan dipikirin secara funnel):**

```
Beranda  |  Solusi ▾  |  Proyek  |  Tentang Kami ▾  |  Wawasan ▾  |  Kontak
```

Penjelasan urutan:
1. **Solusi** di posisi #2 karena ini magnet utama pengunjung — mereka cari produk/solusi sebelum cari tentang perusahaan.
2. **Proyek** di #3 — bukti sosial langsung, ini yang meyakinkan PPK & procurement.
3. **Tentang Kami** baru di #4 — pengunjung B2B baru peduli "siapa kalian" setelah lihat solusi & bukti.
4. **Wawasan** (rebrand dari "Publikasi") — terdengar lebih mendalam dan thought leadership-y daripada "Publikasi".
5. **Kontak** di paling kanan, plus tombol CTA merah yang lebih dominan.

### 3.2 Mega-menu "Solusi" — dirancang sebagai alat penjualan

Saat klik "Solusi", muncul mega-menu lebar yang BUKAN sekedar daftar link. Strukturnya:

```
┌────────────────────────────────────────────────────────────────┐
│  CARI SOLUSI BERDASARKAN KEBUTUHAN ANDA                         │
│                                                                  │
│  Water Security        Weather Forecast      Early Warning      │
│  Aman kan air &        Pantau cuaca          Cegah bencana      │
│  bendungan             akurat                                    │
│  ▸ AWLR, AWGC, AFMR    ▸ AWR, ARR             ▸ EWS              │
│  ▸ ADR, AWQR, AVWR     Lihat semua →          Lihat semua →      │
│  Lihat semua →                                                   │
│                                                                  │
│  Pressure Measurement  STESY Application                         │
│  Tekanan presisi tinggi Platform monitoring 1-pintu              │
│  ▸ APLR                ▸ Smart Telemetry System                  │
│  Lihat semua →         Lihat semua →                             │
│                                                                  │
│  ─────────────────────────────────────────────────────────────  │
│                                                                  │
│  PALING DICARI                            BUTUH KONSULTASI?      │
│  • AWLR untuk bendungan                   Tim teknis kami siap   │
│  • EWS untuk wilayah rawan banjir         membantu memilih       │
│  • STESY untuk integrasi monitoring       solusi yang tepat.     │
│                                            [Chat WhatsApp] →     │
└────────────────────────────────────────────────────────────────┘
```

Mega-menu ini berfungsi sebagai mini sales-tool: ada deskripsi value, "paling dicari" untuk shortcut decision, dan WhatsApp di pojok untuk yang masih bingung.

### 3.3 Mega-menu "Tentang Kami"
- Profil Perusahaan
- Visi & Misi
- Sertifikasi
- Klien & Mitra
- Tim & Karier *(opsional fase 2)*

### 3.4 Mega-menu "Wawasan"
- Studi Kasus
- Artikel Teknis
- Berita Proyek
- Glosarium Telemetri *(SEO play — engineer search "apa itu vibrating wire" → ketemu Beacon)*

### 3.5 Mobile header
Hamburger di kiri, logo di tengah, ikon WhatsApp merah floating di kanan. Saat hamburger dibuka, full-screen overlay putih dengan menu vertikal, accordion expand untuk Solusi/Tentang/Wawasan, plus utility links (telepon, alamat, sosmed) di bawah.

---

## 4. HOME PAGE — DIRANCANG SEBAGAI HALAMAN PENJUAL

Tiap section di home punya tugas konversi yang spesifik.

### 4.1 Hero Section (tugas: hook + positioning dalam 5 detik)

**Layout:** Split 60/40 atau full-bleed dengan overlay text.

**Background:** Foto/video instalasi data logger di bendungan dengan filter sedikit gelap. Atau sequence: drone shot bendungan → close-up sensor → dashboard STESY menyala. Loop 8 detik.

**Headline (besar, bold, putih dengan accent merah):**
> # Pantau Setiap Tetes, Setiap Getaran, Setiap Awan.
> ## Sistem telemetri pintar **buatan Indonesia** untuk infrastruktur paling strategis negeri ini.

Kata "buatan Indonesia" diberi underline merah tipis atau warna merah.

**Subheadline:**
> Dari Bendungan IKN sampai Kawah Ijen, dari DAS Bogowonto sampai Bendungan Keureuto Aceh — perangkat dan platform Beacon merekam data, mendeteksi bahaya, dan mengirim peringatan 24 jam non-stop.

**CTA dual:**
- Primer (merah solid): "Konsultasi Gratis dengan Engineer Kami →"
- Sekunder (outline putih): "Lihat 5 Pilar Solusi"

**Trust strip horizontal di bawah hero (semi-transparan):**
`14 Tahun · 300+ Proyek · 200+ Partner · 30+ BBWS & BUMN Mempercayai Kami`

### 4.2 Section "Mengapa Beacon" (tugas: positioning differentiator)

Background putih tulang. Heading di tengah:

> ## Bukan Sekedar Pilihan Lokal. Pilihan yang Lebih Tepat untuk Indonesia.

Tiga kolom value proposition (dengan ikon merah outline):

**1. Dimengerti oleh Tangan Indonesia**
Hak cipta sendiri. R&D di Yogyakarta. Tim teknis yang bisa datang ke lokasi proyek dalam hitungan hari, bukan bulan.

**2. Terbukti di Infrastruktur Strategis**
Dipasang di Bendungan IKN, Ciawi-Sukamahi, Cipanas, Keureuto, Kawah Ijen, dan ratusan titik lainnya. Bertahan di iklim tropis, banjir, dan suhu ekstrem.

**3. Satu Ekosistem, Real-time**
Semua perangkat tersambung ke STESY — platform monitoring tunggal, lintas Windows, macOS, iOS, Android. Plus integrasi CCTV.

### 4.3 Section "5 Pilar Solusi" (tugas: arahkan ke kategori produk)

Heading:
> ## Lima Lini Pertahanan untuk Air, Cuaca, dan Struktur Indonesia

Subheading:
> Dari pemantauan ketinggian air bendungan hingga peringatan dini bencana — solusi Beacon dirancang untuk skenario nyata di lapangan Indonesia.

Grid 5 kartu (di desktop: 3 atas + 2 bawah, atau carousel horizontal):

| Pilar | Hook copy | CTA |
|---|---|---|
| **Water Security** | "Amankan setiap meter kubik air. Dari ketinggian, debit, kualitas, hingga deformasi struktur penampungnya." | Eksplor Water Security → |
| **Weather Forecast** | "Cuaca tidak bisa dilawan, tapi bisa diprediksi. Stasiun cuaca otomatis untuk pertanian, bendungan, dan aviasi." | Eksplor Weather Forecast → |
| **Early Warning** | "Detik pertama menentukan nyawa. Sistem peringatan dini multi-level untuk wilayah rawan." | Eksplor Early Warning → |
| **Pressure Measurement** | "Akurasi tinggi untuk medan ekstrem — geothermal, well testing, infrastruktur kritis." | Eksplor Pressure Measurement → |
| **STESY Application** | "Platform tunggal yang mengikat semua perangkat menjadi satu dashboard real-time." | Pelajari STESY → |

Setiap kartu hover → border merah tipis muncul + sedikit lift.

### 4.4 Section "STESY Spotlight" (tugas: jual SaaS-style platform)

Background gradient halus dari putih ke merah sangat soft. Layout split 50/50:

**Kiri:** Mockup dashboard STESY di laptop + iPhone berdampingan.

**Kanan:**
> ## Satu Layar untuk Memantau Semua Aset Anda
>
> **STESY — Smart Telemetry System**
>
> Bayangkan: ketinggian air Bendungan A, curah hujan Stasiun B, deformasi Lereng C, status pintu air Bendung D — semua di satu dashboard. Real-time. Dari mana saja.
>
> ✓ Cross-platform: Windows, macOS, iOS, Android
> ✓ Grafik historis & analytics
> ✓ Integrasi monitoring CCTV
> ✓ Alarm otomatis untuk threshold kritis
>
> [Lihat Demo STESY] [Pelajari Lebih Lanjut →]

### 4.5 Section "Bukti di Lapangan" (tugas: social proof berat)

Background putih. Heading:
> ## Kami Sudah di Sana, Kami Tetap di Sana.

Subheading:
> Tiga ratus lebih proyek tersebar dari Aceh sampai Papua. Inilah beberapa yang membentuk siapa kami hari ini.

**Layout: peta Indonesia stylized di kiri (40%) + carousel proyek di kanan (60%).**

Peta menampilkan pin merah di lokasi proyek besar. Hover pin → preview proyek. Klik → halaman detail.

Carousel kanan menampilkan proyek-proyek unggulan dengan kartu:
- Foto proyek (lapangan asli)
- Tahun (badge merah)
- Nama proyek
- Klien (logo + nama)
- Produk yang dipakai (chip)

Proyek prioritas yang harus tampil (paling impressive):
1. Telemetri ADR Bendungan Ciawi-Sukamahi (2024) — BBWS Ciliwung-Cisadane
2. Telemetri AWLR Bendungan Sepaku IKN (2024) — BWS Kalimantan IV
3. Telemetri APLR Kawah Ijen (2023) — PT Medco Energi
4. Telemetri AWGC Sungai Cisadane BKC 3 (2023) — BBWS Ciliwung-Cisadane
5. Sistem Telemetri Bendungan Keureuto Aceh — BWS Sumatera I

Tombol "Jelajahi Semua 300+ Proyek →" di bawah carousel.

### 4.6 Section "Logo Klien" (tugas: parade kepercayaan)

Heading singkat:
> ## Dipercaya Lembaga & Korporasi yang Memegang Tanggung Jawab Besar

Marquee berjalan (2 baris, arah berlawanan) dengan logo grayscale yang menyala merah saat hover:

**Baris 1 (Pemerintah/BBWS):** BBWS Ciliwung-Cisadane, BBWS Serayu Opak, BBWS Brantas, BBWS Bengawan Solo, BBWS Cimanuk-Cisanggarung, BBWS Citanduy, BBWS Citarum, BWS Sumatra I, BWS Kalimantan IV, BWS NT1, BWS NT2, BWS Papua Barat, BWS Sulawesi I, Perum Jasa Tirta I, Perum Jasa Tirta II, Dinas PUSDA Jatim, Dinas SDA DKI, SDA ESDM DIY

**Baris 2 (BUMN & Swasta):** Waskita Karya, Hutama Karya, Brantas Abipraya, Adhi Karya, Wijaya Karya, PP, Nindya Karya, PLN UIB JBT II, Linde Indonesia, Medco Energi, Dyfco Energy, Hydro Techno Utama, ASABA, Teknindo Geosistem, Multi Fabrindo Gemilang, UGM

### 4.7 Section "Suara Mitra" (tugas: testimoni terkuat)

Background putih tulang. Heading:
> ## "Mitra yang Berkomitmen Terhadap Kualitas Buatan Anak Negeri."

(Kutipan ini dari Ali Sukali PPK Bendungan II — pakai sebagai heading karena POWERFUL.)

Layout: 3 testimoni unggulan dalam grid kartu besar. Pakai verbatim dari profil:
1. **Prahasdipta Bayu Adhi Koesoemo** — Kepala Satuan Unit Pengelola Bendungan Ciawi-Sukamahi-Gintung *(testimoni soal ADR — tekankan presisi)*
2. **Ali Sukali, S.Sos, S.T, M.Si** — PPK Bendungan II *(testimoni "buatan anak negeri" — tekankan trust)*
3. **Seto Ariwibowo, ST. MT.** — PPKom Operasi & Pemeliharaan Pos Hidrologi *(testimoni soal akurasi & konektivitas)*

Tombol "Lihat semua testimoni →" di bawah.

### 4.8 Section "Layanan Beyond Hardware" (tugas: tutup keberatan "after-sales gimana?")

Heading:
> ## Kami Tidak Berhenti Setelah Perangkat Terpasang.

4 kartu horizontal dengan ikon merah:

1. **Telemetri Berbasis AI** — Pengumpulan, analisa, dan komparasi data otomatis untuk insight yang lebih dalam.
2. **Garansi & Maintenance** — Pengecekan teknis, kebersihan, penggantian suku cadang, kalibrasi, uji fungsional.
3. **Monitoring Terintegrasi** — Akses lewat satu aplikasi STESY, tidak peduli berapa banyak perangkat.
4. **Konsultasi Teknis** — Tim engineer kami membantu sejak fase desain sampai operasional.

### 4.9 Section "Wawasan Terbaru" (tugas: SEO + thought leadership)

3 artikel terbaru dari /wawasan dengan thumbnail. Tombol "Baca Wawasan Lainnya →".

### 4.10 CTA Penutup (tugas: konversi final)

**Band merah penuh.** Headline besar putih:

> ## Punya Bendungan, Sungai, atau Stasiun Cuaca yang Perlu Dipantau?
>
> Bicara langsung dengan engineer kami. Konsultasi pertama selalu gratis — kami akan bantu memetakan kebutuhan, menyarankan konfigurasi, dan memberikan estimasi.

Dua tombol besar:
- **"Chat WhatsApp"** (putih solid, teks merah)
- **"Kirim Email"** (outline putih)

Di bawahnya, alamat kantor dan jam operasional dalam teks kecil.

---

## 5. KEKUATAN COPYWRITING

### 5.1 Aturan headline
- **Pakai kata kerja aksi.** "Pantau", "Amankan", "Cegah", "Deteksi" — bukan "kami menyediakan".
- **Spesifik & konkret.** Sebut bendungan/lokasi nyata. "Dari IKN sampai Ijen" lebih kuat daripada "di seluruh Indonesia".
- **Konflik & resolusi.** "Cuaca tidak bisa dilawan, tapi bisa diprediksi." Buat tegangan dulu, lalu kasih solusi.
- **Pakai angka.** "300+ proyek" bukan "banyak proyek".

### 5.2 Aturan body copy
- **Maksimal 2-3 kalimat per paragraf.** Engineer scan, bukan baca.
- **Hindari jargon marketing kosong.** "Solusi terdepan", "world-class", "best-in-class" — JANGAN. Ganti dengan bukti.
- **Pakai "Anda" bukan "user/pelanggan".**
- **Sebut nama produk klien dengan akurat.** BBWS bukan "balai", PPK bukan "pejabat".

### 5.3 Aturan CTA copy
| Hindari | Pakai |
|---|---|
| "Hubungi Kami" | "Konsultasi Gratis dengan Engineer Kami" |
| "Pelajari Lebih Lanjut" | "Lihat Spesifikasi Lengkap" / "Eksplor [Kategori]" |
| "Daftar Sekarang" | "Minta Demo STESY" |
| "Submit" | "Kirim Permintaan Konsultasi" |

### 5.4 Bank kata kunci yang harus sering muncul
**Power words Beacon:** real-time, 24 jam non-stop, presisi, terintegrasi, buatan Indonesia, pionir, akurasi tinggi, online, lintas platform, terbukti, hak cipta sendiri, anak bangsa, lapangan, ekstrem.

**Hindari:** sinergi, holistic, ekosistem digital terdepan, transformasi, revolusi (terlalu marketing-y).

---

## 6. HALAMAN-HALAMAN LAIN (DENGAN ARAHAN MARKETING)

### 6.1 Halaman Kategori Solusi (cth. /solusi/water-security)

**Hero kategori dirancang sebagai jawaban atas masalah konkret:**

Cth. Water Security:
> ## Air adalah Hidup. Dan Risiko.
>
> Banjir, kekeringan, jebolnya tanggul, pencemaran sungai, deformasi bendungan — semua bermula dari satu hal yang sama: data yang terlambat, atau tidak ada sama sekali.
>
> **Enam perangkat Water Security Beacon dirancang supaya Anda tidak pernah terlambat lagi.**

Lalu grid 6 produk dengan deskripsi yang punya hook konkret per produk.

**Pola hook untuk tiap produk (di kartu kategori):**

| Produk | Hook (1 kalimat) |
|---|---|
| AWLR | "Setiap kenaikan 1 cm muka air, terekam dan terkirim dalam hitungan detik." |
| AWGC | "Buka-tutup pintu air dari smartphone Anda. Tidak perlu lagi operator turun ke lapangan saat hujan deras tengah malam." |
| AFMR | "Debit air bukan tebakan — ukur akurat, 24 jam, tanpa interupsi." |
| ADR | "Bendungan tidak runtuh tiba-tiba. Mereka mengirim sinyal kecil dulu — pastikan Anda yang pertama tahu." |
| AWQR | "Logam berat, sedimentasi, limbah — terdeteksi sebelum sampai ke ledeng masyarakat." |
| AVWR | "Puluhan sensor vibrating wire, dibaca simultan, dipantau dari satu layar." |

### 6.2 Halaman Detail Produk

Struktur dengan tone marketing:

**1. Hero produk** — bukan "Spesifikasi AWLR", tapi:
> # Karena Setiap Sentimeter Berarti
> ## AWLR — Automatic Water Level Recorder
> Pengukuran ketinggian muka air otomatis, 100% online, terkirim langsung ke STESY.

**2. "Untuk Anda yang Bertanggung Jawab Atas..."**
- Sistem irigasi yang harus presisi
- Bendungan yang tidak boleh kehilangan data sehari pun
- Sungai yang melayani jutaan jiwa
- Sumur pantau yang tersebar dan sulit diakses

**3. "Mengapa AWLR Beacon"** — 4-6 keunggulan dengan ikon, copy aktif.

**4. Spesifikasi Teknis** — tabel rapi, plus tombol "Download Datasheet PDF".

**5. Varian** — jika ada (BL-1100 / BL-110).

**6. "Sudah Terpasang Di"** — galeri proyek nyata yang pakai produk ini.

**7. "Tertarik?"** — CTA dengan teks personal: "Tim engineer kami akan bantu Anda memilih konfigurasi yang tepat untuk lokasi proyek Anda."

### 6.3 Halaman Proyek (/proyek)

**Hero:**
> # 300+ Titik. Satu Indonesia.
> Setiap pin di peta ini adalah cerita tentang bendungan yang dijaga, sungai yang dipantau, atau wilayah yang dilindungi dari bencana.

**Filter prominent di atas:** kategori, produk, tahun, jenis klien.

**Map Indonesia** dengan pin merah-aktif. Klik pin → side panel slide-in dengan detail.

**Grid proyek di bawah** dengan kartu yang sudah dibahas.

### 6.4 Halaman Tentang Kami (/tentang-kami)

**Hero:**
> # Kami Mulai Tahun 2013 dengan Satu Pertanyaan:
> ## "Kenapa monitoring infrastruktur strategis Indonesia harus selalu bergantung pada perangkat impor?"

Lalu narasi:
> Empat belas tahun kemudian, jawaban itu terbentang dari Aceh sampai Papua — dalam wujud lebih dari 300 sistem telemetri yang berjalan setiap hari, dirancang dan dirakit oleh tangan-tangan Indonesia.

Lanjut ke timeline, visi-misi, 3 bidang kontribusi (Water/Dam/Structure Management), foto kantor & tim di Kalasan.

### 6.5 Halaman Wawasan / Studi Kasus

Format: blog-style tapi technical. Setiap artikel diakhiri dengan CTA kontekstual: "Punya kebutuhan monitoring serupa? Bicara dengan tim kami →"

---

## 7. ELEMEN KONVERSI YANG SELALU ADA

### 7.1 Floating WhatsApp button
Selalu di kanan bawah, semua halaman. Bulat, merah `#C8102E`, ikon WhatsApp putih. Klik → buka WA dengan pesan template kontekstual berdasarkan halaman:
- Halaman home: "Halo Beacon, saya tertarik dengan solusi telemetri Anda."
- Halaman produk AWLR: "Halo Beacon, saya ingin konsultasi tentang AWLR untuk proyek [...]."
- Halaman proyek: "Halo Beacon, saya melihat portfolio proyek [...] dan tertarik untuk solusi serupa."

### 7.2 Sticky CTA strip mobile
Di mobile, footer sticky 60px berisi 2 tombol setengah-setengah: "WhatsApp" + "Telepon".

### 7.3 Exit intent popup (desktop)
Saat kursor mau keluar tab di home/halaman produk: popup soft dengan offer:
> **Sebelum Pergi...**
>
> Dapatkan **Panduan Memilih Sistem Telemetri yang Tepat** — PDF 12 halaman gratis untuk PPK & engineer.
>
> [Email Anda] [Kirim Saya PDF →]

Lead magnet ini bisa membangun database email untuk nurture campaign.

### 7.4 CTA strip kontekstual di setiap halaman
Bukan hanya footer — tapi inline section "siap berikutnya?" sebelum footer. Copy disesuaikan per halaman.

---

## 8. FOOTER

Background merah gelap `#8B0A1F` atau hitam dengan accent merah. 4 kolom:

**Kolom 1 — Brand:**
- Logo Beacon (white version)
- Tagline: "Pionir Sistem Telemetri Pintar di Indonesia"
- Alamat: Kadirojo I, Purwomartani, Kalasan, Sleman, DIY 55571
- Sosmed: @beacon_engineering

**Kolom 2 — Solusi:**
- Water Security
- Weather Forecast
- Early Warning
- Pressure Measurement
- STESY Application

**Kolom 3 — Perusahaan:**
- Tentang Kami
- Proyek
- Sertifikasi
- Wawasan
- Karier *(jika ada)*

**Kolom 4 — Kontak:**
- Telepon (0274) 4986899
- WhatsApp 0811-2850-9986
- WhatsApp +62 811 2632 151
- Email info@bejogja.com
- Jam: Senin–Jumat, 08:00–17:00 WIB
- Tombol "Konsultasi Sekarang"

**Bottom bar (terpisah dengan garis merah-putih horizontal tipis):**
> © 2026 PT Arta Teknologi Comunindo (Beacon Engineering). All rights reserved.
> Privacy Policy · Terms of Service
> Made with pride in Yogyakarta, Indonesia.

---

## 9. MODERN DESIGN LANGUAGE — JANGAN KAKU, TAPI TETAP B2B

Beacon adalah produk strategis untuk infrastruktur negara, jadi website-nya tidak boleh terlihat seperti template korporat tahun 2015 — tapi juga tidak boleh seperti landing page Web3 yang terlalu playful. Pendekatannya: **modern engineering**, terinspirasi dari brand seperti Linear, Vercel, Stripe, dan Siemens Xcelerator. Bersih, presisi, tapi tidak dingin.

### 9.1 Filosofi: "Confidence with Depth"
Tiga kata kunci yang harus terasa di setiap halaman:
- **Spasial** — layout punya napas, ada layering (foreground/midground/background), bukan flat datar.
- **Hidup** — ada motion halus yang merespons scroll & cursor, tapi tidak distracting.
- **Presisi** — grid disiplin, tipografi tegas, tapi dengan touch yang lembut (rounded corners, soft shadow).

### 9.2 Gradasi — dipakai dengan disiplin

Gradasi adalah salah satu cara paling kuat membuat website terasa modern. Tapi gradasi merah yang norak akan langsung menghancurkan kredibilitas. Aturan:

**Gradasi yang DIPAKAI:**

1. **Hero gradient mesh** — di hero home, gradient halus dari merah gelap `#8B0A1F` di kiri-bawah → merah tua `#5A0613` di kanan-atas → hampir hitam `#0A0A0A` di pojok. Plus overlay foto bendungan dengan multiply blend. Hasilnya: hero yang "deep" dan dramatis tapi tetap bersih.

   ```css
   background:
     radial-gradient(ellipse at 80% 0%, rgba(139,10,31,0.4) 0%, transparent 50%),
     radial-gradient(ellipse at 20% 100%, rgba(200,16,46,0.3) 0%, transparent 50%),
     linear-gradient(180deg, #0A0A0A 0%, #1A0508 100%);
   ```

2. **Subtle red wash** — section CTA penutup pakai `linear-gradient(135deg, #C8102E 0%, #8B0A1F 100%)` — gradasi merah yang tipis 135 derajat, bukan flat merah.

3. **Off-white gradient sections** — antar section putih dan section putih tulang, transisi pakai gradient halus `linear-gradient(180deg, #FFFFFF 0%, #FAFAFA 100%)` supaya tidak ada garis tegas antar section.

4. **Card hover gradient** — kartu produk saat hover dapat gradient border yang berputar perlahan (animated conic gradient dari merah ke transparan). Efeknya seperti "glow tracing" border kartu.

   ```css
   /* Pseudo-element ::before dengan conic-gradient + animation rotate */
   background: conic-gradient(from 0deg, #C8102E, transparent 30%, transparent 70%, #C8102E);
   animation: rotate 4s linear infinite;
   ```

5. **Text gradient untuk angka besar** — counter "300+", "200+", "14 Tahun" pakai `background: linear-gradient(135deg, #C8102E 0%, #1A1A1A 100%); -webkit-background-clip: text;` — angkanya jadi punya depth, tidak flat.

**Gradasi yang TIDAK DIPAKAI:**
- Rainbow gradient (norak)
- Gradasi merah → kuning → oranye seperti API (terlalu loud)
- Glossy "iPhone box" gradient
- Diagonal gradient di tombol kecil (cheap)

### 9.3 Glassmorphism — selektif, di tempat yang tepat

Glassmorphism (efek frosted glass) pakai dengan hemat, hanya di 4 tempat:

1. **Top utility bar** — saat scroll, top bar berubah jadi `backdrop-filter: blur(12px); background: rgba(200,16,46,0.85);` — masih merah tapi terasa floating.

2. **Sticky main header** — saat scroll mulai, header putih jadi `backdrop-filter: blur(20px) saturate(180%); background: rgba(255,255,255,0.75);` — konten di belakangnya buram halus, sangat modern.

3. **Floating CTA card di hero** — kartu kecil "Konsultasi Gratis" yang muncul melayang di atas hero image, pakai glass effect supaya foto bendungan di belakangnya masih kelihatan tapi soft.

4. **Mega-menu dropdown** — dropdown menu pakai glass white dengan soft shadow, bukan solid putih flat.

```css
.glass-surface {
  background: rgba(255, 255, 255, 0.7);
  backdrop-filter: blur(20px) saturate(180%);
  -webkit-backdrop-filter: blur(20px) saturate(180%);
  border: 1px solid rgba(255, 255, 255, 0.3);
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.04);
}
```

### 9.4 Motion & micro-interaction

Website terasa "hidup" karena motion. Tapi engineer benci motion yang berlebihan. Aturannya: **motion harus berfungsi**, bukan dekorasi.

**Motion yang dipakai:**

| Element | Motion | Durasi | Easing |
|---|---|---|---|
| Tombol CTA | scale 1.02 + shadow lift | 200ms | cubic-bezier(0.4, 0, 0.2, 1) |
| Kartu produk hover | lift 8px + border glow | 300ms | ease-out |
| Section masuk viewport | fade + slide up 24px | 600ms | ease-out, stagger 80ms antar element |
| Counter angka | count up dari 0 ke target | 1500ms | ease-out |
| Logo klien marquee | infinite scroll horizontal | 30s | linear |
| Map pin | pulse glow 2x saat halaman load | 1200ms | ease-in-out |
| Mega-menu open | fade + scale 0.98→1.0 | 200ms | ease-out |
| Page transition | fade + 8px shift | 250ms | ease-in-out |
| Image lazy load | blur-up dari LQIP ke full | 400ms | ease-out |
| Scroll progress bar | merah, di top, width 0→100% | linked to scroll | linear |

**Wajib hormati `prefers-reduced-motion: reduce`** — semua animasi di-disable atau dipersingkat untuk user yang sensitif.

### 9.5 Hero section — modern treatment detail

Hero home harus jadi showpiece. Kombinasi yang dipakai:

1. **Background layered:**
   - Layer 1 (bottom): video looping foto drone bendungan dengan filter desaturate 20%
   - Layer 2: gradient mesh merah-hitam (lihat 9.2.1)
   - Layer 3: pattern grid halus (1px dot grid, opacity 8%) — bikin hero terasa technical
   - Layer 4 (top): konten (headline, CTA)

2. **Animated text reveal** — headline muncul dengan word-by-word fade dari bawah, ada underline merah yang "menulis sendiri" di bawah kata "buatan Indonesia" (animated SVG path stroke).

3. **Floating data cards** — di kanan hero, ada 2-3 kartu kecil melayang dengan glass effect yang menampilkan **data dummy real-time** dari STESY (cth. "Bendungan Cipanas · Level: 142.3m · ↑0.2m"). Kartunya gentle floating dengan animasi `transform: translateY()` 6px naik-turun dengan durasi 4 detik. Ini langsung kasih sense bahwa Beacon = real-time monitoring tanpa harus dijelaskan.

4. **Scroll indicator** — di bawah hero, ada chevron merah halus yang bouncing tipis ke bawah, plus teks "Lihat solusi" — undangan natural untuk scroll.

### 9.6 Komponen modern — anatomi detail

**Tombol primer (modern):**
```
- Background: solid #C8102E
- Border-radius: 10px (bukan 4px yang kaku, bukan 999px yang playful)
- Padding: 14px 28px
- Font: 15px, weight 600, letter-spacing -0.01em
- Box-shadow default: 0 1px 2px rgba(200,16,46,0.1), 0 4px 12px rgba(200,16,46,0.15)
- Hover: scale(1.02), shadow naik jadi 0 4px 20px rgba(200,16,46,0.3), background sedikit lebih gelap
- Active: scale(0.98)
- Ada inner highlight halus: box-shadow inset 0 1px 0 rgba(255,255,255,0.15)
- Transisi: 200ms cubic-bezier(0.4, 0, 0.2, 1)
```

**Kartu produk (modern):**
```
- Background: putih dengan subtle gradient ke putih tulang
- Border: 1px solid #E5E5E5
- Border-radius: 16px
- Padding: 32px
- Box-shadow default: 0 1px 3px rgba(0,0,0,0.04)
- Hover state:
  - Border: 1px solid transparan, dengan animated gradient border (lihat 9.2.4)
  - Box-shadow: 0 12px 32px rgba(0,0,0,0.08), 0 0 0 1px rgba(200,16,46,0.1)
  - Translate Y: -4px
  - CTA arrow di kartu bergerak 4px ke kanan
- Foto produk di kartu: aspect-ratio konsisten 4:3, object-cover, dengan subtle inner shadow
```

**Counter block (modern):**
```
- Angka: font 72px, weight 800, gradient text (merah → hitam)
- Plus simbol "+" lebih kecil (48px) dengan opacity 0.6
- Label di bawah: 14px, uppercase, letter-spacing 0.08em, color abu sedang
- Garis merah tipis 32px di bawah angka sebagai accent
- Pada scroll-into-view: angka count up dari 0, garis merah scale dari 0 ke 32px
```

**Section divider (modern):**
Bukan `<hr>` standar. Pakai SVG pattern halus:
```
- Pattern dot 1px setiap 8px, color #E5E5E5, lebar full width
- ATAU: garis merah 4px di tengah dengan gradient fade ke transparan di kiri-kanan (60px masing-masing)
```

### 9.7 Typography — modern treatment

- **Heading XL (hero):** 72px desktop / 40px mobile, weight 800, letter-spacing -0.03em, line-height 1.05. Negative letter-spacing penting supaya headline terasa modern, bukan formal.
- **Heading L (section):** 48px / 32px mobile, weight 700, letter-spacing -0.02em.
- **Heading M (subsection):** 24px, weight 600, letter-spacing -0.01em.
- **Body:** 16px, weight 400, line-height 1.65, color `#3A3A3A` (bukan hitam pekat — terlalu kontras melelahkan mata).
- **Caption:** 13px, weight 500, uppercase, letter-spacing 0.08em, color abu sedang. Dipakai untuk label kategori.
- **Eyebrow text** — text kecil di atas heading (cth. "PRODUK ANDALAN") — pakai merah, uppercase, letter-spacing 0.1em, font-size 12px. Modern touch yang sering dilupakan.

### 9.8 Foto & imagery treatment modern

- **Cinematic crop ratio:** hero pakai 21:9 atau 16:9 (bukan 4:3 yang terasa korporat lama).
- **Color grading konsisten:** semua foto lapangan di-grade dengan profil yang sama — sedikit desaturated (-15%), kontras naik (+10%), sedikit cool tone di shadow, warm di highlight. Bikin galeri proyek terasa satu kesatuan, bukan koleksi foto random.
- **Duotone untuk header section:** foto pendukung di header section non-hero pakai duotone merah-hitam — bikin foto terasa stylized dan branded.
- **Frame/mask kreatif:** foto produk di halaman detail bisa pakai mask shape organic (rounded blob) bukan rectangle kaku.
- **Image hover zoom subtle:** semua foto di kartu/galeri saat hover scale 1.05 dengan transisi 600ms ease-out.
- **Parallax tipis:** foto background di section tertentu bergerak 0.3x dari kecepatan scroll — bikin halaman terasa dimensional. Tapi mobile di-disable (performance & motion sensitivity).

### 9.9 Modern interaction patterns

**1. Cursor-aware gradient pada hero CTA**
Saat cursor mendekati hero, ada gradient merah halus yang "mengikuti" posisi cursor (radial gradient dengan center yang update via JS). Subtle tapi sangat modern — dipakai oleh Linear, Vercel.

**2. Scroll-triggered timeline animation**
Di halaman Tentang Kami, timeline 2013→2026 muncul progressively saat di-scroll. Garis vertikal merah "ditarik" dari atas ke bawah, milestone dot muncul satu per satu.

**3. Sticky scroll comparison**
Di halaman /bandingkan-perangkat, kolom kiri (perangkat A) sticky saat scroll, sementara kolom kanan (perangkat B) bisa di-swap dropdown. UX modern yang biasa dipakai di halaman pricing SaaS.

**4. Magnetic buttons**
Tombol CTA hero punya efek "magnetic" — saat cursor mendekat dalam radius 60px, tombol bergeser sedikit ke arah cursor. Effort kecil, impact wow factor besar.

**5. Number ticker live update**
Di hero, kartu data dummy STESY angkanya berubah-ubah tipis tiap 3 detik (cth. level air 142.3 → 142.4 → 142.3) — bikin sense bahwa data real-time bukan basa-basi.

**6. Smooth color transition antar section**
Background body bukan switch keras antar section. Pakai scroll-linked color transition halus — bisa via CSS scroll-driven animations atau intersection observer + tween.

### 9.10 Dark mode section (selektif)

Tidak perlu full dark mode toggle, tapi **beberapa section strategis dipakai dark background** untuk dramatic contrast:

1. **Hero** — dark gradient (sudah dibahas)
2. **STESY Spotlight** — background hampir hitam `#0A0A0A` untuk highlight screenshot dashboard yang umumnya dark mode juga. Bikin dashboard terasa premium.
3. **Section "Suara Mitra"** — dark merah gelap `#1A0508` dengan testimoni text putih + kuotasi merah besar di belakang sebagai dekorasi (opacity 8%).
4. **CTA penutup** — gradient merah yang sudah dibahas
5. **Footer** — dark merah gelap

Selang-seling section terang-gelap bikin halaman terasa rhythmic dan tidak monoton — pattern modern yang dipakai brand seperti Stripe, Apple developer site.

### 9.11 Detail kecil yang bikin "wah"

Ini adalah list "detail polish" yang seringkali pembeda antara website biasa dan website yang terasa premium:

- **Gradient text underline** pada link aktif — bukan underline solid, tapi `text-decoration` dengan custom thickness 2px dan offset 4px.
- **Custom selection color** — saat user select text, highlight background pakai merah lembut, text putih. Sentuhan branding yang halus.
- **Custom scroll bar** (desktop) — slim 8px dengan thumb merah `#C8102E` dan track transparan.
- **Loading skeleton dengan shimmer** — placeholder saat content loading pakai gradient shimmer yang berjalan, bukan box statis abu.
- **Link hover dengan underline animation** — underline tumbuh dari kiri ke kanan, bukan muncul instan.
- **Button click ripple** (subtle) — efek riak merah lembut saat tombol diklik, tapi sangat halus.
- **Number formatting** — semua angka teknis pakai tabular-nums (`font-variant-numeric: tabular-nums`) supaya rata kolom — penting untuk halaman spesifikasi.
- **Smooth scroll dengan offset header** — saat klik anchor, scroll smooth dan berhenti dengan offset top 80px supaya tidak ketutup sticky header.
- **Image zoom on click** (galeri proyek) — klik foto galeri → modal lightbox dengan smooth zoom, bukan tiba-tiba muncul.
- **Tooltip dengan arrow & glass** — tooltip pakai glassmorphism + arrow halus, bukan tooltip default yang kotak abu.
- **Status indicator dengan pulse** — di kartu proyek aktif, ada dot hijau kecil yang pulsing — kasih sense "ini masih running".
- **Subtle noise texture overlay** — di section dark, tambah `<svg>` noise pattern dengan opacity 3% — bikin background tidak terlalu flat-digital, terasa "filmic".

### 9.12 Stack teknis rekomendasi (untuk eksekusi modern)

Supaya semua treatment ini bisa diimplementasi dengan baik:

- **Framework:** Next.js 14+ (App Router) atau Astro untuk SSG dengan island interactivity
- **Styling:** Tailwind CSS v4 + custom CSS untuk yang advanced (gradient mesh, scroll-driven animations)
- **Animation library:** Framer Motion (untuk komponen complex) + native CSS untuk yang sederhana
- **Scroll animations:** Intersection Observer + GSAP ScrollTrigger untuk yang kompleks (timeline tentang kami)
- **Image optimization:** Next.js Image component atau Astro Image, dengan AVIF + WebP fallback, blur placeholder
- **Font loading:** `next/font` dengan variable font (Plus Jakarta Sans Variable, Inter Variable) — file lebih kecil, weight fleksibel
- **CMS:** Sanity atau Payload CMS — supaya tim Beacon bisa update proyek/produk/wawasan tanpa developer

### 9.13 Performa — modern tapi cepat

Modern design SERINGKALI bikin website lambat. Itu tidak boleh terjadi di sini. Target:

- **Lighthouse score:** Performance ≥ 90, Accessibility ≥ 95, Best Practices ≥ 95, SEO ≥ 95
- **LCP** (Largest Contentful Paint): < 2.0s di 4G
- **INP** (Interaction to Next Paint): < 200ms
- **CLS** (Cumulative Layout Shift): < 0.05
- **Total page weight (home):** < 1.5 MB termasuk hero video (pakai compressed MP4 + WebM, atau lottie animation)

Strategi:
- Hero video pakai `<video poster>` + autoplay + muted + playsinline, dengan fallback static image
- Gradient mesh pakai SVG inline (sangat ringan) atau CSS, BUKAN PNG
- Animasi pakai GPU-accelerated properties (`transform`, `opacity`) — hindari `top/left/width/height`
- Lazy load semua komponen below-the-fold
- Critical CSS inline, sisanya defer
- Preconnect ke domain font, gambar, analytics

---

## 10. CHECKLIST IMPLEMENTASI MARKETING

Hal-hal yang harus dipasang sejak hari 1 untuk website ini benar-benar jadi alat marketing:

- [ ] Google Analytics 4 + event tracking lengkap (klik WA, klik email, scroll depth, video play, form submit)
- [ ] Google Search Console + sitemap submitted
- [ ] Meta Pixel (jika nanti mau iklan FB/IG)
- [ ] WhatsApp Business API atau minimal click-to-chat dengan tracking
- [ ] Form kontak terhubung ke email + Google Sheet + notifikasi WA admin
- [ ] Schema markup: Organization, Product, Article, BreadcrumbList, Review
- [ ] Open Graph image custom per halaman
- [ ] PDF download tracking (datasheet, brosur)
- [ ] Heatmap tool (Microsoft Clarity gratis sangat memadai)
- [ ] A/B test setup untuk hero headline & CTA copy (fase 2)
- [ ] Email nurture sequence untuk lead yang download PDF
- [ ] Backup SEO: Glosarium telemetri (10-20 entries) untuk SEO long-tail
- [ ] Halaman landing khusus untuk iklan (cth. /solusi-bendungan-bbws) — fase 2

---

## 11. RINGKASAN — 10 PRINSIP YANG TIDAK BOLEH DILUPAKAN

1. **Merah-putih bukan dekorasi — itu pernyataan.** Tiap pemakaian merah harus disengaja dan strategis.
2. **Bukti mengalahkan klaim.** Setiap "kami terbaik" harus disandingkan dengan nama BBWS atau bendungan nyata.
3. **WhatsApp adalah CTA primer.** Pricing tidak ada di website — semua menuju percakapan.
4. **Engineer membaca dengan scanning.** Heading kuat, paragraf pendek, bullet konkret.
5. **STESY adalah lem yang mengikat semua produk.** Setiap halaman produk hardware harus link ke STESY.
6. **"Buatan Indonesia" dijual dengan elegan, bukan jingoistik.** Tunjukkan kualitas dulu, lalu sebut asalnya.
7. **Mobile-first wajib.** Audiens akses dari lapangan.
8. **3 persona berbeda butuh entry point berbeda.** Pak Engineer PPK butuh proyek BBWS, Bu Procurement butuh logo BUMN, Mas Engineer Swasta butuh solusi spesifik (geothermal/vibrating wire).
9. **Setiap halaman harus tahu posisi funnel-nya.** Awareness → Consideration → Decision → Conversion.
10. **Konsistensi tone: percaya diri, teknis, bangga, tapi tidak congkak.**

---

*Dokumen disusun: 27 April 2026 — Spesifikasi marketing-ready untuk Beacon Engineering. Berdasarkan Company Profile 2026 dan strategi positioning produk telemetri lokal.*
