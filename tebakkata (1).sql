-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 08:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tebakkata`
--

-- --------------------------------------------------------

--
-- Table structure for table `kata`
--

CREATE TABLE `kata` (
  `id` int(11) NOT NULL,
  `kata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kata`
--

INSERT INTO `kata` (`id`, `kata`) VALUES
(1, 'love'),
(2, 'ikan\r\n'),
(3, 'bawang'),
(4, 'sawi'),
(5, 'kunyit'),
(6, 'putih'),
(9, 'kuda'),
(10, ' biru'),
(11, 'pulau'),
(12, 'bahagia'),
(17, 'semangat'),
(21, 'kulit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kata`
--
ALTER TABLE `kata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kata`
--
ALTER TABLE `kata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
