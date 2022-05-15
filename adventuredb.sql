-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2006 at 01:51 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `female_couple`
--

CREATE TABLE IF NOT EXISTS `female_couple` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `regid` int(10) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `add` varchar(300) NOT NULL,
  `tel` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `inst` varchar(100) NOT NULL,
  `study` varchar(100) NOT NULL,
  `level` int(10) NOT NULL,
  `comskill` varchar(100) NOT NULL,
  `travelb4` varchar(100) NOT NULL,
  `exb4` varchar(100) NOT NULL,
  `entskill` varchar(300) NOT NULL,
  `phobia` varchar(300) NOT NULL,
  `wherego` varchar(100) NOT NULL,
  `know` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `regno` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `female_couple`
--


-- --------------------------------------------------------

--
-- Table structure for table `male_couple`
--

CREATE TABLE IF NOT EXISTS `male_couple` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `add` varchar(300) NOT NULL,
  `tel` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `inst` varchar(100) NOT NULL,
  `study` varchar(100) NOT NULL,
  `level` int(10) NOT NULL,
  `comskill` varchar(100) NOT NULL,
  `travelb4` varchar(100) NOT NULL,
  `exb4` varchar(100) NOT NULL,
  `entskill` varchar(300) NOT NULL,
  `phobia` varchar(300) NOT NULL,
  `wherego` varchar(100) NOT NULL,
  `know` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `regno` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `male_couple`
--


-- --------------------------------------------------------

--
-- Table structure for table `single_registration`
--

CREATE TABLE IF NOT EXISTS `single_registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `add` varchar(300) NOT NULL,
  `tel` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `inst` varchar(100) NOT NULL,
  `study` varchar(100) NOT NULL,
  `level` int(10) NOT NULL,
  `comskill` varchar(100) NOT NULL,
  `travelb4` varchar(100) NOT NULL,
  `exb4` varchar(100) NOT NULL,
  `entskill` varchar(300) NOT NULL,
  `phobia` varchar(300) NOT NULL,
  `wherego` varchar(100) NOT NULL,
  `know` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `regno` text NOT NULL,
  `photo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `single_registration`
--

