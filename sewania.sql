-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 12 Sep 2016 pada 09.15
-- Versi Server: 5.5.50-0ubuntu0.14.04.1
-- Versi PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `sewania`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_business_profile`
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
-- Dumping data untuk tabel `tb_business_profile`
--

INSERT INTO `tb_business_profile` (`id_business_profile`, `brand_name`, `type_service`, `address`, `id_province`, `id_region`, `description`, `id_user`) VALUES
(1, 'uik dev', 'tes', 'jl anu', 1, 6, 'tes', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_province`
--

CREATE TABLE IF NOT EXISTS `tb_province` (
  `id_province` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_province`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_province`
--

INSERT INTO `tb_province` (`id_province`, `name`) VALUES
(1, 'Bali'),
(2, 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_region`
--

CREATE TABLE IF NOT EXISTS `tb_region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_province` int(11) NOT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `tb_region`
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
-- Struktur dari tabel `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `first_name`, `last_name`, `email`, `password`) VALUES
(2, 'Anu', 'Uik', 'suryadana80@gmail.com', 'tes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
