-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2017 at 08:02 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siritha`
--
CREATE DATABASE IF NOT EXISTS `siritha` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `siritha`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(10) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(2500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` int(10) NOT NULL,
  `Shipping` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Details` varchar(5000) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`productID`),
  UNIQUE KEY `productID` (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `itemName`, `price`, `Shipping`, `Details`) VALUES
(1, 'Luxury High-grade Crystal Wedding Dress', 25000, 'Free Shipping', 'Brand Name:SSYFashion\r\nItem Type:Wedding Dresses\r\nSilhouette:A-Line\r\nTrain:Court Train\r\nBuilt-in Bra:Yes\r\nWedding Dress Fabric:Embroidered Organza and Tulle\r\nDecoration:Flowers,Beading,Bow,Sequined,Embroidery,Lace,Crystal\r\nActual Images:Yes\r\nBack Design:Lace Up\r\nSleeve Length(cm):Sleeveless\r\nModel Number:LF813QSYS520\r\nSleeve Style:Tank\r\nis_customized:Yes\r\nDresses Length:Floor-Length\r\nWaistline:Natural\r\nNeckline:V-neck\r\nFor Pregnant Women:No\r\n'),
(2, 'Blue cotton voile sarees', 10000, NULL, NULL),
(3, 'Classic Stainless Steel Rings', 2500, NULL, NULL),
(4, 'Women High Heels Wedding Shoes Pumps Black', 3500, NULL, NULL),
(5, 'Plant Crystal Wedding Earrings for Women Silver', 3750, NULL, NULL),
(6, 'Hair Accessories Hair Combs Hair Jewelry', 1800, NULL, NULL),
(7, 'Makeup Brush Sets Cosmetic Brushes Kit Black Leather', 6500, NULL, NULL),
(8, 'Rose Bridal Veil With Water Soluble Lace Edge', 8500, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ven_logindetails`
--

CREATE TABLE IF NOT EXISTS `ven_logindetails` (
  `IDven` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `JobRoll` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`IDven`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ven_logindetails`
--

INSERT INTO `ven_logindetails` (`IDven`, `UserName`, `Password`, `JobRoll`) VALUES
(5, 'kawindaptr@gmail.com', '87e63cab5271c5fb2e38dc696b38784e12e3e248', 'ProductSeller');

-- --------------------------------------------------------

--
-- Table structure for table `wu_logindetails`
--

CREATE TABLE IF NOT EXISTS `wu_logindetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UserName` (`UserName`),
  KEY `UserName_2` (`UserName`),
  KEY `UserName_3` (`UserName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `wu_logindetails`
--

INSERT INTO `wu_logindetails` (`ID`, `UserName`, `Password`) VALUES
(75, 'my2@gmail.com', '87e63cab5271c5fb2e38dc696b38784e12e3e248'),
(76, 'kawindaptr@gmail.com', '87e63cab5271c5fb2e38dc696b38784e12e3e248');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
