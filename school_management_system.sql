-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 08:02 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_office`
--

CREATE TABLE `admission_office` (
  `Login_ID` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_office`
--

INSERT INTO `admission_office` (`Login_ID`, `Password`, `email`) VALUES
('Ahmad111', 'Mati123', 'ahmad12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Class_Name` char(15) NOT NULL,
  `Class_Section` char(10) NOT NULL,
  `Class_Strength` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `Student_Parent_Id` varchar(30) NOT NULL,
  `Parent_Usernames` varchar(30) NOT NULL,
  `Passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Result_Type` char(10) NOT NULL,
  `Result_Status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Registration_Number` varchar(30) NOT NULL,
  `Student Name` char(50) NOT NULL,
  `Address` char(50) NOT NULL,
  `Date_of_Admission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_Id` varchar(20) NOT NULL,
  `Teacher_Name` char(20) NOT NULL,
  `Teacher_Designation` char(20) NOT NULL,
  `salary` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_office`
--
ALTER TABLE `admission_office`
  ADD PRIMARY KEY (`email`,`Login_ID`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`Student_Parent_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `Registration_Number` (`Registration_Number`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
