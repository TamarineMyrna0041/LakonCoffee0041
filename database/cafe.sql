-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 08:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(1, 'Persiapan untuk simulasi soft opening', '2023-08-21 10:00:00', '2023-08-26 20:00:00'),
(2, 'Barista mulai mempelajari menu', '2023-08-12 10:00:00', '2023-08-19 17:00:00'),
(3, 'tahap seleksi awal pegawai', '2023-05-08 09:30:00', '2023-05-10 17:00:00'),
(4, 'testing 1', '2023-04-30 00:00:00', '2023-05-01 00:00:00'),
(5, 'guess what?', '2023-04-28 21:00:00', '2023-04-28 21:30:00'),
(6, 'testing 2', '2023-05-04 16:30:00', '2023-05-05 16:30:00'),
(7, 'tester', '2023-05-05 06:00:00', '2023-05-05 10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `kodebarang` int(11) NOT NULL,
  `namabarang` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(250) CHARACTER SET latin1 NOT NULL,
  `username` varchar(250) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `level` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(4, 'anna', 'anna', '0079fcb602361af76c4fd616d60f9414', ''),
(5, 'anna', 'anna', '0079fcb602361af76c4fd616d60f9414', ''),
(6, 'anna', 'anna', '00e11252db1051387c47521767296b42', ''),
(7, 'nana', 'nana', '0079fcb602361af76c4fd616d60f9414', ''),
(8, 'nana', 'nana', '0079fcb602361af76c4fd616d60f9414', ''),
(9, 'nanot', 'nanot', '0079fcb602361af76c4fd616d60f9414', 'admin'),
(10, 'nanot', 'nanot', '112ea00ee1f7a75ab633bcb48a6b1ec1', 'staff'),
(11, 'hola', 'hola', '4d186321c1a7f0f354b297e8914ab240', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`kodebarang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `kodebarang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
