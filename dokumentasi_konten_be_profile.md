# Dokumentasi Konten Database BE Profile

Dokumen ini dirangkum dari file SQL `be_profile (1).sql` dengan fokus pada struktur konten **solusi**, **sub-solusi**, **produk**, dan **proyek**. Path aset ditulis apa adanya sesuai database agar mudah dipetakan ke folder storage/public website.

## Ringkasan Data

- Total solusi: **5**
- Total sub-solusi: **11**
- Total produk: **17**
- Total proyek: **29**
- Total galeri sub-solusi: **22** aset
- Total galeri proyek: **102** aset

## Panduan Penempatan Aset Foto/Gambar

| Jenis Konten | Field Database | Fungsi di Website | Lokasi/Path Aset |
|---|---|---|---|
| Solusi | `solution.thumbnail` | Gambar kartu/hero solusi | `konten/solutions/thumbnail/...` |
| Solusi | `solution.icon` | Ikon solusi | `konten/solutions/icon/...` |
| Sub-solusi | `sub_solution.icon` | Ikon sub-solusi | `subsolution_images/icon/...` |
| Sub-solusi | `gambar_subsolution.gambar` | Galeri/ilustrasi pendukung sub-solusi | `subsolution_images/...` |
| Sub-solusi | `sub_solution.file_3d` | File 3D lokal/interaktif | `uploads/subsolution_files/...` |
| Produk | `produk.gambar_thumbnail_produk` | Thumbnail kartu produk | `konten/produk/gambar_thumbnail_produk/...` |
| Produk | `produk.gambar_produk` | Gambar utama/detail produk | `konten/produk/gambar_produk/...` |
| Produk | `produk.brosur` | File brosur PDF | `konten/produk/brosur/...` |
| Produk | `komponen.gambar` | Topologi/komponen perangkat | `komponen/gambar/...` |
| Seri perangkat | `seri_perangkat.gambar1`, `gambar2` | Foto/visual seri perangkat | `seri_perangkat/gambar1/...`, `seri_perangkat/gambar2/...` |
| Proyek | `projek.thumbnail` | Thumbnail kartu proyek | `projek_thumbnails/...` |
| Proyek | `projek.gambar_proyek` | Gambar utama halaman detail proyek | `projek_gambar_proyeks/...` |
| Proyek | `gambar_projek.gambar` | Galeri dokumentasi proyek | `projek_images/...` |
| Klien | `klien.logo` | Logo klien di proyek/testimoni | `klien/...` |

## 1. Solusi dan Sub-Solusi

### 1. Water Security

**Deskripsi:** Solusi keamanan air di wilayah irigasi dan bendungan.

**Aset solusi:**
  - **Thumbnail solusi:** `konten/solutions/thumbnail/1744612279.webp`
  - **Icon solusi:** `konten/solutions/icon/1744342523_1734658507_water-solid (1).svg`

#### 1. Automatic Water Level Recorder

**Isi utama:**

Automatic Water Level Recorder (AWLR)

Automatic Water Level Recorder atau AWLR adalah perangkat telemetri yang dirancang untuk mengukur ketinggian muka air secara otomatis dan 100% online. Teknologi AWLR ini memudahkan pemantauan volume dan debit air tanpa perlu inspeksi manual, menjadikannya solusi ideal untuk sistem irigasi, bendungan, dan pengelolaan sumber daya air lainnya.

Fitur Utama AWLR

AWLR Beacon Engineering senantiasa memberikan keunggulan dan fitur-fitur terbaru untuk menunjang kinerja yang efektif.

**Konten pendukung:**

Wilayah aliran butuh banyak sensor? Tentu saja bisa! AWLR dapat dikombinasikan dengan berbagai sensor tambahan untuk menunjang pengambilan data yang komperhensif.

**Penerapan/Kecocokan:**

Dimana AWLR Cocok Dipasang?

AWLR dapat terpasang dan membaca data secara online dari berbagai karakteristik aliran:

-
Aliran Irigasi

-
Bendungan (area spillway dan V-Notch)

-
Kanal Drainase

Penggunaannya yang fleksibel tersebut memungkinkan AWLR dikondisikan sesuai kebutuhan pengguna.

**Fitur sub-solusi:**
- **High-end Sensor** — Sensor kelas profesional untuk berbagai karakteristik aliran. Icon: `solutions/icon-fitur-subsolution/1746170789_Profesional Water Level Sensor.png`
- **24 Jam Non Stop** — Dengan Beacon Logger, catat level air otomatis 24 jam non stop. Icon: `solutions/icon-fitur-subsolution/1746172326_Realtime 24 Jam.png`
- **Akses Via App** — Unduh seluruh data level air tanpa repot, cukup sekali klik. Icon: `solutions/icon-fitur-subsolution/1746174852_Kendali Via App.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1742442506_icon awlr.webp`
  - **Video:** `https://www.youtube.com/watch?v=L0EI3GI7RrU`
  - **File 3D lokal:** `uploads/subsolution_files/AWLR_NEW.html`
  - **Link 3D:** `https://stesy.beacontelemetry.com/image/AWLR_NEW.html`
  - **Galeri sub-solusi:**
    - `subsolution_images/1746504663_AWLR 2.webp`
    - `subsolution_images/1746504663_AWLR 3.webp`
    - `subsolution_images/1746504663_AWLR.webp`

**Produk terkait sub-solusi ini:**
- `be-wlr-100-u150` — **BE WLR-100-U150**
- `be-wlr-100-u014` — **BE WLR-100-U014**
- `be-wlr-100-r700` — **BE WLR-100-R700**
- `be-wlr-100-td100` — **BE WLR-100-TD100**

#### 2. Automatic Water Gate Controller

**Isi utama:**

Automatic Water Gate Controller (AWGC)

Automatic Water Gate Controller atau AWGC adalah solusi telemetri yang dirancang khusus untuk mengontrol buka-tutup pintu air secara otomatis dan online, tanpa perlu intervensi manual di lapangan. AWGC menjadi solusi kendali pintu air yang cepat dan tepat, serta mengurangi risiko kerja petugas di lapangan.

Fitur Utama AWGC

**Konten pendukung:**

Wilayah pemasangan perlu sensor tambahan? Tentu saja bisa! AWGC dapat dikombinasikan dengan berbagai sensor tambahan untuk menunjang pengambilan data yang komperhensif.

**Penerapan/Kecocokan:**

Dimana AWGC Cocok Dipasang?

AWLR dapat terpasang dan membaca data secara online dari berbagai karakteristik aliran:

-
Pintu Air Irigasi

-
Pintu Air Bendung

-
Valve Bendungan

-
Pintu Spillway

Ingin tahu lebih banyak? Konsultasi gratis sekarang juga!

**Fitur sub-solusi:**
- **Motor & Gear Box** — Satu paket dengan valve, acuator, dan flowmeter.. Icon: `solutions/icon-fitur-subsolution/1746504687_Motorisasi.png`
- **Realtime 24 Jam** — Dengan Beacon Logger, catat level air otomatis 24 jam non stop. Icon: `solutions/icon-fitur-subsolution/1746504888_Realtime 24 Jam.png`
- **100% Online** — Buka-tutup pintu air 100% via app dan website monitoring.. Icon: `solutions/icon-fitur-subsolution/1746505014_Kendali Via App.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1742442487_icon awgc.webp`
  - **Video:** `https://www.youtube.com/watch?v=zDCz8D8ig5E`
  - **File 3D lokal:** `uploads/subsolution_files/AWGC.html`
  - **Link 3D:** `https://stesy.beacontelemetry.com/image/AWGC.html`
  - **Galeri sub-solusi:**
    - `subsolution_images/1745485011_AWGC 2.webp`
    - `subsolution_images/1745485011_AWGC 3.webp`
    - `subsolution_images/1745485011_AWGC 4.webp`
    - `subsolution_images/1745485011_AWGC.webp`

**Produk terkait sub-solusi ini:**
- `be-gcm-500-n1` — **BE GCM-500-N1**
- `be-wgc-1000-ne` — **BE WGC-1000-NE**
- `be-gcm-500-n2` — **BE GCM-500-N2**

#### 5. Automatic Flow Meter Recorder

**Isi utama:**

Automatic Flowmeter Recorder (AFMR)

Automatic Flowmeter Recorder (AFMR) merupakan perangkat telemetri khusus untuk mengukur debit aliran air secara terus-menerus tanpa perlu inspeksi langsung ke lapangan. Dengan teknologi berstandar industri, AFMR memberikan data debit air yang akurat dan hemat waktu.

Fitur Utama AFMR

**Konten pendukung:**

AFMR Beacon Engineering dapat dikombinasikan dengan sensor lain untuk kebutuhan pengukuran multi-parameter.

**Penerapan/Kecocokan:**

Dimana AFMR Cocok di Pasang?

AFMR dapat terpasang dan membaca debit secara online dari berbagai karakteristik aliran:

-
Saluran Irigasi

-
Kanal atau Sungai Pemantau Banjir

-
Intake Pembangkit Listrik Tenaga Air

-
Jembatan Sungai

Ingin menyesuaikan kebutuhan AFMR? Konsultasi gratis sekarang juga!

**Fitur sub-solusi:**
- **Akurasi Ganda** — Mengukur data debit dan level air minim error dalam satu waktu. Icon: `solutions/icon-fitur-subsolution/1747106467_Flowmeter Fitur.png`
- **24 Jam Non Stop** — Operasi sistem 24 jam tanpa hentid dan minim intervensi. Icon: `solutions/icon-fitur-subsolution/1747107393_Realtime 24 Jam.png`
- **Kontrol Fleksibel** — Integrasi mudah dan monitoring bisa dimana saja kapan saja. Icon: `solutions/icon-fitur-subsolution/1747107543_Kendali Via App.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1742442473_icon afmr.webp`
  - **Video:** `https://www.youtube.com/watch?v=C9B0mlGpMMA`
  - **File 3D lokal:** `uploads/subsolution_files/AFMR.html`
  - **Link 3D:** `https://stesy.beacontelemetry.com/image/AFMR.html`
  - **Galeri sub-solusi:**
    - `subsolution_images/1746504860_AFMR.webp`

**Produk terkait sub-solusi ini:**
- `be-fmr-100-fs20` — **BE FMR-100-FS20**

#### 6. Automatic Deformation Recorder

**Isi utama:**

Automatic Deformation Recorder (ADR)

ADR Beacon Engineering adalah sistem telemetri otomatis yang dirancang untuk memantau deformasi atau pergeseran struktur secara real-time, akurat, dan tanpa intervensi manual ke lapangan. Dengan integrasi Robotic Total Station dan data logger BL-1100, ADR menjadi pilihan tepat untuk proyek pemantauan kestabilan pada bendungan, lereng, terowongan, hingga struktur penting lainnya.

**Penerapan/Kecocokan:**

Dimana ADR Cocok Dipasang?

ADR menjadi solusi tepat untuk pemantauan pergeseran struktur di karakteristik wilayah:

-
Konstruksi Bendungan

-
Lereng dan tebing rawan longsor

-
Terowongan

Butuh informasi lebih lanjut tentang ADR? Konsultasi gratis sekarang juga!

**Fitur sub-solusi:**
- **Advanced Survey** — Kombinasi Beacon Logger dan Robotic Total Station untuk deteksi presisi.. Icon: `solutions/icon-fitur-subsolution/1747121370_Advanced RTS.png`
- **100% Online** — Kontrol penuh data deformasi secara online dan real time, tanpa repot.. Icon: `solutions/icon-fitur-subsolution/1747123165_Kontrol Online ADR.png`
- **Struktur Tangguh** — Struktur perangkat tangguh untuk segala medan, suhu, dan cuaca ekstrem.. Icon: `solutions/icon-fitur-subsolution/1747124519_Tahan ekstrem.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1742442450_icon adr.webp`
  - **Video:** `https://www.youtube.com/watch?v=zDCz8D8ig5E`
  - **File 3D lokal:** -
  - **Link 3D:** -
  - **Galeri sub-solusi:**
    - `subsolution_images/1744879208_1.webp`

**Produk terkait sub-solusi ini:**
- `be-adr-1000-rbt32` — **BE ADR-1000-RBT32**

#### 7. Automatic Water Quality Recorder

**Isi utama:**

Automatic Water Quality Recorder (AWQR)

Automatic Water Quality Recorder atau AWQR adalah sistem pemantauan kualitas air otomatis yang terintegrasi dengan Data Logger Beacon Engineering BL-1100. Dirancang untuk memantau berbagai parameter air secara real-time tanpa perlu kunjungan lapangan, AWQR cocok digunakan di sungai, waduk, dan saluran irigasi untuk mendukung tata kelola air yang berkelanjutan.

Fitur Utama AWQR

**Penerapan/Kecocokan:**

Dimana AWQR Cocok Dipasang?

Automatic Water Quality Recorder (AWQR) tepat dipasang lokasi strategis yang membutuhkan pemantauan kualitas air secara terus-menerus seperti:

-
Sungai dan Kanal Irigasi

-
Spillway dan Waduk

-
Hulu - hilir sungai

-
Instalasi Pengolahan Air (IPA/IPAL)

-
Area Industri dan Pembuangan Limbah

Ingin mengetahui lebih jauh tentang AWQR? Konsultasi gratis sekarang!

**Fitur sub-solusi:**
- **Multi-parameter** — Mengukur parameter utama kualitas air dalam satu waktu.. Icon: `solutions/icon-fitur-subsolution/1747129673_Multi parameter.png`
- **100% Online** — Akses data kualitas air ke perangkat mobile dan desktop. Icon: `solutions/icon-fitur-subsolution/1747191249_Kendali Via App.png`
- **Struktur Tangguh** — Dirancang untuk kondisi ekstrem dengan bahan tahan api. Icon: `solutions/icon-fitur-subsolution/1747191403_Tahan ekstrem.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1742442429_icon awqr.webp`
  - **Video:** `https://www.youtube.com/watch?v=zDCz8D8ig5E`
  - **File 3D lokal:** -
  - **Link 3D:** `https://stesy.beacontelemetry.com/image/AWQR.html`
  - **Galeri sub-solusi:**
    - `subsolution_images/1746504768_AWQR.webp`

**Produk terkait sub-solusi ini:**
- `be-wqr-1000-mp7` — **BE WQR-1000-MP7**

#### 8. Automatic Vibrating Wire Recorder

**Isi utama:**

Automatic Vibrating Wire Recorder (AVWR)

Automatic Vibrating Wire Recorder (AVWR) adalah solusi telemetri otomatis untuk pemantauan sensor getaran kawat (vibrating wire) dalam jangka panjang. Menggunakan BE Data Logger, perangkat ini memungkinkan pencatatan data multi-sensor secara simultan, akurat, dan real-time. Cocok untuk infrastruktur berskala besar seperti bendungan, lereng, dan struktur geoteknik lainnya.

Fitur Utama AVWR

**Penerapan/Kecocokan:**

Dimana AVWR Cocok Dipasang?

AVWR atau Automatic Vibrating Wire Recorder sangat diperlukan di lokasi-lokasi yang memerlukan pemantauan struktur secara berkelanjutan, otomatis, dan presisi tinggi. Berikut contoh area ideal untuk AVWR:

