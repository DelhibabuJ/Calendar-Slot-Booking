-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 03:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendarslot`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblslot`
--

CREATE TABLE `tblslot` (
  `title` varchar(100) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblslot`
--

INSERT INTO `tblslot` (`title`, `start`, `end`) VALUES
('\0', '2020-06-14 13:00:00', '2020-06-14 14:00:00'),
('\0', '2020-06-14 13:00:00', '2020-06-14 14:00:00'),
('birthday', '2020-06-14 13:00:00', '2020-06-14 14:00:00'),
('All Day Long', '2020-06-14 00:00:00', '2020-06-14 00:00:00'),
('All Day Long', '2020-06-14 15:00:00', '2020-06-14 16:00:00'),
('sample', '2020-06-10 15:00:00', '2020-06-11 15:00:00'),
('', '2020-06-24 06:00:00', '2020-06-24 07:00:00'),
('', '2020-06-24 06:00:00', '2020-06-24 07:00:00'),
('birthday', '2020-06-24 06:00:00', '2020-06-24 07:00:00'),
('birthday', '2020-06-24 06:00:00', '2020-06-24 07:00:00'),
('birthday', '2020-06-02 04:00:00', '2020-06-02 06:00:00'),
('vj birthday', '2020-06-22 00:00:00', '2020-06-22 00:00:00'),
('birthday', '2020-06-23 06:00:00', '2020-06-23 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserreg`
--

CREATE TABLE `tbluserreg` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Enter_Password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluserreg`
--

INSERT INTO `tbluserreg` (`Name`, `Email`, `Mobile`, `Enter_Password`) VALUES
('', 'test@demo.com', '9443392714', 'abc'),
('', 'test@demo.com', '9443392714', 'abc'),
('D.KARTHIKEYAN', 'test@demo.com', '9443392714', 'abc'),
('Delhibabu.J', 'babu@demo.com', '9525262413', 'aaa'),
('Delhibabu.J', 'babu@demo.com', '9525262413', 'aaa'),
('Delhibabu.J', 'babu@demo.com', '9546764567', 'abb'),
('Delhibabu.J', 'babu@demo.com', '9546764567', 'abb'),
('ilamparithi.k', 'ilam@demo', '9876543210', 'iii'),
('ilamparithi.k', 'ilam@demo', '9876543210', 'iii'),
('ilamparithi.k', 'ilam@demo', '9876543210', 'iii'),
('babu', 'ilam@demo', '567576765', 'iii'),
('aravind', 'arav@demo', '9878543210', 'rrr'),
('babu', 'babu@demo.com', '3525856482', 'abc'),
('babu', 'babu@demo.com', '2536512221', 'aaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
