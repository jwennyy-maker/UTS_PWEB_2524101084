## Daylist – Personal Reminder & Daily Planner


## 1. Deskripsi 
Daylist adalah aplikasi web yang dibuat untuk membantu pengguna mengatur kegiatan dan pengingat sehari -hari. Aplikasi ini dibuat karena terkadang kita memiliki banyak kegiatan, tetapi sering lupa dengan jadwal atau hal - hal yang harus dikerjakan

melalui ini, pengguna dapat mendaftar kegiatan harian besertaa waktu, kategori, dan statusnya. web ini dibuat menggunakan framework laravel dengan menerapkan konsep model, view, controller. data yang digunakan masih berpa array yang dikirim controller ke view, sehingga tidak menggunakan database maupun fitur CRUD

## 2. Tujuan Pembuatan
- Membuat aplikasi sederhana untuk membantu mengatur kegiatan sehari-hari.
- Menampilkan daftar reminder agar kegiatan lebih mudah dipantau.
- Membedakan tampilan dan fitur berdasarkan role User dan Admin.
- Menerapkan materi Laravel yang sudah dipelajari, terutama Route, Controller, dan Blade Template.

## 3. Fitur Aplikasi

### User
- Login dengan memasukkan username.
- Melihat daftar kegiatan pada halaman Dashboard.
- Melihat waktu, kategori, dan status reminder.
- Melihat informasi akun pada halaman Profile.

### Admin
- Melihat ringkasan informasi pada Dashboard.
- Melihat daftar pengguna yang terdaftar pada data simulasi.
- Melihat kategori reminder.
- Melihat seluruh daftar reminder melalui halaman Pengelolaan.

## 4. Teknologi yang Digunakan

Beberapa teknologi yang digunakan dalam pembuatan aplikasi ini:
- **PHP** sebagai bahasa pemrograman.
- **Laravel** sebagai framework.
- **Blade Template** untuk mengatur tampilan halaman.
- **HTML** untuk struktur halaman.
- **CSS** untuk mengatur desain dan tampilan aplikasi.

## 5. Halaman Aplikasi

### Login
![Halaman Login](screenshots/login.png)

### Dashboard
Halaman utama yang menampilkan informasi dan daftar reminder sesuai dengan role pengguna.

### Pengelolaan
Halaman khusus Admin untuk melihat data pengguna, kategori, dan seluruh reminder.

### Profile
Halaman yang menampilkan informasi username dan role pengguna yang sedang masuk.

## 6. Cara Menjalankan Aplikasi

Untuk menjalankan project Daylist di komputer, lakukan langkah berikut:

1. Clone repository dari GitHub.
2. Buka folder project melalui VS Code.
3. Jalankan perintah `composer install` di terminal.
4. Jalankan perintah `php artisan serve`.
5. Buka browser dan akses `http://127.0.0.1:8000`.

## 7. Identitas Pengembang

- Nama: Jenny Afiza
- NIM: [Isi NIM]
- Kelas: D
- Mata Kuliah: Pemrograman Web (PWEB)

---

**Daylist – Your Day, Your Reminder.**