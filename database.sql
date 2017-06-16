-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 01:19 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `twitouch`
--

-- --------------------------------------------------------

--
-- Table structure for table `inactive_request`
--

CREATE TABLE `inactive_request` (
  `id` int(11) NOT NULL auto_increment,
  `member_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `request_date` date NOT NULL,
  `inactive_date` date NOT NULL,
  `approval` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `inactive_request`
--


-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL auto_increment,
  `catagory` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `payment` float NOT NULL,
  PRIMARY KEY  (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `catagory`, `question`, `answer`, `payment`) VALUES
(1, 'Data Entry', '<p><span style="color: rgb(34, 34, 34); font-family: Roboto, arial, sans-serif; font-size: 13px;">Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery and many waterways. Its <span style="background-color: rgb(255, 255, 0);">Padma </span>(Ganges), <span style="background-color: rgb(255, 255, 0);">Meghna </span>and <span style="background-color: rgb(255, 255, 0);">Jamuna </span>rivers create fertile plains, and travel by boat is common. On the southern coast, the <span style="background-color: rgb(255, 255, 0);">Sundarbans</span>, an enormous mangrove forest shared with Eastern India, is home to the royal Bengal tiger.</span><br></p>', 'Padma Meghna Jamuna Sundarbans', 0.25),
(2, 'Youtube', '<p>https://www.youtube.com/watch?v=Ie6LpKOJVf0<br></p>', 'https://www.youtube.com/watch?v=Ie6LpKOJVf0', 0.35),
(3, 'Facebook', '<p>https://www.facebook.com/laugh.like.we.do<br></p>', 'https://www.facebook.com/laugh.like.we.do', 0.35);

-- --------------------------------------------------------

--
-- Table structure for table `job_catagory`
--

CREATE TABLE `job_catagory` (
  `catagory_id` int(11) NOT NULL auto_increment,
  `catagory` varchar(100) NOT NULL,
  `payment` float NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY  (`catagory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `job_catagory`
--

INSERT INTO `job_catagory` (`catagory_id`, `catagory`, `payment`, `status`) VALUES
(3, 'Data Entry', 0.25, 'Active'),
(4, 'Youtube', 0.35, 'Active'),
(5, 'Captcha', 0.2, 'Inactive'),
(6, 'Facebook', 0.35, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `approve_date` date NOT NULL,
  `join_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY  (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10003 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `username`, `email`, `ref_id`, `approve_date`, `join_date`, `status`) VALUES
(10001, 'Aneek Siddiki', 'aneek', 'aneeksiddiki@gmail.com', '0', '2017-06-12', '2017-06-12', 'Active'),
(10002, 'Rahim Miya', 'rahim', 'rahim@gmail.com', '10001', '0000-00-00', '2017-06-12', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `member_jobs`
--

CREATE TABLE `member_jobs` (
  `job_id` varchar(100) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `job_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_jobs`
--

INSERT INTO `member_jobs` (`job_id`, `member_id`, `amount`, `job_date`) VALUES
('2', '10002', 0.35, '2017-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `ref_id`, `role`) VALUES
(1, 'Aneek Siddiki', 'aneek', '81dc9bdb52d04dc20036dbd8313ed055', 'aneeksiddiki@gmail.com', '10000014', 'admin'),
(7, 'Rahim Miya', 'rahim', '81dc9bdb52d04dc20036dbd8313ed055', 'rahim@gmail.com', '10001', 'user');
