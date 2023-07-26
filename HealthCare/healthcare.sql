-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20230121.0cf02972ff
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 05:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

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
  `admin_password` varchar(40) NOT NULL,
  `admin_confrim_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nurse_id`, `nurse_fname`, `nurse_lname`, `nurse_email`, `nurse_address`, `nurse_phone`, `healthcare_center`, `nurse_password`, `nurse_confirm_password`) VALUES
(1, 'Test', 'Test', 'test@gmail.com', '', '555555555', 'Test', '$2y$10$NMa0bNDW93WttPWDf4BklOHBZidXupHlB1iPvteqM8i6VI2JlBal2', ''),
(2, 'Test2', 'Test2', 'test2@gmail.com', '', '55555xxxx', 'Test2', '$2y$10$N2k0p3SZ7fmyYT3nswoS4ubWp0vBbDiW8m6BjiC9HBYxRcx0R05s.', ''),
(3, 'Test', 't', 'tettst@gmail.com', '', 'tt', 't', '$2y$10$GksJTGYNXR4aXRyY3/6/Q.BrulaEUd50ZRzhrFqOsx3PjBWzhMxUm', 'tt'),
(4, 'salaaudin', 'salauroo', 'sala@gmail.com', '', '1122334455', 'lopital jetoo', '$2y$10$O3v6E51zuDOEzSiCKWO0ee9kjZ8tuDAacsAbr26wc/5wftRMbRlaS', '12345');

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nurse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
