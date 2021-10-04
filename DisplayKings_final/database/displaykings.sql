-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 06:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `displaykings`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brnad_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`, `brnad_image`) VALUES
(1, 'Apple', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Apple-logo.png/480px-Apple-logo.png'),
(2, 'LG', 'https://www.logo.wine/a/logo/LG_Corporation/LG_Corporation-Logo.wine.svg'),
(3, 'Xiaomi', 'https://www.logo.wine/a/logo/Xiaomi/Xiaomi-Logo.wine.svg'),
(4, 'Asus', 'https://www.logo.wine/a/logo/Asus/Asus-Logo.wine.svg'),
(5, 'Dell', 'https://www.logo.wine/a/logo/Dell/Dell-Logo.wine.svg');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `model`, `brand_id`, `price`, `item_image`, `item_register`) VALUES
(1, 'Asus 32" ProArt PA32UCX 4K', 4, 2599, './assets/ProArt.png', '2020-03-28 11:08:57'), -- NOW()
(2, 'Asus 27" ROG Gaming Monitor 240Hz', 4, 999, './assets/rog27.jpg', '2020-03-28 11:08:57'),
(3, 'LG 34" 21:9 UltraWide 5K2K', 2, 1299, './assets/MVP.jpg', '2020-03-28 11:08:57'),
(4, 'LG 32" UltraFine™ Display Ergo 4K HDR10', 2, 699, './assets/ultrafine.png', '2020-03-28 11:08:57'),
(5, 'Dell 32" UltraSharp UP3218K 8K', 5, 3799, './assets/ultrasharp27.jpg', '2020-03-28 11:08:57'),
(6, 'Apple ProDisplay XDR', 1, 4999, './assets/proxdr.jpg', '2020-03-28 11:08:57'),
(7, 'New! Xiaomi Mi 34" UltraWide Gaming Monitor', 3, 359, './assets/xiaomi.png', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwordUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `ime`, `prezime`, `username`, `email`, `passwordUser`) VALUES
(1, 'Nikola', 'Soric', 'soric_nikola', 'soric.nikola@gmail.com', '12345'),
(2, 'Igor', 'Stojanov', 'stojanov_igor', 'igorstojanov@gmail.com', '12345'),
(3, 'Nikola', 'Skadric', 'skadric_nikola', 'nikolaskadric@gmail.com', '12345'),
(4, 'Lazar', 'Ilic', 'ilic_lazar', 'lazarilic@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `card_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
