-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2021 at 04:31 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbhaircare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_remark`
--

CREATE TABLE IF NOT EXISTS `tbl_remark` (
  `remarkid` int(11) NOT NULL AUTO_INCREMENT,
  `cchildid` int(11) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`remarkid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_remark`
--

