# uasbengkelkoding
=======
🌟 Sistem Input Kartu Rencana Studi (KRS)
Sistem ini adalah aplikasi berbasis web yang digunakan untuk mengelola data mahasiswa, Kartu Rencana Studi (KRS), dan mata kuliah yang diambil. Proyek ini dirancang sebagai bagian dari tugas Bengkel Koding.

🚀 Fitur Utama
Input Mahasiswa:
Tambahkan mahasiswa baru dengan NIM yang unik.
SKS Maksimal ditentukan berdasarkan IPK:
IPK < 3: SKS Maksimal = 20.
IPK ≥ 3: SKS Maksimal = 24.
Edit KRS: Tambahkan atau hapus mata kuliah pada KRS mahasiswa.
Cetak KRS: Unduh KRS mahasiswa dalam format PDF.
Validasi Data:
NIM harus unik.
SKS Maksimal otomatis dihitung berdasarkan IPK.
📂 Struktur Proyek
File/Folder	Fungsi
index.php	Halaman utama untuk input mahasiswa.
edit.php	Halaman untuk mengedit data mahasiswa dan KRS.
cetak.php	Halaman untuk mencetak KRS mahasiswa ke PDF.
proses.php	Backend untuk memproses data.
koneksi.php	Konfigurasi koneksi database.
css/	File CSS (Bootstrap) untuk tampilan.
js/	File JavaScript untuk fungsi tambahan.
🔧 Instalasi dan Pengaturan
1. Prasyarat
Web Server: XAMPP, WAMP, atau server lain yang mendukung PHP & MySQL.
Git: Untuk mengunduh kode dari GitHub.
Browser: Chrome, Firefox, atau browser modern lainnya.
2. Langkah-Langkah Instalasi
a. Clone Repository
bash
Salin kode
git clone https://github.com/petrayosi/uassbengke_lkodingg.git
cd uassbengke_lkodingg
b. Salin Folder ke Server Lokal
Salin folder proyek ke direktori server lokal Anda, misalnya:
C:/xampp/htdocs/uassbengke_lkodingg.

c. Impor Database
Buka phpMyAdmin.
Buat database baru, misalnya uasbengkelkoding.
Impor file database.sql yang ada di repository ini ke database tersebut.
d. Konfigurasi File Koneksi
Buka koneksi.php dan pastikan informasi database sesuai:

php
Salin kode
$conn = mysqli_connect('localhost', 'root', '', 'uasbengkelkoding');
e. Jalankan Proyek
Buka browser dan akses:

url
Salin kode
http://localhost/uassbengke_lkodingg
🎨 Tampilan
Halaman Input Mahasiswa

Halaman Edit KRS

Halaman Cetak KRS

🛠️ Kontribusi
Kontribusi terbuka untuk siapa saja! Silakan buat Pull Request jika ingin menambahkan fitur baru.
>>>>>>> 6408809 (Update README file)

README yang Anda buat cukup informatif, tetapi agar lebih menarik, Anda dapat memperbaikinya dengan menambahkan elemen visual seperti gambar tangkapan layar dari antarmuka web Anda, menambahkan daftar poin, dan menyoroti bagian penting menggunakan format Markdown yang lebih efektif.

Berikut adalah contoh README yang lebih menarik:

🌟 Sistem Input Kartu Rencana Studi (KRS)
Sistem ini adalah aplikasi berbasis web yang digunakan untuk mengelola data mahasiswa, Kartu Rencana Studi (KRS), dan mata kuliah yang diambil. Proyek ini dirancang sebagai bagian dari tugas Bengkel Koding.

🚀 Fitur Utama
Input Mahasiswa:
Tambahkan mahasiswa baru dengan NIM yang unik.
SKS Maksimal ditentukan berdasarkan IPK:
IPK < 3: SKS Maksimal = 20.
IPK ≥ 3: SKS Maksimal = 24.
Edit KRS: Tambahkan atau hapus mata kuliah pada KRS mahasiswa.
Cetak KRS: Unduh KRS mahasiswa dalam format PDF.
Validasi Data:
NIM harus unik.
SKS Maksimal otomatis dihitung berdasarkan IPK.
📂 Struktur Proyek
File/Folder	Fungsi
index.php	Halaman utama untuk input mahasiswa.
edit.php	Halaman untuk mengedit data mahasiswa dan KRS.
cetak.php	Halaman untuk mencetak KRS mahasiswa ke PDF.
proses.php	Backend untuk memproses data.
koneksi.php	Konfigurasi koneksi database.
css/	File CSS (Bootstrap) untuk tampilan.
js/	File JavaScript untuk fungsi tambahan.
🔧 Instalasi dan Pengaturan
1. Prasyarat
Web Server: XAMPP, WAMP, atau server lain yang mendukung PHP & MySQL.
Git: Untuk mengunduh kode dari GitHub.
Browser: Chrome, Firefox, atau browser modern lainnya.
2. Langkah-Langkah Instalasi
a. Clone Repository
bash
Salin kode
git clone https://github.com/petrayosi/uassbengke_lkodingg.git
cd uassbengke_lkodingg
b. Salin Folder ke Server Lokal
Salin folder proyek ke direktori server lokal Anda, misalnya:
C:/xampp/htdocs/uassbengke_lkodingg.

c. Impor Database
Buka phpMyAdmin.
Buat database baru, misalnya uasbengkelkoding.
Impor file database.sql yang ada di repository ini ke database tersebut.
d. Konfigurasi File Koneksi
Buka koneksi.php dan pastikan informasi database sesuai:

php
Salin kode
$conn = mysqli_connect('localhost', 'root', '', 'uasbengkelkoding');
e. Jalankan Proyek
Buka browser dan akses:

url
Salin kode
http://localhost/uassbengke_lkodingg
🎨 Tampilan
Halaman Input Mahasiswa

Halaman Edit KRS

Halaman Cetak KRS

🛠️ Kontribusi
Kontribusi terbuka untuk siapa saja! Silakan buat Pull Request jika ingin menambahkan fitur baru.
