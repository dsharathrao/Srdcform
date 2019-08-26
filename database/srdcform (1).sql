-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2019 at 03:30 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `srdcform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `user_id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`user_id`, `login`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `SNo` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`SNo`, `branch_id`, `branch`) VALUES
(1, 1, 'B.A'),
(2, 2, 'B.Com'),
(3, 3, 'B.Sc');

-- --------------------------------------------------------

--
-- Table structure for table `form_db`
--

CREATE TABLE IF NOT EXISTS `form_db` (
  `year` varchar(30) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `branch_id` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `lecture` varchar(100) NOT NULL,
  `sn01` varchar(255) NOT NULL,
  `sn02` varchar(255) NOT NULL,
  `sn03` varchar(255) NOT NULL,
  `sn04` varchar(255) NOT NULL,
  `sn05` varchar(255) NOT NULL,
  `sn06` varchar(255) NOT NULL,
  `sn07` varchar(255) NOT NULL,
  `sn08` varchar(255) NOT NULL,
  `sn09` varchar(255) NOT NULL,
  `sn10` varchar(255) NOT NULL,
  `sn11` varchar(255) NOT NULL,
  `sn12` varchar(255) NOT NULL,
  `sn13` varchar(255) NOT NULL,
  `sn14` varchar(255) NOT NULL,
  `sn15` varchar(255) NOT NULL,
  `sn16` varchar(255) NOT NULL,
  `sn17` varchar(255) NOT NULL,
  `sn18` varchar(255) NOT NULL,
  `sn19` varchar(255) NOT NULL,
  `sn20` varchar(255) NOT NULL,
  `sn21` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_db`
--

INSERT INTO `form_db` (`year`, `semester`, `branch_id`, `group`, `subject`, `lecture`, `sn01`, `sn02`, `sn03`, `sn04`, `sn05`, `sn06`, `sn07`, `sn08`, `sn09`, `sn10`, `sn11`, `sn12`, `sn13`, `sn14`, `sn15`, `sn16`, `sn17`, `sn18`, `sn19`, `sn20`, `sn21`, `total`) VALUES
('1', '2', '3', '3', '1', '300', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '', ''),
('1', '2', '3', '3', '1', '300', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '', ''),
('1', '2', '3', '1', '3', '105', '5', '5', '5', '5', '5', '5', '4', '3', '2', '2', '3', '2', '3', '4', '5', '4', '3', '5', '3', '4', '', ''),
('2', '4', '3', '3', '1', '303', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '1', '5', '5', '5', '', ''),
('3', '6', '3', '3', '3', '102', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '', ''),
('2', '4', '3', '1', '2', '202', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `status`) VALUES
(1, 'M.P.C.s', 1),
(2, 'M.E.C.s', 1),
(3, 'M.S.C.s', 1),
(4, 'B.Z.C', 1),
(5, 'B.B.A', 1),
(6, 'B.COM(Computers)', 1),
(7, 'B.COM(General)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE IF NOT EXISTS `lectures` (
  `lecture_id` int(11) NOT NULL,
  `lecture_name` varchar(255) NOT NULL,
  `group` varchar(100) NOT NULL,
  `subject_deal` varchar(100) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`lecture_id`, `lecture_name`, `group`, `subject_deal`, `subject_id`, `status`) VALUES
(100, 'U.V.S Kumar', '', '', 3, 1),
(101, 'SRI. K.Sampath kumar', '', '', 3, 1),
(102, 'DR. D.Chandra Sekhar Reddy', '', '', 3, 1),
(103, 'B.Ramakrishna', '', '', 3, 1),
(104, 'K Jithendra', '', '', 3, 1),
(105, 'G Bharadwaj', '', '', 3, 1),
(106, 'A Jyothi', '', '', 3, 1),
(107, 'B Prathyusha', '', '', 3, 1),
(108, 'D Asha', '', '', 3, 1),
(110, 'R Rajyalakshmi', '', '', 3, 1),
(111, 'V.Sudhakar', '', '', 3, 1),
(200, 'DR. M.Venkateswarlu', '', '', 2, 1),
(201, 'C Nagaraju', '', '', 2, 1),
(202, 'D chenna keshava rao', '', '', 2, 1),
(300, 'Dr. M. Balasubramanyam', '', '', 1, 1),
(301, 'C Naga Bhaskar', '', '', 1, 1),
(302, 'D Suneetha', '', '', 1, 1),
(303, 'E. Krishnavenamma', '', '', 1, 1),
(304, 'K Prasanna Lakshmi', '', '', 1, 1),
(305, 'S. Abdul mazeed', '', '', 1, 1),
(400, 'B Lakshmi Sravani', '', '', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `SNo` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`SNo`, `semester_id`, `semester`) VALUES
(1, 1, '1st semester'),
(2, 2, '2nd semester'),
(3, 3, '3rd semester'),
(4, 4, '4th semester'),
(5, 5, '5th semester'),
(6, 6, '6th semester');

-- --------------------------------------------------------

--
-- Table structure for table `srdc_user`
--

CREATE TABLE IF NOT EXISTS `srdc_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `srdc_user`
--

INSERT INTO `srdc_user` (`user_id`, `login`, `pass`) VALUES
(1, '1606061', 'webcap'),
(2, '1606001', 'webcap'),
(3, '1606002', 'webcap'),
(4, '1606003', 'webcap'),
(5, '1606004', 'webcap'),
(6, '1606005', 'webcap'),
(7, '1606006', 'webcap'),
(8, '1606007', 'webcap'),
(9, '1606008', 'webcap'),
(10, '1606009', 'webcap'),
(11, '1606010', 'webcap'),
(12, '1606011', 'webcap'),
(13, '1606012', 'webcap'),
(14, '1606013', 'webcap'),
(15, '1606014', 'webcap'),
(16, '1606015', 'webcap');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `group_id`, `status`) VALUES
(1, 'MATHS', 1, 1),
(2, 'Physics', 1, 1),
(3, 'Computer Science', 1, 1),
(4, 'Electronics', 2, 1),
(5, 'statistics', 3, 1),
(1, 'MATHS', 2, 1),
(1, 'MATHS', 3, 1),
(3, 'Computer Science', 2, 1),
(3, 'Computer Science', 3, 1),
(6, 'Botany', 4, 1),
(7, 'Zoology', 4, 1),
(8, 'Chemistry', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE IF NOT EXISTS `year` (
  `SNo` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`SNo`, `year_id`, `year`) VALUES
(1, 1, '1st Year'),
(2, 2, '2nd Year'),
(3, 3, '3rd year');
