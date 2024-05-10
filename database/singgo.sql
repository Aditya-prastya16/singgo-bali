-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2023 at 04:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `singgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaction`
--

CREATE TABLE `tb_transaction` (
  `id_transaction` int(11) NOT NULL,
  `transaction_date` date NOT NULL,
  `nama_item` varchar(20) NOT NULL,
  `jumlah_pembelian` int(5) NOT NULL,
  `harga_satuan` bigint(255) NOT NULL,
  `total_harga` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaction`
--

INSERT INTO `tb_transaction` (`id_transaction`, `transaction_date`, `nama_item`, `jumlah_pembelian`, `harga_satuan`, `total_harga`) VALUES
(1, '2023-10-12', 'nasi jinggo', 65, 3000, 195000),
(2, '2023-10-12', 'tuak', 10, 18000, 180000),
(3, '2023-10-12', 'arak', 4, 20000, 80000),
(4, '2023-10-12', 'kerupuk', 14, 1000, 14000),
(5, '2023-10-12', 'rempeyek', 14, 1000, 14000),
(6, '2023-10-12', 'kacang', 14, 1000, 14000),
(7, '2023-10-13', 'nasi jinggo', 60, 3000, 180000),
(8, '2023-10-13', 'tuak', 7, 18000, 126000),
(9, '2023-10-13', 'kerupuk', 14, 1000, 14000),
(10, '2023-10-13', 'kacang', 14, 1000, 14000),
(11, '2023-10-13', 'rempeyek', 14, 1000, 14000),
(12, '2023-10-14', 'nasi jinggo', 92, 3000, 276000),
(13, '2023-10-14', 'tuak', 8, 18000, 144000),
(14, '2023-10-14', 'kerupuk', 14, 1000, 14000),
(15, '2023-10-14', 'rempeyek', 14, 1000, 14000),
(16, '2023-10-14', 'kacang', 14, 1000, 14000),
(17, '2023-10-15', 'nasi jinggo', 90, 3000, 270000),
(18, '2023-10-15', 'tuak', 12, 18000, 216000),
(19, '2023-10-15', 'kerupuk', 14, 1000, 14000),
(20, '2023-10-15', 'rempeyek', 14, 1000, 14000),
(21, '2023-10-15', 'kacang', 14, 1000, 14000),
(22, '2023-10-19', 'nasi jinggo', 50, 3000, 150000),
(23, '2023-10-19', 'tuak', 9, 18000, 162000),
(24, '2023-10-19', 'arak', 7, 20000, 140000),
(25, '2023-10-19', 'kerupuk', 8, 1000, 8000),
(26, '2023-10-19', 'rempeyek', 14, 1000, 14000),
(27, '2023-10-19', 'kacang', 14, 1000, 14000),
(28, '2023-10-20', 'nasi jinggo', 45, 3000, 135000),
(29, '2023-10-20', 'tuak', 10, 18000, 180000),
(30, '2023-10-20', 'kerupuk', 20, 1000, 20000),
(31, '2023-10-20', 'rempeyek', 14, 1000, 14000),
(32, '2023-10-20', 'kacang', 14, 1000, 14000),
(33, '2023-10-21', 'nasi jinggo', 85, 3000, 255000),
(34, '2023-10-21', 'tuak', 15, 18000, 270000),
(35, '2023-10-21', 'arak', 2, 20000, 40000),
(36, '2023-10-21', 'kerupuk', 14, 1000, 14000),
(37, '2023-10-21', 'kacang', 14, 1000, 14000),
(38, '2023-10-21', 'rempeyek', 14, 1000, 14000),
(39, '2023-10-22', 'nasi jinggo', 50, 3000, 150000),
(40, '2023-10-22', 'tuak', 16, 18000, 288000),
(41, '2023-10-22', 'arak', 1, 20000, 20000),
(42, '2023-10-26', 'nasi jinggo', 83, 3000, 249000),
(43, '2023-10-26', 'tuak', 8, 18000, 144000),
(44, '2023-10-26', 'arak', 3, 20000, 60000),
(45, '2023-10-26', 'kerupuk', 14, 1000, 14000),
(46, '2023-10-26', 'rempeyek', 14, 1000, 14000),
(47, '2023-10-26', 'kacang', 14, 1000, 14000),
(48, '2023-10-27', 'nasi jinggo', 70, 3000, 210000),
(49, '2023-10-27', 'tuak', 16, 18000, 288000),
(50, '2023-10-27', 'arak', 2, 20000, 40000),
(51, '2023-10-27', 'kerupuk', 14, 1000, 14000),
(52, '2023-10-27', 'rempeyek', 14, 1000, 14000),
(53, '2023-10-27', 'kacang', 14, 1000, 14000),
(54, '2023-10-28', 'nasi jinggo', 50, 3000, 150000),
(55, '2023-10-28', 'tuak', 20, 18000, 360000),
(56, '2023-10-28', 'kerupuk', 14, 1000, 14000),
(57, '2023-10-28', 'kacang', 14, 1000, 14000),
(58, '2023-10-28', 'rempeyek', 14, 1000, 14000),
(59, '2023-10-29', 'nasi jinggo', 50, 3000, 150000),
(60, '2023-10-29', 'tuak', 16, 18000, 288000),
(61, '2023-10-29', 'kerupuk', 14, 1000, 14000),
(62, '2023-10-29', 'kacang', 14, 1000, 14000),
(63, '2023-10-29', 'rempeyek', 14, 1000, 14000),
(64, '2023-11-02', 'nasi jinggo', 65, 3000, 195000),
(65, '2023-11-02', 'tuak', 16, 18000, 288000),
(66, '2023-11-02', 'kerupuk', 14, 1000, 14000),
(67, '2023-11-02', 'kacang', 14, 1000, 14000),
(68, '2023-11-02', 'rempeyek', 14, 1000, 14000),
(69, '2023-11-03', 'nasi jinggo', 50, 3000, 150000),
(70, '2023-11-03', 'tuak', 16, 18000, 288000),
(71, '2023-11-03', 'arak', 3, 20000, 60000),
(72, '2023-11-03', 'kerupuk', 14, 1000, 14000),
(73, '2023-11-03', 'rempeyek', 14, 1000, 14000),
(74, '2023-11-03', 'kacang', 14, 1000, 14000),
(75, '2023-11-04', 'nasi jinggo', 52, 3000, 156000),
(76, '2023-11-04', 'tuak', 20, 18000, 360000),
(77, '2023-11-04', 'arak', 1, 20000, 20000),
(78, '2023-11-04', 'kerupuk', 14, 1000, 14000),
(79, '2023-11-04', 'kacang', 14, 1000, 14000),
(80, '2023-11-04', 'rempeyek', 14, 1000, 14000),
(81, '2023-11-05', 'nasi jinggo', 50, 3000, 150000),
(82, '2023-11-05', 'tuak', 15, 18000, 270000),
(83, '2023-11-05', 'kerupuk', 14, 1000, 14000),
(84, '2023-11-05', 'kacang', 14, 1000, 14000),
(85, '2023-11-05', 'rempeyek', 14, 1000, 14000),
(86, '2023-11-24', 'Arak', 1, 20000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'adit', '$2y$10$ZvKSDntBy/9XsE9qQK80f.ArPHdtWThr839nXLyketmh7.ZYALlGW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
