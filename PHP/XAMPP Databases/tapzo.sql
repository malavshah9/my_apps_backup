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
-- Database: `tapzo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_tbl`
--

CREATE TABLE `bill_tbl` (
  `bill_no` int(11) NOT NULL,
  `fk_user_id` varchar(50) NOT NULL,
  `fk_prod_id` varchar(50) NOT NULL,
  `bill_amount` varchar(10) NOT NULL,
  `bill_date` varchar(10) NOT NULL,
  `bill_shipping_add` varchar(20) NOT NULL,
  `bill_payment_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_tbl`
--

INSERT INTO `bill_tbl` (`bill_no`, `fk_user_id`, `fk_prod_id`, `bill_amount`, `bill_date`, `bill_shipping_add`, `bill_payment_type`) VALUES
(1, 'mdshah9574@gmail.com', '1,2,3,1', '438200', '2017/07/11', 'ajdksjkjaskdjasasjda', 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `pk_cart_id` int(11) NOT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `fk_prod_id` varchar(50) NOT NULL,
  `cart_quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE `cat_tbl` (
  `pk_cat_id` int(11) NOT NULL,
  `cat_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`pk_cat_id`, `cat_name`) VALUES
(1, 'Electronics'),
(2, 'Mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `pk_prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_mfg` varchar(50) NOT NULL,
  `prod_color` varchar(50) NOT NULL,
  `prod_img1` varchar(200) NOT NULL,
  `prod_img2` varchar(200) NOT NULL,
  `prod_img3` varchar(200) NOT NULL,
  `prod_waranty` varchar(10) NOT NULL,
  `prod_desc` varchar(100) NOT NULL,
  `prod_soh` varchar(10) NOT NULL,
  `fk_cat_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`pk_prod_id`, `prod_name`, `prod_price`, `prod_mfg`, `prod_color`, `prod_img1`, `prod_img2`, `prod_img3`, `prod_waranty`, `prod_desc`, `prod_soh`, `fk_cat_id`) VALUES
(1, 'Plazma Led TV', 85000, 'Sony', 'Black', '../Shared/ProductPictures/product-1.jpg', '../Shared/ProductPictures/product-1.jpg', '../Shared/ProductPictures/product-1.jpg', '3', 'Best ahfkhsdkjlhfls\r\nsdjflksljdf\r\nsdjfoksdjfl', '25', '1'),
(2, 'HP Leptop', 10000, 'Lenovo', 'Black', '../Shared/ProductPictures/product-2.jpg', '../Shared/ProductPictures/product-2.jpg', '../Shared/ProductPictures/product-2.jpg', '4', 'ajsldlashkjdh\r\nashdjashd\r\naskhdashd\r\nkajsldakjs', '25', '1'),
(3, 'hfjds', 3200, 'asdasd', 'Black', '../Shared/ProductPictures/product-5.jpg', '../Shared/ProductPictures/product-5.jpg', '../Shared/ProductPictures/product-5.jpg', '3', 'hkljklkjl', '25', '2'),
(4, 'asdasd', 3456, 'afsf', 'sdfd', '../Shared/ProductPictures/product-5.jpg', '../Shared/ProductPictures/product-5.jpg', '../Shared/ProductPictures/product-5.jpg', '6', 'asfasfsdjf', '25', '2'),
(5, 'asdasd', 3456, 'afsf', 'sdfd', '../Shared/ProductPictures/product-6.jpg', '../Shared/ProductPictures/product-5.jpg', '../Shared/ProductPictures/product-5.jpg', '6', 'asfasfsdjf', '25', '2'),
(6, 'Iphone', 55000, 'Apple China', 'Red', '../Shared/ProductPictures/i1.jpg', '../Shared/ProductPictures/i8.jpg', '../Shared/ProductPictures/i6.jpg', '5', 'Best phone you can have.', '5', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_pk_email_id` varchar(50) NOT NULL,
  `user_uname` varchar(15) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_Address` varchar(100) DEFAULT NULL,
  `user_mobile_no` varchar(10) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_profile_pic` varchar(200) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_verify` varchar(11) NOT NULL,
  `user_token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_pk_email_id`, `user_uname`, `user_password`, `user_Address`, `user_mobile_no`, `user_gender`, `user_profile_pic`, `user_type`, `user_verify`, `user_token`) VALUES
('jainams662@gmail.com', 'Jainam Shah', 'jainam', 'Vasana', '1234567891', 'Male', '../Shared/User Pictures/product-5.jpg', 'User', 'False', '24be14e19b'),
('malavshah9574600925@gmail.com', 'Malav Shah', 'gdfgfg', 'sdfsdf', '2343242', 'Male', '../Shared/User Pictures/Lighthouse.jpg', 'User', 'False', '1d04bcd683'),
('mdshah9574@gmail.com', 'jad', 'skads', 'ajdksjkjaskdjasasjdaks', '4562136556', 'Male', '../Shared/User Pictures/i6.jpg', 'User', 'True', '8393');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`pk_cart_id`);

--
-- Indexes for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  ADD PRIMARY KEY (`pk_cat_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`pk_prod_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_pk_email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `pk_cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  MODIFY `pk_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `pk_prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
