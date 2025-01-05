-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2025 pada 15.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasbengkod`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inputmhs`
--

CREATE TABLE `inputmhs` (
  `id` int(11) NOT NULL,
  `namaMhs` varchar(255) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `ipk` float NOT NULL,
  `sks` int(11) DEFAULT 0,
  `matakuliah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inputmhs`
--

INSERT INTO `inputmhs` (`id`, `namaMhs`, `nim`, `ipk`, `sks`, `matakuliah`) VALUES
(6, 'arikuncoro', 'A11.2020.13089', 2, 20, ''),
(7, 'petra yosi', 'A11.2020.13085', 3, 24, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jwl_matakuliah`
--

CREATE TABLE `jwl_matakuliah` (
  `id` int(11) NOT NULL,
  `matakuliah` varchar(250) NOT NULL,
  `sks` int(11) NOT NULL,
  `kelp` varchar(50) DEFAULT NULL,
  `ruangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jwl_matakuliah`
--

INSERT INTO `jwl_matakuliah` (`id`, `matakuliah`, `sks`, `kelp`, `ruangan`) VALUES
(1, 'Algoritma', 3, 'A11.1345', 'H.3.1'),
(2, 'Basis Data', 4, 'A11.2345', 'H.3.2'),
(3, 'Jaringan Komputer', 3, 'A11.3345', 'H.3.3'),
(4, 'Pemrograman Web', 4, 'A11.4345', 'H.3.4'),
(5, 'Sistem Operasi', 3, 'A11.5234', 'H.3.5'),
(6, 'Pemrograman Mobile', 4, 'A11.6324', 'H.3.6'),
(7, 'Kecerdasan Buatan', 3, 'A11.7456', 'H.3.7'),
(8, 'Rekayasa Perangkat Lunak', 4, 'A11.8567', 'H.3.8'),
(9, 'Komputasi Awan', 3, 'A11.9678', 'H.3.9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jwl_mhs`
--

CREATE TABLE `jwl_mhs` (
  `id` int(11) NOT NULL,
  `mhs_id` int(11) NOT NULL,
  `matakuliah` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `kelp` varchar(50) DEFAULT NULL,
  `ruangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jwl_mhs`
--

INSERT INTO `jwl_mhs` (`id`, `mhs_id`, `matakuliah`, `sks`, `kelp`, `ruangan`) VALUES
(21, 6, 'Algoritma', 3, 'A11.1345', 'H.3.1'),
(22, 6, 'Jaringan Komputer', 3, 'A11.3345', 'H.3.3'),
(23, 7, 'Sistem Operasi', 3, 'A11.5234', 'H.3.5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inputmhs`
--
ALTER TABLE `inputmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jwl_matakuliah`
--
ALTER TABLE `jwl_matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jwl_mhs`
--
ALTER TABLE `jwl_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mhs_id` (`mhs_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inputmhs`
--
ALTER TABLE `inputmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `jwl_matakuliah`
--
ALTER TABLE `jwl_matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jwl_mhs`
--
ALTER TABLE `jwl_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jwl_mhs`
--
ALTER TABLE `jwl_mhs`
  ADD CONSTRAINT `jwl_mhs_ibfk_1` FOREIGN KEY (`mhs_id`) REFERENCES `inputmhs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
