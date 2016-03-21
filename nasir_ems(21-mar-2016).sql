-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2016 at 11:51 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nasir_ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail`
--

CREATE TABLE IF NOT EXISTS `employee_detail` (
  `e_id` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_role` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `image` blob,
  `nid` int(16) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_detail`
--

INSERT INTO `employee_detail` (`e_id`, `name`, `email`, `password`, `user_role`, `gender`, `date_of_birth`, `blood_group`, `address`, `contact`, `image`, `nid`, `father_name`, `mother_name`) VALUES
('123', 'Shah Ali', 'nasir@go', '13345', 'employee', 'option1', '0000-00-00', 'o+', 'Dhaka', '0154254863', 0x54414e412e706e67, 12584632, 'Baba', 'Maa'),
('124', 'Nasir Uddin', 'nasirr@gmail.com', '758469', 'employee', 'option1', '0000-00-00', 'A+', 'Narayangonj', '01515209134', '', 1234579854, 'Abdul Mannan', 'Masuda Begum'),
('125', 'Ronyr molla', 'rony@gmail.com', '1245867', 'employee', 'option1', '0000-00-00', 'B+', 'Rajbarir Polapan', '016173460', 0x64696e612e706e67, 789546254, 'Mollah', 'Nabila'),
('126', 'Linkon Islam', 'linkon@ct.com', '123456', 'admin', 'option1', '0000-00-00', 'A+', 'Dhaka', '0164444585', 0x73756c74616e612e706e67, 2147483647, 'Bii Gets', 'Hillary'),
('127', 'Jony', 'jony@gmail.com', '123', 'employee', 'option1', '0000-00-00', 'O+', 'Chitagong', '01672840316', 0x73756c74616e6165642e706e67, 1234568523, 'Babu', 'Maya'),
('128', 'Rupa', 'rupa@gmail.com', '123', 'admin', 'option2', '0000-00-00', 'O+', 'Ch', '', '', 125468, '', ''),
('129', 'Mily', 'mily@gmail.com', '123', 'admin', 'option2', '0000-00-00', 'O+', 'f', '0125', 0x73756c74616e612e706e67, 1246, 'ffddd', 'dd'),
('130', 'Jan kayo ', 'kayo@gmail.com', '123', NULL, NULL, '0000-00-00', 'AB', '', '', '', 12345, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_status`
--

CREATE TABLE IF NOT EXISTS `employee_status` (
  `sl_no` int(10) NOT NULL,
  `e_id` varchar(10) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `leave_remain` int(3) DEFAULT NULL,
  `working_hour` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_status`
--

INSERT INTO `employee_status` (`sl_no`, `e_id`, `department`, `designation`, `status`, `salary`, `leave_remain`, `working_hour`) VALUES
(1, '123', 'Marketing', 'Marketing Manager', NULL, 35000, NULL, NULL),
(2, '126', 'Learning', 'Mentr', NULL, 38000, NULL, NULL),
(3, '125', 'Buisness', 'Manager', NULL, 17500, NULL, NULL),
(4, '128', '', '', NULL, 0, NULL, NULL),
(5, '129', 'sss', 'sss12501', NULL, 1250, NULL, NULL),
(6, '130', '', '', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_history`
--

CREATE TABLE IF NOT EXISTS `work_history` (
  `sl_no` int(10) NOT NULL,
  `e_id` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `check_in_time` time DEFAULT NULL,
  `check_out_time` time DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_history`
--

INSERT INTO `work_history` (`sl_no`, `e_id`, `date`, `check_in_time`, `check_out_time`, `reason`) VALUES
(1, '123', '2016-03-15', '12:07:00', '00:00:00', ''),
(2, '127', '2016-03-19', '08:56:00', '00:00:00', ''),
(3, '123', '2016-03-19', '11:38:00', '00:00:00', ''),
(4, '130', '2016-03-21', '15:13:00', '00:00:00', ''),
(5, '125', '2016-03-21', '16:16:00', '00:00:00', 'Kame aisi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_detail`
--
ALTER TABLE `employee_detail`
  ADD PRIMARY KEY (`e_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_status`
--
ALTER TABLE `employee_status`
  ADD PRIMARY KEY (`sl_no`), ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `work_history`
--
ALTER TABLE `work_history`
  ADD PRIMARY KEY (`sl_no`), ADD KEY `e_id` (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_status`
--
ALTER TABLE `employee_status`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `work_history`
--
ALTER TABLE `work_history`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_status`
--
ALTER TABLE `employee_status`
ADD CONSTRAINT `employee_status_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee_detail` (`e_id`);

--
-- Constraints for table `work_history`
--
ALTER TABLE `work_history`
ADD CONSTRAINT `work_history_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee_detail` (`e_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
