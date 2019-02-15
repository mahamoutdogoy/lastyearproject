-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2019 at 08:09 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
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
(63, 36, 'yasha dayma', 'exam1', 17, '0', 'FAIL', '01/05/2019', '12/31/2018'),
(64, 38, 'kan nockdam', 'exam1', 17, '33', 'PASS', '01/05/2019', '12/31/2018'),
(68, 39, 'asi baka', 'exam1', 17, '0', 'FAIL', '12/31/2018', '12/31/2018'),
(74, 48, 'idriss tahir', 'exam1', 17, '0', 'FAIL', '02/07/2019', '02/07/2019'),
(77, 47, 'johanna eveangeline', 'Vocabualry', 19, '0', 'FAIL', '02/09/2019', '02/08/2019'),
(79, 46, 'ronald benjamin', 'exam1', 17, '0', 'FAIL', '02/09/2019', '02/09/2019'),
(82, 41, 'suresh reddy', '', 0, '0', 'FAIL', '', ''),
(102, 41, 'suresh reddy', 'Spelling Skills', 18, '0', 'FAIL', '02/16/2019', '02/15/2019');

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
(21, 'cat1', 'dept1', 1),
(22, 'cat2', 'dept1', 1),
(23, 'cat2', 'dept1', 0),
(24, 'cat7', 'dept7', 1),
(25, 'cat8', 'dept8', 1);

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
(13, 'dept1', 1),
(14, 'dept2', 1),
(15, 'dept7', 1),
(16, 'dept8', 1);

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
(17, 'exam1', 10, 10, 0, '2019-01-10', 'sub1', 'dept1', 'cat1', 'fsdf', 1),
(18, 'Spelling Skills', 10, 40, 1, '2019-03-13', 'sub7', 'dept7', 'cat7', 'do not copy', 1),
(19, 'Vocabualry', 10, 40, 1, '2019-04-12', 'sub8', 'dept8', 'cat8', 'do not copy please', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticetbl`
--

CREATE TABLE `noticetbl` (
  `noteid` int(11) NOT NULL,
  `notice` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postdate` varchar(50) NOT NULL,
  `lastupdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticetbl`
--

INSERT INTO `noticetbl` (`noteid`, `notice`, `description`, `postdate`, `lastupdate`) VALUES
(9, 'exam', 'test', '15/02/2019 10:02:43', '15/02/2019 10:02:43'),
(10, 'exam2', 'hello', '15/02/2019 10:08:03', '15/02/2019 10:08:03'),
(11, 'exam3', 'test', '15/02/2019 10:10:59', '15/02/2019 10:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `questiontbl`
--

CREATE TABLE `questiontbl` (
  `qid` int(11) NOT NULL,
  `examid` int(11) NOT NULL,
  `questionname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontype` varchar(100) NOT NULL,
  `op1` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `op2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `op3` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `op4` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `correctop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questiontbl`
--

INSERT INTO `questiontbl` (`qid`, `examid`, `questionname`, `questiontype`, `op1`, `op2`, `op3`, `op4`, `correctop`) VALUES
(39, 16, 'zVZ', '', 'v', 'gn', 's', 'bb', 'bb'),
(40, 16, 'gdfxbxc', '', 'fc', 'ht', 'kmj', 'ee', 'ee'),
(41, 16, 'chg', '', 'nhj', 'uu', 'uut', 'iio', 'uut'),
(42, 15, 'szfzzx', '', 'ggg', 'jj', 'kk', 'll', 'kk'),
(43, 15, 'tgfjfgc', '', 'hgf', 'fd', 'kjh', 'ft', 'ft'),
(44, 13, 'A declaration float a, b; occupies ___ of memory', '', '1 byte', '4 bytes', '8 bytes', '16 bytes', '8 bytes'),
(46, 13, 'The printf() function retunes which value when an error occurs?', '', 'Positive value', 'Zero', 'Negative value', 'None of these', 'Negative value'),
(47, 16, 'cdsgf', '', 'gf', 'gg', 'jj', 'kk', 'kk'),
(48, 13, '<p>TEST</p>\r\n', '', 'op1', 'op2', 'op3', 'op4', 'TESTSSSRSR'),
(49, 16, '<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (1)</strong></td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (2)</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">(A)</td>\r\n			<td style=\"vertical-align:top\">China&rsquo;s', '', '0', '0', '0', '0', ''),
(50, 13, '<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (1)</strong></td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (2)</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">(A)</td>\r\n			<td style=\"vertical-align:top\">China&rsquo;s', '', 'A-D', 'B-E', 'C-F', '-', ''),
(51, 13, '<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (1)</strong></td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (2)</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">(A)</td>\r\n			<td style=\"vertical-align:top\">China&rsquo;s', '', 'A-D', 'B-E', 'C-F', '-', 'A-D'),
(52, 13, '<p>TEST</p>\r\n', '', '', '', '', '', ''),
(53, 13, '<p>TEST</p>\r\n', '', '', '', '', '', ''),
(54, 13, '<p>TTTTTT ---- RRRRRRR</p>\r\n', '', 'AAA', 'BBBB', 'CCC', 'DDDD', 'CCC'),
(55, 13, '<p>THUS IS</p>\r\n', '', '', '', '', '', 'TEST TEST'),
(56, 13, '<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (1)</strong></td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (2)</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">(A)</td>\r\n			<td style=\"vertical-align:top\">China&rsquo;s Alibaba, with its investment in PayTm Mall,</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td style=\"vertical-align:top\">(D)</td>\r\n			<td style=\"vertical-align:top\">causing side-effects.</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">(B)</td>\r\n			<td style=\"vertical-align:top\">It emerged that the devise was leaking cobalt,</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td style=\"vertical-align:top\">(E)</td>\r\n			<td style=\"vertical-align:top\">is vying to compete in the Indian ecommerce space.</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">(C)</td>\r\n			<td style=\"vertical-align:top\">The process of putting together a regulatory&nbsp;</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td style=\"vertical-align:top\">(F)</td>\r\n			<td style=\"vertical-align:top\">framework for electronic commerce in the country is final speeding up.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', 'A-D', 'B-E', 'C-F', '-', 'A-D'),
(57, 13, '<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (1)</strong></td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td colspan=\"2\" style=\"vertical-align:top\"><strong>Column (2)</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">(A)</td>\r\n			<td style=\"vertical-align:top\">China&rsquo;s Alibaba, with its investment in PayTm Mall,</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td style=\"vertical-align:top\">(D)</td>\r\n			<td style=\"vertical-align:top\">causing side-effects.</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">(B)</td>\r\n			<td style=\"vertical-align:top\">It emerged that the devise was leaking cobalt,</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td style=\"vertical-align:top\">(E)</td>\r\n			<td style=\"vertical-align:top\">is vying to compete in the Indian ecommerce space.</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">(C)</td>\r\n			<td style=\"vertical-align:top\">The process of putting together a regulatory&nbsp;</td>\r\n			<td style=\"vertical-align:top\">&nbsp;</td>\r\n			<td style=\"vertical-align:top\">(F)</td>\r\n			<td style=\"vertical-align:top\">framework for electronic commerce in the country is final speeding up.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><small>A</small></p>\r\n', '', 'A-D', 'B-E', 'C-', '-', 'B-E'),
(58, 17, '<p>Match the following<br />\r\n1.City of sweet limes &harr; a. Jalna<br />\r\n2.City of Lakes&harr;b. Bhandara<br />\r\n3.City of Orange&harr;c. Nagpur<br />\r\n4.Store of Jowar&harr;d. Parbani</p>\r\n', '', 'a-b', 'c-d', 'a-c', 'b-d', 'a-b'),
(59, 17, '<p>what is php</p>\r\n', '', 'a', 'b', 'c', 'd', 'c'),
(60, 17, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Years</strong></td>\r\n			<td><strong>Transport &amp; communication</strong></td>\r\n			<td><strong>Education</strong></td>\r\n			<td><strong>Housing</strong></td>\r\n			<td><strong>Health</strong></td>\r\n			<td><strong>Social Welfare</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>1980-81</td>\r\n			<td>56219</td>\r\n			<td>75493</td>\r\n			<td>13537</td>\r\n			<td>9596</td>\r\n			<td>1985</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1981-82</td>\r\n			<td>71416</td>\r\n			<td>80691</td>\r\n			<td>15902</td>\r\n			<td>10135</td>\r\n			<td>2073</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1982-83</td>\r\n			<td>73520</td>\r\n			<td>61218</td>\r\n			<td>16736</td>\r\n			<td>11000</td>\r\n			<td>3918</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1983-84</td>\r\n			<td>75104</td>\r\n			<td>73117</td>\r\n			<td>17523</td>\r\n			<td>12038</td>\r\n			<td>4102</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1984-85</td>\r\n			<td>80216</td>\r\n			<td>90376</td>\r\n			<td>19420</td>\r\n			<td>15946</td>\r\n			<td>10523</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Which year saw the maximum expenditure on Health, so far, out of the years given?</p>\r\n', '', '1984 - 85B. ', '1980 - 81C. ', '1981 - 82D. ', '1982 - 83', '1982 - 83'),
(62, 17, '<p>The word &lsquo;based&rsquo; ends in /d/ or /t/ sound.</p>\r\n', '', '', '', '', '', 't'),
(63, 17, '<ol>\r\n	<li>\r\n	<p><strong>Fill in the blank with the correct word. Babar Ali taught the deprived kids __________ of life.</strong></p>\r\n	</li>\r\n</ol>\r\n', '', '', '', '', '', ' Fundamentals '),
(64, 18, '<ol>\r\n	<li>\r\n	<p>Pick the correct word from the list and fill in the blank.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Everyone turned in the direction of __________(wice,vice,woise,voice)&nbsp;</p>\r\n', 'fill', '', '', '', '', 'VOICE'),
(65, 18, '<p>Â  Â  Â  Â  Â  Â Identify the word that rhymes with â€˜Mornâ€™Â </p>\r\n', 'mcq', 'Horn', 'Crown ', 'frown  ', 'Mourn       ', 'Horn'),
(66, 18, '<p>isten to identify the silent letter and write</p>\r\n\r\n<p>World</p>\r\n', 'landwt', '', '', '', '', 'L'),
(67, 19, '<p>Fill in the blanks using the noun form of the verbs given in brackets.</p>\r\n\r\n<p>a. The faces of the animals were capable of no other _____________ (express) except a perpetual smile after the verdict.</p>\r\n', 'fill', '', '', '', '', 'EXPRESSION'),
(68, 19, '<p>The old woman stopped singing when there was a slight __________ (disturb).</p>\r\n', 'fill', '', '', '', '', 'DISTURBANCE '),
(69, 19, '<p>Students learnt the correct ________ (pronounce) of the words.</p>\r\n', 'fill', '', '', '', '', 'PRONUNCIATION'),
(70, 19, '<p>The lion was too hasty in his _______ (judge).</p>\r\n', 'fill', '', '', '', '', 'JUDGEMENT'),
(71, 19, '<p>Mara stood in ________ (amaze) looking at the lake.</p>\r\n', 'fill', '', '', '', '', 'AMAZEMENT   '),
(72, 18, '<p>who is nish&nbsp;------------</p>\r\n', 'fill', '', '', '', '', 'STUDENT');

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
(38, 'kan', 'nockdam', 'Female', 'AB+', 'kan@gmail.com', '9090909090', '9090909090', '12345', '12345', '1998-05-29', 'sg palya', 'dept1', 'cat1', '28.jpg', 1),
(39, 'asi', 'baka', 'Male', 'AB+', 'asi@gmail.com', '9091909090', '9091909090', '12345', '12345', '1997-05-29', 'sg palya', 'dept1', 'cat1', '15.jpg', 1),
(41, 'suresh', 'reddy', 'Male', 'A', 'suresh@gmail.com', '9992909090', '9992909090', '12345', '12345', '1997-05-29', 'tavarekere', 'dept7', 'cat7', '65.jpg', 1),
(43, 'swapnil', 'swapnil', 'Male', 'B', 'swapnil@gmail.com', '9993909090', '9993909090', '12345', '12345', '1998-05-29', 'tavarekere', 'dept1', 'cat1', '60.jpg', 1),
(44, 'nanda', 'gopal', 'Male', 'B', 'nanda@gmail.com', '9090909091', '9090909091', '12345', '12345', '1997-05-29', 'sg palya', 'dept1', 'cat1', '39.jpg', 1),
(45, 'harsha', 'harsha', 'Female', 'AB+', 'harsha@gmail.com', '9090909096', '9090909096', '12345', '12345', '1998-05-29', 'sg palya', 'dept1', 'cat1', '23.jpg', 1),
(46, 'ronald', 'benjamin', 'Male', 'B', 'ronald@mail.com', '8945238911', '8945238911', '12345', '12345', '1997-05-29', 'tavarekere', 'dept1', 'cat1', '49.jpg', 1),
(47, 'johanna', 'eveangeline', 'Female', 'AB+', 'johanna@gmail.com', '9812346789', '9812346789', '12345', '12345', '1998-05-29', 'sg palya', 'dept8', 'cat8', '27.jpg', 1),
(48, 'idriss', 'tahir', 'Male', 'A', 'idriss@gmail.com', '9090898978', '78967564656', '12345', '12345', '0002-02-11', 'tavarekere', 'dept1', 'cat1', '410097.png', 0);

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
(9, 'sub1', 'dept1', 'cat1', 1),
(10, 'sub2', 'dept2', 'cat2', 0),
(11, 'sub7', 'dept7', 'cat7', 1),
(12, 'sub8', 'dept8', 'cat8', 1);

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
(22, 'mahamat', 'abdallah', 'Male', 'o-', 'mahamatabdallah98@gmail.com', '9901147437', '9901147437', '12345', '12345', '1998-05-29', 'tavarekere', '----', '----', '76354.jpg', 1);

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
-- Indexes for table `questiontbl`
--
ALTER TABLE `questiontbl`
  ADD PRIMARY KEY (`qid`);

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
  MODIFY `recordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `categorytbl`
--
ALTER TABLE `categorytbl`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `departmenttbl`
--
ALTER TABLE `departmenttbl`
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `examtbl`
--
ALTER TABLE `examtbl`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `noticetbl`
--
ALTER TABLE `noticetbl`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questiontbl`
--
ALTER TABLE `questiontbl`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `studenttbl`
--
ALTER TABLE `studenttbl`
  MODIFY `studid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `subjecttbl`
--
ALTER TABLE `subjecttbl`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
