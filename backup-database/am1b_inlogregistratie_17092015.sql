-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 17 sep 2015 om 09:43
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1b_inlogregistratie`
--
CREATE DATABASE IF NOT EXISTS `am1b_inlogregistratie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1b_inlogregistratie`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personalia`
--

CREATE TABLE IF NOT EXISTS `personalia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(100) NOT NULL,
  `tussenvoegsel` varchar(20) NOT NULL,
  `achternaam` varchar(200) NOT NULL,
  `email` varchar(400) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `leeftijd` int(10) unsigned NOT NULL,
  `haarkleur` enum('023-bruin','024-blond','025-grijs','026-rood','027-zwart','028-roze') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Gegevens worden geëxporteerd voor tabel `personalia`
--

INSERT INTO `personalia` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `email`, `wachtwoord`, `leeftijd`, `haarkleur`) VALUES
(32, 'Bert', 'de', 'Bakker', 'bakker@gmail.com', 'geheim', 34, '026-rood'),
(33, '', '', '', 'developer@gmail.com', 'geheim', 0, ''),
(34, '', '', '', 'developer@gmail.com', 'geheim', 0, ''),
(35, '', '', '', 'developer@gmail.com', 'geheim', 0, ''),
(36, 'Sjakie', 'van', 'Oldenzaal', 'oldenzaal@gmail.com', 'ultrageheim', 19, '027-zwart');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
