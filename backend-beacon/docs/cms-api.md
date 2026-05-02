# Beacon CMS External API

Panduan ini menjelaskan endpoint untuk mengelola data CMS dari luar dashboard Filament.

Base URL lokal:

```text
http://localhost:8000/api/v1
```

## Autentikasi

Semua endpoint CMS eksternal berada di prefix `/cms` dan wajib memakai token.

Tambahkan token di `.env` backend:

```env
CMS_API_TOKEN=isi-token-panjang-yang-acak
```

Kirim token dengan salah satu header berikut:

```http
Authorization: Bearer isi-token-panjang-yang-acak
```

atau:

```http
X-CMS-Token: isi-token-panjang-yang-acak
```

Jika `CMS_API_TOKEN` belum diisi, endpoint akan mengembalikan `503`.

## Pola Endpoint

Semua resource memakai pola yang sama:

```http
GET    /api/v1/cms/{resource}
POST   /api/v1/cms/{resource}
GET    /api/v1/cms/{resource}/{id|slug|key}
PUT    /api/v1/cms/{resource}/{id|slug|key}
PATCH  /api/v1/cms/{resource}/{id|slug|key}
DELETE /api/v1/cms/{resource}/{id|slug|key}
```

`id` selalu bisa dipakai. Untuk resource yang punya `slug`, detail/update/delete juga bisa memakai slug. Untuk `page-settings`, bisa memakai `key`.

## Resource Yang Tersedia

```text
articles
clients
testimonials
solutions
sub-solutions
products
project-categories
projects
page-settings
device-series
product-components
component-specs
sub-solution-features
sub-solution-galleries
project-galleries
```

## Query List

Endpoint list mendukung query berikut:

```http
GET /api/v1/cms/articles?per_page=20&search=telemetri&sort_by=published_at&sort_dir=desc&with_inactive=1
```

Parameter:

| Parameter | Fungsi |
| --- | --- |
| `per_page` | Jumlah item per halaman. Default `15`. |
| `search` | Cari di kolom utama resource. |
| `sort_by` | Kolom sorting. Hanya kolom valid yang diterima. |
| `sort_dir` | `asc` atau `desc`. |
| `with_inactive` | Isi `1` untuk menampilkan data nonaktif juga. Default hanya data aktif untuk resource yang punya `is_active`. |
| `include` | Load relasi yang diizinkan, pisahkan dengan koma. |
| `group` | Khusus `page-settings`, filter berdasarkan group. |

Contoh include:

```http
GET /api/v1/cms/products?include=subSolution,components.specs,deviceSeries
GET /api/v1/cms/projects?include=client,category,gallery
```

## Upload File

Field gambar/file bisa dikirim sebagai string path atau multipart file.

Contoh multipart:

```bash
curl -X POST "http://localhost:8000/api/v1/cms/articles" \
  -H "Authorization: Bearer $CMS_API_TOKEN" \
  -F "title=Artikel dari API" \
  -F "content=<p>Isi artikel</p>" \
  -F "thumbnail=@/path/thumbnail.jpg" \
  -F "published_at=2026-05-01" \
  -F "is_active=1"
```

File akan disimpan ke disk `public`, misalnya `storage/app/public/articles/thumbnails`.

## Contoh Artikel

Create:

```bash
curl -X POST "http://localhost:8000/api/v1/cms/articles" \
  -H "Authorization: Bearer $CMS_API_TOKEN" \
  -H "Content-Type: application/json" \
  -d '{
    "title": "Judul Artikel Baru",
    "excerpt": "Ringkasan singkat artikel.",
    "content": "<p>Konten artikel bisa HTML.</p>",
    "category": "Artikel Teknis",
    "category_color": "#C8102E",
    "author": "Tim Engineering",
    "read_time": "5 min",
    "tags": ["AWLR", "Telemetri"],
    "published_at": "2026-05-01",
    "is_active": true,
    "is_featured": false
  }'
```

Update:

```bash
curl -X PATCH "http://localhost:8000/api/v1/cms/articles/judul-artikel-baru" \
  -H "Authorization: Bearer $CMS_API_TOKEN" \
  -H "Content-Type: application/json" \
  -d '{
    "is_featured": true,
    "read_time": "6 min"
  }'
```

Delete:

```bash
curl -X DELETE "http://localhost:8000/api/v1/cms/articles/judul-artikel-baru" \
  -H "Authorization: Bearer $CMS_API_TOKEN"
```

## Field Utama Per Resource

### `articles`

