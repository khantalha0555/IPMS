-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 10:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipms`
--

-- --------------------------------------------------------

--
-- Table structure for table `setrange`
--

CREATE TABLE `setrange` (
  `id` int(20) NOT NULL,
  `patient` varchar(40) NOT NULL,
  `mintemp` bigint(10) NOT NULL,
  `maxtemp` bigint(10) NOT NULL,
  `minHR` bigint(10) NOT NULL,
  `maxHR` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setrange`
--

INSERT INTO `setrange` (`id`, `patient`, `mintemp`, `maxtemp`, `minHR`, `maxHR`) VALUES
(1, '', 10, 20, 30, 40),
(2, '', 0, 0, 0, 0),
(3, '', 100, 105, 72, 0),
(4, '', 100, 105, 72, 0),
(5, '', 10, 20, 30, 40);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `patient` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `addres` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `adhaar` bigint(16) NOT NULL,
  `doctor` varchar(20) NOT NULL,
  `age` bigint(5) NOT NULL,
  `ward` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `patient`, `email`, `mobile`, `addres`, `gender`, `adhaar`, `doctor`, `age`, `ward`) VALUES
(1, 'Talha', 'ktalha548@gmail.com', 9819180555, 'wafa', '', 123456, 'khan', 0, 0),
(2, 'talha', 'ktalha548@gmail.com', 9819180555, 'complex', 'a:1:{i:0;s', 897654321, 'khan', 0, 0),
(3, 'talha', 'ktalha548@gmail.com', 9819180555, 'complex', 'Array', 897654321, 'khan', 1, 0),
(4, 'talha', 'ktalha548@gmail.com', 9819180555, 'complex', 'a:1:{i:0;s', 897654321, 'khan', 1, 0),
(10, 'talha', 'ktalha548@gmail.com', 123456, 'G/101 wafa complex, sharifa road amrut n', 'a:1:{i:0;s', 2133, 'abcd', 22, 0),
(11, 'talha', 'ktalha548@gmail.com', 123456, 'G/101 wafa complex, sharifa road amrut n', 's:4:\"MALE\"', 2133, 'abcd', 22, 0),
(12, 'talha', 'ktalha548@gmail.com', 123456, 'G/101 wafa complex, sharifa road amrut n', 'MALE', 2133, 'abcd', 22, 0),
(13, 'zaid', 'ktalha548@gmail.com', 982115, 'G/101 wafa complex, sharifa road amrut n', 'MALE', 64596853, 'chutiya', 25, 0),
(14, '', '', 0, '', 'MALE', 0, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `setrange`
--
ALTER TABLE `setrange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setrange`
--
ALTER TABLE `setrange`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
