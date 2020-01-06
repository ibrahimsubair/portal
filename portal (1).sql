-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 07:12 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(20) NOT NULL,
  `ans` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `ans`) VALUES
(1, '1148');

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE `compare` (
  `id` int(20) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`id`, `value`) VALUES
(1, 'correct'),
(2, 'correct'),
(3, 'correct'),
(4, 'incorrect');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ID` int(20) NOT NULL,
  `Teacher` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `coursecode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`ID`, `Teacher`, `Type`, `coursecode`) VALUES
(27, 'elleman', 'theory', 'csc205'),
(28, 'khadija', 'theory', 'csc205'),
(29, 'ibrahim', 'obj', '406967'),
(30, 'you must work', 'obj', 'csc205'),
(31, 'you must work', 'theory', 'csc306'),
(32, 'ibrahim', 'obj', 'csc205'),
(33, 'ibrahim', 'obj', 'csc205'),
(34, '', '', ''),
(35, '', '', ''),
(36, 'ibrahim', 'theory', 'csc205'),
(37, 'ibrahim', 'obj', 'csc205'),
(38, 'you must work', 'theory', 'csc205'),
(39, 'you must work', 'Theory', 'csc205'),
(40, 'ibrahim', 'obj', '406967'),
(41, 'you must work', 'obj', 'csc205'),
(42, 'ibrahim', 'theory', 'csc205'),
(43, 'ibrahim', 'theory', 'csc205'),
(44, 'ibrahim', 'obj', 'csc205'),
(45, 'you must work', 'Theory', 'csc205'),
(46, 'ibrahim', 'theory', 'csc205'),
(47, 'ibrahim', 'obj', '406967'),
(48, 'ibrahim', 'Theory', 'csc205'),
(49, 'ibrahim', 'fill in the gap', 'csc205'),
(50, 'ibrahim', 'fill in the gap', 'csc205'),
(51, 'ibrahim', 'fill in the gap', 'csc205'),
(52, 'ibrahim', 'fill in the gap', 'csc205'),
(53, 'ibrahim', 'fill in the gap', '406967'),
(54, 'ibrahim', 'fill', 'csc205'),
(55, 'you must work', 'fill', 'csc205'),
(56, 'ibrahim', 'theory', 'csc205'),
(57, 'you must work', 'theory', 'csc205'),
(58, 'ibrahim', 'fill', 'csc205'),
(59, 'you must work', 'fill', '406967'),
(60, 'ibrahim', 'theory', 'csc205'),
(61, 'ibrahim', 'fill', 'csc205'),
(62, 'ibrahim', 'fill', 'csc205'),
(63, 'ibrahim', 'theory', 'csc205'),
(64, 'ibrahim', 'fill', 'csc205'),
(65, 'ibrahim', 'fill', 'csc205'),
(66, 'ibrahim', 'theory', 'csc205'),
(67, '', '', ''),
(68, '', '', ''),
(69, '', '', ''),
(70, '', '', ''),
(71, '', '', ''),
(72, '', '', ''),
(73, 'ibrahim', 'theory', 'csc205'),
(74, 'ibrahim', 'theory', 'csc205'),
(75, 'ibrahim', 'theory', 'csc205'),
(76, 'ibrahim', 'theory', 'csc205'),
(77, '', '', ''),
(78, '', '', ''),
(79, 'you must work', 'obj', 'csc305'),
(80, '', '', ''),
(81, '', '', ''),
(82, '', '', ''),
(83, '', '', ''),
(84, 'ibrahim', 'Theory', 'csc205'),
(85, 'ibrahim', 'theory', 'csc205'),
(86, 'ibrahim', 'theory', 'csc205'),
(87, 'ibrahim', 'theory', 'csc205'),
(88, 'ibrahim', 'theory', 'csc205'),
(89, 'ibrahim', 'theory', 'csc205'),
(90, 'ibrahim', 'theory', 'csc205'),
(91, 'ibrahim', 'theory', 'csc205'),
(92, 'ibrahim', 'theory', 'csc205'),
(93, 'ibrahim', 'theory', 'csc205'),
(94, 'ibrahim', 'theory', 'csc205'),
(95, 'ibrahim', 'theory', 'csc205'),
(96, 'ibrahim', 'theory', '406967'),
(97, 'Mubarak', 'Theory', 'csc205'),
(98, 'ibrahim', 'theory', 'csc205'),
(99, 'you must work', 'theory', 'csc205'),
(100, 'you must work', 'theory', 'csc205'),
(101, 'ibrahim', 'theory', 'csc205'),
(102, 'ibrahim', 'obj', 'csc205'),
(103, '', '', ''),
(104, 'kubra', 'obj', 'csc 202'),
(105, 'Aisha', 'fill in', 'csc 303'),
(106, 'aisha', 'fill in', 'csc 205'),
(107, 'aisha', 'fill in', 'csc 205'),
(108, 'khadi', 'fill in', 'csc 205'),
(109, 'khadija', 'theory', 'csc 205');

