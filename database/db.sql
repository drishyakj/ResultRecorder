-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 05:52 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_recorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
(1111, 'dania');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `class` int(11) NOT NULL,
  `division` varchar(1) NOT NULL,
  `first_language` int(11) NOT NULL DEFAULT '0',
  `gradefl` varchar(2) DEFAULT NULL,
  `second_language` int(11) NOT NULL DEFAULT '0',
  `gradesl` varchar(2) DEFAULT NULL,
  `English` int(11) NOT NULL DEFAULT '0',
  `gradeeng` varchar(2) DEFAULT NULL,
  `hindi` int(11) NOT NULL DEFAULT '0',
  `gradehin` varchar(2) DEFAULT NULL,
  `physics` int(11) NOT NULL DEFAULT '0',
  `gradephy` varchar(2) DEFAULT NULL,
  `chemistry` int(11) NOT NULL DEFAULT '0',
  `gradeche` varchar(2) DEFAULT NULL,
  `biology` int(11) NOT NULL DEFAULT '0',
  `gradebio` varchar(2) DEFAULT NULL,
  `social_science` int(11) NOT NULL DEFAULT '0',
  `gradess` varchar(2) DEFAULT NULL,
  `mathematics` int(11) NOT NULL DEFAULT '0',
  `grademat` varchar(2) DEFAULT NULL,
  `total_mark` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `dob`, `class`, `division`, `first_language`, `gradefl`, `second_language`, `gradesl`, `English`, `gradeeng`, `hindi`, `gradehin`, `physics`, `gradephy`, `chemistry`, `gradeche`, `biology`, `gradebio`, `social_science`, `gradess`, `mathematics`, `grademat`, `total_mark`) VALUES
(2, 'Ganga', '2003-11-05', 10, 'A', 100, 'A+', 100, 'A+', 100, 'A+', 100, 'A+', 100, 'A+', 100, 'A+', 100, 'A+', 100, 'A+', 100, 'A+', 900),
(1, 'Jess', '2005-12-21', 10, 'A', 70, 'B+', 90, 'A+', 85, 'A', 82, 'A', 85, 'A', 95, 'A+', 99, 'A+', 90, 'A+', 99, 'A+', 795),
(3, 'Anu', '2000-05-08', 10, 'B', 100, 'A+', 100, 'A+', 100, 'A+', 100, 'A+', 100, 'A+', 99, 'A+', 99, 'A+', 99, 'A+', 99, 'A+', 896),
(4, 'Vinu', '2003-12-21', 10, 'A', 88, 'A', 56, 'C+', 88, 'A', 90, 'A+', 20, 'D', 95, 'A+', 99, 'A+', 90, 'A+', 99, 'A+', 725),
(5, 'Indhu', '1998-06-08', 9, 'B', 78, 'B+', 90, 'A+', 92, 'A+', 100, 'A+', 72, 'B+', 85, 'A', 42, 'C', 99, 'A+', 100, 'A+', 758),
(6, 'Kate', '1998-11-27', 9, 'B', 100, 'A+', 100, 'A+', 85, 'A', 82, 'A', 72, 'B+', 45, 'C', 76, 'B+', 99, 'A+', 91, 'A+', 750),
(7, 'Dani', '1998-12-04', 10, 'B', 90, 'A+', 95, 'A+', 87, 'A', 56, 'C+', 78, 'B+', 98, 'A+', 90, 'A+', 77, 'B+', 88, 'A', 759);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `password`) VALUES
(1, 'Drishya', 'aaaa'),
(2, 'Anju', 'anju');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
