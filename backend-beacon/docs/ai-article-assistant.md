# AI Artikel di CMS

Fitur ini menambahkan halaman internal Filament untuk membuat draft artikel dari prompt dan bahan mentah.

Menu CMS:

```text
Konten -> AI Artikel
```

URL:

```text
/admin/ai-artikel
```

## Konfigurasi

Tambahkan API key OpenAI di `.env` backend:

```env
OPENAI_API_KEY=sk-...
OPENAI_MODEL=gpt-5.5
```

Opsional:

```env
OPENAI_TIMEOUT=90
OPENAI_MAX_OUTPUT_TOKENS=4500
OPENAI_MAX_INPUT_CHARACTERS=12000
```

## Cara Kerja

1. Isi `Prompt` dengan instruksi artikel.
2. Tempel bahan/catatan di `Bahan / Catatan`.
3. Upload gambar referensi jika ada.
4. Klik `Generate Draft`.
5. Review dan edit field hasil AI.
6. Jika belum sesuai, isi `Instruksi Revisi`, lalu klik `Revisi Draft`.
7. Gunakan `History Draft` untuk kembali ke versi sebelumnya jika revisi baru kurang cocok.
8. Klik `Simpan Draft` untuk menyimpan dengan `is_active = false`.
9. Klik `Publish` untuk menyimpan dengan `is_active = true`.

Fitur ini tidak memakai token `/api/v1/cms`. Karena berjalan di dalam CMS Filament, penyimpanan artikel langsung menggunakan model `Article`.

## Melihat Proses di Browser Console

Saat tombol `Generate Draft`, `Simpan Draft`, atau `Publish` dipakai, prosesnya dikirim ke browser console.

Cara lihat:

```text
Buka DevTools browser -> Console -> gunakan halaman /admin/ai-artikel
```

Log yang tampil mencakup:

```text
AI article assistant: generate button clicked
AI article assistant: validation passed, building image inputs
AI article generation: preparing OpenAI request
AI article generation: sending request to OpenAI
AI article generation: received OpenAI response
AI article generation: draft parsed successfully
AI article assistant: draft loaded into preview
AI article assistant: revise button clicked
AI article assistant: revising current draft
AI article assistant: saving article
AI article assistant: article saved
```

Log browser tidak menampilkan API key atau data base64 gambar.

Proses yang sama juga tetap ditulis ke Laravel log jika perlu dicek dari terminal:

```bash
tail -f storage/logs/laravel.log
```

## Efisiensi Token

Implementasi menggunakan OpenAI Responses API dengan Structured Outputs. Model diminta langsung mengembalikan JSON sesuai schema artikel, sehingga aplikasi tidak perlu meminta format ulang berulang kali.

Input bahan juga dibatasi oleh:

```env
OPENAI_MAX_INPUT_CHARACTERS=12000
```

Jika bahan sangat panjang, ringkas dulu bagian yang paling penting sebelum ditempel.

Gambar referensi dikirim sebagai `input_image` dengan `detail: low` agar pemakaian token lebih hemat. Batas default halaman:

```text
Maksimal 6 gambar
Maksimal 4MB per gambar
Format: JPG, PNG, WebP
```

Gunakan gambar untuk konteks visual seperti lokasi, perangkat, kegiatan instalasi, dashboard, atau kondisi lapangan. Untuk gambar yang berisi teks kecil/spec sheet, sebaiknya tempel teks pentingnya juga di `Bahan / Catatan`.

## Panduan Prompt Agar Artikel Lebih Menarik

Tulis prompt sebagai brief editorial, bukan sebagai judul. AI sekarang diinstruksikan untuk tidak menyalin mentah frasa prompt menjadi judul, tetapi mencari angle yang lebih kuat.

Prompt yang kurang kuat:

```text
Buatkan artikel mengenai manfaat sumur pantau dan relevansinya dengan alat telemetri Beacon, khususnya AWLR.
```

Prompt yang lebih kuat:

```text
Tulis artikel edukatif-marketing untuk pengelola sumber daya air dan instansi pemerintah.

Topik utama:
Sumur pantau untuk monitoring air tanah, dan bagaimana telemetri Beacon/AWLR membantu membaca perubahan muka air tanah secara realtime dan berkelanjutan.

Angle yang diinginkan:
- Bukan sekadar "alat monitoring", tapi kebutuhan data berkelanjutan untuk mengambil keputusan lebih cepat.
- Tekankan masalah umum: pengukuran manual berkala sering terlambat menangkap perubahan.
- Hubungkan sumur pantau, data realtime, tren muka air tanah, dan risiko pengelolaan air tanah.

Gaya:
Profesional, konkret, tidak terlalu salesy, cocok untuk BBWS/BWS, dinas, konsultan, dan engineer.

Hindari:
Judul generik seperti "Manfaat Sumur Pantau dan Integrasinya dengan AWLR Beacon".
Pembuka klise seperti "Di era digital...".
Klaim angka/sertifikasi yang tidak ada di bahan.
```

Prompt revisi setelah draft sudah jadi:

```text
Opening-nya masih terlalu datar. Buat 2 paragraf awal lebih problem-led:
- mulai dari risiko data air tanah yang terlambat diketahui
- jangan mulai dengan definisi sumur pantau
- tetap profesional dan tidak terlalu salesy

Pertahankan struktur artikel, tapi perkuat H2 agar lebih scannable.
```

