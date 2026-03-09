-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2026 at 02:15 AM
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
-- Database: `affan_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `product_Name` varchar(255) NOT NULL,
  `product_Des` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `product_Name`, `product_Des`, `price`, `p_image`) VALUES
(14, 'It verse', 'sahiwal', '5000', 'accessory kits.webp'),
(17, 'Honda', 'CD 70', '360000', 'scooters2.webp'),
(18, 'Farid Town ', 'Sahiwal', '5000', '3d printer.webp'),
(19, 'AirPods ', 'Sony WH- ', '2500', 'airbud.webp'),
(20, 'Honda', 'CD 70', '360000', 'scooters2.webp'),
(21, 'It verse', 'sahiwal', '5000', 'Education.webp'),
(22, 'Smart Watch', 'T 500', '4000', 'wireless.webp'),
(23, 'heli', 'how are you', '140', 'war-tank-dark-style.jpg'),
(24, 'najam', 'hi', '123', 'pic main.webp'),
(25, 'najam', 'hi', '123', 'pic main.webp'),
(26, 'najam', 'hw', '123334', 'headphones.jfif'),
(27, 'Toyota', 'Mark X', '250000', 'car.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