```json
{
  "title": "required",
  "slug": "optional, auto dari title kalau kosong",
  "excerpt": "optional",
  "content": "optional HTML",
  "thumbnail": "optional path/file",
  "category": "optional",
  "category_color": "optional hex",
  "author": "optional",
  "read_time": "optional",
  "tags": ["optional"],
  "published_at": "optional date",
  "is_active": true,
  "is_featured": false
}
```

### `solutions`

```json
{
  "name": "required",
  "slug": "optional, auto dari name kalau kosong",
  "description": "optional",
  "thumbnail": "optional path/file",
  "icon": "optional path/file",
  "color": "#C8102E",
  "sort_order": 0,
  "is_active": true
}
```

### `testimonials`

```json
{
  "client_id": 1,
  "project_id": 1,
  "name": "required",
  "position": "optional",
  "organization": "optional, fallback ke nama client jika kosong",
  "quote": "required",
  "photo": "optional path/file",
  "initials": "optional",
  "sort_order": 0,
  "is_active": true,
  "is_featured": true
}
```

### `sub-solutions`

```json
{
  "solution_id": 1,
  "name": "required",
  "slug": "optional, auto dari name kalau kosong",
  "abbreviation": "AWLR",
  "main_content": "optional HTML",
  "support_content": "optional HTML",
  "application_content": "optional HTML",
  "icon": "optional path/file",
  "thumbnail": "optional path/file",
  "video_url": "https://example.com/video",
  "file_3d_local": "optional path/file",
  "link_3d": "https://example.com/3d",
  "sort_order": 0,
  "is_active": true
}
```

### `products`

`products` mendukung nested `components` dan `specs`, sama seperti repeater di CMS. Saat `components` dikirim pada update, komponen lama produk tersebut akan diganti dengan data baru.

```json
{
  "sub_solution_id": 1,
  "name": "required",
  "slug": "optional, auto dari name kalau kosong",
  "highlight_points": ["Point 1", "Point 2"],
  "description": "optional",
  "thumbnail": "optional path/file",
  "main_image": "optional path/file",
  "brochure_pdf": "optional path/file",
  "link_lkpp_general": "https://example.com",
  "link_lkpp_regency": "https://example.com",
  "link_tkdn": "https://example.com",
  "use_case": "optional",
  "sort_order": 0,
  "is_active": true,
  "device_series_ids": [1, 2],
  "components": [
    {
      "name": "Data Logger",
      "type": "Logger",
      "image_1": "components/images/logger.jpg",
      "image_2": null,
      "sort_order": 0,
      "specs": [
        {
          "category": "Komunikasi",
          "spec_name": "Koneksi",
          "spec_value": "4G/LTE",
          "sort_order": 0
        }
      ]
    }
  ]
}
```

### `projects`

```json
{
  "client_id": 1,
  "project_category_id": 1,
  "name": "required",
  "slug": "optional, auto dari name kalau kosong",
  "location": "Bogor",
  "year": "2026",
  "website": "https://example.com",
  "description": "optional HTML",
  "challenge_content": "optional HTML",
  "solution_content": "optional HTML",
  "thumbnail": "optional path/file",
  "main_image": "optional path/file",
  "white_paper_url": "https://example.com/file.pdf",
  "is_featured": false,
  "sort_order": 0,
  "is_active": true
}
```

### Resource Pendukung

`clients`:

```json
{ "name": "required", "logo": "optional path/file", "website": "https://example.com", "is_active": true }
```

`project-categories`:

```json
{ "name": "required", "slug": "optional, auto dari name kalau kosong" }
```

`page-settings`:

```json
{ "key": "required unique", "value": "optional", "group": "general" }
```

`device-series`:

```json
{ "name": "required", "type": "Logger", "image_1": "optional path/file", "image_2": "optional path/file" }
```

`product-components`:

```json
{ "product_id": 1, "name": "required", "type": "required", "image_1": "optional path/file", "image_2": "optional path/file", "sort_order": 0 }
```

`component-specs`:

```json
{ "product_component_id": 1, "category": "required", "spec_name": "required", "spec_value": "required", "sort_order": 0 }
```

`sub-solution-features`:

```json
{ "sub_solution_id": 1, "title": "required", "description": "optional", "icon": "optional", "sort_order": 0 }
```

`sub-solution-galleries`:

```json
{ "sub_solution_id": 1, "image": "required path/file", "caption": "optional", "sort_order": 0 }
```

`project-galleries`:

```json
{ "project_id": 1, "image": "required path/file", "caption": "optional", "sort_order": 0 }
```

## Response Error Umum

Token salah:

```json
{ "message": "Unauthenticated." }
```

Validation error:

```json
{
  "message": "The given data was invalid.",
  "errors": {
    "title": ["The title field is required."]
  }
}
```

Resource tidak ditemukan:

```json
{ "message": "CMS resource not found." }
```
