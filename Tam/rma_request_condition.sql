-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 08:50 AM
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
-- Table structure for table `rma_request_condition`
--

CREATE TABLE `rma_request_condition` (
  `id_condition` int(11) NOT NULL,
  `id_reason` int(11) NOT NULL,
  `id_resolution` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_package` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rma_request_condition`
--

INSERT INTO `rma_request_condition` (`id_condition`, `id_reason`, `id_resolution`, `id_status`, `id_package`) VALUES
(1, 1, 1, 7, 1),
(2, 2, 1, 2, 2),
(3, 3, 2, 1, 3),
(4, 4, 1, 6, 1),
(5, 5, 1, 1, 3),
(6, 6, 1, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rma_request_condition`
--
ALTER TABLE `rma_request_condition`
  ADD PRIMARY KEY (`id_condition`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rma_request_condition`
--
ALTER TABLE `rma_request_condition`
  MODIFY `id_condition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
