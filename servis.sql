-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Nov 2019 pada 12.31
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bengkel`
--

CREATE TABLE `bengkel` (
  `id_bengkel` int(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `jadwal` datetime NOT NULL,
  `nama_bengkel` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bengkel`
--

INSERT INTO `bengkel` (`id_bengkel`, `deskripsi`, `alamat`, `jadwal`, `nama_bengkel`) VALUES
(3, 'aa', 'a', '2019-11-08 00:00:00', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_pelanggan` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` int(225) NOT NULL,
  `id_bengkel` int(225) NOT NULL,
  `jadwal` datetime NOT NULL,
  `id_unit_sepeda` int(50) NOT NULL,
  `id_admin` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(50) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nomer_hp` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_lengkap`, `password`, `nomer_hp`, `email`, `alamat`) VALUES
(1, 'risma ayu', 'risma', 81334558, 'risma @gmail.com', 'ediiaa'),
(5, 'aasa', '', 12244, 'yusufsurya87@gmail.com', 'sjdhsj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_sepeda`
--

CREATE TABLE `unit_sepeda` (
  `id_unit_sepeda` int(50) NOT NULL,
  `id_pelanggan` int(50) NOT NULL,
  `no_polisi` varchar(225) NOT NULL,
  `jenis_sepeda` varchar(225) NOT NULL,
  `merk_sepeda` varchar(225) NOT NULL,
  `kerusakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_sepeda`
--

INSERT INTO `unit_sepeda` (`id_unit_sepeda`, `id_pelanggan`, `no_polisi`, `jenis_sepeda`, `merk_sepeda`, `kerusakan`) VALUES
(2, 5, 'a', 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bengkel`
--
ALTER TABLE `bengkel`
  ADD PRIMARY KEY (`id_bengkel`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD UNIQUE KEY `id_user` (`id_pelanggan`,`id_unit_sepeda`),
  ADD UNIQUE KEY `id_bengkel` (`id_bengkel`),
  ADD UNIQUE KEY `id_admin` (`id_admin`),
  ADD KEY `id_unit_sepeda` (`id_unit_sepeda`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `unit_sepeda`
--
ALTER TABLE `unit_sepeda`
  ADD PRIMARY KEY (`id_unit_sepeda`),
  ADD UNIQUE KEY `id_pelanggan` (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bengkel`
--
ALTER TABLE `bengkel`
  MODIFY `id_bengkel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unit_sepeda`
--
ALTER TABLE `unit_sepeda`
  MODIFY `id_unit_sepeda` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`id_bengkel`) REFERENCES `bengkel` (`id_bengkel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_ibfk_3` FOREIGN KEY (`id_unit_sepeda`) REFERENCES `unit_sepeda` (`id_unit_sepeda`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_ibfk_4` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `unit_sepeda`
--
ALTER TABLE `unit_sepeda`
  ADD CONSTRAINT `unit_sepeda_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
