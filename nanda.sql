-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 05:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` varchar(20) NOT NULL,
  `nama_bahan_baku` varchar(50) NOT NULL,
  `satuan_bahan_baku` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `nama_bahan_baku`, `satuan_bahan_baku`) VALUES
('B01', 'POLYCUP 240 ML DIAMOND', 'PCS'),
('B02', 'LID 240 ML OASIS', 'ROLL'),
('B03', 'SEDOTAN', 'PCS'),
('B04', 'KARTON 240 ML OASIS', 'PCS'),
('B05', 'LABEL 600 ML OASIS ROL BARU', 'ROLL'),
('B06', 'LABEL 600 ML OASIS DIECUT', 'PCS'),
('B07', 'PREFORM 600 ML SHORT NECK', 'PCS'),
('B08', 'TUTUP BOTOL PET SN OASIS', 'PCS'),
('B09', 'TUTUP BOTOL PET SN POLOS (AVION)', 'PCS'),
('B10', 'TUTUP BOTOL SHORT NECK', 'PCS'),
('B11', 'SEAL PET OASIS ROL', 'ROLL'),
('B12', 'ISOLASI 1000 Y', 'ROLL'),
('B13', 'LEM LABEL', 'KG'),
('B14', 'GALLON', 'PCS'),
('B15', 'TUTUP GALLON', 'PCS'),
('B16', 'SEAL GALLON', 'PCS'),
('B17', 'STICKER GALLON', 'PCS');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku_masuk`
--

