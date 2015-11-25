-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2015 at 04:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
  `appoint_time` datetime DEFAULT NULL,
  `doctor_username` varchar(20) DEFAULT NULL,
  `diagnose_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoint_id`, `HN`, `appoint_time`, `doctor_username`, `diagnose_status`) VALUES
(1, '123', '2015-11-07 10:00:00', 'doctor01', 0),
(2, '123', '2015-11-13 11:00:00', 'doctor01', 0),
(3, '123456', '2015-11-20 11:00:00', 'doctor01', 0),
(4, '123', '2015-11-19 10:00:00', 'doctor01', 0),
(5, '888888', '2015-11-24 09:30:00', 'doctor01', 0),
(6, '909090', '2015-11-28 10:00:00', 'doctor01', 0),
(7, '555555', '2015-11-30 09:30:00', 'doctor01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department_db`
--

CREATE TABLE IF NOT EXISTS `department_db` (
  `department_order` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_db`
--

INSERT INTO `department_db` (`department_order`, `department_name`) VALUES
(0, 'ไม่ระบุ'),
(1, 'กุมารเวช'),
(2, 'จิตเวช'),
(3, 'ต่อมไร้ท่อ'),
(4, 'ทันตกรรม'),
(5, 'ผิวหนัง'),
(6, 'ระบบทางเดินหายใจและปอด'),
(7, 'รังสีรักษา'),
(8, 'สูตินารีเวช'),
(9, 'หู คอ จมูก'),
(10, 'อายุรเวช');

-- --------------------------------------------------------

--
-- Table structure for table `illness_db`
--

CREATE TABLE IF NOT EXISTS `illness_db` (
  `illness_order` int(10) unsigned NOT NULL,
  `illness_code` varchar(20) NOT NULL,
  `illness_name` varchar(200) NOT NULL,
  `illness_type` varchar(10) NOT NULL DEFAULT 'ICD10'
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `illness_db`
--

INSERT INTO `illness_db` (`illness_order`, `illness_code`, `illness_name`, `illness_type`) VALUES
(33, '052MED', 'Spinal disorders & injuries w CC/MCC', 'SNOMED'),
(34, '053MED', 'Spinal disorders & injuries w/o CC/MCC', 'SNOMED'),
(35, '054MED', 'Nervous system neoplasms w MCC', 'SNOMED'),
(36, '055MED', 'Nervous system neoplasms w/o MCC', 'SNOMED'),
(37, '056MED', 'Degenerative nervous system disorders w MCC', 'SNOMED'),
(38, '057MED', 'Degenerative nervous system disorders w/o MCC', 'SNOMED'),
(39, '058MED', 'Multiple sclerosis & cerebellar ataxia w MCC', 'SNOMED'),
(40, '059MED', 'Multiple sclerosis & cerebellar ataxia w CC', 'SNOMED'),
(41, '060MED', 'Multiple sclerosis & cerebellar ataxia w/o CC/MCC', 'SNOMED'),
(42, '061MED', 'Acute ischemic stroke w use of thrombolytic agent w MCC', 'SNOMED'),
(1, 'A00-B99', 'โรคติดเชื้อและโรคปรสิตบางโรค', 'ICD10'),
(2, 'C00-D48', 'เนื้องอก', 'ICD10'),
(3, 'D50-D89', 'โรคของเลือดและอวัยวะสร้างเลือดและความผิดปกติบางอย่างของกลไกภูมิคุ้มกัน', 'ICD10'),
(23, 'DRG001', 'Heart transplant or implant of heart assist system w MCC', 'DRG'),
(24, 'DRG002', 'Heart transplant or implant of heart assist system w/o MCC', 'DRG'),
(25, 'DRG003', 'ECMO or trach w MV 96+ hrs or PDX exc face  mouth & neck w maj O.R.', 'DRG'),
(26, 'DRG004', 'Trach w MV 96+ hrs or PDX exc face  mouth & neck w/o maj O.R.', 'DRG'),
(27, 'DRG005', 'Liver transplant w MCC or intestinal transplant', 'DRG'),
(28, 'DRG006', 'Liver transplant w/o MCC', 'DRG'),
(29, 'DRG007', 'Lung transplant', 'DRG'),
(30, 'DRG008', 'Simultaneous pancreas/kidney transplant', 'DRG'),
(31, 'DRG009', 'Bone marrow transplant', 'DRG'),
(32, 'DRG010', 'Pancreas transplant', 'DRG'),
(4, 'E00-E90', 'โรคของต่อมไร้ท่อ โภชนาการ และเมตะบอลิซึม', 'ICD10'),
(5, 'F00-F99', 'ความผิดปกติทางจิตและพฤติกรรม', 'ICD10'),
(6, 'G00-G99', 'โรคของระบบประสาท', 'ICD10'),
(7, 'H00-H59', 'โรคของตาและอวัยวะเคียงลูกตา', 'ICD10'),
(8, 'H60-H95', 'โรคของหูและปุ่มกระดูกกกหู', 'ICD10'),
(9, 'I00-I99', 'โรคของระบบไหลเวียนโลหิต', 'ICD10'),
(10, 'J00-J99', 'โรคของระบบหายใจ', 'ICD10'),
(11, 'K00-K93', 'โรคของระบบย่อยอาหาร', 'ICD10'),
(12, 'L00-L99', 'โรคของผิวหนังและเนื้อเยื่อใต้ผิวหนัง', 'ICD10'),
(13, 'M00-M99', 'โรคของระบบกล้ามเนื้อโครงร่าง และเนื้อเยื่อเกี่ยวพัน', 'ICD10'),
(14, 'N00-N99', 'โรคของระบบสืบพันธุ์และระบบปัสสาวะ', 'ICD10'),
(15, 'O00-O99', 'การตั้งครรภ์ การคลอด และระยะหลังคลอด', 'ICD10'),
(16, 'P00-P96', 'ภาวะบางอย่างที่เริ่มต้นในระยะปริกำเนิด', 'ICD10'),
(17, 'Q00-Q99', 'รูปผิดปกติแต่กำเนิด รูปพิการ และความผิดปกติของโครโมโซม', 'ICD10'),
(18, 'R00-R99', 'อาการ อาการแสดง และความผิดปกติที่พบจากการตรวจทางคลินิกและทางห้องปฏิบัติการ มิได้จำแนกไว้ที่ใด', 'ICD10'),
(19, 'S00-T98', 'การบาดเจ็บ การเป็นพิษ และผลสืบเนื่องบางอย่างจากสาเหตุภายนอก', 'ICD10'),
(22, 'U00-U99', 'รหัสเพื่อวัตถุประสงค์พิเศษ', 'ICD10'),
(20, 'V01-Y98', 'สาเหตุภายนอกของการเจ็บป่วยและการตาย', 'ICD10'),
(21, 'Z00-Z99', 'ปัจจัยที่มีผลต่อสถานะสุขภาพและการรับบริการสุขภาพ', 'ICD10');

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
  `appoint_datetime` datetime NOT NULL,
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

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`HN`, `id`, `initial`, `fName`, `lName`, `address`, `tel`, `email`) VALUES
('123', '123456789', 'นาย', 'ทดสอบ', 'จริงๆนะ', 'กทมม', '023339999', 'test@aa'),
('123456', '8982348211425', 'เด็กหญิง', 'หนูป่วย', 'ช่วยด้วย', 'บ้านบางแค', '0842338568', 'helpme@tee.com'),
('555555', '11233499859', 'นางสาว', 'สวยสมร', 'ชมชื่น', 'ถ.สีลม', '0935529943', 'suay@hotmail.com'),
('888888', '3452975820395', 'นางสาว', 'สมหญิง', 'ซื้อสัตย์', 'บางรัก', '0898820452', 'ouwerj@gmail.com'),
('896381', '8793027577391', 'เด็กชาย', 'ชิวู', 'เป่าขลุ่ยเอย', 'สกายอารีน่า', '0834492793', 'chiwu@summonners.me'),
('909090', '1100900482284', 'นาย', 'จริงใจ', 'จันทร์โอชา', 'ทีวี', '0834609434', 'jj@hotmail.com');

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
  `password` varchar(100) DEFAULT NULL,
  `id` varchar(20) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `initial` varchar(10) DEFAULT NULL,
  `fName` varchar(100) DEFAULT NULL,
  `lName` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `userType` varchar(10) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `id`, `tel`, `initial`, `fName`, `lName`, `address`, `email`, `userType`, `department_id`) VALUES
('doctor01', '1a1dc91c907325c69271ddf0c944bc72', 'test01', 'test01', 'Mr.', 'Doctor', 'First', 'test01', 'test01', 'doctor', 0),
('nurse01', '1a1dc91c907325c69271ddf0c944bc72', 'test02', 'test02', 'Mrs.', 'Nurse', 'First', 'test02', 'test02', 'nurse', 0),
('pharmacist01', '1a1dc91c907325c69271ddf0c944bc72', 'test04', 'test04', 'Mr.', 'Pharmacist', 'First', 'test04', 'test04', 'pharmacist', 0),
('staff01', '1a1dc91c907325c69271ddf0c944bc72', 'test03', 'test03', 'Mr.', 'Staff', 'First', 'test03', 'test03', 'staff', 0);

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
  ADD PRIMARY KEY (`appoint_id`), ADD KEY `HN` (`HN`), ADD KEY `doctor_username` (`doctor_username`), ADD KEY `appoint_time` (`appoint_time`);

--
-- Indexes for table `department_db`
--
ALTER TABLE `department_db`
  ADD PRIMARY KEY (`department_order`);

--
-- Indexes for table `illness_db`
--
ALTER TABLE `illness_db`
  ADD PRIMARY KEY (`illness_code`), ADD KEY `illness_order` (`illness_order`);

--
-- Indexes for table `medicalproblems`
--
ALTER TABLE `medicalproblems`
  ADD PRIMARY KEY (`HN`,`problem`);

--
-- Indexes for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD PRIMARY KEY (`HN`,`appoint_datetime`), ADD KEY `diagnose_datetime` (`appoint_datetime`), ADD KEY `nurse_username` (`nurse_username`), ADD KEY `doctor_username` (`doctor_username`), ADD KEY `code` (`code`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medrec_HN`,`prescript_id`,`med_code`), ADD KEY `prescript_id` (`prescript_id`), ADD KEY `medrec_datetime` (`medrec_datetime`), ADD KEY `med_code` (`med_code`);

--
-- Indexes for table `medicine_db`
--
ALTER TABLE `medicine_db`
  ADD PRIMARY KEY (`med_code`), ADD KEY `medicine_order` (`med_order`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`HN`), ADD UNIQUE KEY `uc_PersonID` (`id`,`fName`,`lName`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescript_id`), ADD KEY `medrec_HN` (`medrec_HN`), ADD KEY `pharmacist_username` (`pharmacist_username`), ADD KEY `medrec_datetime` (`medrec_datetime`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`), ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `worktime`
--
ALTER TABLE `worktime`
  ADD PRIMARY KEY (`worktime_id`), ADD KEY `doctor_username` (`doctor_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `illness_db`
--
ALTER TABLE `illness_db`
  MODIFY `illness_order` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
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
ADD CONSTRAINT `medicalrecord_ibfk_4` FOREIGN KEY (`code`) REFERENCES `illness_db` (`illness_code`),
ADD CONSTRAINT `medicalrecord_ibfk_5` FOREIGN KEY (`appoint_datetime`) REFERENCES `appointment` (`appoint_time`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`prescript_id`) REFERENCES `prescription` (`prescript_id`),
ADD CONSTRAINT `medicine_ibfk_2` FOREIGN KEY (`medrec_HN`) REFERENCES `patient` (`HN`),
ADD CONSTRAINT `medicine_ibfk_3` FOREIGN KEY (`medrec_datetime`) REFERENCES `medicalrecord` (`appoint_datetime`),
ADD CONSTRAINT `medicine_ibfk_4` FOREIGN KEY (`med_code`) REFERENCES `medicine_db` (`med_code`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`medrec_HN`) REFERENCES `patient` (`HN`),
ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`pharmacist_username`) REFERENCES `user` (`username`),
ADD CONSTRAINT `prescription_ibfk_3` FOREIGN KEY (`medrec_datetime`) REFERENCES `medicalrecord` (`appoint_datetime`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department_db` (`department_order`);

--
-- Constraints for table `worktime`
--
ALTER TABLE `worktime`
ADD CONSTRAINT `worktime_ibfk_1` FOREIGN KEY (`doctor_username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
