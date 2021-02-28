-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 10:35 AM
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
(8, 'SpÃ¤tzle', 'einfach und schnell', 1, '13', 'leicht', '600', '9', '0', 'spÃ¤tzle, schinken und zwiebeln', 'alles anbraten und fertig', 'Abendessen Lunch   ', 11),
(9, 'Pizza', 'tiefkÃ¼hl', 2, '10min', 'leicht', '900', '10min', '1min', 'Die von Dr. Oetker', 'einfach in Ofen schieben fÃ¼r 10 min', '    ', 11),
(10, 'Bier', 'kÃ¼hl genieÃŸen', 1, '1', 'pfiffig', '250', '', '', 'eine Flasche', 'Ã¶ffnen und trinken', '  FrÃ¼hstÃ¼ck GetrÃ¤nke ', 11),
(11, 'Brokkoliauflauf', 'super leckilecker', 2, '40', 'simpel', '200', '30', '5', 'einen Brokkoli\r\n4 KÃ¤se\r\nbeleibige soÃŸe', 'brokkoli vorkochen, dann mit soÃŸe in eine Auflaufform geben, kÃ¤se drÃ¼ber streuen, 30min backen bei 180Â° und fertig', 'Abendessen Lunch   Backen & SÃ¼ÃŸspeisen', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `passwort`, `vorname`, `nachname`, `created_at`, `updated_at`) VALUES
(9, 'rebecca@arcor.com', '$2y$10$zf/9Wj6inPduyc40hwbqXeKrIp0sIfyALn1hJTexkumUzE5G7shpW', 'Rebecca', 'Hein', '2021-02-24 14:41:27', '2021-02-24 14:41:27'),
(10, 'rz@icloud.de', '$2y$10$i2Y3yKyUVVNAsT2neOIafuynHEbGCF.g2pjT/sEyVtYLzEPWjqjbu', 'Roland', 'Zechner', '2021-02-24 14:42:25', '2021-02-24 14:42:25'),
(11, 'jan@email.com', '$2y$10$vBEH2059bY3PKq7U9OpmN.pASNZJaB/k9v/AfdrVDMPpAgoXtMZFS', 'Jan', 'Koe', '2021-02-26 08:14:20', '2021-02-26 08:14:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rezepte`
--
ALTER TABLE `rezepte`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rezepte`
--
ALTER TABLE `rezepte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
