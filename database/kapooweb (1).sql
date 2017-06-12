-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mei 2017 pada 08.11
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapooweb`
--
CREATE DATABASE IF NOT EXISTS `kapooweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kapooweb`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `Email` varchar(75) NOT NULL,
  `Kode_User` varchar(5) NOT NULL,
  `Nama_client` varchar(75) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Telphone` varchar(12) NOT NULL,
  `Status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtrans`
--

CREATE TABLE `dtrans` (
  `Id_jenis_iklan` varchar(5) NOT NULL,
  `id_trans` varchar(5) NOT NULL,
  `Tipe_iklan` varchar(25) NOT NULL,
  `durasi` int(13) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `harga` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtrans`
--

INSERT INTO `dtrans` (`Id_jenis_iklan`, `id_trans`, `Tipe_iklan`, `durasi`, `tanggal_mulai`, `tanggal_berakhir`, `harga`) VALUES
('IK001', 'TR001', 'Text', 2, '2017-05-23', '2017-06-06', 140000),
('IK001', 'TR002', 'text', 1, '2017-05-22', '2017-05-22', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_user`
--

CREATE TABLE `d_user` (
  `Kode_User` varchar(5) NOT NULL,
  `Nama_user` varchar(75) NOT NULL,
  `Alamat` varchar(75) NOT NULL,
  `Telphone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_user`
--

INSERT INTO `d_user` (`Kode_User`, `Nama_user`, `Alamat`, `Telphone`) VALUES
('US001', 'wiediarta wijaya', 'jl.gading', '085730131009'),
('US002', 'widi', 'jl.gading', '3123123123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `htrans`
--

CREATE TABLE `htrans` (
  `Id_trans` varchar(5) NOT NULL,
  `Kode_User` varchar(5) NOT NULL,
  `Tanggal_transaksi` date NOT NULL,
  `Harga_total` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `htrans`
--

INSERT INTO `htrans` (`Id_trans`, `Kode_User`, `Tanggal_transaksi`, `Harga_total`) VALUES
('TR001', 'US002', '2017-05-22', 140000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_iklan`
--

CREATE TABLE `jenis_iklan` (
  `Id_Jenis_Iklan` varchar(5) NOT NULL,
  `Nama_Jenis_Iklan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_iklan`
--

INSERT INTO `jenis_iklan` (`Id_Jenis_Iklan`, `Nama_Jenis_Iklan`) VALUES
('IK001', 'elektronik'),
('IK002', 'olahraga'),
('IK003', 'ILM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `Kode_Log` varchar(5) NOT NULL,
  `Kode_User` varchar(5) NOT NULL,
  `Keterangan_Log` varchar(50) NOT NULL,
  `Tgl_Log` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `Id_Pegawai` varchar(4) NOT NULL,
  `Nama_Pegawai` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telphone` varchar(13) NOT NULL,
  `Status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Kode_User` varchar(5) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Jabatan` varchar(15) NOT NULL,
  `Status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Kode_User`, `Email`, `Password`, `Jabatan`, `Status`) VALUES
('US001', 'wiediarta.wijaya@gmail.com', '12345678', 'admin', '0'),
('US002', 'widi@gmail.com', '123456', 'User', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dtrans`
--
ALTER TABLE `dtrans`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `d_user`
--
ALTER TABLE `d_user`
  ADD PRIMARY KEY (`Kode_User`);

--
-- Indexes for table `htrans`
--
ALTER TABLE `htrans`
  ADD PRIMARY KEY (`Id_trans`);

--
-- Indexes for table `jenis_iklan`
--
ALTER TABLE `jenis_iklan`
  ADD PRIMARY KEY (`Id_Jenis_Iklan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Kode_User`),
  ADD KEY `Email` (`Password`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
