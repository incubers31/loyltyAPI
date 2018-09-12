-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 10:25 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loyalty`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_password` varchar(256) DEFAULT NULL,
  `user_profile` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `user_password`, `user_profile`) VALUES
(2, 'admin', 'admin', 'admin', NULL),
(3, '', '', '', NULL),
(4, 'sumit', 'sumit', 'sumit', NULL),
(5, '', '', '', NULL),
(6, 'Sumit', '', '', NULL),
(7, 'Sumit', 'incubers.sumit@gmail.com1', '123', NULL),
(8, 'kjk', 'k', '123', NULL),
(9, 'kjk', 'incubers.sumit@gmail.com', '123', NULL),
(10, 'kjk', 'incubers.sumit@gmail.com', '123', NULL),
(11, 'kjk', 'incubers.sumit@gmail.com', '123', NULL),
(12, 'kjk', 'incubers.sumit@gmail.com', '123', NULL),
(13, 'kjk', 'incubers.sumit@gmail.com', '123', NULL),
(14, 'kjk', 'incubers.sumit@gmail.com', '123', NULL),
(15, 'kjk', 'incubers.sumit@gmail.com', '123', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
