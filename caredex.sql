-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 03:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caredex`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `p_firstname` varchar(32) NOT NULL,
  `p_middlename` varchar(32) NOT NULL,
  `p_lastname` varchar(32) NOT NULL,
  `p_age` varchar(3) NOT NULL,
  `p_sex` varchar(8) NOT NULL,
  `p_civilstatus` varchar(50) NOT NULL,
  `p_address` varchar(150) NOT NULL,
  `p_date` varchar(10) NOT NULL,
  `p_time` varchar(8) NOT NULL,
  `p_nationality` varchar(30) NOT NULL,
  `p_wardno` varchar(5) NOT NULL,
  `p_bedno` varchar(5) NOT NULL,
  `p_doctor` varchar(50) NOT NULL,
  `p_diagnosis` varchar(50) NOT NULL,
  `p_diet` varchar(50) NOT NULL,
  `p_allergies` varchar(50) NOT NULL,
  `p_endorsement` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `p_firstname`, `p_middlename`, `p_lastname`, `p_age`, `p_sex`, `p_civilstatus`, `p_address`, `p_date`, `p_time`, `p_nationality`, `p_wardno`, `p_bedno`, `p_doctor`, `p_diagnosis`, `p_diet`, `p_allergies`, `p_endorsement`) VALUES
(1, 'Nikki', 'Gener', 'Abarca', '20', 'Female', 'Single', 'Sta. Mesa, Manila', '2019-03-27', '19:20:55', 'Filipino', '3', '2', 'Dr.Arjan', 'Backpain', 'Soft', 'None', 'None'),
(2, 'Arjan', 'Estanislao', 'Villon', '20', 'Male', 'Single', 'Marikina City', '2019-03-28', '04:24:07', 'Filipino', '20', '13', 'Dr. Gonzales', 'Pain', 'Soft', 'Seafood', 'Triage');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `n_username` varchar(32) NOT NULL,
  `n_email` varchar(64) NOT NULL,
  `n_password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `n_username`, `n_email`, `n_password`) VALUES
(1, 'test', 'test@gmail.com', '6cce064de1345fec0b4c3c77de40d391');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
