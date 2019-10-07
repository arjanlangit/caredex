-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2019 at 02:33 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id10833978_hospital101`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `userID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `m_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `C_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `street` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `brgy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`userID`, `f_name`, `m_name`, `l_name`, `user`, `pass`, `C_status`, `title`, `sex`, `nationality`, `age`, `street`, `brgy`, `city`, `region`) VALUES
('Admin123', '', '', '', 'admin', 'admin', '', '', '', '', 0, '', '', '', ''),
('N123321', 'Anna', 'Gonzalez', 'De Lima', 'AnnaDeLima', '12344321', 'Single', '01', 'Female', 'Filipino', 28, 'Ortigas', 'San Juan', 'Pasig', 'NCR'),
('N41526', 'Jose', 'Nora', 'Uy', 'jose', 'jose', 'Single', '02', 'Male', 'Filipino', 23, '12 street', 'Sur', 'naga', '5');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_ID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `m_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `c_stat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ward_num` int(11) NOT NULL,
  `room_num` int(11) NOT NULL,
  `bed_num` int(11) NOT NULL,
  `doctor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diagnosis` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `diet` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `allergies` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `S_E` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ad_DT` datetime NOT NULL,
  PRIMARY KEY (`p_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_ID`, `f_name`, `m_name`, `l_name`, `age`, `sex`, `c_stat`, `address`, `nationality`, `ward_num`, `room_num`, `bed_num`, `doctor`, `diagnosis`, `diet`, `allergies`, `S_E`, `ad_DT`) VALUES
('1001', 'Carlo', 'Gonzalez', 'Uy', 36, 'male', 'single', '', 'Filipino', 1, 102, 4, 'Dr. Lucas Monte ', '', '', '', '', '2019-10-10 17:30:00'),
('P52552', 'Juan', 'Dela Cruz', 'De Lima', 24, 'Male', 'Single', 'San nicoals', 'Filipino', 3, 301, 2, 'DR. Jan Ramos', 'N/a', 'N/a2', 'N/a3', 'N/a4', '2019-10-15 15:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `sched`
--

CREATE TABLE IF NOT EXISTS `sched` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nurse_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nurse_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ward_num` int(11) NOT NULL,
  `room_num` int(11) NOT NULL,
  `bed_num` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `temp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bpm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `meds` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `Endorsement` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reading_TD` datetime NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sched`
--

INSERT INTO `sched` (`id`, `nurse_id`, `nurse_name`, `patient_id`, `p_name`, `ward_num`, `room_num`, `bed_num`, `date_time`, `temp`, `bpm`, `meds`, `Endorsement`, `reading_TD`, `status`) VALUES
(1, 'N123321', 'Anna Gonzalez De Lima', '1001', 'Carlo Gonzalez Uy', 1, 102, 4, '2019-09-26 04:30:00', '', '', '1 pcs Ampicillin 500Mg', '', '2019-09-26 06:32:12', 'pending'),
(2, 'N123321', 'Anna Gonzalez De Lima', '1001', 'Carlo Gonzalez Uy	', 1, 102, 4, '2019-09-25 22:30:00', '30.88', '93', '1 pcs Amoxicillin 500 Mg', '', '2019-09-26 08:43:10', 'ok'),
(3, 'N123321', 'Anna Gonzalez De Lima', '1001', 'Carlo Gonzalez Uy', 1, 102, 4, '2019-09-25 23:30:00', '30.88', '93', '1 pcs BIOFLU 500 Mg', '', '2019-09-26 08:43:49', 'ok'),
(5, 'N41526', 'Jose Uy', '1001', 'Carlo Uy', 1, 102, 4, '2019-10-26 16:03:00', '', '', 't', 't', '0000-00-00 00:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `sensor_data`
--

CREATE TABLE IF NOT EXISTS `sensor_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temp` double NOT NULL,
  `bpm` double NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sensor_data`
--

INSERT INTO `sensor_data` (`id`, `temp`, `bpm`, `date_time`) VALUES
(1, 0, 0, '2019-10-06 21:12:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
