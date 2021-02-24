-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Feb 2021 um 16:12
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

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `email`, `passwort`, `vorname`, `nachname`, `created_at`, `updated_at`) VALUES
(9, 'rebecca@arcor.com', '$2y$10$zf/9Wj6inPduyc40hwbqXeKrIp0sIfyALn1hJTexkumUzE5G7shpW', 'Rebecca', 'Hein', '2021-02-24 14:41:27', '2021-02-24 14:41:27'),
(10, 'rz@icloud.de', '$2y$10$i2Y3yKyUVVNAsT2neOIafuynHEbGCF.g2pjT/sEyVtYLzEPWjqjbu', 'Roland', 'Zechner', '2021-02-24 14:42:25', '2021-02-24 14:42:25');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
