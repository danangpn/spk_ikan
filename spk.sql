-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2013 at 03:24 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bawal`
--

CREATE TABLE IF NOT EXISTS `bawal` (
  `id_bawal` int(15) NOT NULL AUTO_INCREMENT,
  `bawal` varchar(30) NOT NULL,
  `konBawal` varchar(30) NOT NULL,
  PRIMARY KEY (`id_bawal`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bawal`
--

INSERT INTO `bawal` (`id_bawal`, `bawal`, `konBawal`) VALUES
(1, '130', '10000'),
(2, '120', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `dataku`
--

CREATE TABLE IF NOT EXISTS `dataku` (
  `id_data` int(100) NOT NULL AUTO_INCREMENT,
  `id_identitas` int(100) NOT NULL,
  `id_luas` int(100) NOT NULL,
  `id_kolam` int(100) NOT NULL,
  `id_bawal` int(100) NOT NULL,
  `id_gurami` int(100) NOT NULL,
  `id_karper` int(100) NOT NULL,
  `id_lele` int(100) NOT NULL,
  `id_nila` int(100) NOT NULL,
  `id_patin` int(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_data`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dataku`
--

INSERT INTO `dataku` (`id_data`, `id_identitas`, `id_luas`, `id_kolam`, `id_bawal`, `id_gurami`, `id_karper`, `id_lele`, `id_nila`, `id_patin`, `tanggal`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2013-06-14 13:16:46'),
(2, 2, 2, 2, 2, 1, 2, 1, 2, 2, '2013-06-14 13:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `gurami`
--

CREATE TABLE IF NOT EXISTS `gurami` (
  `id_gurami` int(20) NOT NULL AUTO_INCREMENT,
  `gurami` varchar(30) NOT NULL,
  `konGurami` varchar(30) NOT NULL,
  PRIMARY KEY (`id_gurami`)
) TYPE=MyISAM  AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gurami`
--

INSERT INTO `gurami` (`id_gurami`, `gurami`, `konGurami`) VALUES
(1, '1500', '21000');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
  `id_identitas` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nomor_id` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id_identitas`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama`, `nomor_id`, `alamat`) VALUES
(1, 'DANANG', '5302410006', 'KEBUMEN'),
(2, 'MASUDI', '33223223', 'SEMARANG');

-- --------------------------------------------------------

--
-- Table structure for table `karper`
--

CREATE TABLE IF NOT EXISTS `karper` (
  `id_karper` int(15) NOT NULL AUTO_INCREMENT,
  `karper` varchar(30) NOT NULL,
  `konKarper` varchar(30) NOT NULL,
  PRIMARY KEY (`id_karper`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

--
-- Dumping data for table `karper`
--

INSERT INTO `karper` (`id_karper`, `karper`, `konKarper`) VALUES
(1, '120', '11000'),
(2, '100', '11000');

-- --------------------------------------------------------

--
-- Table structure for table `kolam`
--

CREATE TABLE IF NOT EXISTS `kolam` (
  `id_kolam` int(100) NOT NULL AUTO_INCREMENT,
  `kapur` varchar(50) NOT NULL,
  `pupuk` varchar(50) NOT NULL,
  `pakan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kolam`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kolam`
--

INSERT INTO `kolam` (`id_kolam`, `kapur`, `pupuk`, `pakan`) VALUES
(1, '1000', '1500', '7000'),
(2, '800', '1500', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `lele`
--

CREATE TABLE IF NOT EXISTS `lele` (
  `id_lele` int(15) NOT NULL AUTO_INCREMENT,
  `lele` varchar(30) NOT NULL,
  `konLele` varchar(30) NOT NULL,
  PRIMARY KEY (`id_lele`)
) TYPE=MyISAM  AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lele`
--

INSERT INTO `lele` (`id_lele`, `lele`, `konLele`) VALUES
(1, '150', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `luas`
--

CREATE TABLE IF NOT EXISTS `luas` (
  `id_luas` int(100) NOT NULL AUTO_INCREMENT,
  `luas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_luas`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

--
-- Dumping data for table `luas`
--

INSERT INTO `luas` (`id_luas`, `luas`) VALUES
(1, '100'),
(2, '120');

-- --------------------------------------------------------

--
-- Table structure for table `nila`
--

CREATE TABLE IF NOT EXISTS `nila` (
  `id_nila` int(15) NOT NULL AUTO_INCREMENT,
  `nila` varchar(30) NOT NULL,
  `konNila` varchar(30) NOT NULL,
  PRIMARY KEY (`id_nila`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nila`
--

INSERT INTO `nila` (`id_nila`, `nila`, `konNila`) VALUES
(1, '120', '10000'),
(2, '120', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `patin`
--

CREATE TABLE IF NOT EXISTS `patin` (
  `id_patin` int(15) NOT NULL AUTO_INCREMENT,
  `patin` varchar(30) NOT NULL,
  `konPatin` varchar(30) NOT NULL,
  PRIMARY KEY (`id_patin`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patin`
--

INSERT INTO `patin` (`id_patin`, `patin`, `konPatin`) VALUES
(1, '150', '10000'),
(2, '150', '12000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
