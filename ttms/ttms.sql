-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 09:15 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `attendance_status` enum('Present','Absent') NOT NULL,
  `attendance_date` date NOT NULL,
  `faculty_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `st_id`, `attendance_status`, `attendance_date`, `faculty_number`) VALUES
(0, 12, 'Present', '2021-04-10', 't001'),
(1, 11, 'Present', '2021-04-06', 't001'),
(2, 13, 'Absent', '2021-04-06', 't001');

-- --------------------------------------------------------

--
-- Table structure for table `bscit`
--

CREATE TABLE `bscit` (
  `rollno` int(10) DEFAULT NULL,
  `student_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bscit`
--

INSERT INTO `bscit` (`rollno`, `student_name`) VALUES
(14, 'varu'),
(23, 'raji');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `name` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`name`, `status`) VALUES
('ML04', 2),
('NL32', 2),
('ML10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(1, 'fybscit'),
(2, 'sybscit'),
(3, 'tybscit');

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE `semester1` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `practical`) VALUES
('monday', 'IP<br>M', 'DE<br>NP', 'OS<br>SK', 'DM<br>PT', 'CS<br>S', 'IP<br>M', 'OS PRACTICAL');

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE `semester2` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `practical`) VALUES
('monday', 'PP3<br>RS', 'DS3<br>MJ', 'CN3<br>NP', 'DBMS3<br>SK', 'AP3<br>NM', '-<br>', ''),
('tuesday', 'PP3<br>RS', 'DS3<br>MJ', 'DBMS3<br>SK', 'AP3<br>NM', 'CN<br>NP', '-<br>-, -, -', ''),
('wednesday', 'DBMS3<br>SK', 'CN2<br>NP', 'PP3<br>RS', 'AP3<br>NM', 'DS3<br>MJ', 'PP<br>RS', ''),
('thursday', 'DBMS3<br>SK', 'AP2<br>NM', 'CN3<br>NP', 'PP3<br>RS', 'DS3<br>MJ', '-<br>-, -, -', ''),
('friday', 'CN3<br>NP', 'AP3<br>NM', 'DBMS3<br>SK', 'PP3<br>RS', 'DS3<br>MJ', '-<br>-, -, -', ''),
('saturday', 'AP3<br>NM', 'DS3<br>MJ', 'DBMS3<br>SK', 'PP3<br>RS', 'CN3<br>NP', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE `semester4` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester4`
--

INSERT INTO `semester4` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `practical`) VALUES
('monday', 'SE4<br>RS', 'CJ4<br>MJ', 'CG4<br>NP', 'COST4<br>NM', 'ES4<br>SK', '', ''),
('thursday', 'CJ4<br>MJ', 'ES4<br>SK', 'SE4<br>RS', 'COST4<br>NM', 'CG4<br>NP', '', ''),
('tuesday', 'ES4<br>SK', 'CG4<br>NP', 'CJ4<br>MJ', 'SE4<br>RS', 'COST4<br>NM', '', ''),
('wenesday', 'COST4<br>NM', 'ES4<br>SK', 'CJ4<br>MJ', 'CG4<br>NP', 'SE4<br>RS', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE `semester5` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester5`
--

INSERT INTO `semester5` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `practical`) VALUES
('monday', 'ME340<br>FT', 'CO309<br>AMK', 'CO308<br>IZ', 'CO310<br>FA', '-<br>-', 'CO394<br>RA, MRW, AMA', ''),
('tuesday', 'EL340<br>MS', 'CO310<br>FA', 'ME340<br>FT', '-<br>-', '-<br>-', 'CO393<br>AMA, FA, RA', ''),
('wednesday', 'CO309<br>AMK', 'CO308<br>IZ', 'ME340<br>FT', '-<br>-', '-<br>-', '-<br>-, -, -', ''),
('thursday', 'EL340<br>MS', 'CO310<br>FA', 'CO309<br>AMK', '-<br>-', '-<br>-', 'CO393<br>AMA, FA, RA', ''),
('friday', 'CO308<br>IZ', 'ME340<br>FT', 'CO309<br>AMK', 'EL340<br>MS', '-<br>-', 'CO394<br>RA, MRW, AMA', ''),
('saturday', 'CO310<br>FA', 'EL340<br>MS', 'CO308<br>IZ', '-<br>-', '-<br>-', '-<br>-, -, -', '');

-- --------------------------------------------------------

--
-- Table structure for table `semester6`
--

CREATE TABLE `semester6` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `st_id` int(10) NOT NULL,
  `student_name` varchar(60) DEFAULT NULL,
  `student_roll_number` int(11) NOT NULL,
  `academic_year` year(4) DEFAULT NULL,
  `contact_number` int(10) DEFAULT NULL,
  `emailid` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_id`, `student_name`, `student_roll_number`, `academic_year`, `contact_number`, `emailid`) VALUES
