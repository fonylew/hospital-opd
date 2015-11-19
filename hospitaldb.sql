-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 05:07 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE IF NOT EXISTS `allergies` (
  `HN` varchar(10) NOT NULL DEFAULT '',
  `allergy` varchar(200) NOT NULL DEFAULT '',
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appoint_id` int(11) NOT NULL,
  `HN` varchar(10) NOT NULL,
  `appoint_time` date DEFAULT NULL,
  `doctor_username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `illness_db`
--

CREATE TABLE IF NOT EXISTS `illness_db` (
  `illness_order` int(10) unsigned NOT NULL,
  `illness_code` varchar(20) NOT NULL,
  `illness_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicalproblems`
--

CREATE TABLE IF NOT EXISTS `medicalproblems` (
  `HN` varchar(10) NOT NULL DEFAULT '',
  `problem` varchar(200) NOT NULL DEFAULT '',
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecord`
--

CREATE TABLE IF NOT EXISTS `medicalrecord` (
  `HN` varchar(10) NOT NULL DEFAULT '',
  `diagnose_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `weight` double unsigned NOT NULL DEFAULT '0',
  `height` double unsigned NOT NULL DEFAULT '0',
  `bloodPressure` varchar(10) DEFAULT NULL,
  `temperature` double unsigned NOT NULL DEFAULT '0',
  `heartRate` int(10) unsigned DEFAULT NULL,
  `nurse_username` varchar(20) DEFAULT NULL,
  `doctor_username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `prescript_id` int(11) NOT NULL DEFAULT '0',
  `medrec_HN` varchar(10) NOT NULL DEFAULT '',
  `medrec_datetime` datetime DEFAULT NULL,
  `med_code` varchar(20) NOT NULL DEFAULT '',
  `howTo` varchar(20) DEFAULT NULL,
  `amount` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_db`
--

CREATE TABLE IF NOT EXISTS `medicine_db` (
  `med_order` int(10) unsigned NOT NULL,
  `med_code` varchar(20) NOT NULL,
  `med_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `HN` varchar(10) NOT NULL,
  `id` varchar(20) NOT NULL,
  `initial` varchar(10) DEFAULT NULL,
  `fName` varchar(100) DEFAULT NULL,
  `lName` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `prescript_id` int(11) NOT NULL,
  `pharmacist_username` varchar(20) DEFAULT NULL,
  `medrec_HN` varchar(10) DEFAULT NULL,
  `medrec_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `id` varchar(20) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `initial` varchar(10) DEFAULT NULL,
  `fName` varchar(100) DEFAULT NULL,
  `lName` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `userType` varchar(10) NOT NULL,
  `doctor_department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worktime`
--

CREATE TABLE IF NOT EXISTS `worktime` (
  `worktime_id` int(11) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `worktime_date` date DEFAULT NULL,
  `starttime` time NOT NULL,
  `finishtime` time NOT NULL,
  `doctor_username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
  ADD PRIMARY KEY (`HN`,`allergy`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoint_id`),
  ADD KEY `HN` (`HN`),
  ADD KEY `doctor_username` (`doctor_username`);

--
-- Indexes for table `illness_db`
--
ALTER TABLE `illness_db`
  ADD PRIMARY KEY (`illness_code`),
  ADD KEY `illness_order` (`illness_order`);

--
-- Indexes for table `medicalproblems`
--
ALTER TABLE `medicalproblems`
  ADD PRIMARY KEY (`HN`,`problem`);

--
-- Indexes for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD PRIMARY KEY (`HN`,`diagnose_datetime`),
  ADD KEY `diagnose_datetime` (`diagnose_datetime`),
  ADD KEY `nurse_username` (`nurse_username`),
  ADD KEY `doctor_username` (`doctor_username`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medrec_HN`,`prescript_id`,`med_code`),
  ADD KEY `prescript_id` (`prescript_id`),
  ADD KEY `medrec_datetime` (`medrec_datetime`),
  ADD KEY `med_code` (`med_code`);

--
-- Indexes for table `medicine_db`
--
ALTER TABLE `medicine_db`
  ADD PRIMARY KEY (`med_code`),
  ADD KEY `medicine_order` (`med_order`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`HN`),
  ADD UNIQUE KEY `uc_PersonID` (`id`,`fName`,`lName`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescript_id`),
  ADD KEY `medrec_HN` (`medrec_HN`),
  ADD KEY `pharmacist_username` (`pharmacist_username`),
  ADD KEY `medrec_datetime` (`medrec_datetime`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `worktime`
--
ALTER TABLE `worktime`
  ADD PRIMARY KEY (`worktime_id`),
  ADD KEY `doctor_username` (`doctor_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `illness_db`
--
ALTER TABLE `illness_db`
  MODIFY `illness_order` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicine_db`
--
ALTER TABLE `medicine_db`
  MODIFY `med_order` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescript_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `worktime`
--
ALTER TABLE `worktime`
  MODIFY `worktime_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `allergies`
--
ALTER TABLE `allergies`
  ADD CONSTRAINT `allergies_ibfk_1` FOREIGN KEY (`HN`) REFERENCES `patient` (`HN`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`HN`) REFERENCES `patient` (`HN`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doctor_username`) REFERENCES `user` (`username`);

--
-- Constraints for table `medicalproblems`
--
ALTER TABLE `medicalproblems`
  ADD CONSTRAINT `medicalproblems_ibfk_1` FOREIGN KEY (`HN`) REFERENCES `patient` (`HN`);

--
-- Constraints for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD CONSTRAINT `medicalrecord_ibfk_1` FOREIGN KEY (`HN`) REFERENCES `patient` (`HN`),
  ADD CONSTRAINT `medicalrecord_ibfk_2` FOREIGN KEY (`nurse_username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `medicalrecord_ibfk_3` FOREIGN KEY (`doctor_username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `medicalrecord_ibfk_4` FOREIGN KEY (`code`) REFERENCES `illness_db` (`illness_code`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`prescript_id`) REFERENCES `prescription` (`prescript_id`),
  ADD CONSTRAINT `medicine_ibfk_2` FOREIGN KEY (`medrec_HN`) REFERENCES `patient` (`HN`),
  ADD CONSTRAINT `medicine_ibfk_3` FOREIGN KEY (`medrec_datetime`) REFERENCES `medicalrecord` (`diagnose_datetime`),
  ADD CONSTRAINT `medicine_ibfk_4` FOREIGN KEY (`med_code`) REFERENCES `medicine_db` (`med_code`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`medrec_HN`) REFERENCES `patient` (`HN`),
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`pharmacist_username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `prescription_ibfk_3` FOREIGN KEY (`medrec_datetime`) REFERENCES `medicalrecord` (`diagnose_datetime`);

--
-- Constraints for table `worktime`
--
ALTER TABLE `worktime`
  ADD CONSTRAINT `worktime_ibfk_1` FOREIGN KEY (`doctor_username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
