-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 09:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_brands`
--

CREATE TABLE `a_brands` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `a_brands`
--

INSERT INTO `a_brands` (`id`, `name`) VALUES
(1, 'Main Course'),
(2, 'Desert');

-- --------------------------------------------------------

--
-- Table structure for table `a_products`
--

CREATE TABLE `a_products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `a_products`
--

INSERT INTO `a_products` (`id`, `name`, `price`, `image`, `brand_id`) VALUES
(1, 'Spageti', '50000', 'img/spageti.png', 1),
(2, 'Tiramisu', '40000', 'tiramisu.png', 3),
(3, 'Spageti', '50000', 'spageti.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(8, 'Pan-seared Smoked Duck Breast', '60000', 'duck.png', 2),
(9, 'Grilled Yellow Fin Tuna Steak 200 gr', '80000', 'Steak.png', 1),
(10, 'Pan-seared Smoked Duck Breast', '60000', 'duck.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `price`, `description`, `category`, `quantity`) VALUES
(1, 'duck.png', 'Pan-seared Smoked Duck Breast', '60000', 'Beetroot puree, burnt orange segment, candied orange peel, duck & orange sauce', 'Small Plates', 0),
(2, 'rose.png', 'The Lychee Rose', '40000', 'Floral lychee mousse, strawberry gel, champagne espuma, vanilla micro sponge', 'Desserts', 0),
(3, 'spageti.png', 'Spaghetti Aglio Olio e Peperoncini With Prawn', '50000', 'Garlic, red chili, tiger prawn, grana padano, parsley, parmesan tuile', 'Pasta & Rice', 0),
(4, 'Steak.png', 'Grilled Yellow Fin Tuna Steak 200 gr', '80000', 'Tare glazed, pineapple salsa, avocado, tobiko', 'From The Grill', 0),
(5, 'Loaded.png', 'Ultimate Loaded Fries', '60000', 'Beef sausage, ground beef, pepperoni, mayo, cheese sauce', 'Bites', 0),
(6, 'pork.png', 'US Pork Chop 300 Gr', '70000', 'Contains Pork Chop from US, Marbling score 5, di dryage 30 hari', 'FROM THE GRILL', 99),
(7, 'steaks.png', 'AUS Stockyard Gold Angus Tomahawk', '120000', 'Australian beef, Angus, Grass Fed, Marbling score 3+, di dry age 28 hari', 'FROM THE GRILL', 99),
(8, 'Cheeseburger.png', 'Phoenix Cheeseburger', '120000', '100% Wagyu beef burger, dengan roti Brioche bun dan sauce tonkotsu khas Jepang', 'From The Grill', 99);

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_brands`
--
ALTER TABLE `a_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_products`
--
ALTER TABLE `a_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_brands`
--
ALTER TABLE `a_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `a_products`
--
ALTER TABLE `a_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
