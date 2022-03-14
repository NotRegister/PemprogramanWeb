-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 08:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `prodi`) VALUES
('210535614801', 'MUHAMMAD GHAZI MUBAROKAH', 'S1 Teknik Informatika'),
('210535614802', 'MUHAMAD FARIK NABIL HIDAYAT', 'S1 Teknik Informatika'),
('210535614806', 'MOHAMMAD AGUNG RIZKI', 'S1 Teknik Informatika'),
('210535614811', 'WAHYU PRATAMA', 'S1 Teknik Informatika'),
('210535614812', 'MUHAMMAD YUSUF ALVIANTO', 'S1 Teknik Informatika'),
('210535614813', 'ROUDHOTULLOH NAZAKHAN', 'S1 Teknik Informatika'),
('210535614814', 'RASENDRIYA AHMADA MAHESWARA', 'S1 Teknik Informatika'),
('210535614816', 'MOCHAMMAD ARYA WIJAYA KUSUMA', 'S1 Teknik Informatika'),
('210535614819', 'PYNDHO CEVIN TARAYA', 'S1 Teknik Informatika'),
('210535614820', 'MANUEL TANBICA GRACIELLO', 'S1 Teknik Informatika'),
('210535614821', 'THEODORA MONICA', 'S1 Teknik Informatika'),
('210535614823', 'MUCHAMAD ANDIS SETIAWAN', 'S1 Teknik Informatika'),
('210535614824', 'RICHARD ALTAF HERMAWAN', 'S1 Teknik Informatika'),
('210535614826', 'MIKEL EGA WIJAYA', 'S1 Teknik Informatika'),
('210535614830', 'MUHAMMAD RAKHA PINGGALA', 'S1 Teknik Informatika'),
('210535614831', 'MUHAMMAD TAUFIQ HIDAYAT', 'S1 Teknik Informatika'),
('210535614832', 'NADIA ARIANESYA', 'S1 Teknik Informatika'),
('210535614835', 'MUHAMMAD FAHLI SAPUTRA', 'S1 Teknik Informatika'),
('210535614836', 'RIZKY RIZALDI KURNIAWAN', 'S1 Teknik Informatika'),
('210535614837', 'TIARA AMALINA SALSABILA', 'S1 Teknik Informatika'),
('210535614838', 'MOHAMMAD FAJAR RIFQI', 'S1 Teknik Informatika'),
('210535614839', 'MUHAMMAD NAUFAL FARRAS', 'S1 Teknik Informatika'),
('210535614840', 'MOHAMMAD ANDRYAN', 'S1 Teknik Informatika'),
('210535614843', 'RACHEL NATHANIA NUGROHO', 'S1 Teknik Informatika'),
('210535614844', 'MUHAMMAD NADHIL MAWARID', 'S1 Teknik Informatika'),
('210535614848', 'MUHAMMAD RAYHAN ARDHINAR', 'S1 Teknik Informatika'),
('210535614852', 'MUHAMMAD ZIDAN BRILLIANT', 'S1 Teknik Informatika'),
('210535614853', 'SATRIA DAFFA ATHALLAH PRATAMA', 'S1 Teknik Informatika'),
('210535614858', 'MUHAMMAD ANANDHA FRITAMA', 'S1 Teknik Informatika'),
('210535614860', 'SATRIA YUDA SETIAWAN', 'S1 Teknik Informatika'),
('210535614861', 'M. BAHARUDDIN YUSUF', 'S1 Teknik Informatika'),
('210535614862', 'MARIA GABYELENT GEA', 'S1 Teknik Informatika'),
('210535614867', 'Muhammad Rieki Hredaya', 'S1 Teknik Informatika'),
('210535614870', 'MUHAMMAD ZAKY RAHMATSYAH', 'S1 Teknik Informatika'),
('210535614872', 'NAUFAL RIZALDI GUNAWAN', 'S1 Teknik Informatika'),
('210535614875', 'MUHAMMAD RIZQI ROMADLON', 'S1 Teknik Informatika'),
('210535614876', 'M ARFAN ARYASATYA', 'S1 Teknik Informatika'),
('210535614877', 'M. ARFIN ARYASATYA', 'S1 Teknik Informatika'),
('210535614878', 'MOCHAMAD FIKRI FAUZI', 'S1 Teknik Informatika'),
('210535614883', 'SHOHWATUL HANA', 'S1 Teknik Informatika'),
('210535614899', 'Muhammad Anjab ', 'S1 Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reset`
--

CREATE TABLE `tb_reset` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_reset`
--

INSERT INTO `tb_reset` (`id`, `code`, `email`) VALUES
(11, '1622358639a690', 'hredayaa@gmail.com'),
(15, '162246171720b3', 'hredayaa@gmail.com'),
(16, '1622635c2f1b8e', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`email`, `password`) VALUES
('admin@gmail.com', 'admin123'),
('hredayaa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('rieki@gmail.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_reset`
--
ALTER TABLE `tb_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_reset`
--
ALTER TABLE `tb_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
