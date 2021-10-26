-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 10:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'Adee Wahyudi', 'adee_wahyudi', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(14) NOT NULL,
  `nama_anggota` varchar(64) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(64) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `foto` varchar(255) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `telp`, `foto`) VALUES
('A201706001', 'Adee Wahyudi', 'Laki-laki', 'Jakarta', '1998-01-24', 'Alinda Kencana Permai NI/IB', '089681779821', 'A201706001.png'),
('A201706002', 'Bunga Safitri', 'Perempuan', 'Jakarta', '1998-02-22', 'Jl. Bantar Gebang Barat', '085856694976', 'default.jpg'),
('A201806003', 'Syifa Novianty Nabila', 'Perempuan', 'Bekasi', '2000-11-27', 'Taman Tridaya Indah, F4/17 ', '081294377451', 'default.jpg'),
('A201806004', 'Ari Irawan', 'Laki-laki', 'Bekasi', '1998-04-21', 'Grand Wisata Bekasi', '02188959980', 'A201806004.png'),
('A202110005', 'Nadiatasya', 'Perempuan', 'Sukabumi', '2000-04-17', 'Kp.Nyangkokot, Sukabumi', '085794689265', 'default.jpg'),
('A202110006', 'Joni', 'Laki-laki', 'Bekasi', '2021-10-20', 'Tambun', '08987654321', 'A202110006.png');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(6) NOT NULL,
  `judul_buku` varchar(32) NOT NULL,
  `penerbit` varchar(32) NOT NULL,
  `penulis` varchar(32) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penerbit`, `penulis`, `tahun`) VALUES
('BK0001', 'Belajar HTML', 'PT Elnino Prasetya', 'Joni Iskandar', '2017'),
('BK0002', 'Pemrograman Web', 'PT Aldebaran Sejahtera', 'Yudistira', '2016'),
('BK0003', 'Kalkulus', 'Airlangga', 'Satria Baja Hitam', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(14) NOT NULL,
  `id_anggota` varchar(14) NOT NULL,
  `id_buku` varchar(6) NOT NULL,
  `tgl_peminjaman` date DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `tgl_realisasi` date DEFAULT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_anggota`, `id_buku`, `tgl_peminjaman`, `tgl_pengembalian`, `tgl_realisasi`, `denda`) VALUES
('TR2021100001', 'A201706001', 'BK0001', '2021-10-03', '2021-10-10', '2021-10-10', 0),
('TR2021100002', 'A201706002', 'BK0003', '2021-10-17', '2021-10-24', '2021-10-24', 0),
('TR2021100003', 'A201806004', 'BK0001', '2021-10-17', '2021-10-24', '2021-10-26', 4000),
('TR2021100004', 'A202110005', 'BK0003', '2021-10-19', '2021-10-26', '2021-10-26', 0),
('TR2021100005', 'A202110006', 'BK0001', '2021-10-18', '2021-10-25', NULL, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `transaksiperpus`
-- (See below for the actual view)
--
CREATE TABLE `transaksiperpus` (
`id_transaksi` varchar(14)
,`id_anggota` varchar(14)
,`nama_anggota` varchar(64)
,`id_buku` varchar(6)
,`judul_buku` varchar(32)
,`tgl_peminjaman` date
,`tgl_pengembalian` date
,`tgl_realisasi` date
,`denda` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `transaksiperpus`
--
DROP TABLE IF EXISTS `transaksiperpus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `transaksiperpus`  AS  select `transaksi`.`id_transaksi` AS `id_transaksi`,`transaksi`.`id_anggota` AS `id_anggota`,`anggota`.`nama_anggota` AS `nama_anggota`,`transaksi`.`id_buku` AS `id_buku`,`buku`.`judul_buku` AS `judul_buku`,`transaksi`.`tgl_peminjaman` AS `tgl_peminjaman`,`transaksi`.`tgl_pengembalian` AS `tgl_pengembalian`,`transaksi`.`tgl_realisasi` AS `tgl_realisasi`,`transaksi`.`denda` AS `denda` from ((`transaksi` join `anggota` on(`transaksi`.`id_anggota` = `anggota`.`id_anggota`)) join `buku` on(`transaksi`.`id_buku` = `buku`.`id_buku`)) order by `transaksi`.`id_transaksi` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `FK_Buku` (`id_buku`),
  ADD KEY `FK_Anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_Anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `FK_Buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