CREATE TABLE `bahan_baku_masuk` (
  `id_pesanan` int(11) NOT NULL,
  `id_trx_bm` int(11) NOT NULL,
  `email_supplier` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `komposisi` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` enum('B','P','SP','S') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komposisi`
--

CREATE TABLE `komposisi` (
  `id_komposisi` int(11) NOT NULL,
  `id_product` varchar(30) NOT NULL,
  `komposisi` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(40) NOT NULL,
  `id_supplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komposisi`
--

INSERT INTO `komposisi` (`id_komposisi`, `id_product`, `komposisi`, `jumlah`, `satuan`, `id_supplier`) VALUES
(8, 'P1', 'B02', 2, '', 'SP01'),
(9, 'P1', 'B04', 2, '', 'SP02'),
(10, 'P1', 'B10', 2, '', 'SP01'),
(11, 'P2', 'B07', 2, '', 'SP04'),
(12, 'P2', 'B09', 2, '', 'SP03'),
(13, 'P2', 'B12', 2, '', 'SP05'),
(14, 'P3', 'B10', 2, '', 'SP04'),
(15, 'P3', 'B11', 2, '', 'SP06');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` varchar(20) NOT NULL,
  `nama_product` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama_product`) VALUES
('P1', 'GALON'),
('P2', 'BOTOL'),
('P3', 'CUP');

-- --------------------------------------------------------

--
-- Table structure for table `product_keluar`
--

CREATE TABLE `product_keluar` (
  `id_product_keluar` int(11) NOT NULL,
  `id_product` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_pesan_kembali` date NOT NULL,
  `status` enum('B','P','S') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_keluar`
--

INSERT INTO `product_keluar` (`id_product_keluar`, `id_product`, `jumlah`, `tanggal`, `tanggal_pesan_kembali`, `status`) VALUES
(31, 'P1', 2, '2019-05-26', '2019-05-29', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Purchasing'),
(2, 'Pegawai Gudang'),
(3, 'Pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `stock_bahan_baku`
--

CREATE TABLE `stock_bahan_baku` (
  `id_stock` int(11) NOT NULL,
  `id_bahan_baku` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_bahan_baku`
--

INSERT INTO `stock_bahan_baku` (`id_stock`, `id_bahan_baku`, `jumlah`) VALUES
(7, 'B01', 10),
(8, 'B02', 0),
(9, 'B03', 10),
(10, 'B04', 0),
(11, 'B05', 10),
(12, 'B06', 10),
(13, 'B07', 10),
(14, 'B08', 10),
(15, 'B09', 10),
(16, 'B10', 0),
(17, 'B11', 10),
(18, 'B12', 10),
(19, 'B13', 10),
(20, 'B14', 10),
(21, 'B15', 10),
(22, 'B16', 10),
(23, 'B17', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sub_product_keluar`
--

CREATE TABLE `sub_product_keluar` (
  `id_sub_product_keluar` int(11) NOT NULL,
  `id_product_keluar` varchar(30) NOT NULL,
  `id_trx_product_keluar` int(20) NOT NULL,
  `komposisi` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `periode` int(11) NOT NULL,
  `lead_time` int(11) NOT NULL,
  `kebutuhan_bersih` int(11) NOT NULL,
  `status` enum('B','P','S','SC') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_product_keluar`
--

INSERT INTO `sub_product_keluar` (`id_sub_product_keluar`, `id_product_keluar`, `id_trx_product_keluar`, `komposisi`, `jumlah`, `email`, `periode`, `lead_time`, `kebutuhan_bersih`, `status`) VALUES
(1, 'P1', 31, 'B02', 4, 'SP01', 3, 3, 4, 'B'),
(2, 'P1', 31, 'B04', 4, 'SP02', 3, 3, 4, 'B'),
(3, 'P1', 31, 'B10', 4, 'SP01', 3, 3, 4, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(30) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `email`, `no_hp`, `alamat`) VALUES
('SP01', 'Samsul', 'denden.samsul@gmail.com', '089638727727', 'Bogor'),
('SP02', 'Jeffry', 'jeffrysetiawan@rocketmail.com', '02155933814', 'Tangerang'),
('SP03', 'Frans', 'rolliansyah-rolliansyah@app.co.id', '081377968750', 'Palembang'),
('SP04', 'Andy', 'aziz@saptawarna.co.id\r\n', '02159307127', 'Banten'),
('SP05', 'Bakti', 'soa@plb.ekadarma.com\r\n', '081367199300', 'Palembang'),
('SP06', 'Hosea', 'hosea@omnikemas.co.id\r\n', '0215556040', 'Jakarta Utara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `role`) VALUES
(1, '1', 'Purcahsing', 'dc82a0e0107a31ba5d137a47ab09a26b', 1),
(2, '2', 'Pegawai Gudang', 'dc82a0e0107a31ba5d137a47ab09a26b', 2),
(3, '3', 'Pimpinan', 'dc82a0e0107a31ba5d137a47ab09a26b', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indexes for table `bahan_baku_masuk`
--
ALTER TABLE `bahan_baku_masuk`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `komposisi`
--
ALTER TABLE `komposisi`
  ADD PRIMARY KEY (`id_komposisi`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `komposisi` (`komposisi`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `product_keluar`
--
ALTER TABLE `product_keluar`
  ADD PRIMARY KEY (`id_product_keluar`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `stock_bahan_baku`
--
ALTER TABLE `stock_bahan_baku`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

--
-- Indexes for table `sub_product_keluar`
--
ALTER TABLE `sub_product_keluar`
  ADD PRIMARY KEY (`id_sub_product_keluar`),
  ADD KEY `id_product_keluar` (`id_product_keluar`),
  ADD KEY `id_trx_product_keluar` (`id_trx_product_keluar`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_baku_masuk`
--
ALTER TABLE `bahan_baku_masuk`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komposisi`
--
ALTER TABLE `komposisi`
  MODIFY `id_komposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_keluar`
--
ALTER TABLE `product_keluar`
  MODIFY `id_product_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock_bahan_baku`
--
ALTER TABLE `stock_bahan_baku`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sub_product_keluar`
--
ALTER TABLE `sub_product_keluar`
  MODIFY `id_sub_product_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komposisi`
--
ALTER TABLE `komposisi`
  ADD CONSTRAINT `komposisi_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `komposisi_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `komposisi_ibfk_3` FOREIGN KEY (`komposisi`) REFERENCES `bahan_baku` (`id_bahan_baku`);

--
-- Constraints for table `product_keluar`
--
ALTER TABLE `product_keluar`
  ADD CONSTRAINT `product_keluar_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `stock_bahan_baku`
--
ALTER TABLE `stock_bahan_baku`
  ADD CONSTRAINT `stock_bahan_baku_ibfk_1` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`);

--
-- Constraints for table `sub_product_keluar`
--
ALTER TABLE `sub_product_keluar`
  ADD CONSTRAINT `sub_product_keluar_ibfk_1` FOREIGN KEY (`id_product_keluar`) REFERENCES `product_keluar` (`id_product`),
  ADD CONSTRAINT `sub_product_keluar_ibfk_2` FOREIGN KEY (`id_trx_product_keluar`) REFERENCES `product_keluar` (`id_product_keluar`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
