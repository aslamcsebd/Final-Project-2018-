-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2019 at 07:35 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `location`, `email`, `address`, `contact`) VALUES
(1, 'ctg', 'aslamhossainctg@gmail.com', 'Agrabad Commercial Area, Chittagong-4100. Bangladesh.', '+880 1680607293'),
(2, 'dhaka', 'aslamcsebd@gmail.com', 'Mohakhali Dakkhin Para, Unnamed Road, Dhaka 1212, Bangladesh.', '+880 1558102860');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `contact`, `email`, `subject`, `message`) VALUES
(20, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(21, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(22, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(23, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(24, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(25, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(26, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(27, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(28, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(29, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(30, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(31, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(32, 'A\'A', '01\'01', 'B\'B@gmail.com', 'C\'C', 'D\'D'),
(33, 'A\'s', 'B\'s', 'C\'s@gmail.com', 'D\'s', 'E\'s'),
(34, 'A\'s', 'B\'s', 'C\'s@gmail.com', 'D\'s', 'E\'ss'),
(35, 'A\'s', 'B\'s', 'subadmin@gmail.com', 'Hire you', '123'),
(36, 'Md Aslam', '01671-575446', 'subadmin@gmail.com', 'Prayer for leave application', '<?= $contact[\'email\']; ?>'),
(37, 'Aslam ctg', '01558102860', 'aslamctg@gmail.com', 'proatolio', 'sdfghjklk,ujhntgvzxcvbnmwertyuikl;'),
(38, 'Md Aslam', '01671-575446', 'subadmin@gmail.com', 'Hire you', '102.3');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `about`, `link`, `image`) VALUES
(1, 'Bazarinfo', 'bazarinfo for real time market place.', 'http://bazarinfo.ml/', 'img/portfolio/bazarinfo.jpg'),
(13, 'Election Commission', 'Election Commission', '', 'img/portfolio/ec.jpg'),
(14, 'Jobs portal', 'Jobs portal', '', 'img/portfolio/job_portal.jpg'),
(15, 'Core Note', 'Core Note Fot code', 'http://bazarinfo.ml/coreCode/adminHome.php', 'img/portfolio/coreNote.jpg'),
(16, 'Color code', 'Color code', 'http://bazarinfo.ml/coreCode/adminHome.php', 'img/portfolio/color.jpg'),
(17, 'Puc question bank', 'Puc question bank', 'http://bazarinfo.ml/coreCode/adminHome.php', 'img/portfolio/puc.jpg'),
(18, 'Bazarinfo', 'bazarinfo for real time market place.', 'http://bazarinfo.ml/', 'img/portfolio/bazarinfo.jpg'),
(19, 'Election Commission', 'Election Commission', '', 'img/portfolio/ec.jpg'),
(20, 'Jobs portal', 'Jobs portal', '', 'img/portfolio/job_portal.jpg'),
(21, 'Core Note', 'Core Note Fot code', 'http://bazarinfo.ml/coreCode/adminHome.php', 'img/portfolio/coreNote.jpg'),
(22, 'Color code', 'Color code', 'http://bazarinfo.ml/coreCode/adminHome.php', 'img/portfolio/color.jpg'),
(23, 'Puc question bank', 'Puc question bank', 'http://bazarinfo.ml/coreCode/adminHome.php', 'img/portfolio/puc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social_link`
--

CREATE TABLE `social_link` (
  `id` int(30) NOT NULL,
  `link` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_link`
--

INSERT INTO `social_link` (`id`, `link`, `name`) VALUES
(1, 'https://www.facebook.com/aslam.cse.ctg', 'fab fa-facebook-f'),
(2, 'https://www.instagram.com/aslamctg', 'fab fa-instagram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_link`
--
ALTER TABLE `social_link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `social_link`
--
ALTER TABLE `social_link`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
