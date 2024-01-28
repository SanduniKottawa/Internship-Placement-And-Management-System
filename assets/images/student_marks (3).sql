-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 08:41 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipmsystemfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `Student_ID` varchar(50) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC1113` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC1122` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC113a` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC1142` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC1153` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC1213` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC1223` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC1233` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC1242` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC1251` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2113` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2123` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2133` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2143` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2222` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2213` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2233` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2242` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2252` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2263` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CSC2272` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`Student_ID`, `name`, `CSC1113`, `CSC1122`, `CSC113a`, `CSC1142`, `CSC1153`, `CSC1213`, `CSC1223`, `CSC1233`, `CSC1242`, `CSC1251`, `CSC2113`, `CSC2123`, `CSC2133`, `CSC2143`, `CSC2222`, `CSC2213`, `CSC2233`, `CSC2242`, `CSC2252`, `CSC2263`, `CSC2272`) VALUES
('10184', 'W.A.Perera', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'C', 'A', 'B', 'C', 'C', 'B', 'A', 'B', 'C', 'C', 'C', 'A', 'A', 'A'),
('10224', 'W.T.Fernando', 'A', 'C', 'C', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'E', 'A', 'E', 'E'),
('10256', ' T.T. Ariyarathne', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'E*', 'B', 'B', 'B', 'C', 'E', 'D'),
('10267', 'O.O. Wanigasooriya', 'D', 'D', 'B', 'B', 'A', 'A', 'A', 'A', 'D', 'D', 'D', 'D', 'D', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B'),
('10278', 'S.S. Thilakarathne', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
