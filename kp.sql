-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 10:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barangmasuk_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_brg_keluar` int(11) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `divisi_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangkeluar`
--

INSERT INTO `barangkeluar` (`id`, `barangmasuk_id`, `jumlah_brg_keluar`, `tgl_keluar`, `divisi_id`, `created_at`, `updated_at`) VALUES
(4, '1', 4, '2019-12-18', '2', '2020-01-01 00:18:20', '2020-01-01 00:18:20'),
(5, '1', 2, '2019-11-21', '4', '2020-01-01 00:18:50', '2020-01-01 00:18:50'),
(6, '11', 5, '2019-11-11', '2', '2020-01-01 01:13:35', '2020-01-01 01:13:35'),
(7, '1', 50, '2019-11-20', '1', '2020-01-01 01:13:50', '2020-01-01 01:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategoribarang_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_brg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangmasuk`
--

INSERT INTO `barangmasuk` (`id`, `kategoribarang_id`, `nama_brg`, `jumlah_brg`, `tgl_masuk`, `created_at`, `updated_at`) VALUES
(1, '1', 'Kertas A4 SIDU', 80, '2019-11-09', '2019-12-19 03:48:58', '2019-12-25 02:59:24'),
(2, '1', 'Kertas F4 SIDU', 20, '2019-11-09', '2019-12-19 03:49:20', '2019-12-19 03:49:20'),
(3, '1', 'Kertas F5 SIDU', 20, '2019-11-09', '2019-12-19 03:49:38', '2019-12-19 03:49:38'),
(4, '1', 'Kertas A3 SIDU', 10, '2019-11-09', '2019-12-19 03:50:04', '2019-12-19 03:50:04'),
(5, '1', 'Kertas A4 MIRAGE', 40, '2019-11-09', '2019-12-19 03:50:38', '2019-12-19 03:50:38'),
(6, '1', 'Kertas F4 MIRAGE', 20, '2019-11-09', '2019-12-19 03:51:09', '2019-12-19 03:51:09'),
(7, '1', 'Kertas F4 MIRAGE (Merah)', 8, '2019-11-09', '2019-12-19 03:51:26', '2019-12-19 03:51:26'),
(8, '1', 'Kertas A3 MIRAGE', 8, '2019-11-09', '2019-12-19 03:52:52', '2019-12-19 03:52:52'),
(9, '1', 'GoBI ukuran 8401 besar', 12, '2019-11-09', '2019-12-19 03:53:08', '2019-12-19 03:53:08'),
(10, '1', 'GoBI ukuran 8401 kecil', 12, '2019-11-09', '2019-12-19 03:53:29', '2019-12-19 03:53:29'),
(11, '1', 'GoBI ukuran 8402 besar', 12, '2019-11-09', '2019-12-19 03:53:41', '2019-12-19 03:53:41'),
(12, '1', 'GoBI ukuran 8402 kecil', 12, '2019-11-09', '2019-12-19 03:54:04', '2019-12-19 03:54:04'),
(13, '2', 'Tinta printer type 644 black dan warna', 30, '2019-11-01', '2019-12-19 03:54:44', '2019-12-19 03:54:44'),
(14, '2', 'Tinta printer type 003 black dan warna', 30, '2019-11-01', '2019-12-19 03:54:58', '2019-12-19 03:54:58'),
(15, '2', 'Catridge black dan warna printer Epson 138', 30, '2019-11-01', '2019-12-19 03:55:10', '2019-12-19 03:55:10'),
(16, '2', 'Catridge black dan warna printer Epson 2991', 30, '2019-11-01', '2019-12-19 03:56:17', '2019-12-19 03:56:17'),
(17, '1', 'Pulpen Paster Biru', 5, '2019-11-09', '2019-12-19 03:56:38', '2019-12-19 03:56:38'),
(18, '1', 'Pulpen Paster Merah', 5, '2019-11-09', '2019-12-19 03:57:43', '2019-12-19 03:57:43'),
(19, '1', 'Pulpen Paster Hitam', 5, '2019-11-09', '2019-12-19 03:57:55', '2019-12-19 03:57:55'),
(20, '1', 'Pulpen Paster Hijau', 5, '2019-11-09', '2019-12-19 03:58:08', '2019-12-19 03:58:08'),
(21, '1', 'Pulpen Pilot Biru', 5, '2019-11-09', '2019-12-19 03:58:42', '2019-12-19 03:58:42'),
(22, '1', 'Pulpen Pilot Merah', 5, '2019-11-09', '2019-12-19 03:58:53', '2019-12-19 03:58:53'),
(23, '1', 'Pulpen pilot Hitam', 5, '2019-11-09', '2019-12-19 03:59:02', '2019-12-19 03:59:02'),
(24, '1', 'Pulpen Pilot Hijau', 5, '2019-11-09', '2019-12-19 03:59:16', '2019-12-19 03:59:16'),
(25, '1', 'Tipe x Cair botol', 4, '2019-11-09', '2019-12-19 03:59:26', '2019-12-19 03:59:26'),
(26, '1', 'Spidol Permanent hitam', 5, '2019-11-09', '2019-12-19 03:59:34', '2019-12-19 03:59:34'),
(27, '1', 'Spidol Permanent Warna (Merah, Biru, dan Hijau)', 5, '2019-11-09', '2019-12-31 23:38:39', '2019-12-31 23:38:39'),
(28, '1', 'Spidol Non Permanent hitam', 5, '2019-11-09', '2019-12-31 23:39:34', '2019-12-31 23:39:34'),
(29, '1', 'Spidol Non Permanent Warna (Merah, Biru, dan Hijau)', 5, '2019-11-09', '2019-12-31 23:39:59', '2019-12-31 23:39:59'),
(30, '1', 'Pulpen Tanda Tangan Cair Hitam', 2, '2019-11-09', '2019-12-31 23:40:50', '2019-12-31 23:40:50'),
(31, '1', 'Lem Kertas', 24, '2019-11-09', '2019-12-31 23:41:40', '2019-12-31 23:41:40'),
(32, '1', 'Hecter Besar', 5, '2019-11-09', '2019-12-31 23:42:17', '2019-12-31 23:42:17'),
(33, '1', 'Hecter Kecil', 5, '2019-11-09', '2019-12-31 23:42:32', '2019-12-31 23:42:32'),
(34, '1', 'Isi Hecter Besar', 4, '2019-11-09', '2019-12-31 23:43:15', '2019-12-31 23:43:37'),
(35, '1', 'Isi Hecter Kecil', 4, '2019-11-09', '2019-12-31 23:48:52', '2019-12-31 23:48:52'),
(36, '1', 'Klip Kertas Besar', 5, '2019-11-09', '2019-12-31 23:49:10', '2019-12-31 23:49:10'),
(37, '1', 'Klip Kertas Kecil', 5, '2019-11-09', '2019-12-31 23:50:32', '2019-12-31 23:50:32'),
(38, '1', 'Isi Tinta Stampel Biru', 5, '2019-11-09', '2019-12-31 23:53:13', '2019-12-31 23:53:13'),
(39, '1', 'Map Biola', 2, '2019-11-09', '2019-12-31 23:53:50', '2019-12-31 23:53:50'),
(40, '1', 'Map Batik', 2, '2019-11-09', '2019-12-31 23:57:29', '2019-12-31 23:57:29'),
(41, '1', 'Buku Kwitansi', 1, '2019-11-09', '2019-12-31 23:57:50', '2019-12-31 23:57:50'),
(42, '1', 'Stabilo Warna', 2, '2019-11-09', '2019-12-31 23:58:15', '2019-12-31 23:58:15'),
(43, '1', 'Cutter', 4, '2019-11-09', '2019-12-31 23:58:35', '2019-12-31 23:58:35'),
(44, '1', 'Isi Cutter', 10, '2019-11-09', '2019-12-31 23:58:54', '2019-12-31 23:58:54'),
(45, '2', 'Baterai ABC A4', 10, '2019-11-01', '2019-12-31 23:59:24', '2019-12-31 23:59:24'),
(46, '2', 'Baterai ABC A3', 10, '2019-11-01', '2019-12-31 23:59:41', '2019-12-31 23:59:41'),
(47, '2', 'Baterai ABC A2', 10, '2019-11-01', '2020-01-01 00:00:08', '2020-01-01 00:01:09'),
(48, '1', 'Sampul Padi', 5, '2019-11-04', '2020-01-01 00:01:35', '2020-01-01 00:01:35'),
(49, '1', 'Gunting', 10, '2019-11-04', '2020-01-01 00:02:05', '2020-01-01 00:02:05'),
(50, '1', 'Lem Double Tip', 12, '2019-11-04', '2020-01-01 00:02:38', '2020-01-01 00:02:38'),
(51, '1', 'Lakban Hitam', 10, '2019-11-04', '2020-01-01 00:02:51', '2020-01-01 00:02:51'),
(52, '1', 'Isolasi Bening', 10, '2019-11-04', '2020-01-01 00:03:15', '2020-01-01 00:03:15'),
(53, '3', 'Sapu Ijuk', 3, '2019-11-11', '2020-01-01 00:03:35', '2020-01-01 00:03:35'),
(54, '3', 'Sapu Lidi', 5, '2019-11-11', '2020-01-01 00:03:59', '2020-01-01 00:04:59'),
(55, '3', 'Serok Sampah', 5, '2019-11-11', '2020-01-01 00:04:51', '2020-01-01 00:04:51'),
(56, '3', 'Kantong Sampah', 2, '2019-11-11', '2020-01-01 00:05:39', '2020-01-01 00:05:39'),
(57, '3', 'Pel Lantai', 2, '2019-11-11', '2020-01-01 00:06:22', '2020-01-01 00:06:22'),
(58, '3', 'Tempat Pel Lantai', 2, '2019-11-11', '2020-01-01 00:06:50', '2020-01-01 00:07:01'),
(59, '3', 'Pewangi Ruangan', 3, '2019-11-11', '2020-01-01 00:08:43', '2020-01-01 00:09:12'),
(60, '3', 'Sabun Cuci Tangan', 4, '2019-11-11', '2020-01-01 00:09:04', '2020-01-01 00:09:19'),
(61, '3', 'Super Pel', 5, '2019-11-11', '2020-01-01 00:09:49', '2020-01-01 00:09:49'),
(62, '3', 'Sabun Jendela', 45, '2019-11-11', '2020-01-01 00:10:03', '2020-01-01 00:10:03'),
(63, '4', 'Teh Bubuk', 3, '2019-11-11', '2020-01-01 00:10:30', '2020-01-01 00:10:30'),
(64, '4', 'Kopi', 5, '2019-11-11', '2020-01-01 00:10:45', '2020-01-01 00:10:45'),
(65, '4', 'Gula', 5, '2019-11-11', '2020-01-01 00:11:02', '2020-01-01 00:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama_divisi`, `ket_divisi`, `created_at`, `updated_at`) VALUES
(1, 'Umum', 'Tata Usaha dan Sekretariatan', '2019-12-25 03:11:01', '2019-12-25 03:11:24'),
(2, 'Teknik', 'Operasional Lapangan dan Fasilitas', '2019-12-25 03:11:46', '2019-12-25 03:11:46'),
(3, 'Bisnis', 'Mengelola Bisnis dan Manajemen Perusahaan', '2019-12-25 03:12:10', '2019-12-25 03:12:10'),
(4, 'Keuangan', 'Mengatur dan Mengelola Keuangan', '2019-12-25 03:12:27', '2019-12-25 03:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribarang`
--

CREATE TABLE `kategoribarang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategoribarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keteranganbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoribarang`
--

INSERT INTO `kategoribarang` (`id`, `kategoribarang`, `keteranganbarang`, `created_at`, `updated_at`) VALUES
(1, '01', 'ATK', NULL, NULL),
(2, '02', 'Alat Elektronik', '2019-12-19 03:43:14', '2019-12-19 03:43:14'),
(3, '03', 'Alat Kebersihan', '2019-12-19 03:43:31', '2019-12-19 03:43:31'),
(4, '04', 'Sembako', '2019-12-19 03:43:41', '2019-12-19 03:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(44, '2014_10_12_000000_create_users_table', 1),
(45, '2014_10_12_100000_create_password_resets_table', 1),
(46, '2019_12_13_074519_create_barang_table', 1),
(48, '2019_12_13_074602_create_divisi_table', 1),
(49, '2019_12_13_074613_create_gudang_table', 1),
(50, '2019_12_19_093006_create_kategoribarang_table', 2),
(51, '2019_12_13_074550_create_kategori_barang_table', 3),
(52, '2019_12_25_093008_create_barangkeluar_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alga Mahargarika', 'algamhr', 'algamahargarika9@gmail.com', NULL, '$2y$10$LDcNsgcaX.cFzPFR8jdPXec/YRqbjaeQBtqxg8a4TQAmslg78iM16', NULL, '2019-12-19 01:15:38', '2019-12-19 01:15:38'),
(3, 'RR Kiswanti', 'rrkiswanti', 'kiswanti@pelindo1.co.id', NULL, '$2y$10$qBoC5GGYJPfeuwwSVsQwQeqCW20hpKnlx5mjmocFzaqViZFmXQ74G', NULL, '2019-12-19 01:16:52', '2019-12-19 01:16:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoribarang`
--
ALTER TABLE `kategoribarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategoribarang`
--
ALTER TABLE `kategoribarang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
