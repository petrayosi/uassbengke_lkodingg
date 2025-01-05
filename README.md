# 🌟 Sistem Input Kartu Rencana Studi (KRS)

Sistem ini adalah aplikasi berbasis web yang digunakan untuk mengelola data mahasiswa, Kartu Rencana Studi (KRS), dan mata kuliah yang diambil. Proyek ini dirancang sebagai bagian dari tugas **Bengkel Koding**.

---

## 🚀 Fitur Utama

- **Input Mahasiswa:**
  - Tambahkan mahasiswa baru dengan NIM yang unik.
  - SKS Maksimal ditentukan berdasarkan IPK:
    - **IPK < 3:** SKS Maksimal = 20.
    - **IPK ≥ 3:** SKS Maksimal = 24.
- **Edit KRS:**
  - Tambahkan atau hapus mata kuliah pada KRS mahasiswa.
- **Cetak KRS:**
  - Unduh KRS mahasiswa dalam format PDF.
- **Validasi Data:**
  - NIM harus unik.
  - SKS Maksimal otomatis dihitung berdasarkan IPK.

---

## 📂 Struktur Proyek

| File/Folder       | Fungsi                                               |
|-------------------|------------------------------------------------------|
| `index.php`       | Halaman utama untuk input mahasiswa.                 |
| `edit.php`        | Halaman untuk mengedit data mahasiswa dan KRS.       |
| `cetak.php`       | Halaman untuk mencetak KRS mahasiswa ke PDF.         |
| `proses.php`      | Backend untuk memproses data.                        |
| `koneksi.php`     | Konfigurasi koneksi database.                        |
| `css/`            | File CSS (Bootstrap) untuk tampilan.                 |
| `js/`             | File JavaScript untuk fungsi tambahan.               |

---

## 🔧 Instalasi dan Pengaturan

### 1. **Prasyarat**

- Web Server: XAMPP, WAMP, atau server lain yang mendukung PHP & MySQL.
- Git: Untuk mengunduh kode dari GitHub.
- Browser: Chrome, Firefox, atau browser modern lainnya.

### 2. **Langkah-Langkah Instalasi**

**a. Clone Repository**

```bash
git clone https://github.com/petrayosi/uassbengke_lkodingg.git
cd uassbengke_lkodingg
