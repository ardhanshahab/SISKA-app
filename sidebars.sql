-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2023 pada 09.37
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siska_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidebars`
--

CREATE TABLE `sidebars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `hashids` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sidebars`
--

INSERT INTO `sidebars` (`id`, `name`, `url`, `icon`, `role`, `hashids`, `created_at`, `updated_at`) VALUES
(2, 'Jadwal Matakuliah', 'JadwalMatakuliahIndex', '', 'kurikulum', 289456204, '2023-02-22 01:57:21', NULL),
(3, 'Tujuan dan Capaian', 'TujuanCapaianIndex', '', 'kurikulum', 534089123, '2023-02-22 01:57:21', NULL),
(4, 'Matakuliah', 'MatakuliahIndex', '', 'kurikulum', 619332782, '2023-02-22 01:57:21', NULL),
(7, 'My Profile', 'myprofile', '', 'mahasiswa', 347892345, NULL, NULL),
(8, 'Status', 'statusIndex', '', 'mahasiswa', 21794669, NULL, NULL),
(9, 'Jadwal Perkuliahan', 'jadwalkuliahIndex', '', 'mahasiswa', 217089231, NULL, NULL),
(10, 'Pengkinian Data Induk Mahasiswa', 'datamahasiswaIndex', '', 'mahasiswa', 23170834, NULL, NULL),
(11, 'Status Keuangan', 'statuskeuanganIndex', '', 'mahasiswa', 21794669, NULL, NULL),
(12, 'Transkrip Nilai', 'transkripnilaiIndex', '', 'mahasiswa', 672349845, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sidebars`
--
ALTER TABLE `sidebars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sidebars`
--
ALTER TABLE `sidebars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
