-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 06:33 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abadevso_twitouch`
--

-- --------------------------------------------------------

--
-- Table structure for table `inactive_request`
--

CREATE TABLE `inactive_request` (
  `id` int(11) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `request_date` date NOT NULL,
  `inactive_date` date NOT NULL,
  `approval` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inactive_request`
--

INSERT INTO `inactive_request` (`id`, `member_id`, `username`, `request_date`, `inactive_date`, `approval`) VALUES
(1, '10014', 'admin4', '2017-06-15', '2017-06-16', 'yes'),
(2, '10014', 'admin4', '2017-06-16', '2017-06-16', 'yes'),
(3, '10014', 'admin4', '2017-06-16', '2017-06-16', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `payment` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `catagory`, `question`, `answer`, `payment`) VALUES
(1, 'Data Entry', '<p><span style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, sans-serif; font-size: 13px;\">Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery and many waterways. Its <span style=\"background-color: rgb(255, 255, 0);\">Padma </span>(Ganges), <span style=\"background-color: rgb(255, 255, 0);\">Meghna </span>and <span style=\"background-color: rgb(255, 255, 0);\">Jamuna </span>rivers create fertile plains, and travel by boat is common. On the southern coast, the <span style=\"background-color: rgb(255, 255, 0);\">Sundarbans</span>, an enormous mangrove forest shared with Eastern India, is home to the royal Bengal tiger.</span><br></p>', 'Padma Meghna Jamuna Sundarbans', 0.25),
(2, 'Youtube', '<p>https://www.youtube.com/watch?v=Ie6LpKOJVf0<br></p>', 'https://www.youtube.com/watch?v=Ie6LpKOJVf0', 0.35),
(3, 'Facebook', '<p>https://www.facebook.com/laugh.like.we.do<br></p>', 'https://www.facebook.com/laugh.like.we.do', 0.35),
(4, 'Facebook', '<p>https://www.facebook.com/BhalobasaraBhubana<br></p>', 'https://www.facebook.com/BhalobasaraBhubana', 0.35);

-- --------------------------------------------------------

--
-- Table structure for table `job_catagory`
--

CREATE TABLE `job_catagory` (
  `catagory_id` int(11) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `payment` float NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_catagory`
--

INSERT INTO `job_catagory` (`catagory_id`, `catagory`, `payment`, `status`) VALUES
(3, 'Data Entry', 0.25, 'Inactive'),
(4, 'Youtube', 0.35, 'Active'),
(5, 'Captcha', 0.2, 'Inactive'),
(6, 'Facebook', 0.35, 'Active'),
(7, 'google', 0, 'Inactive'),
(8, 'dsf', 0, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `approve_date` date NOT NULL,
  `join_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `username`, `email`, `ref_id`, `approve_date`, `join_date`, `status`) VALUES