-
Bendungan

-
Lereng Sekitar Bendungan

-
Terowongan

-
Jembatan

Apakah AVWR hanya terbatas pada wilayah di atas? Tentu saja tidak! Untuk info lebih lanjut, konsultasi gratis sekarang juga!

**Fitur sub-solusi:**
- **Input Multisensor** — Mendukung pembacaan puluhan sensor dalam satu waktu.. Icon: `solutions/icon-fitur-subsolution/1747208719_Input Multi sensor AVWR.png`
- **Skala Besar** — Ideal untuk monitoring dengan jumlah sensor yang tinggi.. Icon: `solutions/icon-fitur-subsolution/1747209810_Skala besar AVWR.png`
- **100% Online** — Seluruh data dapat diakses melalui online app dan dekstop. Icon: `solutions/icon-fitur-subsolution/1747209541_Kontrol Online ADR.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1742442410_icon avwr.webp`
  - **Video:** `https://www.youtube.com/watch?v=zDCz8D8ig5E`
  - **File 3D lokal:** -
  - **Link 3D:** -
  - **Galeri sub-solusi:**
    - `subsolution_images/1745484935_AVWR 2.webp`
    - `subsolution_images/1745484935_AVWR.webp`

**Produk terkait sub-solusi ini:**
- `be-vwr-1000` — **BE VWR-1000**

### 2. Weather Forecast

**Deskripsi:** Solusi pemantauan cuaca yang terintegrasi dan bekerlanjutan

**Aset solusi:**
  - **Thumbnail solusi:** `konten/solutions/thumbnail/1744612701.webp`
  - **Icon solusi:** `konten/solutions/icon/1744341932_1734658091_cloud-sun-fill.svg`

#### 9. Automatic Rain Recorder

**Isi utama:**

Automatic Rain Recorder (ARR)

Automatic Rain Recorder atau ARR adalah perangkat telemetri pengukur curah hujan digital yang menggunakan mekanisme tipping bucket untuk pencatatan data hujan secara otomatis. Dirancang dengan material tahan korosi dan akurasi tinggi, ARR sangat ideal untuk pemantauan curah hujan di berbagai kondisi lingkungan, baik untuk sistem hidrologi, irigasi, hingga untuk mendukung sistem peringatan dini.

Fitur Utama ARR

**Konten pendukung:**

ARR juga memungkinkan penggabungan data hujan dengan parameter lain seperti tinggi muka air, sehingga menciptakan sistem monitoring hidrologi terpadu.

**Penerapan/Kecocokan:**

Dimana ARR Cocok dipasang?

Automatic Rain Recorder (ARR) paling cocok dipasang di lokasi-lokasi yang membutuhkan pemantauan curah hujan lanjutan seperti:

-
Catchment Area Bendungan dan Irigasi

-
Dataran Tinggi

-
Hulu Sungai

ARR sangat efektif bila dipasang bersama perangkat telemetri lainnya. Ingin tahu lebih lanjut? Konsultasi gratis sekarang juga!

**Fitur sub-solusi:**
- **Professional Rainfall Sensor** — Catat data intensitas hujan dengan ketelitian tinggi. Icon: `solutions/icon-fitur-subsolution/1747285097_RAinfall.png`
- **Integrasi Fleksibel** — Dapat dikombinasikan dengan berbagai perangkat telemetri lain. Icon: `solutions/icon-fitur-subsolution/1747297897_Integrasi fleksibel.png`
- **100% Akses Online** — Data curah hujan diakses melalui aplikasi mobile dan dekstop. Icon: `solutions/icon-fitur-subsolution/1747298155_Kendali Via App.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1742442395_icon arr.webp`
  - **Video:** `https://youtu.be/XQf-5R0oNqg?si=vQm3OdZpN4_z9V8C`
  - **File 3D lokal:** -
  - **Link 3D:** -
  - **Galeri sub-solusi:**
    - `subsolution_images/1746504848_ARR.webp`

**Produk terkait sub-solusi ini:**
- `be-rr-1000-tb02` — **BE RR-1000-TB02**
- `be-rr-100-tb02` — **BE RR-100-TB02**

#### 10. Automatic Weather Recorder

**Isi utama:**

Automatic Weather Recorder (AWR)

Automatic Weather Recorder atau AWR adalah perangkat telemetri untuk pemantauan cuaca otomatis dan berkelanjutan. AWR dirancang untuk mengumpulkan data dari berbagai parameter cuaca secara real-time seperti kecepatan dan arah angin, suhu, kelembaban, hingga radiasi matahari. Perangkat ini sangat ideal untuk aplikasi klimatologi, pertanian cerdas, serta pendukung sistem peringatan dini.

Fitur Utama AWR

**Penerapan/Kecocokan:**

Dimana AWR Cocok dipasang?

AWR sangat fleksibel dan tahan terhadap kondisi lingkungan ekstrem, sehingga cocok untuk berbagai aplikasi seperti:

-
Wilayah Sekitar Bendungan

-
Area Irigasi

-
Stasiun Klimatologi dan Meteorologi

Ingin tahu lebih banyak tentang AWR? Hubungan Beacon Engineering sekarang juga!

**Fitur sub-solusi:**
- **Multi-Parameter Measurement** — Mampu mengukur berbagai parameter cuaca dalam satu waktu. Icon: `solutions/icon-fitur-subsolution/1747301718_AWR multiparameter.png`
- **24 Jam Non Stop** — Dengan Beacon Logger, catat data cuaca otomatis 24 jam non stop. Icon: `solutions/icon-fitur-subsolution/1747363474_Realtime 24 Jam.png`
- **100% Akses Via App** — Unduh seluruh data parameter cuaca tanpa repot, cukup sekali klik. Icon: `solutions/icon-fitur-subsolution/1747363630_Kendali Via App.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1742442255_icon awr.webp`
  - **Video:** `https://www.youtube.com/watch?v=zDCz8D8ig5E`
  - **File 3D lokal:** -
  - **Link 3D:** -
  - **Galeri sub-solusi:**
    - `subsolution_images/1745484839_AWR.webp`
    - `subsolution_images/1745484858_AWR 2.webp`

**Produk terkait sub-solusi ini:**
- `be-wr-1000-ws80` — **BE WR-1000-WS80**

### 3. Early Warning

**Deskripsi:** Pantau potensi bencana secara online 24 jam non stop

**Aset solusi:**
  - **Thumbnail solusi:** `konten/solutions/thumbnail/1744613052.webp`
  - **Icon solusi:** `konten/solutions/icon/1744341950_1734658002_gridicons--speaker.svg`

#### 11. Early Warning System

**Isi utama:**

Early Warning System (EWS)

Early Warning System atau EWS merupakan perangkat telemetri peringatan dini otomatis yang dirancang untuk memberikan notifikasi cepat dan efektif terhadap potensi bencana seperti banjir, longsor, atau bahaya hidrometeorologis lainnya. Sistem ini dilengkapi dengan sirine dan lampu indikator yang mampu memberikan peringatan berbasis level bahaya, dan terintegrasi dengan data logger untuk aktivasi otomatis.

Fitur Utama EWS

EWS Beacon Engineering memberikan keunggulan dan fitur-fitur terbaru untuk menunjang kinerja peringatan yang efektif.

**Konten pendukung:**

Wilayah monitoring butuh banyak sensor? Tentu saja bisa! EWS dapat dikombinasikan dengan lebih dari satu sensor untuk menunjang peringatan dini yang lebih komperhensif.

**Penerapan/Kecocokan:**

Dimana EWS Cocok Dipasang?

Early Warning System cocok dipasang di lokasi yang memiliki risiko tinggi terhadap bencana dan menjangkau masyarakat luas seperti:

-
Bendungan

-
Hilir Sungai

-
Daerah Bantaran Sungai

-
Permukiman Warga

Butuh penjelasan lebih lanjut soal EWS? Konsultasi gratis hari ini juga!

**Fitur sub-solusi:**
- **Peringatan Multilevel** — Peringatan berbagai level yang mudah dikenali masyarakat.. Icon: `solutions/icon-fitur-subsolution/1747714190_multi level warning.png`
- **Pemantauan 
24 Jam** — Pantau dan deteksi bahaya sedini mungkin, online 24 jam non stop. Icon: `solutions/icon-fitur-subsolution/1747714298_Realtime 24 Jam.png`
- **100% Akses
Via App** — Seluruh data deteksi bahaya dapat diakses dalam satu platform. Icon: `solutions/icon-fitur-subsolution/1747716075_Kendali Via App.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1742442230_icon ews.webp`
  - **Video:** `https://www.youtube.com/watch?v=zDCz8D8ig5E`
  - **File 3D lokal:** -
  - **Link 3D:** -
  - **Galeri sub-solusi:**
    - `subsolution_images/1745484803_EWS 2.webp`
    - `subsolution_images/1746504553_EWS.webp`

**Produk terkait sub-solusi ini:**
- `be-ews-100-wl` — **BE EWS-100-WL**

### 4. Pressure Measurement

**Deskripsi:** Solusi keamanan data berbasis tekanan dengan daya tahan dan akurasi tinggi

**Aset solusi:**
  - **Thumbnail solusi:** `konten/solutions/thumbnail/1744874784.webp`
  - **Icon solusi:** `konten/solutions/icon/1762336968_1747717165_Icon pressure.webp`

#### 20. Automatic Pressure Level Recorder

**Isi utama:**

Automatic Pressure Level Recorder (APLR)

APLR adalah alat pemantauan tekanan otomatis yang digunakan untuk merekam dan mengirimkan data tekanan fluida—seperti air tanah atau gas—secara real-time. Dilengkapi dengan sensor tekanan presisi tinggi dan sistem telemetri (GSM, radio, atau satelit), APLR memungkinkan pemantauan tekanan 24/7 tanpa perlu ke lapangan.

Fitur Utama APLR

APLR Beacon Engineering senantiasa memberikan keunggulan dan fitur-fitur terbaru untuk menunjang kinerja yang efektif.

**Konten pendukung:**

Kawasan memerlukan sensor tambahan? Tentu saja bisa! APLR dapat dikombinasikan dengan berbagai sensor tambahan untuk menunjang pengambilan data yang lebih komperhensif.

**Penerapan/Kecocokan:**

Dimana APLR Cocok dipasang?

APLR cocok dipasang di lokasi yang membutuhkan pemantauan tekanan fluida secara terus-menerus dan minim akses lapangan, seperti:

-
Area gas dan panas bumi (geothermal)

-
Bendungan dan waduk

-
Pipa bawah tanah dan sistem hidrolik

Ingin tahu lebih lanjut soal APLR Beacon Engineering? Konsultasi gratis sekarang juga!

**Fitur sub-solusi:**
- **Multi-aplikasi** — Cocok untuk air tanah, sumur gas, bendungan, dan aplikasi lain.. Icon: `solutions/icon-fitur-subsolution/1747728649_Logo AFMR 3.png`
- **Realtime** — Menyediakan data tekanan secara realtime selama 24 jam nonstop. Icon: `solutions/icon-fitur-subsolution/1747728785_Realtime 24 Jam.png`
- **100% Via App** — Seluruh kendali dan data perangkat diakses cukup dari aplikasi.. Icon: `solutions/icon-fitur-subsolution/1747728862_Kendali Via App.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1747723209_Pressure_Monitoring_Device_Icon-removebg-preview.webp`
  - **Video:** `https://www.youtube.com/watch?v=zDCz8D8ig5E`
  - **File 3D lokal:** -
  - **Link 3D:** -
  - **Galeri sub-solusi:**
    - `subsolution_images/1745484630_3.webp`
    - `subsolution_images/1746504822_APLR 2.webp`
    - `subsolution_images/1747722346_APLR.webp`

**Produk terkait sub-solusi ini:**
- `be-plr-1000` — **BE PLR-1000**

### 5. STESY Application

**Deskripsi:** Solusi integrasi semua data monitoring dalam satu platform fleksibel.

**Aset solusi:**
  - **Thumbnail solusi:** `konten/solutions/thumbnail/1744614085.webp`
  - **Icon solusi:** `konten/solutions/icon/1744342016_1734657633_lucide--tablet-smartphone.svg`

#### 12. Smart Telemetry System

**Isi utama:**

Smart Telemetry Systems (STESY)

Berbeda dengan aplikasi lain yang masih mengutamakan input manual atau sekadar manajemen perangkat, STESY hadir sebagai platform monitoring real-time yang menjamin integrasi penuh. Data teknis dikirim langsung dari lapangan secara otomatis, selama 24 jam non stop.

Fitur Utama STESY

**Penerapan/Kecocokan:**

Satu Dashboard Berbagai Data

STESY mampu menyediakan data dari berbagai sensor dan lokasi dalam satu tampilan terpadu, memudahkan instansi mengawasi pos-pos secara menyeluruh tanpa harus membuka banyak aplikasi berbeda. Berikut fitur dukungan STESY:

-
Support integrasi dengan berbagai sistem melalui Open API

-
Jaminan keamanan sistem melalui autentikasi login modern

-
Kontrol akses berbasis peran (RBAC)

-
Audit log untuk setiap aktivitas pengguna

-
Antarmuka Interaktif & Responsif

-
Fleksibilitas Ekspor Data (Image/CSV/Excel)

Ingin tahu lebih banyak soal STESY? Konsultasikan gratis hari ini juga!

**Fitur sub-solusi:**
- **Realtime** — Monitoring STESY menjamin seluruh data disajikan realtime 24 jam nonstop. Icon: `solutions/icon-fitur-subsolution/1747733622_Realtime 24 Jam.png`
- **100% Online** — Semua kendali perangkat dilakukan online tanpa ada intervensi ke lapangan. Icon: `solutions/icon-fitur-subsolution/1747733717_Kontrol Online ADR.png`
- **Customable** — Fitur dan tampilan STESY dapat di kustomisasi sesuai kebutuhan pengguna. Icon: `solutions/icon-fitur-subsolution/1747733900_Customable.png`

**Aset sub-solusi:**
  - **Icon sub-solusi:** `subsolution_images/icon/1747723411_ChatGPT_Image_May_20__2025__01_42_30_PM-removebg-preview.png`
  - **Video:** `https://www.youtube.com/watch?v=qD1ePHATQ4o`
  - **File 3D lokal:** -
  - **Link 3D:** -
  - **Galeri sub-solusi:**
    - `subsolution_images/1747896430_Gambar Proyek Atas (5).webp`
    - `subsolution_images/1747896495_Gambar Proyek Atas (6).webp`

**Produk terkait sub-solusi ini:**
- `smart-telemetry-system` — **Smart Telemetry System**

## 2. Produk

### Automatic Water Level Recorder — Water Security

#### 1. BE WLR-100-U150

- **Slug:** `be-wlr-100-u150`
- **Sub-solusi:** Automatic Water Level Recorder
- **Solusi produk/use case:** Kanal Irigasi, Bendungan
- **Seri perangkat terkait:** BL Logger 110, Water Level Sensor U150

**Highlight thumbnail/kartu produk:**

-
Jarak baca sensor 15 m

-
Dilengkapi Data Logger BL-110

-
Sensor tunggal

