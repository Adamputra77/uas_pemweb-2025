# 🎸 Analisis Sistem Booking Studio Musik

## 1. Latar Belakang Masalah
Banyak studio musik masih mengelola jadwal penyewaan secara manual melalui buku catatan atau aplikasi chat. Masalah yang sering muncul meliputi:
- Jadwal yang bertabrakan (overlap)
- Kesalahan pencatatan waktu dan pembayaran
- Tidak ada histori dan dokumentasi digital

Diperlukan sistem digital untuk membantu pencatatan booking, manajemen pelanggan, dan penjadwalan yang rapi.

---

## 2. Tujuan Sistem
Membangun sistem berbasis web dengan Laravel 12 + Filament v3 yang memungkinkan:
- Pelanggan dapat melihat jadwal dan melakukan booking secara online
- Admin dapat mengelola jadwal, data pelanggan, dan studio
- Sistem menyediakan API dan dokumentasinya melalui Swagger agar mudah dikembangkan lebih lanjut

---

## 3. Manfaat Sistem
- **Untuk Admin**: Mempermudah pengelolaan jadwal dan data pelanggan
- **Untuk Pelanggan**: Booking lebih mudah, kapan saja dan transparan
- **Untuk Developer**: Sistem fleksibel untuk ditambahkan fitur baru seperti pembayaran atau notifikasi, dan dokumentasi API Swagger mempermudah integrasi

---

## 4. Ruang Lingkup Sistem
- Aplikasi hanya digunakan untuk manajemen penyewaan studio musik
- Sistem memiliki dua role: admin dan pelanggan
- Belum mencakup pembayaran otomatis (fitur lanjutan)
- Hanya mencakup 1 studio (bukan multi-cabang)

---

## 5. Kebutuhan Fungsional
- Login dan registrasi user
- Manajemen data studio (CRUD)
- Booking jadwal studio oleh user
- Validasi agar jadwal tidak bertabrakan
- Riwayat booking untuk user
- API endpoint untuk integrasi frontend / mobile
- Dokumentasi API menggunakan **Swagger UI** via `l5-swagger` Laravel

---

## 6. Kebutuhan Non-Fungsional
- Framework: Laravel 12
- Admin Panel: Filament v3
- Frontend: Blade (atau Filament Page)
- Database: MySQL
- Deployment: GitHub Repository
- Dokumentasi API: Swagger UI (dengan package `l5-swagger`)

---

## 7. Swagger API Integration
Untuk memudahkan developer mengonsumsi API, dokumentasi dibangun menggunakan **Swagger UI**, yang dihasilkan otomatis dari komentar di controller Laravel menggunakan anotasi `@OA`.

Swagger endpoint dapat diakses melalui:
Swagger ini membantu dokumentasi otomatis untuk:
- Endpoint studio
- Endpoint booking
- Endpoint login dan register