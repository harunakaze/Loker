-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2014 at 11:18 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loker`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` smallint(6) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `keterangan` text NOT NULL,
  `no_loker` varchar(5) NOT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waktu_keluar` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_barang` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_pengguna`, `no_hp`, `keterangan`, `no_loker`, `waktu_masuk`, `waktu_keluar`, `status_barang`) VALUES
(1, 'mas hari', '0864641321', 'barang curian', '4', '2014-11-21 08:57:07', '0000-00-00 00:00:00', 1),
(2, 'Afif', '086000', 'hkjhkj', '3', '2014-11-21 08:54:56', '0000-00-00 00:00:00', 1),
(3, 'saka', '344', '23424', '36456', '2014-11-21 09:20:55', '0000-00-00 00:00:00', 1),
(4, '1231', '123', '123', '123', '2014-11-21 09:20:53', '0000-00-00 00:00:00', 1),
(5, 'Saka', '123123123', '2123123', '34234', '2014-11-21 09:21:05', '0000-00-00 00:00:00', 0),
(6, 'saka', '123', 'asdasd', '12312', '2014-11-21 10:16:06', '0000-00-00 00:00:00', 0),
(7, 'bibibi', '23424', 'asdads', '566', '2014-11-21 10:17:11', '0000-00-00 00:00:00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
