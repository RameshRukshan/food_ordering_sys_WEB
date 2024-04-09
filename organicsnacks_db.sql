-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 09, 2024 at 11:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organicsnacks_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `os_users`
--

CREATE TABLE `os_users` (
  `USER_ID` int(5) NOT NULL,
  `USER_NAME` varchar(12) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `CREATION_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `LAST_UPDATE_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `os_users`
--

INSERT INTO `os_users` (`USER_ID`, `USER_NAME`, `PASSWORD`, `CREATION_DATE`, `LAST_UPDATE_DATE`) VALUES
(1, 'Admin', 'Admin', '2024-04-10 01:40:49', '2024-04-10 01:40:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `os_users`
--
ALTER TABLE `os_users`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `USER_NAME` (`USER_NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `os_users`
--
ALTER TABLE `os_users`
  MODIFY `USER_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
