-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 10:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` int(11) NOT NULL,
  `tipe_bayar` varchar(20) NOT NULL,
  `nama_bank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`id_bayar`, `tipe_bayar`, `nama_bank`) VALUES
(2, 'Credit Card', 'BRI'),
(3, 'Credit Card', 'BNI'),
(4, 'Credit Card', 'Danamon'),
(5, 'Credit Card', 'BCA'),
(6, 'Credit Card', 'CIMB Niaga'),
(7, 'Credit Card', 'BRI Syariah'),
(8, 'Credit Card', 'Mandiri'),
(14, 'Credit Card', 'Niaga Syariah'),
(16, 'Kredit', 'Andara');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`, `nama`, `alamat`, `no_tlp`) VALUES
(1, 'admin', '1234', 1, '', '', ''),
(2, 'reffan', 'reffan', 2, 'Reffan', 'Ciwidey', '0876542399019'),
(3, 'raska', 'raska', 2, 'Raska', 'Jakarta', '0887690234576'),
(4, 'rino', 'rino', 2, 'Rino Nugrahadi', 'Cilegon', '0876234500987'),
(5, 'risky', 'risky', 2, '', '', ''),
(44, 'nisa', 'nisa', 2, 'Nisa A', 'Ciwidey\r\n', '087123456788'),
(45, 'yayah', 'yayah', 2, '', '', ''),
(46, 'caca', 'caca', 2, 'Caca', 'Andir', '098765423880');

-- --------------------------------------------------------

--
-- Table structure for table `maskapai`
--

CREATE TABLE `maskapai` (
  `id_maskapai` int(11) NOT NULL,
  `kd_maskapai` varchar(20) NOT NULL,
  `nama_maskapai` varchar(50) NOT NULL,
  `kelas_maskapai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maskapai`
--

INSERT INTO `maskapai` (`id_maskapai`, `kd_maskapai`, `nama_maskapai`, `kelas_maskapai`) VALUES
(1, 'AAB02', 'Air Asia', 'Bisnis'),
(2, 'AAE01', 'Air Asia', 'Ekonomi'),
(4, 'GRE01', 'Garuda', 'Ekonomi'),
(5, 'GRB02', 'Garuda', 'Bisnis'),
(6, 'LAB02', 'Lion Air', 'Bisnis'),
(7, 'LAI01', 'Lion Air', 'Ekonomi'),
(8, 'SRB02', 'Sriwijaya', 'Bisnis'),
(9, 'SRE01', 'Sriwijaya', 'Ekonomi'),
(10, 'ADE01', 'Andara', 'Ekonomi'),
(11, 'ADB02', 'Andara', 'Bisnis'),
(13, 'DRE001', 'Dirgantara', 'Ekonomi'),
(14, 'DRB002', 'Dirgantara', 'Bisnis 1');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `id_bayar` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_login`, `id_tiket`, `id_bayar`, `tanggal`, `jumlah`, `total`) VALUES
(4, 2, 3, 4, '2021-12-08', 2, 600000),
(6, 4, 3, 2, '2021-12-02', 2, 600000),
(7, 3, 1, 0, '2021-12-08', 1, 700000),
(9, 44, 13, 3, '2021-12-02', 3, 3000000),
(10, 46, 7, 3, '2021-12-03', 2, 1400000),
(11, 4, 18, 0, '2021-12-15', 1, 700000),
(12, 4, 12, 4, '2021-12-22', 2, 1600000);

--
-- Triggers `pembelian`
--
DELIMITER $$
CREATE TRIGGER `beli` AFTER INSERT ON `pembelian` FOR EACH ROW BEGIN 
	UPDATE tiket SET stok = stok - NEW.jumlah WHERE id_tiket = NEW.id_tiket;
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_maskapai` varchar(20) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_maskapai`, `id_tujuan`, `harga`, `stok`) VALUES
(1, '1', 2, 700000, 4),
(2, '2', 2, 600000, 10),
(3, '4', 1, 300000, 1),
(4, '5', 1, 500000, 17),
(5, '7', 1, 500000, 6),
(6, '6', 1, 1000000, 9),
(7, '9', 1, 700000, 24),
(8, '8', 1, 1200000, 7),
(12, '4', 2, 800000, 7),
(13, '5', 2, 1000000, 5),
(14, '2', 1, 700000, 4),
(15, '1', 1, 900000, 17),
(17, '9', 13, 1000000, 6),
(18, '10', 3, 700000, 10),
(19, '6', 5, 2000000, 7),
(20, '13', 6, 2000000, 7),
(21, '1', 9, 1100000, 10),
(22, '5', 11, 700000, 3),
(23, '1', 9, 1000000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `nama_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `nama_tujuan`) VALUES
(1, 'BANDUNG-BALI'),
(2, 'JAKARTA-SURABAYA'),
(3, 'BANDUNG-SEMARANG'),
(5, 'BANDUNG-MAKASSAR'),
(6, 'BANDUNG-PONTIANAK'),
(9, 'JAKARTA-BALI'),
(11, 'SURABAYA-BALI'),
(13, 'BALI-BANDUNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maskapai`
--
ALTER TABLE `maskapai`
  ADD PRIMARY KEY (`id_maskapai`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `maskapai`
--
ALTER TABLE `maskapai`
  MODIFY `id_maskapai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
