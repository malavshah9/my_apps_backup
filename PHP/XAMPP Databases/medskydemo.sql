-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 05:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medskydemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_mst`
--

CREATE TABLE `doctor_mst` (
  `doc_sr_no` int(10) NOT NULL,
  `pk_doc_email_id` varchar(25) NOT NULL,
  `doc_pass` varchar(10) NOT NULL,
  `doc_lic_no` int(15) NOT NULL,
  `doc_name` varchar(15) NOT NULL,
  `fk_spec_id` int(10) NOT NULL,
  `fk_deg_id` int(10) NOT NULL,
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

INSERT INTO `doctor_mst` (`doc_sr_no`, `pk_doc_email_id`, `doc_pass`, `doc_lic_no`, `doc_name`, `fk_spec_id`, `fk_deg_id`, `doc_pro_pic`, `doc_add`, `doc_gen`, `doc_mno`, `doc_verify`, `doc_token`) VALUES
(1, 'abc@gmail.com', '123456', 78946, 'Shah Abc', 0, 0, '', 'Ahmedabad', 'Male', 789456123, '1', '788989'),
(2, 'devarshshah44@gmail.com', '22', 63, 'dev', 0, 0, ' ', ' ', 'male', 96, '1', '0151b393e6'),
(3, 'jainams662@gmail.com', '852', 966, 'jainam', 0, 0, ' ', ' ', 'male', 2147483647, '1', '9e4cc1625d'),
(4, 'jshah7463@gmail.com', '9898', 4512, 'jaky', 0, 0, ' ', ' ', 'male', 63, '0', '7b811c9ebf'),
(5, 'mdshah9574@gmail.com', '1234567', 345127, 'H Shah', 0, 0, '', 'Ahmedabad', 'Female', 123456789, '0', '765901'),
(6, 'parth.babu05@gmail.com', '8555', 978, 'asd', 0, 0, ' ', ' ', 'male', 9666, '0', 'd10101be0d');

-- --------------------------------------------------------

--
-- Table structure for table `doc_degree`
--

CREATE TABLE `doc_degree` (
  `pk_deg_id` int(10) NOT NULL,
  `deg_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_degree`
--

INSERT INTO `doc_degree` (`pk_deg_id`, `deg_name`) VALUES
(1, 'Mbbs'),
(2, 'Md');

-- --------------------------------------------------------

--
-- Table structure for table `doc_specialist`
--

CREATE TABLE `doc_specialist` (
  `pk_spec_id` int(10) NOT NULL,
  `spec_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_specialist`
--

INSERT INTO `doc_specialist` (`pk_spec_id`, `spec_name`) VALUES
(1, 'Child Specialist'),
(2, 'Dentist');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_mst`
--

CREATE TABLE `medicine_mst` (
  `pk_med_id` int(10) NOT NULL,
  `med_name` varchar(50) NOT NULL,
  `com_name` varchar(30) NOT NULL,
  `med_use` varchar(100) NOT NULL,
  `med_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_mst`
--

INSERT INTO `medicine_mst` (`pk_med_id`, `med_name`, `com_name`, `med_use`, `med_type`) VALUES
(1, 'Amlodipine Tablet', 'Adipine Tab', 'Heart Failure,Heart Murmur', 'Tablet'),
(2, 'Albumin Human Injection', 'Zovirax', 'Albutein', 'Injection'),
(3, 'Bisacodyl Tablet', 'Bidlax-5 tab', 'Constipation and Impaction', 'Tablet'),
(4, 'Butenafine Cream', 'Mentax ', 'Toenail Fungus Onychomycosis', 'Cream'),
(5, 'Caffeine Tablet', 'Nodoz ', 'Depression,Tenssion', 'Tablet'),
(6, 'Calamine Diphenhydramine ', 'Ivarest', 'Sun-Damaged Skin,Tick Bites', 'Cream'),
(7, 'Dactinomycin Intra Venous', 'Cosmegen Vial', 'Brain Cancer', 'Injection'),
(8, 'Diltiazem Tablets', 'Angizem Tab', 'Heart Health', 'Tablet'),
(9, 'Econazole Cream', 'Spectazole', 'Dry Skin', 'Cream'),
(10, 'Etoricoxib Capsules', 'Alcoxib Tab', 'Arthritis', 'Capsules');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_type`
--

CREATE TABLE `medicine_type` (
  `pk_med_id` int(10) NOT NULL,
  `med_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_mst`
--

CREATE TABLE `prescription_mst` (
  `pk_pres_id` int(10) NOT NULL,
  `fk_usr_email_id` varchar(30) NOT NULL,
  `fk_doc_email_id` varchar(25) NOT NULL,
  `col_medids` varchar(200) NOT NULL,
  `pres_morning` varchar(20) NOT NULL,
  `pres_noon` varchar(20) NOT NULL,
  `pres_night` varchar(20) NOT NULL,
  `pres_instr` varchar(100) NOT NULL,
  `pres_day` varchar(20) NOT NULL,
  `pres_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_mst`
--

CREATE TABLE `user_mst` (
  `usr_sr_no` int(10) NOT NULL,
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

INSERT INTO `user_mst` (`usr_sr_no`, `pk_usr_email_id`, `usr_name`, `usr_mno`, `usr_pass`, `usr_gen`, `usr_pro_pic`, `usr_verify`, `usr_token`, `usr_type`) VALUES
(1, 'devarsh44@gmail.com', 'sww', '2522', '966', 'on', 'null', '0', '129c6bd0d8', 'user'),
(2, 'jainams662@gmail.com', 'kal', '966', '20', 'on', 'null', '1', 'a091b98cd9', 'user'),
(3, 'mdshah9574@gmail.com', 'Malav Shah', '9574600925', '12345', 'Male', '-', '1', '659813', 'Admin'),
(4, 'xyz@gmail.com', 'ABC', '123456789', '1234', 'Female', '-', '0', '26265', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_mst`
--
ALTER TABLE `doctor_mst`
  ADD PRIMARY KEY (`pk_doc_email_id`),
  ADD UNIQUE KEY `doc_lic_no` (`doc_lic_no`),
  ADD KEY `doc_sr_no` (`doc_sr_no`);

--
-- Indexes for table `doc_degree`
--
ALTER TABLE `doc_degree`
  ADD PRIMARY KEY (`pk_deg_id`);

--
-- Indexes for table `doc_specialist`
--
ALTER TABLE `doc_specialist`
  ADD PRIMARY KEY (`pk_spec_id`);

--
-- Indexes for table `medicine_mst`
--
ALTER TABLE `medicine_mst`
  ADD PRIMARY KEY (`pk_med_id`);

--
-- Indexes for table `medicine_type`
--
ALTER TABLE `medicine_type`
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
  ADD PRIMARY KEY (`pk_usr_email_id`),
  ADD KEY `usr_sr_no` (`usr_sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_mst`
--
ALTER TABLE `doctor_mst`
  MODIFY `doc_sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doc_degree`
--
ALTER TABLE `doc_degree`
  MODIFY `pk_deg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doc_specialist`
--
ALTER TABLE `doc_specialist`
  MODIFY `pk_spec_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medicine_mst`
--
ALTER TABLE `medicine_mst`
  MODIFY `pk_med_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `medicine_type`
--
ALTER TABLE `medicine_type`
  MODIFY `pk_med_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prescription_mst`
--
ALTER TABLE `prescription_mst`
  MODIFY `pk_pres_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_mst`
--
ALTER TABLE `user_mst`
  MODIFY `usr_sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
