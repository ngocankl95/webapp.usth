-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 10:33 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(282, 1479458593, '::1', 'MDP677Oa'),
(283, 1479458670, '::1', 'VRIhhjnc'),
(274, 1478957628, '::1', 'dmKbWZkw'),
(273, 1478957499, '::1', '9m1DvppG'),
(272, 1478957436, '::1', 'w2jtnhHi'),
(271, 1478957261, '::1', 'V6OkMHXD'),
(281, 1479037714, '127.0.0.1', 'du1FFVa7'),
(280, 1478958196, '::1', 'Xe3XZr9q'),
(279, 1478957867, '::1', 'Uk7uCKJr'),
(278, 1478957864, '::1', 'zYn5hpfd'),
(277, 1478957755, '::1', 'C2XDckvn'),
(276, 1478957752, '::1', 'zyOiHsow'),
(275, 1478957631, '::1', 'Zz2tRgCh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(225) CHARACTER SET utf8 NOT NULL,
  `title` varchar(50) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `salt` varchar(50) CHARACTER SET utf8 NOT NULL,
  `activationkey` varchar(45) NOT NULL,
  `accountactive` bit(1) NOT NULL DEFAULT b'0',
  `accountblocked` bit(1) NOT NULL DEFAULT b'0',
  `userlvl` bit(1) NOT NULL DEFAULT b'0',
  `profileprivacy` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `registereddate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstname`, `lastname`, `email`, `title`, `username`, `password`, `country`, `address`, `gender`, `salt`, `activationkey`, `accountactive`, `accountblocked`, `userlvl`, `profileprivacy`, `registereddate`) VALUES
(35, 'Nam', 'Tran Ngoc', 'tranngocnam0405@gmail.com', 'PhD', 'tranngocnam', 'f4962b43a9cd843dce8e73a8f557829c4890f0b8', 'Vietnam', '5 Tran Phu', 'Male', '5MY1qvIf30FCmyt02ObFXDmIezXqIyz2VloCdvpUe83V2xuR9J', '', b'1', b'0', b'0', NULL, '2016-11-12'),
(36, 'An', 'Ngoc', 'ngocan.4595@gmail.com', 'Professor', 'ngocankl95', '3bafed66e1e7e35b314a021325595e62309ec554', 'Vietnam', '1 Hung Vuong', 'Male', '/Sx/cRjVmTB1awjF+/hWqw5oNHkTu12LVfLeFTCXE5GPa+Ezkx', '', b'1', b'0', b'1', NULL, '2016-11-12'),
(37, 'Bob', 'Pep', 'pepbob01@gmail.com', 'Master', 'pepbob', '28e897674d0ea4b835a7060ce3fa5fdc523544a8', 'Brunei', '35 Nguyen Trai', 'Female', 'NxsgIbCzX+4Hwy08ZJlYx2lczme8TY2257DdKYpNXnu+yaKUUk', '', b'1', b'0', b'0', NULL, '2016-11-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
