-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 03:05 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umikompetisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kompetisi`
--

CREATE TABLE `kompetisi` (
  `id_kompetisi` int(11) NOT NULL,
  `nama_kompetisi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetisi`
--

INSERT INTO `kompetisi` (`id_kompetisi`, `nama_kompetisi`, `deskripsi`, `gambar`, `file`) VALUES
(1, 'Fotografi', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit.  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit quis voluptas natus  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit quis voluptas natus doloremque quod est praesentium pariatur dignissimos cum, aspernatur rem repudiandae? Aliquam rem ipsum sequi culpa vitae omnis voluptas!\r\ndoloremque quod est praesentium pariatur dignissimos cum, aspernatur rem repudiandae? Aliquam rem ipsum sequi culpa vitae omnis voluptas!\r\nSit quis voluptas  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit quis voluptas natus  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit quis voluptas natus doloremque quod est praesentium pariatur dignissimos cum, aspernatur rem repudiandae? Aliquam rem ipsum sequi culpa vitae omnis voluptas!\r\ndoloremque quod est praesentium pariatur dignissimos cum, aspernatur rem repudiandae? Aliquam rem ipsum sequi culpa vitae omnis voluptas!\r\nnatus  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit quis voluptas natus doloremque quod est praesentium pariatur dignissimos cum, aspernatur rem repudiandae? Aliquam rem ipsum sequi culpa vitae omnis voluptas!\r\ndoloremque quod est praesentium pariatur dignissimos cum, aspernatur rem repudiandae? Aliquam rem ipsum sequi culpa vitae omnis voluptas!\r\n', 'fotografi.jpg', ''),
(2, 'Mobile Legend', 'E-sport keren', 'mobille.jpg', ''),
(3, 'Film Pendek', 'Editing Video', 'film.jpg', ''),
(4, 'PES', 'Footbal Player', 'pes.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `validasi_pembayaran` varchar(100) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `id_peserta`, `id_team`, `validasi_pembayaran`, `tgl_pembayaran`, `gambar`) VALUES
(6, 0, 12, 'Terkonfirmasi', '2020-02-23', 'GorbynoSitepu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama_user`, `email`, `image`, `password`, `is_active`) VALUES
(15, 'deni', 'deni@gmail.com', 'home-right.png', '$2y$10$worDhZ4P/.IbvsioEJasweM3N5ij047Kz65KjJ4XqbDbdffP8S35e', '1'),
(16, 'admin', 'admin@gmail.com', 'home-right.png', '$2y$10$ninymRPqVc1IIscMvUGfOuz8p4DHpQ4MtSb8RV3xzr3CLqzfNV6yK', '1');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `nama_team` varchar(100) NOT NULL,
  `institusi` varchar(200) NOT NULL,
  `id_kompetisi` varchar(11) NOT NULL,
  `nama_leader` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `no_wa` varchar(100) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `namaanggota1` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `prodi1` varchar(100) NOT NULL,
  `nim1` varchar(50) NOT NULL,
  `no_wa1` varchar(20) NOT NULL,
  `jenkel1` varchar(15) NOT NULL,
  `namaanggota2` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `prodi2` varchar(100) NOT NULL,
  `nim2` varchar(50) NOT NULL,
  `no_wa2` varchar(20) NOT NULL,
  `jenkel2` varchar(15) NOT NULL,
  `namaanggota3` varchar(100) NOT NULL,
  `email3` varchar(100) NOT NULL,
  `prodi3` varchar(50) NOT NULL,
  `nim3` varchar(20) NOT NULL,
  `no_wa3` varchar(20) NOT NULL,
  `jenkel3` varchar(20) NOT NULL,
  `namaanggota4` varchar(100) NOT NULL,
  `email4` varchar(100) NOT NULL,
  `prodi4` varchar(50) NOT NULL,
  `nim4` varchar(20) NOT NULL,
  `no_wa4` varchar(20) NOT NULL,
  `jenkel4` varchar(20) NOT NULL,
  `namaanggota5` varchar(100) NOT NULL,
  `email5` varchar(100) NOT NULL,
  `prodi5` varchar(50) NOT NULL,
  `nim5` varchar(50) NOT NULL,
  `no_wa5` varchar(20) NOT NULL,
  `jenkel5` varchar(20) NOT NULL,
  `validasi` varchar(100) NOT NULL,
  `filezip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `id_peserta`, `nama_team`, `institusi`, `id_kompetisi`, `nama_leader`, `email`, `prodi`, `nim`, `no_wa`, `jenkel`, `namaanggota1`, `email1`, `prodi1`, `nim1`, `no_wa1`, `jenkel1`, `namaanggota2`, `email2`, `prodi2`, `nim2`, `no_wa2`, `jenkel2`, `namaanggota3`, `email3`, `prodi3`, `nim3`, `no_wa3`, `jenkel3`, `namaanggota4`, `email4`, `prodi4`, `nim4`, `no_wa4`, `jenkel4`, `namaanggota5`, `email5`, `prodi5`, `nim5`, `no_wa5`, `jenkel5`, `validasi`, `filezip`) VALUES
(12, 15, 'keren', 'UMI', '2', 'deni', 'deni@gmail.com', 'SI', '23798434', '00833423', 'Laki-laki', 'gorbyno', 'bynogan@gmail.com', 'SI', '23432423', '0903494', 'Laki-laki', 'Cindy', 'cindy@gmail.com', 'Kedokteran', '899799', '0493', 'Perempuan', 'derii', 'deri@gmail.com', 'TI', '23948234', '0394034', 'Laki-laki', 'adni', 'adni@gmail.com', 'SI', '343423', '0308435', 'Perempuan', '', '', '', '', '', '', 'Terkonfirmasi', 'andro_halasson.zip'),
(13, 16, 'bebeb', 'UMI', '2', 'Gorbyno', 'bynogan@gmail.com', 'SI', '52435', '68989', 'Laki-laki', '', '', '', '', '', 'Laki-laki', '', '', '', '', '', 'Laki-laki', '', '', '', '', '', 'Laki-laki', '', '', '', '', '', 'Laki-laki', '', '', '', '', '', 'Laki-laki', 'Belum Terkonfirmasi', 'GorbynoSitepu.zip');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `image`, `password`, `level`) VALUES
(1, 'Gorbyno sitepu', 'bynogan@gmail.com', 'home-right.png', '$2y$10$rixZvWul.aSH5o./nrpFCuaxKV279R2vb/sniKNDNC02q86zYOEQC', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kompetisi`
--
ALTER TABLE `kompetisi`
  ADD PRIMARY KEY (`id_kompetisi`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kompetisi`
--
ALTER TABLE `kompetisi`
  MODIFY `id_kompetisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
