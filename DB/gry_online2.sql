-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lis 2018, 00:56
-- Wersja serwera: 10.1.29-MariaDB
-- Wersja PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gry_online2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gry`
--

CREATE TABLE `gry` (
  `ID` int(10) UNSIGNED NOT NULL,
  `tytul` varchar(45) COLLATE utf8_polish_ci DEFAULT NULL,
  `Gatunek` varchar(45) COLLATE utf8_polish_ci DEFAULT NULL,
  `Opis` text COLLATE utf8_polish_ci,
  `Data_wydania` date DEFAULT NULL,
  `cena` float DEFAULT NULL,
  `okladka` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `gry`
--

INSERT INTO `gry` (`ID`, `tytul`, `Gatunek`, `Opis`, `Data_wydania`, `cena`, `okladka`) VALUES
(1, 'Battlefield V', 'Akcji', 'Kolejna część bestsellerowej serii pierwszoosobowych strzelanek, za której opracowanie odpowiada studio DICE. Akcję Battlefield V osadzono w trakcie II wojny światowej. Poza kampanią fabularną i wieloma trybami multiplayer, gra po raz pierwszy oferuje roz', '2018-11-20', 199, 'img/bf.jpg'),
(2, 'Assassin\'s Creed Odyssey ', 'RPG', 'Dziewiąta duża część bestsellerowej serii opowiadającej o konflikcie Asasynów i Templariuszy. Assassin\'s Creed Odyssey jest grą RPG akcji, która zabiera nas w podróż do antycznej Grecji, gdzie wcielamy się w Alexiosa lub Kassandrę, będących wnukami słynne', '2018-10-05', 149.99, 'img/assasin.jpg'),
(3, 'Wiedźmin 3: Dziki Gon', 'RPG', 'Gra action RPG, stanowiąca trzecią część przygód Geralta z Rivii. Podobnie jak we wcześniejszych odsłonach cyklu, Wiedźmin 3: Dziki Gon bazuje na motywach twórczości literackiej Andrzeja Sapkowskiego, jednak nie jest bezpośrednią adaptacją żadnej z jego k', '2015-05-19', 119.99, 'img/wiedzmin3.jpg'),
(4, 'Grand Theft Auto V', 'Akcji ', 'Piąta, pełnoprawna odsłona niezwykle popularnej serii gier akcji, nad której rozwojem pieczę sprawuje studio Rockstar North we współpracy z koncernem Take Two Interactive.', '2013-09-17', 88.45, 'img/gta5.jpg'),
(5, 'Farming Simulator 19', 'Symulacje', 'Farming Simulator 19 to kolejna część cieszącej się dużą popularnością serii symulatorów rolnika.', '2018-11-20', 119, 'img/farming.jpg'),
(6, 'Fallout 76', 'RPG', 'Fallout 76 to poboczna odsłona kultowego cyklu postapokaliptycznych RPG, należąca do gatunku sieciowych survivali w otwartym świecie. Gra bazuje na silniku Fallouta 4, ale tym razem twórcy odłożyli na bok fabułę, skupiając się na elementach budowy baz.', '2018-11-14', 139.99, 'img/fallout.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gry_has_platformy`
--

CREATE TABLE `gry_has_platformy` (
  `GRY_ID` int(10) UNSIGNED NOT NULL,
  `Platformy_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `gry_has_platformy`
--

INSERT INTO `gry_has_platformy` (`GRY_ID`, `Platformy_ID`) VALUES
(1, 1),
(1, 3),
(1, 5),
(2, 1),
(2, 3),
(2, 5),
(3, 1),
(3, 3),
(3, 5),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Uzytkownicy_ID` int(10) UNSIGNED NOT NULL,
  `GRY_ID` int(10) UNSIGNED NOT NULL,
  `Opinia` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `data_dodania` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `platformy`
--

CREATE TABLE `platformy` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nazwa` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `platformy`
--

INSERT INTO `platformy` (`ID`, `Nazwa`) VALUES
(1, 'PC'),
(2, 'PS3'),
(3, 'PS4'),
(4, 'XBOX 360'),
(5, 'XBOX ONE');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nick` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Haslo` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Uprawnienia` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID`, `Nick`, `Haslo`, `Email`, `Uprawnienia`) VALUES
(21, 'Shuvker3', '81dc9bdb52d04dc20036dbd8313ed055', 'kochampo1lski@vp.pl', ''),
(22, 'Shuvker', '2793324de3ba0a658210491c6228078e', 'kocha1mpolski@vp.pl', ''),
(23, '23', '5a1e3a5aede16d438c38862cac1a78db', 'kochampolski@vp.pl12', ''),
(25, 'ShoVkeR', '202cb962ac59075b964b07152d234b70', 'dawid-os99@o2.pl', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `gry`
--
ALTER TABLE `gry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gry_has_platformy`
--
ALTER TABLE `gry_has_platformy`
  ADD PRIMARY KEY (`GRY_ID`,`Platformy_ID`),
  ADD KEY `GRY_has_Platformy_FKIndex1` (`GRY_ID`),
  ADD KEY `GRY_has_Platformy_FKIndex2` (`Platformy_ID`);

--
-- Indexes for table `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Opinie_FKIndex1` (`GRY_ID`),
  ADD KEY `Opinie_FKIndex2` (`Uzytkownicy_ID`);

--
-- Indexes for table `platformy`
--
ALTER TABLE `platformy`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Nick` (`Nick`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `gry`
--
ALTER TABLE `gry`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `platformy`
--
ALTER TABLE `platformy`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `gry_has_platformy`
--
ALTER TABLE `gry_has_platformy`
  ADD CONSTRAINT `gry_has_platformy_ibfk_1` FOREIGN KEY (`GRY_ID`) REFERENCES `gry` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `gry_has_platformy_ibfk_2` FOREIGN KEY (`Platformy_ID`) REFERENCES `platformy` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `opinie`
--
ALTER TABLE `opinie`
  ADD CONSTRAINT `opinie_ibfk_1` FOREIGN KEY (`GRY_ID`) REFERENCES `gry` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `opinie_ibfk_2` FOREIGN KEY (`Uzytkownicy_ID`) REFERENCES `uzytkownicy` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
