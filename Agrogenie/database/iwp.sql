-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 05:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `epqno` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `epqcat` varchar(200) NOT NULL,
  `cost` int(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `epqno`, `name`, `epqcat`, `cost`, `img`, `description`) VALUES
(4, '4389', 'KLU', 'Extra', 76555, 'uploadfolder/Fall TT.PNG', 'Blah blah'),
(8, '976', 'kl', 'A', 1200, 'uploadfolder/rip0 (1).png', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Contact` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `username`, `password`, `Name`, `Email`, `Contact`) VALUES
(1, 'rahul', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Rahul', 'rahul.t@gmail.com', 988888),
(2, 'jk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'John K', 'jk@gmail.com', 999999);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Hand Sickle', 'hs', 1500, 'img/1.jpg'),
(2, 'Axe', 'axe', 700, 'img/2.jpg'),
(3, 'Pick-Axe', 'paxe', 1250, 'img/3.jpg'),
(4, 'Rake', 'rk', 2800, 'img/4.jpg'),
(5, 'Wheel Barrow', 'wb', 10000, 'img/5.jpg'),
(6, 'Harvester', 'hv', 459000, 'img/6.jpg'),
(7, 'Sprinkler', 'spk', 10000, 'img/7.jpg'),
(8, 'Baler', 'bl', 75890, 'img/8.jpg'),
(9, 'Planter Machine', 'plmach', 3450000, 'img/9.jpg'),
(10, 'Land Imprinter', 'limprint', 172300, 'img/10.jpg'),
(11, 'Motocultor', 'moto', 200000, 'img/11.jpg'),
(12, 'Tractor', 'trct', 1090000, 'img/12.jpg'),
(13, 'Shovel', 'shv', 2289, 'img/13.jpg'),
(14, 'Agriculture drones', 'ag_drones', 25700, 'img/14.jpg'),
(15, 'Hey Rake', 'hyrk', 1700, 'img/15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
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
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
