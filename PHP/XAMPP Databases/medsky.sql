-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 05:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medsky`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_mst`
--

CREATE TABLE `doctor_mst` (
  `pk_doc_email_id` varchar(25) NOT NULL,
  `doc_pass` varchar(10) NOT NULL,
  `doc_lic_no` int(15) NOT NULL,
  `doc_name` varchar(15) NOT NULL,
  `specialist` varchar(25) NOT NULL,
  `doc_deg` varchar(20) NOT NULL,
  `doc_pro_pic` varchar(25) NOT NULL,
  `doc_add` varchar(50) NOT NULL,
  `doc_gen` varchar(7) NOT NULL,
  `doc_mno` int(15) NOT NULL,
  `doc_verify` varchar(11) NOT NULL,
  `doc_token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_mst`
--

INSERT INTO `doctor_mst` (`pk_doc_email_id`, `doc_pass`, `doc_lic_no`, `doc_name`, `specialist`, `doc_deg`, `doc_pro_pic`, `doc_add`, `doc_gen`, `doc_mno`, `doc_verify`, `doc_token`) VALUES
('abc@gmail.com', '123456', 78946, 'Shah Abc', 'Ortho', 'DDFF', '-', 'Ahmedabad', 'Male', 789456123, '1', '788989'),
('yui@gmail.com', '1234567', 345127, 'H Shah', 'Dentist', 'GHH', '-', 'Ahmedabad', 'Female', 123456789, '0', '765901');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_mst`
--

CREATE TABLE `medicine_mst` (
  `pk_med_id` int(10) NOT NULL,
  `med_name` varchar(25) NOT NULL,
  `com_name` varchar(15) NOT NULL,
  `med_note` varchar(30) NOT NULL,
  `med_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_mst`
--

INSERT INTO `medicine_mst` (`pk_med_id`, `med_name`, `com_name`, `med_note`, `med_type`) VALUES
(1, 'Metacine', 'GSK', '-', 'Tab'),
(2, 'Dolo', 'SMK', '-', 'Tab'),
(3, 'Zyrox', 'JKL', '-', 'Syrup');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_mst`
--

CREATE TABLE `prescription_mst` (
  `pk_pres_id` int(10) NOT NULL,
  `fk_usr_email_id` varchar(30) NOT NULL,
  `fk_doc_email_id` varchar(25) NOT NULL,
  `col_medids` varchar(200) NOT NULL,
  `pres_morning` varchar(200) NOT NULL,
  `pres_noon` varchar(200) NOT NULL,
  `pres_night` varchar(200) NOT NULL,
  `pres_instr` varchar(400) NOT NULL,
  `pres_day` varchar(200) NOT NULL,
  `datetime` varchar(10) NOT NULL,
  `pres_notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription_mst`
--

INSERT INTO `prescription_mst` (`pk_pres_id`, `fk_usr_email_id`, `fk_doc_email_id`, `col_medids`, `pres_morning`, `pres_noon`, `pres_night`, `pres_instr`, `pres_day`, `datetime`, `pres_notes`) VALUES
(6, 'd@gmail.com', 'mdshah@gmail.com', 'ABC,FGH,MTC,', '1,2,1,', '1,1,1,', '1,1,2,', 'Rake Care,Take Care,Hello,', '4,3,5,', '30-10-2017', 'Kindly Call before come.'),
(7, 'd@gmail.com', 'mdshah@gmail.com', 'Metacine,Hello,', '1,2,', '1,1,', '1,1,', 'Hello,Hello2,', '3,4,', '31-10-2017', 'Yes Notes'),
(8, 'd@gmail.com', 'mdshah@gmail.com', 'Metacine,FGH,', '1,3,', '11,3,', '11,3,', 'Hello,ert,', '22,5,', '31-10-2017', 'Malav Shah'),
(9, 'd@gmail.com', 'mdshah@gmail.com', 'Metacine,Viagra,', '1,0,', '1,0,', '1,5,', 'After Meal,Before Sleep,', '3,365,', '31-10-2017', 'Demo Mail'),
(10, 'd@gmail.com', 'mdshah@gmail.com', 'Metacine,Viagra,', '1,0,', '1,0,', '4,7,', 'Before Meal,Before Sleep,', '7,365,', '31-10-2017', 'Patlo tha'),
(11, 'd@gmail.com', 'mdshah@gmail.com', 'Meracine,Viagra,', '1,6,', '1,6,', '1,6,', 'Before Meal,Before Sleep,', '7,366,', '31-10-2017', 'Patlo tha.');

-- --------------------------------------------------------

--
-- Table structure for table `user_mst`
--

CREATE TABLE `user_mst` (
  `pk_usr_email_id` varchar(30) NOT NULL,
  `usr_name` varchar(15) NOT NULL,
  `usr_mno` varchar(13) NOT NULL,
  `usr_pass` varchar(10) NOT NULL,
  `usr_gen` varchar(7) NOT NULL,
  `usr_pro_pic` varchar(40) NOT NULL,
  `usr_verify` varchar(10) NOT NULL,
  `usr_token` varchar(10) NOT NULL,
  `usr_type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_mst`
--

INSERT INTO `user_mst` (`pk_usr_email_id`, `usr_name`, `usr_mno`, `usr_pass`, `usr_gen`, `usr_pro_pic`, `usr_verify`, `usr_token`, `usr_type`) VALUES
('mdshah9574@gmail.com', 'Malav Shah', '9574600925', '12345', 'Male', '-', '1', '659813', 'Admin'),
('xyz@gmail.com', 'ABC', '123456789', '1234', 'Female', '-', '0', '26265', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_mst`
--
ALTER TABLE `doctor_mst`
  ADD PRIMARY KEY (`pk_doc_email_id`),
  ADD UNIQUE KEY `doc_lic_no` (`doc_lic_no`);

--
-- Indexes for table `medicine_mst`
--
ALTER TABLE `medicine_mst`
  ADD PRIMARY KEY (`pk_med_id`);

--
-- Indexes for table `prescription_mst`
--
ALTER TABLE `prescription_mst`
  ADD PRIMARY KEY (`pk_pres_id`);

--
-- Indexes for table `user_mst`
--
ALTER TABLE `user_mst`
  ADD PRIMARY KEY (`pk_usr_email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine_mst`
--
ALTER TABLE `medicine_mst`
  MODIFY `pk_med_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `prescription_mst`
--
ALTER TABLE `prescription_mst`
  MODIFY `pk_pres_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
