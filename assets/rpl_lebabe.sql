-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 02:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl_lebabe`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(32) NOT NULL,
  `idUser` int(32) NOT NULL,
  `namaBarang` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `statusBarang` varchar(64) NOT NULL,
  `descBarang` varchar(128) NOT NULL,
  `hargaBarang` int(255) NOT NULL,
  `hargaAkhir` int(250) NOT NULL,
  `deadline` date NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `statusLelang` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `idUser`, `namaBarang`, `username`, `statusBarang`, `descBarang`, `hargaBarang`, `hargaAkhir`, `deadline`, `gambar`, `statusLelang`) VALUES
(25, 14, 'mobil', 'anang', 'baru', 'apaaja', 0, 0, '2021-06-23', '12.jpg', 'Failed'),
(29, 13, 'hp', 'duy', 'baru', 'apaaja', 0, 3000000, '2021-06-14', '32.jpg', 'Success'),
(31, 13, 'vape', 'duy', 'baru', 'apaaja', 0, 0, '2021-06-14', 'ts1.jpg', 'Failed'),
(33, 14, 'motor', 'anang', 'baru', 'apaaja', 0, 4000000, '2021-06-16', '31.jpg', 'Pending'),
(36, 14, 'test', 'anang', 'test', 'test', 0, 0, '2021-06-17', '33.jpg', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `idPembeli` int(32) NOT NULL,
  `idBarang` int(32) NOT NULL,
  `idUser` int(32) NOT NULL,
  `namaPembeli` varchar(64) NOT NULL,
  `namaBarang` varchar(64) NOT NULL,
  `nominalBid` bigint(255) NOT NULL,
  `statusBid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`idPembeli`, `idBarang`, `idUser`, `namaPembeli`, `namaBarang`, `nominalBid`, `statusBid`) VALUES
(16, 33, 16, 'shiba', 'motor', 4000000, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `saldo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `no_telp`, `alamat`, `saldo`) VALUES
(13, 'duy', '$2y$10$mffBE3LFnulOnSsbFJFREuoUDRYekowZWCe6cpdwQYXqNR5Fa2BLq', 'yuda pratama', 'duy@gmail.com', '080808', 'lop', 16000),
(14, 'anang', '$2y$10$tI5VHOHVZi69x5FSxSXd6.6ATQufbYaiMXE4HFLw8Br5vVkOv2ZZu', 'anang furkon', 'anang@gmail.com', '080808', 'jgj', 5000),
(16, 'shiba', '$2y$10$wnJkSkvXWpaU521UCVjAnOYfqRJZzmSEYWlls6omqAPE6Eh9bimpy', 'shiba', 'shiba@gmail.com', '080808', 'jkt', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`idPembeli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
