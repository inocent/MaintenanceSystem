-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 01:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pmmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE IF NOT EXISTS `building` (
  `building_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `building_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `empty_rooms` int(10) NOT NULL,
  `occupied_rooms` int(10) NOT NULL,
  `total_rooms` int(5) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `campus` text COLLATE utf8_unicode_ci NOT NULL,
  `Region` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`building_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_id`, `name`, `building_type`, `empty_rooms`, `occupied_rooms`, `total_rooms`, `status`, `campus`, `Region`, `created_at`, `updated_at`) VALUES
(1, 'Block A', 'Administration Block', 12, 8, 20, 'Occupied', 'K/nyama', 'Dar Es Salaam', '2016-04-04 20:30:38', '2016-04-04 20:30:38'),
(2, 'Block B', 'Offices', 12, 0, 12, 'Empty', 'Sinza', 'Dar Es Salaam', '2016-04-04 20:30:38', '2016-04-04 20:30:38'),
(3, 'Block C', 'Lecture Rooms', 0, 20, 20, 'Occupied', 'Technical', 'Arusha', '2016-04-19 20:30:57', '2016-04-19 20:30:57'),
(16, 'Block C', 'Computer Lab', 4, 4, 8, 'Empty', 'K/nyama', 'mwanza', '2016-05-08 06:25:49', '2016-05-08 06:25:49'),
(17, 'SA/SB', 'lecture rooms', 0, 0, 2, 'Well', 'Sanawari', 'Arusha', '2016-05-08 06:56:04', '2016-05-08 06:56:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
