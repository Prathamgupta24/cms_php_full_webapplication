-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 09:35 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `semester_or_year` int(10) NOT NULL,
  `no_of_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_subjects`
--

CREATE TABLE `course_subjects` (
  `subject_code` varchar(20) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `credit_hours` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `account` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `user_id`, `Password`, `Role`, `account`) VALUES
(1, 'admin@gmail.com', 'admin123*', 'Admin ', ''),
(3, 'admin', 'admin', 'Admin ', ''),
(6, 'luvgohel@gmail.com', 'teacher123*', 'Teacher', 'Activate'),
(7, 'luv@gmail.com', 'teacher123*', 'Teacher', ''),
(11, '112', 'student123*', 'Student', ''),
(12, '1', 'student123*', 'Student', 'Activate'),
(13, '19', 'student123*', 'Student', ''),
(15, '123', 'student123*', 'Student', ''),
(16, 'prathamnew24@gmail.com', 'teacher123*', 'Teacher', 'Activate');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(10) NOT NULL,
  `session` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session`, `created_date`) VALUES
(1, 's19', '2022-03-02 13:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `roll_no` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `course_code` int(10) DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  `profile_image` varchar(100) NOT NULL,
  `dob` datetime NOT NULL,
  `gender` varchar(10) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `current_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`roll_no`, `first_name`, `middle_name`, `last_name`, `father_name`, `email`, `mobile_no`, `course_code`, `session`, `profile_image`, `dob`, `gender`, `permanent_address`, `current_address`) VALUES
('123', 'pratham', 'gg', 'gupta', 'gg', 'prathamnew24@gmail.com', 2147483647, 123, 's19', 'WhatsApp Image 2020-07-03 at 11.07.09 PM.jpeg', '2022-03-17 00:00:00', 'Male', 'sapananagar', 'sapnagar');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_courses`
--

CREATE TABLE `teacher_courses` (
  `course_code` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `assign_date` varchar(20) NOT NULL,
  `total_classes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_courses`
--

INSERT INTO `teacher_courses` (`course_code`, `semester`, `teacher_id`, `subject_code`, `assign_date`, `total_classes`) VALUES
('123', 4, '3', '12', '02-03-22', 6),
('123', 4, '3', '12', '02-03-22', 6);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `teacher_id` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `aadhar_no` int(12) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `teacher_status` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `hire_date` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `current_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`teacher_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone_no`, `aadhar_no`, `profile_image`, `teacher_status`, `dob`, `hire_date`, `gender`, `permanent_address`, `current_address`) VALUES
(19, 'luv', 'prakashbhai', 'gohel', 'luvgohel@gmail.com', 2147483647, 2147483647, '', 'Select Status', '2022-03-24', '', 'Male', 'plotno-86/87,unit no-3,rambaug road opp src office', 'adipur'),
(20, 'luv', 'g', 'gohel', 'luv@gmail.com', 2147483647, 0, 'passphotot.jpg', 'Select Status', '2022-03-18', '', 'Male', 'plotno-86/87,unit no-3,rambaug road opp src office', 'adipur'),
(21, 'gohel', 'luv', 'prakashbhai', 'luvgohel@gmail.com', 2147483647, 2147483647, 'passphotot.jpg', 'Permanent', '2022-03-16', '', 'Male', 'plotno-86/87,unit no-3,rambaug road opp src office', 'adipur'),
(22, 'pratham', 'gupta', 'harkeshbhai', 'luvgohel@gmail.com', 2147483647, 2147483647, 'idcard.jpg', 'Permanent', '2022-03-08', '2022-03-17', 'Male', 'plotno-86/87,unit no-3,rambaug road opp src office', 'adipur'),
(25, 'pratham', 'gupta', 'h', 'prathamnew24@gmail.com', 2147483647, 0, '', 'Permanent', '2003-03-14', '55443-05-3', 'Male', 'sapananagar', '');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(20) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `timing_from` varchar(20) NOT NULL,
  `timing_to` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `room_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `course_code`, `semester`, `timing_from`, `timing_to`, `day`, `subject_code`, `room_no`) VALUES
(1, '123', 1, '02:04', '03:02', '1', '12', '00');

-- --------------------------------------------------------

--
-- Table structure for table `weekdays`
--

CREATE TABLE `weekdays` (
  `day_id` int(10) NOT NULL,
  `day_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weekdays`
--

INSERT INTO `weekdays` (`day_id`, `day_name`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `course_subjects`
--
ALTER TABLE `course_subjects`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teacher_info`
--
ALTER TABLE `teacher_info`
  MODIFY `teacher_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
