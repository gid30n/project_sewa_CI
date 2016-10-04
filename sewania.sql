-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 05 Okt 2016 pada 06.26
-- Versi Server: 10.1.17-MariaDB
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewania`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ads`
--

CREATE TABLE `tb_ads` (
  `id_ads` int(11) NOT NULL,
  `title` text NOT NULL,
  `descript` tinytext NOT NULL,
  `ranting` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date_publish` datetime NOT NULL,
  `id_business_profile` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sub_kategori` int(11) NOT NULL,
  `id_super_sub_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(11) NOT NULL,
  `path` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_business_profile`
--

CREATE TABLE `tb_business_profile` (
  `id_business_profile` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `type_service` text NOT NULL,
  `address` text NOT NULL,
  `id_province` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `description` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_business_profile`
--

INSERT INTO `tb_business_profile` (`id_business_profile`, `brand_name`, `type_service`, `address`, `id_province`, `id_region`, `description`, `id_user`) VALUES
(1, 'uik dev', 'tes', 'jl anu', 1, 6, 'tes', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallerys`
--

CREATE TABLE `tb_gallerys` (
  `id_gallery` int(11) NOT NULL,
  `title` text NOT NULL,
  `alt` text NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `name`) VALUES
(1, 'Peralatan Pesta'),
(2, 'Paket Pesta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_province`
--

CREATE TABLE `tb_province` (
  `id_province` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tb_region` (
  `id_region` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_province` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Struktur dari tabel `tb_sub_kategori`
--

CREATE TABLE `tb_sub_kategori` (
  `id_sub_kategori` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_sub_kategori`
--

INSERT INTO `tb_sub_kategori` (`id_sub_kategori`, `name`, `id_kategori`) VALUES
(1, 'Tenda', 1),
(2, 'Kursi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_super_sub_kategori`
--

CREATE TABLE `tb_super_sub_kategori` (
  `id_super_sub_kategori` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_sub_kategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_super_sub_kategori`
--

INSERT INTO `tb_super_sub_kategori` (`id_super_sub_kategori`, `name`, `id_sub_kategori`, `id_kategori`) VALUES
(1, 'Tenda Krucut', 1, 1),
(2, 'Tenda Dekorasi', 1, 1),
(3, 'Kursi Spon', 2, 1),
(4, 'Kursi Plastik', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `joined` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `ip_last` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `first_name`, `last_name`, `email`, `password`, `joined`, `last_login`, `ip_last`, `admin`) VALUES
(2, 'Komang', 'Suryadana', 'suryadana80@gmail.com', '8821716db3b4a9e6708a792da936df9357bb9b455e1600354c54d2009e6deb4275fc1224d33989452af7214bfbccde878174fc56d562ecfcc6f68c08a4fbef4e8pzcODt1xyBIbsuUc9phVgFc4C5RaUTMD1SXm+EdLhA=', '0000-00-00 00:00:00', '2016-10-05 03:19:48', '127.0.0.1', 1),
(15, 'Mikel', 'Eric', 'pendekar_langit@protonmail.com', 'dd314dadda935008202a1d1028e923bc0d0bbd209f7731c81288a63004802f6b141177df154f46e49e898d602a315bd54e13046c92ce34ced5398003546e50e9Q5h49Ebb2KNtmxotuzWfhJZQzx2jhu6FKyGJByrUawM=', '2016-10-01 18:53:19', '2016-10-05 03:18:38', '127.0.0.1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ads`
--
ALTER TABLE `tb_ads`
  ADD PRIMARY KEY (`id_ads`);

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tb_business_profile`
--
ALTER TABLE `tb_business_profile`
  ADD PRIMARY KEY (`id_business_profile`);

--
-- Indexes for table `tb_gallerys`
--
ALTER TABLE `tb_gallerys`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_province`
--
ALTER TABLE `tb_province`
  ADD PRIMARY KEY (`id_province`);

--
-- Indexes for table `tb_region`
--
ALTER TABLE `tb_region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indexes for table `tb_sub_kategori`
--
ALTER TABLE `tb_sub_kategori`
  ADD PRIMARY KEY (`id_sub_kategori`);

--
-- Indexes for table `tb_super_sub_kategori`
--
ALTER TABLE `tb_super_sub_kategori`
  ADD PRIMARY KEY (`id_super_sub_kategori`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ads`
--
ALTER TABLE `tb_ads`
  MODIFY `id_ads` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_business_profile`
--
ALTER TABLE `tb_business_profile`
  MODIFY `id_business_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_gallerys`
--
ALTER TABLE `tb_gallerys`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_province`
--
ALTER TABLE `tb_province`
  MODIFY `id_province` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_region`
--
ALTER TABLE `tb_region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_sub_kategori`
--
ALTER TABLE `tb_sub_kategori`
  MODIFY `id_sub_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_super_sub_kategori`
--
ALTER TABLE `tb_super_sub_kategori`
  MODIFY `id_super_sub_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
