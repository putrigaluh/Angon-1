-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: Localhost
-- Generation Time: Mar 14, 2016 at 10:09 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `angon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('intan', 'intan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_rute`
--

CREATE TABLE IF NOT EXISTS `detail_rute` (
  `id_user` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  UNIQUE KEY `id_user` (`id_user`),
  UNIQUE KEY `id_rute` (`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_rute`
--


-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  UNIQUE KEY `id_transaksi` (`id_transaksi`),
  UNIQUE KEY `id_produk` (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE IF NOT EXISTS `kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_produk` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `kategori_produk`) VALUES
(1, 'Bibit');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_user`
--

CREATE TABLE IF NOT EXISTS `kategori_user` (
  `id_kategori_user` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori_user`
--

INSERT INTO `kategori_user` (`id_kategori_user`, `kategori`) VALUES
(1, 'Industri Ternak'),
(2, 'Peternak'),
(3, 'Pengguna Ternak');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(5) NOT NULL,
  `nama_kota` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kota`),
  KEY `id_provinsi` (`id_provinsi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama_kota`) VALUES
(1, 1, 'Malang'),
(2, 1, 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE IF NOT EXISTS `ongkir` (
  `id_kota1` int(11) NOT NULL,
  `id_kota2` int(11) NOT NULL,
  `ongkir` int(11) NOT NULL,
  UNIQUE KEY `id_kota1` (`id_kota1`),
  UNIQUE KEY `id_kota2` (`id_kota2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--


-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_jenis` int(11) NOT NULL,
  `nama_produk` varchar(10) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gbr_produk` blob NOT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `id_kategori_produk` (`id_kategori_jenis`),
  KEY `id_user2` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `produk`
--


-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(5) NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(20) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Jawa Timur'),
(2, 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id_review` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `review` date NOT NULL,
  PRIMARY KEY (`id_review`),
  KEY `id_produk1` (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `review`
--


-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id_rute` int(11) NOT NULL AUTO_INCREMENT,
  `rute` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rute`
--


-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat_pengiriman` varchar(100) NOT NULL,
  `status` enum('Pending','Terbayar','Terkirim') NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_user3` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `id_user`, `alamat_pengiriman`, `status`) VALUES
(1, '2016-03-10', 1, 'Malang', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(20) NOT NULL,
  `id_kategori_user` int(11) NOT NULL,
  `alamat_user` text NOT NULL,
  `id_kota` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_kategori_user` (`id_kategori_user`),
  KEY `id_kota` (`id_kota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `id_kategori_user`, `alamat_user`, `id_kota`, `username`, `password`) VALUES
(1, 'Pratiwi', 2, 'ikan nus', 1, 'putri', 'putri');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_rute`
--
ALTER TABLE `detail_rute`
  ADD CONSTRAINT `id_rute` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `id_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `id_provinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Constraints for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD CONSTRAINT `id_kota1` FOREIGN KEY (`id_kota1`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_kota2` FOREIGN KEY (`id_kota2`) REFERENCES `kota` (`id_kota`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `id_kategori_produk` FOREIGN KEY (`id_kategori_jenis`) REFERENCES `kategori_produk` (`id_kategori_produk`),
  ADD CONSTRAINT `id_user2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `id_produk1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_user3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `id_kategori_user` FOREIGN KEY (`id_kategori_user`) REFERENCES `kategori_user` (`id_kategori_user`),
  ADD CONSTRAINT `id_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);
