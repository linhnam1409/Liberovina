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
-- Table structure for table `rma_request_product`
--

CREATE TABLE `rma_request_product` (
  `id_request` int(11) NOT NULL,
  `customer_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `customer_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price_return` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `reason` int(11) NOT NULL,
  `resolution` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `package` int(11) NOT NULL,
  `order_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rma_request_product`
--

INSERT INTO `rma_request_product` (`id_request`, `customer_name`, `customer_email`, `product_id`, `price_return`, `reason`, `resolution`, `status`, `message`, `package`, `order_id`, `create_at`, `update_at`) VALUES
(5, 'Tam Le Minh', 'leminhtamboy@gmail.com', '1817', '0', 2, 1, 2, '', 2, '4', '2018-01-20 05:21:41', '2018-01-20 05:21:41'),
(6, 'Tam Le Minh', 'leminhtamboy@gmail.com', '1817', '0', 1, 1, 7, '', 1, '4', '2018-01-22 10:37:54', '2018-01-22 10:37:54'),
(7, 'Tam Le Minh', 'leminhtamboy@gmail.com', '163', '0', 1, 1, 7, 'sdadasdsadsadsadsdasdsadalkjdlaskdjlaskjdalskjdlaskjdlaskjd', 1, '3', '2018-01-23 07:31:00', '2018-01-23 07:31:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rma_request_product`
--
ALTER TABLE `rma_request_product`
  ADD PRIMARY KEY (`id_request`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rma_request_product`
--
ALTER TABLE `rma_request_product`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
