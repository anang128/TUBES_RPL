-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 08:59 AM
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
  `namaBarang` varchar(64) NOT NULL,
  `statusBarang` varchar(64) NOT NULL,
  `descBarang` varchar(128) NOT NULL,
  `hargaBarang` int(255) NOT NULL,
  `hargaAkhir` int(250) NOT NULL,
  `deadline` date NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `namaBarang`, `statusBarang`, `descBarang`, `hargaBarang`, `hargaAkhir`, `deadline`, `gambar`) VALUES
(1, 'aa', 'aa', 'aa', 100000, 0, '2021-06-06', 'Screenshot (1).png'),
(4, 'bb', 'bb', 'bb', 100000, 0, '2021-06-06', 'Screenshot (2).png');

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
(6, 'duy2', '$2y$10$FZKzgroPSUrsPOaCITPlo.WhetJicS/qUnWTGPHvWNPBkPqcRwcMK', 'duy2', 'bb@gmail.com', '070707', 'bb', 0),
(11, 'masAnang', '$2y$10$LF4t4E73cjvOAFipvPxOjOgjbd/ZHjH1kybBGsh8kdd6QSEL0QYh6', 'Mas Anang', 'anang128@gmail.com', '80808080', 'Jambi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

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
  MODIFY `idBarang` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
