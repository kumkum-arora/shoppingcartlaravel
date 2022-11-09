-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 07:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enest`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `login_id`, `product_id`, `price`, `qty`, `total`) VALUES
(3, 1, 8, '10000', 1, 10000),
(5, 3, 9, '17000', 2, 34000),
(7, 3, 8, '10000', 1, 1000),
(8, 3, 5, '12000', 2, 24000),
(9, 2, 8, '10000', 3, 30000),
(10, 2, 6, '13000', 5, 65000),
(11, 2, 5, '12000', 1, 12000),
(13, 3, 1, '6500', 1, 6500),
(14, 2, 8, '10000', 1, 10000),
(15, 3, 7, '9000', 2, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`) VALUES
(1, 'TVs'),
(2, 'Dishwasher\r\n'),
(3, 'Ranges'),
(4, 'Computer'),
(5, 'Blu-ray & DVD Player'),
(6, 'Projectors'),
(7, 'Hometheater System'),
(8, 'Cameras'),
(9, 'Camcorders'),
(10, 'Washer & Dryers'),
(11, 'Refrigerators'),
(12, 'Microwaves');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'kajal', 'krsbarora6@gmail.com', 'error'),
(2, 'ishant', 'ishant@gmail.com', 'find an error');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `email`, `password`) VALUES
(1, 'Kumkum', 'kumkum@gmail.com', 'kum123'),
(2, 'palak', 'Palak@gmail.com', 'palak123'),
(3, 'rishab', 'rishab@gmail.com', 'rishab123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `manufact` varchar(255) NOT NULL,
  `instock` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `proimage` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categoryid`, `productname`, `model`, `manufact`, `instock`, `price`, `proimage`, `time`) VALUES
(1, 2, 'Dishwasher', 'Dishwasher', 'Dishwasher', '350', 6500, '12.jpg', '2022-11-01 06:54:26'),
(2, 2, 'LG-Dishwasher', 'LG-Dishwasher', 'LG-Dishwasher', '550', 7999, '3.jpg', '2022-11-01 06:54:32'),
(3, 2, 'IFB-Dishwasher', 'IFB-Dishwasher', 'IFB-Dishwasher', '556', 8500, '12.jpg', '2022-11-01 06:54:35'),
(4, 2, 'Inverter Dishwasher', 'Dish256', 'Dishwashers infotech', '562', 9000, '10.png', '2022-11-01 06:54:38'),
(5, 8, 'Camera', 'cem7521', 'Camera Manufacturers', '756', 12000, 'kod.jpg', '2022-11-01 06:54:58'),
(6, 1, 'Acer Moniter', 'moni43xf', 'manufacturers', '456', 13000, 'acer.jpg', '2022-11-01 06:55:15'),
(7, 1, 'Samsung LED', 'smsun245', 'Samsung', '484', 9000, 'sam.png', '2022-11-01 06:55:18'),
(8, 8, 'Sony Camera', 'cem263', 'infotechs', '487', 10000, 'sony.png', '2022-11-01 08:46:34'),
(9, 4, 'Computer', 'cvb215', 'computers', '1165', 17000, 'com.jpg', '2022-11-02 05:04:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`product_id`),
  ADD KEY `loginid` (`login_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `loginid` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`),
  ADD CONSTRAINT `productid` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
