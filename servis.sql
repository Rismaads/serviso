-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2019 pada 13.59
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
  `id_level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `id_level`) VALUES
(22, 'user1', 'user1', '$2y$10$mXjgMxfnnwPe3jxdMsgxqOTmeCLLI0iwup7CiE61/HpmuFNvNQoQS', 1),
(28, 'admin', 'admin', '$2y$10$6CCC53Iy2KMxTLP7iZukW.awXwV06dj7nB3MEljSXmZL.Q3hRyCbS', 2),
(29, 'risma', 'risma', '$2y$10$TuuYiQVDGtHMjwoxiImt4udN3A1DK9WJQ4pkXOYtqEivauBZN1o02', 1),
(35, 'ayu', 'ayu', '$2y$10$uHcHPqiAqIX1ln5mhXiJh.niq.SnRpLDs9xYq7Ih81Vxh7vndNnLy', 1),
(36, 'admin2', 'admin2', '$2y$10$qVkvp3yS6lUpr/9xqdr7u.8SEOfoAO6MA5wFrMWIGvG95mUCV1JXq', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bengkel`
--

CREATE TABLE `bengkel` (
  `id_bengkel` int(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `jadwal` time DEFAULT NULL,
  `jam_tutup` time NOT NULL,
  `nama_bengkel` varchar(225) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bengkel`
--

INSERT INTO `bengkel` (`id_bengkel`, `stok`, `deskripsi`, `alamat`, `jadwal`, `jam_tutup`, `nama_bengkel`, `foto`) VALUES
(9, 77, 'ghhj', '98', '12:03:00', '02:34:00', 'hjh', '7.jpg'),
(10, 98, 'fhg', 'hgi', '00:03:00', '14:03:00', 'fgg', '52.jpg');

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
(7, '05:00:00', '06:00:00', 9, 'terpakai'),
(8, '06:00:00', '07:00:00', 9, 'tersedia');

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
(2, 'adminnn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(50) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `no_antrian` int(225) NOT NULL,
  `id_bengkel` int(225) NOT NULL,
  `jadwal` datetime DEFAULT NULL,
  `id_unit_sepeda` int(50) NOT NULL,
  `id_admin` int(50) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `no_hp` int(15) NOT NULL,
  `alamat` text NOT NULL,
  `id_jadwal` int(50) NOT NULL,
  `id_bengkel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_sepeda`
--

INSERT INTO `unit_sepeda` (`id_unit_sepeda`, `nama_pelanggan`, `no_polisi`, `jenis_sepeda`, `merk_sepeda`, `kerusakan`, `no_hp`, `alamat`, `id_jadwal`, `id_bengkel`) VALUES
(10, 'Baihaqi', 'N 7639 WI', 'matic', 'Vario', 'Ganti Oli', 2147483647, 'Malang', 8, 9),
(11, 'Baihaqiok', 'N 7639 WI', 'matic', 'Vario', 'Ganti Oli', 2147483647, 'Malang', 8, 9);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_level` (`id_level`) USING BTREE;

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
  ADD UNIQUE KEY `id_bengkel` (`id_bengkel`),
  ADD KEY `id_unit_sepeda` (`id_unit_sepeda`),
  ADD KEY `id_user` (`id_unit_sepeda`) USING BTREE,
  ADD KEY `id_admin` (`id_admin`) USING BTREE;

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
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `bengkel`
--
ALTER TABLE `bengkel`
  MODIFY `id_bengkel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `unit_sepeda`
--
ALTER TABLE `unit_sepeda`
  MODIFY `id_unit_sepeda` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`id_unit_sepeda`) REFERENCES `unit_sepeda` (`id_unit_sepeda`) ON DELETE CASCADE ON UPDATE CASCADE,
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
