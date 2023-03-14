-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 09:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mm`
--

-- --------------------------------------------------------

--
-- Table structure for table `engineers`
--

CREATE TABLE `engineers` (
  `engineer_id` int(10) NOT NULL,
  `engineer_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `engineer_specialities` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineers`
--

INSERT INTO `engineers` (`engineer_id`, `engineer_name`, `email`, `mobile`, `doj`, `engineer_specialities`) VALUES
(2, 'Rahul Kumar', 'rahul.wrms2019@gmail.com', 7011096030, '2019-02-01', 'Expertise in repairing all types of household products'),
(3, 'Suraj Kashyap', 'suraj.kashyap1996@gmail.com', 9728816767, '01-03-2017', 'Fix all the product related issues with their expertise');

-- --------------------------------------------------------

--
-- Table structure for table `fault_repair`
--

CREATE TABLE `fault_repair` (
  `fault_repair_id` int(10) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `dom` varchar(20) NOT NULL,
  `dop` varchar(20) NOT NULL,
  `serial_number` varchar(20) NOT NULL,
  `product_cost` int(10) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `eng_name` varchar(100) NOT NULL,
  `eng_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fault_repair`
--

INSERT INTO `fault_repair` (`fault_repair_id`, `product_type`, `brand_name`, `dom`, `dop`, `serial_number`, `product_cost`, `mobile_no`, `address`, `problem`, `email`, `eng_name`, `eng_phone`) VALUES
(3, 'Television', 'samsung', '2019-03-01', '2019-03-28', 'ABCD1234', 2000, 6396376811, 'Bablu Vishwas', 'not working', '', '', ''),
(7, 'Washing Machine', 'samsung', '2019-03-01', '2019-03-29', 'ABCD1234', 18000, 9728816767, 'Suraj Kashyap', 'not working', '', '', ''),
(9, 'Refrigerator', 'Haier', '2015-04-17', '2015-04-30', 'HI3880253', 37498, 7011096030, 'Rahul Kumar', 'My laptop is not working', '', 'Suraj Kashyap', '9728816767'),
(12, 'AC', 'LG', '2019-04-12', '2019-04-27', 'SADG45', 70000, 9650153048, 'Ritesh Bhoria', 'NOT WORKING', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `customer_id` int(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_code` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`customer_id`, `fullname`, `dob`, `gender`, `email`, `phone_code`, `mobile`, `address`, `password`, `user_type`) VALUES
(48, 'Rahul Kumar', '1997-03-26', '1', 'rahul@gmail.com', 1, 7011096030, 'Haryana', '7011096030', 'user'),
(55, 'Admin', '1996-10-28', 'M', 'admin@gmail.com', 91, 8750469290, 'New Delhi', '8750469290', 'admin'),
(56, 'Ritesh Bhoria', '1998-03-01', 'M', 'ritesh@gmail.com', 91, 9977656592, 'Aali Gaav', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `replaced_part`
--

CREATE TABLE `replaced_part` (
  `replace_id` int(10) NOT NULL,
  `customer_type` varchar(20) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `replaced_part` varchar(50) NOT NULL,
  `cost` int(10) NOT NULL,
  `engineer` varchar(20) NOT NULL,
  `date_of_replaced` varchar(30) NOT NULL,
  `warrenty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replaced_part`
--

INSERT INTO `replaced_part` (`replace_id`, `customer_type`, `product_type`, `brand`, `problem`, `replaced_part`, `cost`, `engineer`, `date_of_replaced`, `warrenty`) VALUES
(7, 'Household', 'Laptop', 'HP', 'NOT WORKING', 'RAM', 4000, 'abhay', '05-04-2019', '2 Months');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `support_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `query` varchar(200) NOT NULL,
  `support_req_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`support_id`, `name`, `mobile`, `product_name`, `query`, `support_req_date`) VALUES
(4, 'Rahul Kumar', 7011096030, 'AC', 'My AC is not working.', '30-03-2019'),
(5, 'Suraj Kashyap', 9728816767, 'Laptop', 'My laptop not working', '30-03-2019');

-- --------------------------------------------------------

--
-- Table structure for table `user_product_info`
--

CREATE TABLE `user_product_info` (
  `product_id` int(10) NOT NULL,
  `product_type` varchar(25) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dom` varchar(30) NOT NULL,
  `dop` varchar(30) NOT NULL,
  `serial_number` varchar(30) NOT NULL,
  `product_cost` int(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `preventive_cost` int(10) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `p_date` varchar(20) NOT NULL,
  `valid_till` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_product_info`
--

INSERT INTO `user_product_info` (`product_id`, `product_type`, `user_type`, `email`, `dom`, `dop`, `serial_number`, `product_cost`, `address`, `preventive_cost`, `payment_mode`, `p_date`, `valid_till`) VALUES
(19, 'AC', 'Household', 'rahul@gmail.com', '2019-03-01', '2019-04-06', 'LG12345', 32000, 'Rahul Kumar, XYZ', 3000, 'Offline Mode', '05-04-2020', '1 Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `engineers`
--
ALTER TABLE `engineers`
  ADD PRIMARY KEY (`engineer_id`);

--
-- Indexes for table `fault_repair`
--
ALTER TABLE `fault_repair`
  ADD PRIMARY KEY (`fault_repair_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `replaced_part`
--
ALTER TABLE `replaced_part`
  ADD PRIMARY KEY (`replace_id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`support_id`);

--
-- Indexes for table `user_product_info`
--
ALTER TABLE `user_product_info`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `engineers`
--
ALTER TABLE `engineers`
  MODIFY `engineer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fault_repair`
--
ALTER TABLE `fault_repair`
  MODIFY `fault_repair_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `replaced_part`
--
ALTER TABLE `replaced_part`
  MODIFY `replace_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `support_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_product_info`
--
ALTER TABLE `user_product_info`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
