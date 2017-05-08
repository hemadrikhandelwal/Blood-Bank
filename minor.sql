-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 01:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor`
--

-- --------------------------------------------------------

--
-- Table structure for table `bb`
--

CREATE TABLE `bb` (
  `bb_id` int(100) NOT NULL,
  `bb_name` text NOT NULL,
  `bb_address` varchar(250) NOT NULL,
  `bb_bamt` int(200) NOT NULL,
  `bb_contact_us` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb`
--

INSERT INTO `bb` (`bb_id`, `bb_name`, `bb_address`, `bb_bamt`, `bb_contact_us`) VALUES
(12, 'raj mohala', 'optical address', 98, 1234567890),
(13, 'rajfhani', 'raj express', 456, 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `don_id` int(100) NOT NULL,
  `don_name` text NOT NULL,
  `don_address` varchar(200) NOT NULL,
  `blood_bank_name` text NOT NULL,
  `blood_bank_address` varchar(250) NOT NULL,
  `blood_amt` int(250) NOT NULL,
  `contact_detail` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`don_id`, `don_name`, `don_address`, `blood_bank_name`, `blood_bank_address`, `blood_amt`, `contact_detail`) VALUES
(9, 'gfhjsdkm,', 'reduhstedgshx,mz', 'rfjdcsx', 'ywedhgsajK<', 111, 2147483647),
(10, 'raja gupta', 'chjmxn ,QKDWJXLqkz', 'udacity', 'update new dat', 1234, 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(100) NOT NULL,
  `hospital_name` text NOT NULL,
  `hospital_address` varchar(300) NOT NULL,
  `blood_bank` varchar(200) NOT NULL,
  `contact_us` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `hospital_address`, `blood_bank`, `contact_us`) VALUES
(7, 'radha ranni hospital', 'fgydxcjn', 'tyuskjzx', 1234567890),
(8, 'yusdhjznx,m', 'jai shree krishna apparment', 'jai shree mahakal', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb`
--
ALTER TABLE `bb`
  ADD PRIMARY KEY (`bb_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bb`
--
ALTER TABLE `bb`
  MODIFY `bb_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `don_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
