-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 13, 2019 at 09:12 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE `account_type` (
  `type_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `restriction` varchar(40) NOT NULL,
  `interest_rate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`type_id`, `name`, `restriction`, `interest_rate`) VALUES
(1, 'CreditCard', '', '7%'),
(2, 'DebitCard', '', '0%'),
(3, 'Savings', '', '0.08%'),
(4, 'Current', '', ''),
(5, 'Student', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `banker`
--

CREATE TABLE `banker` (
  `banker_id` int(11) NOT NULL,
  `b_username` varchar(30) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banker`
--

INSERT INTO `banker` (`banker_id`, `b_username`, `first_name`, `last_name`, `category`, `title`, `email`, `password`, `date_of_birth`) VALUES
(1, 'a', 'Admin', 'Adminovic', 'banker', 'Baker', 'delara.mohammadi@stu.ssst.edu.ba', '1', '2018-08-07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `banker_view`
-- (See below for the actual view)
--
CREATE TABLE `banker_view` (
`banker_id` int(11)
,`b_username` varchar(30)
,`first_name` varchar(50)
,`last_name` varchar(50)
,`category` varchar(50)
,`title` varchar(50)
,`email` varchar(100)
,`password` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `account_id` int(11) NOT NULL,
  `account_number` varchar(12) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `account_type` int(11) DEFAULT NULL,
  `balance` decimal(11,2) DEFAULT '0.00',
  `date_opened` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT 'Active' COMMENT 'active/deactive',
  `valid_till` date DEFAULT NULL,
  `PIN` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`account_id`, `account_number`, `client_id`, `account_type`, `balance`, `date_opened`, `status`, `valid_till`, `PIN`) VALUES
(13, '1313', 29, 2, '20.00', '2019-01-13 14:47:45', 'Active', '2019-01-11', 1234),
(14, '4232090', 28, 5, '13.00', '2019-01-13 15:23:01', 'Active', '2019-10-12', 543),
(15, '1615', 28, 2, '30.00', '2019-01-13 16:54:03', 'Active', '2019-01-16', 123),
(16, '9876376', 28, 4, '0.00', '2019-01-13 18:30:01', 'Active', '2019-01-19', 9876),
(17, '98764', 28, 3, '0.00', '2019-01-13 18:30:38', 'Active', '2019-01-19', 1234),
(18, '9875', 29, 3, '0.00', '2019-01-13 18:38:39', 'Active', '2019-01-18', 234),
(19, '54301', 28, 4, '0.00', '2019-01-13 18:39:26', 'Active', '2019-01-17', 456),
(20, '023452', 28, 4, '0.00', '2019-01-13 18:42:17', 'Active', '2019-12-06', 1324),
(21, '102453', 29, 5, '0.00', '2019-01-13 18:42:59', 'Active', '2020-12-11', 964),
(22, '151423', 28, 2, '0.00', '2019-01-13 18:58:34', 'Active', '2019-01-11', 765),
(23, '1515', 28, 2, '0.00', '2019-01-13 19:12:29', 'Active', '2019-01-01', 1453);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bank_account_view`
-- (See below for the actual view)
--
CREATE TABLE `bank_account_view` (
);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `jmbg` bigint(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `passport_num` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `first_name`, `last_name`, `username`, `date_of_birth`, `city`, `country`, `nationality`, `zip`, `jmbg`, `email`, `phone`, `password`, `address`, `gender`, `marital_status`, `passport_num`) VALUES
(28, 'Lara', 'Mohammadi', 'del', '1998-12-13', 'Sarajevo', 'Iran', 'Iran', '7100', 123456789010, 'mim.delara@yahoo.com', '061053042', 'del', 'Nahorevska 208', 'Female', 'Single', '123456783'),
(29, 'Shahriyar', 'Mim', '413oDS9cVm7a', '1992-02-12', 'Sarajevo', 'Bosnia & Herzegovina', 'Iran', '71000', 123456789012, 'delara.mohammadi@stu.ssst.edu.ba', '061815812', 'bbXRSea9yb9P', 'Nahorevska 208', 'Male', 'Single', '123456789');

-- --------------------------------------------------------

--
-- Stand-in structure for view `client_view`
-- (See below for the actual view)
--
CREATE TABLE `client_view` (
);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `banker` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `banker`, `client`, `date`) VALUES
(4, 1, 28, '2019-01-13 10:02:18'),
(5, 1, 29, '2019-01-13 10:55:20');

-- --------------------------------------------------------

--
-- Stand-in structure for view `registration_view`
-- (See below for the actual view)
--
CREATE TABLE `registration_view` (
`reg_id` int(11)
,`banker` int(11)
,`client` int(11)
,`date` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `bank_account` int(11) DEFAULT NULL,
  `banker` int(11) DEFAULT NULL,
  `t_date` date DEFAULT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `action_type` varchar(40) DEFAULT NULL,
  `date_submitted` datetime DEFAULT CURRENT_TIMESTAMP,
  `purpose` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `bank_account`, `banker`, `t_date`, `amount`, `action_type`, `date_submitted`, `purpose`) VALUES
(24, 16, 1, '2019-01-17', '20.00', 'Withdraw', '2019-01-13 17:14:41', 'payment'),
(25, 15, 1, '2019-01-17', '30.00', 'Withdraw', '2019-01-13 17:16:12', 'payment'),
(26, 15, 1, '2019-01-17', '30.00', 'Withdraw', '2019-01-13 17:18:16', 'payment'),
(27, 15, 1, '2019-01-17', '30.00', 'Deposit', '2019-01-13 17:18:25', 'payment'),
(28, 15, 1, '2019-01-17', '30.00', 'Withdraw', '2019-01-13 17:19:21', 'payment'),
(29, 15, 1, NULL, '100.00', 'Deposit', '2019-01-13 20:26:46', 'payment'),
(30, 14, 1, NULL, '100.00', 'Deposit', '2019-01-13 20:27:52', 'payment');

-- --------------------------------------------------------

--
-- Stand-in structure for view `transaction_view`
-- (See below for the actual view)
--
CREATE TABLE `transaction_view` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `type_view`
-- (See below for the actual view)
--
CREATE TABLE `type_view` (
`type_id` int(11)
,`name` varchar(40)
,`restriction` varchar(40)
,`interest_rate` varchar(40)
);

-- --------------------------------------------------------

--
-- Structure for view `banker_view`
--
DROP TABLE IF EXISTS `banker_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project2`.`banker_view`  AS  select `project2`.`banker`.`banker_id` AS `banker_id`,`project2`.`banker`.`b_username` AS `b_username`,`project2`.`banker`.`first_name` AS `first_name`,`project2`.`banker`.`last_name` AS `last_name`,`project2`.`banker`.`category` AS `category`,`project2`.`banker`.`title` AS `title`,`project2`.`banker`.`email` AS `email`,`project2`.`banker`.`password` AS `password` from `project2`.`banker` ;

-- --------------------------------------------------------

--
-- Structure for view `bank_account_view`
--
DROP TABLE IF EXISTS `bank_account_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project2`.`bank_account_view`  AS  select `project2`.`bank_account`.`account_id` AS `account_id`,`project2`.`bank_account`.`account_number` AS `account_number`,`project2`.`bank_account`.`client_id` AS `client_id`,`project2`.`bank_account`.`type` AS `type`,`project2`.`bank_account`.`balance` AS `balance`,`project2`.`bank_account`.`date_opened` AS `date_opened`,`project2`.`bank_account`.`status` AS `status` from `project2`.`bank_account` ;

-- --------------------------------------------------------

--
-- Structure for view `client_view`
--
DROP TABLE IF EXISTS `client_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project2`.`client_view`  AS  select `project2`.`client`.`client_id` AS `client_id`,`project2`.`client`.`first_name` AS `first_name`,`project2`.`client`.`last_name` AS `last_name`,`project2`.`client`.`c_username` AS `c_username`,`project2`.`client`.`date_of_birth` AS `date_of_birth`,`project2`.`client`.`city` AS `city`,`project2`.`client`.`country` AS `country`,`project2`.`client`.`nationality` AS `nationality`,`project2`.`client`.`zip` AS `zip`,`project2`.`client`.`jmbg` AS `jmbg`,`project2`.`client`.`email` AS `email`,`project2`.`client`.`password` AS `password`,`project2`.`client`.`address` AS `address`,`project2`.`client`.`acc_type` AS `acc_type`,`project2`.`client`.`gender` AS `gender`,`project2`.`client`.`marital_status` AS `marital_status` from `project2`.`client` ;

-- --------------------------------------------------------

--
-- Structure for view `registration_view`
--
DROP TABLE IF EXISTS `registration_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project2`.`registration_view`  AS  select `project2`.`registration`.`reg_id` AS `reg_id`,`project2`.`registration`.`banker` AS `banker`,`project2`.`registration`.`client` AS `client`,`project2`.`registration`.`date` AS `date` from `project2`.`registration` ;

-- --------------------------------------------------------

--
-- Structure for view `transaction_view`
--
DROP TABLE IF EXISTS `transaction_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project2`.`transaction_view`  AS  select `project2`.`transaction`.`transaction_id` AS `transaction_id`,`project2`.`transaction`.`bank_account` AS `bank_account`,`project2`.`transaction`.`banker` AS `banker`,`project2`.`transaction`.`t_date` AS `t_date`,`project2`.`transaction`.`amount(+/-)` AS `amount(+/-)`,`project2`.`transaction`.`type` AS `type` from `project2`.`transaction` ;

-- --------------------------------------------------------

--
-- Structure for view `type_view`
--
DROP TABLE IF EXISTS `type_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project2`.`type_view`  AS  select `project2`.`account_type`.`type_id` AS `type_id`,`project2`.`account_type`.`name` AS `name`,`project2`.`account_type`.`restriction` AS `restriction`,`project2`.`account_type`.`interest_rate` AS `interest_rate` from `project2`.`account_type` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_type`
--
ALTER TABLE `account_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `banker`
--
ALTER TABLE `banker`
  ADD PRIMARY KEY (`banker_id`),
  ADD UNIQUE KEY `b_username` (`b_username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `account_number` (`account_number`),
  ADD KEY `client` (`client_id`),
  ADD KEY `type` (`account_type`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `c_username` (`username`),
  ADD KEY `jmbg` (`jmbg`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `client` (`client`),
  ADD KEY `banker` (`banker`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `bank account` (`bank_account`),
  ADD KEY `banker` (`banker`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banker`
--
ALTER TABLE `banker`
  MODIFY `banker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD CONSTRAINT `bank_account_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `bank_account_ibfk_2` FOREIGN KEY (`account_type`) REFERENCES `account_type` (`type_id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`banker`) REFERENCES `banker` (`banker_id`),
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`client`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`banker`) REFERENCES `banker` (`banker_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`bank_account`) REFERENCES `bank_account` (`account_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
