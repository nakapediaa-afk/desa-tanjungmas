# 🌾 Website Resmi Desa Tanjung Mas
> **Kecamatan Kampar Kiri, Kabupaten Kampar, Provinsi Riau**

Portal Sistem Informasi dan Layanan Digital Desa Tanjung Mas yang modern, transparan, dan interaktif. Dibangun menggunakan framework **Laravel 11** dan arsitektur **Pure Modern CSS** (OKLCH, CSS Layers @layer, Glassmorphism, Micro-animations) tanpa ketergantungan library CSS berat untuk performa kilat dan tampilan premium.

---

## 📸 Fitur Utama

- 🏛️ **Profil Desa Autentik (2025)**: Informasi sejarah, visi & misi, struktur organisasi Pemdes (Kades Buharis, Sekdes Muhammad Anggi Rambe, S.A.P, dan jajaran perangkat desa & kepala dusun).
- 📊 **Statistik Kependudukan Dinamis**: Visualisasi interaktif demografi (1.155 Jiwa, 259 KK, 4 Dusun: Tanjung Mas, Pasir Putih, Sungai Setingkai, Sungai Napal), wilayah 150 km², serta potensi perkebunan 500 Ha Sawit & 225 Ha Karet.
- 💰 **Transparansi APBDes**: Infografis realisasi Anggaran Pendapatan & Belanja Desa terbuka untuk publik.
- 🛍️ **Katalog UMKM & Komoditas**: Promosi produk unggulan desa (Bibit Sawit Unggul, Bokar Karet Alam, Ikan Salai Sungai Kampar Khas Riau) terhubung langsung ke WhatsApp penjual.
- 📋 **Layanan Surat & Pengaduan Warga**: Formulir permohonan surat administrasi dan pengaduan layanan publik terformat otomatis ke WhatsApp admin desa.
- 📰 **Warta & Publikasi Kegiatan Desa**: Berita dan dokumentasi agenda pembangunan serta kegiatan kemasyarakatan.
- 🔐 **Panel Admin Interaktif**: Kelola publikasi berita, katalog UMKM, dan perbarui angka statistik kependudukan secara realtime tanpa edit koding.

---

## 🛠️ Tech Stack & Desain

- **Backend**: PHP 8.2+ & Laravel 11
- **Frontend**: Blade Templating + Modern Vanilla CSS (OKLCH color system, @layer, CSS Grid & Subgrid, backdrop-filter glassmorphism)
- **Typography**: Plus Jakarta Sans & Lora Serif (Google Fonts)
- **Database**: SQLite (Development & Zero-Config Deploy) / MySQL & PostgreSQL ready
- **Icons**: Lucide Icons & SVG

---

## 🚀 Panduan Instalasi Lokal

### 1. Prasyarat
- PHP >= 8.2 (dengan ekstensi pdo_sqlite / pdo_mysql, mbstring, openssl)
- Composer
- Git

### 2. Clone Repositori
`ash
git clone https://github.com/<username>/<repo-name>.git
cd <repo-name>
`

### 3. Install Dependensi PHP
`ash
composer install
`

### 4. Konfigurasi Environment
Salin file .env.example menjadi .env:
`ash
cp .env.example .env
`
Generate Application Key:
`ash
php artisan key:generate
`

### 5. Jalankan Database & Seeder
Buat database dan isi data default autentik Desa Tanjung Mas:
`ash
php artisan migrate --seed
`

### 6. Jalankan Server Lokal
`ash
php artisan serve
`
Buka browser di http://localhost:8000 atau via XAMPP http://localhost/website-desa/public.

---

## 🔑 Akses Panel Admin

- **URL**: http://localhost:8000/admin/login
- **PIN / Password Akses**: dmin123

---

## 🌐 Panduan Deploy ke Hosting Gratis

Aplikasi ini dapat di-deploy dengan mudah dan gratis pada berbagai platform:
1. **Alwaysdata** (Rekomendasi Utama: Native PHP 8.2+, MySQL gratis, SSH access, support Document Root public/).
2. **Render.com / Koyeb** (Cloud Hosting modern berbasis Docker / Web Service dengan auto-deploy dari GitHub).
3. **InfinityFree / cPanel Free** (Web hosting gratis berbasis cPanel tradisional).

---

## 📄 Lisensi
Dikembangkan untuk Pemerintah Desa Tanjung Mas, Kampar Kiri, Riau. Open-source di bawah lisensi [MIT License](LICENSE).
