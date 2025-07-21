# Business Requirements Document (BRD)
## Sistem Katalog & Komunitas Motor Custom

---

## 1. Ringkasan Proyek

Sistem ini merupakan platform katalog online motor custom yang dilengkapi dengan fitur komunitas, dokumentasi API, dan panel admin berbasis Filament v3. Sistem ini bertujuan menjadi referensi utama bagi pecinta motor custom di Indonesia.

---

## 2. Tujuan Utama

- Menyediakan sistem katalog untuk motor custom.
- Memberikan informasi lengkap terkait tipe, merk, dan tahun produksi motor.
- Menyediakan dokumentasi API berbasis Swagger untuk integrasi eksternal.
- Memfasilitasi komunitas pengguna motor custom untuk berdiskusi dan berbagi.

---

## 3. Ruang Lingkup Proyek

### 3.1 Fitur Utama

| Fitur                          | Deskripsi                                                                 |
|-------------------------------|--------------------------------------------------------------------------|
| Katalog Motor                 | Daftar motor custom yang dikelola dari dashboard admin.                 |
| Manajemen Informasi Kendaraan | Admin dapat menambah, mengubah, dan menghapus data motor.               |
| Upload Gambar                | Setiap motor memiliki gambar representatif.                             |
| API Swagger                  | Dokumentasi dan endpoint RESTful terintegrasi dengan Swagger UI.        |
| Seeder Data Awal             | Menyediakan data dummy untuk testing dan presentasi awal.               |

### 3.2 Fitur Opsional (Pengembangan Selanjutnya)

| Fitur Tambahan                | Deskripsi                                                                 |
|-------------------------------|---------------------------------------------------------------------------|
| Kategori & Tagging Motor     | Klasifikasi motor berdasarkan kategori dan tag.                          |
| Booking Studio                | Fitur reservasi studio untuk komunitas atau pemotretan motor.            |
| Forum Komunitas               | Tempat diskusi antar pengguna motor custom.                              |
| Rating & Review              | Pengguna bisa memberikan ulasan dan penilaian motor.                     |

---

## 4. Stakeholders

| Peran            | Deskripsi                                         |
|------------------|--------------------------------------------------|
| Admin            | Mengelola data motor melalui dashboard.          |
| Pengunjung Web   | Melihat katalog motor, spesifikasi, dan gambar.  |
| Developer        | Mengembangkan sistem web dan API.                |
| Komunitas Motor  | Pengguna yang ingin berdiskusi dan berbagi info. |

---

## 5. Kebutuhan Fungsional

| Kode | Kebutuhan                                                                 |
|------|---------------------------------------------------------------------------|
| F01  | Sistem harus menampilkan daftar motor custom.                            |
| F02  | Admin dapat menambah motor custom baru.                                  |
| F03  | Admin dapat mengedit detail motor.                                       |
| F04  | Admin dapat menghapus motor dari katalog.                                |
| F05  | Sistem harus menyimpan gambar motor secara terorganisir.                |
| F06  | Sistem menyediakan API GET / POST / PUT / DELETE untuk data motor.      |
| F07  | Swagger harus mendokumentasikan semua endpoint secara otomatis.         |

---

## 6. Kebutuhan Non-Fungsional

| Kode | Kebutuhan                                                                      |
|------|---------------------------------------------------------------------------------|
| NF01 | Sistem dibangun dengan Laravel 12 + Filament v3 untuk kecepatan pengembangan.  |
| NF02 | Sistem harus responsif dan bisa diakses dari mobile maupun desktop.            |
| NF03 | API harus mengikuti standar REST dan terdokumentasi via Swagger.               |
| NF04 | Struktur proyek harus modular dan mudah dikembangkan.                          |

---

## 7. Diagram Alur (Use Case Diagram - Sederhana)

```plaintext
+-----------+       +--------------------------+
|   Admin   | --->  |  Kelola Data Motor       |
|           | --->  |  Upload Gambar Motor     |
+-----------+       +--------------------------+

+-----------+       +--------------------------+
|  User/API | --->  |  Lihat Katalog Motor     |
|           | --->  |  Akses API Swagger       |
+-----------+       +--------------------------+

8.  Skenario Penggunaan
Use Case: Menambah Motor Custom Baru
Aktor: Admin

Alur:

Admin login ke dashboard.

Admin mengakses menu Informasi Kendaraan.

Admin mengisi data motor dan mengupload gambar.

Sistem menyimpan data ke database.

Motor langsung muncul di katalog dan API.

9. Keuntungan Sistem
Mempercepat pengelolaan katalog motor custom.

Menjadi basis sistem komunitas biker dan builder.

Terstruktur untuk integrasi API dan frontend lainnya (web, mobile).

Dokumentasi API mempermudah kerja tim developer

10. Platform & Tools

| Komponen    | Teknologi                          |
| ----------- | ---------------------------------- |
| Backend     | Laravel 12                         |
| Admin Panel | Filament v3                        |
| Database    | MySQL / MariaDB                    |
| API Docs    | Swagger (OpenAPI)                  |
| Dev Tools   | Docker, VSCode, Postman (optional) |


11. Timeline Awal (Estimasi)

| Tahapan                | Estimasi Waktu |
| ---------------------- | -------------- |
| Setup Proyek + Auth    | 1 hari         |
| CRUD + Seeder Motor    | 1 hari         |
| Integrasi Filament     | 1 hari         |
| Integrasi Swagger      | 0.5 hari       |
| Uji Coba + Dokumentasi | 0.5 hari       |

12. Penutup

Dokumen BRD ini menjadi acuan awal pengembangan sistem katalog dan komunitas motor custom. Dengan sistem ini, data motor bisa disimpan dan diakses secara efisien, serta siap dikembangkan untuk fitur komunitas dan studio booking di masa depan

