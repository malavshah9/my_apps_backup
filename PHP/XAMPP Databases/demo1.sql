-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 05:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `roll_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `fees` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`roll_no`, `name`, `mobile_no`, `fees`, `gender`, `year`) VALUES
(103, 'Hello', '9876543210', 5600, 'Female', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `news_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `news_desc` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`news_id`, `title`, `news_desc`) VALUES
(4, 'jkl', 'akjslkasjd'),
(5, 'hello', 'asdkasdklalsjdalskdkjadfkljsdflk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