Contoh revisi lain:

```text
Judul masih terlalu generik. Buat lebih spesifik untuk pembaca dinas/BBWS.
Hindari pola "Manfaat X dan Integrasinya dengan Y".
Tetap masukkan keyword sumur pantau dan telemetri air tanah secara natural.
```

Prinsip yang dipakai di prompt internal:

- Instruksi ditaruh jelas di awal dan dipisahkan dari konteks.
- Output diminta spesifik: judul utama, beberapa alternatif judul, excerpt, HTML artikel, kategori, tags.
- Judul diarahkan untuk mencari angle editorial: masalah lapangan, konsekuensi data terlambat, manfaat operasional, atau keputusan teknis.
- Artikel dibuat scannable: informasi penting di awal, H2/H3 yang jelas, paragraf pendek, dan list bila perlu.
- Revisi memakai draft yang sedang tampil sebagai konteks, sehingga AI tidak mulai dari nol.

Referensi yang dipakai:

- OpenAI prompt engineering: instruksi harus spesifik, format output jelas, dan konteks dipisahkan dari instruksi.
- HubSpot blog writing: mulai dari working title, tajamkan angle, headline harus menarik tapi tetap memenuhi janji konten.
- Johns Hopkins/Krieger web writing: konten web perlu singkat, scannable, informasi penting di awal, heading jelas, paragraf pendek.

## Struktur Prompt Modular

Prompt AI Artikel sekarang dibuat seperti pendekatan agent bootstrap: instruksi inti dipisah menjadi beberapa file Markdown agar mudah dirawat.

Lokasi:

```text
resources/prompts/ai-article/
```

File:

```text
SOUL.md       -> rasa/persona editorial Beacon
AGENT.md      -> peran dan workflow content strategist
STYLE.md      -> aturan judul, opening, body, dan tone
COMPONENTS.md -> komponen HTML visual yang boleh dipakai AI
GUARDRAILS.md -> batas klaim, HTML aman, dan akurasi
CHECKLIST.md  -> daftar cek sebelum output JSON
```

Kalau hasil AI terasa kurang punya karakter, edit `SOUL.md` dan `STYLE.md`.

Kalau hasil AI terlalu berani mengarang klaim, edit `GUARDRAILS.md`.

Kalau struktur artikel kurang rapi, edit `CHECKLIST.md`.

Kalau ingin artikel lebih visual, edit `COMPONENTS.md`. Komponen yang tersedia saat ini:

```text
beacon-callout
beacon-callout-soft
beacon-metric-grid
beacon-metric-card
beacon-highlight-band
beacon-benefit-grid
beacon-benefit-card
beacon-quote-card
beacon-process
```

CSS komponen ini sudah ada di preview CMS AI Artikel dan halaman detail artikel frontend. Saat draft dibuat atau disimpan, HTML juga dibersihkan oleh `App\Services\AiArticleHtmlSanitizer` agar hanya tag ringan dan class komponen yang masuk ke database.

Prinsip ini terinspirasi dari pola OpenClaw yang menyusun system prompt dari bootstrap/context files seperti `SOUL.md`, role/config files, skills, dan memory yang relevan per run. Di sini kita pakai versi yang lebih aman dan sempit untuk CMS artikel: tidak ada tool execution, hanya prompt editorial yang modular.

## Draft Artikel Harian

Sistem juga bisa membuat 1 draft artikel otomatis setiap hari pukul 08:00 WIB untuk direview editor.

Scheduler ada di:

```text
routes/console.php
```

Command manual:

```bash
php artisan articles:generate-daily-draft
```

Cek topik dan ukuran bahan tanpa memakai token OpenAI:

```bash
php artisan articles:generate-daily-draft --dry-run
```

Buat ulang walau draft hari itu sudah ada:

```bash
php artisan articles:generate-daily-draft --force
```

Draft harian disimpan sebagai artikel `is_active = false` dan `published_at = null`, jadi tidak tampil di website sampai direview dan dipublish dari CMS.

Referensi yang dipakai:

```text
../beacon_engineering_profile.md
../dokumentasi_produk_dan_spesifikasi_be_profile.md
```

Konfigurasi opsional `.env`:

```env
AI_ARTICLE_DAILY_ENABLED=true
AI_ARTICLE_DAILY_TIME=08:00
AI_ARTICLE_DAILY_TIMEZONE=Asia/Jakarta
AI_ARTICLE_COMPANY_PROFILE_PATH=/path/to/beacon_engineering_profile.md
AI_ARTICLE_PRODUCT_REFERENCE_PATH=/path/to/dokumentasi_produk_dan_spesifikasi_be_profile.md
```

Di server production, pastikan Laravel scheduler berjalan lewat cron:

```cron
* * * * * cd /path/to/backend-beacon && php artisan schedule:run >> /dev/null 2>&1
```

## Field Yang Dibuat AI

```json
{
  "title": "...",
  "slug": "...",
  "excerpt": "...",
  "content": "<p>...</p>",
  "category": "Artikel Teknis",
  "category_color": "#C8102E",
  "author": "Tim Engineering",
  "read_time": "5 min",
  "tags": ["AWLR", "Telemetri"],
  "is_featured": false
}
```

`published_at` diisi otomatis saat artikel disimpan.
