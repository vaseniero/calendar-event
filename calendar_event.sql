-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 03:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar_event`
--
CREATE DATABASE IF NOT EXISTS `calendar_event` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `calendar_event`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

DROP TABLE IF EXISTS `tbl_event`;
CREATE TABLE `tbl_event` (
  `Title` varchar(255) NOT NULL,
  `dte_From` date NOT NULL,
  `dte_To` date NOT NULL,
  `Sun` tinyint(1) NOT NULL DEFAULT '0',
  `Mon` tinyint(1) NOT NULL DEFAULT '0',
  `Tue` tinyint(1) NOT NULL DEFAULT '0',
  `Wed` tinyint(1) NOT NULL DEFAULT '0',
  `Thu` tinyint(1) NOT NULL DEFAULT '0',
  `Fri` tinyint(1) NOT NULL DEFAULT '0',
  `Sat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`Title`, `dte_From`, `dte_To`, `Sun`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`) VALUES
('Test', '2018-07-01', '2018-07-10', 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
