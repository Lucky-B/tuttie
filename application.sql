-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 11:07 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuttie`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `link_id` varchar(20) NOT NULL,
  `s_lastname` varchar(20) DEFAULT NULL,
  `s_title` varchar(20) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `student_id` int(8) DEFAULT NULL,
  `id_passport` varchar(10) DEFAULT NULL,
  `cell_no1` int(10) DEFAULT NULL,
  `cell_no2` int(10) DEFAULT NULL,
  `student_email` varchar(20) DEFAULT NULL,
  `memoir` longtext DEFAULT NULL,
  `current_program` text DEFAULT NULL,
  `current_year` int(4) DEFAULT NULL,
  `app_type` varchar(4) DEFAULT NULL,
  `campus` varchar(8) DEFAULT NULL,
  `staff_no` int(8) DEFAULT NULL,
  `l_title` int(11) DEFAULT NULL,
  `l_initial` int(11) DEFAULT NULL,
  `l_lastname` varchar(10) DEFAULT NULL,
  `module_name` varchar(4) NOT NULL,
  `module_code` int(3) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
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
