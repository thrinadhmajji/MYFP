-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 08:50 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `myfp`
--
CREATE DATABASE IF NOT EXISTS `myfp` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `myfp`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(6) NOT NULL,
  `a_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(30) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(16) COLLATE utf8_bin NOT NULL,
  `a_phonenumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`, `a_phonenumber`) VALUES
(1, 'thrinadh', 'myfp@gmail.com', 'myfp', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `submittedrequests`
--

CREATE TABLE `submittedrequests` (
  `r_id` int(6) NOT NULL,
  `r_info` varchar(30) COLLATE utf8_bin NOT NULL,
  `r_description` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `r_address` varchar(30) COLLATE utf8_bin NOT NULL,
  `r_village` varchar(20) COLLATE utf8_bin NOT NULL,
  `r_mandal` varchar(20) COLLATE utf8_bin NOT NULL,
  `r_email` varchar(40) COLLATE utf8_bin NOT NULL,
  `r_mobile` int(10) NOT NULL,
  `r_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submittedrequests`
--

INSERT INTO `submittedrequests` (`r_id`, `r_info`, `r_description`, `r_name`, `r_address`, `r_village`, `r_mandal`, `r_email`, `r_mobile`, `r_date`) VALUES
(2, 'electrical', 'fan not working ', 'thrinadh', '1-124,JAMMADEVIPETA.', 'Jammadevipeta', 'V Madugula', 'thrinadh.majji@gmail', 2147483647, '2020-03-20'),
(3, 'emo', 'not working ', 'majji', '1-124,JAMMADEVIPETA.', 'Jammadevipeta', 'V Madugula', 'thrinadh.majji@gmail', 2147483647, '2020-03-16'),
(4, 'd', 'klkkklkl', 'thr', '1-124,JAMMADEVIPETA.', 'Jammadevipeta', 'V Madugula', 'thrinadh.majji@gmail.com', 2147483647, '2020-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(6) NOT NULL,
  `u_fname` varchar(15) COLLATE utf8_bin NOT NULL,
  `u_lname` varchar(15) COLLATE utf8_bin NOT NULL,
  `u_phonenumber` int(10) NOT NULL,
  `u_email` varchar(30) COLLATE utf8_bin NOT NULL,
  `u_password` varchar(16) COLLATE utf8_bin NOT NULL,
  `u_address` varchar(60) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `u_fname`, `u_lname`, `u_phonenumber`, `u_email`, `u_password`, `u_address`) VALUES
(28, 'thrinadh', 'majji', 2147483647, 'thrinadh.majji@gmail.com', 'nanna', 'akka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `submittedrequests`
--
ALTER TABLE `submittedrequests`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submittedrequests`
--
ALTER TABLE `submittedrequests`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
