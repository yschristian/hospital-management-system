-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 02:35 PM
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
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `passwords` varchar(10) NOT NULL,
  `confirm` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `pat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`firstname`, `lastname`, `email`, `gender`, `nationality`, `birthday`, `passwords`, `confirm`, `created_at`, `pat_id`) VALUES
(' shema', 'bizi', 'yschristian7@gmail.com', 'male', 'bahamian', '2021-08-31', '$2y$10$xOm', 1234, '2021-08-16 14:09:38', 1),
(' hirwa', ' cloude', 'hirwa@gmail.com', 'male', 'romanian', '2021-02-11', '$2y$10$wLR', 1234, '2021-08-16 14:37:13', 2),
(' chris', 'manzi', 'yubahwe500@gmail.com', 'male', 'swedish', '2008-02-13', '$2y$10$UzL', 12345, '2021-08-16 20:06:24', 3),
(' keza', 'kimana', 'keza2@gmail.com', 'male', 'belgian', '2019-10-20', '$2y$10$ipv', 12345, '2021-08-20 21:43:27', 4);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `fname` varchar(255) NOT NULL,
  `birthday` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `depa_name` varchar(255) NOT NULL,
  `sickness` varchar(255) NOT NULL,
  `test` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `appoint_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`fname`, `birthday`, `gender`, `province`, `district`, `email`, `phone`, `depa_name`, `sickness`, `test`, `created_at`, `appoint_id`) VALUES
(' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', '0', '0', '2021-08-16 20:19:16', 1),
(' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', '0', '0', '2021-08-16 20:20:47', 2),
(' chris manzi', 2008, 'male', 'east', 'rusizi', 'yubahwe500@gmail.com', 784381529, 'Imaging services', '0', '0', '2021-08-16 20:24:24', 3);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doct_name` varchar(255) NOT NULL,
  `doct_depa` varchar(255) NOT NULL,
  `doct_email` varchar(255) NOT NULL,
  `doct_password` int(11) NOT NULL,
  `specialisation` varchar(255) DEFAULT NULL,
  `doct_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doct_name`, `doct_depa`, `doct_email`, `doct_password`, `specialisation`, `doct_id`) VALUES
(' Dr yubahwe shema', ' general surgery', 'yuba@gmail.com', 12345, 'head', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doct_account_appointments`
--

CREATE TABLE `doct_account_appointments` (
  `pat_id` int(11) DEFAULT 1,
  `appoint_id` int(11) DEFAULT 1,
  `doct_id` int(11) DEFAULT 1
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `pat_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fname`, `phone`, `email`, `sms`, `created_at`, `pat_id`) VALUES
(1, 'Cristiano', 788888888, 'cristiano@juve.com', 'Hello good people on the internet', '2021-07-31 08:54:42', 1),
(3, 'Rashford', 733333333, 'rashford@manu.com', 'Life is good!!', '2021-07-31 09:22:08', 1),
(4, 'yubahew', 78234832, 'ytutyutyu@gamil.com', 'message to be conveyed to us!', '2021-07-31 10:04:56', 1),
(5, 'Ayton', 978234875, 'd\'ayton@gmail.com', 'it\'a all good out here', '2021-07-31 13:32:12', 1),
(6, 'yubahew', 784381529, 'yubahwesc@gmail.com', 'hey good job', '2021-07-31 16:12:12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`pat_id`),
  ADD KEY `id` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appoint_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doct_id`);

--
-- Indexes for table `doct_account_appointments`
--
ALTER TABLE `doct_account_appointments`
  ADD KEY `pat_id` (`pat_id`),
  ADD KEY `appoint_id` (`appoint_id`),
  ADD KEY `doct_id` (`doct_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pat_id` (`pat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doct_account_appointments`
--
ALTER TABLE `doct_account_appointments`
  ADD CONSTRAINT `doct_account_appointments_ibfk_1` FOREIGN KEY (`pat_id`) REFERENCES `accounts` (`pat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doct_account_appointments_ibfk_2` FOREIGN KEY (`appoint_id`) REFERENCES `appointments` (`appoint_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doct_account_appointments_ibfk_3` FOREIGN KEY (`doct_id`) REFERENCES `doctor` (`doct_id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`pat_id`) REFERENCES `accounts` (`pat_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
