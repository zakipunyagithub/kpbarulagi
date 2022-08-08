-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2020 pada 14.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp-lumintu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(15) NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'teak'),
(2, 'swar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `komentar`) VALUES
(3, 'abstrak', 'intan@gmail.com', 'jnnnn'),
(4, 'intan ayu aliyaningsih', 'intan@gmail.com', 'okeee dicoba memberikan komentar'),
(5, 'admin', 'intan@gmail.com', 'wes iso i lhoooo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(15) NOT NULL,
  `nama_produk` varchar(40) NOT NULL,
  `id_kategori` int(15) NOT NULL,
  `harga_produk` int(30) NOT NULL,
  `foto_produk` varchar(300) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `id_kategori`, `harga_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(10, 'abstrak', 1, 5000000, 'Abstack teak wood..p.150 x50x200cm hrg 5jt.jpeg', 'abstrak	teak wood ukuran 150cm x 50cm x 200cm																				'),
(11, 'deco swar wood ', 2, 750000, 'Deco swar wood p.30x7x80cm hrg 80cm hrg 750rb.jpeg', 'deco swar wood ukuran 30cm x 80cm'),
(12, 'deco teak wood ', 1, 400000, 'Deco teak wood p.40x10x60cm hrg 400rb.jpeg', 'deco teak wood  ukuran 40cm x 10cm x 60cm					');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_toko` int(15) NOT NULL,
  `tentang_toko` text NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `maps` text NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_toko`, `tentang_toko`, `alamat`, `no_tlp`, `maps`, `foto`) VALUES
(13, 'Toko Kerajinan Kayu	', 'Jl Jogja-Magelang Km 23 Jumoyo, Salam, Magelang, Jawa Tengah				', '0895363315360', '		<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3954.6057774610863!2d110.3073806!3d-7.6178022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8bf67febc4cb%3A0x1f4c91a8998747f8!2sLumintu%20Gallery!5e0!3m2!1sid!2sid!4v1582636892810!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>				', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3954.6057774610863!2d110.3073806!3d-7.6178022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8bf67febc4cb%3A0x1f4c91a8998747f8!2sLumintu%20Gallery!5e0!3m2!1sid!2sid!4v1582636892810!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" styl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `foto_admin` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `foto_admin`, `email`, `no_hp`, `alamat`) VALUES
(1, 'intan', 'intan', 'Lumintu Gallery', 'images1.jpg', 'intanayupltnm@gmail.com', '082136789285', 'Jl. Jogja-Magelang Km 23			');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_toko` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
