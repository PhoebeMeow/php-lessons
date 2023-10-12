-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 08:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grade`
--
CREATE DATABASE IF NOT EXISTS `grade` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `grade`;

-- --------------------------------------------------------

--
-- Table structure for table `cijfers`
--

DROP TABLE IF EXISTS `cijfers`;
CREATE TABLE `cijfers` (
  `id` int(9) NOT NULL,
  `leerling` varchar(255) NOT NULL,
  `cijfer` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cijfers`
--

INSERT INTO `cijfers` (`id`, `leerling`, `cijfer`) VALUES
(1, 'Marc', 9.5),
(2, 'Erso', 6.3),
(3, 'Rose', 7.8),
(4, 'Phoebe', 7.4),
(5, 'Levi', 8.6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cijfers`
--
ALTER TABLE `cijfers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cijfers`
--
ALTER TABLE `cijfers`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
