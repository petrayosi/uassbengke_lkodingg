Sistem Input Kartu Rencana Studi (KRS)
Sistem ini adalah aplikasi berbasis web untuk mengelola data mahasiswa, Kartu Rencana Studi (KRS), dan mata kuliah yang diambil. Proyek ini dirancang sebagai bagian dari tugas Bengkel Koding.

Fitur Utama
Input Mahasiswa: Tambahkan mahasiswa baru dengan NIM yang unik. SKS Maksimal ditentukan berdasarkan IPK.
Edit KRS: Tambahkan mata kuliah ke dalam daftar KRS mahasiswa.
Hapus Data: Hapus data mahasiswa atau mata kuliah tertentu.
Lihat dan Cetak KRS: Lihat dan unduh KRS mahasiswa dalam format PDF.
Validasi Data:
NIM harus unik.
SKS Maksimal berdasarkan IPK:
Jika IPK < 3: SKS Maksimal = 20.
Jika IPK ≥ 3: SKS Maksimal = 24.
Instalasi dan Pengaturan
Prasyarat
Web Server: XAMPP/WAMP atau server lain yang mendukung PHP dan MySQL.
Git: Untuk mengunduh kode dari GitHub.
Browser: Chrome, Firefox, atau browser lainnya.
Langkah-Langkah
Clone Repository:

bash
Salin kode
git clone https://github.com/petrayosi/uassbengke_lkodingg.git
cd uassbengke_lkodingg
Salin Folder ke Server Lokal: Salin folder proyek ke direktori server lokal Anda, misalnya: C:/xampp/htdocs/uassbengke_lkodingg.

Impor Database:

Buka phpMyAdmin.
Buat database baru, misalnya uasbengkelkoding.
Impor file database yang disertakan dalam proyek (database.sql) ke database tersebut.
Konfigurasi File Koneksi:

Buka koneksi.php.
Pastikan informasi database sesuai:
php
Salin kode
$conn = mysqli_connect('localhost', 'root', '', 'uasbengkelkoding');
Jalankan Proyek:

Buka browser dan akses: http://localhost/uassbengke_lkodingg.
Struktur Proyek
index.php: Halaman utama untuk input mahasiswa.
edit.php: Halaman untuk mengedit data mahasiswa dan menambahkan mata kuliah.
cetak.php: Halaman untuk mencetak KRS mahasiswa ke format PDF.
proses.php: File backend untuk mengelola data (tambah, edit, hapus).
koneksi.php: File konfigurasi koneksi database.
css/: File CSS untuk styling (menggunakan Bootstrap).
js/: File JavaScript untuk fungsi tambahan.
Database
Struktur Tabel
inputmhs: Menyimpan data mahasiswa.

id: ID unik.
namaMhs: Nama mahasiswa.
nim: NIM (unik).
ipk: IPK.
sks: SKS Maksimal.
matakuliah: Daftar mata kuliah.
jwl_matakuliah: Menyimpan daftar mata kuliah.

id: ID unik.
matakuliah: Nama mata kuliah.
sks: Jumlah SKS.
kelp: Kelompok.
ruangan: Ruangan.
jwl_mhs: Menyimpan daftar mata kuliah yang diambil mahasiswa.

id: ID unik.
mhs_id: ID mahasiswa (relasi ke tabel inputmhs).
matakuliah: Nama mata kuliah.
sks: Jumlah SKS.
kelp: Kelompok.
ruangan: Ruangan.
Kontribusi
Kontribusi terbuka untuk siapa saja. Silakan buat Pull Request di GitHub jika ingin menambahkan fitur baru.

Lisensi
Proyek ini dilisensikan di bawah MIT License.

Catatan Penting: Pastikan file database (database.sql) disertakan dalam repository jika pengguna
