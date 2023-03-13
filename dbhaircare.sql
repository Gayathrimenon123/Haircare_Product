-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2021 at 09:58 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`bid`, `brand`, `status`) VALUES
(1, 'Loreal', '1'),
(2, 'Himalaya', '1');

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
(2, 'hair oil', 1);

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
  `date` date NOT NULL,
  `custid` int(11) NOT NULL,
  PRIMARY KEY (`cchildid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_cchild`
--

INSERT INTO `tbl_cchild` (`cchildid`, `cmasterid`, `itemid`, `qty`, `totalprice`, `date`, `custid`) VALUES
(1, 1, 3, 1, 200, '2021-09-17', 1),
(2, 1, 1, 1, 700, '2021-09-17', 1),
(3, 3, 2, 1, 300, '2021-09-19', 1),
(4, 4, 1, 1, 700, '2021-09-23', 1),
(5, 4, 3, 1, 200, '2021-09-23', 1),
(6, 5, 1, 1, 700, '2021-09-23', 1),
(8, 7, 2, 2, 600, '2021-09-24', 2),
(9, 8, 2, 12, 3600, '2021-09-28', 2),
(10, 9, 1, 1, 700, '2021-09-28', 2),
(11, 11, 3, 14, 2800, '2021-09-29', 2),
(12, 12, 1, 2, 1400, '2021-09-29', 2),
(15, 15, 1, 1, 700, '2021-09-30', 2),
(16, 16, 1, 2, 1400, '2021-10-06', 2),
(17, 16, 3, 2, 400, '2021-10-06', 2),
(18, 17, 1, 4, 2800, '2021-10-08', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_cmaster`
--

INSERT INTO `tbl_cmaster` (`orderid`, `custid`, `totalprice`, `status`) VALUES
(1, 1, 900, 'delivered'),
(2, 1, 0, 'added'),
(3, 1, 300, 'added'),
(4, 1, 900, 'delivered'),
(5, 1, 700, 'added'),
(6, 1, 600, 'added'),
(7, 2, 600, 'added'),
(8, 2, 3600, 'added'),
(9, 2, 700, 'paid'),
(10, 2, 0, 'added'),
(11, 2, 2800, 'added'),
(12, 2, 1400, 'paid'),
(13, 2, 700, 'added'),
(14, 2, 300, 'added'),
(15, 2, 700, 'paid'),
(16, 2, 1800, 'added'),
(17, 5, 2800, 'paid'),
(18, 2, 1800, 'added'),
(19, 2, 0, 'added'),
(20, 2, 1400, 'added'),
(21, 2, 0, 'added');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `fname`, `lname`, `phone`, `housename`, `city`, `district`, `pincode`, `state`, `email`, `status`) VALUES
(1, 'cera', 'joy', '8080808080', 'aynikkal', 'thrissur', 'Thrissur', 679789, 'mala', 'cera@gmail.com', '1'),
(2, 'anusree', 'manoj', '234567891', 'eee', 'kochi', 'ernakulam', 682034, 'kerala', 'anusreemanoj@gmail.com', '1'),
(3, 'ashwin', 'sankar', '3456', 'dd', 'kochi', 'ernakulam', 64320, 'kerala', 'aswin@gmail.com', '-1'),
(5, 'Anju', 'jo', '8989898977', 'abc villa', 'mala', 'thrissur', 777, 'kerala', 'anju@gmail.com', '1'),
(6, 'Irin ', 'jo', '8887777777', 'rosevilla', 'mala', 'thrissur', 888, 'kerala', 'irin@gmail.com', '1'),
(7, 'jo', 'jose', '9090909090', 'jovilla', 'mala', 'thrissur', 777, 'kerala', 'jo@gmail.com', '1'),
(8, 'ash', 'r', '9128456910', 'sss', 'kochi', 'ernakulam', 123034, 'kerala', 'ash@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_feedback`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(8, 'cera@gmail.com', 'cera@123', 'Customer'),
(9, 'sam@gmail.com', 'sam@123', 'Staff'),
(10, 'neena@gmail.com', '1234', 'Customer'),
(11, 'nehajoe@gmail.com', 'nehajoe', 'Staff'),
(12, 'anusreemanoj@gmail.com', 'anusree', 'Customer'),
(13, 'neena@gmail.com', 'neena', 'Staff'),
(14, 'aswin@gmail.com', 'aswin', 'Customer'),
(15, 'krish@gmail.com', 'krish', 'Customer'),
(16, 'anju@gmail.com', 'anju@123', 'Customer'),
(17, 'irin@gmail.com', 'irin@123', 'Customer'),
(18, 'jo@gmail.com', 'jo@123', 'Customer'),
(19, 'ash@gmail.com', 'ash', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `productid` int(50) NOT NULL,
  `custid` int(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `reqdate` date NOT NULL,
  `totalprice` varchar(50) NOT NULL,
  `odate` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productid`, `custid`, `qty`, `reqdate`, `totalprice`, `odate`, `status`) VALUES
(1, 3, 1, 1, '0000-00-00', '200', '2021-09-17', 'paid'),
(2, 1, 1, 1, '0000-00-00', '700', '2021-09-17', 'paid'),
(3, 2, 1, 1, '0000-00-00', '300', '2021-09-19', 'paid'),
(4, 1, 1, 1, '0000-00-00', '700', '2021-09-23', 'paid'),
(5, 3, 1, 1, '0000-00-00', '200', '2021-09-23', 'paid'),
(6, 1, 1, 1, '0000-00-00', '700', '2021-09-23', 'paid'),
(7, 2, 1, 2, '0000-00-00', '600', '2021-09-19', 'paid'),
(8, 2, 2, 2, '0000-00-00', '600', '2021-09-24', 'paid'),
(9, 2, 2, 12, '0000-00-00', '3600', '2021-09-28', 'paid'),
(10, 1, 2, 1, '0000-00-00', '700', '2021-09-28', 'paid'),
(11, 3, 2, 14, '0000-00-00', '2800', '2021-09-29', 'paid'),
(12, 1, 2, 2, '0000-00-00', '1400', '2021-09-29', 'paid'),
(13, 1, 2, 1, '0000-00-00', '700', '2021-09-30', 'paid'),
(14, 2, 2, 1, '0000-00-00', '300', '2021-10-01', 'paid'),
(15, 1, 2, 1, '0000-00-00', '700', '2021-09-30', 'paid'),
(16, 1, 2, 2, '0000-00-00', '1400', '2021-10-06', 'paid'),
(17, 3, 2, 2, '0000-00-00', '400', '2021-10-06', 'paid'),
(18, 1, 5, 4, '0000-00-00', '2800', '2021-10-08', 'paid'),
(19, 1, 2, 2, '0000-00-00', '1400', '2021-10-09', 'ordered'),
(20, 3, 2, 2, '0000-00-00', '400', '2021-10-09', 'ordered'),
(21, 1, 2, 2, '0000-00-00', '1400', '2021-10-09', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) NOT NULL,
  `orderid` int(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cnumber` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `expm` varchar(50) NOT NULL,
  `expy` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `custid`, `orderid`, `cname`, `cnumber`, `cvv`, `amount`, `expm`, `expy`, `status`, `pdate`) VALUES
(1, 1, 1, '', '4444 4444 4444 4444', '444', '900', '09', '21', 'paid', '2021-09-17'),
(2, 1, 4, '', '6666 6666 6666 6666', '666', '900', '10', '21', 'paid', '2021-09-18'),
(3, 2, 12, '', '1234 5678 ', '123', '1400', '07', '21', 'paid', '2021-09-28'),
(4, 2, 9, 'sam', '1234567891238765', '876', '700', '01', '21', 'paid', '2021-09-29'),
(5, 2, 15, 'anusree', '2345678901234567', '789', '700', '01', '21', 'paid', '2021-09-29'),
(6, 5, 17, 'anju', '123456789012', '012', '2800', '01', '21', 'paid', '2021-10-07');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `pname`, `cat`, `description`, `itemimage`, `rate`, `stock`, `status`, `scat`, `starvalue`) VALUES
(1, 'Loreal', '1', 'quality product', '../images/shampo.jpg', '700', 30, 1, '1', 4),
(2, 'Himalaya', '1', 'quality', '../images/h1.jpg', '300', 52, -1, '1', 3),
(3, 'Himalaya', '1', 'qulity with quantity', '../images/h1.jpg', '200', 50, 1, '2', 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_purchasechild`
--

INSERT INTO `tbl_purchasechild` (`pchildid`, `pmasterid`, `itemid`, `costprice`, `quantity`, `totalprice`, `date`) VALUES
(1, 1, 1, 300, 10, 3000, '2021-09-18'),
(2, 2, 1, 0, 0, 0, '2021-09-18'),
(3, 8, 1, 700, 2, 1400, '2021-10-04'),
(4, 10, 2, 300, 2, 600, '2021-10-04');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_purchasemaster`
--

INSERT INTO `tbl_purchasemaster` (`pmasterid`, `supid`, `staffid`, `totalamt`) VALUES
(1, 1, 1, 300),
(2, 1, 1, 0),
(3, 1, 2, 0),
(4, 1, 2, 0),
(5, 1, 2, 0),
(6, 1, 2, 0),
(7, 1, 2, 0),
(8, 1, 2, 700),
(9, 1, 2, 0),
(10, 1, 2, 300);

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
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`sid`, `fname`, `lname`, `phone`, `houseno`, `street`, `district`, `pincode`, `email`, `status`) VALUES
(1, 'Sam', 'Tom', '8908908908', 314, 'rosevilla', 'thrissur', 679789, 'sam@gmail.com', '1'),
(2, 'neha', 'joe', '432156789', 52, 'sss', 'ernakulam', 682034, 'nehajoe@gmail.com', '1'),
(3, 'neena', 'joe', '154326789', 44, 'ddd', 'ernakulam', 682034, 'neena@gmail.com', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_subcat`
--

INSERT INTO `tbl_subcat` (`scid`, `catid`, `category`, `status`) VALUES
(1, '1', 'Anti-breakage shampoo', '1'),
(2, '1', 'purifying shampoo', '1');

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
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`sup_id`, `staffid`, `supname`, `supphone`, `supemail`, `supcity`, `supdistrict`, `suppincode`, `supstate`) VALUES
(1, '1', 'sera joseph', 8080808080, 'sera@gmail.com', 'thrissur', 'thrissur', 679789, 'mala'),
(2, '2', 'jishnu', 456789123, 'jishnu@gmail.com', 'kochi', 'ernakulam', 682034, 'kerala'),
(3, '1', 'leroy', 1234567890, 'leroy@gmail.com', 'edappaly', 'ernakulam', 682016, 'kerala'),
(4, '', 'leroy', 1234567890, 'leroy@gmail.com', 'edappaly', 'ernakulam', 682016, 'kerala'),
(5, '1', 'leroy', 1234567890, 'leroy@gmail.com', 'edappaly', 'ernakulam', 682016, 'kerala'),
(6, '1', 'sona jo', 9898090909, 'sona@gmail.com', 'koratty', 'thrissur', 679890, 'kerala'),
(7, '1', 'saron', 2345667819, 'sarron@gmail.com', 'edappaly', 'ernakulam', 682018, 'kerala'),
(8, '2', 'krish', 1234567890, 'krish@gmail.com', 'kochi', 'ernakulam', 682034, 'kerala');
