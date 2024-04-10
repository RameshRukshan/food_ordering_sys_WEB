-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 10, 2024 at 07:21 PM
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
-- Table structure for table `os_employees`
--

CREATE TABLE `os_employees` (
  `EMP_ID` int(5) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `EMAIL` varchar(150) DEFAULT NULL,
  `PHONE` varchar(10) NOT NULL,
  `USER_ID` int(5) NOT NULL,
  `CREATION_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `LAST_UPDATE_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `os_employees`
--

INSERT INTO `os_employees` (`EMP_ID`, `NAME`, `EMAIL`, `PHONE`, `USER_ID`, `CREATION_DATE`, `LAST_UPDATE_DATE`) VALUES
(1, 'Thilina Pathirana', 'thilina@orgsnc.com', '1234567890', 1, '2024-04-10 12:37:27', '2024-04-10 12:37:27'),
(2, 'Jane Smith', 'jane.smith@example.com', '9876543210', 2, '2024-04-10 12:37:27', '2024-04-10 12:37:27'),
(3, 'Alice Johnson', 'alice.johnson@example.com', '4561237890', 3, '2024-04-10 12:37:27', '2024-04-10 12:37:27'),
(4, 'Bob Brown', 'Bob@gmail.com', '7891234560', 5, '2024-04-10 12:37:27', '2024-04-10 12:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `os_users`
--

CREATE TABLE `os_users` (
  `USER_ID` int(5) NOT NULL,
  `USER_NAME` varchar(12) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `ADMIN_USER` tinyint(1) NOT NULL,
  `CREATION_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `LAST_UPDATE_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `os_users`
--

INSERT INTO `os_users` (`USER_ID`, `USER_NAME`, `PASSWORD`, `ADMIN_USER`, `CREATION_DATE`, `LAST_UPDATE_DATE`) VALUES
(1, 'Admin', 'Admin', 1, '2024-04-10 01:40:49', '2024-04-10 01:40:49'),
(2, 'Jane', 'Jane123', 1, '2024-04-10 01:40:49', '2024-04-10 01:40:49'),
(3, 'Alice', 'Alice123', 1, '2024-04-10 15:29:09', '2024-04-10 15:29:09'),
(5, 'Bob', 'Bob123', 1, '2024-04-10 15:33:20', '2024-04-10 15:33:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `os_employees`
--
ALTER TABLE `os_employees`
  ADD PRIMARY KEY (`EMP_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

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
-- AUTO_INCREMENT for table `os_employees`
--
ALTER TABLE `os_employees`
  MODIFY `EMP_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `os_users`
--
ALTER TABLE `os_users`
  MODIFY `USER_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `os_employees`
--
ALTER TABLE `os_employees`
  ADD CONSTRAINT `os_employees_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `os_users` (`USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
