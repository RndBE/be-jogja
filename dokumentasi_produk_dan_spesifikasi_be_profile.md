# Dokumentasi Produk dan Spesifikasi

Sumber: `be_profile (1).sql`. Dokumen ini hanya memuat data produk dan spesifikasi perangkat yang terhubung ke produk di database.

## Ringkasan

- Total produk: **17**
- Total seri perangkat yang direlasikan ke produk: **15**

## Catatan Penempatan Asset Produk

- `gambar_thumbnail_produk`: dipakai untuk kartu/listing produk, misalnya card seri produk atau daftar produk di halaman sub-solusi.
- `gambar_produk`: dipakai untuk hero/detail utama produk pada halaman detail produk.
- `brosur`: dipakai untuk tombol **Unduh Brosur** pada halaman detail produk.
- `seri_perangkat.gambar1` dan `seri_perangkat.gambar2`: dipakai sebagai asset pendukung untuk menampilkan perangkat/data logger yang menjadi bagian dari produk.
- Path asset mengikuti isi database dan umumnya berada di folder `konten/produk/...` atau `konten/seri_perangkat/...`.

## Water Security

### Automatic Water Level Recorder

#### BE WLR-100-R700

| Field | Isi |
|---|---|
| Slug | `be-wlr-100-r700` |
| Solusi Produk | - |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | https://drive.google.com/file/d/1odxUv1jBBvL6kzjLww2JT5gTKRqmRO5d/view?usp=drive_link |

**Poin thumbnail / ringkasan card:**

- Jangkauan baca sensor 70 m
- Dilengkapi Data Logger BL-110
- Sensor tunggal
- Data Online dan realtime 24 Jam

**Deskripsi produk:**

Telemetri Terbaik untuk Aliran Bendungan dan Waduk Besar

