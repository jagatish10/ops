-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 10:18 PM
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
-- Database: `ops`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(4) NOT NULL,
  `ADMIN_USERNAME` varchar(255) NOT NULL,
  `ADMIN_PASSWORD` varchar(8) NOT NULL,
  `ADMIN_FNAME` varchar(255) NOT NULL,
  `ADMIN_LNAME` varchar(255) NOT NULL,
  `ADMIN_EMAIL` varchar(255) NOT NULL,
  `ADMIN_CONTACT` varchar(255) NOT NULL,
  `ADMIN_IMAGE` varchar(255) NOT NULL,
  `log_in` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `ADMIN_USERNAME`, `ADMIN_PASSWORD`, `ADMIN_FNAME`, `ADMIN_LNAME`, `ADMIN_CONTACT`, `ADMIN_EMAIL`, `ADMIN_IMAGE`, `log_in`) VALUES
(1, 'jagatish', '12345', 'Jagatish', 'Narayan Rao', '019-4277776', 'jn@gmail.com', 'jaga.jpg', 'Offline'),
(2, 'risshe', '12345', 'Risshe', 'Kumaraguru', '011-24080780', 'rk@gmail.com', 'risshe.jpg', 'Offline'),
(3, 'darshini', '12345', 'Darshini', 'Sundrasiagran', '017-8916962', 'ds@gmail.com', 'darshini.jpg', 'Offline'),
(4, 'fatin', '12345', 'Fatin', 'Sofian', '016-4482690', 'fs@gmail.com', 'fatin.jpg', 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(20) NOT NULL,
  `to_user_id` int(20) NOT NULL,
  `from_user_id` int(20) NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(10) NOT NULL,
  `notification` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Table structure for table `orde`
--

CREATE TABLE `orde` (
  `USER_NAME` varchar(255) NOT NULL,
  `ORDE_ID` int(255) NOT NULL,
  `ORDE_SELECTFILE` varchar(255) NOT NULL,
  `ORDE_COPIES` int(255) NOT NULL,
  `TOTAL_PAGE` int(255) NOT NULL,
  `ORDE_COLOUR` varchar(255) NOT NULL,
  `ORDE_PAGEORDER` varchar(255) NOT NULL,
  `ORDE_LAYOUT` varchar(2555) NOT NULL,
  `ORDE_PAGEPERSHEET` int(255) NOT NULL,
  `ORDE_DATE` date NOT NULL,
  `COLLECTION` varchar(255) NOT NULL,
  `COMMENTS` varchar(255) NOT NULL,
  `PAYMENT` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payer_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `STAT_ID` varchar(255) NOT NULL,
  `ORDE_ID` int(255) NOT NULL,
  `STAT_STATUS` varchar(255) NOT NULL,
  `STAT_TOTALCOST` varchar(255) NOT NULL,
  `FILE` varchar(255) NOT NULL,
  `PAYMENT` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `COLLECTION` varchar(255) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stat_success`
--

CREATE TABLE `stat_success` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `gross_amount` float(10,2) NOT NULL,
  `Payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(255) NOT NULL,
  `USER_NAME` varchar(255) NOT NULL,
  `USER_PASSWORD` varchar(255) NOT NULL,
  `USER_FNAME` varchar(255) NOT NULL,
  `USER_LNAME` varchar(255) NOT NULL,
  `USER_CONTACT` varchar(255) NOT NULL,
  `USER_EMAIL` varchar(255) NOT NULL,
  `USER_IMAGE` varchar(255) NOT NULL,
  `log_in` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_NAME`, `USER_PASSWORD`, `USER_FNAME`, `USER_LNAME`, `USER_CONTACT`, `USER_EMAIL`, `USER_IMAGE`, `log_in`) VALUES
(101, 'darshini', '12345', 'Darshini', 'Sundrasiagran', '017-8916962', 'ds@student.usm.my', 'darshini.jpg', 'Offline'),
(102, 'jagatish', '12345', 'Jagatish', 'Narayan Rao', '019-4277776', 'jagatish10@student.usm.my', 'jaga.jpg', 'Offline'),
(103, 'risshe', '12345', 'Risshe', 'Kumaraguru', '011-24080780', 'rk@student.usm.my', 'risshe.jpg', 'Offline'),
(104, 'fatin', '12345', 'Fatin', 'Sofian', '016-4482690', 'fs@student.usm.my', 'fatin.jpg', 'Offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `orde`
--
ALTER TABLE `orde`
  ADD PRIMARY KEY (`ORDE_ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`ORDE_ID`);

--
-- Indexes for table `stat_success`
--
ALTER TABLE `stat_success`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orde`
--
ALTER TABLE `orde`
  MODIFY `ORDE_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stat`
--
ALTER TABLE `stat`
  MODIFY `ORDE_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stat_success`
--
ALTER TABLE `stat_success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
