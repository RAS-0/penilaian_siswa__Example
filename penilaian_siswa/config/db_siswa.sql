-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 01:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `kd_absen` int(11) NOT NULL,
  `nm_bulan` varchar(255) NOT NULL,
  `nis` int(11) NOT NULL,
  `nm_siswa` varchar(255) NOT NULL,
  `jml_hadir` int(11) NOT NULL,
  `alfa` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`kd_absen`, `nm_bulan`, `nis`, `nm_siswa`, `jml_hadir`, `alfa`, `izin`, `sakit`) VALUES
(1, 'MEI', 1, 'rahmat', 30, 5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('admin', '$2y$10$Sl7AcauHRKzwjWXsKQgKDuezFgx.s/vwEHpP7HzVPYV9f.U/XfwhG', 'admin'),
('rahmat', '$2y$10$HlWI.1EcSCw/C3GJJPRJXu5xR6e7lS3BDsSEbsDd4PsD9BtyspALy', 'rahmat');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(11) NOT NULL,
  `nm_guru` varchar(255) NOT NULL,
  `tmp_lahir_guru` varchar(255) NOT NULL,
  `tgl_lahir_guru` date NOT NULL,
  `jkel_guru` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(255) NOT NULL,
  `kd_matpel` int(11) NOT NULL,
  `nm_matpel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nm_guru`, `tmp_lahir_guru`, `tgl_lahir_guru`, `jkel_guru`, `alamat`, `telp`, `kd_matpel`, `nm_matpel`) VALUES
(1, 'Jasmine', 'Malay', '2024-06-03', 'Laki - Laki', 'Tangerang Selatan', '0897', 1, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` int(11) NOT NULL,
  `nm_kelas` varchar(255) NOT NULL,
  `jml_siswa` int(11) NOT NULL,
  `thn_ajaran` varchar(255) NOT NULL,
  `nip` int(11) NOT NULL,
  `nm_guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nm_kelas`, `jml_siswa`, `thn_ajaran`, `nip`, `nm_guru`) VALUES
(1, 'JERAPA', 33, '2024', 1, 'Jasmine');

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `kd_matpel` int(11) NOT NULL,
  `nm_matpel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`kd_matpel`, `nm_matpel`) VALUES
(1, 'Bahasa Inggris'),
(2, 'MTK'),
(3, 'Etika Profesi'),
(4, 'Bahasa Indonesia'),
(5, 'IMK');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `kd_nilai` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nm_siswa` varchar(255) NOT NULL,
  `kd_matpel` int(11) NOT NULL,
  `nm_matpel` varchar(255) NOT NULL,
  `uts_sem_ganjil` int(11) NOT NULL,
  `uas_sem_ganjil` int(11) NOT NULL,
  `uts_sem_genap` int(11) NOT NULL,
  `uas_sem_genap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`kd_nilai`, `nis`, `nm_siswa`, `kd_matpel`, `nm_matpel`, `uts_sem_ganjil`, `uas_sem_ganjil`, `uts_sem_genap`, `uas_sem_genap`) VALUES
(1, 1, 'rahmat', 1, 'Bahasa Inggris', 7, 7, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nm_siswa` varchar(255) NOT NULL,
  `tmp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jkel` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(255) NOT NULL,
  `nm_wali` varchar(255) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nm_siswa`, `tmp_lahir`, `tgl_lahir`, `jkel`, `alamat`, `telp`, `nm_wali`, `kd_kelas`, `username`, `password`) VALUES
(1, 'rahmat', 'jakarta', '2024-06-08', 'Laki - Laki', '-', '08979', 'Jasmine', 1, 'admin', '$2y$10$5JJGpFOqGMrJ.k8jjx26q.6mDU41jkEUu/7yFJO.pEJTmaz2cIYZS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`kd_absen`),
  ADD UNIQUE KEY `kd_absen` (`kd_absen`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `kd_matpel` (`kd_matpel`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`),
  ADD UNIQUE KEY `kd_kelas` (`kd_kelas`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`kd_matpel`),
  ADD UNIQUE KEY `kd_matpel` (`kd_matpel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kd_nilai`),
  ADD UNIQUE KEY `kd_nilai` (`kd_nilai`),
  ADD KEY `kd_matpel` (`kd_matpel`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `kd_kelas` (`kd_kelas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`kd_matpel`) REFERENCES `matpel` (`kd_matpel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kd_matpel`) REFERENCES `matpel` (`kd_matpel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
