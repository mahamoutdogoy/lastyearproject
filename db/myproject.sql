-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 01:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onexamdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesmenttbl`
--

CREATE TABLE `assesmenttbl` (
  `recordid` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `studname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `examname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `examid` int(11) NOT NULL,
  `score` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nextretake` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assesmenttbl`
--

INSERT INTO `assesmenttbl` (`recordid`, `studid`, `studname`, `examname`, `examid`, `score`, `status`, `nextretake`, `date`) VALUES
(67, 39, 'rahul K', 'sem 1 exam .net', 15, '100', 'PASS', '04/13/2018', '03/29/2018'),
(70, 38, 'mayura Rajguru', 'sem1 exam java prog', 17, '50', 'PASS', '04/08/2018', '03/29/2018'),
(109, 39, 'rahul K', 'sem 1 exam c prog', 13, '80', 'PASS', '05/10/2018', '04/25/2018'),
(110, 37, 'Nikita Rajole', ' c prog exam for diploma', 16, '0', 'FAIL', '05/11/2018', '04/26/2018'),
(111, 37, 'Nikita Rajole', 'sem1 exam java prog', 17, '100', 'PASS', '05/06/2018', '04/26/2018');

-- --------------------------------------------------------

--
-- Table structure for table `categorytbl`
--

CREATE TABLE `categorytbl` (
  `cid` int(11) NOT NULL,
  `catname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deptname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorytbl`
--

INSERT INTO `categorytbl` (`cid`, `catname`, `deptname`, `cstatus`) VALUES
(10, 'Degree', 'Computer', 1),
(11, 'Degree', 'IT', 1),
(12, 'Degree', 'Automobile', 1),
(13, 'Degree', 'E & TC', 1),
(14, 'Degree', 'Mechanical', 1),
(15, 'Diploma', 'Chemical', 1),
(16, 'Diploma', 'Computer', 1),
(17, 'Diploma', 'IT', 1),
(18, 'Diploma', 'Automobile', 1),
(19, 'Diploma', 'E & TC', 1),
(20, 'Diploma', 'Chemical', 1),
(21, 'ss', 'Chemical', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departmenttbl`
--

