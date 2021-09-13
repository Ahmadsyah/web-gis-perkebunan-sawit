-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09 Des 2019 pada 06.39
-- Versi Server: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE IF NOT EXISTS `bidang` (
  `bidang_kode` int(11) NOT NULL,
  `bidang_nama` varchar(200) NOT NULL,
  `bidang_keterangan` text NOT NULL,
  `bidang_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`bidang_kode`, `bidang_nama`, `bidang_keterangan`, `bidang_gambar`) VALUES
(100, 'Rayon A', 'Rayon A berada di Desa Senana Nenek, Kecamatan Tapung Hulu Kabupaten Kampar. Kebun ini memiliki luas Area sebesar 2.388,19 Ha dan Areal yang ditanami Sawit sebanyak 2.027,95 Ha\r\nKebun ini juga berhasil menghasilkan produksi sawit sebanyank 45.294 Ton per tahun. (Data 2017)', 'rayon_a.jpg'),
(200, 'Rayon B', 'Rayon B berada di Desa Senana Nenek, Kecamatan Tapung Hulu Kabupaten Kampar. Kebun ini memiliki luas Area sebesar 2.352,77 Ha dan Areal yang ditanami Sawit sebanyak 2.267,54 Ha Kebun ini juga berhasil menghasilkan produksi sawit sebanyak 54.274 Ton per tahun. ', 'rayon_b.jpg'),
(300, 'Rayon C', 'Rayon C berada di Desa Danau Lancang, Kecamatan Tapung Hulu, Kabupaten Kampar. Kebun ini memiliki luas Area sebesar 1.050,40 Ha dan Areal yang ditanami Sawit sebanyak 1.014,36 Ha Kebun ini juga berhasil menghasilkan produksi sawit sebanyak 24.316 Ton per tahun. ', 'rayon_c.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `bidang_kode` int(3) NOT NULL,
  `bidang_nama` varchar(50) NOT NULL,
  `bidang_lokasi` varchar(50) NOT NULL,
  `bidang_lat` varchar(50) NOT NULL,
  `bidang_long` varchar(50) NOT NULL,
  `luas_area` varchar(50) NOT NULL,
  `luas_tanam` varchar(50) NOT NULL,
  `produksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`bidang_kode`, `bidang_nama`, `bidang_lokasi`, `bidang_lat`, `bidang_long`, `luas_area`, `luas_tanam`, `produksi`) VALUES
(100, 'Rayon A', 'Desa Senama Nenek, Kecamatan Tapung Hulu, Kabupata', '0.728444" LU', '100.877028" BT', '2.388,19', '2.027,95', '45.294'),
(200, 'Rayon B', 'Desa Senama Nenek, Kecamatan Tapung Hulu, Kabupata', '0.728444', '100.830889', '2.352,77', '2.267,54', '54.274'),
(300, 'Rayon C', 'Desa Danau Lancang, Kecamatan Tapung Hulu, Kabupat', '0.728444', '100.90075', '1.050,40', '1.014,36', '24.316');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi`
--

CREATE TABLE IF NOT EXISTS `dokumentasi` (
  `dokumentasi_id` int(11) NOT NULL,
  `dokumentasi_bidang_id` int(11) NOT NULL,
  `dokumentasi_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumentasi`
--

INSERT INTO `dokumentasi` (`dokumentasi_id`, `dokumentasi_bidang_id`, `dokumentasi_gambar`) VALUES
(1, 100, 'rayon_a1.jpg'),
(2, 100, 'rayon_a2.jpg'),
(3, 100, 'rayon_a3.jpg'),
(4, 100, 'rayon_a4.jpg'),
(5, 100, 'rayon_a5.jpg'),
(6, 100, 'rayon_a6.jpg'),
(7, 200, 'rayon_b1.jpg'),
(8, 200, 'rayon_b2.jpg'),
(9, 200, 'rayon_b3.jpg'),
(10, 200, 'rayon_b4.jpg'),
(11, 200, 'rayon_b5.jpg'),
(12, 200, 'rayon_b6.jpg'),
(13, 300, 'rayon_c1.jpg'),
(14, 300, 'rayon_c2.jpg'),
(15, 300, 'rayon_c3.jpg'),
(16, 300, 'rayon_c4.jpg'),
(17, 300, 'rayon_c5.jpg'),
(18, 300, 'rayon_c6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Ahmad', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`bidang_kode`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`bidang_kode`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`dokumentasi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
