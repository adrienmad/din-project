-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 07:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(50) NOT NULL,
  `admin_lname` varchar(50) NOT NULL,
  `admin_email` varchar(75) NOT NULL,
  `admin_phone` varchar(25) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_confrim_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_email`, `admin_phone`, `admin_password`, `admin_confrim_password`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '58151631', '$2y$10$rPFoDW/sfO3CHPjMki.NtuUQZIoa98Ln4e1Nb17XfeUCCjaO1Vfb.', '');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `nurse_id` int(11) NOT NULL,
  `nurse_fname` varchar(50) NOT NULL,
  `nurse_lname` varchar(50) NOT NULL,
  `nurse_email` varchar(75) NOT NULL,
  `nurse_address` varchar(150) NOT NULL,
  `nurse_phone` varchar(40) NOT NULL,
  `healthcare_center` varchar(50) NOT NULL,
  `nurse_password` varchar(100) NOT NULL,
  `nurse_confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_fname` varchar(255) NOT NULL,
  `patient_lname` varchar(255) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_phone` varchar(25) NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `pregnancies` int(11) NOT NULL,
  `bmi` float NOT NULL,
  `skin_thickness` float NOT NULL,
  `glucose` float NOT NULL,
  `blood_pressure` float NOT NULL,
  `insuline` float NOT NULL,
  `diabeties_pedigree_function` float NOT NULL,
  `outcome` int(10) NOT NULL,
  `date_form_filled` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `patient_gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nurse_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nurse_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
