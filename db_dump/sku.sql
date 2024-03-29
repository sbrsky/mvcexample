-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2019 at 01:58 PM
-- Server version: 8.0.15
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `sku`
--

CREATE TABLE `sku` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `size` int(15) DEFAULT '0',
  `weight` int(15) DEFAULT '0',
  `height` int(15) DEFAULT '0',
  `width` int(15) DEFAULT '0',
  `length` int(15) DEFAULT '0',
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sku`
--

INSERT INTO `sku` (`id`, `name`, `price`, `sku`, `size`, `weight`, `height`, `width`, `length`, `type`) VALUES
(80, 'Sony', '298.23', 'JVC200123', 700, 0, 0, 0, 0, 'dvd'),
(81, 'Philip Dick', '18.69', 'GGWP0007', 0, 2, 0, 0, 0, 'book'),
(82, 'Chair', '48.67', 'TR1298SKU', 0, 0, 4, 5, 14, 'furniture');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sku`
--
ALTER TABLE `sku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sku`
--
ALTER TABLE `sku`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