-- --------------------------------------------------------

--
-- Table structure for table `fillquestions`
--

CREATE TABLE `fillquestions` (
  `Examid` int(11) NOT NULL,
  `que` varchar(100) NOT NULL,
  `question_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fillquestions`
--

INSERT INTO `fillquestions` (`Examid`, `que`, `question_number`) VALUES
(49, '0', 1),
(49, '0', 2),
(54, '0', 3),
(61, 'what is your name ___?', 7),
(61, 'what is your language ___?', 8),
(61, 'what is your age ___?', 10),
(64, 'hdhc ', 15),
(65, 'exam', 1),
(65, 'no', 2),
(80, 'd', 1),
(101, 'lets__go?', 1),
(105, '', 1),
(107, 'Do you like web programming____?', 1),
(108, 'seriously___?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(50) NOT NULL,
  `name` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`firstname`, `lastname`, `level`) VALUES
('', '', 0),
('', '', 0),
('khadija', 'gidado', 200),
('', '', 0),
('', '', 0),
('khadija', 'gidado', 200);

-- --------------------------------------------------------

--
-- Table structure for table `invitestudents`
--

CREATE TABLE `invitestudents` (
  `Examid` int(20) NOT NULL,
  `studentid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitestudents`
--

INSERT INTO `invitestudents` (`Examid`, `studentid`) VALUES
(98, 2),
(98, 3),
(99, 2),
(99, 3),
(99, 4),
(100, 2),
(100, 3),
(100, 4),
(101, 2),
(101, 3),
(101, 6),
(102, 2),
(102, 3),
(102, 4);

-- --------------------------------------------------------

--
-- Table structure for table `objquestions`
--

CREATE TABLE `objquestions` (
  `Examid` int(20) NOT NULL,
  `qsn_no` int(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `optionA` varchar(50) NOT NULL,
  `optionB` varchar(50) NOT NULL,
  `optionC` varchar(50) NOT NULL,
  `optionD` varchar(50) NOT NULL,
  `Correct_Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objquestions`
--

INSERT INTO `objquestions` (`Examid`, `qsn_no`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `Correct_Answer`) VALUES
(46, 1, 'whats is your name ?', 'ibrahim', 'zainab', 'maryam', 'khadija', 'ibrahim'),
(47, 1, 'Nigeria is how old ?', '1', '2', '3', '4', '1'),
(79, 1, 'whats is your name ?', 'me', 'zainab', 'maryam', '4', 'ibrahim'),
(102, 1, 'whats is your name ?', 'ibrahim', 'zainab', 'maryam', 'khadija', 'ibrahim'),
(104, 1, 'What does CSS stand for?', 'creative style sheet', 'colorful style sheets', 'cascading style sheet', 'computer style sheet', 'cascading style sheet'),
(46, 2, 'web?', 'yes', 'no', 'maybe', 'never!!', 'yes'),
(104, 2, 'What does HTML stand for?', 'home too markup language', 'hyperlinks makeup language', 'hero text markup language', 'hypertext markup language', 'hypertext markup language');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `code` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resetpassword`
--

INSERT INTO `resetpassword` (`code`, `email`) VALUES
('15e049dfaeff91', 'gidadokhadija59@gmail.com'),
('15e049e30dc272', 'gidadokhadija59@gmail.com'),
('15e049e7fa26ac', 'gidadokhadija59@gmail.com'),
('15e049ee37815d', 'fatimanasir2017@yahoo.com'),
('15e049f677cbe7', ''),
('15e04a028937fd', 'fatimanasir2017@yahoo.com'),
('15e04a0bfc5769', 'fatimanasir2017@yahoo.com'),
('15e04a209a84ce', 'fatimanasir2017@yahoo.com'),
('15e04a3ba7df27', 'shaheeda.nazif@gmail.com'),
('15e04a88cf0eea', 'gidadokhadija59@gmail.com'),
('15e04a9f18bff5', 'gidadokhadija59@gmail.com'),
('15e05d23c6d2ad', 'humairamadaki@gmail.com'),
('15e05d4069c27f', 'gidadokhadija59@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `id` int(30) NOT NULL,
  `score` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theoryquestion`
--

CREATE TABLE `theoryquestion` (
  `Examid` int(20) NOT NULL,
  `questio_no` int(20) NOT NULL,
  `question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theoryquestion`
--

INSERT INTO `theoryquestion` (`Examid`, `questio_no`, `question`) VALUES
(27, 1, 'are '),
(27, 2, 'you working'),
(34, 1, ''),
(34, 2, ''),
(35, 1, ''),
(35, 2, ''),
(48, 1, ''),
(66, 1, ''),
(66, 2, ''),
(69, 1, ''),
(70, 1, ''),
(70, 2, ''),
(71, 1, ''),
(71, 2, ''),
(72, 1, ''),
(72, 2, ''),
(73, 1, ''),
(74, 1, ''),
(74, 2, ''),
(75, 1, ''),
(75, 2, ''),
(76, 1, ''),
(76, 2, ''),
(77, 1, ''),
(77, 2, ''),
(78, 1, ''),
(81, 1, ''),
(82, 1, 'dont worry'),
(83, 1, 'jo'),
(84, 1, 'what is your name'),
(84, 2, 'what is your name'),
(85, 1, 'where are you'),
(85, 2, 'i  am here '),
(86, 1, 'where are you'),
(86, 2, 'i  am here '),
(87, 1, 'error?'),
(88, 1, 'error?'),
(89, 1, 'error?'),
(90, 1, 't'),
(90, 2, 'u'),
(91, 1, 't'),
(91, 2, 'u'),
(92, 1, 't'),
(92, 2, 'u'),
(93, 1, 't'),
(93, 2, 'hh'),
(94, 1, 'qwertyu'),
(94, 2, 'asdfgh'),
(95, 1, 'oya'),
(95, 2, 'work'),
(96, 1, 'web'),
(96, 2, 'wes'),
(97, 1, 'type'),
(97, 2, 'question'),
(98, 1, 'do you get'),
(98, 2, 'mr asim'),
(99, 1, 'what is your name'),
(99, 2, 'what level?'),
(100, 1, 'what is your name'),
(100, 2, 'your level?'),
(109, 1, 'are you tired?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `regno` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `level`, `regno`, `email`, `username`, `password`, `photo`) VALUES
('Khadija', 'Gidado', '', 1, 'gidadokhadija59@gmail.com', 'khadija', '6269', ''),
('Aisha', 'Kabir', '300', 2, 'kabiruaisha57@gmail.com', 'kitty', 'hamdees', ''),
('Fatima', 'Nasir', '300', 3, 'fatimanasir2017@yahoo.com', 'fati', 'fnas', ''),
('Zainab', 'Muhammad', '300', 4, 'shaheeda.nazif@gmail.com', 'zainab', '12345678', ''),
('Aliyu', 'Ismaila', '300', 6, 'aliyuismaila@gmail.com', 'isubair', 'aliyu', ''),
('Naima', 'Bala', 'naima@gmail.com', 7, '100', 'noims', '334455', ''),
('Abdulrahman', 'Gidado', 'abdul123@gmail.com', 10, '100', 'abduls', '1236', ''),
('Amani', 'Abdullahi', 'amanibelel@gmail.com', 11, '300', 'pumbaa', '9900', ''),
('Amani', 'Abdullahi', '300', 12, 'amanibelel@gmail.com', 'pumbaa', '9900', ''),
('Maryam', 'Gidado', '200', 13, 'maryammahmoud@gmail.com', 'marybee', '1122', ''),
('Aisha', 'Umar', '300', 14, 'sukkarumarmusa@gmail.com', 'sukkar', '4455', ''),
('Aisha', 'Madaki', '300', 17, 'humairamadaki@gmail.com', 'aishatyy', '66778899', ''),
('Halima', 'Abdulqadir', '300', 20, 'muhibberh98@gmail.com', 'muhibba', '11223344', ''),
('Khadija', 'Badmos', '300', 21, 'khadijabadmos@gmail.com', 'khadyy', '44556677', ''),
('Mubarak', 'Wahab', '300', 22, 'mubarakwahab@gmail.com', 'mubby', '10203040', ''),
('Sadiq ', 'Alqassim', '300', 23, 'sadiqnaibi55@gmail.com', 'monty', '56565656', ''),
('Zainab', 'Abdullahi', '300', 24, 'deeyzed@gmail.com', 'deey', '000000', ''),
('Muatapha', 'Ibrahim', '300', 25, 'mikabu38@gmail.com', 'musty', '7777', ''),
('Omar', 'Suleiman', '400', 26, 'omar178@gmail.com', 'omarss', '77777', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fillquestions`
--
ALTER TABLE `fillquestions`
  ADD KEY `foreign` (`Examid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitestudents`
--
ALTER TABLE `invitestudents`
  ADD KEY `anything` (`Examid`),
  ADD KEY `anything2` (`studentid`);

--
-- Indexes for table `objquestions`
--
ALTER TABLE `objquestions`
  ADD PRIMARY KEY (`qsn_no`,`Examid`),
  ADD KEY `Examid` (`Examid`);

--
-- Indexes for table `theoryquestion`
--
ALTER TABLE `theoryquestion`
  ADD KEY `Examid` (`Examid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `compare`
--
ALTER TABLE `compare`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `objquestions`
--
ALTER TABLE `objquestions`
  MODIFY `qsn_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `regno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
