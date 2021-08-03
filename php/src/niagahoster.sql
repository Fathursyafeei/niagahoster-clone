-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 05:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niagahoster`
--

-- --------------------------------------------------------

--
-- Table structure for table `pricing_plans`
--

CREATE TABLE `pricing_plans` (
  `id` int(5) NOT NULL,
  `pricing_name` varchar(255) NOT NULL,
  `old_price` int(6) NOT NULL,
  `front_newPrice` int(3) NOT NULL,
  `back_newPrice` int(3) NOT NULL,
  `registered_user` int(6) NOT NULL,
  `best_seller` enum('yes','no') NOT NULL,
  `resource_power` varchar(9) NOT NULL,
  `disk_space` varchar(9) NOT NULL,
  `domain` varchar(9) NOT NULL,
  `POP3` enum('yes','no') NOT NULL,
  `free_domain` enum('yes','no') NOT NULL,
  `name_server` enum('yes','no') NOT NULL,
  `service_support` enum('yes','no') NOT NULL,
  `mail_protection` enum('SpamExpert','SpamAssasin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_plans`
--

INSERT INTO `pricing_plans` (`id`, `pricing_name`, `old_price`, `front_newPrice`, `back_newPrice`, `registered_user`, `best_seller`, `resource_power`, `disk_space`, `domain`, `POP3`, `free_domain`, `name_server`, `service_support`, `mail_protection`) VALUES
(1, 'Bayi', 19900, 14, 900, 938, 'no', '0.5', '500 MB', '1', 'no', 'no', 'no', 'no', ''),
(2, 'Pelajar', 46900, 23, 450, 4168, 'no', '1', 'Unlimited', '10', 'yes', 'yes', 'no', 'no', ''),
(3, 'Personal', 58900, 38, 900, 10017, 'yes', '2', 'Unlimited', 'Unlimited', 'yes', 'yes', 'yes', 'no', 'SpamAssasin'),
(4, 'Bisnis', 109900, 65, 900, 3552, 'no', '3', 'Unlimited', 'Unlimited', 'yes', 'yes', 'yes', 'yes', 'SpamExpert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
