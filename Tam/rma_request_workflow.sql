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
-- Table structure for table `rma_request_workflow`
--

CREATE TABLE `rma_request_workflow` (
  `id_workflow` int(11) NOT NULL,
  `status_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status_label` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_to_customer` int(11) NOT NULL,
  `email_to_admin` int(11) NOT NULL,
  `added_by_store` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rma_request_workflow`
--

INSERT INTO `rma_request_workflow` (`id_workflow`, `status_code`, `status_label`, `email_to_customer`, `email_to_admin`, `added_by_store`) VALUES
(1, 'pending_approval', 'Pending approval', 0, 1, 1),
(2, 'approved', 'Approved', 1, 0, 1),
(3, 'package_sent', 'Package sent', 0, 1, 1),
(4, 'package_received', 'Package Received', 1, 0, 1),
(5, 'refund/exchage', 'Refun/Exchange', 1, 0, 1),
(6, 'closed', 'Closed', 1, 0, 1),
(7, 'canceled', 'Canceled', 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rma_request_workflow`
--
ALTER TABLE `rma_request_workflow`
  ADD PRIMARY KEY (`id_workflow`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rma_request_workflow`
--
ALTER TABLE `rma_request_workflow`
  MODIFY `id_workflow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
