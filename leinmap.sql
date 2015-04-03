-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2015 at 01:00 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leinmap`
--
CREATE DATABASE IF NOT EXISTS `leinmap` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `leinmap`;

-- --------------------------------------------------------

--
-- Table structure for table `detail_project`
--

CREATE TABLE IF NOT EXISTS `detail_project` (
  `detailprojectid` int(11) NOT NULL AUTO_INCREMENT,
  `projectid` int(11) NOT NULL,
  `usersid` int(11) NOT NULL,
  PRIMARY KEY (`detailprojectid`),
  KEY `fk_projectid` (`projectid`),
  KEY `fk_users` (`usersid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `detail_project`
--

INSERT INTO `detail_project` (`detailprojectid`, `projectid`, `usersid`) VALUES
(1, 20, 13),
(6, 18, 12);

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE IF NOT EXISTS `finance` (
  `financeid` int(11) NOT NULL AUTO_INCREMENT,
  `datefinance` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `info` text,
  PRIMARY KEY (`financeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `invoiceid` int(11) NOT NULL AUTO_INCREMENT,
  `nomorinvoice` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `projectid` int(11) NOT NULL,
  PRIMARY KEY (`invoiceid`),
  KEY `fk_invoiceid` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logevent`
--

CREATE TABLE IF NOT EXISTS `logevent` (
  `logeventid` int(11) NOT NULL AUTO_INCREMENT,
  `logdate` datetime NOT NULL,
  `usersid` int(11) NOT NULL,
  `log` text NOT NULL,
  PRIMARY KEY (`logeventid`),
  KEY `fk_users` (`usersid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `projectid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `datebegin` date NOT NULL,
  `dateend` date NOT NULL,
  `period` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `po` varchar(100) NOT NULL,
  `isdone` varchar(12) NOT NULL,
  PRIMARY KEY (`projectid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectid`, `name`, `datebegin`, `dateend`, `period`, `price`, `po`, `isdone`) VALUES
(18, 'bdv', '2015-04-01', '2015-04-11', 10, 2000000, 'iwan', 'Done'),
(19, 'Tboot', '2015-04-03', '2015-04-17', 14, 5000000, 'iwan', 'On Progress'),
(20, 'vote hunter', '2015-04-04', '2015-04-18', 14, 10000000, 'Budi', 'On Progress');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE IF NOT EXISTS `usergroup` (
  `usergroupid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`usergroupid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`usergroupid`, `name`, `description`) VALUES
(1, 'leinmap', ''),
(2, 'admin', 'Admin'),
(3, 'marketing', 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `usersid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `usergroupid` int(11) NOT NULL,
  PRIMARY KEY (`usersid`),
  KEY `fk_usergroup` (`usergroupid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersid`, `username`, `password`, `name`, `address`, `email`, `phone`, `status`, `usergroupid`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'iwan', 'Bandung', 'im_ridwannuloh@yahoo.com', '088218038976', 'Available', 1),
(3, 'ujang', 'ujang', 'ujang gardu', 'Lembang', 'ujang@yahoo.com', '123456789', 'Not Available', 1),
(12, 'hibishi', 'iwan', 'asep', 'iwan', 'iwaniwan', '12307', 'Available', 2),
(13, 'thesayder', 'e10adc3949ba59abbe56e057f20f883e', 'Budi', 'Cianjur', 'budicianjur@yahoo.com', '02291280625', 'Available', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_project`
--
ALTER TABLE `detail_project`
  ADD CONSTRAINT `detail_project_ibfk_1` FOREIGN KEY (`projectid`) REFERENCES `project` (`projectid`),
  ADD CONSTRAINT `detail_project_ibfk_2` FOREIGN KEY (`usersid`) REFERENCES `users` (`usersid`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`projectid`) REFERENCES `project` (`projectid`);

--
-- Constraints for table `logevent`
--
ALTER TABLE `logevent`
  ADD CONSTRAINT `logevent_ibfk_1` FOREIGN KEY (`usersid`) REFERENCES `users` (`usersid`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`usergroupid`) REFERENCES `usergroup` (`usergroupid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
