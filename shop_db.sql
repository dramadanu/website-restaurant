-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2023 pada 05.35
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

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
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'main course'),
(2, 'dessert'),
(3, 'drink '),
(4, 'snack');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `price`, `description`, `category`, `quantity`) VALUES
(1, 'duck.png', 'Pan-seared Smoked Duck Breast', '60000', 'Beetroot puree, burnt orange segment, candied orange peel, duck & orange sauce', 1, 0),
(2, 'rose.png', 'The Lychee Rose', '40000', 'Floral lychee mousse, strawberry gel, champagne espuma, vanilla micro sponge', 2, 0),
(3, 'spageti.png', 'Spaghetti Aglio Olio e Peperoncini With Prawn', '50000', 'Garlic, red chili, tiger prawn, grana padano, parsley, parmesan tuile', 3, 0),
(4, 'Steak.png', 'Grilled Yellow Fin Tuna Steak 200 gr', '80000', 'Tare glazed, pineapple salsa, avocado, tobiko', 4, 0),
(5, 'Loaded.png', 'Ultimate Loaded Fries', '60000', 'Beef sausage, ground beef, pepperoni, mayo, cheese sauce', 1, 0),
(6, 'pork.png', 'US Pork Chop 300 Gr', '70000', 'Contains Pork Chop from US, Marbling score 5, di dryage 30 hari', 2, 99),
(7, 'steaks.png', 'AUS Stockyard Gold Angus Tomahawk', '120000', 'Australian beef, Angus, Grass Fed, Marbling score 3+, di dry age 28 hari', 3, 99),
(8, 'Cheeseburger.png', 'Phoenix Cheeseburger', '120000', '100% Wagyu beef burger, dengan roti Brioche bun dan sauce tonkotsu khas Jepang', 4, 99);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
