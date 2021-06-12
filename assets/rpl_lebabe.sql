-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 07:27 PM
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
(24, 14, 'motor', 'anang', 'bekas', 'apaaja', 0, 1500000, '2021-06-14', '11.jpg', 'Failed'),
(25, 14, 'mobil', 'anang', 'baru', 'apaaja', 0, 0, '2021-06-23', '12.jpg', 'Failed'),
(26, 14, 'sepeda', 'anang', 'baru', 'apaaja', 0, 1500000, '2021-06-15', '13.jpg', 'Success'),
(29, 13, 'hp', 'duy', 'baru', 'apaaja', 0, 3000000, '2021-06-14', '32.jpg', 'Success'),
(30, 13, 'laptop', 'duy', 'bekas', 'apaaja', 0, 1, '2021-06-15', '31.jpg', 'Success'),
(31, 13, 'vape', 'duy', 'baru', 'apaaja', 0, 0, '2021-06-14', 'ts1.jpg', 'Pending');

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
(13, 'duy', '$2y$10$KHfDGV4FQblnasw16AkqyOl1nNe8VAVvJEiHP9dkUlJ1LBd4aa6P6', 'duy', 'duy@gmail.com', '080808', 'bdg', 0),
(14, 'anang', '$2y$10$w9RrPfJZITH/YdQVg8B0vuyRwq2b2iiRyxK/3HPcFLyUb5KsSP0Y.', 'anang', 'anang@gmail.com', '070707', 'bdg', 0);

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
  MODIFY `idBarang` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
