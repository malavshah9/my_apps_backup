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
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(50) NOT NULL,
  `adminname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `password`, `mobile`, `address`, `img`, `gender`) VALUES
('admin@gmail.com', 'Admin', '12345', '1234567890', 'Paldi', '../Shared/Admin Profile Images/avatar-6.jpg', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE `cat_tbl` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`cat_id`, `cat_name`) VALUES
(1, 'Mobile'),
(3, 'Watches'),
(4, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `p_color` varchar(15) NOT NULL,
  `p_price` decimal(15,0) NOT NULL,
  `manuf` varchar(25) NOT NULL,
  `warranty` int(5) NOT NULL,
  `soh` int(5) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `fk_cat_id` int(11) NOT NULL,
  `p_desc` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_color`, `p_price`, `manuf`, `warranty`, `soh`, `img`, `fk_cat_id`, `p_desc`) VALUES
(4, 'Vivo Smartphone', 'Black', '9000', 'Vivo Ltd', 3, 50, '../Shared/Product Images/s5.jpg', 1, 'sdfsdgdfgdfg'),
(5, 'Titan Watch', 'Silver', '9999', 'Tian Ltd', 3, 5, '../Shared/Product Images/i3.jpg', 3, 'Only 3 Left'),
(6, 'Fastrack Watch', 'Siver', '10000', 'Ttain', 5, 6, '../Shared/Product Images/w4.jpg', 3, 'asndkanssfa');

-- --------------------------------------------------------

--
-- Table structure for table `usr`
--

CREATE TABLE `usr` (
  `usr_id` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `usr_name` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` varchar(150) NOT NULL,
  `img` varchar(150) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `token` varchar(10) NOT NULL,
  `isverify` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr`
--

INSERT INTO `usr` (`usr_id`, `usr_name`, `password`, `mobile`, `address`, `img`, `gender`, `token`, `isverify`) VALUES
('malavshah9574600925@gmail.com', 'Malav Shah', '1234', '1234567890', 'dslglsfkgnnvmxncvosdffsdfsdf', '../Shared/User Profile Pics/4661529-free-4k-wallpaper.jpg', 'Male', '780261c4b9', 1),
('mdshah9574@gmail.com', 'Malav Shah', 'malav', '556565656', 'fsldmflsmdlf ', '../Shared/User Profile Pics/263805.jpg', 'Male', 'ae4f368899', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
