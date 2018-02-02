-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 feb 2018 om 12:09
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ed`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `phpro_users`
--

CREATE TABLE `phpro_users` (
  `phpro_user_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `taalmaatje` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `phpro_users`
--

INSERT INTO `phpro_users` (`phpro_user_id`, `firstname`, `lastname`, `password`, `taalmaatje`, `birthday`, `email`) VALUES
(15, 'sjaak', 'nijland', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '4-februari-2016', 'willemelfring@hotmail.com'),
(14, 'sjaak', 'nijland', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '4-februari-2016', 'willemelfring@hotmail.com'),
(13, 'willem', 'elfring', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '2-februari-2018', 'willemelfring@hotmail.com'),
(9, 'willem', 'elfring', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '2-februari-2017', 'willemelfring@hotmail.com'),
(10, 'willem', 'elfring', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '2-februari-2017', 'willemelfring@hotmail.com'),
(11, 'willem', 'elfring', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '2-februari-2017', 'willemelfring@hotmail.com'),
(12, 'willem', 'elfring', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '2-februari-2018', 'willemelfring@hotmail.com'),
(16, 'sjaak', 'nijland', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '4-februari-2016', 'willemelfring@hotmail.com'),
(17, 'sjaak', 'nijland', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '4-februari-2016', 'willemelfring@hotmail.com'),
(18, 'sjaak', 'nijland', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'findTaalmaatje', '4-februari-2016', 'willemelfring@hotmail.com');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `phpro_users`
--
ALTER TABLE `phpro_users`
  ADD UNIQUE KEY `phpro_user_id` (`phpro_user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `phpro_users`
--
ALTER TABLE `phpro_users`
  MODIFY `phpro_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
