-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 04:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colabs_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `NRP` varchar(20) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Jenis_Kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `Departemen` varchar(255) NOT NULL,
  `Peran` enum('Asisten','Koordinator','Praktikan','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`NRP`, `Nama`, `Jenis_Kelamin`, `Departemen`, `Peran`) VALUES
('2147483647', 'Riyan Martin Hidayat', 'Laki-Laki', 'Teknik Komputer', 'Praktikan');

-- --------------------------------------------------------

--
-- Table structure for table `list_praktikum`
--

CREATE TABLE `list_praktikum` (
  `ID_Praktikum` varchar(20) NOT NULL,
  `Nama_Praktikum` varchar(255) NOT NULL,
  `Dosen_Pendamping` varchar(255) DEFAULT NULL,
  `Koordinator_Praktikum` varchar(255) DEFAULT NULL,
  `Status` enum('Belum dimulai','Sedang berjalan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NRP` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`NRP`);

--
-- Indexes for table `list_praktikum`
--
ALTER TABLE `list_praktikum`
  ADD PRIMARY KEY (`ID_Praktikum`),
  ADD KEY `Dosen_Pendamping` (`Dosen_Pendamping`),
  ADD KEY `Koordinator_Praktikum` (`Koordinator_Praktikum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NRP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
