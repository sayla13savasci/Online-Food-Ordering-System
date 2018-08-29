-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2017 at 03:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`password`) VALUES
('123'),
('456'),
('789');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `total_price` int(255) NOT NULL,
  `total_quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `user_id`, `total_price`, `total_quantity`) VALUES
(11, 1, 380, 10),
(12, 2, 1525, 8),
(13, 2, 940, 5),
(14, 2, 1500, 8),
(15, 2, 650, 3),
(16, 2, 725, 4),
(17, 2, 1500, 8),
(18, 2, 1325, 7),
(19, 2, 0, 0),
(20, 2, 950, 5),
(21, 2, 375, 2),
(22, 2, 230, 2),
(23, 2, 660, 5),
(24, 2, 750, 4),
(25, 2, 600, 3),
(26, 2, 400, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`) VALUES
(1, 'Bristy', 'B@gmail.com', 'acf4b89d3d503d8252c9c4ba75ddbf'),
(2, 'Toma', 'toma@gmail.com', '202cb962ac59075b964b07152d234b'),
(3, 'Jannat', 'j@gmail.com', '202cb962ac59075b964b07152d234b');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `R_name` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `food_type` varchar(30) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`R_name`, `name`, `food_type`, `price`) VALUES
('Pasta State', '7up', 'Drinks', 30),
('Pizza Hut', 'Bbq chicken pizza', 'Pizza', 400),
('Gloria Jeans', 'Beef Burger', 'Burger', 200),
('Gloria Jeans', 'Cashew nut salad', 'Salad', 250),
('Pizza Hut', 'Cheesy beef pizza', 'Pizza', 500),
('Gloria Jeans', 'Chicken Burger', 'Burger', 175),
('Pizza Hut', 'Chicken drum srick', 'Appetizer', 70),
('Pizza Hut', 'Chicken roll', 'Appetizer', 40),
('Pizza Hut', 'Coke', 'Drinks', 20),
('Gloria Jeans', 'Cold Coffee', 'Coffee', 200),
('Pizza Hut', 'Fanta', 'Drinks', 20),
('Pasta State', 'Fried rice with beef', 'Setmenu', 200),
('Pasta State', 'Fried rice with chicken', 'Setmenu', 200),
('Gloria Jeans', 'Hot Coffee', 'Coffee', 100),
('Pasta State', 'Mexican Pasta', 'Pasta', 200),
('Gloria Jeans', 'Vegetable salad', 'Salad', 200),
('Pasta State', 'White Sauce Pasta', 'Pasta', 170);

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `order_id` int(11) NOT NULL,
  `order_list_id` int(11) NOT NULL,
  `food_name` varchar(500) NOT NULL,
  `food_item_name` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `food_name` varchar(500) NOT NULL,
  `food_item_name` varchar(500) NOT NULL,
  `R_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `bill_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `payment_system` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provides`
--

CREATE TABLE `provides` (
  `id` int(11) NOT NULL,
  `order_list_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `R_name` varchar(30) NOT NULL,
  `table_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `R_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `branch_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`R_name`, `address`, `speciality`, `brand`, `branch_name`) VALUES
('Gloria Jeans', '67,GH Heights,Dhanmondi', 'Coffeehouse', 'Jireh International Ltd', 'Dhanmondi'),
('Pasta State', 'House 81,Road 8/A,Dhanmondi', 'Pasta', 'Local Brand', 'Dhanmondi'),
('Pizza Hut', 'House 50,Road No 11,Banani', 'Pizza', 'Transcom Food Ltd', 'Banani');

-- --------------------------------------------------------

--
-- Table structure for table `selects`
--

CREATE TABLE `selects` (
  `R_name` varchar(30) NOT NULL,
  `food_name` varchar(500) NOT NULL,
  `food_item_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `order_list_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `food_name` varchar(500) NOT NULL,
  `food_item_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`name`,`food_type`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`order_list_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`,`id`,`food_name`,`food_item_name`),
  ADD KEY `id` (`id`),
  ADD KEY `food_name` (`food_name`,`food_item_name`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`bill_id`,`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `provides`
--
ALTER TABLE `provides`
  ADD PRIMARY KEY (`id`,`order_list_id`),
  ADD KEY `order_list_id` (`order_list_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`,`R_name`),
  ADD KEY `R_name` (`R_name`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`R_name`);

--
-- Indexes for table `selects`
--
ALTER TABLE `selects`
  ADD PRIMARY KEY (`R_name`,`food_name`,`food_item_name`),
  ADD KEY `food_name` (`food_name`,`food_item_name`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD KEY `order_list_id` (`order_list_id`),
  ADD KEY `food_name` (`food_name`,`food_item_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`food_name`,`food_item_name`) REFERENCES `menu` (`name`, `food_type`);

--
-- Constraints for table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `pays_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `pays_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`);

--
-- Constraints for table `provides`
--
ALTER TABLE `provides`
  ADD CONSTRAINT `provides_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `provides_ibfk_2` FOREIGN KEY (`order_list_id`) REFERENCES `orderlist` (`order_list_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`R_name`) REFERENCES `restaurant` (`R_name`);

--
-- Constraints for table `selects`
--
ALTER TABLE `selects`
  ADD CONSTRAINT `selects_ibfk_1` FOREIGN KEY (`R_name`) REFERENCES `restaurant` (`R_name`),
  ADD CONSTRAINT `selects_ibfk_2` FOREIGN KEY (`food_name`,`food_item_name`) REFERENCES `menu` (`name`, `food_type`);

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`order_list_id`) REFERENCES `orderlist` (`order_list_id`),
  ADD CONSTRAINT `shows_ibfk_2` FOREIGN KEY (`food_name`,`food_item_name`) REFERENCES `menu` (`name`, `food_type`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
