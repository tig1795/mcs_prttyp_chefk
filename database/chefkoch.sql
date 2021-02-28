-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Feb 2021 um 19:39
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
  `Rezeptname` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `arbinfo` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Zubereitungszeit` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Schwierigkeitsgrad` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Kalorien` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cooktime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `waittime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Zutaten` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Zubereitung` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `User` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `rezepte`
--

INSERT INTO `rezepte` (`ID`, `Rezeptname`, `arbinfo`, `Zubereitungszeit`, `Schwierigkeitsgrad`, `Kalorien`, `cooktime`, `waittime`, `Zutaten`, `Zubereitung`, `category`, `User`) VALUES
(7, 'Lego', '', '0', 'schwer', '0', '', '', 'Legoset', 'auspacken, essen', '', 11),
(8, 'SpÃ¤tzle', 'einfach und schnell', '13', 'leicht', '600', '9', '0', 'spÃ¤tzle, schinken und zwiebeln', 'alles anbraten und fertig', 'Abendessen Lunch   ', 11),
(9, 'Pizza', 'tiefkÃ¼hl', '10', 'leicht', '900', '10', '1', 'Die von Dr. Oetker', 'einfach in Ofen schieben fÃ¼r 10 min', '    ', 11),
(10, 'Bier', 'kÃ¼hl genieÃŸen', '1', 'pfiffig', '250', '', '', 'eine Flasche', 'Ã¶ffnen und trinken', '  FrÃ¼hstÃ¼ck GetrÃ¤nke ', 11),
(11, 'Brokkoliauflauf', 'super leckilecker', '40', 'simpel', '200', '30', '5', 'einen Brokkoli\r\n4 KÃ¤se\r\nbeleibige soÃŸe', 'brokkoli vorkochen, dann mit soÃŸe in eine Auflaufform geben, kÃ¤se drÃ¼ber streuen, 30min backen bei 180Â° und fertig', 'Abendessen Lunch   Backen & SÃ¼ÃŸspeisen', 11),
(12, 'Torte', 'super lecker', '456', 'normal', '4000', '60', '100', 'kuchen', 'teig mixen und backen', '    Backen & SÃ¼ÃŸspeisen', 11),
(13, 'Tiramisu', 'lecker und einfach', '20', 'simpel', '400', '0', '60', 'Bisquits, mascarpone, und so weiter', 'alles mixen und in Form geben. rein in KÃ¼hlschrank', 'Abendessen  FrÃ¼hstÃ¼ck  Backen & SÃ¼ÃŸspeisen', 11),
(19, 'Pommes', 'lecker', '10', 'simpel', '', '', '', 'Pommes', 'Pommes', ' Lunch   ', 12),
(20, 'Pömmes', 'Leckä', '10', 'simpel', '', '', '', 'Pommös', 'Pommös', 'Abendessen    ', 12),
(21, 'Altbayerisches Schnitzel', 'Auch Münchner Schnitzel - leckere Abwechslung zum Wiener Schnitzel', '15', 'normal', '325', '30', '5', 'Schnitzel, süßer Senf, Meerrettich, Käse, Ei, Paniermehl, Salz, Pfeffer, Muskat, Butterschmalz', 'Die Schnitzel nach Belieben klopfen. Jetzt mit Salz, Pfeffer und etwas frisch geriebenem Muskat würzen. Eine Seite der Schnitzel 	   mit süßem Senf und die andere Seite mit Meerrettich einstreichen. Dann die Schnitzel in Ei wenden und mit Semmelbröseln panieren     und in reichlich Butterschmalz auf beiden Seiten goldbraun braten. So wäre das Münchner Schnitzel fertig.\r\n\r\n    Da wir aber ein Altbayerisches Schnitzel wollen, die fertigen Schnitzel in eine Backform legen, geriebenen Käse darüber s', 'Lunch', 1);

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
(10, 'rz@icloud.de', '$2y$10$i2Y3yKyUVVNAsT2neOIafuynHEbGCF.g2pjT/sEyVtYLzEPWjqjbu', 'Roland', 'Zechner', '2021-02-24 14:42:25', '2021-02-24 14:42:25'),
(11, 'jan@email.com', '$2y$10$vBEH2059bY3PKq7U9OpmN.pASNZJaB/k9v/AfdrVDMPpAgoXtMZFS', 'Jan', 'Koe', '2021-02-26 08:14:20', '2021-02-26 08:14:20'),
(12, 'timo.guenther@uni-wuerzburg.de', '$2y$10$EnJ468J/G7/rCIbkFVBTa.9h2Q6ybMymgSXdBz32YmrEtCXFNiB/m', 'Timo', 'Günther', '2021-02-28 16:45:54', '2021-02-28 16:45:54');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT für Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
