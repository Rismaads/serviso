-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Des 2019 pada 17.24
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
-- Database: `serviso`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id_level` int(50) DEFAULT NULL,
  `id_bengkel` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `id_level`, `id_bengkel`) VALUES
(44, 'dwi', 'ok', '$2y$10$AfKSonZzMMECp2LggYRNQ.tPDjkNlmhMcHinMPhIrBsVxmRio9sGq', 1, NULL),
(46, 'Fani', 'fani', '$2y$10$PyMEEGExX7cnui6yYPWYUOZgYhM2Xx.UHep.Jzvt7iNaxIs3PMhOW', 3, 18),
(47, 'mutiara', 'mutiara', '$2y$10$WdTSY.DD5NPqdhv4ij4ljur84qtTw3PjYdVZrh73NVnCpuXFCxtTi', 2, NULL),
(48, 'haqi', 'haqi', '$2y$10$U9DAp/oqiuYFOZFml9UtueDOkvVOvmbSkMvuKRpODNN7LqqkLCd5m', 2, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bengkel`
--

CREATE TABLE `bengkel` (
  `id_bengkel` int(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `jadwal` time DEFAULT NULL,
  `jam_tutup` time NOT NULL,
  `nama_bengkel` varchar(225) NOT NULL,
  `foto` text NOT NULL,
  `maps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bengkel`
--

INSERT INTO `bengkel` (`id_bengkel`, `deskripsi`, `alamat`, `jadwal`, `jam_tutup`, `nama_bengkel`, `foto`, `maps`) VALUES
(18, 'bengkel resmi terpercaya', 'mlg', '10:00:00', '11:00:00', 'Bengkel Honda', 'blog-image65.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.110513672797!2d112.65562119703193!3d-7.970233465280335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628429f6bfb7b%3A0xfd7c6bab532a0120!2sAhass%20Sawojajar%2013195!5e0!3m2!1sid!2sid!4v15'),
(19, 'bengkel resmi terpercaya', 'Malang', '11:00:00', '12:00:00', 'Bengkel Ahass', 'blog-image72.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.110513672797!2d112.65562119703193!3d-7.970233465280335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628429f6bfb7b%3A0xfd7c6bab532a0120!2sAhass%20Sawojajar%2013195!5e0!3m2!1sid!2sid!4v15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(50) NOT NULL,
  `jadwal_mulai` time NOT NULL,
  `jadwal_selesai` time NOT NULL,
  `id_bengkel` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `jadwal_mulai`, `jadwal_selesai`, `id_bengkel`, `status`) VALUES
(3, '05:00:00', '07:00:00', 18, 'terpakai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(50) NOT NULL,
  `nama_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'pelanggan'),
(2, 'adminnn'),
(3, 'admin bengkel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_bengkel` int(225) NOT NULL,
  `id_admin` int(50) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nota`
--

INSERT INTO `nota` (`id_nota`, `nama_pelanggan`, `tanggal`, `id_bengkel`, `id_admin`, `keterangan`) VALUES
(39, 'ok', '2019-12-03', 18, 46, 'diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_sepeda`
--

CREATE TABLE `unit_sepeda` (
  `id_unit_sepeda` int(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `no_polisi` varchar(225) NOT NULL,
  `jenis_sepeda` varchar(225) NOT NULL,
  `merk_sepeda` varchar(225) NOT NULL,
  `kerusakan` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `id_jadwal` int(50) NOT NULL,
  `id_bengkel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_sepeda`
--

INSERT INTO `unit_sepeda` (`id_unit_sepeda`, `nama_pelanggan`, `no_polisi`, `jenis_sepeda`, `merk_sepeda`, `kerusakan`, `no_hp`, `alamat`, `id_jadwal`, `id_bengkel`) VALUES
(49, 'ok', '12adsds', 'honda', 'beat', 'ban', '08882222', '123', 3, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_level` (`id_level`) USING BTREE,
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indexes for table `bengkel`
--
ALTER TABLE `bengkel`
  ADD PRIMARY KEY (`id_bengkel`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_admin` (`id_admin`) USING BTREE,
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indexes for table `unit_sepeda`
--
ALTER TABLE `unit_sepeda`
  ADD PRIMARY KEY (`id_unit_sepeda`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `bengkel`
--
ALTER TABLE `bengkel`
  MODIFY `id_bengkel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `unit_sepeda`
--
ALTER TABLE `unit_sepeda`
  MODIFY `id_unit_sepeda` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_bengkel`) REFERENCES `bengkel` (`id_bengkel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_bengkel`) REFERENCES `bengkel` (`id_bengkel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_ibfk_3` FOREIGN KEY (`id_bengkel`) REFERENCES `bengkel` (`id_bengkel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `unit_sepeda`
--
ALTER TABLE `unit_sepeda`
  ADD CONSTRAINT `unit_sepeda_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unit_sepeda_ibfk_2` FOREIGN KEY (`id_bengkel`) REFERENCES `bengkel` (`id_bengkel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
