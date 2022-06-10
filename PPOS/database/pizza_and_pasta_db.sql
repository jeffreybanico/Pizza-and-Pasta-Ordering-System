-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 06:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_and_pasta`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUSTOMER_ID` int(8) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `STREET` varchar(20) NOT NULL,
  `BARANGAY` varchar(20) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `PROVINCE` varchar(20) NOT NULL,
  `CONTACT_NUMBER` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMER_ID`, `FIRST_NAME`, `LAST_NAME`, `STREET`, `BARANGAY`, `CITY`, `PROVINCE`, `CONTACT_NUMBER`) VALUES
(1, 'Atticus', 'Xavier', 'Street 69', 'Brgy 42 Transylvania', 'Legazpi City', 'Albay', '0912345678'),
(2, 'Harry', 'Potter', 'Cup Board 118', 'Brgy 46 Wizardry', 'Hogwarts', 'Albay', '0987654321'),
(3, 'Victoria', 'Spencer', 'Street 101', 'Brgy. 56 Exeter', 'Guinobatan', 'Albay', '09785645342'),
(4, 'Athanasius', 'Sebastian', 'Street 19', 'Brgy 85 Ownville', 'Legazpi City', 'Albay', '0934567821'),
(5, 'Mattew', 'Spencer', 'Street 49', 'Brgy 67 Moonville', 'Legazpi City', 'Albay', '09234556678'),
(6, 'Rowena', 'Ravenclaw', 'Private Drive 81', 'Brgy 61 Hemoglobin', 'Legazpi City', 'Albay', '0985674321'),
(7, 'Hexter', 'Oxford', 'Zone 36', 'Brgy 24 Awit', 'Daraga', 'Albay', '09786543321'),
(8, 'Godric', 'Gryffindor', 'Zone 11', 'Brgy 119 West Coast', 'Legazpi City', 'Albay', '09195550891'),
(9, 'Damien', 'San', 'Purok 10', 'Brgy 89 East Coast', 'Legazpi City', 'Albay', '0912345677'),
(10, 'Jeffrey', 'Banico', 'Purok 2', 'Brgy 46 San Joaquin', 'Legazpi City', 'Albay', '0978653421'),
(11, 'Juanito', 'Alfonso', 'Purok 4', 'Brgy 191 San Diego', 'Daraga', 'Albay', '0986745231'),
(12, 'Draco', 'Lee', 'Purok 2', 'Brgy 56 Dita', 'Legazpi City', 'Albay', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `cust_order`
--

CREATE TABLE `cust_order` (
  `ORDER_ID` int(8) NOT NULL,
  `CUSTOMER_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_order`
--

INSERT INTO `cust_order` (`ORDER_ID`, `CUSTOMER_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `ORDERLIST_ID` int(8) NOT NULL,
  `QUANTITY` int(8) NOT NULL,
  `PRODUCT_ID` int(8) NOT NULL,
  `ORDER_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`ORDERLIST_ID`, `QUANTITY`, `PRODUCT_ID`, `ORDER_ID`) VALUES
(1, 3, 2, 1),
(2, 1, 21, 1),
(3, 2, 7, 2),
(4, 4, 14, 3),
(5, 4, 16, 3),
(6, 4, 18, 3),
(7, 4, 20, 3),
(8, 1, 22, 3),
(9, 6, 9, 4),
(10, 1, 22, 4),
(11, 3, 12, 5),
(12, 4, 2, 6),
(13, 2, 17, 6),
(14, 7, 9, 7),
(15, 6, 20, 7),
(16, 4, 8, 8),
(17, 5, 11, 8),
(18, 10, 18, 8),
(19, 1, 22, 8),
(20, 2, 3, 9),
(21, 2, 6, 9),
(22, 2, 9, 9),
(23, 2, 12, 9),
(24, 2, 14, 9),
(25, 2, 15, 9),
(26, 3, 17, 9),
(27, 3, 19, 9),
(28, 1, 22, 9),
(29, 2, 2, 10),
(30, 2, 6, 10),
(31, 2, 9, 10),
(32, 3, 12, 10),
(33, 3, 14, 10),
(34, 5, 16, 10),
(35, 5, 18, 10),
(36, 4, 19, 10),
(37, 1, 22, 10),
(38, 1, 2, 11),
(39, 1, 6, 11),
(40, 1, 9, 11),
(41, 1, 12, 11),
(42, 1, 14, 11),
(43, 1, 16, 11),
(44, 1, 17, 11),
(45, 1, 19, 11),
(46, 1, 21, 11),
(47, 4, 3, 12),
(48, 3, 5, 12),
(49, 3, 9, 12),
(50, 3, 10, 12),
(51, 2, 14, 12),
(52, 2, 15, 12),
(53, 2, 18, 12),
(54, 2, 19, 12),
(55, 1, 21, 12);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAYMENT_ID` int(8) NOT NULL,
  `TOTAL_PRICE` decimal(12,2) NOT NULL,
  `TOTAL_QUANTITY` int(8) NOT NULL,
  `ORDER_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PAYMENT_ID`, `TOTAL_PRICE`, `TOTAL_QUANTITY`, `ORDER_ID`) VALUES
