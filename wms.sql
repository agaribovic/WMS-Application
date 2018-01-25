-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 11:45 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wms`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `EVE_ID` int(11) NOT NULL,
  `EVE_NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EVE_CATEGORY` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EVE_DESCRIPTION` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EVE_PRIORITIZATION` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EVE_ROLE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EVE_LEVEL` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EVE_STATUS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''1'''
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EVE_ID`, `EVE_NAME`, `EVE_CATEGORY`, `EVE_DESCRIPTION`, `EVE_PRIORITIZATION`, `EVE_ROLE`, `EVE_LEVEL`, `EVE_STATUS`) VALUES
(6, 'sjdnfkjs', 'Flood', 'oiso msf hahaa', 'Low', 'Problem manager', 'High', '0'),
(9, 'tralala', 'Fire', 'oiso msf hehe', 'Low', 'Problem manager', 'High', '''1'''),
(10, 'sjdnf', 'Other', 'ldsn sui hsiu ', 'Low', 'Problem manager', 'Medium', '''1'''),
(11, 'u duf idu', 'Flood', '.sklnfdsj ns', 'High', 'Change manager', 'High', '''1'''),
(13, 'isdbui ', 'Flood', 'sdksk msdi msd', 'Medium', 'Incident manager', 'Medium', '''1''');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE IF NOT EXISTS `incidents` (
  `INC_ID` int(11) NOT NULL,
  `INC_NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INC_CATEGORY` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INC_PRIORITIZATION` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INC_LEVEL` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INC_STATUS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INC_ROLE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INC_DESCRIPTION` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`INC_ID`, `INC_NAME`, `INC_CATEGORY`, `INC_PRIORITIZATION`, `INC_LEVEL`, `INC_STATUS`, `INC_ROLE`, `INC_DESCRIPTION`) VALUES
(2, 'jhsdbhs', 'Fire', 'Very High', 'High', '', 'Problem Manager', ''),
(3, 'u duf idu', 'Flood', 'High', 'High', '', 'Change manager', '.sklnfdsj ns'),
(4, 'isdbui ', 'Flood', 'Medium', 'Medium', '', 'Incident manager', 'sdksk msdi msd'),
(5, 'u duf idu', 'Flood', 'High', 'High', '''1''', 'Change manager', '.sklnfdsj ns'),
(6, 'isdbui ', 'Flood', 'Medium', 'Medium', '''1''', 'Incident manager', 'sdksk msdi msd'),
(7, 'tralala', 'Fire', 'Low', 'High', '''1''', 'Problem manager', 'oiso msf hehe'),
(8, 'u duf idu', 'Flood', 'High', 'High', '''1''', 'Change manager', '.sklnfdsj'),
(10, 'sjdnf', 'Other', 'Low', 'Medium', '''1''', 'Problem manager', 'ldsn sui hsiu '),
(11, 'isdbui ', 'Flood', 'Medium', 'Medium', '''1''', 'Incident manager', 'sdksk msdi msd'),
(12, 'sjdnfkjs', 'Flood', 'Low', 'High', '0', 'Problem manager', 'oiso msf hahaa');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `ITE_ID` int(11) NOT NULL,
  `ITE_NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ITE_QUANTITY` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ITE_TYPE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `PRO_ID` int(11) NOT NULL,
  `PRO_NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRO_CATEGORY` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRO_PRIORITIZATION` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRO_LEVEL` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRO_STATUS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRO_ROLE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRO_DESCRIPTION` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRO_INCIDENT_IDS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`PRO_ID`, `PRO_NAME`, `PRO_CATEGORY`, `PRO_PRIORITIZATION`, `PRO_LEVEL`, `PRO_STATUS`, `PRO_ROLE`, `PRO_DESCRIPTION`, `PRO_INCIDENT_IDS`) VALUES
(2, 'jajsda', 'Flood', 'High', 'Low', '', '', '0', '0'),
(3, 'isdbui ', 'Flood', 'Medium', 'Medium', '', 'Incident manager', '0', '24'),
(4, 'isdbui ', 'Flood', 'Medium', 'Medium', '', 'Incident manager', '0', '34'),
(5, 'u duf idu', 'Flood', 'High', 'High', '', 'Change manager', '0', '23'),
(6, 'jhsdbhs', 'Fire', 'Very High', 'High', '', 'Problem Manager', '', '1'),
(10, 'jhsdbhs', 'Fire', 'Very High', 'High', '', 'Problem Manager', '', '2, 3, 4'),
(12, 'u duf idu', 'Flood', 'High', 'High', '', 'Change manager', '.sklnfdsj ns', '3, 4'),
(13, 'jhsdbhs', 'Fire', 'Very High', 'High', '', 'Problem Manager', '', '2, 4'),
(14, 'isdbui ', 'Flood', 'Medium', 'Medium', '', 'Incident manager', 'sdksk msdi msd', '4'),
(18, 'tralala', 'Fire', 'Low', 'High', '''1''', 'Problem manager', 'oiso msf hehe', '7, 8'),
(19, 'u duf idu', 'Flood', 'High', 'High', '''1''', 'Change manager', '.sklnfdsj', '8, 10, 11'),
(20, 'jhsdbhs', 'Fire', 'Very High', 'High', '', 'Problem Manager', '', '2, 3');

-- --------------------------------------------------------

--
-- Table structure for table `requested_services`
--

CREATE TABLE IF NOT EXISTS `requested_services` (
  `REQ_ID` int(11) NOT NULL,
  `REQ_USER_ID` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `REQ_SERVICE_ID` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `REQ_SERVICE_DESCRIPTION` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requested_services`
--

INSERT INTO `requested_services` (`REQ_ID`, `REQ_USER_ID`, `REQ_SERVICE_ID`, `REQ_SERVICE_DESCRIPTION`) VALUES
(5, '2', '1', 'sio nndi und');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `SER_ID` int(11) NOT NULL,
  `SER_NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SER_TYPE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`SER_ID`, `SER_NAME`, `SER_TYPE`) VALUES
(1, 'Additional Service', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `USE_ID` int(11) NOT NULL,
  `USE_FIRST_NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_LAST_NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_ADDRESS` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_CITY` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_COUNTRY` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_DOB` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_PHONE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_EMAIL` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_ROLE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_USERNAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_PASSWORD` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USE_ID`, `USE_FIRST_NAME`, `USE_LAST_NAME`, `USE_ADDRESS`, `USE_CITY`, `USE_COUNTRY`, `USE_DOB`, `USE_PHONE`, `USE_EMAIL`, `USE_ROLE`, `USE_USERNAME`, `USE_PASSWORD`) VALUES
(1, 'alen', 'garibovic', 'malta', 'sarajevo', 'bih', '1994-11-11', '8498489489', 'jnsjcdsc@hdbfhs.com', 'Incident manager', 'nedim', '52224e1bbc107c098227f8cd078aa052f4316df8'),
(2, 'Mujo', 'Mujic', 'Alipasina 5', 'Zenica', 'BiH', '1985-08-21', '06359862', 'mujo@gmail.com', 'Customer', 'mujo', '2ba7f175ad97cd3cfb46647b9e57fba524c6bd31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EVE_ID`);

--
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`INC_ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ITE_ID`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`PRO_ID`);

--
-- Indexes for table `requested_services`
--
ALTER TABLE `requested_services`
  ADD PRIMARY KEY (`REQ_ID`), ADD UNIQUE KEY `REQ_ID` (`REQ_ID`), ADD UNIQUE KEY `REQ_USER_ID` (`REQ_USER_ID`), ADD UNIQUE KEY `REQ_SERVICE_ID` (`REQ_SERVICE_ID`), ADD KEY `REQ_ID_2` (`REQ_ID`), ADD KEY `REQ_SERVICE_ID_2` (`REQ_SERVICE_ID`), ADD KEY `REQ_USER_ID_2` (`REQ_USER_ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`SER_ID`), ADD UNIQUE KEY `SER_ID_2` (`SER_ID`), ADD UNIQUE KEY `SER_NAME` (`SER_NAME`), ADD KEY `SER_ID` (`SER_ID`), ADD KEY `SER_ID_3` (`SER_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USE_ID`), ADD UNIQUE KEY `USE_USERNAME` (`USE_USERNAME`), ADD UNIQUE KEY `USE_EMAIL` (`USE_EMAIL`), ADD UNIQUE KEY `USE_ID` (`USE_ID`), ADD KEY `USE_ID_2` (`USE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EVE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `incidents`
--
ALTER TABLE `incidents`
  MODIFY `INC_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ITE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `PRO_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `requested_services`
--
ALTER TABLE `requested_services`
  MODIFY `REQ_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `SER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `USE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
