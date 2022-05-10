-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 03:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtugasphp2datasekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_pelajaran`
--

CREATE TABLE `tb_jadwal_pelajaran` (
  `IDJadwal` varchar(15) NOT NULL,
  `No_Induk` varchar(10) NOT NULL,
  `Kode_MaPel` varchar(10) NOT NULL,
  `IDGuru` varchar(15) NOT NULL,
  `IDRuang` varchar(10) NOT NULL,
  `SesiJadwal` char(1) NOT NULL,
  `Waktu_Mulai` time NOT NULL,
  `Waktu_Selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_pelajaran`
--

INSERT INTO `tb_jadwal_pelajaran` (`IDJadwal`, `No_Induk`, `Kode_MaPel`, `IDGuru`, `IDRuang`, `SesiJadwal`, `Waktu_Mulai`, `Waktu_Selesai`) VALUES
('jadwal1', '2008', 'ips1sejara', '626be67944119', 'kelas2', '3', '07:00:00', '09:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jadwal_pelajaran`
--
ALTER TABLE `tb_jadwal_pelajaran`
  ADD PRIMARY KEY (`IDJadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
