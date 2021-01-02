-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 05:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Gundam Model'),
(2, 'Star Wars'),
(3, 'Military'),
(4, 'Tools'),
(5, 'Paint');

-- --------------------------------------------------------

--
-- Table structure for table `order-details`
--

CREATE TABLE `order-details` (
  `id_details` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order-details`
--

INSERT INTO `order-details` (`id_details`, `id_order`, `id_product`, `price`, `qty`) VALUES
(5, 5, 3, '400000', 1),
(6, 5, 9, '650000', 1),
(7, 6, 3, '400000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `nama`, `alamat`, `no_hp`, `date_updated`, `status`) VALUES
(5, 4, 'Pepega', 'Jl. Pepega no 69', '14045', '2020-12-29 09:31:50', 1),
(6, 6, 'Ramdani Kurnia', 'Malang', '140452', '2020-12-29 09:33:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `picture` varchar(100) NOT NULL,
  `price` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `category_id`, `name`, `stock`, `date_added`, `picture`, `price`) VALUES
(3, 1, 'RG Force Impulse Gundam', 20, '2020-12-04 01:07:55', 'forceimpulse.jpg', '400000'),
(9, 1, 'MG Strike Noir', 92, '2020-12-21 16:32:24', 'strikenoir.png', '650000'),
(10, 3, 'Metal Gear Rex Limited Ed Black Ver.', 7, '2020-12-21 16:33:08', 'metalgearrex.png', '2000000'),
(11, 3, '30MM Alto Ground Type Olive', 14, '2020-12-21 16:33:53', 'altogroundtype.png', '150000'),
(12, 4, 'GodHand SPN-120 Ultimate Nipper', 50, '2021-01-02 00:36:46', 'godhandspn120.png', '900000'),
(13, 4, 'Bandai Spirits Entry Nipper', 13, '2021-01-02 00:39:40', 'entry_nipper.png', '100000'),
(14, 4, 'Tamiya: Fine Pin Vise D-R', 28, '2021-01-02 00:41:23', 'tamiyapinvise.png', '250000'),
(15, 5, 'Mr Color SET - 6pcs - PAKET HEMAT', 29, '2021-01-02 00:41:48', 'mrcolor.png', '150000'),
(16, 2, 'Star Wars Death Star', 21, '2021-01-02 00:42:09', 'deathstar.png', '1425000'),
(17, 4, 'Vetus ST-15 Tweezer Stainless', 50, '2021-01-02 00:43:26', 'tweezer.png', '15000'),
(18, 3, 'X-02s Strike Wyvern 1/144', 22, '2021-01-02 00:49:11', 'x02s.png', '750000'),
(19, 3, 'Hobbyboss F-22 Raptor 1/72', 20, '2021-01-02 00:51:21', 'f22.png', '300000'),
(20, 3, 'Tamiya 1/35 Archer Anti Tank Gun', 23, '2021-01-02 00:52:39', 'archer.png', '542000'),
(21, 3, 'Meng Military Models 1/35 Husky TSV', 22, '2021-01-02 00:53:48', 'husky.png', '449000'),
(22, 1, 'RG 1/144 RX-93 ν Gundam', 40, '2021-01-02 00:57:13', 'nugundam.png', '590000'),
(23, 1, 'RG 1/144 MSN-04 Sazabi', 32, '2021-01-02 00:58:22', 'sazabi.png', '620000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(30) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `password`, `picture`, `role`) VALUES
(4, 'pepe', 'pepega', 'pepe@gmail.com', '$2y$10$m.8Ey00weXGrNn8XbPMrzud9H8cuARmoIRUNx07GM/MsBi4Rh2j.a', NULL, 1),
(5, 'syafiq', 'syafiq faray', 'syafiq@gmail.com', '$2y$10$zs43Wew3Yu8jF.4TC0B9puptmEZEubhM4s4ibLB6Dp/icVqSRf.0e', 'bima.png', 2),
(6, 'luki', 'luki adiatma', 'luki@gmail.com', '$2y$10$VMyICELz/B478nlchWGZ2eNe2t9sGdlkzkY9SP7nNSVJPcXMxvDg2', 'bima.png', 1),
(7, 'test1', 'test1', 'test1@gmail.com', '$2y$10$TuLkGIc8UVJoq3257xJK1e/ZaibPOhuqyEwu8zZa6GREF/F5VqDvm', 'pg-gundam-exia-lighting-model ', 1),
(8, 'test2', 'test2', 'test2@gmail.com', '$2y$10$TseAAZmQHBKaKlVcvi5fC.xHQsNiYRxZeborFgYfqawFs190x4yQ6', 'swordimpulse.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order-details`
--
ALTER TABLE `order-details`
  ADD PRIMARY KEY (`id_details`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order-details`
--
ALTER TABLE `order-details`
  MODIFY `id_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order-details`
--
ALTER TABLE `order-details`
  ADD CONSTRAINT `id_order` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
