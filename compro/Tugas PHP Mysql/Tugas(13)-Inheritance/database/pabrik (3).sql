-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2022 pada 20.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pabrik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `qty`) VALUES
(1, 'Ballpoint Standart E-7', 2000, 16),
(2, 'Spidol Snowman White Board Marker', 7000, 40),
(3, 'Pensil Faber Castell Set Standar', 12000, 8),
(17, 'Alat Staples Kenko', 78000, 19),
(18, 'Ballpoint Standard AE-7', 195000, 140),
(19, 'Buku Tulis Sinar Dunia 32', 23000, 5),
(20, 'Cutter Besar', 14000, 50),
(21, 'Isolasi Nachi Kecil Tipis', 8500, 12),
(22, 'Tip Ex Kenko', 49000, 12),
(24, 'Lakban Nachi Tebal', 11000, 89),
(29, 'Alat Staples Max', 124000, 10),
(30, 'Amplop Merpati Kecil', 33500, 30),
(31, 'Amplop Merpati Panjang', 81000, 5),
(32, 'Amplop Merpati Tanggung Biru', 54000, 18),
(33, 'Amplop Merpati Tanggung Merah', 59000, 5),
(34, 'Amplop Paperline Panjang Polos', 99000, 5),
(35, 'Ballpoint Greebel', 27500, 12),
(36, 'Block Note Garis Kecil', 22000, 15),
(37, 'Block Note Polos Kecil', 21500, 12),
(38, 'Isolasi Hitam Gold Tape', 7700, 50),
(39, 'Isolasi Nachi ½ inch', 41000, 12),
(40, 'Isolasi Nachi 1 inch', 41000, 6),
(41, 'Buku Gambar A3', 20000, 20),
(42, 'Buku Gambar A4', 23500, 20),
(43, 'Buku Tulis Halus', 17800, 50),
(44, 'Buku Tulis Sinar Dunia 32', 23500, 40),
(45, 'Buku Tulis Sinar Dunia 38', 29000, 32),
(47, 'Buku Tulis Sinar Dunia 58', 40000, 24),
(48, 'Cutter Kecil', 9500, 50),
(49, 'Cutter Besar', 14500, 37),
(51, 'Gunting Gunindo Kecil', 42000, 12),
(52, 'Gunting Gunindo Tanggung', 52500, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`) VALUES
(1, 'Jeremy', 'juliobessisura1083@gmail.com'),
(2, 'Mentor Pelita', 'mentorpelita@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
