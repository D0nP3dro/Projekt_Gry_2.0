-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Lis 2022, 19:23
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `4bg_adrian_obara`
--
CREATE DATABASE IF NOT EXISTS `4bg_adrian_obara` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4bg_adrian_obara`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `postac`
--

CREATE TABLE `postac` (
  `id` int(11) NOT NULL,
  `nazwa_u` varchar(40) NOT NULL,
  `nazwa` varchar(40) NOT NULL,
  `lvl` int(11) NOT NULL,
  `ilosc_expa` int(11) NOT NULL,
  `klasa_postacji` varchar(40) NOT NULL,
  `zdrowie` int(11) NOT NULL,
  `sila` int(11) NOT NULL,
  `szybkosc_a` int(11) NOT NULL,
  `intelekt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `postac`
--

INSERT INTO `postac` (`id`, `nazwa_u`, `nazwa`, `lvl`, `ilosc_expa`, `klasa_postacji`, `zdrowie`, `sila`, `szybkosc_a`, `intelekt`) VALUES
(3, 'koksy123', 'Koks', 31, 16, 'Wojownik', 110342, 3000, 330, 300);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `postac_wybor`
--

CREATE TABLE `postac_wybor` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(40) NOT NULL,
  `zdrowie` int(11) NOT NULL,
  `sila` int(11) NOT NULL,
  `szybkosc_a` int(11) NOT NULL,
  `intelekt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `postac_wybor`
--

INSERT INTO `postac_wybor` (`id`, `nazwa`, `zdrowie`, `sila`, `szybkosc_a`, `intelekt`) VALUES
(1, 'Wojownik', 1200, 12, 3, 3),
(2, 'Mag', 500, 5, 7, 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `potwory`
--

CREATE TABLE `potwory` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(40) NOT NULL,
  `zdrowie` int(11) NOT NULL,
  `sila` int(11) NOT NULL,
  `sa` int(11) NOT NULL,
  `intelekt` int(11) NOT NULL,
  `exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `potwory`
--

INSERT INTO `potwory` (`id`, `nazwa`, `zdrowie`, `sila`, `sa`, `intelekt`, `exp`) VALUES
(1, 'krolik', 120, 2, 5, 5, 5),
(2, 'zaba', 150, 6, 5, 5, 10),
(3, 'Sarna', 200, 12, 7, 3, 22),
(4, 'Wilk', 220, 15, 8, 5, 27),
(5, 'Łoś', 250, 20, 8, 8, 33),
(6, 'Silni Jeleń', 300, 22, 10, 9, 36),
(7, 'Mumia', 350, 26, 12, 10, 40),
(8, 'Czarna Wilczyca', 470, 33, 13, 12, 47),
(9, 'Ork swędzistopa', 500, 40, 14, 13, 52),
(10, 'Nieumarły Mnich', 550, 45, 16, 17, 58),
(11, 'Cmentarny Ghul', 570, 50, 17, 16, 62),
(12, 'Adept', 600, 57, 19, 18, 68),
(13, 'Gombesh', 640, 65, 22, 18, 75),
(14, 'Vulk', 690, 78, 25, 20, 85),
(15, 'Karhu', 730, 85, 28, 22, 96),
(16, 'Bael Bluźnierca', 800, 98, 33, 25, 110),
(17, 'Asuran', 850, 105, 36, 29, 130),
(18, 'Przyzywacz demonów', 899, 122, 42, 35, 150),
(19, 'Demonis Pan Nicości', 980, 138, 53, 39, 180),
(20, 'Arachin Podstępny', 1050, 149, 63, 48, 220),
(21, 'Maddog Magua', 1200, 160, 70, 60, 250),
(22, 'Halina Bajor', 1300, 200, 30, 100, 300),
(23, 'Pan Mirosław Całka', 2000, 300, 300, 300, 1000);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`) VALUES
(1, 'koksy123', '$2y$10$0vWULvLY8nBb.dmvcKuhjO0Vj1Caq117NnvP8pBSBJJCNHfxOqwNO');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `postac`
--
ALTER TABLE `postac`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `postac_wybor`
--
ALTER TABLE `postac_wybor`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `potwory`
--
ALTER TABLE `potwory`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `postac`
--
ALTER TABLE `postac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `postac_wybor`
--
ALTER TABLE `postac_wybor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `potwory`
--
ALTER TABLE `potwory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
