-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 10 Cze 2022, 00:21
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kanban_manager`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kanbans__0029fd9723cfe064d4be8b9d49b3ad15`
--

CREATE TABLE `kanbans__0029fd9723cfe064d4be8b9d49b3ad15` (
  `id` int(11) NOT NULL,
  `task_name` text COLLATE utf8_polish_ci NOT NULL,
  `task_desc` text COLLATE utf8_polish_ci DEFAULT NULL,
  `task_add_date` date NOT NULL,
  `task_end_date` date NOT NULL,
  `status` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `mail` text COLLATE utf8_polish_ci NOT NULL,
  `password` text COLLATE utf8_polish_ci NOT NULL,
  `kanban` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `mail`, `password`, `kanban`) VALUES
(1, 'Piotr Kowalski', 'piotr.kowalski3110@gmail.com', 'a2550eeab0724a691192ca13982e6ebd', 'kanbans__0029fd9723cfe064d4be8b9d49b3ad15');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kanbans__0029fd9723cfe064d4be8b9d49b3ad15`
--
ALTER TABLE `kanbans__0029fd9723cfe064d4be8b9d49b3ad15`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kanbans__0029fd9723cfe064d4be8b9d49b3ad15`
--
ALTER TABLE `kanbans__0029fd9723cfe064d4be8b9d49b3ad15`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