(1, '675.00', 4, 1),
(2, '200.00', 2, 2),
(3, '4875.00', 17, 3),
(4, '1875.00', 7, 4),
(5, '900.00', 3, 5),
(6, '1200.00', 6, 6),
(7, '3900.00', 13, 7),
(8, '4875.00', 20, 8),
(9, '4675.00', 19, 9),
(10, '7275.00', 27, 10),
(11, '2175.00', 9, 11),
(12, '5075.00', 22, 12);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` int(8) NOT NULL,
  `PRODUCT_PRICE` decimal(12,2) NOT NULL,
  `PRODUCT_NAME` varchar(20) NOT NULL,
  `SIZE_DESCRIPTION` varchar(15) DEFAULT NULL,
  `PRODUCT_TYPE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_PRICE`, `PRODUCT_NAME`, `SIZE_DESCRIPTION`, `PRODUCT_TYPE`) VALUES
(1, '100.00', 'Cheese Pizza', 'Regular', 'Pizza'),
(2, '200.00', 'Cheese Pizza', 'Medium', 'Pizza'),
(3, '300.00', 'Cheese Pizza', 'Large', 'Pizza'),
(4, '100.00', 'Hawaiian Pizza', 'Regular', 'Pizza'),
(5, '200.00', 'Hawaiian Pizza', 'Medium', 'Pizza'),
(6, '300.00', 'Hawaiian Pizza', 'Large', 'Pizza'),
(7, '100.00', 'Detriot Pizza', 'Regular', 'Pizza'),
(8, '200.00', 'Detriot Pizza', 'Medium', 'Pizza'),
(9, '300.00', 'Detriot Pizza', 'Large', 'Pizza'),
(10, '100.00', 'Chicago Pizza', 'Regular', 'Pizza'),
(11, '200.00', 'Chicago Pizza', 'Medium', 'Pizza'),
(12, '300.00', 'Chicago Pizza', 'Large', 'Pizza'),
(13, '200.00', 'Carbonara', 'Barkada size', 'Pasta'),
(14, '300.00', 'Carbonara', 'Family size', 'Pasta'),
(15, '200.00', 'Macaroni Pasta', 'Barkada size', 'Pasta'),
(16, '300.00', 'Macaroni Pasta', 'Family size', 'Pasta'),
(17, '200.00', 'Spaghetti', 'Barkada size', 'Pasta'),
(18, '300.00', 'Spaghetti', 'Family size', 'Pasta'),
(19, '200.00', 'Linguine Pasta', 'Barkada size', 'Pasta'),
(20, '300.00', 'Linguine Pasta', 'Family size', 'Pasta'),
(21, '75.00', 'Coca Cola', '1 liter', 'Drink'),
(22, '75.00', 'Sprite', '1 liter', 'Drink');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `RECEIPT_ID` int(8) NOT NULL,
  `PAYMENT_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`RECEIPT_ID`, `PAYMENT_ID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD PRIMARY KEY (`ORDER_ID`),
  ADD KEY `FKcustomer_id` (`CUSTOMER_ID`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`ORDERLIST_ID`),
  ADD KEY `FKorder_id` (`ORDER_ID`),
  ADD KEY `FKproduct_id` (`PRODUCT_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAYMENT_ID`),
  ADD KEY `FK_order_payment` (`ORDER_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCT_ID`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`RECEIPT_ID`),
  ADD KEY `FK_receipt_payment` (`PAYMENT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUSTOMER_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cust_order`
--
ALTER TABLE `cust_order`
  MODIFY `ORDER_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `ORDERLIST_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAYMENT_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCT_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `RECEIPT_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD CONSTRAINT `FKcustomer_id` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `FKorder_id` FOREIGN KEY (`ORDER_ID`) REFERENCES `cust_order` (`ORDER_ID`),
  ADD CONSTRAINT `FKproduct_id` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`PRODUCT_ID`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_order_payment` FOREIGN KEY (`ORDER_ID`) REFERENCES `cust_order` (`ORDER_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `FK_receipt_payment` FOREIGN KEY (`PAYMENT_ID`) REFERENCES `payment` (`PAYMENT_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
