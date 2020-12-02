-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 10:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mno` bigint(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`fname`, `mname`, `lname`, `mno`, `username`, `gender`, `pwd`) VALUES
('dhruv', 'alpesh', 'sheth', 7666721000, 'dhruv.sheth@universal.edu.in', 'male', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mno` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `percent` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `yop` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `collegename` varchar(255) NOT NULL,
  `cboard` varchar(255) NOT NULL,
  `cstates` varchar(255) NOT NULL,
  `cpercents` varchar(255) NOT NULL,
  `collegegrade` varchar(255) NOT NULL,
  `cyop` varchar(255) NOT NULL,
  `gradcollege` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `ustream` varchar(255) NOT NULL,
  `firstyear` varchar(255) NOT NULL,
  `fgrade` varchar(255) NOT NULL,
  `secondyear` varchar(255) NOT NULL,
  `sgrade` varchar(255) NOT NULL,
  `thirdyear` varchar(255) NOT NULL,
  `tgrade` varchar(255) NOT NULL,
  `finalyear` varchar(255) NOT NULL,
  `finalgrade` varchar(255) NOT NULL,
  `uyop` varchar(255) NOT NULL,
  `pgcollege` varchar(255) NOT NULL,
  `pguniversity` varchar(255) NOT NULL,
  `pgstream` varchar(255) NOT NULL,
  `pgfirstyear` varchar(255) NOT NULL,
  `pggrade` varchar(255) NOT NULL,
  `pgsecondyear` varchar(255) NOT NULL,
  `pgsgrade` varchar(255) NOT NULL,
  `pgyop` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pyop` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `eyear` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`fname`, `lname`, `gender`, `dob`, `mno`, `email`, `address`, `school`, `board`, `state`, `percent`, `grade`, `yop`, `stream`, `collegename`, `cboard`, `cstates`, `cpercents`, `collegegrade`, `cyop`, `gradcollege`, `university`, `ustream`, `firstyear`, `fgrade`, `secondyear`, `sgrade`, `thirdyear`, `tgrade`, `finalyear`, `finalgrade`, `uyop`, `pgcollege`, `pguniversity`, `pgstream`, `pgfirstyear`, `pggrade`, `pgsecondyear`, `pgsgrade`, `pgyop`, `project`, `subject`, `pyop`, `experience`, `eyear`, `hobbies`, `skill`, `language`) VALUES
('DHRUV', 'SHETH', 'MALE', '21-05-2000', 9876543210, 'DHRUV.SHETH@UNIVERSAL.EDU.IN', 'KAMALA PARK 60 FEET ROAD BHAYABDER (WEST)', 'DON BOSCE HIGH SCHOOL', 'SSC', 'MAHARASHTRA', '74.00%', 'A', 'MARCH 2016', 'SCIENCE', 'SVP COLLEGE', 'HSC', 'MAHARASHTA', '80.45%', 'A', 'MARCH 2018', 'UNIVERSAL COLLEGE OF ENGINEERING', 'MUMBAI UNIBERSITY', 'B.TECH-COMP', '6.64', 'PASS', '8.00%', 'PASS', 'NA', 'NA', 'NA', 'NA', 'MAY 2022', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'RESUME PROJECT', 'HTML,CSS,PHPMYADMIN', 'NA', 'NA', 'NA', 'CRICKET', 'MAKING NEW PROGRAM', 'JAVA,PYTHON,HTML,CSS,KOTLIN');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hear` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `hear`, `rating`, `comments`) VALUES
('dhruv sheth', 'xyz21@gmail.com', 'friend', 'yes', '     \r\nvery good ');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mno` bigint(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`fname`, `mname`, `lname`, `mno`, `username`, `age`, `gender`, `pwd`) VALUES
('Dhruv ', 'Alpesh', 'sheth', 9876543210, 'dhruv.sheth@universal.edu.in', '21-05-2000', 'male', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`address`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`hear`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
