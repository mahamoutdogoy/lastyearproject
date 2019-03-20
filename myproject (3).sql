-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2019 at 05:56 PM
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
(64, 38, 'kan nockdam', 'exam1', 17, '33', 'PASS', '01/05/2019', '12/31/2018'),
(68, 39, 'asi baka', 'exam1', 17, '0', 'FAIL', '12/31/2018', '12/31/2018'),
(74, 48, 'idriss tahir', 'exam1', 17, '0', 'FAIL', '02/07/2019', '02/07/2019'),
(79, 46, 'ronald benjamin', 'exam1', 17, '0', 'FAIL', '02/09/2019', '02/09/2019'),
(216, 47, 'johanna eveangeline', 'Spelling Skills', 18, '50', 'PASS', '03/14/2019', '03/13/2019'),
(217, 47, 'johanna eveangeline', 'Vocabulary', 19, '0', 'FAIL', '03/14/2019', '03/13/2019'),
(218, 49, 'monish k', 'Spelling Skills', 18, '75', 'PASS', '03/14/2019', '03/13/2019'),
(219, 49, 'monish k', 'Vocabulary', 19, '0', 'FAIL', '03/14/2019', '03/13/2019'),
(276, 41, 'suresh reddy', 'Pre-test', 18, '50', 'FAIL', '03/21/2019', '03/20/2019'),
(277, 41, 'suresh reddy', 'Post-test', 19, '70', 'FAIL', '03/21/2019', '03/20/2019');

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
(25, 'cat8', 'dept8', 1),
(26, 'cat9', 'dept9', 1);

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
(16, 'dept8', 1),
(17, 'dept9', 1);

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
(18, 'Pre-test', 10, 40, 1, '2019-03-30', 'sub7', 'dept7', 'cat7', 'do not copy', 1),
(19, 'Post-test', 10, 40, 1, '2019-04-12', 'sub7', 'dept7', 'cat7', 'do not copy please', 1),
(20, 'Training', 10, 40, 1, '2019-03-21', 'sub7', 'dept7', 'cat7', 'some', 0);

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
(9, 'exam', 'BE READY ', '20/03/2019 09:29:19', '15/02/2019 10:02:43'),
(10, 'exam2', 'hello there', '11/03/2019 03:44:59', '15/02/2019 10:08:03'),
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
(65, 18, '<p>Â  Â  Â  Â  Â  Â Identify the word that rhymes with â€˜Mornâ€™Â </p>\r\n', 'mcq', 'Horn', 'Crown ', 'frown  ', 'Mourn       ', 'Horn'),
(66, 18, '<p>isten to identify the silent letter and write</p>\r\n\r\n<p>World</p>\r\n', 'landwt', '', '', '', '', 'L'),
(67, 19, '<p>Fill in the blanks using the noun form of the verbs given in brackets.</p>\r\n\r\n<p>a. The faces of the animals were capable of no other _____________ (express) except a perpetual smile after the verdict.</p>\r\n', 'fill', '', '', '', '', 'EXPRESSION'),
(68, 19, '<p>The old woman stopped singing when there was a slight __________ (disturb).</p>\r\n', 'fill', '', '', '', '', 'DISTURBANCE '),
(69, 19, '<p>Students learnt the correct ________ (pronounce) of the words.</p>\r\n', 'fill', '', '', '', '', 'PRONUNCIATION'),
(70, 19, '<p>The lion was too hasty in his _______ (judge).</p>\r\n', 'fill', '', '', '', '', 'JUDGEMENT'),
(71, 19, '<p>Mara stood in ________ (amaze) looking at the lake.</p>\r\n', 'fill', '', '', '', '', 'AMAZEMENT   '),
(73, 18, '<p><strong>The girl propped up on </strong><strong>pillow</strong><strong>. From the given sentence find the thing given by </strong><strong>doctor</strong><strong> to cure pain.</strong></p>\r\n', 'wtword', '', '', '', '', 'PILL'),
(74, 18, '<p><strong>Misspelled words</strong></p>\r\n\r\n<p><strong>a.Virtuas b. Virtuos c.Virtous d. Virtuous</strong></p>\r\n', 'wtword', '', '', '', '', 'VIRTUOUS'),
(76, 18, '<p>The master must stand by and see on if his white son tries to _____(know/now) his duties.&nbsp;</p>\r\n', 'fill', '', '', '', '', 'KNOW'),
(77, 18, '<p>The author knew they would prefer to feel that they had safely kept their secret. Pick and write the words with a silent letter.&nbsp;</p>\r\n', 'fill', '', '', '', '', 'KNEW'),
(78, 18, '<p>Silent final consonant letter in the word Earlier and Autumn is _______.</p>\r\n', 'fill', '', '', '', '', 'R'),
(79, 18, '<ol>\r\n	<li>\r\n	<p>The author lived in a dingy room.The meaning of the underlined word is</p>\r\n	</li>\r\n</ol>\r\n', 'fill', '', '', '', '', 'DIRTY'),
(80, 18, '<ol>\r\n	<li>\r\n	<p>The man was very _________ by the sweet words from the king of the jungle. The suitable word which completes the sentence is</p>\r\n	</li>\r\n</ol>\r\n', 'mcq', 'please', 'worried', 'convinced', 'shocked', ''),
(81, 18, '<p>The word &lsquo;Crone&rsquo; means _____________.</p>\r\n', 'fill', '', '', '', '', 'AN UGLY OLD WOMAN'),
(82, 18, '<p>Read the following passage and answer the questions at the end.</p>\r\n\r\n<p>And yet it is one of the simplest ideas that anyone ever had. Here I want to persuade you how evolution explains the beginning of life on earth.</p>\r\n\r\n<p>Darwin uncovered the theory of evolution and the method of natural selection. The idea of evolution is probably one of the most important ideas that anyone has ever had.</p>\r\n\r\n<p>Today, thanks to Darwin, we know why life is the way it is. We can predict how life will be in the future. We can even postulate about the life on other planets.</p>\r\n\r\n<p>How amazing is that! Now answer the following questions:</p>\r\n\r\n<p>Â What is the topic of the paragraph?</p>\r\n\r\n<p>Â </p>\r\n', 'mcq', 'The idea of evolution is simple.', 'Evolution is important.', ' It tells us about the origin of life.', 'By evolution, we can make predictions.', '3'),
(83, 18, '<h2>Paragraph Data comprehension</h2>\r\n\r\n<p>Sometimes, the given paragraph will be a collection of facts or data that you will have to use to be able to answer the questions.</p>\r\n\r\n<p>Let us see an example.Shoaib, Harshad, Preksha, and Yawer are four friends playing poker. In each hand,</p>\r\n\r\n<p>the individual player has to bet 800 rupees. Preksha wins three hands, Yawer wins two and the others win four hands each.</p>\r\n\r\n<p>Now answer the following questions:</p>\r\n\r\n<p>Q-The person who lost the most money is</p>\r\n', 'mcq', 'Shoaib', 'Harshad', 'Preksha', 'Yawer', ''),
(84, 18, '<p>The following table gives the percentage of marks obtained by seven students in six different subjects in an examination.</p>\r\n\r\n<p>The Numbers in the Brackets give the Maximum Marks in Each Subject.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"3\">Student</td>\r\n			<td colspan=\"6\">Subject (Max. Marks)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Maths</td>\r\n			<td>Chemistry</td>\r\n			<td>Physics</td>\r\n			<td>Geography</td>\r\n			<td>History</td>\r\n			<td>Computer Science</td>\r\n		</tr>\r\n		<tr>\r\n			<td>(150)</td>\r\n			<td>(130)</td>\r\n			<td>(120)</td>\r\n			<td>(100)</td>\r\n			<td>(60)</td>\r\n			<td>(40)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ayush</td>\r\n			<td>90</td>\r\n			<td>50</td>\r\n			<td>90</td>\r\n			<td>60</td>\r\n			<td>70</td>\r\n			<td>80</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Aman</td>\r\n			<td>100</td>\r\n			<td>80</td>\r\n			<td>80</td>\r\n			<td>40</td>\r\n			<td>80</td>\r\n			<td>70</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sajal</td>\r\n			<td>90</td>\r\n			<td>60</td>\r\n			<td>70</td>\r\n			<td>70</td>\r\n			<td>90</td>\r\n			<td>70</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rohit</td>\r\n			<td>80</td>\r\n			<td>65</td>\r\n			<td>80</td>\r\n			<td>80</td>\r\n			<td>60</td>\r\n			<td>60</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Muskan</td>\r\n			<td>80</td>\r\n			<td>65</td>\r\n			<td>85</td>\r\n			<td>95</td>\r\n			<td>50</td>\r\n			<td>90</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tanvi</td>\r\n			<td>70</td>\r\n			<td>75</td>\r\n			<td>65</td>\r\n			<td>85</td>\r\n			<td>40</td>\r\n			<td>60</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tarun</td>\r\n			<td>65</td>\r\n			<td>35</td>\r\n			<td>50</td>\r\n			<td>77</td>\r\n			<td>80</td>\r\n			<td>80</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>What are the average marks obtained by all the seven students in Physics? (rounded off to two digit after decimal)</p>\r\n', 'mcq', '77.26', '89.14', '91.37', '96.11', ''),
(85, 18, '<p>The following pie-chart shows the percentage distribution of the expenditure incurred in publishing a book. Study the pie-chart and the answer the questions based on it.</p>\r\n\r\n<p>Various Expenditures (in percentage) Incurred in Publishing a Book</p>\r\n\r\n<p><img src=\"https://www.indiabix.com/_files/images/data-interpretation/pie-charts/15-2-1-1.png\" /></p>\r\n', 'mcq', 'A.	Rs. 19,450\r\n', 'B.	Rs. 21,200', 'C.	Rs. 22,950', 'D.	Rs. 26,150', ''),
(86, 18, '<p>The bar graph given below shows the sales of books (in thousand number) from six branches of a publishing company during two consecutive years 2000 and 2001.</p>\r\n\r\n<p>Sales of Books (in thousand numbers) from Six Branches - B1, B2, B3, B4, B5 and B6 of a publishing Company in 2000 and 2001.</p>\r\n\r\n<p><img src=\"https://www.indiabix.com/_files/images/data-interpretation/bar-charts/15-1-1-1.png\" /></p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"vertical-align:top\">1.&nbsp;</td>\r\n			<td style=\"vertical-align:top\">\r\n			<p>What is the ratio of the total sales of branch B2 for both years to the total sales of branch B4 for both years?</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'mcq', 'A.	2:3', 'B.	3:5', 'C.	4:5', 'D.	7:9', '');

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
(46, 'ronald', 'benjamin', 'Male', 'B', 'ronald@mail.com', '8945238911', '8945238911', '12345', '12345', '1997-05-29', 'tavarekere', 'dept1', 'cat1', '49.jpg', 0),
(47, 'johanna', 'eveangeline', 'Female', 'AB+', 'johanna@gmail.com', '9812346789', '9812346789', '12345', '12345', '1998-05-29', 'sg palya', 'dept7', 'cat7', '27.jpg', 1),
(48, 'idriss', 'tahir', 'Male', 'A', 'idriss@gmail.com', '9090898978', '78967564656', '12345', '12345', '0002-02-11', 'tavarekere', 'dept1', 'cat1', '410097.png', 0),
(49, 'monish', 'k', 'Male', 'A+', 'monish@gmail.com', '9090898978', '78967564656', '12345', '12345', '1997-02-12', 'tavarekere main road', 'dept7', 'cat7', '638026.jpg', 1),
(50, 'pra', 'gg', 'Male', 'A+', 'pra@gmail.com', '9090898978', '66666666', '12345', '12345', '2019-02-22', 'dfghg', 'dept9', 'cat9', '349341.png', 0),
(51, 'hamit', 'd', 'Male', 'A', 'hamit@gmail.com', '9090898978', '66666666', '12345', '12345', '2019-03-08', 'qwfg', 'dept7', 'cat7', '648485.jpg', 1);

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
(12, 'sub8', 'dept8', 'cat8', 1),
(13, 'english', 'dept9', 'cat9', 0);

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
  MODIFY `recordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `categorytbl`
--
ALTER TABLE `categorytbl`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `departmenttbl`
--
ALTER TABLE `departmenttbl`
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `examtbl`
--
ALTER TABLE `examtbl`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `noticetbl`
--
ALTER TABLE `noticetbl`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questiontbl`
--
ALTER TABLE `questiontbl`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `studenttbl`
--
ALTER TABLE `studenttbl`
  MODIFY `studid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `subjecttbl`
--
ALTER TABLE `subjecttbl`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
