-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2015 at 03:28 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leinmap`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `detail_project`
--

INSERT INTO `detail_project` (`detailprojectid`, `projectid`, `usersid`) VALUES
(12, 22, 12),
(13, 22, 14),
(14, 23, 14),
(15, 23, 15);

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE IF NOT EXISTS `finance` (
  `financeid` int(11) NOT NULL AUTO_INCREMENT,
  `datefinance` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `nominal` int(11) NOT NULL,
  `info` text,
  PRIMARY KEY (`financeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`financeid`, `datefinance`, `status`, `nominal`, `info`) VALUES
(4, '2015-04-20', 'Spent', 50000, 'meuli tahu sumedang'),
(5, '2015-04-19', 'Income', 150000000, 'Hadiah Pak Rektor'),
(7, '2015-04-25', 'Spent', 1500000, 'buat video'),
(11, '2015-04-27', 'Income', 15000000, 'Project paket');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceid`, `nomorinvoice`, `date`, `projectid`) VALUES
(1, '123', '2015-04-12', 22),
(2, '312', '2015-04-24', 23);

-- --------------------------------------------------------

--
-- Table structure for table `item_project`
--

CREATE TABLE IF NOT EXISTS `item_project` (
  `itemprojectid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `qtylabel` varchar(35) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `totalprice` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  PRIMARY KEY (`itemprojectid`),
  KEY `fk_itemproject` (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logevent`
--

CREATE TABLE IF NOT EXISTS `logevent` (
  `logeventid` int(11) NOT NULL AUTO_INCREMENT,
  `logdate` datetime NOT NULL,
  `usersid` int(11) NOT NULL,
  `ipaddress` varchar(25) NOT NULL,
  `log` text NOT NULL,
  PRIMARY KEY (`logeventid`),
  KEY `fk_users` (`usersid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `logevent`
--

INSERT INTO `logevent` (`logeventid`, `logdate`, `usersid`, `ipaddress`, `log`) VALUES
(1, '2015-04-21 23:16:50', 13, '::1', 'Insert Finance'),
(2, '2015-04-21 23:19:29', 13, '::1', 'Insert Finance'),
(3, '2015-04-25 23:31:10', 1, '::1', 'Insert Finance'),
(4, '2015-04-25 23:59:00', 1, '::1', 'Insert Finance'),
(5, '2015-04-25 23:59:24', 1, '::1', 'Insert Finance'),
(6, '2015-04-26 00:00:40', 1, '::1', 'Insert Finance'),
(7, '2015-04-26 00:01:33', 1, '::1', 'Insert Finance'),
(8, '2015-04-27 20:40:11', 1, '::1', 'Insert Finance'),
(9, '2015-04-27 20:40:33', 1, '::1', 'Insert Finance'),
(10, '2015-04-27 20:58:56', 1, '::1', 'Insert Finance'),
(11, '2015-04-27 21:19:05', 1, '::1', 'Insert Finance'),
(12, '2015-04-27 21:23:22', 1, '::1', 'Insert Finance'),
(13, '2015-04-27 21:36:26', 1, '::1', 'Update Finance'),
(14, '2015-04-27 21:36:40', 1, '::1', 'Update Finance'),
(15, '2015-04-27 21:36:52', 1, '::1', 'Update Finance'),
(16, '2015-04-27 22:01:41', 1, '::1', 'Delete Finance'),
(17, '2015-04-27 22:01:46', 1, '::1', 'Delete Finance'),
(18, '2015-04-27 22:01:57', 1, '::1', 'Delete Finance'),
(19, '2015-04-27 22:02:02', 1, '::1', 'Delete Finance'),
(20, '2015-04-27 22:02:09', 1, '::1', 'Delete Finance'),
(21, '2015-04-27 22:02:14', 1, '::1', 'Delete Finance'),
(22, '2015-04-27 22:02:22', 1, '::1', 'Delete Finance'),
(23, '2015-04-27 22:02:26', 1, '::1', 'Delete Finance'),
(24, '2015-04-27 22:05:27', 1, '::1', 'Update Finance Project paket'),
(25, '2015-04-27 22:16:41', 1, '::1', 'Insert Finance1'),
(26, '2015-04-27 22:17:53', 1, '::1', 'Insert Projecta'),
(27, '2015-04-27 22:18:22', 1, '::1', 'Delete Finance'),
(28, '2015-04-27 22:18:51', 1, '::1', 'Delete Finance'),
(29, '2015-04-27 22:23:32', 1, '::1', 'Delete Finance'),
(30, '2015-04-27 22:25:58', 1, '::1', 'Delete Project');

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
  `client` varchar(120) NOT NULL,
  `isdone` varchar(12) NOT NULL,
  PRIMARY KEY (`projectid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectid`, `name`, `datebegin`, `dateend`, `period`, `price`, `po`, `client`, `isdone`) VALUES
(22, 'BDV', '2015-04-12', '2015-04-30', 18, 200000000, 'Leinmap Corp', 'A', 'Done'),
(23, 'JDV', '2015-04-14', '2015-04-29', 15, 200000000, 'Leinmap Corp', 'B', 'Done');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersid`, `username`, `password`, `name`, `address`, `email`, `phone`, `status`, `usergroupid`) VALUES
(1, 'leinmap', '2f887188c2cecfba420f38bff3a2bd0a', 'Leinmap Corp', 'Bandung', '', '', 'Available', 1),
(12, 'hibishi', '01ccce480c60fcdb67b54f4509ffdb56', 'asep', 'iwan', 'iwaniwan', '12307', 'Available', 2),
(13, 'thesayder', 'e10adc3949ba59abbe56e057f20f883e', 'Budi', 'Cianjur', 'budicianjur@yahoo.com', '02291280625', 'Available', 2),
(14, 'alpha', '2c1743a391305fbf367df8e4f069f9f9', 'Alpha Centaury', 'Centaury', '', '', 'Available', 2),
(15, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'iwan', 'Bandung', 'im_ridwannuloh@yahoo.com', '088218038976', 'Available', 2);

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
-- Constraints for table `item_project`
--
ALTER TABLE `item_project`
  ADD CONSTRAINT `item_project_ibfk_1` FOREIGN KEY (`projectid`) REFERENCES `project` (`projectid`);

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
