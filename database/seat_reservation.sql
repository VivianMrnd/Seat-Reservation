-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 24, 2021 at 07:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seat_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `duration` varchar(255) COLLATE utf8_bin NOT NULL,
  `time_available` time NOT NULL,
  `date_showing` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `duration`, `time_available`, `date_showing`, `end_date`) VALUES
(1, 'The greatest showman', '2 hours', '13:00:00', '2021-09-11', '2021-09-13'),
(2, 'Spongebob: the missing spatula movie', '1 hour and 30 minutes', '15:00:00', '2021-09-11', '2021-09-13'),
(3, 'Iron man 5', '3 hours', '13:00:00', '2021-09-14', '2021-09-16'),
(4, 'This is the end 2', '2 hours', '16:00:00', '2021-09-14', '2021-09-16'),
(5, 'Hangover 4', '2 hours', '18:00:00', '2021-09-14', '2021-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_bin NOT NULL,
  `contact` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `seat_number` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `movie_id` (`movie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=188 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `fullname`, `contact`, `no_of_seats`, `seat_number`, `date`, `time`, `movie_id`) VALUES
(179, 'dw', '09452765455', 1, 'A2', '2021-09-11', '13:00:00', 1),
(182, 'ew', '09452765455', 1, 'B3', '2021-09-11', '15:00:00', 2),
(176, 'dw', '09452765455', 1, 'B4', '2021-09-15', '13:00:00', 3),
(184, 'dw', '09452765455', 1, 'A1', '2021-09-15', '16:00:00', 4),
(185, 'ew', '09452765455', 1, 'C1', '2021-09-14', '18:00:00', 5),
(186, 'dw', '09452765455', 2, 'A4', '2021-09-14', '18:00:00', 5),
(187, 'dw', '09452765455', 2, 'A5', '2021-09-14', '18:00:00', 5),
(183, 'ew', '09452765455', 1, 'A3', '2021-09-14', '13:00:00', 3),
(175, 'dw', '09452765455', 1, 'A4', '2021-09-14', '13:00:00', 3),
(173, 'dw', '09452765455', 2, 'A1', '2021-09-12', '15:00:00', 2),
(181, 'ew', '43434', 1, 'A3', '2021-09-12', '15:00:00', 2),
(180, 'dw', '09452765455', 1, 'A1', '2021-09-12', '13:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
CREATE TABLE IF NOT EXISTS `seats` (
  `id` varchar(11) COLLATE utf8_bin NOT NULL,
  `seat_group` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'AVAILABLE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `seat_group`, `status`) VALUES
('A1', 'Box-A', 'BOOKED'),
('A2', 'Box-A', 'BOOKED'),
('A3', 'Box-A', 'AVAILABLE'),
('A4', 'Box-A', 'AVAILABLE'),
('A5', 'Box-A', 'AVAILABLE'),
('A6', 'Box-A', 'AVAILABLE'),
('A7', 'Box-A', 'AVAILABLE'),
('A8', 'Box-A', 'AVAILABLE'),
('A9', 'Box-A', 'AVAILABLE'),
('A10', 'Box-A', 'AVAILABLE'),
('A11', 'Box-A', 'AVAILABLE'),
('A12', 'Box-A', 'AVAILABLE'),
('A13', 'Box-A', 'AVAILABLE'),
('A14', 'Box-A', 'AVAILABLE'),
('A15', 'Box-A', 'AVAILABLE'),
('B1', 'Box-B', 'AVAILABLE'),
('B2', 'Box-B', 'AVAILABLE'),
('B3', 'Box-B', 'AVAILABLE'),
('B4', 'Box-B', 'AVAILABLE'),
('B5', 'Box-B', 'AVAILABLE'),
('B6', 'Box-B', 'AVAILABLE'),
('B7', 'Box-B', 'AVAILABLE'),
('B8', 'Box-B', 'AVAILABLE'),
('B9', 'Box-B', 'AVAILABLE'),
('B10', 'Box-B', 'AVAILABLE'),
('B11', 'Box-B', 'AVAILABLE'),
('B12', 'Box-B', 'AVAILABLE'),
('B13', 'Box-B', 'AVAILABLE'),
('B14', 'Box-B', 'AVAILABLE'),
('B15', 'Box-B', 'AVAILABLE'),
('C1', 'Box-C', 'AVAILABLE'),
('C2', 'Box-C', 'AVAILABLE'),
('C3', 'Box-C', 'AVAILABLE'),
('C4', 'Box-C', 'AVAILABLE'),
('C5', 'Box-C', 'AVAILABLE'),
('C6', 'Box-C', 'AVAILABLE'),
('C7', 'Box-C', 'AVAILABLE'),
('C8', 'Box-C', 'AVAILABLE'),
('C9', 'Box-C', 'AVAILABLE'),
('C10', 'Box-C', 'AVAILABLE'),
('C11', 'Box-C', 'AVAILABLE'),
('C12', 'Box-C', 'AVAILABLE'),
('C13', 'Box-C', 'AVAILABLE'),
('C14', 'Box-C', 'AVAILABLE'),
('C15', 'Box-C', 'AVAILABLE'),
('C16', 'Box-C', 'AVAILABLE'),
('C18', 'Box-C', 'AVAILABLE'),
('C17', 'Box-C', 'AVAILABLE'),
('B23', 'Box-B', 'AVAILABLE'),
('B22', 'Box-B', 'AVAILABLE'),
('B21', 'Box-B', 'AVAILABLE'),
('B20', 'Box-B', 'AVAILABLE'),
('B19', 'Box-B', 'AVAILABLE'),
('B18', 'Box-B', 'AVAILABLE'),
('B24', 'Box-B', 'AVAILABLE'),
('A21', 'Box-A', 'AVAILABLE'),
('A20', 'Box-A', 'AVAILABLE'),
('A19', 'Box-A', 'AVAILABLE'),
('A18', 'Box-A', 'AVAILABLE'),
('A17', 'Box-A', 'AVAILABLE'),
('A16', 'Box-A', 'AVAILABLE'),
('C19', 'Box-C', 'AVAILABLE'),
('C20', 'Box-C', 'AVAILABLE'),
('C21', 'Box-C', 'AVAILABLE'),
('C22', 'Box-C', 'AVAILABLE'),
('C23', 'Box-C', 'AVAILABLE'),
('C24', 'Box-C', 'AVAILABLE'),
('A23', 'Box-A', 'AVAILABLE'),
('A22', 'Box-A', 'AVAILABLE'),
('B25', 'Box-B', 'AVAILABLE'),
('B26', 'Box-B', 'AVAILABLE'),
('B27', 'Box-B', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `seats_hangover`
--

DROP TABLE IF EXISTS `seats_hangover`;
CREATE TABLE IF NOT EXISTS `seats_hangover` (
  `id` varchar(11) COLLATE utf8_bin NOT NULL,
  `seat_group` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'AVAILABLE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `seats_hangover`
--

INSERT INTO `seats_hangover` (`id`, `seat_group`, `status`) VALUES
('A1', 'Box-A', 'AVAILABLE'),
('A2', 'Box-A', 'AVAILABLE'),
('A3', 'Box-A', 'AVAILABLE'),
('A4', 'Box-A', 'BOOKED'),
('A5', 'Box-A', 'BOOKED'),
('A6', 'Box-A', 'AVAILABLE'),
('A7', 'Box-A', 'AVAILABLE'),
('A8', 'Box-A', 'AVAILABLE'),
('A9', 'Box-A', 'AVAILABLE'),
('A10', 'Box-A', 'AVAILABLE'),
('A11', 'Box-A', 'AVAILABLE'),
('A12', 'Box-A', 'AVAILABLE'),
('A13', 'Box-A', 'AVAILABLE'),
('A14', 'Box-A', 'AVAILABLE'),
('A15', 'Box-A', 'AVAILABLE'),
('A16', 'Box-A', 'AVAILABLE'),
('A17', 'Box-A', 'AVAILABLE'),
('A18', 'Box-A', 'AVAILABLE'),
('A19', 'Box-A', 'AVAILABLE'),
('A20', 'Box-A', 'AVAILABLE'),
('A21', 'Box-A', 'AVAILABLE'),
('A22', 'Box-A', 'AVAILABLE'),
('A23', 'Box-A', 'AVAILABLE'),
('B1', 'Box-B', 'AVAILABLE'),
('B2', 'Box-B', 'AVAILABLE'),
('B3', 'Box-B', 'AVAILABLE'),
('B4', 'Box-B', 'AVAILABLE'),
('B5', 'Box-B', 'AVAILABLE'),
('B6', 'Box-B', 'AVAILABLE'),
('B7', 'Box-B', 'AVAILABLE'),
('B8', 'Box-B', 'AVAILABLE'),
('B9', 'Box-B', 'AVAILABLE'),
('B10', 'Box-B', 'AVAILABLE'),
('B11', 'Box-B', 'AVAILABLE'),
('B12', 'Box-B', 'AVAILABLE'),
('B13', 'Box-B', 'AVAILABLE'),
('B14', 'Box-B', 'AVAILABLE'),
('B15', 'Box-B', 'AVAILABLE'),
('B18', 'Box-B', 'AVAILABLE'),
('B19', 'Box-B', 'AVAILABLE'),
('B20', 'Box-B', 'AVAILABLE'),
('B21', 'Box-B', 'AVAILABLE'),
('B22', 'Box-B', 'AVAILABLE'),
('B23', 'Box-B', 'AVAILABLE'),
('B24', 'Box-B', 'AVAILABLE'),
('B25', 'Box-B', 'AVAILABLE'),
('B26', 'Box-B', 'AVAILABLE'),
('B27', 'Box-B', 'AVAILABLE'),
('C1', 'Box-C', 'BOOKED'),
('C2', 'Box-C', 'AVAILABLE'),
('C3', 'Box-C', 'AVAILABLE'),
('C4', 'Box-C', 'AVAILABLE'),
('C5', 'Box-C', 'AVAILABLE'),
('C6', 'Box-C', 'AVAILABLE'),
('C7', 'Box-C', 'AVAILABLE'),
('C8', 'Box-C', 'AVAILABLE'),
('C9', 'Box-C', 'AVAILABLE'),
('C10', 'Box-C', 'AVAILABLE'),
('C11', 'Box-C', 'AVAILABLE'),
('C12', 'Box-C', 'AVAILABLE'),
('C13', 'Box-C', 'AVAILABLE'),
('C14', 'Box-C', 'AVAILABLE'),
('C15', 'Box-C', 'AVAILABLE'),
('C16', 'Box-C', 'AVAILABLE'),
('C17', 'Box-C', 'AVAILABLE'),
('C18', 'Box-C', 'AVAILABLE'),
('C19', 'Box-C', 'AVAILABLE'),
('C20', 'Box-C', 'AVAILABLE'),
('C21', 'Box-C', 'AVAILABLE'),
('C22', 'Box-C', 'AVAILABLE'),
('C23', 'Box-C', 'AVAILABLE'),
('C24', 'Box-C', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `seats_iron`
--

DROP TABLE IF EXISTS `seats_iron`;
CREATE TABLE IF NOT EXISTS `seats_iron` (
  `id` varchar(11) COLLATE utf8_bin NOT NULL,
  `seat_group` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'AVAILABLE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `seats_iron`
--

INSERT INTO `seats_iron` (`id`, `seat_group`, `status`) VALUES
('A1', 'Box-A', 'AVAILABLE'),
('A2', 'Box-A', 'AVAILABLE'),
('A3', 'Box-A', 'BOOKED'),
('A4', 'Box-A', 'BOOKED'),
('A5', 'Box-A', 'AVAILABLE'),
('A6', 'Box-A', 'AVAILABLE'),
('A7', 'Box-A', 'AVAILABLE'),
('A8', 'Box-A', 'AVAILABLE'),
('A9', 'Box-A', 'AVAILABLE'),
('A10', 'Box-A', 'AVAILABLE'),
('A11', 'Box-A', 'AVAILABLE'),
('A12', 'Box-A', 'AVAILABLE'),
('A13', 'Box-A', 'AVAILABLE'),
('A14', 'Box-A', 'AVAILABLE'),
('A15', 'Box-A', 'AVAILABLE'),
('A16', 'Box-A', 'AVAILABLE'),
('A17', 'Box-A', 'AVAILABLE'),
('A18', 'Box-A', 'AVAILABLE'),
('A19', 'Box-A', 'AVAILABLE'),
('A20', 'Box-A', 'AVAILABLE'),
('A21', 'Box-A', 'AVAILABLE'),
('A22', 'Box-A', 'AVAILABLE'),
('A23', 'Box-A', 'AVAILABLE'),
('B1', 'Box-B', 'AVAILABLE'),
('B2', 'Box-B', 'AVAILABLE'),
('B3', 'Box-B', 'AVAILABLE'),
('B4', 'Box-B', 'BOOKED'),
('B5', 'Box-B', 'AVAILABLE'),
('B6', 'Box-B', 'AVAILABLE'),
('B7', 'Box-B', 'AVAILABLE'),
('B8', 'Box-B', 'AVAILABLE'),
('B9', 'Box-B', 'AVAILABLE'),
('B10', 'Box-B', 'AVAILABLE'),
('B11', 'Box-B', 'AVAILABLE'),
('B12', 'Box-B', 'AVAILABLE'),
('B13', 'Box-B', 'AVAILABLE'),
('B14', 'Box-B', 'AVAILABLE'),
('B15', 'Box-B', 'AVAILABLE'),
('B18', 'Box-B', 'AVAILABLE'),
('B19', 'Box-B', 'AVAILABLE'),
('B20', 'Box-B', 'AVAILABLE'),
('B21', 'Box-B', 'AVAILABLE'),
('B22', 'Box-B', 'AVAILABLE'),
('B23', 'Box-B', 'AVAILABLE'),
('B24', 'Box-B', 'AVAILABLE'),
('B25', 'Box-B', 'AVAILABLE'),
('B26', 'Box-B', 'AVAILABLE'),
('B27', 'Box-B', 'AVAILABLE'),
('C1', 'Box-C', 'AVAILABLE'),
('C2', 'Box-C', 'AVAILABLE'),
('C3', 'Box-C', 'AVAILABLE'),
('C4', 'Box-C', 'AVAILABLE'),
('C5', 'Box-C', 'AVAILABLE'),
('C6', 'Box-C', 'AVAILABLE'),
('C7', 'Box-C', 'AVAILABLE'),
('C8', 'Box-C', 'AVAILABLE'),
('C9', 'Box-C', 'AVAILABLE'),
('C10', 'Box-C', 'AVAILABLE'),
('C11', 'Box-C', 'AVAILABLE'),
('C12', 'Box-C', 'AVAILABLE'),
('C13', 'Box-C', 'AVAILABLE'),
('C14', 'Box-C', 'AVAILABLE'),
('C15', 'Box-C', 'AVAILABLE'),
('C16', 'Box-C', 'AVAILABLE'),
('C17', 'Box-C', 'AVAILABLE'),
('C18', 'Box-C', 'AVAILABLE'),
('C19', 'Box-C', 'AVAILABLE'),
('C20', 'Box-C', 'AVAILABLE'),
('C21', 'Box-C', 'AVAILABLE'),
('C22', 'Box-C', 'AVAILABLE'),
('C23', 'Box-C', 'AVAILABLE'),
('C24', 'Box-C', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `seats_spongebob`
--

DROP TABLE IF EXISTS `seats_spongebob`;
CREATE TABLE IF NOT EXISTS `seats_spongebob` (
  `id` varchar(11) COLLATE utf8_bin NOT NULL,
  `seat_group` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'AVAILABLE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `seats_spongebob`
--

INSERT INTO `seats_spongebob` (`id`, `seat_group`, `status`) VALUES
('A1', 'Box-A', 'BOOKED'),
('A2', 'Box-A', 'AVAILABLE'),
('A3', 'Box-A', 'BOOKED'),
('A4', 'Box-A', 'AVAILABLE'),
('A5', 'Box-A', 'AVAILABLE'),
('A6', 'Box-A', 'AVAILABLE'),
('A7', 'Box-A', 'AVAILABLE'),
('A8', 'Box-A', 'AVAILABLE'),
('A9', 'Box-A', 'AVAILABLE'),
('A10', 'Box-A', 'AVAILABLE'),
('A11', 'Box-A', 'AVAILABLE'),
('A12', 'Box-A', 'AVAILABLE'),
('A13', 'Box-A', 'AVAILABLE'),
('A14', 'Box-A', 'AVAILABLE'),
('A15', 'Box-A', 'AVAILABLE'),
('A16', 'Box-A', 'AVAILABLE'),
('A17', 'Box-A', 'AVAILABLE'),
('A18', 'Box-A', 'AVAILABLE'),
('A19', 'Box-A', 'AVAILABLE'),
('A20', 'Box-A', 'AVAILABLE'),
('A21', 'Box-A', 'AVAILABLE'),
('A22', 'Box-A', 'AVAILABLE'),
('A23', 'Box-A', 'AVAILABLE'),
('B1', 'Box-B', 'AVAILABLE'),
('B2', 'Box-B', 'AVAILABLE'),
('B3', 'Box-B', 'BOOKED'),
('B4', 'Box-B', 'AVAILABLE'),
('B5', 'Box-B', 'AVAILABLE'),
('B6', 'Box-B', 'AVAILABLE'),
('B7', 'Box-B', 'AVAILABLE'),
('B8', 'Box-B', 'AVAILABLE'),
('B9', 'Box-B', 'AVAILABLE'),
('B10', 'Box-B', 'AVAILABLE'),
('B11', 'Box-B', 'AVAILABLE'),
('B12', 'Box-B', 'AVAILABLE'),
('B13', 'Box-B', 'AVAILABLE'),
('B14', 'Box-B', 'AVAILABLE'),
('B15', 'Box-B', 'AVAILABLE'),
('B18', 'Box-B', 'AVAILABLE'),
('B19', 'Box-B', 'AVAILABLE'),
('B20', 'Box-B', 'AVAILABLE'),
('B21', 'Box-B', 'AVAILABLE'),
('B22', 'Box-B', 'AVAILABLE'),
('B23', 'Box-B', 'AVAILABLE'),
('B24', 'Box-B', 'AVAILABLE'),
('B25', 'Box-B', 'AVAILABLE'),
('B26', 'Box-B', 'AVAILABLE'),
('B27', 'Box-B', 'AVAILABLE'),
('C1', 'Box-C', 'AVAILABLE'),
('C2', 'Box-C', 'AVAILABLE'),
('C3', 'Box-C', 'AVAILABLE'),
('C4', 'Box-C', 'AVAILABLE'),
('C5', 'Box-C', 'AVAILABLE'),
('C6', 'Box-C', 'AVAILABLE'),
('C7', 'Box-C', 'AVAILABLE'),
('C8', 'Box-C', 'AVAILABLE'),
('C9', 'Box-C', 'AVAILABLE'),
('C10', 'Box-C', 'AVAILABLE'),
('C11', 'Box-C', 'AVAILABLE'),
('C12', 'Box-C', 'AVAILABLE'),
('C13', 'Box-C', 'AVAILABLE'),
('C14', 'Box-C', 'AVAILABLE'),
('C15', 'Box-C', 'AVAILABLE'),
('C16', 'Box-C', 'AVAILABLE'),
('C17', 'Box-C', 'AVAILABLE'),
('C18', 'Box-C', 'AVAILABLE'),
('C19', 'Box-C', 'AVAILABLE'),
('C20', 'Box-C', 'AVAILABLE'),
('C21', 'Box-C', 'AVAILABLE'),
('C22', 'Box-C', 'AVAILABLE'),
('C23', 'Box-C', 'AVAILABLE'),
('C24', 'Box-C', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `seats_this_is_the_end`
--

DROP TABLE IF EXISTS `seats_this_is_the_end`;
CREATE TABLE IF NOT EXISTS `seats_this_is_the_end` (
  `id` varchar(11) COLLATE utf8_bin NOT NULL,
  `seat_group` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'AVAILABLE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `seats_this_is_the_end`
--

INSERT INTO `seats_this_is_the_end` (`id`, `seat_group`, `status`) VALUES
('A1', 'Box-A', 'BOOKED'),
('A2', 'Box-A', 'AVAILABLE'),
('A3', 'Box-A', 'AVAILABLE'),
('A4', 'Box-A', 'AVAILABLE'),
('A5', 'Box-A', 'AVAILABLE'),
('A6', 'Box-A', 'AVAILABLE'),
('A7', 'Box-A', 'AVAILABLE'),
('A8', 'Box-A', 'AVAILABLE'),
('A9', 'Box-A', 'AVAILABLE'),
('A10', 'Box-A', 'AVAILABLE'),
('A11', 'Box-A', 'AVAILABLE'),
('A12', 'Box-A', 'AVAILABLE'),
('A13', 'Box-A', 'AVAILABLE'),
('A14', 'Box-A', 'AVAILABLE'),
('A15', 'Box-A', 'AVAILABLE'),
('A16', 'Box-A', 'AVAILABLE'),
('A17', 'Box-A', 'AVAILABLE'),
('A18', 'Box-A', 'AVAILABLE'),
('A19', 'Box-A', 'AVAILABLE'),
('A20', 'Box-A', 'AVAILABLE'),
('A21', 'Box-A', 'AVAILABLE'),
('A22', 'Box-A', 'AVAILABLE'),
('A23', 'Box-A', 'AVAILABLE'),
('B1', 'Box-B', 'AVAILABLE'),
('B2', 'Box-B', 'AVAILABLE'),
('B3', 'Box-B', 'AVAILABLE'),
('B4', 'Box-B', 'AVAILABLE'),
('B5', 'Box-B', 'AVAILABLE'),
('B6', 'Box-B', 'AVAILABLE'),
('B7', 'Box-B', 'AVAILABLE'),
('B8', 'Box-B', 'AVAILABLE'),
('B9', 'Box-B', 'AVAILABLE'),
('B10', 'Box-B', 'AVAILABLE'),
('B11', 'Box-B', 'AVAILABLE'),
('B12', 'Box-B', 'AVAILABLE'),
('B13', 'Box-B', 'AVAILABLE'),
('B14', 'Box-B', 'AVAILABLE'),
('B15', 'Box-B', 'AVAILABLE'),
('B18', 'Box-B', 'AVAILABLE'),
('B19', 'Box-B', 'AVAILABLE'),
('B20', 'Box-B', 'AVAILABLE'),
('B21', 'Box-B', 'AVAILABLE'),
('B22', 'Box-B', 'AVAILABLE'),
('B23', 'Box-B', 'AVAILABLE'),
('B24', 'Box-B', 'AVAILABLE'),
('B25', 'Box-B', 'AVAILABLE'),
('B26', 'Box-B', 'AVAILABLE'),
('B27', 'Box-B', 'AVAILABLE'),
('C1', 'Box-C', 'AVAILABLE'),
('C2', 'Box-C', 'AVAILABLE'),
('C3', 'Box-C', 'AVAILABLE'),
('C4', 'Box-C', 'AVAILABLE'),
('C5', 'Box-C', 'AVAILABLE'),
('C6', 'Box-C', 'AVAILABLE'),
('C7', 'Box-C', 'AVAILABLE'),
('C8', 'Box-C', 'AVAILABLE'),
('C9', 'Box-C', 'AVAILABLE'),
('C10', 'Box-C', 'AVAILABLE'),
('C11', 'Box-C', 'AVAILABLE'),
('C12', 'Box-C', 'AVAILABLE'),
('C13', 'Box-C', 'AVAILABLE'),
('C14', 'Box-C', 'AVAILABLE'),
('C15', 'Box-C', 'AVAILABLE'),
('C16', 'Box-C', 'AVAILABLE'),
('C17', 'Box-C', 'AVAILABLE'),
('C18', 'Box-C', 'AVAILABLE'),
('C19', 'Box-C', 'AVAILABLE'),
('C20', 'Box-C', 'AVAILABLE'),
('C21', 'Box-C', 'AVAILABLE'),
('C22', 'Box-C', 'AVAILABLE'),
('C23', 'Box-C', 'AVAILABLE'),
('C24', 'Box-C', 'AVAILABLE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
