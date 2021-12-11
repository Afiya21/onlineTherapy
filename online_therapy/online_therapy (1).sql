-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 10:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_therapy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `Admin_firstname` varchar(50) NOT NULL,
  `Admin_lastname` varchar(50) NOT NULL,
  `Admin_email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `psychtherapist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_firstname`, `Admin_lastname`, `Admin_email`, `username`, `password`, `patient_id`, `psychtherapist_id`) VALUES
(1, 'Nebyat', 'Ahmed', '', 'afiya', 'a1Bz20ydqelm8m1wqlb59c67bf196a4758191e42f76670ceba', 0, 0),
(2, 'Nebyat', 'Ahmed', '', 'afiya', 'a1Bz20ydqelm8m1wql4a7d1ed414474e4033ac29ccb8653d9b', 0, 0),
(3, 'Nebyat', 'Ahmed', '', 'afiya', 'a1Bz20ydqelm8m1wql4a7d1ed414474e4033ac29ccb8653d9b', 0, 0),
(4, 'Nebyat', 'Ahmed', '', 'afiya', 'a1Bz20ydqelm8m1wqlb59c67bf196a4758191e42f76670ceba', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `appoid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `psychtherapist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `psychtherapist`
--

CREATE TABLE `psychtherapist` (
  `psychtherapist_id` int(11) NOT NULL,
  `psychtherapist_firstname` varchar(50) NOT NULL,
  `psychtherapist_lastname` varchar(50) NOT NULL,
  `psychtherapist_gender` varchar(5) NOT NULL,
  `psychtherapist_experience` varchar(50) NOT NULL,
  `psychtherapist_age` int(11) NOT NULL,
  `psychtherapist_specialized` varchar(50) NOT NULL,
  `psychtherapist_adress` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psychtherapist`
--

INSERT INTO `psychtherapist` (`psychtherapist_id`, `psychtherapist_firstname`, `psychtherapist_lastname`, `psychtherapist_gender`, `psychtherapist_experience`, `psychtherapist_age`, `psychtherapist_specialized`, `psychtherapist_adress`, `username`, `password`) VALUES
(7, 'ahmed', 'feyo', 'm', '4year', 45, 'bhevioral', 'kera', 'ah', 'a1Bz20ydqelm8m1wql4a7d1ed414474e4033ac29ccb8653d9b'),
(8, 'ahmed', 'feyo', 'm', '4year', 45, 'bhevioral', 'kera', 'ah', 'a1Bz20ydqelm8m1wql4a7d1ed414474e4033ac29ccb8653d9b'),
(9, 'ahmed', 'feyo', 'm', '4year', 45, 'bhevioral', 'kera', 'ah', 'a1Bz20ydqelm8m1wql4a7d1ed414474e4033ac29ccb8653d9b'),
(10, 'ahmed', 'feyo', 'm', '4year', 45, 'bhevioral', 'kera', 'ah', 'a1Bz20ydqelm8m1wql4a7d1ed414474e4033ac29ccb8653d9b'),
(11, 'ahmed', 'feyo', 'm', '4year', 45, 'bhevioral', 'kera', 'ah', 'a1Bz20ydqelm8m1wql4a7d1ed414474e4033ac29ccb8653d9b'),
(12, 'ahmed', 'feyo', 'm', '4year', 45, 'bhevioral', 'kera', 'Ahm', 'a1Bz20ydqelm8m1wqlb59c67bf196a4758191e42f76670ceba'),
(13, 'abel', 'girma', 'm', '3 year', 28, 'bhevioral', 'bole', 'abel', 'a1Bz20ydqelm8m1wql4a7d1ed414474e4033ac29ccb8653d9b'),
(14, '', '', '', '', 0, '', '', '', 'a1Bz20ydqelm8m1wqld41d8cd98f00b204e9800998ecf8427e'),
(15, '', '', '', '', 0, '', '', '', 'a1Bz20ydqelm8m1wqld41d8cd98f00b204e9800998ecf8427e'),
(16, 'dagi', 'ayalew', 'm', '3 year', 24, 'bhevioral', 'bole', 'dagi', 'a1Bz20ydqelm8m1wql4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(0, 12, 'andualem', 'buzuayew', 'andy@gmail.com', '1234', 'edf', 'ghj'),
(0, 12, 'andualem', 'buzuayew', 'andy@gmail.com', '1234', 'edf', 'ghj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`appoid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `psychtherapist`
--
ALTER TABLE `psychtherapist`
  ADD PRIMARY KEY (`psychtherapist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `appoid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psychtherapist`
--
ALTER TABLE `psychtherapist`
  MODIFY `psychtherapist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