-
Data Online dan realtime 24 Jam

**Deskripsi detail produk:**

Pengukuran Level Ketinggian Air Paling Fleksibel untuk Berbagai Karakteristik

AWLR tipe ini menggunakan sensor ultrasonik dengan jarak baca hingga 15 meter. Dilengkapi dengan Data Logger Beacon 110 Series, AWLR seri ini sangat fleksibel karena cocok diaplikasikan untuk berbagai jenis aliran mulai dari bendungan hingga irigasi. Selain itu, AWLR jenis ini juga sangat ideal untuk aliran terbuka.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1744701020.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1744701021.webp`
  - **Brosur PDF:** `konten/produk/brosur/1744710448_BROSUR BE WLR-100-U150.pdf`
  - **Link LKPP lokal/general:** `https://e-katalog.lkpp.go.id/katalog/produk/detail/43734714?type=general`
  - **Link LKPP sektoral/regency:** `https://e-katalog.lkpp.go.id/katalog/produk/detail/3913629?type=regency`
  - **Link TKDN:** `https://drive.google.com/file/d/1AYqlOr8xlpWkxpbB9ayiQ_hf6R4N12nJ/view?usp=sharing`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat
AWLR seri: `komponen/gambar/1748593817_U150.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 110 (Logger): `seri_perangkat/gambar1/1748404066_BL-110.png`, `seri_perangkat/gambar2/1748572147_3.png`
    - Water Level Sensor U150 (Sensor): `seri_perangkat/gambar1/1748328737_150 (2).png`, `seri_perangkat/gambar2/1748328737_150.png`

#### 2. BE WLR-100-U014

- **Slug:** `be-wlr-100-u014`
- **Sub-solusi:** Automatic Water Level Recorder
- **Solusi produk/use case:** Kanal Irigasi, Drainase, Kolam Retensi
- **Seri perangkat terkait:** BL Logger 110, Water Level Sensor U014

**Highlight thumbnail/kartu produk:**

-
Jangkauan baca sensor 4 m

-
Dilengkapi Data Logger BL-110

-
Sensor tunggal

-
Data Online dan realtime 24 Jam

**Deskripsi detail produk:**

Telemetri Tepat untuk Aliran Kecil Hingga Menengah

AWLR tipe ini menggunakan sensor ultrasonik dengan jarak baca hingga 4m. Dilengkapi dengan Data Logger BL-110 yang mendukung penggunaan sensor tunggal, AWLR ini adalah solusi tepat pemantauan air di aliran kecil hingga menengah dan sangat ideal untuk area yang membutuhkan pembacaan interval tinggi.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1744786219.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1744787191.webp`
  - **Brosur PDF:** `konten/produk/brosur/1744710429_BROSUR BE WLR-100-U014.pdf`
  - **Link LKPP lokal/general:** `https://e-katalog.lkpp.go.id/katalog/produk/detail/3746841?type=regency`
  - **Link LKPP sektoral/regency:** `https://e-katalog.lkpp.go.id/katalog/produk/detail/40501445?type=general`
  - **Link TKDN:** `https://drive.google.com/file/d/1rYMG8QkJ4qr8opi0b_jT_xLcPRZB2O9m/view?usp=drive_link`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat AWLR seri: `komponen/gambar/1748593890_U014.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 110 (Logger): `seri_perangkat/gambar1/1748404066_BL-110.png`, `seri_perangkat/gambar2/1748572147_3.png`
    - Water Level Sensor U014 (Sensor): `seri_perangkat/gambar1/1748328688_14 (2).png`, `seri_perangkat/gambar2/1748328688_14.png`

#### 31. BE WLR-100-R700

- **Slug:** `be-wlr-100-r700`
- **Sub-solusi:** Automatic Water Level Recorder
- **Solusi produk/use case:** -
- **Seri perangkat terkait:** BL Logger 110, Water Level Sensor R700

**Highlight thumbnail/kartu produk:**

-
Jangkauan baca sensor 70 m

-
Dilengkapi Data Logger BL-110

-
Sensor tunggal

-
Data Online dan realtime 24 Jam

**Deskripsi detail produk:**

Telemetri Terbaik untuk Aliran Bendungan dan Waduk Besar

AWLR tipe ini menggunakan high end radar level sensor dengan jarak baca hingga 70 meter. Dilengkapi dengan Data Logger BL-110 yang mendukung penggunaan sensor tunggal, AWLR ini adalah solusi tepat pemantauan air di aliran dengan volume besar. Selain itu, AWLR tipe ini juga sangat ideal untuk area yang mengalami fluktuasi air sangat tinggi akibat pasang surut.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1744700646.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1744700646.webp`
  - **Brosur PDF:** `konten/produk/brosur/1744710217_BROSUR BE WLR-100-R700.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** `https://drive.google.com/file/d/1odxUv1jBBvL6kzjLww2JT5gTKRqmRO5d/view?usp=drive_link`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat WLR seri: `komponen/gambar/1748595593_R700.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 110 (Logger): `seri_perangkat/gambar1/1748404066_BL-110.png`, `seri_perangkat/gambar2/1748572147_3.png`
    - Water Level Sensor R700 (Sensor): `seri_perangkat/gambar1/1748416093_r700 (2).png`, `seri_perangkat/gambar2/1748416093_r700.png`

#### 33. BE WLR-100-TD100

- **Slug:** `be-wlr-100-td100`
- **Sub-solusi:** Automatic Water Level Recorder
- **Solusi produk/use case:** -
- **Seri perangkat terkait:** BL Logger 110, Water Level Sensor TD100

**Highlight thumbnail/kartu produk:**

-
Jangkauan baca sensor 100 m

-
Dilengkapi Data Logger BL-110

-
Data Online dan realtime 24 Jam

-
Sensor tunggal

**Deskripsi detail produk:**

Pengukuran Cerdas Level Air Berbasis Tekanan Hidrostatis

AWLR tipe ini menggunakan sensor tekanan dengan jarak baca hingga 100 meter. Dilengkapi dengan Data Logger BL-110 yang mendukung penggunaan sensor tunggal, AWLR ini adalah solusi tepat pemantauan level air di area tertutup dan sulit dijangkau. AWLR jenis ini juga tidak terpengaruh oleh gangguan visual sehingga ideal untuk aliran dengan sedimentasi tinggi.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1747726696.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1744700564.webp`
  - **Brosur PDF:** `konten/produk/brosur/1744710091_BROSUR BE WLR-100-TD100.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** `https://drive.google.com/file/d/1GQdpyoOIQM6aeF8VlgXQB7EtTXczkdDp/view?usp=drive_link`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat WLR seri: `komponen/gambar/1748595634_TD100.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 110 (Logger): `seri_perangkat/gambar1/1748404066_BL-110.png`, `seri_perangkat/gambar2/1748572147_3.png`
    - Water Level Sensor TD100 (Sensor): `seri_perangkat/gambar1/1748417163_td100.png`, `seri_perangkat/gambar2/1748415973_td100 (2).png`

### Automatic Water Gate Controller — Water Security

#### 10. BE GCM-500-N1

- **Slug:** `be-gcm-500-n1`
- **Sub-solusi:** Automatic Water Gate Controller
- **Solusi produk/use case:** Kanal Irigasi, Drainase
- **Seri perangkat terkait:** Actuator & Gearbox GCM 500-N1

**Highlight thumbnail/kartu produk:**

-
Motorisasi manual

-
Multi gearbox + extended shaft

-
Dapat ditingkatkan ke motorisasi online

**Deskripsi detail produk:**

Telemetri Tepat Untuk Pintu Air Skala Kecil Hingga Menengah

AWGC tipe manual ini dilengkapi actuator dan gearbox 1 x 2000 Nm dan sangat cocok dipasang di pintu air tersier, wilayah irigasi lokal, atau sistem drainase kecil. AWGC tipe manual ini juga dapat menjadi opsi pendukung pintu air di wilayah blank spot.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1745304296.webp`
  - **Gambar utama produk:** -
  - **Brosur PDF:** `konten/produk/brosur/1744710407_BROSUR BE GCM-500-N1.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** `https://drive.google.com/file/d/1LrlU8XWP6ppPxesdDfxdsedWWoRsxV3E/view?usp=drive_link`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat GCM seri: `komponen/gambar/1748595457_GCM.png`
  - **Aset seri perangkat terkait:**
    - Actuator & Gearbox GCM 500-N1 (Sensor): `seri_perangkat/gambar1/1748416066_gcm.png`, `seri_perangkat/gambar2/1748416066_gcm (2).png`

#### 11. BE WGC-1000-NE

- **Slug:** `be-wgc-1000-ne`
- **Sub-solusi:** Automatic Water Gate Controller
- **Solusi produk/use case:** Kanal Irigasi, Bendungan, Drainase
- **Seri perangkat terkait:** BL Logger 1100, Actuator & Gearbox 1000-NE

**Highlight thumbnail/kartu produk:**

-
Kontrol Pintu Air 100% Online

-
Data realtime 24 jam non stop

-
Dilengkapi Data Logger BL-1100

**Deskripsi detail produk:**

Revitalisasi Pintu Air Terbaik yang 100% Online

AWGC seri ini merupakan yang terbaru dikelasnya. Dilengkapi Data Logger BL-1100 yang memungkinkan kontrol pintu air sepenuhnya online, seri ini mampu memberikan data realtime 24 Jam non stop tanpa harus turun ke lapangan. Dirancang dengan ketahanan dan presisi tinggi, AWGC tipe ini cocok untuk pintu air di aliran skala besar seperti bendungan atau irigasi primer.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1744700929.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1744700930.webp`
  - **Brosur PDF:** `konten/produk/brosur/1744710381_BROSUR BE WGC-1000-NE.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** `https://drive.google.com/file/d/1kkZ81p_0lQ90ql9xk0xj4qS_K8tp4liM/view?usp=drive_link`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat WGC seri: `komponen/gambar/1748595473_WGC.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 1100 (Logger): `seri_perangkat/gambar1/1748404047_BL-1100.png`, `seri_perangkat/gambar2/1748572132_4.png`
    - Actuator & Gearbox 1000-NE (Sensor): `seri_perangkat/gambar1/1748659373_gcm.png`, `seri_perangkat/gambar2/1748659373_gcm (2).png`

#### 40. BE GCM-500-N2

- **Slug:** `be-gcm-500-n2`
- **Sub-solusi:** Automatic Water Gate Controller
- **Solusi produk/use case:** Kanal Irigasi, Drainase
- **Seri perangkat terkait:** Actuator & Gearbox GCM 500-N2

**Highlight thumbnail/kartu produk:**

-
Motorisasi manual

-
Multi gearbox + extended shaft

-
Dapat ditingkatkan ke motorisasi online

**Deskripsi detail produk:**

Solusi Tepat Revitalisasi Pintu Air Skala Kecil Hingga Menengah

AWGC tipe manual ini dilengkapi actuator dan gearbox hingga 2 x 2000 Nm dan sangat cocok dipasang di pintu air tersier, wilayah irigasi lokal, atau sistem drainase kecil. AWGC tipe manual ini juga dapat menjadi opsi pendukung pintu air di wilayah blank spot.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1745304270.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1745304270.webp`
  - **Brosur PDF:** -
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** -
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat GCM seri: `komponen/gambar/1748595656_GCM.png`
  - **Aset seri perangkat terkait:**
    - Actuator & Gearbox GCM 500-N2 (Sensor): `seri_perangkat/gambar1/1748416052_gcm.png`, `seri_perangkat/gambar2/1748416052_gcm (2).png`

### Automatic Flow Meter Recorder — Water Security

#### 32. BE FMR-100-FS20

- **Slug:** `be-fmr-100-fs20`
- **Sub-solusi:** Automatic Flow Meter Recorder
- **Solusi produk/use case:** Kanal Irigasi, Drainase
- **Seri perangkat terkait:** BL Logger 1100, Flowmeter Sensor 1000-FS20

**Highlight thumbnail/kartu produk:**

-
Data Debit 24 Jam Non Stop

-
Jangkauan pengukuran hingga 0.03–20 m/s

-
Dilengkapi BL-1100

**Deskripsi detail produk:**

Pilihan Cerdas Pantau Debit Air 24 Jam Non Stop

AFMR merupakan pilihan tepat untuk memantau debit air dan memberikan data realtime selama 24 jam tanpa harus turun ke lapangan langsung. Sensor flowmeter pada perangkat ini juga memungkinkan pengukuran debit (flow rate) dan level ketinggian air sekaligus di segala kondisi lingkungan. Perangkat ini sangat ideal untuk menganalisis debit aktual dan memantau elevasi air.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1745313621.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1745313621.webp`
  - **Brosur PDF:** -
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** -
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat FMR seri: `komponen/gambar/1748595617_FS20.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 1100 (Logger): `seri_perangkat/gambar1/1748404047_BL-1100.png`, `seri_perangkat/gambar2/1748572132_4.png`
    - Flowmeter Sensor 1000-FS20 (Sensor): `seri_perangkat/gambar1/1748416026_fs20.png`, `seri_perangkat/gambar2/1748416026_fs20 (2).png`

### Automatic Deformation Recorder — Water Security

#### 42. BE ADR-1000-RBT32

- **Slug:** `be-adr-1000-rbt32`
- **Sub-solusi:** Automatic Deformation Recorder
- **Solusi produk/use case:** Bendungan
- **Seri perangkat terkait:** BL Logger 1100, Robotic Total Station RBT32

**Highlight thumbnail/kartu produk:**

-
Monitoring Deformasi 24 Jam

-
Kontrol penuh 100% Online

-
Jangkauan ukur hingga 3500 meter

-
Menggunakan prism target

**Deskripsi detail produk:**

Monitoring Deformasi 24 Jam Non Stop dan 100% Online

ADR sangat tepat digunakan untuk memantau deformasi suatu infrastruktur secara berkala tanpa terkendala risiko di lapangan. Terhubung dengan data logger BL-1100, ADR mampu memberikan kontrol penuh data struktur tanah secara online hanya melalui satu aplikasi monitoring. ADR sangat cocok dipasang di ara tebing atau lereng dan bendungan.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1745399773.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1745399773.webp`
  - **Brosur PDF:** -
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** -
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat ADR seri: `komponen/gambar/1748593974_ADR.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 1100 (Logger): `seri_perangkat/gambar1/1748404047_BL-1100.png`, `seri_perangkat/gambar2/1748572132_4.png`
    - Robotic Total Station RBT32 (Sensor): `seri_perangkat/gambar1/1748416008_ADR.png`, `seri_perangkat/gambar2/1748572343_ADR (1).png`

### Automatic Water Quality Recorder — Water Security

#### 46. BE WQR-1000-MP7

- **Slug:** `be-wqr-1000-mp7`
- **Sub-solusi:** Automatic Water Quality Recorder
- **Solusi produk/use case:** -
- **Seri perangkat terkait:** BL Logger 1100, Water Quality Sensor 1000-MP7

**Highlight thumbnail/kartu produk:**

-
8 parameter dalam satu perangkat

-
Kontrol penuh 100% Online

-
Jangkauan kedalaman hingga 61 meter

**Deskripsi detail produk:**