(11, 'Rajeshwari Pillai', 11, 2020, 123, 'rv@gmail.com'),
(12, 'Kunal Varma', 12, 2020, 123, 'rv@gmail.com'),
(13, 'Vishal Varma', 13, 2020, 123456, ''),
(14, 'Abhishek Yadav', 14, 2020, 123456, ''),
(15, 'Megha Pradham', 15, 2020, 123, 'rv@gmail.com'),
(16, 'Kedar Pednekar', 16, 2020, 123, 'rv@gmail.com'),
(17, 'Mehul Jadhav', 17, 2020, 123456, ''),
(18, 'Gauri Sawant', 18, 2020, 123456, ''),
(19, 'rujul ', 19, 2020, 1224567899, 'avb@gmail.com'),
(1001, 'abc', 2018, 0000, 0, '2');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_code` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `course_type` varchar(15) NOT NULL,
  `semester` int(1) NOT NULL,
  `department` varchar(50) NOT NULL,
  `isAlloted` int(1) NOT NULL,
  `allotedto` text NOT NULL,
  `allotedto2` text NOT NULL,
  `allotedto3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_code`, `subject_name`, `course_type`, `semester`, `department`, `isAlloted`, `allotedto`, `allotedto2`, `allotedto3`) VALUES
('SIC6', 'Securty in computing', 'THEORY', 6, 'IT', 1, '5t5t', '', ''),
('SQA6', 'Software quality assurances', 'THEORY', 6, 'IT', 0, '', '', ''),
('BI6', 'Bussiness Intelligences', 'THEORY', 6, 'IT', 1, 'T008', 'T001', 'T004'),
('GIS6', 'Geographic infromation system', 'THEORY', 6, 'IT', 1, 'T002', 'T007', 'T011'),
('DS3', 'Data Structures', 'THEORY', 3, 'IT', 0, '', '', ''),
('CN3', 'Computer Networks', 'THEORY', 3, 'IT', 0, '', '', ''),
('DBMS3', 'Database Management Systems', 'THEORY', 3, 'IT', 0, '', '', ''),
('AM3', 'Applied Mathematics', 'THEORY', 3, 'IT', 0, '', '', ''),
('CJ4', 'Core Java', 'THEORY', 4, 'IT', 0, '', '', ''),
('ES4', 'Introduction to Embedded Systems', 'THEORY', 4, 'IT', 0, '', '', ''),
('SE4', 'Software Engineering', 'THEORY', 4, 'IT', 0, '', '', ''),
('CG4', 'Computer Graphics and Animation', 'THEORY', 4, 'IT', 0, '', '', ''),
('COST4', 'Computer Oriented Statistical Techniques', 'THEORY', 4, 'IT', 0, '', '', ''),
('SPM5', 'Software Project Management', 'THEORY', 5, 'IT', 0, '', '', ''),
('IOT5', 'Internet of Things', 'THEORY', 5, 'IT', 0, '', '', ''),
('AWP5', 'Advanced Web Programming', 'THEORY', 5, 'IT', 0, '', '', ''),
('AI5', 'Artificial Intelligence', 'THEORY', 5, 'IT', 0, '', '', ''),
('EJ5', 'Enterprise Java', 'THEORY', 5, 'IT', 0, '', '', ''),
('ITSM6', 'IT Service Management', 'THEORY', 6, 'IT', 0, '', '', ''),
('OOP2', 'Object Oriented Programming', 'THEORY', 2, 'IT', 0, '', '', ''),
('MA2', 'Microprocessor Architecture', 'THEORY', 2, 'IT', 0, '', '', ''),
('WP2', 'Web Programming', 'THEORY', 2, 'IT', 0, '', '', ''),
('NNM2', 'Numerical and Statistical Methods', 'THEORY', 2, 'IT', 0, '', '', ''),
('GC2', 'Green Computing', 'THEORY', 2, 'IT', 0, '', '', ''),
('PP3', 'Python Programming', 'THEORY', 3, 'IT', 0, '', '', ''),
('DE2', 'Digital Electronics', 'THEORY', 1, 'IT', 0, '', '', ''),
('IP1', 'Imperative Programming', 'THEORY', 1, 'IT', 0, '', '', ''),
('OS1', 'Operating System', 'THEORY', 1, 'IT', 0, '', '', ''),
('DM1', 'Discrete Mathematics', 'THEORY', 1, 'IT', 0, '', '', ''),
('CS1', 'Communication Skills', 'THEORY', 1, 'IT', 0, '', '', ''),
('A12', 'Artificial Intelligence	', 'LAB', 5, 'INFORMATION TECHNOLOGY', 1, '5t5t', 't002', '15');

-- --------------------------------------------------------

--
-- Table structure for table `t002`
--

CREATE TABLE `t002` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t002`
--

