-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 04:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krishnajewellers`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sno` int(11) NOT NULL,
  `pname` tinytext DEFAULT NULL,
  `pid` tinytext DEFAULT NULL,
  `pimage` tinytext DEFAULT NULL,
  `price` tinytext DEFAULT NULL,
  `userid` tinytext DEFAULT NULL,
  `category` tinytext DEFAULT NULL,
  `timeStam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sno` int(11) NOT NULL,
  `name` tinytext DEFAULT NULL,
  `email` tinytext DEFAULT NULL,
  `subject` tinytext DEFAULT NULL,
  `message` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupontable`
--

CREATE TABLE `coupontable` (
  `sno` int(11) NOT NULL,
  `code` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupontable`
--

INSERT INTO `coupontable` (`sno`, `code`) VALUES
(1, 'KUSHAL10');

-- --------------------------------------------------------

--
-- Table structure for table `deliverydetails`
--

CREATE TABLE `deliverydetails` (
  `sno` int(11) NOT NULL,
  `userid` tinytext DEFAULT NULL,
  `fname` tinytext DEFAULT NULL,
  `lname` tinytext DEFAULT NULL,
  `number` tinytext DEFAULT NULL,
  `email` tinytext DEFAULT NULL,
  `state` tinytext DEFAULT NULL,
  `add1` tinytext DEFAULT NULL,
  `add2` tinytext DEFAULT NULL,
  `pincode` tinytext DEFAULT NULL,
  `city` tinytext DEFAULT NULL,
  `price` tinytext DEFAULT NULL,
  `orderid` tinytext DEFAULT NULL,
  `timestam` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverydetails`
--

INSERT INTO `deliverydetails` (`sno`, `userid`, `fname`, `lname`, `number`, `email`, `state`, `add1`, `add2`, `pincode`, `city`, `price`, `orderid`, `timestam`) VALUES
(0, '8d2ff216', 'Kushal', 'Ghosh', '123456789', 'kushalghosh9899@gmail.com', 'Delhi', 'asas', 'sada', 'asdad', 'asda', '22000', 'ORDS87590497', '2020-12-10 15:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `sno` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `timeStam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `sno` int(11) NOT NULL,
  `pname` tinytext DEFAULT NULL,
  `pid` tinytext DEFAULT NULL,
  `pimage` tinytext DEFAULT NULL,
  `price` tinytext DEFAULT NULL,
  `userid` tinytext DEFAULT NULL,
  `category` tinytext DEFAULT NULL,
  `orderid` tinytext DEFAULT NULL,
  `timeStam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`sno`, `pname`, `pid`, `pimage`, `price`, `userid`, `category`, `orderid`, `timeStam`) VALUES
(0, 'Queen Bracelet', '1', 'b1.jpg', '22000', '8d2ff216', 'bracelets', 'ORDS87590497', '2020-12-10 15:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sno` int(11) NOT NULL,
  `pname` varchar(22) NOT NULL,
  `pimage` varchar(6) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(9) NOT NULL,
  `weight` int(11) NOT NULL,
  `goldWght` int(11) NOT NULL,
  `DiamondWght` int(11) DEFAULT NULL,
  `goldPurity` int(11) NOT NULL,
  `hallmarking` varchar(3) NOT NULL,
  `width` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sno`, `pname`, `pimage`, `price`, `category`, `weight`, `goldWght`, `DiamondWght`, `goldPurity`, `hallmarking`, `width`, `length`, `height`) VALUES
(1, 'Queen Bracelet', 'b1.jpg', 22000, 'bracelets', 25, 20, 5, 22, 'yes', 5, 30, NULL),
(2, 'Gold Bracelet', 'b2.jpg', 22500, 'bracelets', 22, 22, NULL, 22, 'yes', 4, 35, NULL),
(3, 'Rose Gold Bracelet', 'b3.jpg', 25000, 'bracelets', 25, 19, 6, 22, 'yes', 8, 28, NULL),
(4, 'Platinum Bracelet', 'b4.jpg', 36000, 'bracelets', 20, 17, 3, 22, 'yes', 4, 14, NULL),
(5, 'Name Bracelet', 'b5.jpg', 34500, 'bracelets', 18, 18, NULL, 22, 'yes', 4, 18, NULL),
(6, 'Diamond Earrings', 'e1.jpg', 20000, 'earrings', 30, 20, 10, 22, 'yes', NULL, 3, 6),
(7, 'Traditional Earring', 'e2.jpg', 32000, 'earrings', 35, 25, 10, 22, 'yes', NULL, 5, 10),
(8, 'Jhumka', 'e3.jpg', 18000, 'earrings', 40, 28, 12, 22, 'yes', NULL, 7, 12),
(9, 'Pearl Jhumka', 'e4.jpg', 22000, 'earrings', 43, 23, 20, 22, 'yes', NULL, 9, 12),
(10, 'Gold Jhumka', 'e5.jpg', 17500, 'earrings', 38, 38, NULL, 22, 'yes', NULL, 7, 12),
(11, 'Gold Neclace Set', 'n1.jpg', 55000, 'necklace', 120, 80, 40, 22, 'yes', NULL, 12, 8),
(12, 'Pink Necklace Set', 'n2.jpg', 60500, 'necklace', 130, 80, 50, 22, 'yes', NULL, 15, 8),
(13, 'White Gold Necklace', 'n3.jpg', 32500, 'necklace', 50, 35, 15, 22, 'yes', NULL, 10, 5),
(14, 'Bridal Necklace Set', 'n4.jpg', 65000, 'necklace', 150, 100, 50, 22, 'yes', NULL, 20, 10),
(15, 'Simple Gold Necklace', 'n5.jpg', 22000, 'necklace', 40, 32, 8, 22, 'yes', NULL, 10, 5),
(16, 'Rose Gold Ring', 'r1.jpg', 15000, 'rings', 20, 15, 5, 22, 'yes', 2, NULL, 3),
(17, 'Gold Ring', 'r2.jpg', 17000, 'rings', 25, 19, 6, 22, 'yes', 3, NULL, 4),
(18, 'White Gold Ring', 'r3.jpg', 20000, 'rings', 18, 12, 6, 22, 'yes', 2, NULL, 3),
(19, 'Queen Ring', 'r4.jpg', 22600, 'rings', 20, 15, 5, 22, 'yes', 2, NULL, 3),
(20, 'Platinum Wedding Bands', 'r5.jpg', 45000, 'rings', 38, 38, NULL, 22, 'yes', 3, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `trackordercomments`
--

CREATE TABLE `trackordercomments` (
  `sno` int(11) NOT NULL,
  `userid` tinytext DEFAULT NULL,
  `product_name` tinytext DEFAULT NULL,
  `orderPlaced` tinytext DEFAULT NULL,
  `orderProcessing` tinytext DEFAULT NULL,
  `dispatchReady` tinytext DEFAULT NULL,
  `delivery` tinytext DEFAULT NULL,
  `delivered` tinytext DEFAULT NULL,
  `orderComplete` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackordercomments`
--

INSERT INTO `trackordercomments` (`sno`, `userid`, `product_name`, `orderPlaced`, `orderProcessing`, `dispatchReady`, `delivery`, `delivered`, `orderComplete`) VALUES
(0, '8d2ff216', 'Queen Bracelet', '2020-12-10', 'Processing', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trackorderstatus`
--

CREATE TABLE `trackorderstatus` (
  `sno` int(11) NOT NULL,
  `userid` tinytext DEFAULT NULL,
  `product_name` tinytext DEFAULT NULL,
  `orderPlaced` tinytext DEFAULT NULL,
  `orderProcessing` tinytext DEFAULT NULL,
  `dispatchReady` tinytext DEFAULT NULL,
  `delivery` tinytext DEFAULT NULL,
  `delivered` tinytext DEFAULT NULL,
  `orderComplete` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackorderstatus`
--

INSERT INTO `trackorderstatus` (`sno`, `userid`, `product_name`, `orderPlaced`, `orderProcessing`, `dispatchReady`, `delivery`, `delivered`, `orderComplete`) VALUES
(0, '8d2ff216', 'Queen Bracelet', 'done', 'done', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trending`
--

CREATE TABLE `trending` (
  `sno` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` tinytext DEFAULT NULL,
  `pimage` tinytext DEFAULT NULL,
  `price` tinytext DEFAULT NULL,
  `category` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trending`
--

INSERT INTO `trending` (`sno`, `pid`, `pname`, `pimage`, `price`, `category`) VALUES
(1, 8, 'Jhumka', 'e3.jpg', '18000', 'earrings');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `user_id` tinytext DEFAULT NULL,
  `fname` tinytext DEFAULT NULL,
  `lname` tinytext DEFAULT NULL,
  `uidUsers` tinytext DEFAULT NULL,
  `emailUsers` tinytext DEFAULT NULL,
  `pwdUsers` tinytext DEFAULT NULL,
  `timeStam` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_id`, `fname`, `lname`, `uidUsers`, `emailUsers`, `pwdUsers`, `timeStam`) VALUES
(0, '8d2ff216', 'Kushal', 'Ghosh', 'kushal123', 'kushalghosh9899@gmail.com', '$2y$10$vzmETbywbnfysdUt2o/XNuqDNKvOIyl32xqq.Yt5cEjBK1vyOO/Ba', '2020-11-18 08:27:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `coupontable`
--
ALTER TABLE `coupontable`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `trackordercomments`
--
ALTER TABLE `trackordercomments`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `trackorderstatus`
--
ALTER TABLE `trackorderstatus`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `trending`
--
ALTER TABLE `trending`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupontable`
--
ALTER TABLE `coupontable`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
