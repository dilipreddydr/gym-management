-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 04:39 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$2BcR2bKWUZ.kRYIz5/exwufbYNFQduguUdzK6E0wmVTLwvkJYedvG');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `plan_type` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `amount`, `member_id`, `plan_type`, `date`) VALUES
(1, 1500, '1', 'primary', '2019-11-24 11:22:24'),
(2, 800, '2', 'wt.loss', '2019-11-24 11:22:24'),
(3, 1000, '3', 'wt.gain', '2019-11-24 11:22:24'),
(4, 1500, '4', 'prelimanary', '2019-11-24 11:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `plan_id` int(40) NOT NULL,
  `plan_name` varchar(40) NOT NULL,
  `amount` int(20) NOT NULL,
  `months` int(20) NOT NULL,
  `discount` varchar(40) DEFAULT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plan_id`, `plan_name`, `amount`, `months`, `discount`, `picture`) VALUES
(4, 'preliminary', 800, 1, '20% off for first 3 members', 'cardback.jpg'),
(5, 'Wt. gain', 1500, 3, '10% off', 'cardback.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `review` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `email`, `name`, `review`, `date`) VALUES
(2, 'xyz@gmail.com', 'ram', 'nyc gym', '2019-11-24 11:52:16'),
(4, 'xyz@gmail.com', 'dilip', 'average', '2019-11-24 12:21:15'),
(5, 'xyz@gmail.com', 'dhanush', 'not so good', '2019-11-24 12:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `phone` int(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `Name`, `phone`, `status`) VALUES
(101, 'Rakesh', 12365489, 'active'),
(102, 'Ravi', 21365789, 'active'),
(103, 'wasim', 123564789, 'active'),
(104, 'Sameer', 12536987, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `member_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `trainer_id` varchar(60) NOT NULL,
  `address` varchar(40) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`member_id`, `fname`, `lname`, `email`, `contact`, `trainer_id`, `address`, `status`) VALUES
(1, 'Raj', 'kumar', 'kumar@gmail.com', '987654', '101', 'muthanallur', 'active'),
(2, 'saurabh', 'kumar', 'kumar121@gmail.com', '963852', '102', 'muthanallur', 'active'),
(3, 'surya', 'raj', 'raj1242gmail.com', '852963', '101', 'chandapura', 'active'),
(4, 'Raman', 'kumar', 'raman@gmail.com', '741852', '103', 'anekal', 'active'),
(5, 'Aadarsh', 'thakur', 'thakur@gmail.com', '852123', '103', 'anekal', 'active'),
(6, 'Rahul', 'kumar', 'rahul@gmail.com', '963654', '102', 'chandapura', 'active'),
(7, 'Sanjeev', 'Verma', 'verma12@gmail.com', '951753', '103', 'gopsandra', 'inactive'),
(11, 'ram', 'charan', 'xyz@gmail.com', '963951753', '102', 'kaglipura', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logintb`
--
ALTER TABLE `logintb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logintb`
--
ALTER TABLE `logintb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
