-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 08:39 PM
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
('5024201040', 'Riyan Martin Hidayat', 'Laki-Laki', 'Teknik Komputer', 'Admin'),
('asisten', 'asisten', 'Laki-Laki', 'Teknik Komputer', 'Asisten'),
('koordinator', 'koordinator', 'Laki-Laki', 'Teknik Komputer', 'Koordinator'),
('praktikan', 'praktikan', 'Laki-Laki', 'Teknik Komputer', 'Praktikan');

-- --------------------------------------------------------

--
-- Table structure for table `list_praktikum`
--

CREATE TABLE `list_praktikum` (
  `ID_Praktikum` int(20) NOT NULL,
  `Nama_Praktikum` varchar(255) NOT NULL,
  `Lab_Praktikum` varchar(255) NOT NULL,
  `Matkul_Prasyarat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`Matkul_Prasyarat`)),
  `Jumlah_Modul` int(2) NOT NULL,
  `Dosen_Pendamping` varchar(255) DEFAULT NULL,
  `Koordinator_Praktikum` varchar(255) DEFAULT NULL,
  `Status` enum('Belum dimulai','Sedang berjalan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_praktikum`
--

INSERT INTO `list_praktikum` (`ID_Praktikum`, `Nama_Praktikum`, `Lab_Praktikum`, `Matkul_Prasyarat`, `Jumlah_Modul`, `Dosen_Pendamping`, `Koordinator_Praktikum`, `Status`) VALUES
(2, 'DASPROG', 'B201', '[\"Dasar Pemrograman\\n\",\"Pemrograman Lanjut\"]', 20, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `NRP` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `NRP`, `Password`, `Email`) VALUES
(1, '5024201040', '$2y$10$.J0RFgvJnO5m/KZ.nMAiHuZKfBwLRgK7PD4BltuXa4ihve8C3DggW', 'riyanmarayat@gmail.com'),
(2, 'asisten', '$2y$10$NN0Y/oyi.i6adNI/YUIZ6OoBXFwcsLan1SudCWtHjM0vmRmhUKr66', 'asisten@gmail.com'),
(3, 'koordinator', '$2y$10$rio/Um3linvL0i5mOU0y/.KFgV8feILsZbP0FiOinos6VRgTt44Nq', 'koordinator@gmail.com'),
(4, 'praktikan', '$2y$10$bLVHpMwjH1T3ApjFa8qReuNHK4c/BkHpBiFErbqSvbKxQOJhV41yi', 'praktikan@gmail.com');

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
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `NRP` (`NRP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_praktikum`
--
ALTER TABLE `list_praktikum`
  MODIFY `ID_Praktikum` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`NRP`) REFERENCES `akun` (`NRP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
