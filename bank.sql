-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 07:53 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transact_history`
--

CREATE TABLE `transact_history` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transact_history`
--

INSERT INTO `transact_history` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Sachin', 'Ayyan', 400, '2021-02-04 10:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `balance`) VALUES
(1, './ayy.png', 'Ayyan', 'Ayyan@gmail.com', 10000),
(2, './s.png', 'Sachin', 'sachin@gmail.com', 10000),
(3, './ani.png', 'Anish', 'anish@gmail.com', 10000),
(4, './pra.png', 'Pranav', 'pranav@gmail.com', 10000),
(5, './all.png', 'Sahil', 'sahil@gmail.com', 10000),
(6, './komal.png', 'Komal', 'komal@gmail.com', 20000),
(7, './tani.png', 'Tanish', 'tanish@gmail.com', 25000),
(8, './all.png', 'user', 'user@gmail.com', 1000),
(9, './all.png', 'Sparks', 'sparks@gmail.com', 5000),
(10, './all.png', 'Website', 'website@gmail.com', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transact_history`
--
ALTER TABLE `transact_history`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transact_history`
--
ALTER TABLE `transact_history`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
