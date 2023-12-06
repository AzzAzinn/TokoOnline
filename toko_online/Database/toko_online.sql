-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 09.43
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembelian_game`
--

CREATE TABLE `detail_pembelian_game` (
  `id_detail_pembelian_game` int(11) NOT NULL,
  `id_pembelian_game` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_pembelian_game`
--

INSERT INTO `detail_pembelian_game` (`id_detail_pembelian_game`, `id_pembelian_game`, `id_game`, `id_user`, `qty`) VALUES
(38, 31, 11, 16, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `game`
--

CREATE TABLE `game` (
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(100) NOT NULL,
  `developer` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal_release` date NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `game`
--

INSERT INTO `game` (`id_game`, `nama_game`, `developer`, `deskripsi`, `foto`, `tanggal_release`, `publisher`, `harga`) VALUES
(11, 'Sepatu', 'Skyline', 'Sepatu mahal', 'sepatu.png', '2023-12-13', 'iya', 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_game`
--

CREATE TABLE `pembelian_game` (
  `id_pembelian_game` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian_game`
--

INSERT INTO `pembelian_game` (`id_pembelian_game`, `id_user`, `tanggal_beli`) VALUES
(31, 16, '2023-12-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `penjual` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_beli`
--

CREATE TABLE `status_beli` (
  `id_status_beli` int(11) NOT NULL,
  `id_pembelian_game` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `status_beli`
--

INSERT INTO `status_beli` (`id_status_beli`, `id_pembelian_game`, `tanggal_pembelian`) VALUES
(22, 31, '2023-12-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` enum('pelanggan','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_pelanggan`, `tanggal_lahir`, `gender`, `alamat`, `username`, `pass`, `level`) VALUES
(15, 'Joko', '2023-10-20', 'L', 'Pasuruan', 'nein', '9', 'admin'),
(16, 'Faruq\r\n', '2023-10-26', 'L', 'Tulungagung', 'ADMIN', '123', 'admin'),
(17, 'Tes2', '2023-10-18', 'P', 'eee', 'tes2', '123', 'pelanggan'),
(18, 'tes3', '2023-10-18', 'L', 'ddd', 'tes3', '123', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pembelian_game`
--
ALTER TABLE `detail_pembelian_game`
  ADD PRIMARY KEY (`id_detail_pembelian_game`),
  ADD KEY `id_pembelian_game` (`id_pembelian_game`,`id_game`),
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indeks untuk tabel `pembelian_game`
--
ALTER TABLE `pembelian_game`
  ADD PRIMARY KEY (`id_pembelian_game`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `status_beli`
--
ALTER TABLE `status_beli`
  ADD PRIMARY KEY (`id_status_beli`),
  ADD KEY `id_pembelian_game` (`id_pembelian_game`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pembelian_game`
--
ALTER TABLE `detail_pembelian_game`
  MODIFY `id_detail_pembelian_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pembelian_game`
--
ALTER TABLE `pembelian_game`
  MODIFY `id_pembelian_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_beli`
--
ALTER TABLE `status_beli`
  MODIFY `id_status_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pembelian_game`
--
ALTER TABLE `detail_pembelian_game`
  ADD CONSTRAINT `detail_pembelian_game_ibfk_1` FOREIGN KEY (`id_pembelian_game`) REFERENCES `pembelian_game` (`id_pembelian_game`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pembelian_game_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pembelian_game_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `pembelian_game` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian_game`
--
ALTER TABLE `pembelian_game`
  ADD CONSTRAINT `pembelian_game_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `status_beli`
--
ALTER TABLE `status_beli`
  ADD CONSTRAINT `status_beli_ibfk_1` FOREIGN KEY (`id_pembelian_game`) REFERENCES `detail_pembelian_game` (`id_pembelian_game`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
