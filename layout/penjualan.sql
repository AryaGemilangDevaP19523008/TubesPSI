-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 01:41 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealerku`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `ID` int(255) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `merk` varchar(20) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `seri` varchar(10) NOT NULL,
  `namaPem` varchar(255) NOT NULL,
  `noHP` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`ID`, `hari`, `tanggal`, `merk`, `tipe`, `seri`, `namaPem`, `noHP`, `alamat`, `harga`) VALUES
(1, 'rabu', '2021-07-01', 'kawasaki', 'naga', '121', 'rafiq', '0821', 'bpp', 0),
(2, 'rabu', '2021-07-02', 'kawasaki', 'naga', '121', 'rafiq', '0821', 'bpp', 0),
(3, 'jumat', '2021-07-02', 'piaggio', 'nagajuga', '111', 'rafikerz', '0821', 'bpp', 0),
(4, 'jumat', '2021-07-02', 'piaggio', 'nagajuga', '111', 'aaaaa', '1111', 'bpp', 999),
(5, 'senin', '2021-07-05', 'kawasaki', 'abcd', '133', 'arya', '123456', 'jogja', 1000000),
(6, 'senin', '2021-07-05', 'kawasaki', 'abcd', '133', 'arya', '123456', 'jogja', 1000000),
(7, 'rabu', '2021-06-30', 'honda', 'naga', '12312', 'rafikerz', '123', 'bpp', 2224444),
(8, 'kamis', '2021-07-08', 'honda', '1234', '1234', 'rafiq', '1234', 'bpp', 123312),
(9, 'sabtu', '2021-07-10', 'honda', 'naga', '11111', 'rafiq', '123456', 'jogja', 999),
(10, 'rabu', '2021-07-07', 'kawasaki', 'naga', '121', 'rafiq', '0821', 'bpp', 999),
(11, 'senin', '2021-07-05', 'kawasaki', 'naga', '121', 'rafiq', '0821', 'bpp', 999),
(12, 'rabu', '2021-07-07', 'kawasaki', 'naga', '121', 'rafiq', '0821', 'bpp', 999),
(13, 'rabu', '2021-07-07', 'kawasaki', 'naga', '121', 'rafiq', '0821', 'bpp', 999),
(14, 'jumat', '2021-07-09', 'kawasaki', 'naga', '111', 'rafiq', '0821', 'bpp', 999),
(15, 'sabtu', '2021-07-10', 'kawasaki', 'naga', '111', 'rafiq', '0821', 'bpp', 999),
(16, 'rabu', '2021-07-10', 'kawasaki', 'naga', '133', 'rafikerz', '0821', 'bpp', 999),
(17, 'senin', '2021-07-03', 'kawasaki', 'naga', '12312', 'rafiq', '0821', 'bpp', 999),
(18, 'rabu', '2021-07-02', 'kawasaki', 'naga', '12312', 'rafiq', '0821', 'bpp', 999),
(19, 'rabu', '2021-07-03', 'kawasaki', 'naga', '121', 'rafikerz', '0821', 'bpp', 999),
(20, 'jumat', '2021-07-02', 'kawasaki', 'naga', '1234', 'arya', '0821', 'jogja', 1000000),
(21, 'jumat', '2021-07-10', 'kawasaki', 'naga', '1234', 'rafiq', '0821', 'bpp', 1000000),
(22, 'jumat', '2021-07-01', 'kawasaki', 'naga', '12312', 'rafiq', '0821', 'bpp', 999),
(23, 'rabu', '2021-07-07', 'kawasaki', 'naga', '133', 'rafikerz', '0821', 'bpp', 999),
(24, 'senin', '2021-07-07', 'kawasaki', 'naga', '133', 'rafiq', '0821', 'bpp', 1000000),
(25, 'jumat', '2021-07-07', 'kawasaki', 'naga', '1234', 'rafiq', '0821', 'bpp', 999),
(26, 'rabu', '2021-07-03', 'honda', 'naga', '11111', 'rafiq', '0821', 'bpp', 999),
(27, 'jumat', '2021-07-08', 'kawasaki', 'naga', '1234', 'rafikerz', '0821', 'bpp', 1000000),
(28, 'jumat', '2021-07-03', 'kawasaki', 'naga', '11111', 'rafikerz', '0821', 'bpp', 999),
(29, 'rabu', '2021-07-03', 'kawasaki', 'naga', '11111', 'rafiq', '0821', 'bpp', 999),
(30, 'rabu', '2021-07-10', 'honda', 'naga', '11111', 'rafiq', '0821', 'bpp', 999),
(31, 'jumat', '2021-07-06', 'honda', 'naga', '111', 'rafikerz', '0821', 'bpp', 999),
(32, 'rabu', '2021-07-07', 'kawasaki', 'hahaha', '5312', 'rafiq', '12135', 'bpp', 999),
(33, 'minggu', '2021-07-04', 'kawasaki', 'naga', '11111', 'rafikerz', '0821', 'bpp', 999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
