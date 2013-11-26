-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 26 nov 2013 om 10:01
-- Serverversie: 5.5.24-log
-- PHP-versie: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1a-fotosjaak`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(12) NOT NULL,
  `userrole` enum('customer','root','admininistrator','photographer','developer') NOT NULL DEFAULT 'customer',
  `activated` enum('yes','no') NOT NULL DEFAULT 'no',
  `activationdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(12) NOT NULL,
  `userrole` enum('customer','root','administrator','photographer','developer') NOT NULL DEFAULT 'customer',
  `activated` enum('yes','no') NOT NULL DEFAULT 'no',
  `activationdate` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `infix` varchar(20) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `addressnumber` varchar(10) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `country` varchar(200) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `mobilephonenumber` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
