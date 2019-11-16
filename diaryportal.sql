-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 10:00 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diaryportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultancy`
--

CREATE TABLE `consultancy` (
  `Username` varchar(50) NOT NULL,
  `Industry` varchar(500) NOT NULL,
  `Topic` varchar(500) NOT NULL,
  `Benefits` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `Username` varchar(50) NOT NULL,
  `LDate` varchar(50) NOT NULL,
  `Reason` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_plan`
--

CREATE TABLE `lesson_plan` (
  `Username` varchar(50) NOT NULL,
  `Semester` int(1) NOT NULL,
  `Week` int(5) NOT NULL,
  `LDay` varchar(10) NOT NULL,
  `Topics` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson_plan`
--

INSERT INTO `lesson_plan` (`Username`, `Semester`, `Week`, `LDay`, `Topics`) VALUES
('viru', 3, 1, '2-TUES', 'Introduction to the course'),
('viru', 3, 1, '4-THURS', 'Definition and structure of an algorithm'),
('viru', 3, 1, '5-FRI', 'Efficiency of an algorithm'),
('viru', 3, 1, '6-SAT', 'Linear sort and bubble sort'),
('viru', 5, 1, '1-MON', 'Introduction to the course'),
('viru', 5, 1, '2-TUES', 'Characteristics and advantages of DB Approach'),
('viru', 5, 1, '5-FRI', 'Data models,schema and instances'),
('viru', 5, 1, '6-SAT', '3-Schema architecture and data independence'),
('viru', 7, 1, '1-MON', 'Introduction to the course'),
('viru', 7, 1, '2-TUES', 'OOPS concepts'),
('viru', 7, 1, '3-WED', 'IDE and compiler'),
('viru', 7, 1, '4-THURS', 'Structure of a JAVA program');

-- --------------------------------------------------------

--
-- Table structure for table `other_activities`
--

CREATE TABLE `other_activities` (
  `Username` varchar(50) NOT NULL,
  `Position` varchar(500) NOT NULL,
  `DetailsOfWork` varchar(1000) NOT NULL,
  `Duration` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects_guided`
--

CREATE TABLE `projects_guided` (
  `Username` varchar(50) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `SponsoredBy` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `Username` varchar(50) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `ShortDescription` varchar(1000) NOT NULL,
  `Remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `SubjectCode` varchar(10) NOT NULL,
  `SubjectName` varchar(25) NOT NULL,
  `Semester` int(1) NOT NULL,
  `Credits` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SubjectCode`, `SubjectName`, `Semester`, `Credits`) VALUES
('17IS3DCADA', 'ADA', 3, 4),
('17IS3DCLGT', 'LGT', 3, 3),
('17IS3DLADA', 'ADA Lab', 3, 2),
('17IS5DCDBM', 'DBMS', 5, 4),
('17IS5DEPYP', 'Python Programming', 5, 3),
('17IS5DLDBA', 'DBA Lab', 5, 2),
('17IS7DCCCP', 'Cloud Computing', 7, 3),
('17IS7DCJAV', 'Java', 7, 3),
('17IS7DCMCL', 'Machine Learning', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Age` int(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Answer1` varchar(100) NOT NULL,
  `Answer2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `FullName`, `Age`, `Gender`, `Answer1`, `Answer2`) VALUES
('viru', '12345', 'Viram Jain', 20, 'Male', 'KCS', 'Sanghvi');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_schedule`
--

CREATE TABLE `weekly_schedule` (
  `Username` varchar(50) NOT NULL,
  `WDay` varchar(10) NOT NULL,
  `Lecture1` varchar(10) NOT NULL,
  `Lecture2` varchar(10) NOT NULL,
  `Lecture3` varchar(10) NOT NULL,
  `Lecture4` varchar(10) NOT NULL,
  `Lecture5` varchar(10) NOT NULL,
  `Lecture6` varchar(10) NOT NULL,
  `Lecture7` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weekly_schedule`
--

INSERT INTO `weekly_schedule` (`Username`, `WDay`, `Lecture1`, `Lecture2`, `Lecture3`, `Lecture4`, `Lecture5`, `Lecture6`, `Lecture7`) VALUES
('viru', '1-MON', '', '5', '', '7', 'MP LAB', 'MP LAB', 'MP LAB'),
('viru', '2-TUES', '3', '', '5', '', '7', '', ''),
('viru', '3-WED', '', '7', '', '', 'DBA LAB', 'DBA LAB', 'DBA LAB'),
('viru', '4-THURS', '7', '', '3', '', 'ADA LAB', 'ADA LAB', 'ADA LAB'),
('viru', '5-FRI', '', '5', '', '3', '', '', ''),
('viru', '6-SAT', '5', '', '3', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_done`
--

CREATE TABLE `work_done` (
  `Username` varchar(50) NOT NULL,
  `Semester` int(1) NOT NULL,
  `Week` int(5) NOT NULL,
  `WDay` varchar(10) NOT NULL,
  `TopicsCovered` varchar(1000) NOT NULL,
  `NoOfStudents` int(5) NOT NULL,
  `Remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_done`
--

INSERT INTO `work_done` (`Username`, `Semester`, `Week`, `WDay`, `TopicsCovered`, `NoOfStudents`, `Remarks`) VALUES
('viru', 5, 1, '6-Sat', '3-Schema architecture and data independence', 25, 'gddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultancy`
--
ALTER TABLE `consultancy`
  ADD PRIMARY KEY (`Username`,`Industry`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`Username`,`LDate`);

--
-- Indexes for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  ADD PRIMARY KEY (`Username`,`Semester`,`Week`,`LDay`);

--
-- Indexes for table `other_activities`
--
ALTER TABLE `other_activities`
  ADD PRIMARY KEY (`Username`,`Position`);

--
-- Indexes for table `projects_guided`
--
ALTER TABLE `projects_guided`
  ADD PRIMARY KEY (`Username`,`Title`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`Username`,`Title`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`SubjectCode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `weekly_schedule`
--
ALTER TABLE `weekly_schedule`
  ADD PRIMARY KEY (`Username`,`WDay`);

--
-- Indexes for table `work_done`
--
ALTER TABLE `work_done`
  ADD PRIMARY KEY (`Username`,`Semester`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consultancy`
--
ALTER TABLE `consultancy`
  ADD CONSTRAINT `consultancy_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE;

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE;

--
-- Constraints for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  ADD CONSTRAINT `lesson_plan_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE;

--
-- Constraints for table `other_activities`
--
ALTER TABLE `other_activities`
  ADD CONSTRAINT `other_activities_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE;

--
-- Constraints for table `projects_guided`
--
ALTER TABLE `projects_guided`
  ADD CONSTRAINT `projects_guided_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE;

--
-- Constraints for table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE;

--
-- Constraints for table `weekly_schedule`
--
ALTER TABLE `weekly_schedule`
  ADD CONSTRAINT `weekly_schedule_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE;

--
-- Constraints for table `work_done`
--
ALTER TABLE `work_done`
  ADD CONSTRAINT `work_done_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
