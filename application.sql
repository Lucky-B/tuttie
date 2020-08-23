-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2020 at 12:13 PM
-- Server version: 5.7.31-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pxziavfo_tuttie`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `link_id` varchar(20) NOT NULL,
  `s_initial` varchar(4) DEFAULT NULL,
  `s_lastname` varchar(20) DEFAULT NULL,
  `s_title` varchar(20) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `student_id` int(8) DEFAULT NULL,
  `id_passport` varchar(10) DEFAULT NULL,
  `cell_no1` int(10) DEFAULT NULL,
  `cell_no2` int(10) DEFAULT NULL,
  `student_email` varchar(40) DEFAULT NULL,
  `lecturere_email` varchar(50) DEFAULT NULL,
  `memoir` longtext,
  `current_program` text,
  `current_level` varchar(40) DEFAULT NULL,
  `current_year` int(4) DEFAULT NULL,
  `app_type` varchar(4) DEFAULT NULL,
  `campus` varchar(8) DEFAULT NULL,
  `faculty` varchar(10) DEFAULT NULL,
  `staff_no` int(8) DEFAULT NULL,
  `l_title` varchar(11) DEFAULT NULL,
  `l_initial` varchar(11) DEFAULT NULL,
  `l_lastname` varchar(10) DEFAULT NULL,
  `module_name` varchar(4) NOT NULL,
  `module_code` int(3) NOT NULL,
  `verdict` varchar(10) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD UNIQUE KEY `applica` (`link_id`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
