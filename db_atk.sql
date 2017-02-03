-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 04:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_atk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_atk`
--

CREATE TABLE `tbl_atk` (
  `id_atk` varchar(20) NOT NULL,
  `atk` varchar(30) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `pemasok` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `stok` int(10) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `id_pemasok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `stok`, `satuan`, `harga`, `tgl`, `id_pemasok`) VALUES
('B01', 'Pensil', 20, 'pack', 120000, '2017-02-02', 'p01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasok`
--

CREATE TABLE `tbl_pemasok` (
  `id_pemasok` varchar(25) NOT NULL,
  `pemasok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemasok`
--

INSERT INTO `tbl_pemasok` (`id_pemasok`, `pemasok`) VALUES
('p01', 'CV. Makmur Jaya'),
('p02', 'CV. Jaya Makmur'),
('p03', 'PT.Sukses Selalu'),
('p04', 'cv kimaznal'),
('P05', 'PT AMIGA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_username` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_username`, `username`, `password`) VALUES
(2, 'jamal', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin', '0192023a7bbd73250516f069df18b500'),
(4, 'dimaz', 'eb6b388d4c9e4844da2bb57308f479d0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_atk`
--
ALTER TABLE `tbl_atk`
  ADD PRIMARY KEY (`id_atk`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_pemasok`
--
ALTER TABLE `tbl_pemasok`
  ADD PRIMARY KEY (`id_pemasok`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_username` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
