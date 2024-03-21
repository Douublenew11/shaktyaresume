-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2024 at 06:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts2`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sd` varchar(100) NOT NULL,
  `smp` varchar(100) NOT NULL,
  `smp2` varchar(100) NOT NULL,
  `smk` varchar(100) NOT NULL,
  `kuliah` varchar(100) NOT NULL,
  `hobbi` varchar(100) NOT NULL,
  `hobbi2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `umur`, `asal`, `email`, `sd`, `smp`, `smp2`, `smk`, `kuliah`, `hobbi`, `hobbi2`) VALUES
(2, 'Shaktya Daffa Al Ghifari', '18 tahun', 'Cicaheum, Bandung', 'shaktyadaffaalghifari@gmail.com', 'SDN Cibeusi, Jatinangor', 'SMPN 1 Cileunyi', '', 'SMK Bakti Nusantara 666, Cileunyi', 'Masoem University, Cipacing', 'Desain, Main Game', 'Mengamati Sepak Bola');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `email`, `komentar`, `tanggal`) VALUES
(5, 'shaktyadaffaalghifari@gmail.com', 'Halo! Semangat ', '2024-03-19'),
(6, 'ewoksudrajat140@gmail.com', 'Ewok! Ganteng\r\n', '2024-03-20'),
(7, 'ewoksudrajat140@gmail.com', 'fduiuyft', '2024-03-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
