-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 08:43 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mini-project`
--
CREATE DATABASE IF NOT EXISTS `mini-project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mini-project`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` varchar(9) NOT NULL,
  `a_pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_pass`) VALUES
('a_fb05', '12345'),
('s_fb31', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `m_id` varchar(3) NOT NULL,
  `m_name` char(25) NOT NULL,
  `m_rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `m_name`, `m_rating`) VALUES
('m1', 'The Ruins', 6.5),
('m2', 'Raees', 7.6),
('m3', 'Kung Fu Panda 3', 8.5),
('m4', 'The Transporter', 7.7),
('m5', 'Conjuring 2', 9),
('m6', 'Warcraft', 9.5),
('m7', 'Looper', 5.6),
('m8', 'Fast & Furious 8', 8.1);

-- --------------------------------------------------------

--
-- Table structure for table `theatres`
--

CREATE TABLE IF NOT EXISTS `theatres` (
  `t_id` varchar(3) NOT NULL,
  `t_name` char(30) NOT NULL,
  `t_time` varchar(7) NOT NULL,
  `t_time2` varchar(7) NOT NULL,
  `t_price` int(3) NOT NULL,
  `t_price2` int(3) NOT NULL,
  `screen1` varchar(3) NOT NULL,
  `screen2` varchar(3) NOT NULL,
  `screen3` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatres`
--

INSERT INTO `theatres` (`t_id`, `t_name`, `t_time`, `t_time2`, `t_price`, `t_price2`, `screen1`, `screen2`, `screen3`) VALUES
('t1', 'INOX', '6:30PM', '11:00AM', 200, 212, 'm1', 'm2', 'm4'),
('t2', 'PVR Cinemas', '10:30AM', '3:15PM', 250, 265, 'm3', 'm4', 'm5'),
('t3', 'FUN Cinemas', '11:30AM', '4:20PM', 190, 201, 'm8', 'm2', 'm6'),
('t4', 'Gopalan Arcade', '5:00PM', '9:45AM', 178, 189, 'm1', 'm3', 'm8'),
('t5', 'HMT Theatre', '1:10PM', '7:30PM', 120, 135, 'm5', 'm6', 'm7'),
('t6', 'IMAX 3d', '8:30PM', '10:50AM', 400, 411, 'm7', 'm3', 'm8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `theatres`
--
ALTER TABLE `theatres`
 ADD PRIMARY KEY (`t_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
