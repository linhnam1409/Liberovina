-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 08:51 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magento_2_1_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `rma_request_resolution`
--

CREATE TABLE `rma_request_resolution` (
  `id_resolution` int(11) NOT NULL,
  `resolution_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resolution_label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rma_request_resolution`
--

INSERT INTO `rma_request_resolution` (`id_resolution`, `resolution_code`, `resolution_label`, `note`) VALUES
(1, 'refund', 'Refund', ''),
(2, 'replacement', 'Replacement', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rma_request_resolution`
--
ALTER TABLE `rma_request_resolution`
  ADD PRIMARY KEY (`id_resolution`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rma_request_resolution`
--
ALTER TABLE `rma_request_resolution`
  MODIFY `id_resolution` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
