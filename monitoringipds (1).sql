-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2018 at 01:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monitoringipds`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `id_seksi` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `id_seksi`, `status`) VALUES
(1, 'Putu Hadi', 'admin', '0192023a7bbd73250516f069df18b500', '530000', 'admin'),
(5, 'Destia K Mangingi', 'destia', 'c69b7074d8bf68b99339e5980a56d5c9', '530061', 'user'),
(6, 'Tyo Farida Gultom', 'tyo', '3393b62a6ac52996b8098bda04d25a4e', '530060', 'pemantau'),
(7, 'kabupaten', 'kab', 'aeee2a6232249ce30fd2070b22ab7f85', '530060', 'userkab');

-- --------------------------------------------------------

--
-- Table structure for table `bps_bidang`
--

CREATE TABLE IF NOT EXISTS `bps_bidang` (
  `id_bidang` varchar(10) NOT NULL,
  `nama_bidang` varchar(20) NOT NULL,
  `kode_prov` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bps_bidang`
--

INSERT INTO `bps_bidang` (`id_bidang`, `nama_bidang`, `kode_prov`) VALUES
('53006', 'IPDS', '5300'),
('53007', 'Statistik Produksi', '5300');

-- --------------------------------------------------------

--
-- Table structure for table `bps_detil_keg`
--

CREATE TABLE IF NOT EXISTS `bps_detil_keg` (
`id_detil` int(10) NOT NULL,
  `nama_detil` varchar(30) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `target` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL,
  `seksi_terkait` varchar(50) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_target` date NOT NULL,
  `tanggal_target_kab` date NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_seksi` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `link_sop` varchar(50) NOT NULL,
  `link_mon` varchar(50) NOT NULL,
  `link_app` varchar(50) NOT NULL,
  `bps_telat` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bps_detil_keg`
--

INSERT INTO `bps_detil_keg` (`id_detil`, `nama_detil`, `satuan`, `target`, `realisasi`, `seksi_terkait`, `tanggal_mulai`, `tanggal_target`, `tanggal_target_kab`, `tanggal_update`, `id_seksi`, `id_user`, `link_sop`, `link_mon`, `link_app`, `bps_telat`) VALUES
(11, 'SOUH 18', 'dokumen', 4300, 4000, '530062', '2018-09-05', '2018-09-13', '2018-09-08', '2018-09-19 05:52:33', '530062', 'Diki Alfar', 'http://www.bps.go.id/', '', '', ''),
(22, 'SHPRB', 'orang', 30, 15, '530072', '2018-09-04', '2018-09-13', '2018-09-11', '2018-09-19 05:52:08', '530061', 'Diki Alfar', 'http://www.bps.go.id/', 'http://ntt.bps.go.id/', 'http://detik.com', ''),
(23, 'Pemetaan', 'Dokumen', 13, 13, '530072', '2018-09-07', '2018-09-12', '2018-09-08', '2018-09-19 05:51:56', '530063', 'Putu Hadi', 'http://www.bps.go.id/', 'http://www.bps.go.id/', 'http://www.bps.go.id/', ''),
(25, 'Updating PODES', 'Kabupaten', 22, 0, '530071', '2018-09-03', '2018-09-30', '2018-09-12', '2018-09-19 05:51:44', '530063', 'Putu Hadi', 'http://www.bps.go.id/', '', '', ''),
(27, 'Updating 2 Pemetaan', 'dokumen', 200, 0, '530073', '2018-09-01', '2018-09-30', '2018-09-11', '2018-09-19 05:48:12', '530061', 'Putu Hadi', 'http://www.bps.go.id', '', '', ''),
(29, 'Validasi SUTAS', 'Kabupaten', 19, 0, '530071', '2018-08-01', '2018-09-24', '2018-09-03', '2018-09-19 05:48:00', '530062', 'Putu Hadi', 'http://www.bps.go.id/', 'http://ntt.bps.go.id/', 'http://detik.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `bps_keg`
--

CREATE TABLE IF NOT EXISTS `bps_keg` (
  `id_keg` varchar(10) NOT NULL,
  `nama_keg` varchar(20) NOT NULL,
  `id_bidang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bps_seksi`
--

CREATE TABLE IF NOT EXISTS `bps_seksi` (
  `id_seksi` varchar(10) NOT NULL,
  `nama_seksi` varchar(100) NOT NULL,
  `id_bidang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bps_seksi`
--

INSERT INTO `bps_seksi` (`id_seksi`, `nama_seksi`, `id_bidang`) VALUES
('530000', 'Admin', '53000'),
('530060', 'Kepala Bidang IPDS', '53006'),
('530061', 'Diseminasi Layanan Statistik', '53006'),
('530062', 'Integrasi dan Pengolahan Data Statistik', '53006'),
('530063', 'Jaringan dan Rujukan Statistik', '53006'),
('530071', 'Statistik Pertanian', '53007'),
('530072', 'Statistik Industri', '53700'),
('530073', 'Seksi Statistik Pertambangan, Energi dan Konstruksi', '53007');

-- --------------------------------------------------------

--
-- Table structure for table `masalah`
--

CREATE TABLE IF NOT EXISTS `masalah` (
`no` int(11) NOT NULL,
  `id_keg` int(11) NOT NULL,
  `judul_masalah` varchar(100) NOT NULL,
  `masalah` varchar(100) NOT NULL,
  `solusi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masalah`
--

INSERT INTO `masalah` (`no`, `id_keg`, `judul_masalah`, `masalah`, `solusi`) VALUES
(2, 22, 'Gak Bisa Entri', 'Detail 1 ', 'Detail 2'),
(3, 22, 'Gak Bisa Entri 2', 'Detail 2', 'Solusi 2');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `size`, `type`, `location`) VALUES
(1, 'profilepic.jpg', '34585', 'image/jpeg', 'uploads/profilepic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bps_bidang`
--
ALTER TABLE `bps_bidang`
 ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `bps_detil_keg`
--
ALTER TABLE `bps_detil_keg`
 ADD PRIMARY KEY (`id_detil`);

--
-- Indexes for table `bps_keg`
--
ALTER TABLE `bps_keg`
 ADD PRIMARY KEY (`id_keg`);

--
-- Indexes for table `bps_seksi`
--
ALTER TABLE `bps_seksi`
 ADD PRIMARY KEY (`id_seksi`);

--
-- Indexes for table `masalah`
--
ALTER TABLE `masalah`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bps_detil_keg`
--
ALTER TABLE `bps_detil_keg`
MODIFY `id_detil` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `masalah`
--
ALTER TABLE `masalah`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
