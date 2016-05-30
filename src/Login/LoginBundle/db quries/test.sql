-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2016 at 10:48 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(11) NOT NULL,
  `first_team` varchar(255) NOT NULL,
  `second_team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `first_team`, `second_team`) VALUES
(123, 'Royal Challengers Bangalore', 'Kings X11 Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES
(3, 'shashi', 'shashi', 'shashi', 'kumar', 'shashi2466@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rcb`
--

CREATE TABLE IF NOT EXISTS `rcb` (
  `rcb` varchar(25) NOT NULL DEFAULT '',
  `player 1` varchar(255) NOT NULL,
  `player 2` varchar(255) NOT NULL,
  `player 3` varchar(255) NOT NULL,
  `player 4` varchar(255) NOT NULL,
  `player 5` varchar(255) NOT NULL,
  `player 6` varchar(255) NOT NULL,
  `player 7` varchar(255) NOT NULL,
  `player 8` varchar(255) NOT NULL,
  `player 9` varchar(255) NOT NULL,
  `player 10` varchar(255) NOT NULL,
  `player 11` varchar(255) NOT NULL,
  `player 12` varchar(255) NOT NULL,
  `player 13` varchar(255) NOT NULL,
  `player 14` varchar(255) NOT NULL,
  `player 15` varchar(255) NOT NULL,
  `player 16` varchar(255) NOT NULL,
  `player 17` varchar(255) NOT NULL,
  `player 18` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rcb`
--

INSERT INTO `rcb` (`rcb`, `player 1`, `player 2`, `player 3`, `player 4`, `player 5`, `player 6`, `player 7`, `player 8`, `player 9`, `player 10`, `player 11`, `player 12`, `player 13`, `player 14`, `player 15`, `player 16`, `player 17`, `player 18`) VALUES
('rcb', 'shashi', 'kumar', 'kumar1', 'kumar2', 'kumar3', 'kumar4', 'kumar5', 'kumar6', 'kumar7', 'kumar8', 'kumar9', 'kumar10', 'kumar11', 'kumar12', 'kumar13', 'kumar14', 'kumar15', 'kumar16');

-- --------------------------------------------------------

--
-- Table structure for table `sigup`
--

CREATE TABLE IF NOT EXISTS `sigup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sigup`
--

INSERT INTO `sigup` (`id`, `username`, `password`, `email`, `first_name`, `last_name`) VALUES
(0, 'shashi', 'shashi', 'shashi2466@gmail.com', 'shashi', 'kumar'),
(1, 'shashi', 'shashi', 'shashi2466@gmail.com', 'shashi', 'kumar');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team` varchar(255) NOT NULL,
  `player1` varchar(255) NOT NULL,
  `player2` varchar(255) NOT NULL,
  `player3` varchar(255) NOT NULL,
  `player4` varchar(255) NOT NULL,
  `player5` varchar(60) DEFAULT NULL,
  `player6` varchar(60) DEFAULT NULL,
  `player7` varchar(60) DEFAULT NULL,
  `player8` varchar(60) DEFAULT NULL,
  `player9` varchar(60) DEFAULT NULL,
  `player10` varchar(60) DEFAULT NULL,
  `player11` varchar(60) DEFAULT NULL,
  `player12` varchar(60) DEFAULT NULL,
  `player13` varchar(60) DEFAULT NULL,
  `player14` varchar(60) DEFAULT NULL,
  `player15` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team`, `player1`, `player2`, `player3`, `player4`, `player5`, `player6`, `player7`, `player8`, `player9`, `player10`, `player11`, `player12`, `player13`, `player14`, `player15`) VALUES
('rcb', 'virat', 'kl rahul', 'ad develiers', 'arvind', 'gayle', 'addulla', 'chahal', 'watson', 'baby sachin', 'jordon', 'wise', 'harshal patel', 'sarfraz', 'stark', 'binny');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(9) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`) VALUES
(1, 'shashi', 'shashi2466@gmail.com', 'shashi', 'shashi', 'kumar'),
(2, 'bvvvv', 'gvgvg@gggg.com', '65656565', 'vgvg', 'gvgvgv'),
(3, 'fvbhfbvhfb', 'hvhvfhvhv@hhhh.com', 'cbdhbchd', 'satya', 'sarathi'),
(4, 'hvhvh', 'hvhjv@ggg.com', 'hvhv', 'jhvv', 'jvhvh'),
(5, 'gvgvg', 'gvgvg@gggg.com', 'vgvg', 'hvhgv', 'gvgvg'),
(6, '', '', '', '', ''),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', 'gfhfgh', ''),
(13, '', '', '', 'gfhfgh', 'hgf'),
(14, '', '', '', 'gfhfgh', ''),
(15, 'bvc', 'bhbhbhb@jjj.com', 'vcbv', 'bcvb', 'bvc'),
(16, 'hhjff', 'hgfgf@gvvf.com', 'gfgfgf', 'ghxzcg', 'gghfghf'),
(17, 'hfhjfhf', 'hhf@gga.com', 'ghjghgjgh', 'kjdbhg', 'hgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `rcb`
--
ALTER TABLE `rcb`
  ADD PRIMARY KEY (`rcb`);

--
-- Indexes for table `sigup`
--
ALTER TABLE `sigup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
