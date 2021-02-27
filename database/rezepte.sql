-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 05:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chefkoch`
--

-- --------------------------------------------------------

--
-- Table structure for table `rezepte`
--

CREATE TABLE `rezepte` (
  `ID` int(11) NOT NULL,
  `Rezeptname` varchar(500) NOT NULL,
  `arbinfo` varchar(500) NOT NULL,
  `portion` float NOT NULL,
  `Zubereitungszeit` varchar(500) NOT NULL,
  `Schwierigkeitsgrad` varchar(500) NOT NULL,
  `Kalorien` varchar(500) NOT NULL,
  `cooktime` varchar(50) NOT NULL,
  `waittime` varchar(50) NOT NULL,
  `Zutaten` varchar(500) NOT NULL,
  `Zubereitung` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `User` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezepte`
--

INSERT INTO `rezepte` (`ID`, `Rezeptname`, `arbinfo`, `portion`, `Zubereitungszeit`, `Schwierigkeitsgrad`, `Kalorien`, `cooktime`, `waittime`, `Zutaten`, `Zubereitung`, `category`, `User`) VALUES
(7, 'Lego', '', 0, '0', 'schwer', '0', '', '', 'Legoset', 'auspacken, essen', '', 11),
(8, 'SpÃ¤tzle', 'einfach und schnell', 1, '13', 'leicht', '600', '9', '0', 'spÃ¤tzle, schinken und zwiebeln', 'alles anbraten und fertig', 'Abendessen Lunch   ', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rezepte`
--
ALTER TABLE `rezepte`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rezepte`
--
ALTER TABLE `rezepte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
