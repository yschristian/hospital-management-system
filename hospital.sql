-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 11:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `passwords` varchar(10) NOT NULL,
  `confirm` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `email`, `gender`, `nationality`, `birthday`, `passwords`, `confirm`, `created_at`) VALUES
(14, ' yubahwe', 'shema christian', 'yyy@gmail.com', 'male', 'bahamian', '2021-08-10', '0', 1234, '2021-08-16 14:08:58'),
(15, ' shema', 'bizi', 'yschristian7@gmail.com', 'male', 'bahamian', '2021-08-31', '$2y$10$xOm', 1234, '2021-08-16 14:09:38'),
(16, ' bizi', 'alice', 'tutus@gmail.com', 'male', 'ghanaian', '2021-09-01', '$2y$10$2X7', 123, '2021-08-16 14:14:35'),
(17, ' hirwa', ' cloude', 'hirwa@gmail.com', 'male', 'romanian', '2021-02-11', '$2y$10$wLR', 1234, '2021-08-16 14:37:13'),
(18, ' chris', 'manzi', 'yubahwe500@gmail.com', 'male', 'swedish', '2008-02-13', '$2y$10$UzL', 12345, '2021-08-16 20:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appoint_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `birthday` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `depa_name` varchar(255) NOT NULL,
  `sickness` int(11) NOT NULL,
  `test` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appoint_id`, `fname`, `birthday`, `gender`, `province`, `district`, `email`, `phone`, `depa_name`, `sickness`, `test`, `created_at`) VALUES
(10, 'yubahwe christian', 0, '', '2021-08-02', 'head', 'male', 0, 'General Surgery ', 781453127, 0, '2021-08-05 11:41:27'),
(11, 'ytytry fgttgfg', 2021, 'male', 'grerwrw', 'terrew', 'ewrewr', 0, 'General Surgery ', 0, 0, '2021-08-05 11:55:07'),
(12, 'yubahew', 2021, 'male', 'western', 'nyamasheke', 'kigali@gmail.com', 0, 'General Surgery ', 0, 0, '2021-08-05 11:59:18'),
(13, 'yubahew', 2021, 'male', 'western', 'nyamasheke', 'kigali@gmail.com', 784381529, 'General Surgery ', 0, 0, '2021-08-05 11:59:49'),
(14, 'yubahew', 2021, 'male', 'western', 'nyamasheke', 'kigali@gmail.com', 784381529, 'General Surgery ', 0, 0, '2021-08-05 12:00:58'),
(15, 'yubahew', 2021, 'none', 'western', 'kigali', 'yubahwesc@gmail.com', 78234832, 'Ear, Nose & Throat', 0, 0, '2021-08-05 12:01:38'),
(16, 'yubahew', 2021, 'none', 'western', 'kigali', 'yubahwesc@gmail.com', 78234832, 'Ear, Nose & Throat', 0, 0, '2021-08-05 12:16:16'),
(17, 'yubahew', 2021, 'none', 'western', 'kigali', 'yubahwesc@gmail.com', 78234832, 'Ear, Nose & Throat', 0, 0, '2021-08-05 12:16:38'),
(18, 'yubahwe christian', 2019, 'none', 'western', 'nyamasheke', 'yubahwesc@gmail.com', 787453222, 'Neurosurgery', 0, 0, '2021-08-05 12:17:38'),
(19, 'yubahwe', 2021, 'male', 'south', 'nyagatare', 'yschristian7@gmail.com', 7896667, 'Neurosurgery', 0, 0, '2021-08-16 13:39:23'),
(20, 'yubahwe', 2021, 'male', 'south', 'nyagatare', 'yschristian7@gmail.com', 7896667, 'Cardiology', 0, 0, '2021-08-16 14:21:14'),
(21, ' ', 0, '', 'north', 'gicumbi', 'hirwa@gmail.com', 738543333, 'General Surgery ', 0, 0, '2021-08-16 14:38:49'),
(22, ' ', 0, '', 'south', 'nyagatare', 'hirwa@gmail.com', 738543333, 'Orthopedics ', 0, 0, '2021-08-16 14:40:55'),
(23, ' ', 0, '', 'north', 'nyagatare', 'hirwa@gmail.com', 738543333, 'Obstetrics & Gynaecology', 0, 0, '2021-08-16 14:42:16'),
(24, ' ', 0, '', 'north', 'nyagatare', 'hirwa@gmail.com', 738543333, 'General Surgery ', 0, 0, '2021-08-16 15:43:11'),
(25, ' ', 2021, 'male', 'south', 'nyagatare', 'hirwa@gmail.com', 738543333, 'General Surgery ', 0, 0, '2021-08-16 16:26:18'),
(26, ' ', 2021, 'male', 'south', 'nyagatare', 'hirwa@gmail.com', 738543333, 'General Surgery ', 0, 0, '2021-08-16 16:27:20'),
(27, ' ', 2021, 'male', 'north', 'nyagatare', 'hirwa@gmail.com', 738543333, 'Cardiology', 122, 222, '2021-08-16 16:27:38'),
(28, ' hirwa  cloude', 2021, 'male', 'north', 'nyagatare', 'hirwa@gmail.com', 738543333, 'Cardiology', 122, 222, '2021-08-16 16:28:22'),
(29, ' hirwa  cloude', 2021, 'male', 'south', 'nyagatare', 'hirwa@gmail.com', 2147483647, 'Obstetrics & Gynaecology', 111, 111, '2021-08-16 16:29:19'),
(30, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:09:25'),
(31, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:13:48'),
(32, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:14:33'),
(33, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:18:46'),
(34, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:19:16'),
(35, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:20:47'),
(36, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:21:52'),
(37, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:24:24'),
(38, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:24:28'),
(39, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:24:40'),
(40, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:28:10'),
(41, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:40:11'),
(42, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:40:28'),
(43, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', 0, 0, '2021-08-16 20:41:16'),
(44, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'General Surgery ', 0, 0, '2021-08-16 20:41:39'),
(45, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'General Surgery ', 0, 0, '2021-08-16 20:41:41'),
(46, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'General Surgery ', 0, 0, '2021-08-16 20:42:15'),
(47, ' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'General Surgery ', 0, 0, '2021-08-16 20:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doct_id` int(11) NOT NULL,
  `doct_name` varchar(255) NOT NULL,
  `doct_depa` varchar(255) NOT NULL,
  `doct_email` varchar(255) NOT NULL,
  `doct_password` int(11) NOT NULL,
  `approval` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sms` tinytext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fname`, `phone`, `email`, `sms`, `created_at`) VALUES
