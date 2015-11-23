-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2015 at 02:25 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.27

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
-- Table structure for table `Allergies`
--

CREATE TABLE IF NOT EXISTS `Allergies` (
  `HN` varchar(10) NOT NULL DEFAULT '',
  `allergy` varchar(200) NOT NULL DEFAULT '',
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Appointment`
--

CREATE TABLE IF NOT EXISTS `Appointment` (
  `appoint_id` int(11) NOT NULL,
  `HN` varchar(10) NOT NULL,
  `appoint_time` date DEFAULT NULL,
  `docName` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `doctor_username` varchar(20) DEFAULT NULL,
  `worktime_date` date NOT NULL,
  `worktime_starttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `MedicalProblems`
--

CREATE TABLE IF NOT EXISTS `MedicalProblems` (
  `HN` varchar(10) NOT NULL DEFAULT '',
  `problem` varchar(200) NOT NULL DEFAULT '',
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `MedicalRecord`
--

CREATE TABLE IF NOT EXISTS `MedicalRecord` (
  `HN` varchar(10) NOT NULL DEFAULT '',
  `diagnose_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `code` varchar(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `weight` int(10) unsigned DEFAULT NULL,
  `height` int(10) unsigned DEFAULT NULL,
  `bloodPressure` varchar(10) DEFAULT NULL,
  `temperature` int(10) unsigned DEFAULT NULL,
  `heartRate` int(10) unsigned DEFAULT NULL,
  `nurse_username` varchar(20) DEFAULT NULL,
  `doctor_username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Medicine`
--

CREATE TABLE IF NOT EXISTS `Medicine` (
  `prescript_id` int(11) NOT NULL DEFAULT '0',
  `medrec_HN` varchar(10) NOT NULL DEFAULT '',
  `medrec_datetime` datetime DEFAULT NULL,
  `mName` varchar(10) NOT NULL DEFAULT '',
  `howTo` varchar(20) DEFAULT NULL,
  `amount` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE IF NOT EXISTS `Patient` (
  `HN` varchar(10) NOT NULL,
  `id` varchar(20) NOT NULL,
  `initial` varchar(10) DEFAULT NULL,
  `fName` varchar(100) DEFAULT NULL,
  `lName` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`HN`, `id`, `initial`, `fName`, `lName`, `address`, `tel`, `email`) VALUES
('123', '123456789', 'นาย', 'ทดสอบ', 'จริงๆนะ', 'กทมม', '023339999', 'test@aa'),
('123456', '8982348211425', 'เด็กหญิง', 'หนูป่วย', 'ช่วยด้วย', 'บ้านบางแค', '0842338568', 'helpme@tee.com'),
('555555', '11233499859', 'นางสาว', 'สวยสมร', 'ชมชื่น', 'ถ.สีลม', '0935529943', 'suay@hotmail.com'),
('888888', '3452975820395', 'นางสาว', 'สมหญิง', 'ซื้อสัตย์', 'บางรัก', '0898820452', 'ouwerj@gmail.com'),
('896381', '8793027577391', 'เด็กชาย', 'ชิวู', 'เป่าขลุ่ยเอย', 'สกายอารีน่า', '0834492793', 'chiwu@summonners.me'),
('909090', '1100900482284', 'นาย', 'จริงใจ', 'จันทร์โอชา', 'ทีวี', '0834609434', 'jj@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Prescription`
--

CREATE TABLE IF NOT EXISTS `Prescription` (
  `prescript_id` int(11) NOT NULL,
  `pharmacist_username` varchar(20) DEFAULT NULL,
  `medrec_HN` varchar(10) DEFAULT NULL,
  `medrec_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
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

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`username`, `password`, `id`, `tel`, `initial`, `fName`, `lName`, `address`, `email`, `userType`, `doctor_department`) VALUES
('doctor01', '1a1dc91c907325c69271', 'test01', 'test01', 'Mr.', 'Doctor', 'First', 'test01', 'test01', 'doctor', 'test01'),
('nurse01', '1a1dc91c907325c69271', 'test02', 'test02', 'Mrs.', 'Nurse', 'First', 'test02', 'test02', 'nurse', NULL),
('pharmacist01', '1a1dc91c907325c69271', 'test04', 'test04', 'Mr.', 'Pharmacist', 'First', 'test04', 'test04', 'pharmacist', NULL),
('staff01', '1a1dc91c907325c69271', 'test03', 'test03', 'Mr.', 'Staff', 'First', 'test03', 'test03', 'staff', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `WorkTime`
--

CREATE TABLE IF NOT EXISTS `WorkTime` (
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
-- Indexes for table `Allergies`
--
ALTER TABLE `Allergies`
  ADD PRIMARY KEY (`HN`,`allergy`);

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`appoint_id`),
  ADD KEY `HN` (`HN`),
  ADD KEY `doctor_username` (`doctor_username`);

--
-- Indexes for table `MedicalProblems`
--
ALTER TABLE `MedicalProblems`
  ADD PRIMARY KEY (`HN`,`problem`);

--
-- Indexes for table `MedicalRecord`
--
ALTER TABLE `MedicalRecord`
  ADD PRIMARY KEY (`HN`,`diagnose_datetime`),
  ADD KEY `diagnose_datetime` (`diagnose_datetime`),
  ADD KEY `nurse_username` (`nurse_username`),
  ADD KEY `doctor_username` (`doctor_username`);

--
-- Indexes for table `Medicine`
--
ALTER TABLE `Medicine`
  ADD PRIMARY KEY (`medrec_HN`,`prescript_id`,`mName`),
  ADD KEY `prescript_id` (`prescript_id`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`HN`),
  ADD UNIQUE KEY `uc_PersonID` (`id`,`fName`,`lName`);

--
-- Indexes for table `Prescription`
--
ALTER TABLE `Prescription`
  ADD PRIMARY KEY (`prescript_id`),
  ADD KEY `medrec_HN` (`medrec_HN`),
  ADD KEY `pharmacist_username` (`pharmacist_username`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `WorkTime`
--
ALTER TABLE `WorkTime`
  ADD PRIMARY KEY (`worktime_id`),
  ADD KEY `doctor_username` (`doctor_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `Appointment`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Prescription`
--
ALTER TABLE `Prescription`
  MODIFY `prescript_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `WorkTime`
--
ALTER TABLE `WorkTime`
  MODIFY `worktime_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Allergies`
--
ALTER TABLE `Allergies`
  ADD CONSTRAINT `allergies_ibfk_1` FOREIGN KEY (`HN`) REFERENCES `Patient` (`HN`);

--
-- Constraints for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`HN`) REFERENCES `Patient` (`HN`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doctor_username`) REFERENCES `User` (`username`);

--
-- Constraints for table `MedicalProblems`
--
ALTER TABLE `MedicalProblems`
  ADD CONSTRAINT `medicalproblems_ibfk_1` FOREIGN KEY (`HN`) REFERENCES `Patient` (`HN`);

--
-- Constraints for table `MedicalRecord`
--
ALTER TABLE `MedicalRecord`
  ADD CONSTRAINT `medicalrecord_ibfk_1` FOREIGN KEY (`HN`) REFERENCES `Patient` (`HN`),
  ADD CONSTRAINT `medicalrecord_ibfk_2` FOREIGN KEY (`nurse_username`) REFERENCES `User` (`username`),
  ADD CONSTRAINT `medicalrecord_ibfk_3` FOREIGN KEY (`doctor_username`) REFERENCES `User` (`username`);

--
-- Constraints for table `Medicine`
--
ALTER TABLE `Medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`prescript_id`) REFERENCES `Prescription` (`prescript_id`),
  ADD CONSTRAINT `medicine_ibfk_2` FOREIGN KEY (`medrec_HN`) REFERENCES `Patient` (`HN`);

--
-- Constraints for table `Prescription`
--
ALTER TABLE `Prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`medrec_HN`) REFERENCES `Patient` (`HN`),
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`pharmacist_username`) REFERENCES `User` (`username`);

--
-- Constraints for table `WorkTime`
--
ALTER TABLE `WorkTime`
  ADD CONSTRAINT `worktime_ibfk_1` FOREIGN KEY (`doctor_username`) REFERENCES `User` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
