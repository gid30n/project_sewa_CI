-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 15 Nov 2016 pada 20.17
-- Versi Server: 10.1.19-MariaDB
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
-- Struktur dari tabel `tb_detail_order`
--

CREATE TABLE `tb_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_ads` int(11) NOT NULL,
  `jum_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_detail_order`
--

INSERT INTO `tb_detail_order` (`id_detail_order`, `id_order`, `id_ads`, `jum_item`) VALUES
(1, 3, 51, 3),
(2, 4, 50, 1),
(3, 4, 51, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `nama` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `ket` text NOT NULL,
  `date_order` datetime NOT NULL,
  `status_order` enum('new','process','valid','invalid','pending','success') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `nama`, `no_telp`, `email`, `alamat`, `ket`, `date_order`, `status_order`) VALUES
(1, 'Komang Surya Bagus', '085737691069', 'suryadana80@gmail.com', 'Jl Kunti Utara', 'sory bang ane pengen cepet', '2016-11-15 18:34:29', ''),
(2, 'Komang Surya Bagus', '085737691069', 'suryadana80@gmail.com', 'Jl Kunti Utara', 'sory bang ane pengen cepet', '2016-11-15 18:35:22', ''),
(3, 'Komang Surya Bagus', '085737691069', 'suryadana80@gmail.com', 'Jl Kunti Utara', 'sory bang ane pengen cepet', '2016-11-15 18:39:24', 'new'),
(4, 'Dewa Mahendra', '90930238920', 'onta_dewe@gmail.com', 'Jl Danau Tempe', 'Ingin cewek seksi bahenol', '2016-11-15 19:14:16', 'new');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  ADD PRIMARY KEY (`id_detail_order`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
