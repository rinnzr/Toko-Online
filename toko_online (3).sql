-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 03:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `qty`, `subtotal`, `id_produk`) VALUES
(218, 190, 1, 98000, 51),
(219, 191, 1, 58000, 52),
(220, 192, 1, 98000, 51),
(221, 193, 1, 12000, 50),
(222, 194, 1, 12000, 50),
(223, 195, 1, 12000, 50),
(224, 196, 1, 12000, 50),
(225, 197, 1, 98000, 51),
(226, 198, 1, 12000, 50),
(227, 199, 1, 12000, 50),
(228, 200, 1, 98000, 51),
(229, 201, 1, 1230000, 39),
(230, 202, 1, 12000, 50),
(231, 203, 1, 98000, 51),
(232, 204, 1, 12000, 50),
(233, 205, 1, 98000, 51);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`, `username`, `password`, `role`) VALUES
(2, 'orin', 'malang kota baru', '082736282371', 'orin_', '827ccb0eea8a706c4c34a16891f84e7b', 'pelanggan'),
(3, 'joto', 'Pakis', '0932323208', 'joto', '827ccb0eea8a706c4c34a16891f84e7b', 'pelanggan'),
(8, 'Rahma', 'Surabaya', '09726272', 'dhia', '827ccb0eea8a706c4c34a16891f84e7b', 'pelanggan'),
(9, 'Jelita', 'Pasuruan', '089341517125', 'jeli', '827ccb0eea8a706c4c34a16891f84e7b', 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id_peneriman_produk` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tanggal_penerimaan` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id_peneriman_produk`, `id_transaksi`, `tanggal_penerimaan`, `status`) VALUES
(1, 140, 2022, ''),
(2, 131, 2022, ''),
(3, 132, 2022, ''),
(4, 139, 2022, ''),
(5, 141, 2022, ''),
(6, 138, 2022, ''),
(7, 137, 2022, ''),
(8, 136, 2022, ''),
(9, 135, 2022, ''),
(10, 134, 2022, ''),
(11, 150, 2022, ''),
(12, 156, 2022, ''),
(13, 155, 2022, ''),
(14, 159, 2022, ''),
(15, 163, 2022, ''),
(16, 164, 2022, ''),
(17, 162, 2022, ''),
(18, 160, 2022, ''),
(19, 174, 2022, ''),
(20, 173, 2022, ''),
(21, 176, 2022, ''),
(22, 176, 2022, ''),
(23, 176, 2022, ''),
(24, 177, 2022, '');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('petugas','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `role`) VALUES
(5, 'destia', 'destia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'petugas'),
(10, 'rain', 'rain@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(11, 'ara', 'dhia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(16, 'Inas Tuqa', 'inas@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'petugas'),
(17, 'Rahmah', 'dhia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `foto_produk`) VALUES
(39, 'cardigan', 'cardigan', 1230000, 'cardigan.jpg'),
(50, 'Blouse', 'Blouse Import', 12000, 'roro-blouse.jfif'),
(51, 'Hoodie Crop + Joger', 'Set Crop Hoodie dan Joger', 98000, 'hoodie crop+joger.png'),
(52, 'Jeans Bagy Pants', 'Baggy Pants Wanita Jeans', 58000, 'jeans.jpg'),
(53, 'Kemeja Pria', 'Kemeja Flanel Pria', 100000, 'kemeja.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status` enum('Menunggu Barang di Confirm','Barang Sudah di Confirm','Produk Sedang di Kemas','Produk berhasil di Kirim','Produk Sudah di Terima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`, `status`) VALUES
(190, 2, '2022-10-20', 'Produk Sudah di Terima'),
(191, 2, '2022-10-20', 'Produk Sudah di Terima'),
(192, 2, '2022-10-20', 'Produk Sudah di Terima'),
(193, 2, '2022-10-20', 'Produk Sudah di Terima'),
(194, 2, '2022-10-20', 'Produk Sudah di Terima'),
(195, 2, '2022-10-20', 'Produk Sudah di Terima'),
(196, 2, '2022-10-20', 'Produk Sudah di Terima'),
(197, 2, '2022-10-20', 'Produk Sudah di Terima'),
(198, 0, '2022-10-21', 'Menunggu Barang di Confirm'),
(199, 2, '2022-10-21', 'Menunggu Barang di Confirm'),
(200, 2, '2022-10-21', 'Produk Sedang di Kemas'),
(201, 2, '2022-10-21', 'Produk Sudah di Terima'),
(202, 3, '2022-10-21', 'Menunggu Barang di Confirm'),
(203, 3, '2022-10-21', 'Produk berhasil di Kirim'),
(204, 2, '2022-10-21', 'Produk Sudah di Terima'),
(205, 2, '2022-10-21', 'Produk Sudah di Terima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id_peneriman_produk`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id_peneriman_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
