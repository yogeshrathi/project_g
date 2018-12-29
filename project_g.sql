-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2018 at 11:35 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_g`
--

-- --------------------------------------------------------

--
-- Table structure for table `666682852`
--

DROP TABLE IF EXISTS `666682852`;
CREATE TABLE IF NOT EXISTS `666682852` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `DATE` date NOT NULL,
  `ITEM_TYPE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `NO_OF_BARDANS` int(100) NOT NULL,
  `NO_OF_BAGS` int(100) NOT NULL,
  PRIMARY KEY (`SR_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `castor`
--

DROP TABLE IF EXISTS `castor`;
CREATE TABLE IF NOT EXISTS `castor` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `NO_OF_BAGS` int(100) NOT NULL,
  `NO_OF_BARDANS` int(100) NOT NULL,
  `SOLD_FLAG` int(100) NOT NULL,
  `GOWDOWN_EXP_FLAG` int(100) NOT NULL,
  `LARI_F1` int(100) NOT NULL,
  `LARI_F2` int(100) NOT NULL,
  `THADI_FLAG` int(100) NOT NULL,
  `COMISSION` int(100) NOT NULL,
  `VATAV` int(100) NOT NULL,
  `UTARAI_FLAG` int(100) NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `TOTAL` int(100) NOT NULL,
  `WASTE` int(100) NOT NULL,
  PRIMARY KEY (`SR_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MOB_NO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `VILLAGE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`NAME`,`SR_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`SR_NO`, `NAME`, `MOB_NO`, `VILLAGE`) VALUES
(1, '6666', '454454545', 'JAGUDRA'),
(1, 'rathi', '7014148811', 'barmer'),
(1, '6666333', '7014148811', 'JAGUDRA'),
(1, '666682852', '7014148811', 'JAGUDRA');

-- --------------------------------------------------------

--
-- Table structure for table `isabgul`
--

DROP TABLE IF EXISTS `isabgul`;
CREATE TABLE IF NOT EXISTS `isabgul` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `NO_OF_BAGS` int(100) NOT NULL,
  `NO_OF_BARDANS` int(100) NOT NULL,
  `SOLD_FLAG` int(100) NOT NULL,
  `GOWDOWN_EXP_FLAG` int(100) NOT NULL,
  `LARI_F1` int(100) NOT NULL,
  `LARI_F2` int(100) NOT NULL,
  `THADI_FLAG` int(100) NOT NULL,
  `COMISSION` int(100) NOT NULL,
  `VATAV` int(100) NOT NULL,
  `UTARAI_FLAG` int(100) NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `TOTAL` int(100) NOT NULL,
  `WASTE` int(100) NOT NULL,
  PRIMARY KEY (`SR_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`SR_NO`,`NAME`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`SR_NO`, `NAME`) VALUES
(1, 'JEERA'),
(2, 'CASTOR'),
(3, 'MUG'),
(4, 'MOTH'),
(5, 'METHI'),
(6, 'METHI');

-- --------------------------------------------------------

--
-- Table structure for table `jeera`
--

DROP TABLE IF EXISTS `jeera`;
CREATE TABLE IF NOT EXISTS `jeera` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `NO_OF_BAGS` int(100) NOT NULL,
  `NO_OF_BARDANS` int(100) NOT NULL,
  `SOLD_FLAG` int(100) NOT NULL,
  `GOWDOWN_EXP_FLAG` int(100) NOT NULL,
  `LARI_F1` int(100) NOT NULL,
  `LARI_F2` int(100) NOT NULL,
  `THADI_FLAG` int(100) NOT NULL,
  `COMISSION` int(100) NOT NULL,
  `VATAV` int(100) NOT NULL,
  `UTARAI_FLAG` int(100) NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `TOTAL` int(100) NOT NULL,
  `WASTE` int(100) NOT NULL,
  PRIMARY KEY (`SR_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `methi`
--

DROP TABLE IF EXISTS `methi`;
CREATE TABLE IF NOT EXISTS `methi` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `NO_OF_BAGS` int(100) NOT NULL,
  `NO_OF_BARDANS` int(100) NOT NULL,
  `SOLD_FLAG` int(100) NOT NULL,
  `GOWDOWN_EXP_FLAG` int(100) NOT NULL,
  `LARI_F1` int(100) NOT NULL,
  `LARI_F2` int(100) NOT NULL,
  `THADI_FLAG` int(100) NOT NULL,
  `COMISSION` int(100) NOT NULL,
  `VATAV` int(100) NOT NULL,
  `UTARAI_FLAG` int(100) NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `TOTAL` int(100) NOT NULL,
  `WASTE` int(100) NOT NULL,
  PRIMARY KEY (`SR_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moth`
--

DROP TABLE IF EXISTS `moth`;
CREATE TABLE IF NOT EXISTS `moth` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `NO_OF_BAGS` int(100) NOT NULL,
  `NO_OF_BARDANS` int(100) NOT NULL,
  `SOLD_FLAG` int(100) NOT NULL,
  `GOWDOWN_EXP_FLAG` int(100) NOT NULL,
  `LARI_F1` int(100) NOT NULL,
  `LARI_F2` int(100) NOT NULL,
  `THADI_FLAG` int(100) NOT NULL,
  `COMISSION` int(100) NOT NULL,
  `VATAV` int(100) NOT NULL,
  `UTARAI_FLAG` int(100) NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `TOTAL` int(100) NOT NULL,
  `WASTE` int(100) NOT NULL,
  PRIMARY KEY (`SR_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mug`
--

DROP TABLE IF EXISTS `mug`;
CREATE TABLE IF NOT EXISTS `mug` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `NO_OF_BAGS` int(100) NOT NULL,
  `NO_OF_BARDANS` int(100) NOT NULL,
  `SOLD_FLAG` int(100) NOT NULL,
  `GOWDOWN_EXP_FLAG` int(100) NOT NULL,
  `LARI_F1` int(100) NOT NULL,
  `LARI_F2` int(100) NOT NULL,
  `THADI_FLAG` int(100) NOT NULL,
  `COMISSION` int(100) NOT NULL,
  `VATAV` int(100) NOT NULL,
  `UTARAI_FLAG` int(100) NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `TOTAL` int(100) NOT NULL,
  `WASTE` int(100) NOT NULL,
  PRIMARY KEY (`SR_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rathi`
--

DROP TABLE IF EXISTS `rathi`;
CREATE TABLE IF NOT EXISTS `rathi` (
  `SR_NO` int(100) NOT NULL AUTO_INCREMENT,
  `DATE` date NOT NULL,
  `ITEM_TYPE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `NO_OF_BARDANS` int(100) NOT NULL,
  `NO_OF_BAGS` int(100) NOT NULL,
  PRIMARY KEY (`SR_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