AWLR tipe ini menggunakan high end radar level sensor dengan jarak baca hingga 70 meter. Dilengkapi dengan Data Logger BL-110 yang mendukung penggunaan sensor tunggal, AWLR ini adalah solusi tepat pemantauan air di aliran dengan volume besar. Selain itu, AWLR tipe ini juga sangat ideal untuk area yang mengalami fluktuasi air sangat tinggi akibat pasang surut.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1744700646.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1744700646.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1744710217_BROSUR BE WLR-100-R700.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 110
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404066_BL-110.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572147_3.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 1x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |
| Memory (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Digital I/O (Logger) | 2 |
| Analog Input (Logger) | 2 Channels |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Not recommended |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125.6 x 45 x 155.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 16x2 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Water Level Sensor R700
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748416093_r700 (2).png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748416093_r700.png` — asset visual alternatif/detail perangkat.
**Measurement and Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Sensor type | 26 GHz High-Frequency Radar Level Sensor |
| Range (Sensor) | Max 70 meters |
| Dead Band (Sensor) | - |
| Beam Width (Sensor) | - |
| Data Resolution (Sensor) | accuracy aprox. 15 mm |
| Object Detection (Sensor) | Liquid surface, pole, free-running surfaces, works well in dusty environments |
| Response Time (Sensor) | - |
| Operating Temperature (Sensor) | -40 to 482°F (-40 to 250°C) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Packaging (Sensor) | Rugged, reliable in wet/dirty environments |
| Temperature Range (Sensor) | -40 to 482°F (-40 to 250°C) |
| Humadity (Sensor) | 0 to 100% operating |
| Protection Rating (Sensor) | P67, Explosion-proof: Exia II C T6 Ga |

**Materials & Construction**

| Spesifikasi | Deskripsi |
|---|---|
| Case material (Sensor) | corrosion-resistant radar usage |
| Transducer Type (Sensor) | Radar (non-contact), 26 GHz |

**Data & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Output Protocols (Sensor) | Modbus, ASCII streaming |
| Output Format (Sensor) | Configurable serial (9600–115200 baud, 8 data bits, 1 stop bit, no parity) |
| Transducer Frequency (Sensor) | 26 GHz |
| Temperature Compensation (Sensor) | - |


#### BE WLR-100-TD100

| Field | Isi |
|---|---|
| Slug | `be-wlr-100-td100` |
| Solusi Produk | - |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | https://drive.google.com/file/d/1GQdpyoOIQM6aeF8VlgXQB7EtTXczkdDp/view?usp=drive_link |

**Poin thumbnail / ringkasan card:**

- Jangkauan baca sensor 100 m
- Dilengkapi Data Logger BL-110
- Data Online dan realtime 24 Jam
- Sensor tunggal

**Deskripsi produk:**

Pengukuran Cerdas Level Air Berbasis Tekanan Hidrostatis

AWLR tipe ini menggunakan sensor tekanan dengan jarak baca hingga 100 meter. Dilengkapi dengan Data Logger BL-110 yang mendukung penggunaan sensor tunggal, AWLR ini adalah solusi tepat pemantauan level air di area tertutup dan sulit dijangkau. AWLR jenis ini juga tidak terpengaruh oleh gangguan visual sehingga ideal untuk aliran dengan sedimentasi tinggi.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1747726696.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1744700564.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1744710091_BROSUR BE WLR-100-TD100.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 110
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404066_BL-110.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572147_3.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 1x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |
| Memory (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Digital I/O (Logger) | 2 |
| Analog Input (Logger) | 2 Channels |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Not recommended |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125.6 x 45 x 155.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 16x2 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Water Level Sensor TD100
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748417163_td100.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748415973_td100 (2).png` — asset visual alternatif/detail perangkat.
**Measurement and Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Sensor type | Pressure Water Level Sensor |
| Range (Sensor) | 0.5 – 100 meters |
| Dead Band (Sensor) | - |
| Data Resolution (Sensor) | Approx. ≤0.003% F.S. (~0.086 mm) |
| Response Time (Sensor) | ≤10 ms |
| Object Detection (Sensor) | measures pressure |
| Operating Temperature (Sensor) | -40 to 176°F (-40 to 80°C) |
| Beam Width (Sensor) | - |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Packaging (Sensor) | Fixed cable with vented tube; waterproof (IP68) |
| Temperature Range (Sensor) | -40 to 176°F (-40 to 80°C) |
| Humadity (Sensor) | 0 to 100% operating |
| Protection Rating (Sensor) | IP68; lightning protection (>8000V) |

**Materials & Construction**

| Spesifikasi | Deskripsi |
|---|---|
| Case material (Sensor) | 316L Stainless Steel |
| Transducer Type (Sensor) | - |

**Data & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Output Protocols (Sensor) | RS485 Modbus RTU, SDI-12, 4–20 mA |
| Output Format (Sensor) | Modbus registers, SDI-12 ASCII format |
| Transducer Frequency (Sensor) | - |


#### BE WLR-100-U014

| Field | Isi |
|---|---|
| Slug | `be-wlr-100-u014` |
| Solusi Produk | Kanal Irigasi, Drainase, Kolam Retensi |
| Link LKPP Lokal | https://e-katalog.lkpp.go.id/katalog/produk/detail/3746841?type=regency |
| Link LKPP Sektoral | https://e-katalog.lkpp.go.id/katalog/produk/detail/40501445?type=general |
| Link TKDN | https://drive.google.com/file/d/1rYMG8QkJ4qr8opi0b_jT_xLcPRZB2O9m/view?usp=drive_link |

**Poin thumbnail / ringkasan card:**

- Jangkauan baca sensor 4 m
- Dilengkapi Data Logger BL-110
- Sensor tunggal
- Data Online dan realtime 24 Jam

**Deskripsi produk:**

Telemetri Tepat untuk Aliran Kecil Hingga Menengah

AWLR tipe ini menggunakan sensor ultrasonik dengan jarak baca hingga 4m. Dilengkapi dengan Data Logger BL-110 yang mendukung penggunaan sensor tunggal, AWLR ini adalah solusi tepat pemantauan air di aliran kecil hingga menengah dan sangat ideal untuk area yang membutuhkan pembacaan interval tinggi.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1744786219.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1744787191.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1744710429_BROSUR BE WLR-100-U014.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 110
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404066_BL-110.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572147_3.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 1x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |
| Memory (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Digital I/O (Logger) | 2 |
| Analog Input (Logger) | 2 Channels |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Not recommended |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125.6 x 45 x 155.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 16x2 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Water Level Sensor U014
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748328688_14 (2).png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748328688_14.png` — asset visual alternatif/detail perangkat.
**Measurement and Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Sensor type | Ultrasonic Water Level US-150-5M |
| Range (Sensor) | 0.1 - 3 meters (max.4 meters) |
| Dead Band (Sensor) | < 4 in. (100 mm) |
| Beam Width (Sensor) | 6° ± 1° off-axis @ -3 dB |
| Object Detection (Sensor) | liquid surface, flat or curved objects |
| Operating Temperature (Sensor) | -40 to 158 F (-40 to 70 C) |
| Data Resolution (Sensor) | 0.0034 in. (0.086 mm) per count |
| Response Time (Sensor) | Ready time < 1 second after power application |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Packaging (Sensor) | Rugged for reliable performance in wet or dirty environments |
| Temperature Range (Sensor) | -40 to 158°F (-40 to 70°C) |
| Humadity (Sensor) | 0 to 100% operating |
| Protection Rating (Sensor) | NEMA-4X, NEMA-6P, IP68 |

**Materials & Construction**

| Spesifikasi | Deskripsi |
|---|---|
| Case material (Sensor) | 316 stainless steel |
| Transducer Type (Sensor) | Ruggedized Piezoelectric |

**Data & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Output Protocols (Sensor) | Modbus, ASCII streaming |
| Output Format (Sensor) | Five ASCII distance characters followed by Carriage Return |
| Transducer Frequency (Sensor) | 50 kHz |
| Temperature Compensation (Sensor) | Selectable |


#### BE WLR-100-U150

| Field | Isi |
|---|---|
| Slug | `be-wlr-100-u150` |
| Solusi Produk | Kanal Irigasi, Bendungan |
| Link LKPP Lokal | https://e-katalog.lkpp.go.id/katalog/produk/detail/43734714?type=general |
| Link LKPP Sektoral | https://e-katalog.lkpp.go.id/katalog/produk/detail/3913629?type=regency |
| Link TKDN | https://drive.google.com/file/d/1AYqlOr8xlpWkxpbB9ayiQ_hf6R4N12nJ/view?usp=sharing |

**Poin thumbnail / ringkasan card:**

- Jarak baca sensor 15 m
- Dilengkapi Data Logger BL-110
- Sensor tunggal
- Data Online dan realtime 24 Jam

**Deskripsi produk:**

Pengukuran Level Ketinggian Air Paling Fleksibel untuk Berbagai Karakteristik

AWLR tipe ini menggunakan sensor ultrasonik dengan jarak baca hingga 15 meter. Dilengkapi dengan Data Logger Beacon 110 Series, AWLR seri ini sangat fleksibel karena cocok diaplikasikan untuk berbagai jenis aliran mulai dari bendungan hingga irigasi. Selain itu, AWLR jenis ini juga sangat ideal untuk aliran terbuka.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1744701020.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1744701021.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1744710448_BROSUR BE WLR-100-U150.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 110
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404066_BL-110.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572147_3.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 1x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |
| Memory (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Digital I/O (Logger) | 2 |
| Analog Input (Logger) | 2 Channels |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Not recommended |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125.6 x 45 x 155.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 16x2 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Water Level Sensor U150
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748328737_150 (2).png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748328737_150.png` — asset visual alternatif/detail perangkat.
**Measurement and Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Sensor type | Ultrasonic Water Level Sensor U150 |
| Range (Sensor) | 0.31 - 10 meters (max. 15 meters) |
| Dead Band (Sensor) | < 11 in. (303 mm) |
| Beam Width (Sensor) | 6° ± 1° off axis @ -3db |
| Data Resolution (Sensor) | 0.0135 in. (0.343 mm) per count |
| Response Time (Sensor) | Ready time < 1 second after power application |
| Object Detection (Sensor) | liquid surface, flat or curved objects |
| Operating Temperature (Sensor) | -40 to 158 F (-40 to 70 C) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Packaging (Sensor) | Rugged for reliable performance in wet or dirty environments |
| Temperature Range (Sensor) | -40 to 158°F (-40 to 70°C) |
| Humadity (Sensor) | 0 to 100% operating |
| Protection Rating (Sensor) | NEMA-4X, NEMA-6P, IP68 |

**Materials & Construction**

| Spesifikasi | Deskripsi |
|---|---|
| Case material (Sensor) | 316 stainless steel |
| Transducer Type (Sensor) | Ruggedized Piezoelectric |

**Data & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Output Protocols (Sensor) | Modbus, ASCII streaming |
| Output Format (Sensor) | Five ASCII distance characters followed by Carriage Return |
| Transducer Frequency (Sensor) | 50 kHz |
| Temperature Compensation (Sensor) | Selectable |


### Automatic Water Gate Controller

#### BE GCM-500-N1

| Field | Isi |
|---|---|
| Slug | `be-gcm-500-n1` |
| Solusi Produk | Kanal Irigasi, Drainase |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | https://drive.google.com/file/d/1LrlU8XWP6ppPxesdDfxdsedWWoRsxV3E/view?usp=drive_link |

**Poin thumbnail / ringkasan card:**

- Motorisasi manual
- Multi gearbox + extended shaft
- Dapat ditingkatkan ke motorisasi online

**Deskripsi produk:**

Telemetri Tepat Untuk Pintu Air Skala Kecil Hingga Menengah

AWGC tipe manual ini dilengkapi actuator dan gearbox 1 x 2000 Nm dan sangat cocok dipasang di pintu air tersier, wilayah irigasi lokal, atau sistem drainase kecil. AWGC tipe manual ini juga dapat menjadi opsi pendukung pintu air di wilayah blank spot.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1745304296.webp` | Card/listing produk |
| Gambar produk | `-` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1744710407_BROSUR BE GCM-500-N1.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### Actuator & Gearbox GCM 500-N1
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748416066_gcm.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748416066_gcm (2).png` — asset visual alternatif/detail perangkat.
**Mechanical Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Actuator Torque (Sensor) | 900 Nm |
| Gearbox Torque (Sensor) | 1 x 2000 Nm |
| Gear Ratio (Sensor) | 6.3 : 1 |
| Rotational Speed (Sensor) | 63 RPM |
| Manual Operation (Sensor) | Equipped with a handwheel for emergency use |
| Mechanical Components (Sensor) | High-durability slide rod and gearbox |

**Electrical & Control Features**

| Spesifikasi | Deskripsi |
|---|---|
| Power Supply (Sensor) | 380 VAC / 3 Phase / 50 Hz |
| Output Signal (Sensor) | 4–20 mA analog signal for position control |
| Internal Sensor | Integrated for actuator position feedback |
| Display (Sensor) | Digital LCD display showing 0–100% gate opening |
| Online Control (Sensor) | No |

**Construction & Design**

| Spesifikasi | Deskripsi |
|---|---|
| Housing & Gear Design (Sensor) | Built for long-term durability in field applications |
| Emergency Access (Sensor) | Manual handwheel ensures operation during power failure |
| Control Precision (Sensor) | Supports accurate control via analog signal and digital readout |


#### BE GCM-500-N2

| Field | Isi |
|---|---|
| Slug | `be-gcm-500-n2` |
| Solusi Produk | Kanal Irigasi, Drainase |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | - |

**Poin thumbnail / ringkasan card:**

- Motorisasi manual
- Multi gearbox + extended shaft
- Dapat ditingkatkan ke motorisasi online

**Deskripsi produk:**

Solusi Tepat Revitalisasi Pintu Air Skala Kecil Hingga Menengah

AWGC tipe manual ini dilengkapi actuator dan gearbox hingga 2 x 2000 Nm dan sangat cocok dipasang di pintu air tersier, wilayah irigasi lokal, atau sistem drainase kecil. AWGC tipe manual ini juga dapat menjadi opsi pendukung pintu air di wilayah blank spot.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1745304270.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1745304270.webp` | Hero/detail produk |
| Brosur | `-` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### Actuator & Gearbox GCM 500-N2
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748416052_gcm.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748416052_gcm (2).png` — asset visual alternatif/detail perangkat.
**Mechanical Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Actuator Torque (Sensor) | 900 Nm |
| Gearbox Torque (Sensor) | 2 x 2000 Nm |
| Gear Ratio (Sensor) | 6.3 : 1 |
| Rotational Speed (Sensor) | 63 RPM |
| Manual Operation (Sensor) | Equipped with a handwheel for emergency use |
| Mechanical Components (Sensor) | High-durability slide rod and gearbox |

**Electrical & Control Features**

| Spesifikasi | Deskripsi |
|---|---|
| Power Supply (Sensor) | 380 VAC / 3 Phase / 50 Hz |
| Output Signal (Sensor) | 4–20 mA analog signal for position control |
| Internal Sensor | Integrated for actuator position feedback |
| Display (Sensor) | Digital LCD display showing 0–100% gate opening |
| Online Control (Sensor) | No |

**Construction & Design**

| Spesifikasi | Deskripsi |
|---|---|
| Housing & Gear Design (Sensor) | Built for long-term durability in field applications |
| Emergency Access (Sensor) | Manual handwheel ensures operation during power failure |
| Control Precision (Sensor) | Supports accurate control via analog signal and digital readout |


#### BE WGC-1000-NE

| Field | Isi |
|---|---|
| Slug | `be-wgc-1000-ne` |
| Solusi Produk | Kanal Irigasi, Bendungan, Drainase |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | https://drive.google.com/file/d/1kkZ81p_0lQ90ql9xk0xj4qS_K8tp4liM/view?usp=drive_link |

**Poin thumbnail / ringkasan card:**

- Kontrol Pintu Air 100% Online
- Data realtime 24 jam non stop
- Dilengkapi Data Logger BL-1100

**Deskripsi produk:**

Revitalisasi Pintu Air Terbaik yang 100% Online

AWGC seri ini merupakan yang terbaru dikelasnya. Dilengkapi Data Logger BL-1100 yang memungkinkan kontrol pintu air sepenuhnya online, seri ini mampu memberikan data realtime 24 Jam non stop tanpa harus turun ke lapangan. Dirancang dengan ketahanan dan presisi tinggi, AWGC tipe ini cocok untuk pintu air di aliran skala besar seperti bendungan atau irigasi primer.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1744700929.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1744700930.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1744710381_BROSUR BE WGC-1000-NE.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 1100
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404047_BL-1100.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572132_4.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 2x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Analog Input (Logger) | 8 Channels |
| Digital I/O (Logger) | 4 |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Yes |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125 x 44 x 205.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 20 x 4 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Actuator & Gearbox 1000-NE
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748659373_gcm.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748659373_gcm (2).png` — asset visual alternatif/detail perangkat.
**Mechanical Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Actuator Torque (Sensor) | 900 Nm |
| Gearbox Torque (Sensor) | Max 2 x 2000 Nm |
| Gear Ratio (Sensor) | 6.3 : 1 |
| Rotational Speed (Sensor) | 63 RPM |
| Manual Operation (Sensor) | Equipped with a handwheel for emergency use |
| Mechanical Components (Sensor) | High-durability slide rod and gearbox |

**Electrical & Control Features**

| Spesifikasi | Deskripsi |
|---|---|
| Power Supply (Sensor) | 380 VAC / 3 Phase / 50 Hz |
| Output Signal (Sensor) | 4–20 mA analog signal for position control |
| Internal Sensor | Integrated for actuator position feedback |
| Display (Sensor) | Digital LCD display showing 0–100% gate opening |
| Online Control (Sensor) | Yes |

**Construction & Design**

| Spesifikasi | Deskripsi |
|---|---|
| Housing & Gear Design (Sensor) | Built for long-term durability in field applications |
| Emergency Access (Sensor) | Manual handwheel ensures operation during power failure |
| Control Precision (Sensor) | Supports accurate control via analog signal and digital readout |


### Automatic Flow Meter Recorder

#### BE FMR-100-FS20

| Field | Isi |
|---|---|
| Slug | `be-fmr-100-fs20` |
| Solusi Produk | Kanal Irigasi, Drainase |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | - |

**Poin thumbnail / ringkasan card:**

- Data Debit 24 Jam Non Stop
- Jangkauan pengukuran hingga 0.03–20 m/s
- Dilengkapi BL-1100

**Deskripsi produk:**

Pilihan Cerdas Pantau Debit Air 24 Jam Non Stop

AFMR merupakan pilihan tepat untuk memantau debit air dan memberikan data realtime selama 24 jam tanpa harus turun ke lapangan langsung. Sensor flowmeter pada perangkat ini juga memungkinkan pengukuran debit (flow rate) dan level ketinggian air sekaligus di segala kondisi lingkungan. Perangkat ini sangat ideal untuk menganalisis debit aktual dan memantau elevasi air.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1745313621.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1745313621.webp` | Hero/detail produk |
| Brosur | `-` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 1100
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404047_BL-1100.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572132_4.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 2x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Analog Input (Logger) | 8 Channels |
| Digital I/O (Logger) | 4 |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Yes |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125 x 44 x 205.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 20 x 4 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Flowmeter Sensor 1000-FS20
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748416026_fs20.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748416026_fs20 (2).png` — asset visual alternatif/detail perangkat.
**Measurement and Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Sensor type | Radar-based flow and water level sensor |
| Measuring Principle (Sensor) | Planar microstrip array antenna CW+FMCW |
| Radar Frequency (Velocity Sensor) | 24 GHz |
| Velocity Measuring Range (Sensor) | 0.03–20 m/s |
| Velocity Measurement Accuracy (Sensor) | ±0.01 m/s; ±2% F.S |
| Radar Frequency (Water Level Sensor) | 80 GHz |
| Water Level Measuring Range (Sensor) | 7 meters |
| Antenna Angle (Velocity) (Sensor) | 12° |
| Antenna Angle (Level) (Sensor) | 8° |
| Measuring Direction (Sensor) | Automatic recognition of water flow direction with built-in vertical angle correction |
| Max Measuring Range (Velocity) (Sensor) | 40 meters |
| Measurement Accuracy (Level) (Sensor) | ±2 mm; ±0.05% F.S |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Environment (Sensor) | 24-hour, suitable for rainy conditions |
| Operating Temperature (Logger) | -35 to 70°C |
| Operating mode (Sensor) | Manual, automatic, telemetry |
| Lightning Protection (Sensor) | 6KV |
| Protection Rating (Sensor) | IP68 |

**Materials & Construction**

| Spesifikasi | Deskripsi |
|---|---|
| Physical Dimension (Sensor) | 160x100x80 |
| Weight (Sensor) | 1 kg |


### Automatic Deformation Recorder

#### BE ADR-1000-RBT32

| Field | Isi |
|---|---|
| Slug | `be-adr-1000-rbt32` |
| Solusi Produk | Bendungan |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | - |

**Poin thumbnail / ringkasan card:**

- Monitoring Deformasi 24 Jam
- Kontrol penuh 100% Online
- Jangkauan ukur hingga 3500 meter
- Menggunakan prism target

**Deskripsi produk:**

Monitoring Deformasi 24 Jam Non Stop dan 100% Online

ADR sangat tepat digunakan untuk memantau deformasi suatu infrastruktur secara berkala tanpa terkendala risiko di lapangan. Terhubung dengan data logger BL-1100, ADR mampu memberikan kontrol penuh data struktur tanah secara online hanya melalui satu aplikasi monitoring. ADR sangat cocok dipasang di ara tebing atau lereng dan bendungan.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1745399773.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1745399773.webp` | Hero/detail produk |
| Brosur | `-` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 1100
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404047_BL-1100.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572132_4.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 2x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Analog Input (Logger) | 8 Channels |
| Digital I/O (Logger) | 4 |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Yes |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125 x 44 x 205.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 20 x 4 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Robotic Total Station RBT32
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748416008_ADR.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572343_ADR (1).png` — asset visual alternatif/detail perangkat.
**Measurement and Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Sensor type | Robotic Total Station with Rotary Absolute Encoder |
| Telescope Magnification (Sensor) | 30x |
| Resolving Power (Sensor) | 2.5 arcseconds |
| Field of View (Sensor) | 1°30’ |
| Minimum Focus (Sensor) | 1.3 meters (4.3 ft) |
| Angle Accuracy (Sensor) | 1" (0.0003 gon / 0.005 mil) |
| Angle Display Resolution (Sensor) | 0.1" / 0.5" (selectable) |
| Image Type (Sensor) | Erect |
| Measurement Range (Sensor) | 1.3 – 3500 meters (4.3 – 11,480 ft) |
| Target Type (Sensor) | Prism target monitoring |

**Tilt Angle & Deformation Compensation**

| Spesifikasi | Deskripsi |
|---|---|
| Compensation Method (Sensor) | Coaxial Phase Shift Measuring System |
| Signal Source (Sensor) | Red Laser Diode (690 nm, Class 3R) |
| Angle Units (Sensor) | Degree / Gon / Mil (selectable) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to 70°C |
| Humadity (Sensor) | 0–100% (non-condensing) |
| Packaging (Sensor) | Rugged and reliable for outdoor, long-term monitoring |
| Protection Rating (Sensor) | Weatherproof standard (customizable depending on field application) |


### Automatic Water Quality Recorder

#### BE WQR-1000-MP7

| Field | Isi |
|---|---|
| Slug | `be-wqr-1000-mp7` |
| Solusi Produk | - |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | - |

**Poin thumbnail / ringkasan card:**

- 8 parameter dalam satu perangkat
- Kontrol penuh 100% Online
- Jangkauan kedalaman hingga 61 meter

**Deskripsi produk:**

Pantau 8 Parameter Kualitas Air Lewat Satu Perangkat

AWQR adalah pilihan tepat untuk memastikan kualitas air selalu termonitoring secara berkala. Perangkat ini menyediakan data parameter air mulai dari jumlah pH, temperatur, hingga ORP ((Oxidation Reduction Potential). Dengan AWQR, identifikasi pencemaran air atau perubahan lingkungan dapat dilakukan secara cepat.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1745983578.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1745983988.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1745983371_BROSUR BE WQR-1000-MP7.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 1100
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404047_BL-1100.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572132_4.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 2x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Analog Input (Logger) | 8 Channels |
| Digital I/O (Logger) | 4 |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Yes |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125 x 44 x 205.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 20 x 4 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Water Quality Sensor 1000-MP7
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748415991_wqr.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748415991_wqr (2).png` — asset visual alternatif/detail perangkat.
**Depth Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range (Sensor) | 0–61 meter |
| Accuracy (Sensor) | ±0.3% |
| Resolution (Sensor) | 2 cm |

**Temperature Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range (Sensor) | 0 °C |
| Resolution (Sensor) | 0.01 °C |

**pH Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range (Sensor) | 0–14 pH |
| Accuracy (Sensor) | ±0.1 pH |
| Resolution (Sensor) | 0.01 pH |

**ORP Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range (Sensor) | –1000 mV to +1000 mV |
| Accuracy (Sensor) | ±0.1 mV |
| Resolution (Sensor) | 0.01 mV |

**Conductivity Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range (Sensor) | - 1 µS/cm–2000 µS/cm (K=1.0); - 100 µS/cm–100 mS/cm (K=10.0) |
| Accuracy (Sensor) | ±3% |
| Resolution (Sensor) | 0.1 µS/cm to 0.01 mS/cm |

**Salinity Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range (Sensor) | - 0–1 ppt (K=1.0); - 0–70 ppt (K=10.0) |
| Accuracy (Sensor) | ±3% |
| Resolution (Sensor) | 0.001–0.01 ppt |

**Turbidity Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range (Sensor) | 0–1000 NTU |
| Accuracy (Sensor) | ±5% |
| Resolution (Sensor) | 0.1 NTU |

**Dissolved Oxygen**

| Spesifikasi | Deskripsi |
|---|---|
| Range (Sensor) | - 0–20 mg/L; - 0–20 ppm; - 0–200% saturation |
| Accuracy (Sensor) | - ±0.1 mg/L (<8 mg/L); - ±0.2 mg/L (>8 mg/L) |
| Resolution (Sensor) | 0.01 mg/L / 0.1% |


### Automatic Vibrating Wire Recorder

#### BE VWR-1000

| Field | Isi |
|---|---|
| Slug | `be-vwr-1000` |
| Solusi Produk | Bendungan |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | https://drive.google.com/file/d/1i-j8Fcz7R35KAULIFXjetwooZCtE83Oy/view?usp=drive_link |

**Poin thumbnail / ringkasan card:**

- Data Logger BL-1100
- Dapat berbagai macam sensor untuk mengukur Kawat Getar

**Deskripsi produk:**

Monitoring Struktural Lebih Cerdas dengan AVWR

Perangkat ini dirancang khusus untuk monitoring otomatis pengukuran getaran kawat dalam pemantauan jangka panjang. Menggunakan BE Data Logger, produk unggulan dari Beacon Engineering, perangkat ini menyediakan pencatatan data yang sangat akurat dan otomatis. Kemampuannya untuk mengukur data dari puluhan sensor secara simultan menjadikannya solusi yang ideal, memberikan fleksibilitas untuk memperluas pengukuran sesuai kebutuhan. Perangkat ini menggabungkan Beacon Data Logger, produk premium dari Beacon Engineering. Perangkat ini mampu mengukur data dari berbagai sensor secara bersamaan dan dapat dikembangkan lebih lanjut untuk mendukung aplikasi pengukuran yang lebih luas

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1744700763.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1744700764.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1744710317_BROSUR BE AVWR-1000.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:** -

## Weather Forecast

### Automatic Rain Recorder

#### BE RR-100-TB02

| Field | Isi |
|---|---|
| Slug | `be-rr-100-tb02` |
| Solusi Produk | Bendungan |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | https://drive.google.com/file/d/13TFOsKXPkgSaDGhb9IV1uYGX9V-fqdWI/view |

**Poin thumbnail / ringkasan card:**

- Berbasis Magnetic Hall Effect
- Resolusi hingga 0.2 mm
- Akurasi ±2%
- Material case Styrosun
- Single sensor

**Deskripsi produk:**

Solusi Akurat Pantau Curah Hujan Kapan Saja Dimana Saja

ARR tipe ini dapat pencatat curah hujan otomatis dengan basis sensor Magnetic Hall Effect yang dirancang untuk memberikan data presisi tinggi dengan resolusi 0.2 mm dan akurasi ±2%. Menggunakan sistem self-emptying tipping bucket, tipe ini minim perawatan dan siap digunakan dalam berbagai kondisi cuaca ekstrem.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1745909880.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1745909881.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1745909881_BROSUR BE RR-100-TB02.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 110
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404066_BL-110.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572147_3.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 1x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |
| Memory (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Digital I/O (Logger) | 2 |
| Analog Input (Logger) | 2 Channels |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Not recommended |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125.6 x 45 x 155.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 16x2 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Rain Sensor TB02
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748328559_4.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748328559_3.png` — asset visual alternatif/detail perangkat.
**Measurement and Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Data Resolution (Sensor) | 0.2 mm |
| Sensor type | Magnetic Hall Effect sensor |
| Measurement Type (Sensor) | Self-emptying tipping bucket |
| Accuracy (Sensor) | ±2% |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Bucket Material (Sensor) | POM (Polyoxymethylene), anti-stick, easy water release |
| Outer Shell Material (Sensor) | Styrosun, smooth surface, easy to clean |
| Features (Sensor) | High-quality plastics, resistant to dust & dirt |


#### BE RR-1000-TB02

| Field | Isi |
|---|---|
| Slug | `be-rr-1000-tb02` |
| Solusi Produk | Bendungan |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | https://drive.google.com/file/d/1FyN-lTSuGwDeG1NgHpl1SvRMuHI6lW5z/view |

**Poin thumbnail / ringkasan card:**

- Berbasis Magnetic Hall Effect
- Resolusi hingga 0.2 mm
- Akurasi ±2%
- Material case Styrosun
- Support multisensor

**Deskripsi produk:**

Solusi Akurat Pantau Curah Hujan Kapan Saja Dimana Saja

ARR tipe ini dapat pencatat curah hujan otomatis dengan basis sensor Magnetic Hall Effect yang dirancang untuk memberikan data presisi tinggi dengan resolusi 0.2 mm dan akurasi ±2%. Menggunakan sistem self-emptying tipping bucket, tipe ini minim perawatan dan siap digunakan dalam berbagai kondisi cuaca ekstrem. Dapat memakai sensor lebih dari satu seperti sensor cuaca atau sensor tinggi muka air.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1745909173.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1745909173.webp` | Hero/detail produk |
| Brosur | `-` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 1100
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404047_BL-1100.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572132_4.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 2x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Analog Input (Logger) | 8 Channels |
| Digital I/O (Logger) | 4 |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Yes |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125 x 44 x 205.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 20 x 4 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Rain Sensor TB02
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748328559_4.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748328559_3.png` — asset visual alternatif/detail perangkat.
**Measurement and Performance**

| Spesifikasi | Deskripsi |
|---|---|
| Data Resolution (Sensor) | 0.2 mm |
| Sensor type | Magnetic Hall Effect sensor |
| Measurement Type (Sensor) | Self-emptying tipping bucket |
| Accuracy (Sensor) | ±2% |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Bucket Material (Sensor) | POM (Polyoxymethylene), anti-stick, easy water release |
| Outer Shell Material (Sensor) | Styrosun, smooth surface, easy to clean |
| Features (Sensor) | High-quality plastics, resistant to dust & dirt |


### Automatic Weather Recorder

#### BE WR-1000-WS80

| Field | Isi |
|---|---|
| Slug | `be-wr-1000-ws80` |
| Solusi Produk | Bendungan |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | https://drive.google.com/file/d/1wdtl6vNQhpQrKeGXEe6Q64JaZ1fkBAxN/view?usp=drive_link |

**Poin thumbnail / ringkasan card:**

- 8 parameter dalam satu perangkat
- Kontrol penuh 100% Online
- Tepat dan Akurat

**Deskripsi produk:**

Pantau 8 Parameter Cuaca Lewat Satu Perangkat Telemetri

AWR tipe ini mampu mengukur 8 parameter cuaca sekaligus dengan satu sistem terintegrasi. Perangkat ini tahan segala cuaca dengan rating IP65, kokoh untuk pemasangan outdoor, dan siap mendukung sistem monitoring bendungan dan irigasi dengan performa tinggi.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1744700846.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1744700846.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1744710361_BROSUR BE AWR-1000-WS80.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 1100
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404047_BL-1100.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572132_4.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 2x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Analog Input (Logger) | 8 Channels |
| Digital I/O (Logger) | 4 |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Yes |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125 x 44 x 205.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 20 x 4 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Weather Sensor 1000-WS80
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748313264_2.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748313264_1.png` — asset visual alternatif/detail perangkat.
**Wind Speed & Direction Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range Speed (Sensor) | - 0–45 m/s (current or voltage output);; - 0–70 m/s (pulse, RS485, RS232 output) |
| Range Direction (Sensor) | 0–360° |
| Accuracy (Sensor) | ±(0.3 + 0.03V) m/s (speed) & ±3° (direction) |
| Acquisition Cycle (Sensor) | 3s |
| Starting Wind Speed (Sensor) | 0.5 m/s |
| Limited Wind Speed (Sensor) | 75 m/s |

**Illuminance Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range (Sensor) | 0–2000 lux, 0–20 klux, 0–200 klux optional |
| Spectral Range (Sensor) | 380–780 nm |
| Supply (Sensor) | 5VDC, 12–24VDC |
| Output (Sensor) | 4–20 mA, 0–5V, 0–10V |
| Accuracy (Sensor) | < ±5% FS (analog output); < ±4% FS |
| Response Time (Sensor) | 1s |
| Temperature Effect (Sensor) | ± 0.2% / °C |
| Repeatability (Sensor) | < 1% FS |

**Temperature, Humadity, & Pressure Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Range Humadity (Sensor) | 0–100%RH (Resolution 0.5%RH, Accuracy ±3%RH) |
| Range Pressure (Sensor) | 10–110kPa (Resolution 0.1 hPa, Accuracy ±1hPa) |
| Storage (Sensor) | 10–60℃ @ 20%–90%RH |

**Rainfall Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Collector Dimension (Sensor) | Diameter: φ200mm, Height: 271mm |
| Rainfall Intensity (Sensor) | 4mm/min |
| Accuracy (2mm/min) (Sensor) | ±4% |
| Resolution (Sensor) | 0.2 mm |

**Solar Radiation Measurement**

| Spesifikasi | Deskripsi |
|---|---|
| Spectral range (Sensor) | 300-3200 nm |
| Supply (Sensor) | 5V,12-24VDC |
| Range (Sensor) | 0-2000W/m² |
| Output (Sensor) | 0-20mV; 0-5V; 4-20mA |
| Sensitivity (Sensor) | 7-14μV·W⁻¹·m⁻² |
| Internal resistance (Sensor) | 350Ω |
| Non-linearity (Sensor) | ±2% |
| Measuring angle (Sensor) | 2π solid angle |
| Response time (Sensor) | ≤20s (99%) |
| Zero drift (temperature drift: 5k/h) (Sensor) | ±5W/m² |
| Cosine correction (Sensor) | ≤±7% (Solar elevation angle=10°) |
| Temperature effect (Sensor) | ±2% (-10°C~+40°C) |
| Operating temperature (Sensor) | -40°C~+80°C |


## Early Warning

### Early Warning System

#### BE EWS-100-WL

| Field | Isi |
|---|---|
| Slug | `be-ews-100-wl` |
| Solusi Produk | Kanal Irigasi, Bendungan, Spillway, Drainase |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | https://drive.google.com/file/d/1DnjusIOe05QkiFrppwt0bwcEnt7q20Mv/view?usp=drive_link |

**Poin thumbnail / ringkasan card:**

- 4 level peringatan + sound buzzer
- Suara efektif 117 dB
- Frekuensi lebar hingga 6500 Hz
- Siaga 24 Jam Non Stop

**Deskripsi produk:**

Empat Level Peringatan Dini dalam Satu Perangkat

Early Warning System tipe ini berbasis multi-level visual dengan 4 level peringatan dan suara keras hingga 117 dB. Perangkat ini tahan segala cuaca dengan rating IP65, kokoh untuk pemasangan outdoor, dan siap mendukung sistem monitoring bendungan dan irigasi dengan performa tinggi.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1744700792.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1744700792.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1744710335_BROSUR BE EWS-100-WL.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 110
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404066_BL-110.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572147_3.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 1x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |
| Memory (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Digital I/O (Logger) | 2 |
| Analog Input (Logger) | 2 Channels |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Not recommended |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125.6 x 45 x 155.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 16x2 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


##### Early Warning Sensor 100 - WL
- Jenis: Sensor
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748328579_1.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748328579_2.png` — asset visual alternatif/detail perangkat.
**Performance & Operation**

| Spesifikasi | Deskripsi |
|---|---|
| Warning level (Sensor) | 4-level visual + buzzer alarm |
| Sound Pressure Level (Sensor) | 117 dB (1W/1m) |
| Frequency Response (Sensor) | 200 – 6,500 Hz |
| Rated Input Power (Sensor) | 25W, 15W, 10W, 5W (100V line) |
| Light Operation (Sensor) | Steady light |
| Lens Colors (Sensor) | Red, Yellow, Green, Blue |
| LED Stack Levels (Sensor) | 4-tier |

**Power and Connectivity**

| Spesifikasi | Deskripsi |
|---|---|
| Power Supply (Sensor) | 24V AC/DC |
| Connection Type (Sensor) | Lead wires |
| Mounting (Sensor) | Pole mount |
| Recommended Cable (Sensor) | 1007 UL / 22 AWG |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Ingress Protection (Sensor) | IP65 |
| Operating Temperature (Logger) | -15°C to 40°C (5°F to 104°F) |
| Storage Temperature (Sensor) | -40°C to 70°C (-40°F to 158°F) |
| Humidity Tolerance (Sensor) | 45 – 85% RH |
| Vibration Resistance (Sensor) | 3mm amplitude at 10–55 Hz |

**Materials & Construction**

| Spesifikasi | Deskripsi |
|---|---|
| Tower Light Dimensions (Sensor) | 279 mm (H) × 56 mm (D) |
| Horn Dimensions (Sensor) | 500 mm × 477 mm |
| Horn Material (Sensor) | Aluminum |
| Brackets Material (Sensor) | Steel |
| Unit Cover Material (Sensor) | ABS Resin |


## Pressure Measurement

### Automatic Pressure Level Recorder

#### BE PLR-1000

| Field | Isi |
|---|---|
| Slug | `be-plr-1000` |
| Solusi Produk | - |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | - |

**Poin thumbnail / ringkasan card:**

- Pengukuran level tekanan tanpa intervensi manual
- Deteksi fluktuasi kecil dengan sensitivitas tinggi
- Pengukuran tekanan hingga 3000 psi

**Deskripsi produk:**

Solusi Cerdas Pemantauan Level Tekanan 24/7

APLR adalah alat pemantau otomatis yang digunakan untuk merekam dan mengirimkan data tekanan fluida seperti air tanah atau gas secara real-time. Menggunakan sensor tekanan presisi tinggi, mengirimkannya melalui sistem telemetri (GSM, radio, atau satelit) ke pusat pemantauan. Dengan APLR, level tekanan dipantau otomatis setiap saat tanpa harus ke lapangan.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1745225630.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1745225630.webp` | Hero/detail produk |
| Brosur | `-` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:**

##### BL Logger 1100
- Jenis: Logger
- Asset seri perangkat:
  - Gambar 1: `seri_perangkat/gambar1/1748404047_BL-1100.png` — asset visual perangkat utama/pendukung.
  - Gambar 2: `seri_perangkat/gambar2/1748572132_4.png` — asset visual alternatif/detail perangkat.
**Connectivity & Communication**

| Spesifikasi | Deskripsi |
|---|---|
| Internet Connection (Logger) | 4G Wireless Router, LAN ports, Wi-Fi transmission channel |
| Communication Ports (Logger) | 2x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE) |
| Data Download (Logger) | Supports local Wi-Fi connection |
| Positioning System (Logger) | Integrated GPS Module for location tracking |

**Processing & Memory**

| Spesifikasi | Deskripsi |
|---|---|
| Processor (Logger) | SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB; SD Card Slot Available |
| Processor (Logger) | STM32F407xx (Arm Cortex 32-bit) |
| Clock Speed (Logger) | Up to 168 MHz |

**Input & Ouput**

| Spesifikasi | Deskripsi |
|---|---|
| Analog Input (Logger) | 8 Channels |
| Digital I/O (Logger) | 4 |
| ADC Resolution (Logger) | 16-bit |
| Support Multisensor (Logger) | Yes |

**Power Supply & Regulation**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Input Voltage (Logger) | 10 - 24 VDC |
| Built-in DC Regulator Output (Logger) | 5VDC, 12VDC, and 24VDC (for various sensor power supply) |

**Environmental & Durability**

| Spesifikasi | Deskripsi |
|---|---|
| Operating Temperature (Logger) | -40 to +85°C |
| Enclosure Material (Logger) | Flame-resistant ABS |
| Dimension (Logger) | 125 x 44 x 205.6 mm |

**Display & Data Handling**

| Spesifikasi | Deskripsi |
|---|---|
| Display (Logger) | 20 x 4 character LCD with green LED backlight |
| Data Format (Logger) | Excel (CSV File) |


## STESY Application

### Smart Telemetry System

#### Smart Telemetry System

| Field | Isi |
|---|---|
| Slug | `smart-telemetry-system` |
| Solusi Produk | - |
| Link LKPP Lokal | - |
| Link LKPP Sektoral | - |
| Link TKDN | - |

**Deskripsi produk:**

STESY: Solusi Cerdas untuk Monitoring Telemetri

STESY (Smart Telemetry System) memungkinkan pemantauan data secara real-time dari perangkat telemetri yang tersebar di berbagai lokasi. Dengan antarmuka yang intuitif dan fitur analitik yang canggih, STESY mendukung pengambilan keputusan berbasis data dalam sistem pemantauan jarak jauh.

**Asset produk:**

| Asset | Path / Link | Keterangan penempatan |
|---|---|---|
| Thumbnail produk | `konten/produk/gambar_thumbnail_produk/1744872999.webp` | Card/listing produk |
| Gambar produk | `konten/produk/gambar_produk/1744872999.webp` | Hero/detail produk |
| Brosur | `konten/produk/brosur/1746157274_BROSUR STESY.pdf` | Tombol unduh brosur |

**Seri perangkat dan spesifikasi:** -