INSERT INTO `t002` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `practical`) VALUES
('monday', '-<br>-', 'CO206<br>NL32', '-<br>-', '-<br>-', '-<br>-', '-', ''),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CO493', ''),
('wednesday', 'CO206<br>NL32', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-', ''),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CO493', ''),
('friday', 'CO206<br>NL32', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-', ''),
('saturday', '-<br>-', '-<br>-', '-<br>-', 'CO206<br>NL32', '-<br>-', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `t003`
--

CREATE TABLE `t003` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t003`
--

INSERT INTO `t003` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `practical`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CO394', ''),
('tuesday', 'CO451<br>ML04', 'CO207<br>NL32', 'CO406<br>ML04', '-<br>-', '-<br>-', 'CO393', ''),
('wednesday', '-<br>-', '-<br>-', 'CO207<br>NL32', 'CO451<br>ML04', '-<br>-', 'CO292', ''),
('thursday', 'CO406<br>ML04', 'CO451<br>ML04', 'CO207<br>NL32', '-<br>-', '-<br>-', 'CO393', ''),
('friday', '-<br>-', '-<br>-', '-<br>-', 'CO406<br>ML04', '-<br>-', 'CO394', ''),
('saturday', 'CO451<br>ML04', 'CO207<br>NL32', 'CO406<br>ML04', '-<br>-', '-<br>-', 'CO292', '');

-- --------------------------------------------------------

--
-- Table structure for table `t004`
--

CREATE TABLE `t004` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t004`
--

INSERT INTO `t004` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `practical`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CO494', ''),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-', ''),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CO494', ''),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-', ''),
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-', ''),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `t005`
--

CREATE TABLE `t005` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `practical` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t005`
--

INSERT INTO `t005` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `practical`) VALUES
('monday', '-<br>-', 'CO431<br>ML04', '-<br>-', '-<br>-', '-<br>-', 'CO394', ''),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CO393', ''),
('wednesday', 'CO431<br>ML04', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-', ''),
('thursday', '-<br>-', '-<br>-', '-<br>-', 'CO431<br>ML04', '-<br>-', 'CO393', ''),
('friday', '-<br>-', 'CO431<br>ML04', '-<br>-', '-<br>-', '-<br>-', 'CO394', ''),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `faculty_number` varchar(11) NOT NULL,
  `faculty_name` varchar(150) NOT NULL,
  `alias` text NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `contact_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`faculty_number`, `faculty_name`, `alias`, `emailid`, `designation`, `contact_number`) VALUES
('15', 'abc', 'MSCIT', 'Professor', '7894', 0),
('5t5t', 'Neha', 'MSCIT', 'Assistant Professor', '7894', 0),
('t002', 'Prof abc', 'abc', 'abc@gmail.com', 'me', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `semester1`
--
ALTER TABLE `semester1`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester2`
--
ALTER TABLE `semester2`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester4`
--
ALTER TABLE `semester4`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester5`
--
ALTER TABLE `semester5`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester6`
--
ALTER TABLE `semester6`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `t002`
--
ALTER TABLE `t002`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t003`
--
ALTER TABLE `t003`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t004`
--
ALTER TABLE `t004`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t005`
--
ALTER TABLE `t005`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`faculty_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