(10001, 'Aneek Siddiki', 'aneek', 'aneeksiddiki@gmail.com', '0', '2017-06-12', '2017-06-12', 'Active'),
(10002, 'Rahim Miya', 'rahim', 'rahim@gmail.com', '10001', '0000-00-00', '2017-06-12', 'Active'),
(10003, 'Karim Hossain', 'karim', 'karim@gmail.com', '10002', '0000-00-00', '2017-06-13', 'Active'),
(10005, 'Nahid hasan', 'nahid', 'nahid@gmail.com', '10002', '2017-06-12', '2017-06-13', 'Active'),
(10006, 'Satyajit Kar', 'saneek', 'aneeksiddiki2016@gmail.com', '10002', '2017-06-15', '2017-06-14', 'Active'),
(10007, 'TarequlIslam', 'Tareq', 'tareq@gmail.com', '101010', '2017-06-15', '2017-06-14', 'Active'),
(10008, 'saiful islam', 'saiful', 'siful.makc@gmail.com', '101010', '2017-06-15', '2017-06-14', 'Active'),
(10014, 'sdsa', 'admin4', 'y@gmail.comsss', '434', '0000-00-00', '2017-06-15', 'Inactive'),
(10015, 'dasd', 'adminsds', 'sssy@gmail.com', 'sss', '2017-06-15', '2017-06-15', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `member_balance`
--

CREATE TABLE `member_balance` (
  `member_id` varchar(100) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_balance`
--

INSERT INTO `member_balance` (`member_id`, `balance`) VALUES
('10002', 1.3),
('10003', 2.6),
('10007', 2.1),
('10008', 2.6),
('', 0),
('10014', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_jobs`
--

CREATE TABLE `member_jobs` (
  `job_id` varchar(100) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `job_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_jobs`
--

INSERT INTO `member_jobs` (`job_id`, `member_id`, `ref_id`, `amount`, `job_date`) VALUES
('2', '10002', '10001', 0.35, '2017-06-12'),
('1', '10002', '10001', 0.25, '2017-06-13'),
('1', '10003', '10002', 0.25, '2017-06-13'),
('3', '10003', '10002', 0.35, '2017-06-13'),
('2', '10003', '10002', 0.35, '2017-06-13'),
('4', '10003', '10002', 0.35, '2017-06-13'),
('4', '10002', '10001', 0.35, '2017-06-13'),
('2', '10002', '10001', 0.35, '2017-06-13'),
('3', '10007', '101010', 0.35, '2017-06-14'),
('2', '10007', '101010', 0.35, '2017-06-14'),
('4', '10007', '101010', 0.35, '2017-06-14'),
('3', '10008', '101010', 0.35, '2017-06-14'),
('4', '10008', '101010', 0.35, '2017-06-14'),
('2', '10008', '101010', 0.35, '2017-06-14'),
('1', '10008', '', 0.25, '2017-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `member_ref`
--

CREATE TABLE `member_ref` (
  `member_id` varchar(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `ref_rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_ref`
--

INSERT INTO `member_ref` (`member_id`, `ref_id`, `ref_rank`) VALUES
('10002', '10001', 1),
('10003', '10002', 1),
('10005', '10002', 2),
('10006', '10002', 3),
('10007', '101010', 1),
('10008', '101010', 2),
('10009', 'ss', 1),
('10010', 'dd', 1),
('10011', 'xd', 1),
('10012', 'sd', 1),
('10013', 'dd', 2),
('10014', '434', 1),
('10015', 'sss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ref_earn`
--

CREATE TABLE `ref_earn` (
  `member_id` varchar(100) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_earn`
--

INSERT INTO `ref_earn` (`member_id`, `amount`) VALUES
('10002', 0),
('10003', 0),
('10007', 0),
('10008', 0),
('10014', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_history`
--

CREATE TABLE `transfer_history` (
  `member_id` varchar(100) NOT NULL,
  `reciever_id` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `message` text NOT NULL,
  `transfer_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer_history`
--

INSERT INTO `transfer_history` (`member_id`, `reciever_id`, `amount`, `message`, `transfer_date`) VALUES
('10002', '10003', 1, 'Test', '2017-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `ref_id`, `role`, `status`) VALUES
(1, 'Super Admin', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'aneeksiddiki@gmail.com', '0', 'admin', 'Active'),
(7, 'Rahim Miya', 'rahim', '81dc9bdb52d04dc20036dbd8313ed055', 'rahim@gmail.com', '10001', 'user', 'Active'),
(8, 'Karim Hossain', 'karim', '81dc9bdb52d04dc20036dbd8313ed055', 'karim@gmail.com', '10002', 'user', 'Active'),
(10, 'Nahid hasan', 'nahid', '81dc9bdb52d04dc20036dbd8313ed055', 'nahid@gmail.com', '10002', 'user', 'Active'),
(11, 'Satyajit Kar', 'saneek', '81dc9bdb52d04dc20036dbd8313ed055', 'aneeksiddiki2016@gmail.com', '10002', 'user', 'Active'),
(12, 'TarequlIslam', 'Tareq', '10c3eeeac266ce404598ee45d8451afa', 'tareq@gmail.com', '101010', 'user', 'Active'),
(13, 'saiful islam', 'saiful', '4635f5995c222261ebb71cb48660bd4d', 'siful.makc@gmail.com', '101010', 'user', 'Active'),
(14, 'sdfds', 'admin3', 'abeac07d3c28c1bef9e730002c753ed4', 'khulsna2013@gmail.com', 'ss', 'user', 'Active'),
(15, 'sdsa', 'admin4', 'abeac07d3c28c1bef9e730002c753ed4', 'khulna2013@gmail.comd', 'dd', 'user', 'Inactive'),
(16, 'yeasin', 'admin5', 'abeac07d3c28c1bef9e730002c753ed4', 'ddy@gmail.com', 'xd', 'user', 'Active'),
(17, 'xcfds', 'admin77', 'abeac07d3c28c1bef9e730002c753ed4', 'ssy@gmail.com', 'sd', 'user', 'Active'),
(18, 'arfaa', 'adminssss', 'abeac07d3c28c1bef9e730002c753ed4', 'khulna2013@gmail.comdd', 'dd', 'user', 'Active'),
(19, 'sdsa', 'admin33', 'abeac07d3c28c1bef9e730002c753ed4', 'y@gmail.comsss', '434', 'user', 'Active'),
(20, 'dasd', 'adminsds', 'abeac07d3c28c1bef9e730002c753ed4', 'sssy@gmail.com', 'sss', 'user', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inactive_request`
--
ALTER TABLE `inactive_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_catagory`
--
ALTER TABLE `job_catagory`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inactive_request`
--
ALTER TABLE `inactive_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `job_catagory`
--
ALTER TABLE `job_catagory`
  MODIFY `catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10016;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
