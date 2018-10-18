-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 05:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `askme`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_tbl`
--

CREATE TABLE `answer_tbl` (
  `answer_pk_id` int(11) NOT NULL,
  `answer_description` varchar(50) NOT NULL,
  `answer_image` varchar(60) NOT NULL,
  `fk_user_id` varchar(20) NOT NULL,
  `fk_question_id` varchar(20) NOT NULL,
  `answer_date` varchar(20) NOT NULL,
  `answer_like` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_tbl`
--

INSERT INTO `answer_tbl` (`answer_pk_id`, `answer_description`, `answer_image`, `fk_user_id`, `fk_question_id`, `answer_date`, `answer_like`) VALUES
(1, 'sdfsdfd', '', '101', '1', '14-7-17', ''),
(2, 'fmdlkfdl', '', '101', '2', '17-7-17', ''),
(3, 'asdasdsfgfdg"hello"', '', '102', '2', '18-7-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE `cat_tbl` (
  `pk_cart_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`pk_cart_id`, `cat_name`) VALUES
(1, 'Health'),
(2, 'Entert');

-- --------------------------------------------------------

--
-- Table structure for table `question_tbl`
--

CREATE TABLE `question_tbl` (
  `question_pk_id` int(11) NOT NULL,
  `question_title` varchar(20) NOT NULL,
  `question_description` varchar(50) NOT NULL,
  `question_image` varchar(100) NOT NULL,
  `fk_user_id` varchar(20) NOT NULL,
  `question_date` varchar(20) NOT NULL,
  `fk_cart_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_tbl`
--

INSERT INTO `question_tbl` (`question_pk_id`, `question_title`, `question_description`, `question_image`, `fk_user_id`, `question_date`, `fk_cart_id`) VALUES
(1, 'Hello World', 'Why we write hello world in every pro', '', '101', '14-7-17', 2),
(2, 'Jainam', 'sdkas', '', '101', '17-7-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_pk_email_id` varchar(30) NOT NULL,
  `user_uname` varchar(30) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_Address` varchar(50) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_profile_pic` varchar(100) NOT NULL,
  `user_mobile_no` varchar(12) NOT NULL,
  `user_verify` varchar(11) NOT NULL,
  `user_token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_pk_email_id`, `user_uname`, `user_password`, `user_Address`, `user_gender`, `user_profile_pic`, `user_mobile_no`, `user_verify`, `user_token`) VALUES
('101', 'malav shah', 'askd', 'aksdj', 'Male', '', '898989989', '1', '498549'),
('102', 'Jainam', 'sdas', 'dsladsl', 'Male', '', '2499384', '', ''),
('jainams662@gmail.com', 'Jainam Shah', 'crushed', 'askdjaslk', 'Male', '', '4204204204', 'False', '738473');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_tbl`
--
ALTER TABLE `answer_tbl`
  ADD PRIMARY KEY (`answer_pk_id`);

--
-- Indexes for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  ADD PRIMARY KEY (`pk_cart_id`);

--
-- Indexes for table `question_tbl`
--
ALTER TABLE `question_tbl`
  ADD PRIMARY KEY (`question_pk_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_pk_email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_tbl`
--
ALTER TABLE `answer_tbl`
  MODIFY `answer_pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  MODIFY `pk_cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `question_tbl`
--
ALTER TABLE `question_tbl`
  MODIFY `question_pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
