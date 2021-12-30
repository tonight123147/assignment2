-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 06:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoponline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cateID` int(10) UNSIGNED NOT NULL,
  `cateName` varchar(50) NOT NULL,
  `isShow` varchar(10) NOT NULL,
  `createDate` date DEFAULT current_timestamp(),
  `modifyDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cateID`, `cateName`, `isShow`, `createDate`, `modifyDate`) VALUES
(11, 'Phụ kiện nón', 'checked', '2021-12-30', '2021-12-31'),
(13, 'nón full face', 'checked', '2021-12-30', '2021-12-31'),
(15, 'Nón 3/4 ', 'checked', '2021-12-30', '2021-12-31'),
(17, 'Phụ kiện đi phượt', 'checked', '2021-12-30', '2021-12-31'),
(18, 'Nón Vip', 'checked', '2021-12-30', '2021-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `modifyDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) UNSIGNED NOT NULL,
  `customerID` int(10) UNSIGNED NOT NULL,
  `orderDate` date NOT NULL DEFAULT current_timestamp(),
  `orderCostTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderID` int(10) UNSIGNED NOT NULL,
  `proID` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `orderDetailCost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `proID` int(10) UNSIGNED NOT NULL,
  `proImage` varchar(200) DEFAULT NULL,
  `proCateID` int(10) UNSIGNED NOT NULL,
  `proName` varchar(50) NOT NULL,
  `proDesc` text NOT NULL,
  `proMadeIn` varchar(50) DEFAULT NULL,
  `proCost` varchar(100) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL,
  `isShow` varchar(10) NOT NULL,
  `createDate` date DEFAULT current_timestamp(),
  `modifyDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proID`, `proImage`, `proCateID`, `proName`, `proDesc`, `proMadeIn`, `proCost`, `number`, `isShow`, `createDate`, `modifyDate`) VALUES
(41, 'fullface3.jpg', 13, 'Nón Full Face', 'Đỉnh luôn', 'USA', '11,000,000', '10', 'checked', '2021-12-30', '2021-12-30'),
(44, 'KINH M139.png', 11, 'mũ đẹp proppp', '11', 'Việt Nam', '10,000,000', '10', 'checked', '2021-12-30', '2021-12-30'),
(45, 'fullface4.jpg', 13, 'full face 1', 'nón không hư là gì \r\nnón làm từ kim cương', 'USA', '10.000.000 Vnđ', '10', 'checked', '2021-12-30', '2021-12-30'),
(47, '3-4mot.jpg', 15, 'Nón 3/4 ', 'Nón bền và khỏe\r\nLâu hư', 'Việt Nam', '10,000,000', '10', 'checked', '2021-12-30', '2021-12-30'),
(49, 'den-diet-con-trung-3-200x200.jpg', 17, 'Đèn pin', 'Đuổi mũi rất tốt\r\nÍt hoa pin', 'Việt Nam', '1,000,000', '100', '', '2021-12-30', '2021-12-30'),
(50, 'IMG_5910.JPG', 13, 'Fullface7', '125456', 'China', '11.000.000', '10', 'checked', '2021-12-30', '2021-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cateID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `customerID` (`customerID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD UNIQUE KEY `proID` (`proID`),
  ADD UNIQUE KEY `orderID` (`orderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proID`),
  ADD KEY `proCateID` (`proCateID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cateID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`proID`) REFERENCES `product` (`proID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`proCateID`) REFERENCES `category` (`cateID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
