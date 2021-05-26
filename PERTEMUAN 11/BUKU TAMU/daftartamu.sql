-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 09:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftartamu`
--

CREATE TABLE `daftartamu` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftartamu`
--

INSERT INTO `daftartamu` (`id`, `tanggal`, `nama`, `email`, `notelp`, `keperluan`, `pesan`) VALUES
(1, '2021-05-26', 'Arnold Agusti Pratama', 'arnoldagusti8@gmail.com', '087771297211', 'Test Buku Tamu', 'Semoga Berhasil!!!'),
(2, '2021-05-26', 'Fahrur Rozi', 'fahrurrozi@gmail.com', '089655415423', 'Bertemu HRD', 'Halo, Saya ingin Melamar kerja'),
(3, '2021-05-26', 'Novebila Ramadhani', 'novebila@gmail.com', '082355645574', 'Meeting Acara', 'Acara Bulanan'),
(4, '2021-05-26', 'Rivai Sawqi', 'rivai@gmail.com', '085466234452', 'Wawancara ', 'Semoga Lulus!'),
(5, '2021-05-26', 'Dandi Ramdani', 'dandi@gmail.com', '085546234148', 'Magang ', 'Magang Harian'),
(6, '2021-05-26', 'Tatang Agus', 'tatang@gmail.com', '085445233648', 'Meeting Acara', 'Meeting Event Perusahaan'),
(7, '2021-05-26', 'indri yani', 'indri@gmail.com', '085564424566', 'Magang ', 'Halo'),
(8, '2021-05-26', 'aenun nisa', 'aqilallzero@gmail.com', '087771297211', 'Wawancara ', 'Amiin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftartamu`
--
ALTER TABLE `daftartamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftartamu`
--
ALTER TABLE `daftartamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
