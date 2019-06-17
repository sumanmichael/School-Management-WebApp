-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 02:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_fee`
--

CREATE TABLE `class_fee` (
  `class` varchar(8) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fee_rcpt`
--

CREATE TABLE `fee_rcpt` (
  `rcpt_no` int(11) NOT NULL,
  `admn` int(11) NOT NULL,
  `term` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paidto` varchar(30) NOT NULL,
  `descrip` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_data`
--

CREATE TABLE `stu_data` (
  `admn` int(11) NOT NULL,
  `doa` date NOT NULL,
  `class` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `uid` bigint(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `childid` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_occup` varchar(30) NOT NULL,
  `f_qual` varchar(20) NOT NULL,
  `f_uid` bigint(20) NOT NULL,
  `f_phno` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_occup` varchar(30) NOT NULL,
  `m_qual` varchar(30) NOT NULL,
  `m_uid` bigint(20) NOT NULL,
  `m_phno` bigint(20) NOT NULL,
  `m_tongue` varchar(10) NOT NULL,
  `prev_school` text NOT NULL,
  `idmark1` text NOT NULL,
  `idmark2` text NOT NULL,
  `hostel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_fee`
--

CREATE TABLE `stu_fee` (
  `admn` int(11) NOT NULL,
  `term1` int(11) NOT NULL,
  `term2` int(11) NOT NULL,
  `term3` int(11) NOT NULL,
  `term4` int(11) NOT NULL,
  `rcpt_term1` int(11) NOT NULL,
  `rcpt_term2` int(11) NOT NULL,
  `rcpt_term3` int(11) NOT NULL,
  `rcpt_term4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_vehi`
--

CREATE TABLE `stu_vehi` (
  `admn` int(11) NOT NULL,
  `sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tea_data`
--

CREATE TABLE `tea_data` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `qual` varchar(30) NOT NULL,
  `sal` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehi_sl`
--

CREATE TABLE `vehi_sl` (
  `sl` int(11) NOT NULL,
  `driver` varchar(30) NOT NULL,
  `driver_phno` bigint(20) NOT NULL,
  `locality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_fee`
--
ALTER TABLE `class_fee`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `fee_rcpt`
--
ALTER TABLE `fee_rcpt`
  ADD PRIMARY KEY (`rcpt_no`);

--
-- Indexes for table `stu_data`
--
ALTER TABLE `stu_data`
  ADD PRIMARY KEY (`admn`);

--
-- Indexes for table `stu_fee`
--
ALTER TABLE `stu_fee`
  ADD PRIMARY KEY (`admn`);

--
-- Indexes for table `stu_vehi`
--
ALTER TABLE `stu_vehi`
  ADD PRIMARY KEY (`admn`);

--
-- Indexes for table `tea_data`
--
ALTER TABLE `tea_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vehi_sl`
--
ALTER TABLE `vehi_sl`
  ADD PRIMARY KEY (`sl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
