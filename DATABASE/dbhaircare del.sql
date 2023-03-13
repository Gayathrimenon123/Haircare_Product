-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2021 at 06:23 AM
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
-- Table structure for table `tbl_brand`
--

CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`bid`, `brand`, `status`) VALUES
(1, 'Loreal', '1'),
(2, 'Himalaya', '1'),
(3, 'Dhathri', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_card`
--

CREATE TABLE IF NOT EXISTS `tbl_card` (
  `cardid` int(11) NOT NULL AUTO_INCREMENT,
  `cardno` bigint(20) NOT NULL,
  `cardname` varchar(30) NOT NULL,
  `expiry` date NOT NULL,
  `cardtype` varchar(30) NOT NULL,
  `custid` int(11) NOT NULL,
  PRIMARY KEY (`cardid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_card`
--

INSERT INTO `tbl_card` (`cardid`, `cardno`, `cardname`, `expiry`, `cardtype`, `custid`) VALUES
(1, 4565555555, 'cera jo', '2021-10-29', 'debit card', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cname`, `status`) VALUES
(1, 'Shampoo', 1),
(2, 'Hair oil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cchild`
--

CREATE TABLE IF NOT EXISTS `tbl_cchild` (
  `cchildid` int(11) NOT NULL AUTO_INCREMENT,
  `cmasterid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `odate` date NOT NULL,
  `custid` int(11) NOT NULL,
  `cstatus` varchar(30) NOT NULL,
  PRIMARY KEY (`cchildid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_cchild`
--

INSERT INTO `tbl_cchild` (`cchildid`, `cmasterid`, `itemid`, `qty`, `totalprice`, `odate`, `custid`, `cstatus`) VALUES
(37, 68, 2, 2, 600, '2021-11-19', 1, 'Order Placed'),
(38, 68, 1, 1, 700, '2021-11-19', 1, 'Order Placed'),
(39, 69, 6, 1, 20000, '2021-11-19', 1, 'Cancelled, Refunded'),
(40, 70, 1, 2, 1400, '2021-11-20', 1, 'Order Placed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cmaster`
--

CREATE TABLE IF NOT EXISTS `tbl_cmaster` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `tbl_cmaster`
--

INSERT INTO `tbl_cmaster` (`orderid`, `custid`, `totalprice`, `status`) VALUES
(68, 1, 1300, 'Order Placed'),
(69, 1, 0, 'Order Cancelled'),
(70, 1, 1400, 'Order Placed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `housename` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `state` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `fname`, `lname`, `phone`, `housename`, `city`, `district`, `pincode`, `state`, `email`, `status`, `date`) VALUES
(1, 'cera', 'joy', '8080808980', 'aynikkal', 'koratty', 'Thrissur', 679789, 'kerala', 'cera@gmail.com', '1', '0000-00-00'),
(3, 'gopika', 'OD', '7897898909', 'aynikkal', 'thrissur', 'Thrissur', 679789, 'mala', 'gopika@gmail.com', '1', '0000-00-00'),
(4, 'jo ', 'jose', '8080808080', 'rosevilla', 'thrissur', 'Thrissur', 680, 'kerala', 'jo@gmail.com', '0', '0000-00-00'),
(6, 'Jeena', 'Jintu', '9879879879', 'rose villa', 'mala', 'Thrissur', 678789, 'kerala', 'jeena@gmail.com', '1', '2021-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(8, 'cera@gmail.com', 'cera@123', 'Customer'),
(9, 'sam@gmail.com', 'sam@123', 'Staff'),
(13, 'gopika@gmail.com', 'gopika@123', 'Customer'),
(14, 'jo@gmail.com', 'jo@1234', 'Customer'),
(15, 'delna@gmail.com', 'Jesus@252525', 'Customer'),
(16, 'tom@gmail.com', 'tom@123', 'Staff'),
(17, 'jeena@gmail.com', 'jeena@123', 'Customer'),
(18, 'sandra@gmail.com', 'sandra@123', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `cmasterid` int(11) NOT NULL,
  `odate` date NOT NULL,
  `ostatus` varchar(30) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`oid`, `cmasterid`, `odate`, `ostatus`) VALUES
(5, 68, '2021-11-19', 'paid'),
(6, 69, '2021-11-19', 'paid'),
(7, 70, '2021-11-20', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) NOT NULL,
  `orderid` int(50) NOT NULL,
  `cardid` int(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `custid`, `orderid`, `cardid`, `cvv`, `amount`, `status`, `pdate`) VALUES
(5, 1, 5, 1, '888', '1300', 'paid', '2021-11-19'),
(6, 1, 6, 1, '888', '0', 'paid', '2021-11-19'),
(7, 1, 7, 1, '999', '1400', 'paid', '2021-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `itemimage` varchar(100) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `stock` int(12) NOT NULL,
  `status` int(11) NOT NULL,
  `scat` varchar(40) NOT NULL,
  `starvalue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `pname`, `cat`, `description`, `itemimage`, `rate`, `stock`, `status`, `scat`, `starvalue`) VALUES
(1, 'Loreal', '1', 'quality product', '../images/shampo.jpg', '700', 57, 1, '1', 4),
(2, 'Himalaya', '1', 'quality', '../images/h1.jpg', '300', 76, 1, '1', 3),
(3, 'Himalaya', '1', 'qulity with quantity', '../images/h1.jpg', '200', 50, 1, '2', 4),
(4, 'Loreal', '1', 'nbjjh', '../images/bg.jpg', '200', 30, 1, '1', 1),
(5, 'Himalaya', '1', 'nkk', '../images/dar.jpg', '20000', 30, 1, '1', 2),
(6, 'Himalaya', '1', 'bjj', '../images/bg2.jpg', '20000', 10, 1, '2', 2),
(7, 'Dhathri', '2', 'For Hair growth', '../images/hairoil.jpg', '350', 150, 1, '3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchasechild`
--

CREATE TABLE IF NOT EXISTS `tbl_purchasechild` (
  `pchildid` int(11) NOT NULL AUTO_INCREMENT,
  `pmasterid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `costprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`pchildid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_purchasechild`
--

INSERT INTO `tbl_purchasechild` (`pchildid`, `pmasterid`, `itemid`, `costprice`, `quantity`, `totalprice`, `date`) VALUES
(11, 8, 7, 350, 50, 17500, '2021-11-19'),
(12, 9, 0, 280, 69, 19320, '2021-11-19'),
(13, 9, 7, 280, 40, 11200, '2021-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchasemaster`
--

CREATE TABLE IF NOT EXISTS `tbl_purchasemaster` (
  `pmasterid` int(11) NOT NULL AUTO_INCREMENT,
  `supid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `totalamt` int(11) NOT NULL,
  PRIMARY KEY (`pmasterid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_purchasemaster`
--

INSERT INTO `tbl_purchasemaster` (`pmasterid`, `supid`, `staffid`, `totalamt`) VALUES
(8, 1, 2, 350),
(9, 1, 1, 560);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_remark`
--

CREATE TABLE IF NOT EXISTS `tbl_remark` (
  `remarkid` int(11) NOT NULL AUTO_INCREMENT,
  `cchildid` int(11) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`remarkid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_remark`
--

INSERT INTO `tbl_remark` (`remarkid`, `cchildid`, `remarks`) VALUES
(6, 39, 'worthless');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `houseno` int(11) NOT NULL,
  `street` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`sid`, `fname`, `lname`, `phone`, `houseno`, `street`, `district`, `pincode`, `email`, `status`, `date`) VALUES
(1, 'Sam', 'Tom', '8908908908', 314, 'rosevilla', 'thrissur', 679777, 'sam@gmail.com', '1', '0000-00-00'),
(2, 'Admin', '', '9090808090', 879, 'Mala', 'Thrissur', 679789, 'admin@gmail.com', '1', '0000-00-00'),
(3, 'Tom', 'joy', '8989898989', 876, 'abc villa', 'idukki', 678789, 'tom@gmail.com', '1', '0000-00-00'),
(4, 'Sandra', 'joy', '8787989898', 567, 'menaka', 'ernakulam', 897897, 'sandra@gmail.com', '1', '2021-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcat`
--

CREATE TABLE IF NOT EXISTS `tbl_subcat` (
  `scid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`scid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_subcat`
--

INSERT INTO `tbl_subcat` (`scid`, `catid`, `category`, `status`) VALUES
(1, '1', 'Anti-breakage shampoo1', '1'),
(2, '1', 'purifying shampoo', '1'),
(3, '2', 'hair growth oil', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `sup_id` int(11) NOT NULL AUTO_INCREMENT,
  `staffid` varchar(30) NOT NULL,
  `supname` varchar(30) NOT NULL,
  `supphone` bigint(12) NOT NULL,
  `supemail` varchar(30) NOT NULL,
  `supcity` varchar(30) NOT NULL,
  `supdistrict` varchar(30) NOT NULL,
  `suppincode` int(11) NOT NULL,
  `supstate` varchar(30) NOT NULL,
  `supstatus` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`sup_id`, `staffid`, `supname`, `supphone`, `supemail`, `supcity`, `supdistrict`, `suppincode`, `supstate`, `supstatus`, `date`) VALUES
(1, '1', 'sera joseph', 8080809080, 'sera@gmail.com', 'thrissur', 'thrissur', 679700, 'mala', 1, '0000-00-00'),
(2, '2', 'Jis Joy', 9898978909, 'jis@gmail.com', 'Aluva', 'ernakulam', 680741, 'kerala', 1, '0000-00-00'),
(3, '2', 'Akhil pp', 8798999999, 'akhil@gmail.com', 'Thrissur', 'Thrissur', 678999, 'kerala', 1, '0000-00-00'),
(6, '2', 'bibi joy', 8988888888, 'bibi@gmail.com', 'mannar', 'palakkad', 678888, 'kerala', 1, '0000-00-00'),
(7, '2', 'Irin jo', 8987698989, 'irin@gmail.com', 'thrissur', 'thrissur', 678789, 'kerala', 1, '2021-11-19');
