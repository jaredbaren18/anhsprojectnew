-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2023 at 05:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anhsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `sectionID` int NOT NULL,
  `classsection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `tblfaculty`
--

CREATE TABLE `tblfaculty` (
  `facultyID` int NOT NULL,
  `facultyNo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fac_fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fac_mname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fac_lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fac_age` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fac_birthday` date NOT NULL,
  `fac_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fac_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fac_username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fac_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fac_advisory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fac_yearlevel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblfaculty`
--

INSERT INTO `tblfaculty` (`facultyID`, `facultyNo`, `fac_fname`, `fac_mname`, `fac_lname`, `fac_age`, `fac_birthday`, `fac_gender`, `fac_role`, `fac_username`, `fac_password`, `fac_advisory`, `fac_yearlevel`, `status`) VALUES
(28, '242423423', 'Jared', 'A', 'Baren', '22', '2000-07-18', 'Male', 'Teacher', 'JARED', '$2y$10$AshNJulhUZWNQlpkOT59HOuhqyfMHGzZz/WOxeGo90wKL0z7oR//G', 'Mahogany', '8', NULL),
(32, '213232', 'Regine', 'Luana ', 'Rayoso', '22', '2023-01-20', 'Female', 'Administrator', 'jared', '$2y$10$H7LRQ7zQx9s51nV47y3y0.LhcQIcBwHDTgqdyqg1zZL89l5Y4ZKyi', 'Na', '7', NULL),
(33, '23234234', 'Philipps', 'Jared', 'Baren', '22', '2023-01-18', 'Male', 'Administrator', 'admin1', '$2y$10$Qo3kWcCuL72IoV1NhLmpo.KxXg.vBeiDNY0ZPniKjPgj5WXj/a05u', 'Mahogany', '8', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblgrade`
--

CREATE TABLE `tblgrade` (
  `gradeID` int NOT NULL,
  `lrn` int NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quarter1` double DEFAULT NULL,
  `quarter2` double DEFAULT NULL,
  `quarter3` double DEFAULT NULL,
  `quarter4` double DEFAULT NULL,
  `facultyID` int DEFAULT NULL,
  `studentID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblschoolinfo`
--

CREATE TABLE `tblschoolinfo` (
  `region` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `school` varchar(25) NOT NULL,
  `principal` varchar(255) NOT NULL,
  `shoolinfo_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `studentID` int NOT NULL,
  `stud_lrn` int NOT NULL,
  `stud_fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_mname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_age` int NOT NULL,
  `stud_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_birthday` date NOT NULL,
  `stud_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_yearlevel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stud_facultyID` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`studentID`, `stud_lrn`, `stud_fname`, `stud_mname`, `stud_lname`, `stud_age`, `stud_gender`, `stud_birthday`, `stud_address`, `stud_yearlevel`, `stud_section`, `stud_role`, `stud_username`, `stud_password`, `stud_facultyID`, `status`, `remarks`) VALUES
(1, 111111, 'jared', 'jared', 'jared', 22, 'Male', '2023-01-26', 'caweaw', '7', 'Mahogany', 'Student', 'admin', '$2y$10$ppd0X2gswyUti6u/YB9uwe4eG0ycEavdcdAsOCcuYdaXvynAYCoSq', '242423423', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `subjectID` int NOT NULL,
  `subjectname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`subjectID`, `subjectname`) VALUES
(1, 'Filipino'),
(2, 'English'),
(3, 'Science'),
(4, 'Edukasyon sa Pantahanan at Panlipunan'),
(5, 'Aralin Panlipunan'),
(6, 'Mathematics'),
(7, 'Edukasyon sa Pagpapakatao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`sectionID`);

--
-- Indexes for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD PRIMARY KEY (`facultyID`);

--
-- Indexes for table `tblgrade`
--
ALTER TABLE `tblgrade`
  ADD PRIMARY KEY (`gradeID`),
  ADD KEY `lrn` (`lrn`),
  ADD KEY `gradeID` (`gradeID`),
  ADD KEY `facultyID` (`facultyID`),
  ADD KEY `studenetID` (`studentID`);

--
-- Indexes for table `tblschoolinfo`
--
ALTER TABLE `tblschoolinfo`
  ADD PRIMARY KEY (`shoolinfo_id`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`studentID`),
  ADD UNIQUE KEY `stud_lrn` (`stud_lrn`),
  ADD KEY `facultyID` (`stud_facultyID`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`subjectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `sectionID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  MODIFY `facultyID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblgrade`
--
ALTER TABLE `tblgrade`
  MODIFY `gradeID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblschoolinfo`
--
ALTER TABLE `tblschoolinfo`
  MODIFY `shoolinfo_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `studentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `subjectID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
