-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 03:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `xx_admin`
--

CREATE TABLE `xx_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1. admin, 2. owner',
  `nama` varchar(100) NOT NULL COMMENT '\r\n',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_admin`
--

INSERT INTO `xx_admin` (`id_admin`, `username`, `password`, `status`, `nama`, `created_at`) VALUES
(1, 'admin1', '$2y$10$eNRfC6zip0E03dI6rWI10.uTmvYnlM2hApMbcqJpSSkEXgW03bEbW', 1, 'Fran Handika', '2020-06-07 10:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `xx_jenis_kelamin`
--

CREATE TABLE `xx_jenis_kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_jenis_kelamin`
--

INSERT INTO `xx_jenis_kelamin` (`id`, `nama`, `value`) VALUES
(1, 'Laki - Laki', 'L'),
(2, 'Perempuan', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `xx_kelas`
--

CREATE TABLE `xx_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL,
  `judul_kelas` varchar(100) NOT NULL,
  `jadwal_kelas` varchar(50) NOT NULL,
  `waktu_kelas` varchar(50) NOT NULL,
  `deskripsi_kelas` text NOT NULL,
  `harga_kelas` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_kelas`
--

INSERT INTO `xx_kelas` (`id_kelas`, `kode_kelas`, `judul_kelas`, `jadwal_kelas`, `waktu_kelas`, `deskripsi_kelas`, `harga_kelas`, `created_at`, `updated_at`) VALUES
(1, 'bcapg2020', 'Cinta Matika Pagi', 'senin , rabu , jumat', '09:00 - 11:30', 'lorem ipsum', '250.000', '2020-06-06 21:56:47', NULL),
(2, 'bcasg2020', 'Cinta Matika Siang', 'senin , rabu , jumat', '13:00 - 15:30', 'lorem ipsum', '250.000', '2020-06-06 21:57:49', NULL),
(3, 'mtkpg2020', 'Cinta Baca Pagi', 'senin , rabu , jumat', '09:00 - 11:30', 'lorem ipsum', '250.000', '2020-06-06 21:59:28', NULL),
(4, 'mtksg2020', 'Cinta Baca Siang', 'senin , rabu , jumat', '13:00 - 15:30', 'Lorem ipsum dolor sit amet\r\n', '250.000', '2020-06-06 22:01:05', NULL),
(10, 'Tes123', 'Cinta Mati', 'Senin - Jumat', '08:00 - 17:59', 'Lorem ipsum dolor sit amet', '100.000', '2020-06-08 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `xx_pendaftaran`
--

CREATE TABLE `xx_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(50) NOT NULL,
  `status_pembayaran` int(11) NOT NULL DEFAULT 2 COMMENT '1. selesai bayar, 2. pending',
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '1. active, 2. inactive',
  `bukti_pembayaran` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_pendaftaran`
--

INSERT INTO `xx_pendaftaran` (`id_pendaftaran`, `id_user`, `id_kelas`, `nomor_pendaftaran`, `status_pembayaran`, `status`, `bukti_pembayaran`, `created_at`) VALUES
(1, 1, 1, 'bcapg20201', 2, 2, '', '2020-06-08 00:00:00'),
(2, 1, 2, 'bcasg20201', 2, 2, '', '2020-06-08 00:00:00'),
(3, 1, 1, 'bcapg202011591567200', 2, 2, '', '2020-06-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `xx_profile`
--

CREATE TABLE `xx_profile` (
  `id_profile` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `umur` int(11) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_profile`
--

INSERT INTO `xx_profile` (`id_profile`, `id_user`, `nama`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `umur`, `pendidikan`, `jenis_kelamin`, `alamat`, `created_at`) VALUES
(1, 1, 'asdasd', '2121', 'asdasd', 'asdasd', 0, 'asdasd', 'asdasd', 'asdasd', '2020-06-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `xx_users`
--

CREATE TABLE `xx_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1 COMMENT '1. active,2.inactive\r\n',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_users`
--

INSERT INTO `xx_users` (`id_user`, `username`, `email`, `password`, `nama`, `is_active`, `created_at`) VALUES
(1, 'yogaapsy', 'yogaanugrahpsy@gmail.com', '$2y$10$eNRfC6zip0E03dI6rWI10.uTmvYnlM2hApMbcqJpSSkEXgW03bEbW', 'Yoga Anugrah Pratama', 1, '2020-06-06 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xx_admin`
--
ALTER TABLE `xx_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `xx_jenis_kelamin`
--
ALTER TABLE `xx_jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xx_kelas`
--
ALTER TABLE `xx_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`);

--
-- Indexes for table `xx_pendaftaran`
--
ALTER TABLE `xx_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `xx_profile`
--
ALTER TABLE `xx_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `xx_users`
--
ALTER TABLE `xx_users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nik` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xx_admin`
--
ALTER TABLE `xx_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xx_jenis_kelamin`
--
ALTER TABLE `xx_jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xx_kelas`
--
ALTER TABLE `xx_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `xx_pendaftaran`
--
ALTER TABLE `xx_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xx_profile`
--
ALTER TABLE `xx_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xx_users`
--
ALTER TABLE `xx_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
