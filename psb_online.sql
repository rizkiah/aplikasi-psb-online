-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 05:32 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `pekerjaan_ortu` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `NA` int(5) DEFAULT 0,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `user_id`, `nis`, `nama`, `jk`, `ttl`, `alamat`, `email`, `telp`, `nama_ortu`, `pekerjaan_ortu`, `asal_sekolah`, `foto`, `NA`, `status`) VALUES
(19, 30, 152182, 'Bita', 'P', 'Padang, 16 Februari 2001', 'Padang Panjang', 'bita@gmail.com', '082332323233', 'Hatta Rajasa', 'Menteri', 'SMP N 1 Lubuk Basung', 'TRPL.jpg', 96, 'Diterima'),
(20, 29, 123212, 'Kiah', 'P', 'Sijunjung, 24 Januari 2012', 'Padang ', 'nisab@gmail.com', '083121212126', 'Burdan', 'PNS', 'SMP N 3 Solok', 'op.jpg', 85, 'Diterima'),
(21, 34, 67211, 'Wilda Rahmah', 'P', 'Jakarta, 20 juni 2002', 'Banten', 'wilda@gmail.com', '083232323232', 'Cahya', 'Polisi', 'SMP N 1 Jakarta', '4.jpg', 65, 'Tidak Diterima'),
(22, 35, 3321212, 'Rahmat', 'L', 'Bandung, 3 Juni 2003', 'Padang Panjang', 'rahmat@gmail.com', '083121212332', 'Rudi', 'Guru', 'SMP N 1 Bandung', '5.jpg', 89, 'Diterima'),
(24, 36, 7327121, 'Bima Putra', 'L', 'Jakarta, 2 Mei 2003', 'Bandung', 'bimap@gmail.com', '089121221221', 'Hotman', 'Pengacara', 'SMP N 1 Jakarta', '1w.png', 75, 'Cadangan'),
(25, 37, 12543, 'Salsabila', 'P', 'Pariaman, 13 Juni 2001', 'Sawahlunto', 'salsa12@gmail.com', '083873223213', 'Budi', 'PNS', 'SMP N 1 Sawahlunto', 'sss.jpg', 88, 'Menunggu Konfirmasi'),
(26, 38, 416232, 'Nusa Rara', 'L', 'Yogyakarta, 12 Juni 2001', 'Bandung', 'nusa@gmail.com', '081278392001', 'Burhanuddin', 'Dokter', 'SMP N 1 Klaten', 'ere.jpg', 60, 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(29, 'Kiah', 'c4ca4238a0b923820dcc509a6f75849b', 'User'),
(30, 'Bita', 'c4ca4238a0b923820dcc509a6f75849b', 'User'),
(32, 'adminn', 'c81e728d9d4c2f636f067f89cc14862c', 'Administrator'),
(33, 'A', 'c81e728d9d4c2f636f067f89cc14862c', 'Administrator'),
(34, 'Wilda', 'c4ca4238a0b923820dcc509a6f75849b', 'User'),
(35, 'Rahmat', 'c4ca4238a0b923820dcc509a6f75849b', 'User'),
(36, 'bima', 'c4ca4238a0b923820dcc509a6f75849b', 'User'),
(37, 'Salsa', '7694f4a66316e53c8cdd9d9954bd611d', 'User'),
(38, 'Nusa', '7b8b965ad4bca0e41ab51de7b31363a1', 'User'),
(39, 'jwd', '7ab50d9e2c0f473df45bc8431dfdacbf', 'Administrator'),
(40, 'Alucard', '0cc175b9c0f1b6a831c399e269772661', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
