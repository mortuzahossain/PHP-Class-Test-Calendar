-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2017 at 07:52 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctroutine`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct1`
--

CREATE TABLE IF NOT EXISTS `ct1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(1000) NOT NULL,
  `coursename` text NOT NULL,
  `examdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ct1`
--

INSERT INTO `ct1` (`id`, `coursecode`, `coursename`, `examdate`) VALUES
(1, 'sdbkjvbkjb', 'themewp', '2017-08-09'),
(2, 'EEE3112', 'Measurement And Instrumentation	Sessonal', '2017-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `ct2`
--

CREATE TABLE IF NOT EXISTS `ct2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(1000) NOT NULL,
  `coursename` text NOT NULL,
  `examdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ct3`
--

CREATE TABLE IF NOT EXISTS `ct3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(1000) NOT NULL,
  `coursename` text NOT NULL,
  `examdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ct4`
--

CREATE TABLE IF NOT EXISTS `ct4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(1000) NOT NULL,
  `coursename` text NOT NULL,
  `examdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
