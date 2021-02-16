-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 16, 2021 alle 14:36
-- Versione del server: 10.4.13-MariaDB
-- Versione PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_db`
--
CREATE DATABASE IF NOT EXISTS `example_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `example_db`;

-- --------------------------------------------------------

--
-- Struttura della tabella `example_data`
--

DROP TABLE IF EXISTS `example_data`;
CREATE TABLE `example_data` (
  `id` int(11) NOT NULL,
  `region` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `example_data`
--

INSERT INTO `example_data` (`id`, `region`, `province`, `city`) VALUES
(1, 'Lombardia', 'Bergamo', 'Lurano'),
(2, 'Lombardia', 'Milano', 'Melzo'),
(3, 'Sicilia', 'Agrigento', 'S.Stefano Quisquina'),
(4, 'Sicilia', 'Palermo', 'Cinisi'),
(5, 'Lombardia', 'Bergamo', 'Verdello'),
(6, 'Lombardia', 'Bergamo', 'Arcene'),
(7, 'Piemonte', 'Torino', 'Settimo Torinese'),
(8, 'Piemonte', 'Torino', 'Susa'),
(9, 'Piemonte', 'Torino', 'Torino'),
(10, 'Piemonte', 'Vercelli', 'Alice Castello'),
(11, 'Piemonte', 'Vercelli', 'Balocco'),
(12, 'Piemonte', 'Vercelli', 'Vercelli'),
(13, 'Lombardia', 'Milano', 'Bresso'),
(14, 'Lombardia', 'Milano', 'Buccinasco'),
(15, 'Lombardia', 'Bergamo', 'Blello'),
(16, 'Lombardia', 'Bergamo', 'Bonate Sopra'),
(17, 'Lombardia', 'Bergamo', 'Canonica d\'Adda'),
(18, 'Sicilia', 'Palermo', 'Monreale'),
(19, 'Sicilia', 'Palermo', 'Palazzo Adriano'),
(20, 'Sicilia', 'Palermo', 'Palermo'),
(21, 'Sicilia', 'Palermo', 'Roccamena'),
(22, 'Sicilia', 'Palermo', 'Termini Imerese'),
(23, 'Sicilia', 'Agrigento', 'Agrigento'),
(24, 'Sicilia', 'Agrigento', 'Caltabellotta'),
(25, 'Sicilia', 'Agrigento', 'Racalmuto'),
(26, 'Sicilia', 'Agrigento', 'Sciacca');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `example_data`
--
ALTER TABLE `example_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `example_data`
--
ALTER TABLE `example_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