(1, 'Cristiano', 788888888, 'cristiano@juve.com', 'Hello good people on the internet', '2021-07-31 08:54:42'),
(2, 'Messi', 722222222, 'messi@barca.com', 'Hello my gangs on the platform', '2021-07-31 08:56:02'),
(3, 'Rashford', 733333333, 'rashford@manu.com', 'Life is good!!', '2021-07-31 09:22:08'),
(4, 'yubahew', 78234832, 'ytutyutyu@gamil.com', 'message to be conveyed to us!', '2021-07-31 10:04:56'),
(5, 'Ayton', 978234875, 'd\'ayton@gmail.com', 'it\'a all good out here', '2021-07-31 13:32:12'),
(6, 'yubahew', 784381529, 'yubahwesc@gmail.com', 'hey good job', '2021-07-31 16:12:12'),
(7, 'trophime', 777888777, 'trophime@gmail.com', 'he mn,l;p][]\'\\\r\nhkhjhgf', '2021-07-31 18:23:10'),
(8, 'yubahwe shema', 787453222, 'yschristian7@gmail.com', 'welcome', '2021-08-04 12:52:53'),
(9, 'yubahwe', 978234875, 'yubahwesc@gmail.com', 'hery', '2021-08-04 15:34:55'),
(10, 'yubahwe', 978234875, 'yubahwesc@gmail.com', 'hery', '2021-08-04 15:35:03'),
(11, 'yubahwe', 978234875, 'yubahwesc@gmail.com', 'hery', '2021-08-04 15:35:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appoint_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doct_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
