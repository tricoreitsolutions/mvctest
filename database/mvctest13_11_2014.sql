-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2014 at 12:52 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvctest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'newadmin', 'd3698036132b78ae31c3f03d377758d8', 'admin', 'admin', 'admin@gmail.com'),
(2, 'newadmin', '80396443f055ea0c4fd9719ecefcc25a', 'newadmin', 'newadmin', 'newadmin@gmail.com'),
(5, 'asasa', '5d793fc5b00a2348c3fb9ab59e5ca98a', 'das', 'aasas', 'admin@gmail.com'),
(6, 'admin', '5d793fc5b00a2348c3fb9ab59e5ca98a', 'admin', 'admin', 'admsin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `living`
--

CREATE TABLE IF NOT EXISTS `living` (
  `li_id` int(11) NOT NULL AUTO_INCREMENT,
  `li_name` text NOT NULL,
  PRIMARY KEY (`li_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `living`
--

INSERT INTO `living` (`li_id`, `li_name`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'Australia'),
(4, 'Canada'),
(5, 'UK'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `mothertongue`
--

CREATE TABLE IF NOT EXISTS `mothertongue` (
  `mo_id` int(11) NOT NULL AUTO_INCREMENT,
  `mo_name` text NOT NULL,
  PRIMARY KEY (`mo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mothertongue`
--

INSERT INTO `mothertongue` (`mo_id`, `mo_name`) VALUES
(1, 'Gujarati'),
(2, 'Hindi'),
(3, 'English'),
(4, 'Punjabi'),
(5, 'Marathi'),
(6, 'Tamil'),
(7, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pr_name` text NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pr_id`, `pr_name`) VALUES
(1, 'Self'),
(2, 'Son'),
(3, 'Brother'),
(4, 'Sister'),
(5, 'Friend'),
(6, 'Relative'),
(7, 'Daughter');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `rel_id` int(11) NOT NULL AUTO_INCREMENT,
  `rel_name` text NOT NULL,
  PRIMARY KEY (`rel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`rel_id`, `rel_name`) VALUES
(1, 'Parsi'),
(2, 'Hindu'),
(3, 'Jain'),
(4, 'Khristi'),
(5, 'Muslim'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `fullname` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `religion` text NOT NULL,
  `mtongue` text NOT NULL,
  `livingin` text NOT NULL,
  `mobileno` int(11) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`u_id`, `email`, `password`, `profile`, `fullname`, `gender`, `dob`, `religion`, `mtongue`, `livingin`, `mobileno`) VALUES
(3, 'p@gmail.com', '9cafeef08db2dd477098a0293e71f90a', 'Self', 'gggg', 'male', 'gggg', 'Jain', 'Hindi', 'USA', 1),
(4, 'nirav@gmail.com', '595b03f33af2846239cede2652125d35', 'Brother', 'Nirav Patel', 'male', '12.03.1992', 'Jain', 'Punjabi', 'Australia', 2147483647),
(5, 'admin@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'Brother', 'ssdhghg', 'male', '12/03/1992', 'Jain', 'English', 'USA', 345343434);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
