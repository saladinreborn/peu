-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2016 at 08:40 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kkp175`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_wo`
--

CREATE TABLE IF NOT EXISTS `t_detail_wo` (
  `id_detail_wo` int(11) NOT NULL AUTO_INCREMENT,
  `id_wo` int(6) DEFAULT NULL,
  `permintaan` varchar(200) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_detail_wo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_layanan`
--

CREATE TABLE IF NOT EXISTS `t_layanan` (
  `id_layanan` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `t_layanan`
--

INSERT INTO `t_layanan` (`id_layanan`, `nama`, `ket`, `harga`) VALUES
(1, 'Tune Up Mesin', 'Bensin dan Diesel', 85000),
(2, 'Overhaul (Turun Mesin) Mesin Bensin', NULL, 1000000),
(3, 'Overhaul (Turun Mesin) Mesin Diesel', NULL, 2500000),
(4, '  Perbaikan Kaki-Kaki  ', '  Per Satu Roda  ', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `t_level_user`
--

CREATE TABLE IF NOT EXISTS `t_level_user` (
  `id_level_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_level_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_level_user`
--

INSERT INTO `t_level_user` (`id_level_user`, `nama_level`) VALUES
(1, 'Owner'),
(2, 'Administrasi'),
(3, 'Purchasing');

-- --------------------------------------------------------

--
-- Table structure for table `t_merek`
--

CREATE TABLE IF NOT EXISTS `t_merek` (
  `id_merek` int(11) NOT NULL AUTO_INCREMENT,
  `nama_merek` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_merek`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_merek`
--

INSERT INTO `t_merek` (`id_merek`, `nama_merek`, `tanggal`) VALUES
(1, 'Peugeot', '2016-07-23 03:04:33'),
(2, 'Nissan', '2016-07-23 03:04:33'),
(3, 'Toyota', '2016-07-23 03:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `t_mobil`
--

CREATE TABLE IF NOT EXISTS `t_mobil` (
  `id_mobil` int(6) NOT NULL AUTO_INCREMENT,
  `pemilik` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `no_pol` varchar(8) DEFAULT NULL,
  `no_stnk` varchar(13) DEFAULT NULL,
  `no_rangka` varchar(17) DEFAULT NULL,
  `no_mesin` varchar(12) DEFAULT NULL,
  `merk` varchar(15) DEFAULT NULL,
  `tipe` varchar(15) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `t_mobil`
--

INSERT INTO `t_mobil` (`id_mobil`, `pemilik`, `alamat`, `no_telp`, `no_pol`, `no_stnk`, `no_rangka`, `no_mesin`, `merk`, `tipe`, `warna`) VALUES
(8, 'Sebastian Vettel', 'Sleman', '0274744755', 'AB7777RK', '100', '1000', '100', '3', '306', '3');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaran`
--

CREATE TABLE IF NOT EXISTS `t_pembayaran` (
  `id_bayar` int(6) NOT NULL AUTO_INCREMENT,
  `id_wo` int(6) DEFAULT NULL,
  `jml_total` float DEFAULT NULL,
  PRIMARY KEY (`id_bayar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_pembayaran`
--

INSERT INTO `t_pembayaran` (`id_bayar`, `id_wo`, `jml_total`) VALUES
(1, 1, 1300000);

-- --------------------------------------------------------

--
-- Table structure for table `t_sc`
--

CREATE TABLE IF NOT EXISTS `t_sc` (
  `id_sc` int(5) NOT NULL AUTO_INCREMENT,
  `nama_sc` varchar(100) DEFAULT NULL,
  `jumlah` int(4) DEFAULT NULL,
  `produsen` varchar(100) DEFAULT NULL,
  `id_sup` int(4) DEFAULT NULL,
  `harga_beli` float DEFAULT NULL,
  `harga_jual` float DEFAULT NULL,
  `tgl_dibuat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `t_sc`
--

INSERT INTO `t_sc` (`id_sc`, `nama_sc`, `jumlah`, `produsen`, `id_sup`, `harga_beli`, `harga_jual`, `tgl_dibuat`) VALUES
(1, 'Busi NGK', 4, 'NGK Inc. Japan', 2, 25000, 27000, NULL),
(3, 'eeee', 67, 'rrrr', 2, 5000, 56777800, NULL),
(4, '   Busi NGK   ', 10, '   Japan Inc.   ', 4, 30000, 40000, '2016-06-02 12:48:23'),
(6, '   Aki Yuasa   ', 104, '   PT Yuasa   ', 1, 34444, 4455, '2016-06-02 13:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `t_sc_masuk`
--

CREATE TABLE IF NOT EXISTS `t_sc_masuk` (
  `id_sc_masuk` int(5) NOT NULL AUTO_INCREMENT,
  `id_sc` int(5) DEFAULT NULL,
  `jumlah_sc_masuk` int(3) DEFAULT NULL,
  `tgl_sc_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sc_masuk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `t_sc_masuk`
--

INSERT INTO `t_sc_masuk` (`id_sc_masuk`, `id_sc`, `jumlah_sc_masuk`, `tgl_sc_masuk`) VALUES
(1, 1, 10, '2016-06-03 14:54:13'),
(2, 1, 70, '2016-06-03 15:26:44'),
(3, 6, 70, '2016-06-03 15:30:18'),
(4, 6, 0, '2016-06-03 15:31:58'),
(5, 6, 0, '2016-06-03 15:32:15'),
(6, 6, 0, '2016-06-03 15:33:03'),
(7, 6, 0, '2016-06-03 15:33:04'),
(8, 6, 0, '2016-06-03 15:33:10'),
(9, 6, 0, '2016-06-03 15:33:52'),
(10, 6, 0, '2016-06-03 15:34:05'),
(11, 6, 0, '2016-06-03 15:34:14'),
(12, 6, 70, '2016-06-03 15:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `t_sc_sup`
--

CREATE TABLE IF NOT EXISTS `t_sc_sup` (
  `id_sup` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_telp` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nama_cp` varchar(100) DEFAULT NULL,
  `no_telp_cp` varchar(12) DEFAULT NULL,
  `alamat_cp` varchar(200) DEFAULT NULL,
  `email_cp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `t_sc_sup`
--

INSERT INTO `t_sc_sup` (`id_sup`, `nama`, `alamat`, `no_telp`, `email`, `nama_cp`, `no_telp_cp`, `alamat_cp`, `email_cp`) VALUES
(1, 'CV. Fastlane', 'Jl. Kaliurang Km. 12 No. 124', '0274-556677', 'cs@fastlane.com', 'Ardian Pamuji', '081233336666', 'Yogyakarta', 'ardian@fastlane.com'),
(3, 'Contoh Supplier 2', 'vvvv', '45', 'eee', 'eee', '234', 'www', 'wwww'),
(4, 'Contoh Supplier 3', 'yyyy', '345', '222', 'www', '22334', 'rrr', 'eeee');

-- --------------------------------------------------------

--
-- Table structure for table `t_sdm`
--

CREATE TABLE IF NOT EXISTS `t_sdm` (
  `id_sdm` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `jabatan` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_sdm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `t_sdm`
--

INSERT INTO `t_sdm` (`id_sdm`, `nama`, `alamat`, `no_telp`, `jabatan`) VALUES
(1, 'Adi Siswoko', 'Yogyakarta', '081392087087', 'owner'),
(3, 'Darmanto', 'Yogyakarta', '081255558888', 'Kepala Mekanik'),
(4, 'Jaziman', 'Yogyakarta', '081255557777', 'Purchasing');

-- --------------------------------------------------------

--
-- Table structure for table `t_servis`
--

CREATE TABLE IF NOT EXISTS `t_servis` (
  `id_servis` int(6) NOT NULL AUTO_INCREMENT,
  `id_wo` int(6) DEFAULT NULL,
  `id_layanan` int(4) DEFAULT NULL,
  `id_sc` int(5) DEFAULT NULL,
  `id_sdm` int(2) DEFAULT NULL,
  `tgl_selesai` datetime DEFAULT NULL,
  PRIMARY KEY (`id_servis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_servis`
--

INSERT INTO `t_servis` (`id_servis`, `id_wo`, `id_layanan`, `id_sc`, `id_sdm`, `tgl_selesai`) VALUES
(1, 1, 2, 1, 3, '2016-05-02 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `pass` varchar(150) DEFAULT NULL,
  `level_user` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama`, `pass`, `level_user`) VALUES
(1, 'adi', 'c46335eb267e2e1cde5b017acb4cd799', 1),
(2, 'triyono', 'fbae05c48dafaa46a89af1367bf26192', 2),
(3, 'darmanto', 'd41d8cd98f00b204e9800998ecf8427e', 3),
(4, 'sho', '02a55f6b0b75a11ad1dedf9f8b4d9b4f', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_wo`
--

CREATE TABLE IF NOT EXISTS `t_wo` (
  `id_wo` int(6) NOT NULL AUTO_INCREMENT,
  `id_mobil` int(6) DEFAULT NULL,
  `km_mobil` float DEFAULT NULL,
  `id_sdm` int(2) DEFAULT NULL,
  `tgl_masuk` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `keterangan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_wo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `t_wo`
--

INSERT INTO `t_wo` (`id_wo`, `id_mobil`, `km_mobil`, `id_sdm`, `tgl_masuk`, `status`, `keterangan`) VALUES
(1, 8, 12000, 3, '2016-05-02 14:45:00', 0, NULL),
(4, 8, 14000, NULL, '2016-07-31 15:19:37', 0, NULL),
(5, 8, 14000, 3, '2016-07-31 15:27:54', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wo_sc`
--

CREATE TABLE IF NOT EXISTS `wo_sc` (
  `id_wo_sc` int(11) NOT NULL AUTO_INCREMENT,
  `id_wo` int(11) NOT NULL,
  `id_sc` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_wo_sc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wo_sc`
--

INSERT INTO `wo_sc` (`id_wo_sc`, `id_wo`, `id_sc`, `keterangan`, `tanggal`) VALUES
(2, 1, 6, '', '2016-08-01 12:55:28'),
(3, 1, 4, '', '2016-08-01 13:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `wo_service`
--

CREATE TABLE IF NOT EXISTS `wo_service` (
  `id_wo_service` int(11) NOT NULL AUTO_INCREMENT,
  `id_wo` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_wo_service`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wo_service`
--

INSERT INTO `wo_service` (`id_wo_service`, `id_wo`, `id_layanan`, `keterangan`, `tanggal`) VALUES
(1, 1, 1, NULL, '2016-08-01 06:05:07'),
(2, 1, 3, NULL, '2016-08-01 06:05:07'),
(6, 4, 4, NULL, '2016-08-01 13:11:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
