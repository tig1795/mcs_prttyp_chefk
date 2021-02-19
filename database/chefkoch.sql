-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Feb 2021 um 14:27
-- Server-Version: 10.4.16-MariaDB
-- PHP-Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `chefkoch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rezepte`
--

CREATE TABLE `rezepte` (
  `ID` int(11) NOT NULL,
  `Rezeptname` varchar(500) NOT NULL,
  `Zubereitungszeit` varchar(500) NOT NULL,
  `Schwierigkeitsgrad` varchar(500) NOT NULL,
  `Kalorien` varchar(500) NOT NULL,
  `Zutaten` varchar(500) NOT NULL,
  `Zubereitung` varchar(500) NOT NULL,
  `User` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `rezepte`
--

INSERT INTO `rezepte` (`ID`, `Rezeptname`, `Zubereitungszeit`, `Schwierigkeitsgrad`, `Kalorien`, `Zutaten`, `Zubereitung`, `User`) VALUES
(1, 'Knusprig dünne Pizza mit Chorizo und Mozzarella', '30 Min.', 'Normal', '420 kcal', '200 g 	Mehl Typ 550, 50g Grieß (Hartweizen), ¼ Würfel Hefe, 160 ml Wasser (lauwarm), 1 TL Salz, 2 EL Olivenöl,\r\n4 Tomate(n) (Roma-Tomaten), 1 TL Oregano (getrocknet), Salz, 70 g Wurst (Chorizo am Stück), 1 Kugel Mozzarella (Büffelmozzarella)', 'Zunächst für den Pizzateig Mehl, Grieß und Salz gründlich vermengen. Die Hefe im warmen Wasser auflösen, 5 Minuten ruhen lassen und dann zur Mehlmischung geben. Die Zutaten so lange mit dem Knethaken des Handrührers, in der Küchenmaschine oder von Hand kneten, bis ein elastischer Teig entsteht, das dauert ungefähr 10 Minuten. Falls der Teig zu fest sein sollte einfach noch etwas warmes Wasser zugeben, wenn der Teig zu flüssig ist, etwas Mehl hinzugeben. Erst dann das Olivenöl unterkneten. Den Te', 'moeyskitchen');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
