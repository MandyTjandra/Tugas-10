# 🚀 Aplikasi Inventaris Barang Multi-User (PHP Native)

Ini adalah proyek aplikasi manajemen inventaris sederhana yang menerapkan sistem **Multi-User Level** (Hak Akses Bertingkat), dibangun menggunakan **PHP natif** dan database **MySQL**.

Aplikasi ini mendemonstrasikan bagaimana membatasi akses fitur berdasarkan peran pengguna (Admin, Pegawai, dan Pengurus) menggunakan Session PHP.

Untuk mengakses web (jika sudah di-hosting), silahkan menggunakan link berikut: [Link Website](www.google.com)

-----

## 📸 Tangkapan Layar (Screenshots)

### 1\. Halaman Login

*Halaman utama (`index.php`) untuk autentikasi pengguna.*

### 2\. Dashboard Admin (Manajemen User)

*Halaman khusus Admin untuk melihat dan menambah user baru.*

### 3\. Dashboard Pegawai (CRUD Barang)

*Halaman Pegawai untuk melakukan input, edit, dan hapus data barang.*

### 4\. Dashboard Pengurus (Laporan Stok)

*Halaman Pengurus yang bersifat Read-Only untuk melihat laporan dan total aset.*

-----

## 💻 Tentang Proyek Ini

Aplikasi ini dirancang sebagai studi kasus untuk memahami logika **Authentication** (Login) dan **Authorization** (Hak Akses). Setiap level user memiliki tampilan dan kemampuan yang berbeda meskipun mengakses database yang sama.

### Skema User Level:

1.  **Admin:** Bertugas mengelola akun pengguna sistem.
2.  **Pegawai:** Bertugas mengelola operasional data barang (Input/Edit/Hapus).
3.  **Pengurus:** Bertugas memantau laporan stok dan valuasi aset.

## 🚀 Fitur Utama

  * **Sistem Login Multi-Level:**

      * Validasi Username & Password.
      * Redireksi otomatis ke halaman dashboard sesuai level (Admin/Pegawai/Pengurus).
      * Proteksi halaman (mencegah akses via URL tanpa login).
      * Notifikasi jika login gagal.

  * **Manajemen User (Admin):**

      * **Read:** Melihat daftar semua pengguna yang terdaftar.
      * **Create:** Menambahkan user baru dengan level tertentu.

  * **Manajemen Barang (Pegawai):**

      * **CRUD Lengkap:** Create (Tambah), Read (Lihat), Update (Edit), Delete (Hapus) data barang.
      * Validasi form input.
      * Konfirmasi JavaScript sebelum menghapus data.

  * **Laporan & Monitoring (Pengurus):**

      * **Read Only:** Melihat data barang tanpa opsi edit/hapus (aman dari kesalahan klik).
      * **Kalkulasi Aset:** Menghitung total nilai aset (Stok x Harga) secara otomatis.

## 🛠️ Teknologi yang Digunakan

  * **Backend:** PHP (Natif) - Session Management
  * **Database:** MySQL (`mysqli` extension)
  * **Frontend:** HTML & CSS (Custom CSS `style.css`)

## 🗂️ Struktur dan Alur File

Aplikasi ini dibagi menjadi beberapa modul utama:

### Modul Login & Koneksi

  * **`koneksi.php`**: Konfigurasi koneksi ke database `multi_user`.
  * **`index.php`**: Halaman login utama.
  * **`cek_login.php`**: Logika validasi user dan pembuatan session level.
  * **`logout.php`**: Skrip untuk menghapus session dan keluar dari sistem.

### Modul Admin

  * **`halaman_admin.php`**: Dashboard Admin (List User).
  * **`tambah_user_aksi.php`**: Proses simpan user baru ke database.

### Modul Pegawai (Inventaris)

  * **`halaman_pegawai.php`**: Dashboard Pegawai (List Barang & Tombol Aksi).
  * **`tambah_barang_aksi.php`**: Proses simpan barang baru.
  * **`edit_barang.php`**: Form untuk mengubah data barang.
  * **`update_barang.php`**: Proses update data ke database.
  * **`hapus_barang.php`**: Proses menghapus barang.

### Modul Pengurus

  * **`halaman_pengurus.php`**: Dashboard Pengurus (Laporan Stok & Valuasi).

## 👤 Author

Dibuat oleh **Mandy Alphafyn Imanuel Tjandra (5025241173)**