CREATE TABLE `departmenttbl` (
  `deptid` int(11) NOT NULL,
  `deptname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departmenttbl`
--

INSERT INTO `departmenttbl` (`deptid`, `deptname`, `status`) VALUES
(6, 'Chemical', 1),
(7, 'Computer', 1),
(8, 'IT', 1),
(9, 'Automobile', 1),
(11, 'E & TC', 1),
(12, 'Mechanical', 1);

-- --------------------------------------------------------

--
-- Table structure for table `examtbl`
--

CREATE TABLE `examtbl` (
  `examid` int(11) NOT NULL,
  `examname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(255) NOT NULL,
  `percentage` int(255) NOT NULL,
  `reexam` int(255) NOT NULL,
  `deadline` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `subname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deptname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `instruction` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `examtbl`
--

INSERT INTO `examtbl` (`examid`, `examname`, `duration`, `percentage`, `reexam`, `deadline`, `subname`, `deptname`, `catname`, `instruction`, `status`) VALUES
(13, 'sem 1 exam c prog', 3, 45, 10, '2018-04-26', 'C Programming', 'Computer', 'Degree', 'dont copy', 1),
(15, 'sem 1 exam .net', 30, 35, 15, '2018-03-25', '.Net Programming', 'Computer', 'Degree', 'dont cheet', 1),
(16, ' c prog exam for diploma', 30, 50, 15, '2018-03-26', 'C Programming', 'IT', 'Diploma', 'dont copy', 1),
(17, 'sem1 exam java prog', 2, 50, 10, '2018-04-26', 'Java Programming', 'IT', 'Diploma', 'dont use cell phones in exam hall', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticetbl`
--

CREATE TABLE `noticetbl` (
  `noteid` int(11) NOT NULL,
  `notice` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postdate` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastupdate` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticetbl`
--

INSERT INTO `noticetbl` (`noteid`, `notice`, `description`, `postdate`, `lastupdate`) VALUES
(9, 'Assessments', 'every student is required to take his/her assessment on time, fail to do that the instructor wont re-enable the assessment again.', '27/03/2018 11:20:12', '27/03/2018 11:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `studenttbl`
--

CREATE TABLE `studenttbl` (
  `studid` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `blood` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpassword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deptname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `catname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studenttbl`
--

INSERT INTO `studenttbl` (`studid`, `fname`, `lname`, `gender`, `blood`, `email`, `phone`, `mobile`, `password`, `cpassword`, `dob`, `address`, `deptname`, `catname`, `file`, `status`) VALUES
(37, 'Nikita', 'Rajole', 'Female', 'A', 'student@student.com', '8482838002', '8482838002', 'student', 'student', '1994-01-02', 'dd', 'IT', 'Diploma', '914332.jpg', 1),
(38, 'mayura', 'Rajguru', 'Female', 'AB+', 'mayura1@gmail.com', '8482838002', '8482838002', 'mayura1', 'mayura1', '1994-12-04', 'sssddd', 'IT', 'Diploma', '378826.jpg', 0),
(39, 'rahul', 'K', 'Male', 'A', 'r@gmail.com', '3433434334', '3433434334', 'rahul1', 'rahul1', '1992-01-01', 'dd', 'Computer', 'Degree', '504799.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjecttbl`
--

CREATE TABLE `subjecttbl` (
  `sid` int(11) NOT NULL,
  `subname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deptname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjecttbl`
--

INSERT INTO `subjecttbl` (`sid`, `subname`, `deptname`, `catname`, `status`) VALUES
(5, 'C Programming', 'IT', 'Diploma', 1),
(6, '.Net Programming', 'Computer', 'Degree', 1),
(7, 'C Programming', 'Computer', 'Degree', 1),
(8, 'Java Programming', 'IT', 'Diploma', 1),
(9, 'DOM', 'Mechanical', 'Degree', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `uid` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `blood` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpassword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deptname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`uid`, `fname`, `lname`, `gender`, `blood`, `email`, `phone`, `mobile`, `password`, `cpassword`, `dob`, `address`, `deptname`, `catname`, `file`, `status`) VALUES
(21, 'Mayuri', 'Nikumbh', 'Male', 'AB+', 'admin@admin.com', '8482838002', '8482838002', 'admin', 'admin', '1991-03-02', 'shivaji road', 'Computer', 'Degree', '389923.jpg', 1),
(22, 'Nikhil', 'Bhalerao', 'Male', 'AB+', 'nikhilbhalerao007@gmail.com', '8482838002', '8482838002', 'nikhil1', 'nikhil1', '1991-05-29', 'Shivaji  Nagar', 'Computer', 'Degree', '450745.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assesmenttbl`
--
ALTER TABLE `assesmenttbl`
  ADD PRIMARY KEY (`recordid`);

--
-- Indexes for table `categorytbl`
--
ALTER TABLE `categorytbl`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `departmenttbl`
--
ALTER TABLE `departmenttbl`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `examtbl`
--
ALTER TABLE `examtbl`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `noticetbl`
--
ALTER TABLE `noticetbl`
  ADD PRIMARY KEY (`noteid`);

--
-- Indexes for table `studenttbl`
--
ALTER TABLE `studenttbl`
  ADD PRIMARY KEY (`studid`);

--
-- Indexes for table `subjecttbl`
--
ALTER TABLE `subjecttbl`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assesmenttbl`
--
ALTER TABLE `assesmenttbl`
  MODIFY `recordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `categorytbl`
--
ALTER TABLE `categorytbl`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `departmenttbl`
--
ALTER TABLE `departmenttbl`
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `examtbl`
--
ALTER TABLE `examtbl`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `noticetbl`
--
ALTER TABLE `noticetbl`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `studenttbl`
--
ALTER TABLE `studenttbl`
  MODIFY `studid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `subjecttbl`
--
ALTER TABLE `subjecttbl`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
