-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 07:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akubisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `konfirmasi_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `email`, `no_telp`, `password`, `konfirmasi_password`) VALUES
(1, 'Indi Sabila', 'indi@gmail.com', '', '$2y$10$HqHjp1Vx5TdA5F0HxXz2jO6a7anX9oCg8wtYklSeTBzeOxvXAtAMy', ''),
(2, 'Elsa', 'elsa@gmail.com', '09876', '202cb962ac59075b964b07152d234b70', 'elsa'),
(3, '', '', '', '$2y$10$1Vr5KCq0WORSt9eQyyWrqeqLkpK7FJ7U7lkjM58/DQ6uU698Mp5/i', ''),
(4, 'akbar', 'akbar@gmail.com', '099999', '$2y$10$KFNaFoux7C7qA4gE0gCDc.yJcsjJnt.bOipdLf3lRd38M9FDIDRQC', 'akbar');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_anak`
--

CREATE TABLE `daftar_anak` (
  `id_anak` int(11) NOT NULL,
  `nama_orangtua` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `umur` int(2) NOT NULL,
  `tb_anak` int(15) NOT NULL,
  `bb_anak` int(15) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `penyakit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_anak`
--

INSERT INTO `daftar_anak` (`id_anak`, `nama_orangtua`, `no_telp`, `alamat`, `nama_anak`, `jenis_kelamin`, `umur`, `tb_anak`, `bb_anak`, `gol_darah`, `penyakit`) VALUES
(1, 'akbar', '087654321', 'Jalan Sukasari, Bandung', 'Septi', 'Perempuan', 2, 100, 25, 'B', 'Autis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `daftar_anak`
--
ALTER TABLE `daftar_anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftar_anak`
--
ALTER TABLE `daftar_anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
