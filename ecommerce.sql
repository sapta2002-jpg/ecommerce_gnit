-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2025 at 07:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `user_id`, `qty`, `price`) VALUES
(7, 10, 2, 4, '12000'),
(8, 11, 2, 5, '5000'),
(9, 10, 1, 2, '12000'),
(10, 11, 1, 1, '5000');

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
-- Table structure for table `orders_table`
--

CREATE TABLE `orders_table` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(5) NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_status` enum('pending','success','failed') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_table`
--

INSERT INTO `orders_table` (`order_id`, `user_id`, `country`, `state`, `city`, `pincode`, `payment_id`, `payment_status`) VALUES
(1, 1, 'India', 'West Bengal', 'kolkata', 700053, NULL, 'pending');

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
  `description` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `image`, `price`, `description`, `deleted_at`) VALUES
(10, 6, 'SONY HEADPHONE', '1754193299gallery-footer-4.jpg', '12000', 'axssx', NULL),
(11, 11, 'Canon 47', '1754193893gallery-3.jpg', '5000', 'good quality', NULL),
(12, 12, 'abc', '1754740092b-2.jpg', '100', 'ok', NULL),
(13, 13, 'SONY ', '1754289376laddugopal-3.jpg', '300', 'GOOD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_orders_table`
--

CREATE TABLE `sub_orders_table` (
  `sub_order_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_orders_table`
--

INSERT INTO `sub_orders_table` (`sub_order_id`, `order_id`, `product_id`, `user_id`, `qty`, `price`) VALUES
(1, 1, '10', '1', 3, '12000'),
(2, 1, '11', '1', 2, '5000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Customer') NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'SAYAN', 'SAHA', 'amisayan19@gmail.com', '$2y$10$SHJuEjwNefreNFxLMD5O/uLdm9j1ap5edH2xAtLaT6vSrFrm7OcFi', 'Customer'),
(2, 'Sapto', 'Ghosh', 'sapto@gmail.com', '$2y$10$umRRfkh4xZMn6HxEwUIFw.w1q2/.4K39ma7rBNIxnkMl4Cx6AUbdK', 'Customer'),
(3, 'SAYAN', 'SAHA', 'amisayan19@gmail.bb', '$2y$10$24kYmaCFSdGjLzLMkOsLuenBGgH2TeU1PpZw9uF1A1L2W3UeJCt/K', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_table`
--
ALTER TABLE `orders_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_orders_table`
--
ALTER TABLE `sub_orders_table`
  ADD PRIMARY KEY (`sub_order_id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders_table`
--
ALTER TABLE `orders_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_orders_table`
--
ALTER TABLE `sub_orders_table`
  MODIFY `sub_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
