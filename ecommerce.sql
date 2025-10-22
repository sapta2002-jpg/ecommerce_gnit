-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2025 at 06:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(2, 'Mobile Phone', '1754171798laddugopal-3.jpg'),
(3, 'Smartwatch', '1754171944laddugopal-3.jpg'),
(4, 'Tablet', '1754174961laddugopal-3.jpg'),
(5, 'Home Appliances', '1754176000laddugopal-3.jpg'),
(6, 'Headphones', '1754176006laddugopal-3.jpg'),
(8, 'Gaming Console', '1754176024laddugopal-3.jpg'),
(11, 'Camera', '1754192733causes-1.jpg'),
(12, 'Television', '1754288900laddugopal-3.jpg'),
(13, 'Home Appliances', '1754288938laddugopal-3.jpg'),
(14, 'Tablet', '1754740092b-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `image`, `price`, `description`) VALUES
(10, 6, 'SONY HEADPHONE', '1754193299gallery-footer-4.jpg', '12000', 'axssx'),
(11, 11, 'Canon 47', '1754193893gallery-3.jpg', '30000', 'good quality'),
(12, 20, 'abc', 'abc.png', '100', 'ok'),
(13, 13, 'SONY ', '1754289376laddugopal-3.jpg', '300', 'GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'SAYAN', 'SAHA', 'amisayan19@gmail.com', '$2y$10$SHJuEjwNefreNFxLMD5O/uLdm9j1ap5edH2xAtLaT6vSrFrm7OcFi'),
(2, 'SAYAN', 'SAHA', 'amisayan19@gmail.co', '$2y$10$umRRfkh4xZMn6HxEwUIFw.w1q2/.4K39ma7rBNIxnkMl4Cx6AUbdK'),
(3, 'SAYAN', 'SAHA', 'amisayan19@gmail.bb', '$2y$10$24kYmaCFSdGjLzLMkOsLuenBGgH2TeU1PpZw9uF1A1L2W3UeJCt/K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