Pantau 8 Parameter Kualitas Air Lewat Satu Perangkat

AWQR adalah pilihan tepat untuk memastikan kualitas air selalu termonitoring secara berkala. Perangkat ini menyediakan data parameter air mulai dari jumlah pH, temperatur, hingga ORP ((Oxidation Reduction Potential). Dengan AWQR, identifikasi pencemaran air atau perubahan lingkungan dapat dilakukan secara cepat.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1745983578.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1745983988.webp`
  - **Brosur PDF:** `konten/produk/brosur/1745983371_BROSUR BE WQR-1000-MP7.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** -
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat WQR seri: `komponen/gambar/1748595694_AWQR.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 1100 (Logger): `seri_perangkat/gambar1/1748404047_BL-1100.png`, `seri_perangkat/gambar2/1748572132_4.png`
    - Water Quality Sensor 1000-MP7 (Sensor): `seri_perangkat/gambar1/1748415991_wqr.png`, `seri_perangkat/gambar2/1748415991_wqr (2).png`

### Automatic Vibrating Wire Recorder — Water Security

#### 15. BE VWR-1000

- **Slug:** `be-vwr-1000`
- **Sub-solusi:** Automatic Vibrating Wire Recorder
- **Solusi produk/use case:** Bendungan
- **Seri perangkat terkait:** -

**Highlight thumbnail/kartu produk:**

-
Data Logger BL-1100

-
Dapat berbagai macam sensor untuk mengukur Kawat Getar

**Deskripsi detail produk:**

Monitoring Struktural Lebih Cerdas dengan AVWR

Perangkat ini dirancang khusus untuk monitoring otomatis pengukuran getaran kawat dalam pemantauan jangka panjang. Menggunakan BE Data Logger, produk unggulan dari Beacon Engineering, perangkat ini menyediakan pencatatan data yang sangat akurat dan otomatis. Kemampuannya untuk mengukur data dari puluhan sensor secara simultan menjadikannya solusi yang ideal, memberikan fleksibilitas untuk memperluas pengukuran sesuai kebutuhan. Perangkat ini menggabungkan Beacon Data Logger, produk premium dari Beacon Engineering. Perangkat ini mampu mengukur data dari berbagai sensor secara bersamaan dan dapat dikembangkan lebih lanjut untuk mendukung aplikasi pengukuran yang lebih luas

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1744700763.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1744700764.webp`
  - **Brosur PDF:** `konten/produk/brosur/1744710317_BROSUR BE AVWR-1000.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** `https://drive.google.com/file/d/1i-j8Fcz7R35KAULIFXjetwooZCtE83Oy/view?usp=drive_link`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat VWR seri: `komponen/gambar/1748595566_AVWR.png`

### Automatic Rain Recorder — Weather Forecast

#### 43. BE RR-1000-TB02

- **Slug:** `be-rr-1000-tb02`
- **Sub-solusi:** Automatic Rain Recorder
- **Solusi produk/use case:** Bendungan
- **Seri perangkat terkait:** BL Logger 1100, Rain Sensor TB02

**Highlight thumbnail/kartu produk:**

-
Berbasis Magnetic Hall Effect

-
Resolusi hingga 0.2 mm

-
Akurasi ±2%

-
Material case Styrosun

-
Support multisensor

**Deskripsi detail produk:**

Solusi Akurat Pantau Curah Hujan Kapan Saja Dimana Saja

ARR tipe ini dapat pencatat curah hujan otomatis dengan basis sensor Magnetic Hall Effect yang dirancang untuk memberikan data presisi tinggi dengan resolusi 0.2 mm dan akurasi ±2%. Menggunakan sistem self-emptying tipping bucket, tipe ini minim perawatan dan siap digunakan dalam berbagai kondisi cuaca ekstrem. Dapat memakai sensor lebih dari satu seperti sensor cuaca atau sensor tinggi muka air.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1745909173.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1745909173.webp`
  - **Brosur PDF:** -
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** `https://drive.google.com/file/d/1FyN-lTSuGwDeG1NgHpl1SvRMuHI6lW5z/view`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat RR seri: `komponen/gambar/1748595942_ARR1K.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 1100 (Logger): `seri_perangkat/gambar1/1748404047_BL-1100.png`, `seri_perangkat/gambar2/1748572132_4.png`
    - Rain Sensor TB02 (Sensor): `seri_perangkat/gambar1/1748328559_4.png`, `seri_perangkat/gambar2/1748328559_3.png`

#### 44. BE RR-100-TB02

- **Slug:** `be-rr-100-tb02`
- **Sub-solusi:** Automatic Rain Recorder
- **Solusi produk/use case:** Bendungan
- **Seri perangkat terkait:** BL Logger 110, Rain Sensor TB02

**Highlight thumbnail/kartu produk:**

-
Berbasis Magnetic Hall Effect

-
Resolusi hingga 0.2 mm

-
Akurasi ±2%

-
Material case Styrosun

-
Single sensor

**Deskripsi detail produk:**

Solusi Akurat Pantau Curah Hujan Kapan Saja Dimana Saja

ARR tipe ini dapat pencatat curah hujan otomatis dengan basis sensor Magnetic Hall Effect yang dirancang untuk memberikan data presisi tinggi dengan resolusi 0.2 mm dan akurasi ±2%. Menggunakan sistem self-emptying tipping bucket, tipe ini minim perawatan dan siap digunakan dalam berbagai kondisi cuaca ekstrem.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1745909880.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1745909881.webp`
  - **Brosur PDF:** `konten/produk/brosur/1745909881_BROSUR BE RR-100-TB02.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** `https://drive.google.com/file/d/13TFOsKXPkgSaDGhb9IV1uYGX9V-fqdWI/view`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat RR seri: `komponen/gambar/1748595675_ARR.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 110 (Logger): `seri_perangkat/gambar1/1748404066_BL-110.png`, `seri_perangkat/gambar2/1748572147_3.png`
    - Rain Sensor TB02 (Sensor): `seri_perangkat/gambar1/1748328559_4.png`, `seri_perangkat/gambar2/1748328559_3.png`

### Automatic Weather Recorder — Weather Forecast

#### 12. BE WR-1000-WS80

- **Slug:** `be-wr-1000-ws80`
- **Sub-solusi:** Automatic Weather Recorder
- **Solusi produk/use case:** Bendungan
- **Seri perangkat terkait:** BL Logger 1100, Weather Sensor 1000-WS80

**Highlight thumbnail/kartu produk:**

-
8 parameter dalam satu perangkat

-
Kontrol penuh 100% Online

-
Tepat dan Akurat

**Deskripsi detail produk:**

Pantau 8 Parameter Cuaca Lewat Satu Perangkat Telemetri

AWR tipe ini mampu mengukur 8 parameter cuaca sekaligus dengan satu sistem terintegrasi. Perangkat ini tahan segala cuaca dengan rating  IP65, kokoh untuk pemasangan outdoor, dan siap mendukung sistem monitoring bendungan dan irigasi dengan performa tinggi.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1744700846.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1744700846.webp`
  - **Brosur PDF:** `konten/produk/brosur/1744710361_BROSUR BE AWR-1000-WS80.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** `https://drive.google.com/file/d/1wdtl6vNQhpQrKeGXEe6Q64JaZ1fkBAxN/view?usp=drive_link`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat WR seri: `komponen/gambar/1748595498_AWR.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 1100 (Logger): `seri_perangkat/gambar1/1748404047_BL-1100.png`, `seri_perangkat/gambar2/1748572132_4.png`
    - Weather Sensor 1000-WS80 (Sensor): `seri_perangkat/gambar1/1748313264_2.png`, `seri_perangkat/gambar2/1748313264_1.png`

### Early Warning System — Early Warning

#### 14. BE EWS-100-WL

- **Slug:** `be-ews-100-wl`
- **Sub-solusi:** Early Warning System
- **Solusi produk/use case:** Kanal Irigasi, Bendungan, Spillway, Drainase
- **Seri perangkat terkait:** BL Logger 110, Early Warning Sensor 100 - WL

**Highlight thumbnail/kartu produk:**

-
4 level peringatan + sound buzzer

-
Suara efektif 117 dB

-
Frekuensi lebar hingga 6500 Hz

-
Siaga 24 Jam Non Stop

**Deskripsi detail produk:**

Empat Level Peringatan Dini dalam Satu Perangkat

Early Warning System tipe ini berbasis multi-level visual dengan 4 level peringatan dan suara keras hingga 117 dB. Perangkat ini tahan segala cuaca dengan rating  IP65, kokoh untuk pemasangan outdoor, dan siap mendukung sistem monitoring bendungan dan irigasi dengan performa tinggi.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1744700792.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1744700792.webp`
  - **Brosur PDF:** `konten/produk/brosur/1744710335_BROSUR BE EWS-100-WL.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** `https://drive.google.com/file/d/1DnjusIOe05QkiFrppwt0bwcEnt7q20Mv/view?usp=drive_link`
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat EWS seri: `komponen/gambar/1748595548_EWS.png`
  - **Aset seri perangkat terkait:**
    - BL Logger 110 (Logger): `seri_perangkat/gambar1/1748404066_BL-110.png`, `seri_perangkat/gambar2/1748572147_3.png`
    - Early Warning Sensor 100 - WL (Sensor): `seri_perangkat/gambar1/1748328579_1.png`, `seri_perangkat/gambar2/1748328579_2.png`

### Smart Telemetry System — STESY Application

#### 38. Smart Telemetry System

- **Slug:** `smart-telemetry-system`
- **Sub-solusi:** Smart Telemetry System
- **Solusi produk/use case:** -
- **Seri perangkat terkait:** -

**Deskripsi detail produk:**

STESY: Solusi Cerdas untuk Monitoring Telemetri

STESY (Smart Telemetry System) memungkinkan pemantauan data secara real-time dari perangkat telemetri yang tersebar di berbagai lokasi. Dengan antarmuka yang intuitif dan fitur analitik yang canggih, STESY mendukung pengambilan keputusan berbasis data dalam sistem pemantauan jarak jauh.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1744872999.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1744872999.webp`
  - **Brosur PDF:** `konten/produk/brosur/1746157274_BROSUR STESY.pdf`
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** -

### Automatic Pressure Level Recorder — Pressure Measurement

#### 39. BE PLR-1000

- **Slug:** `be-plr-1000`
- **Sub-solusi:** Automatic Pressure Level Recorder
- **Solusi produk/use case:** -
- **Seri perangkat terkait:** BL Logger 1100

**Highlight thumbnail/kartu produk:**

-
Pengukuran level tekanan tanpa intervensi manual

-
Deteksi fluktuasi kecil dengan sensitivitas tinggi

-
Pengukuran tekanan hingga 3000 psi

**Deskripsi detail produk:**

Solusi Cerdas Pemantauan Level Tekanan 24/7

APLR adalah alat pemantau otomatis yang digunakan untuk merekam dan mengirimkan data tekanan fluida seperti air tanah atau gas secara real-time. Menggunakan sensor tekanan presisi tinggi, mengirimkannya melalui sistem telemetri (GSM, radio, atau satelit) ke pusat pemantauan. Dengan APLR, level tekanan dipantau otomatis setiap saat tanpa harus ke lapangan.

**Aset produk:**
  - **Thumbnail produk:** `konten/produk/gambar_thumbnail_produk/1745225630.webp`
  - **Gambar utama produk:** `konten/produk/gambar_produk/1745225630.webp`
  - **Brosur PDF:** -
  - **Link LKPP lokal/general:** -
  - **Link LKPP sektoral/regency:** -
  - **Link TKDN:** -
  - **Aset komponen/topologi:**
    - Bagaimana topologi perangkat PLR seri: `komponen/gambar/1748598243_APLR (1).png`
  - **Aset seri perangkat terkait:**
    - BL Logger 1100 (Logger): `seri_perangkat/gambar1/1748404047_BL-1100.png`, `seri_perangkat/gambar2/1748572132_4.png`

## 3. Proyek

### Kategori: Irigasi

#### 26. Proyek Telemetri AWQR Sungai Sepaku IKN

- **Slug:** `proyek-telemetri-awqr-sungai-sepaku-ikn`
- **Klien:** BWS Kalimantan IV
- **Kategori:** Irigasi
- **Lokasi:** Kalimantan Timur
- **Tahun/Waktu:** 2024
- **Website:** https://www.ikn.go.id/

**Deskripsi proyek:**

Menelusuri
Beacon
Engineering di Sungai Sepaku IKN

Sungai Sepaku adalah sungai utama yang mengalir di wilayah Kabupaten Penajam Paser Utara, Kalimantan Timur. Sungai ini menjadi sumber daya air strategis nasional karena menjadi pemasok utama air baku bagi pembangunan dan pengoperasian Ibu Kota Nusantara (IKN). Air dari Sungai Sepaku akan mendukung kebutuhan domestik, industri, hingga ruang terbuka hijau kota masa depan Indonesia.

Fungsinya yang krusial mengharuskan adanya sistem pemantauan yang ketat terhadap kualitas air di Sungai Sepaku. Maka dari itu, Beacon Engineering bekerja sama dengan
PT Brantas Abipraya
dan
BBWS Samarinda
menyediakan solusi Automatic Water Quality Recorder atau AWQR.

Tantangan Sungai Sepaku sebagai Penyedia Air Baku Utama

Sebagai pemasok utama air baku di Ibu Kota Nusantara, Sungai Sepaku menghadapi tantangan besar dalam menjaga kualitas airnya.
Catchment area
Sungai Sepaku berada di kawasan yang masih mengalami aktivitas pembukaan lahan, dan kegiatan domestik masyarakat. Risiko pencemaran seperti sedimentasi tinggi, limbah rumah tangga, pertanian (pupuk/pestisida) dan logam berat dapat mencemari air sungai. Jika kualitas air menurun karena pencemaran ini, seluruh rantai pasokan air di IKN tentunya akan terganggu.

**Solusi/implementasi Beacon:**

Apa Solusi dari Beacon Engineering?

Untuk memberikan solusi atas permasalahan pemantauan kualitas air di Sungai Sepaku IKN, Beacon Engineering menyediakan solusi Automatic Water Quality Recorder atau AWQR dengan keunggulan berikut:

-
Memantau 8 parameter kualitas air dalam satu waktu

-
Akses seluruh data online

-
Meminimalkan inspeksi langsung ke lapangan

Dengan AWQR, kualitas air di Sungai Sepaku kini tetap terjaga. Ingin tahu lebih banyak? Hubungi kami sekarang juga!

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/1744622458_5.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/WWCGTyTQp7CoBBt2xvJILhIRFoI0rjLSLFRWA7k5.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332162_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1745988459_14.webp`
    - `projek_images/1745988459_15.webp`
    - `projek_images/1745988459_16.webp`
    - `projek_images/1745988459_17.webp`

#### 25. Proyek Telemetri AFMR & ARR DAS Bogowonto

- **Slug:** `proyek-telemetri-afmr-arr-das-bogowonto`
- **Klien:** BBWS Serayu Opak
- **Kategori:** Irigasi
- **Lokasi:** Jawa Barat
- **Tahun/Waktu:** 2024
- **Website:** https://sda.pu.go.id/balai/bbwsserayuopak/

**Deskripsi proyek:**

Menelusuri Beacon Engineering di DAS Bogowonto

Daerah Aliran Sungai (DAS) Bogowonto merupakan salah satu DAS strategis di wilayah Jawa Tengah dan Yogyakarta, mencakup aliran Sungai Bogowonto yang mengalir dari Pegunungan Menoreh menuju Samudra Hindia. DAS ini memiliki peran penting dalam pengelolaan sumber daya air untuk irigasi, pengendalian banjir, dan penyediaan air baku bagi masyarakat di sekitarnya.

Karena pentingnya DAS Bogowonto bagi keberlanjutan air di wilayah Jawa Tengah dan Yogyakarta, dibutuhkan sistem monitoring hidrologi dan meteorologi yang andal, real-time, dan dapat diakses secara daring untuk mendukung pengambilan keputusan.
Beacon Engineering
bekerja sama dengan
BBWS Serayu Opak
dan
PT Brantas Abipraya Indah Nusa KSO
memberikan solusi berupa Automatic Flowmeter Recorder (AFMR) dan Automatic Rainfall Recorder (ARR). Proyek ini dimulai pada Januari hingga Maret 2024.

Tantangan DAS Bogowonto

Selain memiliki peran yang penting, DAS Bogowonto juga memiliki tantangan dalam pengelolaannya. Kompleksitas topografi dan pola hujan ekstrem di wilayah ini kerap menimbulkan tantangan dalam mitigasi bencana banjir. Selain itu, beberapa titik pantau berada di daerah terpencil dan sukar dilakukan inspeksi manual.

**Solusi/implementasi Beacon:**

Apa Solusi dari Beacon Engineering?

Untuk menjawab tantangan di atas, Beacon Engineering menyediakan solusi Automatic Flowmeter Recorder (AFMR) dan Automatic Rainfall Recorder (ARR). Kedua perangkat telemetri ini berguna untuk:

-

Mengukur tinggi muka air dan intensitas curah hujan

-

Dilengkapi sensor high-end level yang akurat dan tahan cuaca ekstrem

-

Sumber daya memadai untuk pemantauan mandiri

-

Akses seluruh data 100% Online

Ingin tahu lebih banyak soal DAS Bogowonto? Konsultasi hari ini juga!

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/1744622304_4.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/R2w2dkyAqBD1sRjfTpTlbVHpdVy6hOpSOZKnINi1.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332250_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1745987852_10.webp`
    - `projek_images/1745987852_11.webp`
    - `projek_images/1745987852_12.webp`
    - `projek_images/1745987852_13.webp`

#### 23. Proyek Telemetri AWLR Bendungan Sepaku IKN

- **Slug:** `proyek-telemetri-awlr-bendungan-sepaku-ikn`
- **Klien:** PT. Brantas Abipraya
- **Kategori:** Irigasi
- **Lokasi:** Kalimantan Timur
- **Tahun/Waktu:** 2024
- **Website:** https://www.brantas-abipraya.co.id/

**Deskripsi proyek:**

Menelusuri
Beacon
Engineering di Sepaku Semoi IKN

Bendungan Sepaku Semoi terletak di Desa Sukaraja, Kecamatan Sepaku, Kabupaten Penajam Paser Utara, Kalimantan Timur. Bendungan Sepaku Semoi merupakan infrastruktur suplai utama air baku bagi Ibu Kota Nusantara (IKN). Letaknya yang krusial mengharuskan sistem pemantauan dan pengelolaan dilakukan secara
real-time
dan terintegrasi.

Beacon Engineering
kemudian mengimplementasikan
Sistem Telemetri
untuk mengatasi tantangan tersebut. Proyek ini dimulai pada Juli - Agustus 2024 dan fokus untuk penyediaan data kualitas air, peringatan dini banjir, hingga kontrol pintu air.

Tantangan Bendungan Sepaku Semoi di IKN

Karena perannya sebagai sumber air baku utama, tidak tersedianya data elevasi air secara real-time menjadi masalah utama Sepaku Semoi. Hal ini dapat menyebabkan keterlambatan deteksi potensi kekurangan air baku atau kelebihan debit yang mengancam keselamatan bendungan. Selain itu, pemantauan bendungan perlu secara ketat dilakukan oleh berbagai pihak seperti Balai Besar Wilayah Sungai (BBWS) dan Kementerian PUPR. Untuk itu, diperlukan suatu platform pemantauan terpadu yang mudah diakses oleh pihak terkait dan datanya dapat diaudit, dievaluasi, hingga dilaporkan untuk keperluan teknis maupun administratif.

**Solusi/implementasi Beacon:**

Apa Solusi dari Beacon Engineering?

Untuk menjawab tantangan di atas, Beacon Engineering menyediakan perangkat Automatic Water Level Recorder atau AWLR. Keunggulan AWLR untuk Sepaku Semoi adalah:

-
Mengukur ketinggian air hingga 15 meter

-
Memberikan data level air secara kontinyu

-
Tersedia dashboard web untuk monitoring

Ingin tahu lebih banyak tentang proyek ini? Konsultasikan dengan kami sekarang juga!

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/HUAoAo72YInyGLidCgO2beSIK5JYL5lYBmsCHHFI.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/vUP9kVWgPQ1URLMwJ18KyVs26PqiKcTUMsgoBJEz.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762333118_1733201952_PT. Brantas Abipraya.webp`
  - **Galeri proyek:**
    - `projek_images/1745987494_6.webp`
    - `projek_images/1745987494_7.webp`
    - `projek_images/1745987494_8.webp`
    - `projek_images/1745987495_9.webp`

#### 33. Proyek Telemetri AWQR Sidoarjo

- **Slug:** `proyek-telemetri-awqr-sidoarjo`
- **Klien:** Dinas PUSDA Provinsi Jawa Timur
- **Kategori:** Irigasi
- **Lokasi:** Jawa Timur
- **Tahun/Waktu:** 2023
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/4oq5Hw4qyGjG3i3CiYj6UyZAA8d16aDYzWSu4TdH.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/QvM4QQL9g0mzhxrmyvp3GihLY0Tykwv0yOUUhlCi.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332803_1744616486_8.webp`
  - **Galeri proyek:** -

#### 31. Proyek Telemetri AWGC Bendung Cikeusik

- **Slug:** `proyek-telemetri-awgc-bendung-cikeusik`
- **Klien:** BBWS Cimanuk Cisanggarung
- **Kategori:** Irigasi
- **Lokasi:** Jawa Barat
- **Tahun/Waktu:** 2023
- **Website:** -

**Deskripsi proyek:**

Menelusuri
Beacon
Engineering di Cikeusik Cirebon

Proyek ini merupakan salah satu komitmen nyata Beacon Engineering dalam menyediakan solusi pengelolaan air terintegrasi di Indonesia, khususnya wilayah irigasi. Menggandeng
BBWS Cimanuk-Cisanggarung
dan

PT Wijaya Karya
sebagai mitra, proyek ini dilaksanakan mulai 28 Agustus 2023 dan selesai pada 10 Desember 2023. Instalasi telemetri dalam proyek ini dilakukan di area bendungan Desa Legok, Kecamatan Cidahu, Kabupaten Kuningan, Jawa Barat. Adapun perangkat telemetri yang dipasang pada area ini adalah Automatic Water Gate Controller atau AWGC.

Tantangan di Bendung Cikeusik

Dalam pengelolaan Bendung Cikeusik, ditemukan banyak kendala terkait sistem kerja pintu yang masih konvensional. Masalah pokoknya adalah soal waktu. Kendali pintu air konvensional cenderung memakan waktu lebih lama dalam motorisasinya. Keluhan juga muncul dari sisi personil yang kewalahan dalam memantau pintu air di Bendung Cikeusik selama 24 jam. Lewat permasalahan tersebut, diperlukan transformasi teknologi yang mumpuni untuk meningkatkan efektifitas manajemen pintu air di Bendung Cikeusik.

**Solusi/implementasi Beacon:**

Apa Solusi dari Beacon Engineering?

Untuk masalah tersebut, perangkat telemetri yang terpasang dalam proyek ini terdiri dari satu paket Automatic Water Gate Controller atau AWGC dengan keunggulan:

-
Motorisasi pintu air 100% otomatis

-
Waktu buka tutup pintu air dipangkas lebih cepat

-
Akses seluruh titik pemantauan online

-
Tersedia dashboard monitoring terpadu STESY

Hadirnya AWGC sangat membantu managemen operasional di Bendung Cikeusik. Ingin berkonsultasi lebih lanjut? Hubungi kami sekarang!

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/DSe7wbJ08IqV1CJtr9zwvcIuDGr5wyd1ovtY0F8Z.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/dMGGkHtnhBCrsgz6g9akKrGbAPyLcMjxy9rmJROr.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332246_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746248054_25.webp`
    - `projek_images/1746248054_26.webp`
    - `projek_images/1746248054_27.webp`

#### 24. Proyek Telemetri AWGC Sungai Cisadane

- **Slug:** `proyek-telemetri-awgc-sungai-cisadane`
- **Klien:** BBWS Ciliwung Cisadane
- **Kategori:** Irigasi
- **Lokasi:** Jawa Barat
- **Tahun/Waktu:** 2023
- **Website:** https://bbwscimancis.id

**Deskripsi proyek:**

Beacon
Engineering di Sungai Cisadane Banten

Sungai Cisadane merupakan salah satu sungai utama di Provinsi Banten dan Jawa Barat yang memegang peranan vital dalam suplai air baku, irigasi, serta pengendalian banjir. Sebagai sungai dengan karakter aliran cepat dan debit fluktuatif, manajemen pengaturan pintu air di sepanjang sungai ini menjadi sangat krusial.

Salah satu titik pengendalian berada di wilayah Tangerang, tempat beberapa pintu air beroperasi secara semi-manual. Pada proyek ini, Beacon Engineering bekerja sama dengan
BBWS Ciliwung-Cisadane
untuk melakukan revitalisasi pintu air dengan
Automatic Water Gate Controller (AWGC).

Tantangan di Aliran Sungai Cisadane

Pintu air di Sungai Cisadane yang masih beroperasi semi-manual awan mengalami kegagalan operasi akibat kondisi mekanik dan kurangnya sistem monitoring serta kontrol yang terintegrasi. Selain itu, banyak struktur mekanik pintu air yang aus atau tidak berfungsi maksimal (sliding rod & shaft). Kondisi ini juga menyebabkan sehingga pengoperasian saat kondisi darurat banjir memerlukan tenaga dan waktu lebih lama.

**Solusi/implementasi Beacon:**

Apa Solusi dari Beacon Engineering

Beacon Engineering melalui sistem menghadirkan solusi modern untuk pengelolaan pintu air berupa Automatic Water Gate Controller atau AWGC yang mencakup:

-
Pintu air otomatis GCM-1000-N2

-
Panel kontrol otomatis

-
IP Cam Outdoor untuk keamanan perangkat

Penerapan sistem
AWGC Beacon Engineering
di Sungai Cisadane, Tangerang, merupakan langkah modernisasi manajemen pintu air yang sangat diperlukan di era perubahan iklim dan peningkatan risiko banjir.

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/1744622009_3.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/IIIJ52DyLQPdkK6EFHH4hjrHYu3JiuQq3IPYGWox.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332241_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746171062_18.webp`
    - `projek_images/1746171062_19.webp`

#### 42. Proyek Telemetri AWLR DSDA DKI Jakarta

- **Slug:** `proyek-telemetri-awlr-dsda-dki-jakarta`
- **Klien:** Dinas SDA Provinsi DKI Jakarta
- **Kategori:** Irigasi
- **Lokasi:** Jakarta
- **Tahun/Waktu:** 2022
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/vUdHGJu6IXjY8gH6LqL4xT1W5HrMxuI29YLCQvCy.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/rqa2aoyuVaIM2WAELSF5wCUOQlIHKFljWY145w5f.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332845_1744616457_6.webp`
  - **Galeri proyek:**
    - `projek_images/1746518582_62.webp`
    - `projek_images/1746518582_63.webp`
    - `projek_images/1746518582_64.webp`

#### 32. Proyek Telemetri AWLR PUSDA Jawa Timur Hidrologi

- **Slug:** `proyek-telemetri-awlr-pusda-jawa-timur-hidrologi`
- **Klien:** Dinas PUSDA Provinsi Jawa Timur
- **Kategori:** Irigasi
- **Lokasi:** Jawa Timur
- **Tahun/Waktu:** 2022
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/Ytgm9tOqxCWt5j2JcmjlrpFdcT8S3wohyWmN2RN8.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/fCZZAuvwpTWBBAFLCVTd6OJ7eesJuzasRUGg75pO.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332803_1744616486_8.webp`
  - **Galeri proyek:**
    - `projek_images/1746516320_42.webp`
    - `projek_images/1746516320_43.webp`
    - `projek_images/1746516320_44.webp`
    - `projek_images/1746516320_45.webp`
    - `projek_images/1746516320_46.webp`
    - `projek_images/1746516320_47.webp`
    - `projek_images/1746516320_48.webp`
    - `projek_images/1746516320_49.webp`
    - `projek_images/1746516320_50.webp`

#### 47. Proyek Telemetri AWLR BBWS Serayu Opak Hidrologi

- **Slug:** `proyek-telemetri-awlr-bbws-serayu-opak-hidrologi`
- **Klien:** BBWS Serayu Opak
- **Kategori:** Irigasi
- **Lokasi:** Yogyakarta
- **Tahun/Waktu:** 2016
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/PtwEWZZbDTNWx4iWLc7cDN8sgTJATqhMeZybx4B8.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/s9JI86UVRjxEWUDDlBLOyhgg7GYZ2Nh2UYIxfk6K.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332250_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1747125908_90.webp`
    - `projek_images/1747125908_91.webp`

### Kategori: Bendungan

#### 51. Proyek Telemetri Bendungan Keureuto

- **Slug:** `proyek-telemetri-bendungan-keureuto`
- **Klien:** BWS Sumatra I Aceh
- **Kategori:** Bendungan
- **Lokasi:** Aceh Utara
- **Tahun/Waktu:** 2024
- **Website:** https://sda.pu.go.id/balai/bwssumatera1/article/masuk-tahap-impounding-bendungan-keureuto-siap-diresmikan

**Deskripsi proyek:**

Menelusuri
Beacon
Engineering di Bendungan Keureuto Aceh

Bendungan Keureuto Aceh merupakan bendungan yang terletak di Desa Blang Pante, Kecamatan Paya Bakong, Kabupaten Aceh Utara. Bendungan Keureuto Aceh berfungsi sebagai pengendali banjir, penyedia air baku, dan penyuplai energi bagi wilayah sekitarnya. Namun, pengoperasian bendungan yang sangat besar ini tidak bisa bergantung pada metode manual saja. Dibutuhkan sistem yang mampu memantau parameter kritis secara real-time dan akurat — dari tinggi muka air hingga kestabilan struktur.

Untuk menjawab tantangan di Bendungan Keureuto Aceh tersebut,
BWS Sumatra I Aceh
bersama
PT Brantas Abipraya
menggandeng
Beacon Engineering
dalam merancang dan menerapkan sistem telemetri menyeluruh. Proyek ini berjalan sejak Juli - September 2024 dan menghadirkan solusi monitoring air, cuaca, dan geoteknik secara digital, cepat, dan presisi,

Tantangan di Bendungan Keureuto

Bendungan Keureuto menghadapi beberapa tantangan dalam infrastrukturnya, berikut rangkuman singkat masalah yang dihadapi di Bendungan Keureuto:

-
Medan terpencil dan sulit diakses

-
Kapasitas operasional minim

-
Titik pemantauan rawan error

-
Kebutuhan data sangat kompleks

-
Operator kesulitan memahami sistem kerja monitoring

-
Data mentah dari lapangan sulit dianalisis

Untuk menghadapi tantangan tersebut, Beacon Engineering hadir dengan solusi telemetri yang menyeluruh dan mendetail untuk setiap masalah yang dihadapi di Bendungan Keureuto.

**Solusi/implementasi Beacon:**

Apa saja solusi dari Beacon Engineering?

Untuk menjawab kebutuhan di Keureuto, Beacon Engineering menghadirkan beberapa perangkat telemetri di bawah ini:

-
Automatic Water Level Recorder - V Notch

-
Automatic Water Level Recorder - Open Standpipe

-
Automatic Water Level Recorder - Intake

-
Automatic Vibrating Wire Recorder

-
Automatic Weather Recorder

-
STESY (Smart Telemetry Systems)

-
Acces Point Radio Communication

Hadirnya perangkat telemetri di atas berdampak pada keandalan data di Bendungan Keureuto Aceh yang berkali lipat lebih efisien. Selain itu, masalah operasional berupa penyediaan personil juga dapat teratasi. Sistem telemetri tersebut juga mampu meminimalisasi risiko kecelakaan kerja bagi personil di lapangan.

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/1748573716_Gambar Proyek Bawah.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/dy1RycPfJ1g06YurPksta3zonbznmdnr9vd8i5rx.webp`
  - **White paper:** `https://drive.google.com/file/d/1ha3Jq5pNU5mAkJNLcJNzadS5iM_rxIAd/view?usp=sharing`
  - **Logo klien:** `klien/1762332240_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1748576172_101.webp`
    - `projek_images/1748576172_102.webp`
    - `projek_images/1748576172_103.webp`

#### 22. Proyek Telemetri ADR Bendungan Ciawi

- **Slug:** `proyek-telemetri-adr-bendungan-ciawi`
- **Klien:** BBWS Ciliwung Cisadane
- **Kategori:** Bendungan
- **Lokasi:** Jawa Barat
- **Tahun/Waktu:** 2024
- **Website:** https://sda.pu.go.id/balai/bbwscilicis/

**Deskripsi proyek:**

Menelusuri
Beacon
Engineering di Bendungan Ciawi

Bendungan Ciawi adalah bagian dari sistem pengendalian banjir wilayah DKI Jakarta yang terletak di kecamatan Ciawi, Kabupaten Bogor, Jawa Barat, Indonesia. Bedungan Ciawi tidak hanya dituntut mampu menampung air secara efektif, tetapi juga harus memiliki sistem pemantauan struktur yang andal dan presisi.

Untuk menjawab kebutuhan tersebut,
Beacon Engineering
bekerja sama dengan
PT. Guna Rogate Indah
menghadirkan sistem instrumentasi deformasi berbasis telemetri bernama Automatic Deformation Recorder yang terintegrasi dengan aplikasi STESY atau
Smart Telemetry Systems
. Solusi ini adalah bentuk nyata inovasi Beacon Engineering dalam menghadirkan data deformasi yang presisi dan efisien.

Tantangan Bendungan Ciawi sebagai
Dry Dam

Bendungan Ciawi dibangun di wilayah dengan kontur tanah yang rawan pergerakan. Selain itu, perannya sebagai
dry dam
(bendungan kering)
membuat bendungan ini akan terisi air jika terjadi luapan di Hulu Sungai Ciliwung. Tekanan air yang mendadak ini dapat menyebabkan
differential settlement
atau penurunan tanah tidak merata. Sementara itu, inspeksi manual secara visual tidak cukup sensitif untuk mendeteksi pergeseran terutama di lereng-lereng yang sulit dijangkau.

**Solusi/implementasi Beacon:**

Apa Solusi dari Beacon Engineering?

Untuk menjawab permasalahan di atas, Beacon Engineering menghadirkan Automatic Deformation Recorder atau ADR. Beberapa poin penting dari ADR yang dapat membantu penyediaan data di Bendungan Ciawi adalah:

-
Monitoring deformasi dari 30 titik target

-
Dilengkapi Data Logger BL-1100 untuk penyediaan data realtime

-
Akses data hanya melalui STESY

-
Pengolahan data dengan visualisasi

-
Dukungan custom dashboard sesuai kebutuhan di lapangan

Dengan berbagai kelebihan ini, ADR dapat memberikan manfaat berupa Deteksi dini pergeseran struktur bendungan dan efisiensi personil lapangan di Ciawi.

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/bcSq5GsBMuytCKFj4XoMNtBW3byK9585xQ8fkuSS.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/anDfw1Dx5hfgN8J5Th8SSkieYRvaBb75hHrZEpnO.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332241_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1745986529_1.webp`
    - `projek_images/1745986529_2.webp`
    - `projek_images/1745986529_3.webp`
    - `projek_images/1745986529_4.webp`
    - `projek_images/1745986530_5.webp`

#### 36. Proyek Telemetri AWLR & AVWR Bendungan Situ Lembang

- **Slug:** `proyek-telemetri-awlr-avwr-bendungan-situ-lembang`
- **Klien:** BBWS Citarum
- **Kategori:** Bendungan
- **Lokasi:** Jawa Barat
- **Tahun/Waktu:** 2023
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/hvw0hzNXKMeSrJQvj4zC3AZDIOmOSRUCU0aAgoxU.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/uU9ZYLEic9FKZbVrLwsabaZ0vBkHN6ijKdNIkA6b.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332248_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746416058_35.webp`
    - `projek_images/1746416058_36.webp`
    - `projek_images/1746416058_37.webp`
    - `projek_images/1746416058_38.webp`

#### 35. Proyek Telemetri ARR & AWR Bendungan Bagong

- **Slug:** `proyek-telemetri-arr-awr-bendungan-bagong`
- **Klien:** BBWS Brantas
- **Kategori:** Bendungan
- **Lokasi:** Jawa Timur
- **Tahun/Waktu:** 2023
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/Tk2ppx1stJO3DBJUhvmjeMkunMEXBJRkB1L4RU7d.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/utLGVGMOsh3xaiVAk5BgRpaRGdulbvC8DbcRFefA.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332245_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746415039_31.webp`
    - `projek_images/1746415039_32.webp`
    - `projek_images/1746415039_33.webp`
    - `projek_images/1746415039_34.webp`

#### 27. Proyek Telemetri AWLR Bendungan Cipanas

- **Slug:** `proyek-telemetri-awlr-bendungan-cipanas`
- **Klien:** BBWS Cimanuk Cisanggarung
- **Kategori:** Bendungan
- **Lokasi:** Jawa Barat
- **Tahun/Waktu:** 2023
- **Website:** https://sda.pu.go.id/balai/bbwscimancis/

**Deskripsi proyek:**

Menelusuri
Beacon
Engineering di Bendungan Cipanas

Bendungan Cipanas merupakan salah satu proyek strategis nasional yang dibangun untuk mendukung ketahanan air di wilayah Jawa Barat, terutama di kawasan Kabupaten Sumedang dan sekitarnya. Dengan kapasitas tampung ±250 juta m³ dan peran vital dalam penyediaan irigasi, air baku, hingga pengendalian banjir, pengelolaan data tinggi muka air (TMA) secara real-time menjadi kebutuhan mutlak.

Dalam upaya meningkatkan pengawasan kondisi hidrologis, Beacon Engineering bekerja sama dengan
BBWS Cimancis
dan
PT Wijaya Konstruksi
dalam pengadaan sistem AWLR atau Automatic Water Level Recorder sebagai teknologi utama pemantauan di lokasi ini.

Tantangan Bendungan Cipanas Sumedang

Lingkungan sekitar bendungan cenderung lembab dan memiliki potensi endapan sedimen yang tinggi di sekitar area intake. Selain itu, fluktuasi elevasi muka air cenderung cepat terutama saat musim hujan. Maka dari itu, diperlukan sistem pemantauan kontinu yang cepat dan presisi.

**Solusi/implementasi Beacon:**

Solusi dari Beacon Engineering

Untuk menjawab tantangan tersebut, Beacon Engineering mengimplementasikan Automatic Water Level Recorder dengan sensor tranduser  dengan keunggulan:

-
Mengukur tinggi muka air dari konversi tekanan air

-
Tahan terhadap endapan tingi

-
Akses data 100% online

-
Platform monitoring terpadu dengan
STESY

Implementasi sistem telemetri AWLR di Bendungan Cipanas merupakan bagian dari transformasi digital sektor pengelolaan sumber daya air.

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/1744622632_6.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/vDDdndmUVDSO259Xa4HKSGmnE3lmAsozfItYU404.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332246_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746171787_20.webp`
    - `projek_images/1746171787_21.webp`

#### 41. Proyek Telemetri AWLR & EWS Bendungan Bener

- **Slug:** `proyek-telemetri-awlr-ews-bendungan-bener`
- **Klien:** BBWS Serayu Opak
- **Kategori:** Bendungan
- **Lokasi:** Jawa Tengah
- **Tahun/Waktu:** 2022
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/GgsjRkytvRy95hDLNLJ7Qg3XwTd9m3SrFHwj1RnV.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/uVmIqR3MuAve65zKDeW4Ef7MdRa1YcDbularKw3C.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332250_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746518162_59.webp`
    - `projek_images/1746518162_60.webp`
    - `projek_images/1746518162_61.webp`

#### 40. Proyek Telemetri AWLR Bendungan Semantok

- **Slug:** `proyek-telemetri-awlr-bendungan-semantok`
- **Klien:** BBWS Brantas
- **Kategori:** Bendungan
- **Lokasi:** Jawa Timur
- **Tahun/Waktu:** 2022
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/FHIgYWBXvSR8jsK4KkwRv2bPsIQGtzIG3DqSgCch.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/7x32rVVzIiE7HpewLezvKQsuXxfZJ7aPfwpYMwi5.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332245_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746517528_54.webp`
    - `projek_images/1746517528_55.webp`
    - `projek_images/1746517528_56.webp`
    - `projek_images/1746517528_57.webp`
    - `projek_images/1746517528_58.webp`

#### 39. Proyek Telemetri AWR Bendungan Bintang Bano

- **Slug:** `proyek-telemetri-awr-bendungan-bintang-bano`
- **Klien:** BWS NT1
- **Kategori:** Bendungan
- **Lokasi:** Nusa Tenggara Barat
- **Tahun/Waktu:** 2022
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/qo4fddOJEJAHthARVqKXOAcAbDwxSyYnL6M3Qn5A.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/xBRBvY2P8E5Y0Ox9gtvFYuiY8fTEE5UrFAuuioMw.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332243_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746516757_51.webp`
    - `projek_images/1746516757_52.webp`
    - `projek_images/1746516757_53.webp`

#### 46. Proyek Telemetri AWR Bendungan Napungete

- **Slug:** `proyek-telemetri-awr-bendungan-napungete`
- **Klien:** BWS NT2
- **Kategori:** Bendungan
- **Lokasi:** Nusa Tenggara Timur
- **Tahun/Waktu:** 2021
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/fuOG8j0Hs4wJ6KYaH7Ns9QKTnVYug8naqPwqB76J.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/q6wuX3SXnc1ilqa210VFFgO2Lz918mB1f3JksxEs.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332242_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1747119355_83.webp`
    - `projek_images/1747119356_84.webp`
    - `projek_images/1747119356_85.webp`
    - `projek_images/1747119356_86.webp`
    - `projek_images/1747119356_87.webp`
    - `projek_images/1747119356_88.webp`
    - `projek_images/1747119356_89.webp`

#### 45. Proyek Telemetri AWR, AWLR, & AVWR Bendungan Tukul

- **Slug:** `proyek-telemetri-awr-awlr-avwr-bendungan-tukul`
- **Klien:** BBWS Bengawan Solo
- **Kategori:** Bendungan
- **Lokasi:** Jawa Timur
- **Tahun/Waktu:** 2021
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/tQsADFN1a0TSyKpdwpuDcsWT3tTaJNEAsk6Kvn5x.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/lPetuqwPM58Mz6u9VN1tuoqhBczgKHYepDQyLj3M.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332244_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1747117813_80.webp`
    - `projek_images/1747117813_81.webp`
    - `projek_images/1747117813_82.webp`

#### 44. Proyek Telemetri AWR Bendungan Bendo

- **Slug:** `proyek-telemetri-awr-bendungan-bendo`
- **Klien:** BBWS Bengawan Solo
- **Kategori:** Bendungan
- **Lokasi:** Jawa Timur
- **Tahun/Waktu:** 2021
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/vRf49TZg5euqBxTYBuqNklpfu6LwsikDI0XvZDP0.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/1FWnS22QG1guRbJd61m1Q8i9KJfiZpabW6a1Y1s6.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332239_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746522837_75.webp`
    - `projek_images/1746522837_76.webp`
    - `projek_images/1746522837_77.webp`
    - `projek_images/1746522837_78.webp`
    - `projek_images/1746522837_79.webp`

#### 43. Proyek Telemetri AWR Bendungan Kuningan

- **Slug:** `proyek-telemetri-awr-bendungan-kuningan`
- **Klien:** BBWS Cimanuk Cisanggarung
- **Kategori:** Bendungan
- **Lokasi:** Jawa Barat
- **Tahun/Waktu:** 2021
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/u4xW2L1BTPsrYDc4oYK7myIow3S54upcqIM6oVr7.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/shvQHcmW2dMpN7aElzoGpSZ2n4NdXy2HhsljgfK8.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332246_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746522539_72.webp`
    - `projek_images/1746522539_73.webp`
    - `projek_images/1746522539_74.webp`
    - `projek_images/1746522539_75.webp`

#### 29. Proyek Telemetri AWR Bendungan Jlantah

- **Slug:** `proyek-telemetri-awr-bendungan-jlantah`
- **Klien:** PT. Adhi Karya
- **Kategori:** Bendungan
- **Lokasi:** Jawa Tengah
- **Tahun/Waktu:** 2021
- **Website:** https://adhi.co.id/

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/HnPzliq3vEszSnONzT9vRciL3JD3yAFqikM1ZwtB.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/DxWazxAal3SchWeRh8YJLG72B9fw9jXLZP9dLdxA.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762333140_1733201944_PT. Adhi Karya.webp`
  - **Galeri proyek:**
    - `projek_images/1746522195_70.webp`

#### 28. Proyek Telemetri EWS Bendungan Leuwikeris

- **Slug:** `proyek-telemetri-ews-bendungan-leuwikeris`
- **Klien:** BBWS Citanduy
- **Kategori:** Bendungan
- **Lokasi:** Jawa Barat
- **Tahun/Waktu:** 2021
- **Website:** https://sda.pu.go.id/balai/bbwscitanduy/artikel/2/informasi-umum

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/kwpd0kHUN9sMlmtT19hSwred78K80hYMXzs2bJfL.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/AyynyIgzzIwxz62iAziSVguIQgjE7soUpEkiRV92.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332247_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1746521927_65.webp`
    - `projek_images/1746521927_66.webp`
    - `projek_images/1746521927_67.webp`
    - `projek_images/1746521927_68.webp`

#### 48. Proyek Telemetri AWLR & AVWR Bendungan Sermo

- **Slug:** `proyek-telemetri-awlr-avwr-bendungan-sermo`
- **Klien:** BBWS Serayu Opak
- **Kategori:** Bendungan
- **Lokasi:** Yogyakarta
- **Tahun/Waktu:** 2014
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/QKHGKOnzxgo9XpJY41VVVZ2rjUbe1rg2ZqDU3hzh.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/PCzyFITs7ueXnGueTh2JWFrdczOwxmb8ICl3B9Wi.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332250_1733201796_BBWS Serayu Opak.webp`
  - **Galeri proyek:**
    - `projek_images/1747194662_96.webp`
    - `projek_images/1747194662_97.webp`

### Kategori: Klimatologi

#### 37. Proyek Telemetri ARR Perum Jasa Tirta I Surabaya

- **Slug:** `proyek-telemetri-arr-perum-jasa-tirta-i-surabaya`
- **Klien:** Perum. Jasa TIrta I
- **Kategori:** Klimatologi
- **Lokasi:** Jawa Timur
- **Tahun/Waktu:** 2023
- **Website:** -

**Deskripsi proyek:**

Menelusuri
Beacon
Engineering bersama Perum Jasa Tirta I Surabaya

Perum Jasa Tirta I merupakan salah satu BUMN yang mengelola sumber daya air di wilayah Sungai Brantas dan Bengawan Solo, termasuk pengawasan hidrologi di area urban padat seperti Kota Surabaya. Balai BK Gubeng merupakan salah satu titik strategis untuk pemantauan curah hujan sebagai bagian dari sistem mitigasi banjir dan pengelolaan drainase kota.

Kondisi Surabaya sebagai kota pesisir yang datar, dengan sistem drainase yang sangat tergantung pada data hidrometeorologi real-time, menuntut adanya sistem monitoring yang presisi dan otomatis. Dalam konteks ini, pengadaan sistem Telemetri Automatic Rainfall Recorder atau ARR menjadi solusi krusial.

Tantangan di Lapangan

Curah hujan yang ekstrem sering menyebabkan genangan hingga banjir dalam waktu singkat, terutama saat musim hujan di wilayah perkotaan yang padat bangunan. Sementara itu, sistem manual pengamatan hujan masih digunakan di beberapa titik dan menyebabkan keterlambatan dalam pengambilan keputusan darurat.

**Solusi/implementasi Beacon:**

Solusi dari Beacon Engineering

Beacon Engineering menghadirkan solusi melalui pemasangan
Telemetri Automatic Rainfall Recorder atau ARR
dengan sistem integrasi penuh ke dashboard monitoring STESY. Spesifikasi utama meliputi:

-

Data curah hujan akurasi tinggi

-

Web & Mobile Dashboard Monitoring STESY

-

Notifikasi Otomatis untuk kondisi cuaca ekstrem

Ingin tahu lebih banyak soal ARR Beacon Engineering? Hubungan kami sekarang juga!

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/TzY3QqWwsite6bHW16MExKkdwxw3P6IeqQkslwjn.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/o1UZ9NMUmYx8VaU6WylFKJtDdedNwpFRh2qQGcgn.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332764_1744616537_10.webp`
  - **Galeri proyek:**
    - `projek_images/1746415617_35.webp`
    - `projek_images/1746415617_36.webp`
    - `projek_images/1746415617_37.webp`

#### 34. Proyek Telemetri ARR PUSDA Jawa Timur

- **Slug:** `proyek-telemetri-arr-pusda-jawa-timur`
- **Klien:** Dinas PUSDA Provinsi Jawa Timur
- **Kategori:** Klimatologi
- **Lokasi:** Jawa Timur
- **Tahun/Waktu:** 2023
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/iW56hFymf7B753PMWvBtgerA4mR9YXo8x8OtFCWB.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/5rctL5OIjeQxlhAFzlZbkAmXhrowA2o7dI9kgbfB.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762332803_1744616486_8.webp`
  - **Galeri proyek:**
    - `projek_images/1746248483_28.webp`
    - `projek_images/1746248483_29.webp`
    - `projek_images/1746248483_30.webp`

#### 49. Proyek Telemetri ARR & AWR PSDA Yogyakarta

- **Slug:** `proyek-telemetri-arr-awr-psda-yogyakarta`
- **Klien:** SDA ESDM Provinsi DIY
- **Kategori:** Klimatologi
- **Lokasi:** Yogyakarta
- **Tahun/Waktu:** 2016
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/DuWGWy0ZiEJXFGuPooXwhNWbKpX4V7j4hNnPoNAE.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/cFQr2fBnTHH4hZ2z55w7KY74vX1CkWMIQKLUE096.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762333004_1733201997_SDA ESDM Provinsi DIY.webp`
  - **Galeri proyek:**
    - `projek_images/1747193196_92.webp`
    - `projek_images/1747193196_93.webp`
    - `projek_images/1747193196_94.webp`
    - `projek_images/1747193196_95.webp`

#### 50. Proyek Telemetri ARR & AWR Kaliurang

- **Slug:** `proyek-telemetri-arr-awr-kaliurang`
- **Klien:** SDA ESDM Provinsi DIY
- **Kategori:** Klimatologi
- **Lokasi:** Yogyakarta
- **Tahun/Waktu:** 2014
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/M8PHY1Kehv5J6mK8BV3bC2URURvBeNFDZ7XZUKZQ.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/56ySG4CurjAL3CBMBFb5hifzZi8NJP3ONuIqquT5.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762333004_1733201997_SDA ESDM Provinsi DIY.webp`
  - **Galeri proyek:**
    - `projek_images/1747194909_98.webp`
    - `projek_images/1747194909_99.webp`
    - `projek_images/1747194909_100.webp`

### Kategori: Geothermal

#### 30. Proyek Telemetri APLR Kawah Ijen

- **Slug:** `proyek-telemetri-aplr-kawah-ijen`
- **Klien:** PT. Medco Energi
- **Kategori:** Geothermal
- **Lokasi:** Jawa Timur
- **Tahun/Waktu:** 2023
- **Website:** -

**Aset proyek:**
  - **Thumbnail proyek:** `projek_thumbnails/P65dR90QEUtfKZKBmnI3StyEuTyGDQ5M0BPYWU1O.webp`
  - **Gambar utama proyek:** `projek_gambar_proyeks/PO55U8KkDkgnUMXf6bZnXQ0gi5zchTLDSpugByHe.webp`
  - **White paper:** -
  - **Logo klien:** `klien/1762333073_1733201971_PT. Medco Energi.webp`
  - **Galeri proyek:**
    - `projek_images/1746172111_22.webp`
    - `projek_images/1746172111_23.webp`
    - `projek_images/1746172111_24.webp`

## 4. Daftar Singkat Lokasi Aset per Entitas

Bagian ini bisa dipakai sebagai checklist saat memindahkan atau menyusun ulang folder aset website.

### Aset Solusi
- **Water Security**: thumbnail `konten/solutions/thumbnail/1744612279.webp`, icon `konten/solutions/icon/1744342523_1734658507_water-solid (1).svg`
- **Weather Forecast**: thumbnail `konten/solutions/thumbnail/1744612701.webp`, icon `konten/solutions/icon/1744341932_1734658091_cloud-sun-fill.svg`
- **Early Warning**: thumbnail `konten/solutions/thumbnail/1744613052.webp`, icon `konten/solutions/icon/1744341950_1734658002_gridicons--speaker.svg`
- **Pressure Measurement**: thumbnail `konten/solutions/thumbnail/1744874784.webp`, icon `konten/solutions/icon/1762336968_1747717165_Icon pressure.webp`
- **STESY Application**: thumbnail `konten/solutions/thumbnail/1744614085.webp`, icon `konten/solutions/icon/1744342016_1734657633_lucide--tablet-smartphone.svg`

### Aset Sub-Solusi
- **Automatic Water Level Recorder**: icon `subsolution_images/icon/1742442506_icon awlr.webp`, galeri `subsolution_images/1746504663_AWLR 2.webp`, `subsolution_images/1746504663_AWLR 3.webp`, `subsolution_images/1746504663_AWLR.webp`, file 3D `uploads/subsolution_files/AWLR_NEW.html`
- **Automatic Water Gate Controller**: icon `subsolution_images/icon/1742442487_icon awgc.webp`, galeri `subsolution_images/1745485011_AWGC 2.webp`, `subsolution_images/1745485011_AWGC 3.webp`, `subsolution_images/1745485011_AWGC 4.webp`, `subsolution_images/1745485011_AWGC.webp`, file 3D `uploads/subsolution_files/AWGC.html`
- **Automatic Flow Meter Recorder**: icon `subsolution_images/icon/1742442473_icon afmr.webp`, galeri `subsolution_images/1746504860_AFMR.webp`, file 3D `uploads/subsolution_files/AFMR.html`
- **Automatic Deformation Recorder**: icon `subsolution_images/icon/1742442450_icon adr.webp`, galeri `subsolution_images/1744879208_1.webp`, file 3D `-`
- **Automatic Water Quality Recorder**: icon `subsolution_images/icon/1742442429_icon awqr.webp`, galeri `subsolution_images/1746504768_AWQR.webp`, file 3D `-`
- **Automatic Vibrating Wire Recorder**: icon `subsolution_images/icon/1742442410_icon avwr.webp`, galeri `subsolution_images/1745484935_AVWR 2.webp`, `subsolution_images/1745484935_AVWR.webp`, file 3D `-`
- **Automatic Rain Recorder**: icon `subsolution_images/icon/1742442395_icon arr.webp`, galeri `subsolution_images/1746504848_ARR.webp`, file 3D `-`
- **Automatic Weather Recorder**: icon `subsolution_images/icon/1742442255_icon awr.webp`, galeri `subsolution_images/1745484839_AWR.webp`, `subsolution_images/1745484858_AWR 2.webp`, file 3D `-`
- **Early Warning System**: icon `subsolution_images/icon/1742442230_icon ews.webp`, galeri `subsolution_images/1745484803_EWS 2.webp`, `subsolution_images/1746504553_EWS.webp`, file 3D `-`
- **Smart Telemetry System**: icon `subsolution_images/icon/1747723411_ChatGPT_Image_May_20__2025__01_42_30_PM-removebg-preview.png`, galeri `subsolution_images/1747896430_Gambar Proyek Atas (5).webp`, `subsolution_images/1747896495_Gambar Proyek Atas (6).webp`, file 3D `-`
- **Automatic Pressure Level Recorder**: icon `subsolution_images/icon/1747723209_Pressure_Monitoring_Device_Icon-removebg-preview.webp`, galeri `subsolution_images/1745484630_3.webp`, `subsolution_images/1746504822_APLR 2.webp`, `subsolution_images/1747722346_APLR.webp`, file 3D `-`

### Aset Produk
- **BE WLR-100-U150**: thumbnail `konten/produk/gambar_thumbnail_produk/1744701020.webp`, gambar utama `konten/produk/gambar_produk/1744701021.webp`, brosur `konten/produk/brosur/1744710448_BROSUR BE WLR-100-U150.pdf`
- **BE WLR-100-U014**: thumbnail `konten/produk/gambar_thumbnail_produk/1744786219.webp`, gambar utama `konten/produk/gambar_produk/1744787191.webp`, brosur `konten/produk/brosur/1744710429_BROSUR BE WLR-100-U014.pdf`
- **BE GCM-500-N1**: thumbnail `konten/produk/gambar_thumbnail_produk/1745304296.webp`, gambar utama `-`, brosur `konten/produk/brosur/1744710407_BROSUR BE GCM-500-N1.pdf`
- **BE WGC-1000-NE**: thumbnail `konten/produk/gambar_thumbnail_produk/1744700929.webp`, gambar utama `konten/produk/gambar_produk/1744700930.webp`, brosur `konten/produk/brosur/1744710381_BROSUR BE WGC-1000-NE.pdf`
- **BE WR-1000-WS80**: thumbnail `konten/produk/gambar_thumbnail_produk/1744700846.webp`, gambar utama `konten/produk/gambar_produk/1744700846.webp`, brosur `konten/produk/brosur/1744710361_BROSUR BE AWR-1000-WS80.pdf`
- **BE EWS-100-WL**: thumbnail `konten/produk/gambar_thumbnail_produk/1744700792.webp`, gambar utama `konten/produk/gambar_produk/1744700792.webp`, brosur `konten/produk/brosur/1744710335_BROSUR BE EWS-100-WL.pdf`
- **BE VWR-1000**: thumbnail `konten/produk/gambar_thumbnail_produk/1744700763.webp`, gambar utama `konten/produk/gambar_produk/1744700764.webp`, brosur `konten/produk/brosur/1744710317_BROSUR BE AVWR-1000.pdf`
- **BE WLR-100-R700**: thumbnail `konten/produk/gambar_thumbnail_produk/1744700646.webp`, gambar utama `konten/produk/gambar_produk/1744700646.webp`, brosur `konten/produk/brosur/1744710217_BROSUR BE WLR-100-R700.pdf`
- **BE FMR-100-FS20**: thumbnail `konten/produk/gambar_thumbnail_produk/1745313621.webp`, gambar utama `konten/produk/gambar_produk/1745313621.webp`, brosur `-`
- **BE WLR-100-TD100**: thumbnail `konten/produk/gambar_thumbnail_produk/1747726696.webp`, gambar utama `konten/produk/gambar_produk/1744700564.webp`, brosur `konten/produk/brosur/1744710091_BROSUR BE WLR-100-TD100.pdf`
- **Smart Telemetry System**: thumbnail `konten/produk/gambar_thumbnail_produk/1744872999.webp`, gambar utama `konten/produk/gambar_produk/1744872999.webp`, brosur `konten/produk/brosur/1746157274_BROSUR STESY.pdf`
- **BE PLR-1000**: thumbnail `konten/produk/gambar_thumbnail_produk/1745225630.webp`, gambar utama `konten/produk/gambar_produk/1745225630.webp`, brosur `-`
- **BE GCM-500-N2**: thumbnail `konten/produk/gambar_thumbnail_produk/1745304270.webp`, gambar utama `konten/produk/gambar_produk/1745304270.webp`, brosur `-`
- **BE ADR-1000-RBT32**: thumbnail `konten/produk/gambar_thumbnail_produk/1745399773.webp`, gambar utama `konten/produk/gambar_produk/1745399773.webp`, brosur `-`
- **BE RR-1000-TB02**: thumbnail `konten/produk/gambar_thumbnail_produk/1745909173.webp`, gambar utama `konten/produk/gambar_produk/1745909173.webp`, brosur `-`
- **BE RR-100-TB02**: thumbnail `konten/produk/gambar_thumbnail_produk/1745909880.webp`, gambar utama `konten/produk/gambar_produk/1745909881.webp`, brosur `konten/produk/brosur/1745909881_BROSUR BE RR-100-TB02.pdf`
- **BE WQR-1000-MP7**: thumbnail `konten/produk/gambar_thumbnail_produk/1745983578.webp`, gambar utama `konten/produk/gambar_produk/1745983988.webp`, brosur `konten/produk/brosur/1745983371_BROSUR BE WQR-1000-MP7.pdf`

### Aset Proyek
- **Proyek Telemetri ADR Bendungan Ciawi**: thumbnail `projek_thumbnails/bcSq5GsBMuytCKFj4XoMNtBW3byK9585xQ8fkuSS.webp`, gambar utama `projek_gambar_proyeks/anDfw1Dx5hfgN8J5Th8SSkieYRvaBb75hHrZEpnO.webp`, galeri `projek_images/1745986529_1.webp`, `projek_images/1745986529_2.webp`, `projek_images/1745986529_3.webp`, `projek_images/1745986529_4.webp`, `projek_images/1745986530_5.webp`
- **Proyek Telemetri AWLR Bendungan Sepaku IKN**: thumbnail `projek_thumbnails/HUAoAo72YInyGLidCgO2beSIK5JYL5lYBmsCHHFI.webp`, gambar utama `projek_gambar_proyeks/vUP9kVWgPQ1URLMwJ18KyVs26PqiKcTUMsgoBJEz.webp`, galeri `projek_images/1745987494_6.webp`, `projek_images/1745987494_7.webp`, `projek_images/1745987494_8.webp`, `projek_images/1745987495_9.webp`
- **Proyek Telemetri AWGC Sungai Cisadane**: thumbnail `projek_thumbnails/1744622009_3.webp`, gambar utama `projek_gambar_proyeks/IIIJ52DyLQPdkK6EFHH4hjrHYu3JiuQq3IPYGWox.webp`, galeri `projek_images/1746171062_18.webp`, `projek_images/1746171062_19.webp`
- **Proyek Telemetri AFMR & ARR DAS Bogowonto**: thumbnail `projek_thumbnails/1744622304_4.webp`, gambar utama `projek_gambar_proyeks/R2w2dkyAqBD1sRjfTpTlbVHpdVy6hOpSOZKnINi1.webp`, galeri `projek_images/1745987852_10.webp`, `projek_images/1745987852_11.webp`, `projek_images/1745987852_12.webp`, `projek_images/1745987852_13.webp`
- **Proyek Telemetri AWQR Sungai Sepaku IKN**: thumbnail `projek_thumbnails/1744622458_5.webp`, gambar utama `projek_gambar_proyeks/WWCGTyTQp7CoBBt2xvJILhIRFoI0rjLSLFRWA7k5.webp`, galeri `projek_images/1745988459_14.webp`, `projek_images/1745988459_15.webp`, `projek_images/1745988459_16.webp`, `projek_images/1745988459_17.webp`
- **Proyek Telemetri AWLR Bendungan Cipanas**: thumbnail `projek_thumbnails/1744622632_6.webp`, gambar utama `projek_gambar_proyeks/vDDdndmUVDSO259Xa4HKSGmnE3lmAsozfItYU404.webp`, galeri `projek_images/1746171787_20.webp`, `projek_images/1746171787_21.webp`
- **Proyek Telemetri EWS Bendungan Leuwikeris**: thumbnail `projek_thumbnails/kwpd0kHUN9sMlmtT19hSwred78K80hYMXzs2bJfL.webp`, gambar utama `projek_gambar_proyeks/AyynyIgzzIwxz62iAziSVguIQgjE7soUpEkiRV92.webp`, galeri `projek_images/1746521927_65.webp`, `projek_images/1746521927_66.webp`, `projek_images/1746521927_67.webp`, `projek_images/1746521927_68.webp`
- **Proyek Telemetri AWR Bendungan Jlantah**: thumbnail `projek_thumbnails/HnPzliq3vEszSnONzT9vRciL3JD3yAFqikM1ZwtB.webp`, gambar utama `projek_gambar_proyeks/DxWazxAal3SchWeRh8YJLG72B9fw9jXLZP9dLdxA.webp`, galeri `projek_images/1746522195_70.webp`
- **Proyek Telemetri APLR Kawah Ijen**: thumbnail `projek_thumbnails/P65dR90QEUtfKZKBmnI3StyEuTyGDQ5M0BPYWU1O.webp`, gambar utama `projek_gambar_proyeks/PO55U8KkDkgnUMXf6bZnXQ0gi5zchTLDSpugByHe.webp`, galeri `projek_images/1746172111_22.webp`, `projek_images/1746172111_23.webp`, `projek_images/1746172111_24.webp`
- **Proyek Telemetri AWGC Bendung Cikeusik**: thumbnail `projek_thumbnails/DSe7wbJ08IqV1CJtr9zwvcIuDGr5wyd1ovtY0F8Z.webp`, gambar utama `projek_gambar_proyeks/dMGGkHtnhBCrsgz6g9akKrGbAPyLcMjxy9rmJROr.webp`, galeri `projek_images/1746248054_25.webp`, `projek_images/1746248054_26.webp`, `projek_images/1746248054_27.webp`
- **Proyek Telemetri AWLR PUSDA Jawa Timur Hidrologi**: thumbnail `projek_thumbnails/Ytgm9tOqxCWt5j2JcmjlrpFdcT8S3wohyWmN2RN8.webp`, gambar utama `projek_gambar_proyeks/fCZZAuvwpTWBBAFLCVTd6OJ7eesJuzasRUGg75pO.webp`, galeri `projek_images/1746516320_42.webp`, `projek_images/1746516320_43.webp`, `projek_images/1746516320_44.webp`, `projek_images/1746516320_45.webp`, `projek_images/1746516320_46.webp`, `projek_images/1746516320_47.webp`, `projek_images/1746516320_48.webp`, `projek_images/1746516320_49.webp`, `projek_images/1746516320_50.webp`
- **Proyek Telemetri AWQR Sidoarjo**: thumbnail `projek_thumbnails/4oq5Hw4qyGjG3i3CiYj6UyZAA8d16aDYzWSu4TdH.webp`, gambar utama `projek_gambar_proyeks/QvM4QQL9g0mzhxrmyvp3GihLY0Tykwv0yOUUhlCi.webp`, galeri -
- **Proyek Telemetri ARR PUSDA Jawa Timur**: thumbnail `projek_thumbnails/iW56hFymf7B753PMWvBtgerA4mR9YXo8x8OtFCWB.webp`, gambar utama `projek_gambar_proyeks/5rctL5OIjeQxlhAFzlZbkAmXhrowA2o7dI9kgbfB.webp`, galeri `projek_images/1746248483_28.webp`, `projek_images/1746248483_29.webp`, `projek_images/1746248483_30.webp`
- **Proyek Telemetri ARR & AWR Bendungan Bagong**: thumbnail `projek_thumbnails/Tk2ppx1stJO3DBJUhvmjeMkunMEXBJRkB1L4RU7d.webp`, gambar utama `projek_gambar_proyeks/utLGVGMOsh3xaiVAk5BgRpaRGdulbvC8DbcRFefA.webp`, galeri `projek_images/1746415039_31.webp`, `projek_images/1746415039_32.webp`, `projek_images/1746415039_33.webp`, `projek_images/1746415039_34.webp`
- **Proyek Telemetri AWLR & AVWR Bendungan Situ Lembang**: thumbnail `projek_thumbnails/hvw0hzNXKMeSrJQvj4zC3AZDIOmOSRUCU0aAgoxU.webp`, gambar utama `projek_gambar_proyeks/uU9ZYLEic9FKZbVrLwsabaZ0vBkHN6ijKdNIkA6b.webp`, galeri `projek_images/1746416058_35.webp`, `projek_images/1746416058_36.webp`, `projek_images/1746416058_37.webp`, `projek_images/1746416058_38.webp`
- **Proyek Telemetri ARR Perum Jasa Tirta I Surabaya**: thumbnail `projek_thumbnails/TzY3QqWwsite6bHW16MExKkdwxw3P6IeqQkslwjn.webp`, gambar utama `projek_gambar_proyeks/o1UZ9NMUmYx8VaU6WylFKJtDdedNwpFRh2qQGcgn.webp`, galeri `projek_images/1746415617_35.webp`, `projek_images/1746415617_36.webp`, `projek_images/1746415617_37.webp`
- **Proyek Telemetri AWR Bendungan Bintang Bano**: thumbnail `projek_thumbnails/qo4fddOJEJAHthARVqKXOAcAbDwxSyYnL6M3Qn5A.webp`, gambar utama `projek_gambar_proyeks/xBRBvY2P8E5Y0Ox9gtvFYuiY8fTEE5UrFAuuioMw.webp`, galeri `projek_images/1746516757_51.webp`, `projek_images/1746516757_52.webp`, `projek_images/1746516757_53.webp`
- **Proyek Telemetri AWLR Bendungan Semantok**: thumbnail `projek_thumbnails/FHIgYWBXvSR8jsK4KkwRv2bPsIQGtzIG3DqSgCch.webp`, gambar utama `projek_gambar_proyeks/7x32rVVzIiE7HpewLezvKQsuXxfZJ7aPfwpYMwi5.webp`, galeri `projek_images/1746517528_54.webp`, `projek_images/1746517528_55.webp`, `projek_images/1746517528_56.webp`, `projek_images/1746517528_57.webp`, `projek_images/1746517528_58.webp`
- **Proyek Telemetri AWLR & EWS Bendungan Bener**: thumbnail `projek_thumbnails/GgsjRkytvRy95hDLNLJ7Qg3XwTd9m3SrFHwj1RnV.webp`, gambar utama `projek_gambar_proyeks/uVmIqR3MuAve65zKDeW4Ef7MdRa1YcDbularKw3C.webp`, galeri `projek_images/1746518162_59.webp`, `projek_images/1746518162_60.webp`, `projek_images/1746518162_61.webp`
- **Proyek Telemetri AWLR DSDA DKI Jakarta**: thumbnail `projek_thumbnails/vUdHGJu6IXjY8gH6LqL4xT1W5HrMxuI29YLCQvCy.webp`, gambar utama `projek_gambar_proyeks/rqa2aoyuVaIM2WAELSF5wCUOQlIHKFljWY145w5f.webp`, galeri `projek_images/1746518582_62.webp`, `projek_images/1746518582_63.webp`, `projek_images/1746518582_64.webp`
- **Proyek Telemetri AWR Bendungan Kuningan**: thumbnail `projek_thumbnails/u4xW2L1BTPsrYDc4oYK7myIow3S54upcqIM6oVr7.webp`, gambar utama `projek_gambar_proyeks/shvQHcmW2dMpN7aElzoGpSZ2n4NdXy2HhsljgfK8.webp`, galeri `projek_images/1746522539_72.webp`, `projek_images/1746522539_73.webp`, `projek_images/1746522539_74.webp`, `projek_images/1746522539_75.webp`
- **Proyek Telemetri AWR Bendungan Bendo**: thumbnail `projek_thumbnails/vRf49TZg5euqBxTYBuqNklpfu6LwsikDI0XvZDP0.webp`, gambar utama `projek_gambar_proyeks/1FWnS22QG1guRbJd61m1Q8i9KJfiZpabW6a1Y1s6.webp`, galeri `projek_images/1746522837_75.webp`, `projek_images/1746522837_76.webp`, `projek_images/1746522837_77.webp`, `projek_images/1746522837_78.webp`, `projek_images/1746522837_79.webp`
- **Proyek Telemetri AWR, AWLR, & AVWR Bendungan Tukul**: thumbnail `projek_thumbnails/tQsADFN1a0TSyKpdwpuDcsWT3tTaJNEAsk6Kvn5x.webp`, gambar utama `projek_gambar_proyeks/lPetuqwPM58Mz6u9VN1tuoqhBczgKHYepDQyLj3M.webp`, galeri `projek_images/1747117813_80.webp`, `projek_images/1747117813_81.webp`, `projek_images/1747117813_82.webp`
- **Proyek Telemetri AWR Bendungan Napungete**: thumbnail `projek_thumbnails/fuOG8j0Hs4wJ6KYaH7Ns9QKTnVYug8naqPwqB76J.webp`, gambar utama `projek_gambar_proyeks/q6wuX3SXnc1ilqa210VFFgO2Lz918mB1f3JksxEs.webp`, galeri `projek_images/1747119355_83.webp`, `projek_images/1747119356_84.webp`, `projek_images/1747119356_85.webp`, `projek_images/1747119356_86.webp`, `projek_images/1747119356_87.webp`, `projek_images/1747119356_88.webp`, `projek_images/1747119356_89.webp`
- **Proyek Telemetri AWLR BBWS Serayu Opak Hidrologi**: thumbnail `projek_thumbnails/PtwEWZZbDTNWx4iWLc7cDN8sgTJATqhMeZybx4B8.webp`, gambar utama `projek_gambar_proyeks/s9JI86UVRjxEWUDDlBLOyhgg7GYZ2Nh2UYIxfk6K.webp`, galeri `projek_images/1747125908_90.webp`, `projek_images/1747125908_91.webp`
- **Proyek Telemetri AWLR & AVWR Bendungan Sermo**: thumbnail `projek_thumbnails/QKHGKOnzxgo9XpJY41VVVZ2rjUbe1rg2ZqDU3hzh.webp`, gambar utama `projek_gambar_proyeks/PCzyFITs7ueXnGueTh2JWFrdczOwxmb8ICl3B9Wi.webp`, galeri `projek_images/1747194662_96.webp`, `projek_images/1747194662_97.webp`
- **Proyek Telemetri ARR & AWR PSDA Yogyakarta**: thumbnail `projek_thumbnails/DuWGWy0ZiEJXFGuPooXwhNWbKpX4V7j4hNnPoNAE.webp`, gambar utama `projek_gambar_proyeks/cFQr2fBnTHH4hZ2z55w7KY74vX1CkWMIQKLUE096.webp`, galeri `projek_images/1747193196_92.webp`, `projek_images/1747193196_93.webp`, `projek_images/1747193196_94.webp`, `projek_images/1747193196_95.webp`
- **Proyek Telemetri ARR & AWR Kaliurang**: thumbnail `projek_thumbnails/M8PHY1Kehv5J6mK8BV3bC2URURvBeNFDZ7XZUKZQ.webp`, gambar utama `projek_gambar_proyeks/56ySG4CurjAL3CBMBFb5hifzZi8NJP3ONuIqquT5.webp`, galeri `projek_images/1747194909_98.webp`, `projek_images/1747194909_99.webp`, `projek_images/1747194909_100.webp`
- **Proyek Telemetri Bendungan Keureuto**: thumbnail `projek_thumbnails/1748573716_Gambar Proyek Bawah.webp`, gambar utama `projek_gambar_proyeks/dy1RycPfJ1g06YurPksta3zonbznmdnr9vd8i5rx.webp`, galeri `projek_images/1748576172_101.webp`, `projek_images/1748576172_102.webp`, `projek_images/1748576172_103.webp`