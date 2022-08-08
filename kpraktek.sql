-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20 Jul 2022 pada 13.59
-- Versi Server: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpraktek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_jamu`
--

CREATE TABLE `bahan_jamu` (
  `id` int(11) NOT NULL,
  `arah` varchar(111) DEFAULT NULL,
  `isi` text NOT NULL,
  `foto` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bahan_jamu`
--

INSERT INTO `bahan_jamu` (`id`, `arah`, `isi`, `foto`) VALUES
(10, '', '<p><strong>Jahe</strong> (<i>Zingiber officinale</i>), adalah tumbuhan yang <a href=\"https://id.wikipedia.org/wiki/Rimpang\">rimpang</a>nya sering digunakan sebagai <a href=\"https://id.wikipedia.org/wiki/Rempah-rempah\">rempah-rempah</a> dan bahan baku <a href=\"https://id.wikipedia.org/wiki/Obat_tradisional\">pengobatan tradisional</a>. Rimpangnya berbentuk jemari yang menggembung di ruas-ruas tengah. Rasa dominan pedas yang dirasakan dari jahe disebabkan oleh senyawa <a href=\"https://id.wikipedia.org/wiki/Keton\">keton</a> bernama <a href=\"https://id.wikipedia.org/w/index.php?title=Zingeron&amp;action=edit&amp;redlink=1\">zingeron</a>.</p><p>Jahe termasuk dalam <a href=\"https://id.wikipedia.org/wiki/Famili_(biologi)\">famili</a> <a href=\"https://id.wikipedia.org/wiki/Zingiberaceae\">Zingiberaceae</a> (temu-temuan).<a href=\"https://id.wikipedia.org/wiki/Jahe#cite_note-2\">[2]</a> Nama ilmiah jahe diberikan oleh William Roxburgh. (Wikipedia)</p>', 'download.jpg'),
(11, 'order-lg-2', '<p><strong>Ketumbar</strong> (<i>Coriandrum sativum</i>) adalah tumbuhan rempah-rempah yang populer. Buahnya yang kecil dikeringkan dan diperdagangkan, baik digerus maupun tidak. Bentuk yang tidak digerus mirip dengan lada, seperti biji kecil-kecil berdiameter 1-2 <a href=\"https://id.wikipedia.org/wiki/Milimeter\">mm</a>. Ketumbar mempunyai aroma yang khas. Aroma ini disebabkan oleh komponen kimia yang terdapat dalam minyak atsiri ketumbar. Komponen utama minyak atsir ketumbar adalah linalool, dengan komponen pendukung lainnya seperti geraniol, geranil asetat dan camphor.<a href=\"https://id.wikipedia.org/wiki/Ketumbar#cite_note-:1-1\">[1]</a></p><p>Dalam perdagangan obat ia dinamakan <i>fructus coriandri</i>. Dalam <a href=\"https://id.wikipedia.org/wiki/Bahasa_Inggris\">bahasa Inggris</a> dikenal sebagai <i>coriander</i> dan di <a href=\"https://id.wikipedia.org/wiki/Amerika_Latin\">Amerika Latin</a> dikenal sebagai <i>cilantro</i>. Tumbuhan ini berasal dari <a href=\"https://id.wikipedia.org/wiki/Eropa\">Eropa</a> Selatan dan sekitar Laut Kaspia.</p>', '084879600_1591625557-biji-ketumbar-7999182.jpg'),
(12, '', '<p>Kunyit adalah rempah-rempah yang biasa digunakan dalam masakan di negara-negara Asia. Kunyit sering digunakan sebagai bumbu dalam masakan sejenis <a href=\"https://id.wikipedia.org/wiki/Gulai\">gulai</a>, dan juga digunakan untuk memberi <a href=\"https://id.wikipedia.org/wiki/Warna\">warna</a> kuning pada masakan, atau sebagai pengawet.<a href=\"https://id.wikipedia.org/wiki/Kunyit#cite_note-a-2\">[2]</a> Produk farmasi berbahan baku kunyit, mampu bersaing dengan berbagai obat paten, misalnya untuk peradangan sendi (<a href=\"https://id.wikipedia.org/wiki/Arthritis\">arthritis</a>-<a href=\"https://id.wikipedia.org/w/index.php?title=Rheumatoid&amp;action=edit&amp;redlink=1\">rheumatoid</a>) atau osteo-arthritis berbahan aktif <a href=\"https://en.wikipedia.org/wiki/sodium_diclofenac\">natrium deklofenak</a>, <a href=\"https://en.wikipedia.org/wiki/piroxicam\">piroksikam</a>, dan <a href=\"https://en.wikipedia.org/wiki/phenyl_butasone\">fenil butason</a> dengan harga yang relatif mahal atau suplemen makanan (Vitamin-plus) dalam bentuk kapsul.</p><p>Produk bahan jadi dari ekstrak kunyit berupa suplemen makanan dalam bentuk kapsul (Vitamin-plus) pasar dan industrinya sudah berkembang. Suplemen makanan dibuat dari bahan baku ekstrak kunyit dengan bahan tambahan Vitamin B1, B2, B6, B12, <a href=\"https://id.wikipedia.org/wiki/Vitamin_E\">Vitamin E</a>, <a href=\"https://id.wikipedia.org/wiki/Lesitin\">Lesitin</a>, <a href=\"https://id.wikipedia.org/w/index.php?title=Amprotab&amp;action=edit&amp;redlink=1\">Amprotab</a>, <a href=\"https://id.wikipedia.org/w/index.php?title=Mg-stearat&amp;action=edit&amp;redlink=1\">Mg-stearat</a>, <a href=\"https://id.wikipedia.org/w/index.php?title=Nepagin&amp;action=edit&amp;redlink=1\">Nepagin</a> dan <a href=\"https://id.wikipedia.org/w/index.php?title=Kolidon_90&amp;action=edit&amp;redlink=1\">Kolidon 90</a>.<a href=\"https://id.wikipedia.org/wiki/Kunyit#cite_note-3\">[3]</a></p>', 'kunyit.jpg'),
(13, 'order-lg-2', '<p><strong>Kencur</strong><a href=\"https://id.wikipedia.org/wiki/Kencur#cite_note-KBBID_kencur-1\">[1]</a><i> </i>atau <strong>cekur</strong><a href=\"https://id.wikipedia.org/wiki/Kencur#cite_note-KBBID_cekur-2\">[2]</a> (<i>Kaempferia galanga</i>) adalah tanaman yang mempunyai akar batang yang tertanam di dalam tanah, biasa dipakai untuk bahan rempah-rempah dan ramuan obat;<a href=\"https://id.wikipedia.org/wiki/Kencur#cite_note-KBBID_kencur-1\">[1]</a><a href=\"https://id.wikipedia.org/wiki/Kencur#cite_note-KBBID_cekur-2\">[2]</a> Tanaman ini termasuk dalam kingdom Plantae,&nbsp; sub kingdom: Phanerogamae, divisi: Spermatophyta, sub divisi: Angiospermae, kelas: Monocotyledonae, seri: Epigynae, ordo: Scitaminales, keluarga: Zingiberaceae, genus: Kaempferiam, spesies: galanga. Bagian tanaman kencur yang sering digunakan adalah rimpang, akar dan daun.<a href=\"https://id.wikipedia.org/wiki/Kencur#cite_note-:0-3\">[3]</a></p>', '5e4022961a9d8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `link_youtube` varchar(250) NOT NULL,
  `teks_tengah_atas` text NOT NULL,
  `gambar_kanan_atas` varchar(250) NOT NULL,
  `teks_kanan_atas` text NOT NULL,
  `teks_kanan_atas_bawahnya` text NOT NULL,
  `gambar_kiri1` varchar(250) NOT NULL,
  `teks_kiri1` text NOT NULL,
  `gambar_kanan1` varchar(250) NOT NULL,
  `teks_kanan1` text NOT NULL,
  `gambar_kiri2` varchar(250) NOT NULL,
  `teks_kiri2` text NOT NULL,
  `gambar_kanan2` varchar(250) NOT NULL,
  `teks_kanan2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `link_youtube`, `teks_tengah_atas`, `gambar_kanan_atas`, `teks_kanan_atas`, `teks_kanan_atas_bawahnya`, `gambar_kiri1`, `teks_kiri1`, `gambar_kanan1`, `teks_kanan1`, `gambar_kiri2`, `teks_kiri2`, `gambar_kanan2`, `teks_kanan2`) VALUES
(1, 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(19, 'Botol Besar'),
(20, 'Botol Kecil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_youtube`
--

CREATE TABLE `link_youtube` (
  `id` int(11) NOT NULL,
  `link_youtube` text NOT NULL,
  `judul_youtube` text NOT NULL,
  `keterangan_youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `link_youtube`
--

INSERT INTO `link_youtube` (`id`, `link_youtube`, `judul_youtube`, `keterangan_youtube`) VALUES
(1, 'https://www.youtube.com/embed/6Vzvi6aIh20', 'Produk Produk Mujamu Premio', '<p>terdiri dari sebagai berikut:</p><ul><li>Beras Kencur</li><li>Kunir Asem</li><li>Gula Asem</li></ul>'),
(2, 'https://www.youtube.com/embed/E2jxDy-n-Xw', 'Mas Evan dan Mujamu Premio', '<p>Interaksi Mas Evan dengan penikmat Mujamu Premio</p>'),
(3, 'https://www.youtube.com/embed/tqxSjs3894M', 'Pembeli Mujamu Premio', '<p>Dokumentasi pembeli Mujamu Premio dari berbagai segmen masyarakat</p>');

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
(16, 'Ririn', 'admin@gmail.com', 'Ini Bagus'),
(17, 'Angelina', 'angelinasuryani15@gmail.com', 'Mau pesan'),
(18, 'Rozak Kuntul', 'rozak.tkj@gmail.com', 'mau dong jamunya');

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
(51, 'Beras Kencur', 20, 5500, '177877613_821739291765619_8822815395932566505_n.jpg', 'Beras Kencur botol kecil berukuran 250 ml'),
(52, 'Kunir Asem', 20, 5500, '15043653_1840425849508833_9063272844519014400_n.jpg', 'Kunir Asem botol kecil berukuran 250 ml'),
(53, 'Gula Asem', 20, 5500, '30076687_1449874171785792_2100068441707773952_n.jpg', 'Gula Asem botol kecil berukuran 250 ml');

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
(13, 'Toko Jamu Tradisional Namun Modern', 'Jetis	', '6285745333882', '		<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15813.747653595932!2d110.3904599!3d-7.743394400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ed11ec9aa17%3A0x5b16c2b54fcaa223!2sPondok%20Makan%20Pelem%20Golek!5e0!3m2!1sid!2sid!4v1644222995024!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3954.6057774610863!2d110.3073806!3d-7.6178022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8bf67febc4cb%3A0x1f4c91a8998747f8!2sLumintu%20Gallery!5e0!3m2!1sid!2sid!4v1582636892810!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" styl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `foto_admin` varchar(300) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `nama_lengkap`, `foto_admin`, `email`, `no_hp`, `alamat`) VALUES
(10, 'admin', 'admin', 'admin', NULL, NULL, NULL, NULL, NULL),
(11, 'karyawan', 'karyawan', 'karyawan', NULL, NULL, NULL, NULL, NULL),
(12, 'cs', 'cs', 'cs', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_jamu`
--
ALTER TABLE `bahan_jamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `link_youtube`
--
ALTER TABLE `link_youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_jamu`
--
ALTER TABLE `bahan_jamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `link_youtube`
--
ALTER TABLE `link_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_toko` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
