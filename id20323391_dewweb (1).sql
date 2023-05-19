-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 19 พ.ค. 2023 เมื่อ 01:14 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20323391_dewweb`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `invoice`
--

CREATE TABLE `invoice` (
  `SID` int(11) NOT NULL,
  `INVOICE_NO` int(11) NOT NULL,
  `INVOICE_DATE` date NOT NULL,
  `CNAME` varchar(50) CHARACTER SET utf8 NOT NULL,
  `CADDRESS` varchar(150) CHARACTER SET utf8 NOT NULL,
  `CCITY` varchar(50) CHARACTER SET utf8 NOT NULL,
  `GRAND_TOTAL` double(10,2) NOT NULL,
  `status` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- dump ตาราง `invoice`
--

INSERT INTO `invoice` (`SID`, `INVOICE_NO`, `INVOICE_DATE`, `CNAME`, `CADDRESS`, `CCITY`, `GRAND_TOTAL`, `status`) VALUES
(27, 1, '2023-03-10', 'Dew', 'Tadapong', '0646282730', 9998.00, 'no'),
(28, 2, '2023-03-10', 'Pop', 'Kamon', '0993991029', 2871.00, 'yes'),
(29, 3, '2023-03-10', 'Miew', 'Sirapapra', '0883749503', 6826.00, 'yes'),
(30, 4, '2023-03-11', 'Nok', 'Rinakha', '0839405821', 1043.00, 'no'),
(31, 5, '2023-03-11', 'Bob', 'Darigun', '0825729348', 3698.00, 'no'),
(32, 6, '2023-03-14', 'New', 'Jaruwit', '0876542839', 11896.00, 'no');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `invoice_products`
--

CREATE TABLE `invoice_products` (
  `ID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `PNAME` varchar(100) CHARACTER SET utf8 NOT NULL,
  `PRICE` double(10,2) NOT NULL,
  `QTY` int(11) NOT NULL,
  `TOTAL` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- dump ตาราง `invoice_products`
--

INSERT INTO `invoice_products` (`ID`, `SID`, `PNAME`, `PRICE`, `QTY`, `TOTAL`) VALUES
(33, 27, 'reverse room hi-end', 4999.00, 2, 9998.00),
(34, 28, 'Sealmon ', 399.00, 3, 1197.00),
(35, 28, 'RiceEgg', 349.00, 1, 349.00),
(36, 28, 'Meetvagill', 499.00, 2, 998.00),
(37, 28, 'Salad', 149.00, 1, 149.00),
(38, 28, 'I-Cream', 89.00, 2, 178.00),
(39, 29, 'Tomyamsea', 489.00, 2, 978.00),
(40, 29, 'RicePig', 349.00, 2, 698.00),
(41, 29, 'Coke', 69.00, 5, 345.00),
(42, 29, 'Ice', 40.00, 4, 160.00),
(43, 29, 'Fishpadped', 540.00, 2, 1080.00),
(44, 29, 'Sandwiches', 69.00, 4, 276.00),
(45, 29, 'Beverages Hinargen', 129.00, 10, 1290.00),
(46, 29, 'TowerBeverages', 1999.00, 1, 1999.00),
(47, 30, 'Koko Smutty', 49.00, 3, 147.00),
(48, 30, 'Pasta Meet', 249.00, 2, 498.00),
(49, 30, 'SapagettyCabonara', 199.00, 2, 398.00),
(50, 31, 'Reverse room normal', 2.00, 1200, 2400.00),
(51, 31, 'BreakfastSet', 2.00, 199, 398.00),
(52, 31, 'Pool', 100.00, 2, 200.00),
(53, 31, 'BikeAtive', 350.00, 2, 700.00),
(54, 32, 'Room Erxtra two bed', 3950.00, 2, 7900.00),
(55, 32, 'Set Breakfasf and Lunce', 999.00, 4, 3996.00);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `exp` datetime NOT NULL,
  `day` varchar(10) NOT NULL,
  `barcode` varchar(15) DEFAULT NULL,
  `discount` int(15) NOT NULL,
  `position` int(11) NOT NULL,
  `amountnow` int(11) DEFAULT NULL,
  `hralert` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `image`, `amount`, `created_at`, `updated_at`, `exp`, `day`, `barcode`, `discount`, `position`, `amountnow`, `hralert`) VALUES
