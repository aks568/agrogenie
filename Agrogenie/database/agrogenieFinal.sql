-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 08:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrogenie`
--

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(256) NOT NULL,
  `min_price` float NOT NULL,
  `max_price` float NOT NULL,
  `unit` varchar(20) NOT NULL DEFAULT 'Per kg',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crop_order`
--

CREATE TABLE `crop_order` (
  `id` varchar(50) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `crop_id` int(11) NOT NULL,
  `quantity` int(15) NOT NULL,
  `order_amount` float NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `dealer_id`, `name`, `unit`, `price`, `image`) VALUES
(1, 1, 'Hand Sickle', 'hs', 1500, 'img/1.jpg'),
(2, 1, 'Axe', 'axe', 700, 'img/2.jpg'),
(3, 1, 'Pick-Axe', 'paxe', 1250, 'img/3.jpg'),
(4, 1, 'Rake', 'rk', 2800, 'img/4.jpg'),
(5, 1, 'Wheel Barrow', 'wb', 10000, 'img/5.jpg'),
(6, 1, 'Harvester', 'hv', 459000, 'img/6.jpg'),
(7, 1, 'Sprinkler', 'spk', 10000, 'img/7.jpg'),
(8, 1, 'Baler', 'bl', 75890, 'img/8.jpg'),
(9, 1, 'Planter Machine', 'plmach', 3450000, 'img/9.jpg'),
(10, 1, 'Land Imprinter', 'limprint', 172300, 'img/10.jpg'),
(11, 1, 'Motocultor', 'moto', 200000, 'img/11.jpg'),
(12, 1, 'Tractor', 'trct', 1090000, 'img/12.jpg'),
(13, 1, 'Shovel', 'shv', 2289, 'img/13.jpg'),
(14, 1, 'Agriculture drones', 'ag_drones', 25700, 'img/14.jpg'),
(15, 1, 'Hey Rake', 'hyrk', 1700, 'img/15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Role` varchar(50) NOT NULL DEFAULT 'farmer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `Name`, `Email`, `Contact`, `Role`) VALUES
(1, 'dealer', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'dealer', 'dealer@m.com', '9384987483', 'dealer'),
(2, 'farmer', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'farmer', 'farmer@farmer.com', '9484757575', 'farmer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farmer_crop` (`farmer_id`);

--
-- Indexes for table `crop_order`
--
ALTER TABLE `crop_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_crop_order` (`buyer_id`),
  ADD KEY `farmer_crop_order` (`farmer_id`),
  ADD KEY `crop_id_crop_order` (`crop_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dealer_product` (`dealer_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id_transaction` (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crop`
--
ALTER TABLE `crop`
  ADD CONSTRAINT `farmer_crop` FOREIGN KEY (`farmer_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `crop_order`
--
ALTER TABLE `crop_order`
  ADD CONSTRAINT `buyer_crop_order` FOREIGN KEY (`buyer_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `crop_id_crop_order` FOREIGN KEY (`crop_id`) REFERENCES `crop` (`id`),
  ADD CONSTRAINT `farmer_crop_order` FOREIGN KEY (`farmer_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `dealer_product` FOREIGN KEY (`dealer_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `order_id_transaction` FOREIGN KEY (`order_id`) REFERENCES `crop_order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
