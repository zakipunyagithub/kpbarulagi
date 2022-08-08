-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 08 Agu 2022 pada 13.59
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
-- Struktur dari tabel `bacaan`
--

CREATE TABLE `bacaan` (
  `id_bacaan` int(11) NOT NULL,
  `judul_bacaan` varchar(250) NOT NULL,
  `tanggal_bacaan` varchar(100) NOT NULL,
  `bacaan` text NOT NULL,
  `foto_bacaan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bacaan`
--

INSERT INTO `bacaan` (`id_bacaan`, `judul_bacaan`, `tanggal_bacaan`, `bacaan`, `foto_bacaan`) VALUES
(2, 'Ngetes Judul Bacaannya Panjang, Gua Ga Tau Mau Ngetik Apa Di Sini, Tujuannya Bener-bener Cuma Mau Ngetes Doang Kalo Judulnya Bisa Panjang', '2022-08-27', '<p>Puji dan syukur saya panjatkan kehadirat Allah Yang Maha Esa,karena atas berkat dan rahmatnya, pelaksanaan kerja praktek yang berjudul <strong>“Perancangan Aplikasi Penggajian Karyawan Di Umkm Sempe Arumanis Haji Ardi Berbasis Website”</strong> dapat terselesaikan dengan baik dan tepat waktu. Adapun tujuan penulisan laporan ini adalah untuk memenuhi persyaratan dalam menyelesaikan kerja praktek program studi Informatika&nbsp; Universitas Janabadra Yogyakarta.</p><p>Penyusunan laporan ini tidak terlepas dari bantuan beberapa pihak oleh karena itu penulis ucapan terima kasih kepada:</p><ol><li>Bapak Dr. Ir. Edy Sriyono, M.T,<strong>&nbsp;</strong>selaku Rektor&nbsp;Universitas Janabadra.</li><li>Ibu&nbsp;Titiek Widyasari, S.T.,M.T, selaku Dekan Fakultas Teknik&nbsp;Universitas Janabadra.</li><li>Bapak Ryan Ari Setyawan, S.Kom.,M.Eng, selaku Ketua Program Studi Informatika&nbsp;Universitas Janabadra.</li><li>Bapak Jemmy Edwin B, S.Kom.,M.Eng, selaku dosen pembimbing kerja praktek</li><li>Semua pihak yang tidak dapat disebutkan satu persatu yang terlibat dalam penyusunan laporan kerja praktek ini sehingga dapat menyelesaikannya dengan baik.</li></ol><p>Akhir kata, penulis menyadari bahwa masih banyak kekurangan dalam penyusunan laporan kerja praktek ini, untuk itu penulis mohon maaf dan mengharapkan saran serta kritik yang membangun dari pembaca. Semoga laporan kerja praktek ini dapat bermanfaat bagi pembaca, khususnya pada bidang informatika.</p><p>&nbsp;</p><ol><li>Rumusan Masalah</li></ol><p>Berdasarkan latar belakang masalah diatas, maka dapat merumuskan masalah sebagai berikut Bagaimana merancang sistem penggajian serta pembuatan <i>web </i>sistem penggajian yang dapat membantu proses pengelolaan penggajian karyawan di UMKM Sempe Arumanis Haji Ardi.</p><ol><li>Batasan Masalah</li></ol><p>Adapun batasan masalah dalam penyusunan laporan kerja praktek ini adalah sebagai berikut:</p><ol><li>Data yang diinputkan dalam sistem penggajian karyawan berupa data karyawan, data kehadiran karyawan perbulan, dan data gaji karyawan.</li><li>Proses atau alur aplikasi penggajian ini mengikuti ketentuan yang sudah ditentukan oleh UMKM Sempe Arumanis Haji Ardi.</li><li>Informasi yang didapatkan oleh karyawan menggunakan web browser untuk melihat gaji dan data kehadiran perbulannya.</li><li>Proses dimana sistem yang akan dibangun menggunakan bahasa pemrograman <i>PHP</i> dan <i>MySQL</i>.<ol><li><strong>Tujuan Kerja Praktek</strong></li></ol></li></ol><p>Tujuan penelitian dalam penyusunan laporan kerja praktek ini adalah membangun aplikasi Penggajian Karyawan di UMKM Sempe Arumanis Haji Ardi berbasis <i>website</i> yang nantinya akan memudahkan <i>admin</i> dalam pengelolaan penggajian karyawan.</p><p>&nbsp;</p><ol><li><strong>Manfaat Kerja Praktek</strong></li></ol><p>Adapun manfaat dalam penyusunan laporan kerja praktek ini adalah sebagai berikut:</p><ol><li>Bagi Peneliti</li></ol><p>Menambah wawasan dan pengetahuan di luar lingkup kampus yang berhubungan dengan studi yang dipilih.</p><ol><li>Bagi Instansi<ol><li>Metodologi Kerja Praktek</li></ol></li></ol><p>Memiliki <i>website</i> pengelolaan data dan gaji karyawan sehingga memudahkan pihak UMKM Sempe Arumanis Haji Ardi dalam mengelola data tersebut.</p><p>Dalam menyelesaikan laporan kerja prektek ini penulis menggunakan beberapa metode kerja praktek:</p><ol><li>Lokasi Kerja Praktek</li></ol><p>Penelitian ini dilakukan mengamat pengelolaan data gaji karyawan pada UMKM Sempe Arumanis Haji Ardi di Babadan RT 05/36 Kadipolo Sendangtirto Berbah&nbsp;Sleman, Daerah Istimewa Yogyakarta</p><ol><li>Teknik Pengumpulan Data</li></ol><p>Teknik pengumpulan data dalam penelitian ini adalah dengan melakukan wawancara, observasi dan studi literature.</p><ol><li>Wawancara</li></ol><p>Wawancara dilakukan untuk mendapatkan informasi langsung dari sumbernya. Wawancara dilakukan dalam penelitian ini adalah dengan cara mengajukan pertanyaan langsung kepada sumber data yang bekerja di UMKM Sempe Arumanis Haji Ardi. Wawancara ini dilakukan kepada HRD UMKM Sempe Arumanis Haji Ardi.</p><ol><li>Observasi</li></ol><p>Observasi adalah pengamatan langsung bagaimana proses cara pengelolaan penggajian di UMKM sempe arumanis haji ardi.</p><ol><li>Studi Literatur</li></ol><p>Studi literature digunakan untuk mencari sumber pustaka yang berhubungan dengan topic penelitian. Diperoleh melalui buku referensi, internet dan dokumentasi lainnya.</p>', '27037.jpg'),
(5, 'Yogyakarta, Kota Idaman', '2022-08-25', '<p>Yogyakarta atau dikenal oleh masyarakat setempat dengan nama Kota Jogja atau Kota Yogya adalah ibu kota dan pusat pemerintahan Provinsi Daerah Istimewa Yogyakarta, Indonesia. Kota ini adalah kota besar yang mempertahankan konsep tradisional dan budaya Jawa. Kota Yogyakarta adalah kediaman bagi Sultan Hamengkubuwana dan Adipati Paku Alam. Kota Yogyakarta merupakan salah satu kota terbesar di Indonesia dan kota terbesar keempat di Pulau Jawa bagian selatan menurut jumlah penduduk. Kota Yogyakarta juga pernah menjadi ibu kota RI pada tahun 1946.</p><p>&nbsp;</p><p>Salah satu kecamatan di Yogyakarta, yaitu Kotagede pernah menjadi pusat Kesultanan Mataram antara kurun tahun 1575 – 1640. Keraton (istana) yang masih berfungsi dalam arti yang sesungguhnya adalah Keraton Ngayogyakarta dan Puro Paku Alaman, yang merupakan pecahan&nbsp;dari Kesultanan Mataram. Pada masa revolusi, Yogyakarta juga pernah menjadi ibu kota Indonesia antara tahun 1946 hingga 1950</p>', 'Yogyakarta_Indonesia_Tugu-Yogyakarta-02.jpg');

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
(19, 'Botol Kemasan Premium'),
(20, 'Botol Kemasan Reguler');

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
  `foto_produk` varchar(300) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `link_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `id_kategori`, `foto_produk`, `deskripsi_produk`, `link_produk`) VALUES
(51, 'Beras Kencur', 19, '177877613_821739291765619_8822815395932566505_n.jpg', 'Beras Kencur botol kecil berukuran 250 ml', 'https://lummoshop.com/mujamupremio0/products/BER-001/beras-kencur-premium-250ml?position=4'),
(52, 'Kunir Asem', 20, '15043653_1840425849508833_9063272844519014400_n.jpg', 'Kunir Asem botol kecil berukuran 250 ml', 'https://lummoshop.com/mujamupremio0/products/KUN-002/kunyit-asam-330ml?position=5'),
(53, 'Gula Asem', 19, '30076687_1449874171785792_2100068441707773952_n.jpg', 'Gula Asem botol kecil berukuran 250 ml', 'https://lummoshop.com/mujamupremio0/products/GUL-001/gula-asam-premium-250ml?position=2');

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
(13, 'Toko Jamu Tradisional Namun Modern', 'Jetis	', '085745333882', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d51355.173896557324!2d110.17010271030708!3d-7.318746053969426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e707879e0b75855%3A0x1296f14debc4699c!2sRSUD%20Temanggung!5e0!3m2!1sid!2sid!4v1659442001127!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'mujamu.png');

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
(10, 'admin', 'admin', 'admin', 'Musthafa Zaki Ganteng', 'pngwing.com.png', 'mzpasha68@gmail.com', '69696969696969', 'wkwkwkwkwk'),
(11, 'karyawan', 'karyawan', 'karyawan', 'Musthafa Zaki', '20200908_111646.jpg', 'admin@admin.com', '69696969696969', 'wkwkwwkwkw'),
(12, 'cs', 'cs', 'cs', 'muke gile', '20210413_183446.jpg', 'mzpasha68@gmail.com', '0888', 'vvefvevevrev'),
(22, 'karyawanatas', 'karyawan1', 'karyawan', 'Musthafa Zaki Ganteng', 'mujamu.png', 'rozak.tkj@gmail.com', '0987654321', 'nvhsjcnshafdfsv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bacaan`
--
ALTER TABLE `bacaan`
  ADD PRIMARY KEY (`id_bacaan`);

--
-- Indexes for table `bahan_jamu`
--
ALTER TABLE `bahan_jamu`
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
-- AUTO_INCREMENT for table `bacaan`
--
ALTER TABLE `bacaan`
  MODIFY `id_bacaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bahan_jamu`
--
ALTER TABLE `bahan_jamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_toko` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
