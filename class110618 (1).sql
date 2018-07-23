-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 06:34 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class110618`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(4) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `creation_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `email`, `password`, `contact`, `created_by`, `creation_date`) VALUES
(6, 'seyi', 'lowo', 'seyilowo@gmail.com', '12', '07062385044', '', ''),
(16, 'Oluwaseyi', 'Lowo', 'oyelowoseyi@yahoo.com', '15', '08096764774', 'seyilowo@gmail.com', '2018-07-23 06:30:03pm');

-- --------------------------------------------------------

--
-- Table structure for table `class110618`
--

CREATE TABLE `class110618` (
  `customer_id` int(4) NOT NULL,
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `staff_email` varchar(255) NOT NULL,
  `creation_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class110618`
--

INSERT INTO `class110618` (`customer_id`, `first_name`, `last_name`, `email`, `password`, `account_number`, `account_type`, `phone_number`, `staff_email`, `creation_date`) VALUES
(7, 'Oluwaseyi', 'Oyelowo', 'seyimc2008@yahoo.com', '13', '0165676086', 'Savings', '08188059535', 'seyilowo@gmail.com', '2018-07-23 06:25:44pm');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `withdrawal` varchar(255) NOT NULL DEFAULT '0',
  `deposit` varchar(255) NOT NULL DEFAULT '0',
  `balance` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `customer_email`, `withdrawal`, `deposit`, `balance`, `time`) VALUES
(9, 'seyilowo@gmail.com', '0', '50000', '50000', '2018-07-23 06:11:48pm'),
(10, 'seyilowo@gmail.com', '20000', '0', '30000', '2018-07-23 06:12:05pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `class110618`
--
ALTER TABLE `class110618`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `account_number` (`account_number`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `class110618`
--
ALTER TABLE `class110618`
  MODIFY `customer_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
