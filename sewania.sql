-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2016 at 10:34 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sewania`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ads`
--

CREATE TABLE IF NOT EXISTS `tb_ads` (
  `id_ads` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `descript` tinytext NOT NULL,
  `ranting` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date_publish` datetime NOT NULL,
  `slug` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sub_kategori` int(11) NOT NULL,
  `id_super_sub_kategori` int(11) NOT NULL,
  `id_province` int(11) NOT NULL,
  `id_region` text NOT NULL,
  PRIMARY KEY (`id_ads`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tb_ads`
--

INSERT INTO `tb_ads` (`id_ads`, `title`, `descript`, `ranting`, `price`, `date_publish`, `slug`, `id_user`, `id_kategori`, `id_sub_kategori`, `id_super_sub_kategori`, `id_province`, `id_region`) VALUES
(50, 'Tes Gak Perdana', '<p>anu ane gak kena uik bang</p>', 0, 12000000, '2016-10-29 03:28:51', 'tes-gak-perdana', 16, 1, 1, 1, 2, '12'),
(51, 'ONta Arab', '<p>onta pingin cepet bang</p>', 0, 1200000, '2016-10-30 03:37:38', 'onta-arab', 16, 1, 1, 2, 2, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE IF NOT EXISTS `tb_banner` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_business_profile`
--

CREATE TABLE IF NOT EXISTS `tb_business_profile` (
  `id_business_profile` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `type_service` text NOT NULL,
  `address` text NOT NULL,
  `id_province` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `description` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_business_profile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_business_profile`
--

INSERT INTO `tb_business_profile` (`id_business_profile`, `brand_name`, `type_service`, `address`, `id_province`, `id_region`, `description`, `id_user`) VALUES
(1, 'uik dev', 'tes', 'jl anu', 1, 6, 'tes', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallerys`
--

CREATE TABLE IF NOT EXISTS `tb_gallerys` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `alt` text NOT NULL,
  `src` text NOT NULL,
  `id_ads` int(11) NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `tb_gallerys`
--

INSERT INTO `tb_gallerys` (`id_gallery`, `title`, `alt`, `src`, `id_ads`) VALUES
(54, 'Tes Gak Perdana', 'Tes Gak Perdana', 'uploads/gallery/Screenshot_from_2016-10-26_16-36-4639.png', 50),
(55, 'ONta Arab', 'ONta Arab', 'uploads/gallery/Screenshot_from_2016-10-26_14-58-544.png', 51);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `name`) VALUES
(1, 'Peralatan Pesta'),
(2, 'Paket Pesta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsult`
--

CREATE TABLE IF NOT EXISTS `tb_konsult` (
  `id_konsult` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `acara` text NOT NULL,
  `tamu` text NOT NULL,
  `descript` text NOT NULL,
  `start` date NOT NULL,
  `tgl_konsultasi` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_region` int(11) NOT NULL,
  PRIMARY KEY (`id_konsult`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_konsult`
--

INSERT INTO `tb_konsult` (`id_konsult`, `name`, `no_telp`, `acara`, `tamu`, `descript`, `start`, `tgl_konsultasi`, `status`, `id_region`) VALUES
(3, 'aaaa', 'aaaa', '6', '2', '<p>asdasdasdas asasdasdasd</p>\n<p>sd</p>', '2016-10-20', '2016-10-30', 1, 7),
(4, 'aaaa', '121223131', '8', '1', '<p>sdadasd</p>', '2016-10-11', '2016-10-31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE IF NOT EXISTS `tb_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_ads` int(11) NOT NULL,
  `date_order` datetime NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `acara` varchar(255) NOT NULL,
  `tamu` int(10) NOT NULL,
  `lokasi` text NOT NULL,
  `date_sewa` date NOT NULL,
  `date_balik` date NOT NULL,
  `desc_order` text NOT NULL,
  `status_order` tinyint(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_province`
--

CREATE TABLE IF NOT EXISTS `tb_province` (
  `id_province` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_province`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_province`
--

INSERT INTO `tb_province` (`id_province`, `name`) VALUES
(1, 'Bali'),
(2, 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_region`
--

CREATE TABLE IF NOT EXISTS `tb_region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_province` int(11) NOT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tb_region`
--

INSERT INTO `tb_region` (`id_region`, `name`, `id_province`) VALUES
(1, 'Gianyar', 1),
(2, 'Badung', 1),
(3, 'Buleleng', 1),
(4, 'Bangli', 1),
(5, 'Jembrana', 1),
(6, 'Karangasem', 1),
(7, 'Klungkung', 1),
(8, 'Tabanan', 1),
(9, 'Kepulauan Seribu', 2),
(10, 'Jakarta Barat', 2),
(11, 'Jakarta Pusat', 2),
(12, 'Jakarta Selatan', 2),
(13, 'Jakarta Utara', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_sub_kategori` (
  `id_sub_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_sub_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_sub_kategori`
--

INSERT INTO `tb_sub_kategori` (`id_sub_kategori`, `name`, `slug`, `id_kategori`) VALUES
(1, 'Tenda', 'tenda', 1),
(2, 'Kursi', 'kursi', 1),
(3, 'Meja', 'meja', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_super_sub_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_super_sub_kategori` (
  `id_super_sub_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `id_sub_kategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_super_sub_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_super_sub_kategori`
--

INSERT INTO `tb_super_sub_kategori` (`id_super_sub_kategori`, `name`, `slug`, `id_sub_kategori`, `id_kategori`) VALUES
(1, 'Tenda Krucut', 'tenda-krucut', 1, 1),
(2, 'Tenda Dekorasi', 'tenda-dekorasi', 1, 1),
(3, 'Kursi Spon', 'kursi-spon', 2, 1),
(4, 'Kursi Plastik', 'kursi-plastik', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL,
  `joined` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `ip_last` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `first_name`, `last_name`, `email`, `username`, `password`, `avatar`, `joined`, `last_login`, `ip_last`, `admin`) VALUES
(2, 'Komang', 'Suryadana', 'suryadana80@gmail.com', '', '8821716db3b4a9e6708a792da936df9357bb9b455e1600354c54d2009e6deb4275fc1224d33989452af7214bfbccde878174fc56d562ecfcc6f68c08a4fbef4e8pzcODt1xyBIbsuUc9phVgFc4C5RaUTMD1SXm+EdLhA=', '', '0000-00-00 00:00:00', '2016-10-25 22:35:52', '127.0.0.1', -9),
(15, 'Mikel', 'Eric', 'pendekar_langit@protonmail.com', '', 'dd314dadda935008202a1d1028e923bc0d0bbd209f7731c81288a63004802f6b141177df154f46e49e898d602a315bd54e13046c92ce34ced5398003546e50e9Q5h49Ebb2KNtmxotuzWfhJZQzx2jhu6FKyGJByrUawM=', '', '2016-10-01 18:53:19', '2016-10-27 01:39:07', '127.0.0.1', 0),
(16, 'Pendekar', 'Langit', 'pendekar@protonmail.com', '', 'eb5f53336f92956e74c8c6d2cb5019001cf8dbd06f8f37f0b6f575e1c04c48710ca3ac41962e9598201a931de3d10aa30fad2149e701926a15de5962148ddc7cz/LpgcuVBLMAmJ5i190Lg4J4+iTCvIcj+N4LC8pTHXQ=', 'uploads/avatar/bdi_under_presaur1.jpg', '2016-10-24 02:48:25', '2016-10-25 22:56:03', '127.0.0.1', 1),
(20, 'Dewa', 'Mahendra', 'dewamah@gmail.com', '_bogeyman_', '105a9eade3fcfcf66a51164fe98908734108d14885d75efb031bcd0f7289f3b56871233050ed2692d343d7ab2ffdf8a6278f16a67c0ef3b04c3804c17a8c2330hu+iQjJyqmW1t5tXHRwF43kU2kpRILANwfjkCftsZD0=', 'assets/img/ava/1.png', '2016-10-30 08:55:17', '2016-10-30 09:30:52', '192.168.12.1', -9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
