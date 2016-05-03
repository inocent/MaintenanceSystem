-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 11:46 AM
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
  `total_rooms` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`building_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_id`, `name`, `building_type`, `total_rooms`, `created_at`, `updated_at`) VALUES
(1, 'Block A', 'Class', 20, '2016-04-04 20:30:38', '2016-04-04 20:30:38'),
(2, 'Block B', 'Offices', 12, '2016-04-04 20:30:38', '2016-04-04 20:30:38'),
(3, 'Block C', 'Lecture Rooms', 20, '2016-04-19 20:30:57', '2016-04-19 20:30:57'),
(15, 'Building H', 'Dinning', 6, '2016-04-20 20:48:39', '2016-04-20 20:48:39'),
(17, 'B021', 'General Lab', 1, '2016-04-20 20:54:21', '2016-04-20 20:54:21'),
(23, 'Bungaloo', 'Hotel', 67, '2016-04-20 21:08:40', '2016-04-20 21:08:40'),
(24, 'b308', 'lecture room', 1, '2016-04-21 06:42:24', '2016-04-21 06:42:24'),
(28, 'inocent', 'vicent', 98, '2016-04-21 10:49:17', '2016-04-21 10:49:17'),
(29, 'hall three', 'free', 67, '2016-04-21 17:34:55', '2016-04-21 17:34:55'),
(30, '', '', 0, '2016-04-21 18:17:28', '2016-04-21 18:17:28'),
(31, 'mosses', '', 0, '2016-04-24 17:43:24', '2016-04-24 17:43:24'),
(32, 'hatri', 'sana ', 34, '2016-04-24 17:45:19', '2016-04-24 17:45:19'),
(33, ' gjslkdj;l', 'ckvsdkvpvvwpeov', 8924, '2016-04-25 08:59:21', '2016-04-25 08:59:21'),
(34, 'k', 'j', 9, '2016-04-25 09:00:01', '2016-04-25 09:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `college_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `extension` int(11) NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `directline` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tweeter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `name`, `shortname`, `address`, `telephone`, `extension`, `fax`, `directline`, `email`, `website`, `facebook`, `tweeter`, `youtube`, `linkedin`, `skype`, `created_at`, `updated_at`) VALUES
(1, 'College of Information and communication Technology', 'CoICT', '', '', 123, '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department_college_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`department_id`),
  KEY `index_dept_college_id` (`department_college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `name`, `shortname`, `address`, `telephone`, `extension`, `email`, `website`, `department_college_id`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science And Engineering', 'CSE', '', '', 334, '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE IF NOT EXISTS `furniture` (
  `furniture_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `model_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `furniture_room_id` int(10) unsigned NOT NULL,
  `brand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`furniture_id`),
  KEY `index_furniture_room_id` (`furniture_room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_equip`
--

CREATE TABLE IF NOT EXISTS `laboratory_equip` (
  `lab_equip_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `serial_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lab_equip_room_id` int(10) unsigned NOT NULL,
  `brand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`lab_equip_id`),
  KEY `index_lab_equip_room_id` (`lab_equip_room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `machinery`
--

CREATE TABLE IF NOT EXISTS `machinery` (
  `machinery_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `serial_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `machinery_room_id` int(10) unsigned NOT NULL,
  `brand` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`machinery_id`),
  KEY `index_machinery_room_id` (`machinery_room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `office_equip`
--

CREATE TABLE IF NOT EXISTS `office_equip` (
  `office_equip_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `serial_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `office_equip_room_id` int(10) unsigned NOT NULL,
  `brand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`office_equip_id`),
  KEY `index_office_equip_room_id` (`office_equip_room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `priority` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `request_group` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `submitted_by` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `assigned_to` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `comments` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `room_size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `room_building_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`room_id`),
  KEY `index_room_building_id` (`room_building_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `software_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `software_depart_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`software_id`),
  KEY `index_software_depart_id` (`software_depart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE IF NOT EXISTS `systemuser` (
  `systemuser_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_middle_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `systemuser_depart_id` int(10) unsigned NOT NULL,
  `systemuser_password` text COLLATE utf8_unicode_ci NOT NULL,
  `systemuser_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`systemuser_id`),
  KEY `index_syste_depart_id` (`systemuser_depart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`systemuser_id`, `user_first_name`, `user_middle_name`, `user_last_name`, `user_name`, `user_gender`, `systemuser_depart_id`, `systemuser_password`, `systemuser_type`, `created_at`, `updated_at`) VALUES
(2, 'jose', 'fredrick', 'henry', 'henry', 'Male', 1, '123', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'bloo', 'bloo', 'bloo', 'bloo', 'Female', 1, 'bloo', 'staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `engine_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chasis_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `plate_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `vehicle_depart_id` int(10) unsigned NOT NULL,
  `brand` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`vehicle_id`),
  KEY `index_vehicle_depart_id` (`vehicle_depart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_department`
--

CREATE TABLE IF NOT EXISTS `vehicle_department` (
  `vehicle_department_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_department_veh_id` int(10) unsigned NOT NULL,
  `vehicle_department_dept_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`vehicle_department_id`),
  KEY `index_vehicle_department_veh_id` (`vehicle_department_veh_id`),
  KEY `index_vehicle_department_dept_id` (`vehicle_department_dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `FK_department_college_id` FOREIGN KEY (`department_college_id`) REFERENCES `college` (`college_id`);

--
-- Constraints for table `furniture`
--
ALTER TABLE `furniture`
  ADD CONSTRAINT `FK_furniture_room_id` FOREIGN KEY (`furniture_room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `laboratory_equip`
--
ALTER TABLE `laboratory_equip`
  ADD CONSTRAINT `FK_lab_equip_room_id` FOREIGN KEY (`lab_equip_room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `machinery`
--
ALTER TABLE `machinery`
  ADD CONSTRAINT `FK_machinery_room_id` FOREIGN KEY (`machinery_room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `office_equip`
--
ALTER TABLE `office_equip`
  ADD CONSTRAINT `FK_office_equip_room_id` FOREIGN KEY (`office_equip_room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `FK_room_building_id` FOREIGN KEY (`room_building_id`) REFERENCES `building` (`building_id`);

--
-- Constraints for table `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `FK_software_depart_id` FOREIGN KEY (`software_depart_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `systemuser`
--
ALTER TABLE `systemuser`
  ADD CONSTRAINT `FK_systemuser_depart_id` FOREIGN KEY (`systemuser_depart_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `FK_vehicle_depart_id` FOREIGN KEY (`vehicle_depart_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `vehicle_department`
--
ALTER TABLE `vehicle_department`
  ADD CONSTRAINT `FK_vehicle_department_dept_id` FOREIGN KEY (`vehicle_department_dept_id`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `FK_vehicle_department_veh_id` FOREIGN KEY (`vehicle_department_veh_id`) REFERENCES `vehicle` (`vehicle_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
