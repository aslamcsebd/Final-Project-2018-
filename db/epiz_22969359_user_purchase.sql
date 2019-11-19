-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql308.epizy.com
-- Generation Time: Nov 19, 2019 at 07:29 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_22969359_user_purchase`
--

-- --------------------------------------------------------

--
-- Table structure for table `36_`
--

CREATE TABLE `36_` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `39_`
--

CREATE TABLE `39_` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `40_`
--

CREATE TABLE `40_` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `41_`
--

CREATE TABLE `41_` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `42_`
--

CREATE TABLE `42_` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `54_aslam`
--

CREATE TABLE `54_aslam` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `56_aslam`
--

CREATE TABLE `56_aslam` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `56_aslam`
--

INSERT INTO `56_aslam` (`id`, `date`, `apple`, `apricot`, `banana`, `cherries`, `coconut`, `grape`, `icon`, `lemon`, `lychee`, `mango`, `melon`, `orange`, `peach`, `pear`, `pineapple`, `plum`, `raspberry`, `strawberry`, `tangerine`, `watermelon`, `other`, `total`) VALUES
(1, '2018-12-05', 234, NULL, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 323),
(2, '2018-12-07', 154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 154);

-- --------------------------------------------------------

--
-- Table structure for table `63_saeed`
--

CREATE TABLE `63_saeed` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `63_saeed`
--

INSERT INTO `63_saeed` (`id`, `date`, `apple`, `apricot`, `banana`, `cherries`, `coconut`, `grape`, `icon`, `lemon`, `lychee`, `mango`, `melon`, `orange`, `peach`, `pear`, `pineapple`, `plum`, `raspberry`, `strawberry`, `tangerine`, `watermelon`, `other`, `total`) VALUES
(6, '2018-12-02', NULL, NULL, 47, NULL, NULL, 69, NULL, NULL, 52, NULL, NULL, 45, NULL, NULL, 65, NULL, NULL, 45, NULL, NULL, 85, 408),
(5, '2018-12-01', NULL, 78, NULL, 65, NULL, 47, NULL, 15, NULL, 35, NULL, 48, NULL, 96, NULL, 32, NULL, 45, NULL, 89, NULL, 550),
(7, '2018-12-03', NULL, NULL, NULL, 85, NULL, NULL, NULL, 65, NULL, NULL, NULL, 45, NULL, NULL, NULL, 85, NULL, NULL, NULL, 96, NULL, 376),
(8, '2018-12-04', NULL, NULL, NULL, NULL, 58, NULL, NULL, NULL, NULL, 96, NULL, NULL, NULL, NULL, 54, NULL, NULL, NULL, NULL, 75, NULL, 283),
(9, '2018-12-05', NULL, 74, NULL, 85, NULL, 96, NULL, 63, NULL, 52, NULL, 41, NULL, 71, NULL, 82, NULL, 93, NULL, 45, NULL, 702),
(10, '2018-12-06', NULL, NULL, NULL, NULL, NULL, 98, NULL, NULL, NULL, NULL, NULL, 85, NULL, NULL, NULL, NULL, NULL, 69, NULL, NULL, NULL, NULL),
(11, '2018-12-07', NULL, NULL, 74, NULL, NULL, 48, NULL, NULL, 86, NULL, NULL, 62, NULL, NULL, 24, NULL, NULL, 86, NULL, NULL, 59, NULL),
(17, '2018-12-10', NULL, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 120),
(16, '2018-12-09', 240, 162, NULL, 100, NULL, NULL, NULL, NULL, NULL, NULL, 73, 85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, 1160),
(15, '2018-12-08', NULL, 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, 500),
(18, '2018-12-24', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200),
(19, '2018-12-27', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(20, '2018-12-28', 460, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, 660),
(21, '2019-02-10', 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 123),
(22, '2019-04-02', 260, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200, 460);

-- --------------------------------------------------------

--
-- Table structure for table `66_aslam`
--

CREATE TABLE `66_aslam` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `66_aslam`
--

INSERT INTO `66_aslam` (`id`, `date`, `apple`, `apricot`, `banana`, `cherries`, `coconut`, `grape`, `icon`, `lemon`, `lychee`, `mango`, `melon`, `orange`, `peach`, `pear`, `pineapple`, `plum`, `raspberry`, `strawberry`, `tangerine`, `watermelon`, `other`, `total`) VALUES
(1, '2018-12-12', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10),
(2, '2018-12-30', 200, 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400),
(3, '2019-01-18', 300, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300),
(4, '2019-03-03', NULL, 300, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, 600);

-- --------------------------------------------------------

--
-- Table structure for table `67_user`
--

CREATE TABLE `67_user` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `67_user`
--

INSERT INTO `67_user` (`id`, `date`, `apple`, `apricot`, `banana`, `cherries`, `coconut`, `grape`, `icon`, `lemon`, `lychee`, `mango`, `melon`, `orange`, `peach`, `pear`, `pineapple`, `plum`, `raspberry`, `strawberry`, `tangerine`, `watermelon`, `other`, `total`) VALUES
(1, '2018-12-12', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 200);

-- --------------------------------------------------------

--
-- Table structure for table `70_user`
--

CREATE TABLE `70_user` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `72_12345`
--

CREATE TABLE `72_12345` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `73_1`
--

CREATE TABLE `73_1` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `73_1`
--

INSERT INTO `73_1` (`id`, `date`, `apple`, `apricot`, `banana`, `cherries`, `coconut`, `grape`, `icon`, `lemon`, `lychee`, `mango`, `melon`, `orange`, `peach`, `pear`, `pineapple`, `plum`, `raspberry`, `strawberry`, `tangerine`, `watermelon`, `other`, `total`) VALUES
(1, '2019-01-03', NULL, NULL, NULL, NULL, NULL, NULL, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50);

-- --------------------------------------------------------

--
-- Table structure for table `74_1234567`
--

CREATE TABLE `74_1234567` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `75_123456789`
--

CREATE TABLE `75_123456789` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `75_123456789`
--

INSERT INTO `75_123456789` (`id`, `date`, `apple`, `apricot`, `banana`, `cherries`, `coconut`, `grape`, `icon`, `lemon`, `lychee`, `mango`, `melon`, `orange`, `peach`, `pear`, `pineapple`, `plum`, `raspberry`, `strawberry`, `tangerine`, `watermelon`, `other`, `total`) VALUES
(1, '2019-02-10', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100);

-- --------------------------------------------------------

--
-- Table structure for table `76_deb`
--

CREATE TABLE `76_deb` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `77_1001`
--

CREATE TABLE `77_1001` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `78_123`
--

CREATE TABLE `78_123` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `79_12`
--

CREATE TABLE `79_12` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `apple` int(20) DEFAULT NULL,
  `apricot` int(20) DEFAULT NULL,
  `banana` int(20) DEFAULT NULL,
  `cherries` int(20) DEFAULT NULL,
  `coconut` int(20) DEFAULT NULL,
  `grape` int(20) DEFAULT NULL,
  `icon` int(20) DEFAULT NULL,
  `lemon` int(20) DEFAULT NULL,
  `lychee` int(20) DEFAULT NULL,
  `mango` int(20) DEFAULT NULL,
  `melon` int(20) DEFAULT NULL,
  `orange` int(20) DEFAULT NULL,
  `peach` int(20) DEFAULT NULL,
  `pear` int(20) DEFAULT NULL,
  `pineapple` int(20) DEFAULT NULL,
  `plum` int(20) DEFAULT NULL,
  `raspberry` int(20) DEFAULT NULL,
  `strawberry` int(20) DEFAULT NULL,
  `tangerine` int(20) DEFAULT NULL,
  `watermelon` int(20) DEFAULT NULL,
  `other` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `36_`
--
ALTER TABLE `36_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `39_`
--
ALTER TABLE `39_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `40_`
--
ALTER TABLE `40_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `41_`
--
ALTER TABLE `41_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `42_`
--
ALTER TABLE `42_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `54_aslam`
--
ALTER TABLE `54_aslam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `56_aslam`
--
ALTER TABLE `56_aslam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `63_saeed`
--
ALTER TABLE `63_saeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `66_aslam`
--
ALTER TABLE `66_aslam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `67_user`
--
ALTER TABLE `67_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `70_user`
--
ALTER TABLE `70_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `72_12345`
--
ALTER TABLE `72_12345`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `73_1`
--
ALTER TABLE `73_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `74_1234567`
--
ALTER TABLE `74_1234567`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `75_123456789`
--
ALTER TABLE `75_123456789`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `76_deb`
--
ALTER TABLE `76_deb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `77_1001`
--
ALTER TABLE `77_1001`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `78_123`
--
ALTER TABLE `78_123`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `79_12`
--
ALTER TABLE `79_12`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `36_`
--
ALTER TABLE `36_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `39_`
--
ALTER TABLE `39_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `40_`
--
ALTER TABLE `40_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `41_`
--
ALTER TABLE `41_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `42_`
--
ALTER TABLE `42_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `54_aslam`
--
ALTER TABLE `54_aslam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `56_aslam`
--
ALTER TABLE `56_aslam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `63_saeed`
--
ALTER TABLE `63_saeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `66_aslam`
--
ALTER TABLE `66_aslam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `67_user`
--
ALTER TABLE `67_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `70_user`
--
ALTER TABLE `70_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `72_12345`
--
ALTER TABLE `72_12345`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `73_1`
--
ALTER TABLE `73_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `74_1234567`
--
ALTER TABLE `74_1234567`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `75_123456789`
--
ALTER TABLE `75_123456789`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `76_deb`
--
ALTER TABLE `76_deb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `77_1001`
--
ALTER TABLE `77_1001`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `78_123`
--
ALTER TABLE `78_123`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `79_12`
--
ALTER TABLE `79_12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
