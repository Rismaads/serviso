-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2019 pada 22.23
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

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
(49, 'admin', 'admin', '$2y$10$eLYW9Yk6YX.M5BO5yACzWOzhyg8ejkPJp6fu1RaeC/LjnnRRXe6OS', 2, NULL),
(50, 'pelanggan', 'pelanggan', '$2y$10$OBSUrbCNF3ouwr7N6wskjuX6H6PCeAtQo8B7O1uu9WxdUsgst/6hy', 1, NULL),
(51, 'adminbengkel', 'adminbengkel', '$2y$10$470VCempAEyJMZcrFif1M.AsG7meqrFaQka7V9/ZY.iZHZhp5atu2', 3, NULL);

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
(19, 'bengkel resmi terpercaya', 'Malang', '11:00:00', '12:00:00', 'Bengkel Ahass', 'blog-image72.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.110513672797!2d112.65562119703193!3d-7.970233465280335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628429f6bfb7b%3A0xfd7c6bab532a0120!2sAhass%20Sawojajar%2013195!5e0!3m2!1sid!2sid!4v15'),
(20, 'Bengkel terdekat dengan biaya sesuai kantong anda.', 'Jalan Danau Kerinci 4', '10:00:00', '17:00:00', 'honda', 'blog-image712.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63220.83732636718!2d112.59498079687378!3d-7.967674480848586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62840574cde0b%3A0xca5f0a42dab56fac!2sBengkel%20Honda!5e0!3m2!1sen!2sid!4v1575427888731');

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
(3, '05:00:00', '07:00:00', 18, 'terpakai'),
(8, '14:00:00', '15:00:00', 18, 'tersedia'),
(9, '12:00:00', '17:00:00', 19, 'tersedia'),
(10, '12:00:00', '13:00:00', 20, 'tersedia');

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
(42, 'pelanggan', '2019-12-04', 18, 51, 'diterima'),
(43, 'pelanggan', '2019-12-04', 19, NULL, 'pending'),
(44, 'pelanggan', '2019-12-05', 20, NULL, 'pending');

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
(52, 'pelanggan', 'N 7639 WI', 'Honda', 'Scoopy', 'Oli', '081334574233', 'malang', 3, 18),
(53, 'pelanggan', 'trydy6', 'matic', 'Vario', 'Ganti ban', '0898765434', 'Jalan Jalan', 9, 19),
(54, 'pelanggan', 'rtyui', 'revo', 'yamahag', 'Ganti ban', '09875323567', 'jalan jalan', 10, 20);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_level` (`id_level`) USING BTREE,
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indeks untuk tabel `bengkel`
--
ALTER TABLE `bengkel`
  ADD PRIMARY KEY (`id_bengkel`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_admin` (`id_admin`) USING BTREE,
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- Indeks untuk tabel `unit_sepeda`
--
ALTER TABLE `unit_sepeda`
  ADD PRIMARY KEY (`id_unit_sepeda`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_bengkel` (`id_bengkel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `bengkel`
--
ALTER TABLE `bengkel`
  MODIFY `id_bengkel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `unit_sepeda`
--
ALTER TABLE `unit_sepeda`
  MODIFY `id_unit_sepeda` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
