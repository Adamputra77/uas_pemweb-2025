# Analisis Sistem Katalog Motor Custom (Laravel + Filament v3, Api Swagger BoilerPlate)

## 1. Pendahuluan

Sistem ini dibangun untuk mengelola data kendaraan motor custom, seperti tipe chopper, cafe racer, dan scrambler. Fungsinya sebagai katalog sekaligus sebagai basis sistem komunitas dan informasi motor custom di Indonesia. Sistem ini dibangun menggunakan Laravel 12 dan Filament v3, serta telah diintegrasikan dengan dokumentasi API menggunakan Swagger.

---

## 2. Tujuan Sistem

- Menyediakan katalog digital untuk motor custom.
- Mempermudah pengguna dan komunitas untuk menemukan motor sesuai kategori, tipe, dan tahun.
- Menyediakan API RESTful sebagai integrasi lintas platform (mobile/web).

---

## 3. Struktur Database

### Tabel: `informasi_kendaraans`

| Kolom            | Tipe Data | Keterangan                                                  |
|------------------|-----------|-------------------------------------------------------------|
| `id`             | BIGINT    | Primary key, auto increment                                |
| `nama_kendaraan` | VARCHAR   | Nama dari kendaraan motor custom                           |
| `merk`           | VARCHAR   | Merek kendaraan (Yamaha, Honda, dll)                       |
| `tipe`           | VARCHAR   | Tipe motor (Cafe Racer, Chopper, Scrambler, dll)           |
| `tahun`          | INTEGER   | Tahun produksi kendaraan                                    |
| `warna`          | VARCHAR   | Warna dominan motor                                         |
| `deskripsi`      | TEXT      | Penjelasan atau fitur tambahan motor (nullable)            |
| `gambar`         | VARCHAR   | Path lokasi file gambar motor (nullable)                   |
| `created_at`     | TIMESTAMP | Timestamp pembuatan data                                    |
| `updated_at`     | TIMESTAMP | Timestamp update data                                       |

---

## 4. Model: `InformasiKendaraan`

Model ini mewakili tabel `informasi_kendaraans` di database. Properti `$fillable` digunakan agar data dapat dimasukkan secara massal (mass assignment) saat menggunakan method `create()` atau `update()`.

### Keunggulan:

- **Mass Assignment Safety**: Mencegah serangan injection yang bisa merusak data.
- **Simple & Clean**: Model hanya berisi logika dasar data tanpa relasi rumit (saat ini).

---

## 5. Seeder: `InformasiKendaraanSeeder`

Seeder digunakan untuk membuat data dummy awal ke dalam tabel `informasi_kendaraans`. Data ini bisa digunakan untuk kebutuhan testing awal aplikasi.

### Contoh Data:
- Custom Cafe Racer X (Yamaha)
- Chopper Thunder (Honda)
- Scrambler Adventurer (Kawasaki)

### Keunggulan:
- **Praktis untuk testing frontend & API**
- **Menampilkan variasi data untuk tiap tipe motor**

---

## 6. API & Swagger Integration

Swagger digunakan untuk mendokumentasikan endpoint RESTful API agar mudah dipahami oleh frontend developer atau tim lain.

### Contoh Endpoint:
```http
GET /api/informasi-kendaraan


### Manfaat Swagger :

- Interaktif: Bisa langsung mencoba API dari browser.
- Terstandarisasi: Developer dapat memahami struktur response & parameter secara jelas.
- Profesional: Memudahkan presentasi atau kerja tim antar divisi.

### Boiler Plate dan Arsitektrur

Project ini dibangun menggunakan boilerplate Laravel dengan modul API yang sudah terpisah. Ini membuat pengelolaan antar modul (API, Web, Filament) menjadi lebih rapi.

app/
├── Models/
├── Http/
│   ├── Controllers/
│   │   └── Api/
│   │   └── Web/
├── Filament/Resources/
routes/
├── api.php
├── web.php

### Keuntungan 

- Modular dan scalable.
- Mudah dikembangkan ke fitur komunitas, booking studio, katalog part, dll.

### Keungulan Aplikasi

| Aspek                       | Keuntungan                                                             |
| --------------------------- | ---------------------------------------------------------------------- |
| Laravel + Filament          | CRUD admin cepat & rapi                                                |
| Swagger                     | Dokumentasi API modern & lengkap                                       |
| Seeder + Gambar             | Tampilan katalog langsung menarik sejak awal                           |
| Struktur Clean Architecture | Memudahkan scaling ke fitur lanjutan seperti forum, komunitas, booking |
| Desain Modular              | Web dan API dipisah untuk fleksibilitas frontend                       |

### Rencana Pengembangan Lanjutan

- Menambahkan relasi ke kategori/tag motor.
- Menyediakan fitur upload gambar dari dashboard admin.
- Menyediakan endpoint API detail motor.
- Membuat fitur komunitas diskusi, rating motor, dan booking studio.

### Penutup

Sistem Katalog Motor Custom ini telah memenuhi kebutuhan dasar untuk pengelolaan data motor custom dan siap dikembangkan menjadi platform komunitas yang lebih lengkap. Dengan fondasi Laravel, Filament, Swagger, dan struktur bersih, sistem ini dapat menjadi dasar yang kuat untuk pengembangan lanjutan dalam industri otomotif custom.

