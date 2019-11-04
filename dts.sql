-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2019 pada 10.40
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama_lengkap`, `password`, `email`) VALUES
(1, 'devanta', 'Devanta Abraham Tarigan', 'devanta13', 'devanta.at@polmed.ac.id'),
(2, 'kristian ', 'Kristian Tarigan', 'kristian', 'kristian1@gmail.com'),
(3, 'Fahriz', 'Fahriz Ramdahan', 'fahriz', 'fahrizramadhan@gmail.com'),
(4, 'Fahriz', 'Fahriz Ramdahan', 'fahriz', 'fahrizramadhan@gmail.com'),
(5, 'Fahriz', 'Fahriz Ramdahan', 'fahriz', 'fahrizramadhan@gmail.com'),
(6, 'admin', 'Devanta Abraham Tarigan1', '123', 'fadhillahnisa41@gmail.com'),
(7, 'admin', 'Devanta Abraham Tarigan1', '123', 'fadhillahnisa41@gmail.com'),
(8, 'admin', 'Devanta Abraham Tarigan1', '123', 'fadhillahnisa41@gmail.com'),
(9, 'Mukidi', 'Mukidi Hariansyah', 'muki123', 'muki@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