(158, 'ลดราคา 15% ', '                                                                                                                                                                                                                                                                        ลดราคา 15% ทุกร้านค้าในเครือ เมื่อมียอดสั่งซื้อมากกว่า 10,000 บาท', 'upload/coupon1.png', 22, '2023-03-01 11:55:12', '2023-04-25 19:27:11', '2023-05-19 12:55:00', '8', '8b6b1ff', 15, 10000, 22, 0),
(227, ' ลดราคา 1%', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ลดราคา 1% ทุกร้านค้าในเครือ เมื่อมียอดสั่งซื้อมากกว่า 1,000 บาท', 'upload/coupon1.png', 3, '2023-03-06 13:25:01', '2023-03-17 12:42:07', '2023-03-17 05:10:00', 'หมดอายุ', '592c091', 1, 1000, 3, 0),
(270, 'ลดราคา 2%', 'ลดราคา 2% ทุกร้านค้าในเครือ เมื่อมียอดสั่งซื้อมากกว่า 2,000 บาท', 'upload/coupon1.png', 10, '2023-03-14 10:04:22', '2023-03-14 10:04:22', '2023-04-07 10:04:00', 'หมดอายุ', 'f690ac3', 2, 2000, 10, 0),
(271, 'ลดราคา 3%', 'ลดราคา 3% ทุกร้านค้าในเครือ เมื่อมียอดสั่งซื้อมากกว่า 3,000 บาท\r\n', 'upload/coupon1.png', 5, '2023-03-14 10:05:24', '2023-03-14 10:05:24', '2023-03-25 10:05:00', 'หมดอายุ', '60021fe', 3, 3000, 5, 0),
(274, 'ลดราคา 1%', 'ลดราคา 1% ทุกร้านค้าในเครือ เมื่อมียอดสั่งซื้อมากกว่า 1,000 บาท', 'upload/coupon1.png', 5, '2023-03-17 13:07:56', '2023-03-17 13:07:56', '2023-03-18 12:07:00', 'หมดอายุ', 'fd1ec14', 1, 1000, 3, 0),
(275, 'ลดราคา 3%', '                                            ลดราคา 3% ทุกร้านค้าในเครือ เมื่อมียอดสั่งซื้อมากกว่า 3,000 บาท\r\n', 'upload/coupon1.png', 3, '2023-04-25 19:29:52', '2023-04-25 19:30:18', '2023-04-26 18:28:00', 'หมดอายุ', '8470d47', 3, 3000, 3, 0);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `productsuse`
--

CREATE TABLE `productsuse` (
  `id` int(11) NOT NULL,
  `coupon` varchar(200) NOT NULL,
  `use_at` datetime DEFAULT NULL,
  `barcode` varchar(15) DEFAULT NULL,
  `itemnumber_use` varchar(15) NOT NULL,
  `pricesellall` int(11) NOT NULL,
  `discountbath` int(11) NOT NULL,
  `receivemoney` int(11) NOT NULL,
  `getmoney` int(11) NOT NULL,
  `employee` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `productsuse`
--

INSERT INTO `productsuse` (`id`, `coupon`, `use_at`, `barcode`, `itemnumber_use`, `pricesellall`, `discountbath`, `receivemoney`, `getmoney`, `employee`, `sid`) VALUES
(273, 'ลดราคา 1%', '2023-03-17 13:10:56', 'fd1ec14', '2', 2871, 2842, 158, 3000, 'kamon', 28),
(274, 'ลดราคา 1%', '2023-03-17 13:39:48', 'fd1ec14', '3', 6826, 6758, 0, 6758, 'tadapong', 29);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user`
--

CREATE TABLE `user` (
  `id` tinyint(4) NOT NULL,
  `fristname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `idline` varchar(30) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `imageuser` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `user`
--

INSERT INTO `user` (`id`, `fristname`, `lastname`, `username`, `password`, `department`, `phone`, `idline`, `status`, `imageuser`) VALUES
(1, 'tadapong', 'sutthikitrungroj', 'tadapong.s@laf.co.th', 'laf@2022', 'ITsupport', '0646282730', 'dewgood111', 'Admin', 'picdew.png'),
(2, 'kamon', 'main', 'kamon.m@laf.co.th', 'laf@2022', 'Account', '0985437355', 'popkamon12370', 'User', 'picpop.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsuse`
--
ALTER TABLE `productsuse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `invoice_products`
--
ALTER TABLE `invoice_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `productsuse`
--
ALTER TABLE `productsuse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
