-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 08:56 AM
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
-- Database: `fietsenmaker`
--
CREATE DATABASE IF NOT EXISTS `fietsenmaker` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fietsenmaker`;

-- --------------------------------------------------------

--
-- Table structure for table `fietsen`
--

DROP TABLE IF EXISTS `fietsen`;
CREATE TABLE `fietsen` (
  `merk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `prijs` int(5) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fietsen`
--

INSERT INTO `fietsen` (`merk`, `type`, `prijs`, `id`) VALUES
('Betavus', 'Blockbuster', 699, 1),
('Batavus', 'Flying D', 749, 2),
('Gazelle', 'Giro', 899, 3),
('Gazelle', 'Chamonix', 1049, 4),
('Gazelle', 'Eclipse', 799, 5),
('Giant', 'Competition', 999, 6),
('Giant', 'Expedition AT', 1299, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fietsen`
--
ALTER TABLE `fietsen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fietsen`
--
ALTER TABLE `fietsen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
