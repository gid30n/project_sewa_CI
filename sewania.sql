-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2016 at 03:06 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `tb_ads`
--

INSERT INTO `tb_ads` (`id_ads`, `title`, `descript`, `ranting`, `price`, `date_publish`, `slug`, `id_user`, `id_kategori`, `id_sub_kategori`, `id_super_sub_kategori`, `id_province`, `id_region`) VALUES
(56, 'Tenda Brooo', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>consequat. Duis aute ', 0, 12123213, '2016-11-15 10:10:09', 'tenda-brooo', 31, 1, 1, 1, 1, '1,14'),
(60, 'Halo', '<p>adadadadad</p>', 0, 12121312, '2016-11-15 10:30:38', 'halo', 31, 2, 4, 6, 1, '14'),
(61, 'adad', '<p>sadasdasdas</p>', 0, 121212, '2016-11-15 10:45:14', 'adad', 31, 1, 1, 1, 1, '1'),
(62, 'sASS', '<p>dasdasd</p>', 0, 1212112, '2016-11-15 10:45:32', 'sass', 31, 1, 1, 1, 1, '6'),
(63, 'lskdkan', '<p>akjdbkjabkdjbkja</p>', 0, 12121212, '2016-11-15 10:46:05', 'lskdkan', 31, 1, 1, 1, 1, '1');

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
  `address` text NOT NULL,
  `id_province` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `description` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jenisjasa` text NOT NULL,
  PRIMARY KEY (`id_business_profile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_business_profile`
--

INSERT INTO `tb_business_profile` (`id_business_profile`, `brand_name`, `address`, `id_province`, `id_region`, `description`, `id_user`, `id_jenisjasa`) VALUES
(1, 'uik dev', 'jl anu', 1, 6, 'tes', 16, ''),
(2, 'AAAAAAAA', 'adadnjanjdknjands', 1, 7, 'asdadads', 21, ''),
(3, 'AAAAAAAAn', 'asasa', 1, 7, 'saddasdas', 22, ''),
(4, 'iuuasdhakjhd', 'SADADAD', 1, 1, 'dasdadasd', 23, ''),
(5, 'Test', 'dasdkadjhajkshd', 1, 1, 'adasbdjabsdbasjhd', 24, ''),
(6, 'sasa', 'lkadhajdhjhadkjas', 1, 1, 'asdasdasdasdasd', 25, ''),
(7, 'G-String', 'jlan sesama', 1, 8, '<p>adadadadadadad</p>', 30, '1,6'),
(8, 'FPI BERSATU', 'JLN ONTA', 2, 9, '<p>asasas</p>', 31, '1,5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_order`
--

CREATE TABLE IF NOT EXISTS `tb_detail_order` (
  `id_detail_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_ads` int(11) NOT NULL,
  `jum_item` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_detail_order`
--

INSERT INTO `tb_detail_order` (`id_detail_order`, `id_order`, `id_ads`, `jum_item`) VALUES
(5, 10, 61, 11);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `tb_gallerys`
--

INSERT INTO `tb_gallerys` (`id_gallery`, `title`, `alt`, `src`, `id_ads`) VALUES
(54, 'Tes Gak Perdana', 'Tes Gak Perdana', 'uploads/gallery/Screenshot_from_2016-10-26_16-36-4639.png', 50),
(55, 'ONta Arab', 'ONta Arab', 'uploads/gallery/Screenshot_from_2016-10-26_14-58-544.png', 51),
(56, 'OWNTA', 'OWNTA', 'uploads/gallery/Screenshot_-_111116_-_16:00:29.png', 52),
(57, 'aaaaaa', 'aaaaaa', 'uploads/gallery/Screenshot_-_111116_-_16:00:29.png', 53),
(58, 'aaaa', 'aaaa', 'uploads/gallery/Screenshot_-_111116_-_16:00:291.png', 54),
(59, 'akjdhadhkjahkdhkhadkhhkad', 'akjdhadhkjahkdhkhadkhhkad', 'uploads/gallery/Screenshot_-_111116_-_16:00:292.png', 55),
(60, 'Tenda Brooo', 'Tenda Brooo', 'uploads/gallery/Screenshot_-_111116_-_16:00:293.png', 56),
(61, 'Ulang Tahun', 'Ulang Tahun', 'uploads/gallery/Screenshot_-_111116_-_16:00:294.png', 57),
(62, 'Paket Ultah Broo', 'Paket Ultah Broo', 'uploads/gallery/Screenshot_-_111116_-_16:00:295.png', 58),
(63, 'Ultah', 'Ultah', 'uploads/gallery/Screenshot_-_111116_-_16:00:296.png', 59),
(64, 'Halo', 'Halo', 'uploads/gallery/Screenshot_-_111116_-_16:00:298.png', 60),
(65, 'adad', 'adad', 'uploads/gallery/Screenshot_-_111116_-_16:00:299.png', 61),
(66, 'sASS', 'sASS', 'uploads/gallery/Screenshot_-_111116_-_16:00:2910.png', 62),
(67, 'lskdkan', 'lskdkan', 'uploads/gallery/Screenshot_-_111116_-_16:00:2911.png', 63);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_jasa`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_jasa` (
  `id_jenisjasa` int(10) NOT NULL AUTO_INCREMENT,
  `jenis_jasa` varchar(250) NOT NULL,
  PRIMARY KEY (`id_jenisjasa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_jenis_jasa`
--

INSERT INTO `tb_jenis_jasa` (`id_jenisjasa`, `jenis_jasa`) VALUES
(1, 'Dekorasi'),
(2, 'Catering'),
(3, 'Entertaiment'),
(4, 'Make Up'),
(5, 'Penyewaan Perlengkapan Acara'),
(6, 'Percetakan Undangan'),
(7, 'Entertaiment');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_konsult`
--

INSERT INTO `tb_konsult` (`id_konsult`, `name`, `no_telp`, `acara`, `tamu`, `descript`, `start`, `tgl_konsultasi`, `status`, `id_region`) VALUES
(3, 'aaaa', 'aaaa', '6', '2', '<p>asdasdasdas asasdasdasd</p>\n<p>sd</p>', '2016-10-20', '2016-10-30', 1, 7),
(4, 'aaaa', '121223131', '8', '1', '<p>sdadasd</p>', '2016-10-11', '2016-10-31', 1, 1),
(5, 'aaaa', 'aaaa', '8', '4', '<p>sasasas</p>', '2016-11-09', '2016-11-01', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE IF NOT EXISTS `tb_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `ket` text NOT NULL,
  `date_order` datetime NOT NULL,
  `date_sewa` date NOT NULL,
  `date_kembali` date NOT NULL,
  `ava` varchar(250) NOT NULL,
  `status_order` enum('new','process','valid','invalid','pending','success') NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_province`
--

CREATE TABLE IF NOT EXISTS `tb_province` (
  `id_province` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_province`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_province`
--

INSERT INTO `tb_province` (`id_province`, `name`) VALUES
(1, 'Bali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_region`
--

CREATE TABLE IF NOT EXISTS `tb_region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_province` int(11) NOT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
(14, 'Denpasar', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tb_sub_kategori`
--

INSERT INTO `tb_sub_kategori` (`id_sub_kategori`, `name`, `slug`, `id_kategori`) VALUES
(1, 'Tenda', 'tenda', 1),
(2, 'Kursi', 'kursi', 1),
(3, 'Meja', 'meja', 1),
(4, 'Paket Ulang Tahun', 'paket-ulang-tahun', 2),
(5, 'Paket Pernikahan', 'paket-pernikahan', 2),
(6, 'Paket Dekorasi', 'paket-dekorasi', 2),
(7, 'Paket Acara Adat Bali', 'paket-acara-adat-bali', 2),
(8, 'Paket Catering', 'paket-catering', 2),
(9, 'Sound System', 'sound-system', 1),
(10, 'Standing Ac', 'standing-ac', 1),
(11, 'Alat Catering', 'alat-catering', 1),
(12, 'TV/Screen', 'tv-screen', 1),
(13, 'Kartu Undangan', 'kartu-undangan', 1),
(14, 'Make Up', 'make-up', 1),
(15, 'Podium Mimbar', 'podium-mimbar', 1),
(16, 'Alat Music', 'alat-music', 1),
(17, 'Genset', 'genset', 1),
(18, 'Kendaraan Pengantin', 'kendaraan-pengantin', 1),
(19, 'Penghibur', 'penghibur', 1),
(20, 'Pakaian Pengantin', 'pakaian-pengantin', 1),
(21, 'Lighting', 'lighting', 1),
(22, 'Rigging', 'rigging', 1),
(23, 'Flooring', 'flooring', 1),
(24, 'Dekorasi', 'dekorasi', 1),
(25, 'Tempat Acara', 'tempat-acara', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_super_sub_kategori`
--

INSERT INTO `tb_super_sub_kategori` (`id_super_sub_kategori`, `name`, `slug`, `id_sub_kategori`, `id_kategori`) VALUES
(1, 'Tenda Krucut', 'tenda-krucut', 1, 1),
(2, 'Tenda Dekorasi', 'tenda-dekorasi', 1, 1),
(3, 'Kursi Spon', 'kursi-spon', 2, 1),
(4, 'Kursi Plastik', 'kursi-plastik', 2, 1),
(5, 'Kursi Kayu', 'kursi-kayu', 2, 1),
(6, 'Ulang Tahun Anak', 'ulang-tahun-anak', 4, 2),
(7, 'Ulang Tahun Remaja', 'ulang-tahun-remaja', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL,
  `joined` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `ip_last` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `first_name`, `last_name`, `email`, `no_telp`, `username`, `password`, `avatar`, `joined`, `last_login`, `ip_last`, `admin`, `status`) VALUES
(2, 'Komang', 'Suryadana', 'suryadana80@gmail.com', '', '', '8821716db3b4a9e6708a792da936df9357bb9b455e1600354c54d2009e6deb4275fc1224d33989452af7214bfbccde878174fc56d562ecfcc6f68c08a4fbef4e8pzcODt1xyBIbsuUc9phVgFc4C5RaUTMD1SXm+EdLhA=', '', '0000-00-00 00:00:00', '2016-10-25 22:35:52', '127.0.0.1', -9, 0),
(15, 'Mikel', 'Eric', 'pendekar_langit@protonmail.com', '', '', 'dd314dadda935008202a1d1028e923bc0d0bbd209f7731c81288a63004802f6b141177df154f46e49e898d602a315bd54e13046c92ce34ced5398003546e50e9Q5h49Ebb2KNtmxotuzWfhJZQzx2jhu6FKyGJByrUawM=', '', '2016-10-01 18:53:19', '2016-10-27 01:39:07', '127.0.0.1', 0, 0),
(16, 'Pendekar', 'Langit', 'pendekar@protonmail.com', '', '', 'eb5f53336f92956e74c8c6d2cb5019001cf8dbd06f8f37f0b6f575e1c04c48710ca3ac41962e9598201a931de3d10aa30fad2149e701926a15de5962148ddc7cz/LpgcuVBLMAmJ5i190Lg4J4+iTCvIcj+N4LC8pTHXQ=', 'uploads/avatar/bdi_under_presaur1.jpg', '2016-10-24 02:48:25', '2016-10-25 22:56:03', '127.0.0.1', 1, 0),
(20, 'Dewa', 'Mahendra', 'dewamah@gmail.com', '', '_bogeyman_', '105a9eade3fcfcf66a51164fe98908734108d14885d75efb031bcd0f7289f3b56871233050ed2692d343d7ab2ffdf8a6278f16a67c0ef3b04c3804c17a8c2330hu+iQjJyqmW1t5tXHRwF43kU2kpRILANwfjkCftsZD0=', 'assets/img/ava/1.png', '2016-10-30 08:55:17', '2016-11-16 20:58:17', '127.0.0.1', -9, 0),
(21, 'AAA', 'BBB', 'slashrootctf@gmail.com', '081338315351', 'sasa', 'e605cd18e949254ff3f066f337ca6530c693f7ce64fe9f80feec77a47a3a9883faabb08b0a6a8ee624f3f84ff679273233e60800e9c14d7ea9b42a64094693d7zn6BBsGgWmQK4NMKEzZFBI7WDTlNGiCR/DxhhtFNQks=', 'assets/img/ava/1.png', '2016-11-05 10:39:06', '0000-00-00 00:00:00', '', 1, 0),
(22, 'aadada', '[kasfksfklsjdfkj', 'dadabesar@yahoo.com', '09283908112213', 'dada', '5d4b0e1c28718360070ea75a75cf32cfa60f69f2152933ca7d397f602dc58e7362fa314992ab9a4e9428d41a2c344b04f40caf12c067eb90a16bcb028342f7968wrUfoWqNf/n2cvBqEU50KfKG0Z8TEZdXfH9Y7A2YWM=', 'assets/img/ava/1.png', '2016-11-05 10:44:23', '0000-00-00 00:00:00', '', 1, 0),
(23, 'aaaaa', 'aaaaaaaaaaa', 'dadu69@gmail.com', '19823918938938', 'dadi', '579f3b4175c7b65b556b88e3c062f66aa0be69c12175193db4a8d466871c173eb1756ef91d7e879a7ff0f00ed7b668f2998a013e7ff1fec349c8baf937a1b9ddQUwVy43H/pO2S2To5c/memaICAlhYkHwA8+vcksrO8Y=', 'assets/img/ava/1.png', '2016-11-05 10:48:52', '0000-00-00 00:00:00', '', 1, 0),
(24, 'aaaa', 'cccc', 'test123@test.com', '1023891723971', 'test123', '4e907b876f24a0f2adeafa1a9b43a758c405f7e624485c1fa4558bd30d048a728bcedcc54de259eebd124c389e2a9ef6461a40ede13ff193441ded9eeb9bc46251bburZNcTcT5olG+NESTVJgq2cCjr08Hbc+jTnZsZY=', 'assets/img/ava/1.png', '2016-11-05 11:31:01', '0000-00-00 00:00:00', '', 1, 0),
(25, 'bbbbbb', 'aaaaaa', 'dewadewa@dewa.com', '12123137981738271798', 'dewa', '67192cecc9ac9bf352e6a15d2f2650fe67266d78057a590eaf5cbe951d1c6a2b6102c71a6039df474464c93c2c16d9ccb70214727636e8334d56f56c8e8999abXx+EyxMXFMkJE3FiJOnGq270BkN9rcCU9j2fpPlRrVU=', 'assets/img/ava/1.png', '2016-11-05 11:34:54', '2016-11-05 11:47:46', '127.0.0.1', 1, 0),
(26, 'aaaaaaaaaaaaa', 'sadasdasdkjasjkdkl', 'aduhhay@audi.com', '081338315351', 'aduh', 'a4442e9769bad5f31c8a6fab4ed511fc93118105abbc0c88dd0792d90c240af83de8fcfb7b34d988007c95e2bc626dd755d9fd8297b44e6cc8fd1bca5c00f86aN2uEj+e2EqoihzeUhIIzh97R8+4gZQVP5ENmAkmM+0c=', 'assets/img/ava/1.png', '2016-11-05 12:05:53', '0000-00-00 00:00:00', '', 0, 0),
(27, 'KJJJHJAS', 'DSNJNDKJSNJDK', 'ownta@arab.com', '38789798327928', 'ownta', '52afcbac82a67806378ee173edf51ded55652829ac460e52ebaf402c7cab3a5b5f21645af2fc0f68dbe31d1a6c270a7829251365a4aaa2a92bab551d27532cdf2YXqYh9wIIRqdCjN6JT5xx5frwezr9r5+BYOzlvsZT0=', 'assets/img/ava/1.png', '2016-11-05 12:07:48', '2016-11-06 16:29:44', '127.0.0.1', 0, 0),
(28, 'Erico', 'erix', 'erix@wrong.com', '32138791823798', 'ngerix', '8c336d594d8d1c177c349d74dc3fa8896e87ccd6018ce59e00d1e4a32a8934cd1fa26a1b2eeaa4110e681a580930d70e5ddeb2c6125dc2452d9af9226bb43be8GBkifDYt2iAFQ3SieblEzlSg4GH/6nS+qde2MM+cQJk=', 'assets/img/ava/1.png', '2016-11-05 12:13:01', '2016-11-05 12:13:50', '127.0.0.1', 0, 0),
(29, 'test', '123', 'pwnta@onta.com', '9384927384729873948', 'pwnta', '64b3e456349bdec66ad0d71fd3c61460bcce9eef2613f30968b31f0273a51866eb80ac98616e48cfc60893e4933f2a2177d1009c65356e50286cbbf8143d82753hh7Xw6V4fNhaS+1sSizQa5aUj/2RksvkO2y/LpCr0Q=', 'assets/img/ava/1.png', '2016-11-05 12:15:48', '0000-00-00 00:00:00', '', 0, 0),
(30, 'akjkdjakdjajdjal', 'jjakljdklajkldj', 'justalvin@gmail.com', '0937891793771', 'just', 'a082192b573fd0019e3838644588615e2aace97a3e92ade7d8a7e65698a2e309ca5b1c3d28ba0689cdfa2b3748d839b24360e2088f8c1028025b6694efc782e8efwAsfsHkTV1pSqbbNrzjZH8WM2/FNcq6z01Kg9Jcbs=', 'assets/img/ava/1.png', '2016-11-06 18:09:46', '0000-00-00 00:00:00', '', 1, 0),
(31, 'asdkjajdahdhjahjkh', 'hdhajkdhjkshdkjh', 'nitipsempak@gmail.com', '237313123', 'oaseem', '1e240d0a14ad4f07a7540aa6472d185f86b1307ffd7233b02f498e94194bf8ada11c3699bacb5b4d0be4a2e67adfb53d30011d7d2664af0bcc5db741cbdcc15e+toInSqHDaIetezGIRQNk++Le2EOP3KsLCP2sqtkotY=', 'uploads/avatar/onta.jpg', '2016-11-06 18:11:55', '2016-11-16 08:56:45', '127.0.0.1', 1, 0),
(32, '[sjflkslfjs', 'lkjdskl', 'lupanama@gmail.com', '1212323423', 'lupanama', '068d90a3dcb1079d3f2c50b0610e281fcf041e6c4930eed439185315a43067ada4bd74a336d8b5001267a39856c8e1f747ebfda24bc157b4e9c37f3b40942e71ZigLB2ah3GyBbn0O/iPohFa3JBu49+kAsua2UryZvLo=', 'assets/img/ava/1.png', '2016-11-12 09:29:16', '2016-11-12 10:13:18', '127.0.0.1', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
