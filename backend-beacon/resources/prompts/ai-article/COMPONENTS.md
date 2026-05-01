# COMPONENTS

Kamu boleh membuat elemen HTML artikel yang lebih editorial dan visual, bukan hanya paragraf plain. Gunakan hanya komponen dan class di bawah ini.

Jangan gunakan style inline. Jangan gunakan class selain yang tertulis di sini.

## Callout

Untuk ringkasan, insight penting, atau konteks pembuka.

```html
<div class="beacon-callout">
  <strong>Inti gagasan:</strong>
  <p>Kalimat ringkas yang menjelaskan kenapa pembaca perlu peduli.</p>
</div>
```

Variasi:

```html
<div class="beacon-callout beacon-callout-soft">...</div>
```

## Metric Cards

Gunakan hanya jika bahan memberi angka, label, frekuensi, durasi, status, atau manfaat yang aman. Jangan mengarang angka.

```html
<div class="beacon-metric-grid">
  <div class="beacon-metric-card">
    <span>Frekuensi data</span>
    <strong>Realtime</strong>
  </div>
  <div class="beacon-metric-card">
    <span>Monitoring</span>
    <strong>Berkelanjutan</strong>
  </div>
</div>
```

## Highlight Band

Untuk menjembatani problem ke solusi.

```html
<div class="beacon-highlight-band">
  <span>Data yang terus mengalir</span>
  <strong>membantu tim membaca perubahan sebelum terlambat menjadi keputusan.</strong>
</div>
```

## Checklist / Benefit Grid

Untuk daftar manfaat, alasan, atau langkah.

```html
<div class="beacon-benefit-grid">
  <div class="beacon-benefit-card">
    <strong>Membaca tren lebih cepat</strong>
    <p>Data berkala membantu tim melihat pola perubahan muka air.</p>
  </div>
  <div class="beacon-benefit-card">
    <strong>Mengurangi jeda pengukuran manual</strong>
    <p>Telemetry menjaga data tetap terkirim tanpa menunggu kunjungan lapangan.</p>
  </div>
</div>
```

## Quote Card

Gunakan hanya untuk kutipan asli dari bahan. Jika tidak ada kutipan asli, jangan buat quote palsu.

```html
<blockquote class="beacon-quote-card">
  <p>"Kutipan asli dari narasumber atau bahan."</p>
  <footer>Nama / jabatan jika tersedia</footer>
</blockquote>
```

## Process Steps

Untuk menjelaskan alur kerja telemetry.

```html
<div class="beacon-process">
  <div>
    <span>1</span>
    <strong>Sensor membaca perubahan</strong>
    <p>Sensor merekam kondisi lapangan secara berkala.</p>
  </div>
  <div>
    <span>2</span>
    <strong>Logger mengirim data</strong>
    <p>Data dikirim ke dashboard untuk dipantau tim.</p>
  </div>
</div>
```

## Kapan Dipakai

Dalam satu artikel, gunakan 2-4 komponen visual bila relevan. Jangan memenuhi artikel dengan kartu. Paragraf naratif tetap diperlukan agar artikel terasa matang.

Pola yang baik:
- opening callout
- benefit grid untuk manfaat
- process steps untuk cara kerja
- metric cards untuk data yang memang tersedia
- quote card hanya jika ada kutipan asli
