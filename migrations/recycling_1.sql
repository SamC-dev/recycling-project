-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 21, 2021 alle 11:38
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `recycling_1`
--

CREATE TABLE `recycling_1` (
  `Day` varchar(50) NOT NULL,
  `Paper` varchar(10) DEFAULT NULL,
  `Plastic` varchar(10) DEFAULT NULL,
  `Glass` varchar(10) DEFAULT NULL,
  `Metal` varchar(10) DEFAULT NULL,
  `Organic` varchar(10) DEFAULT NULL,
  `Other` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `recycling_1`
--

INSERT INTO `recycling_1` (`Day`, `Paper`, `Plastic`, `Glass`, `Metal`, `Organic`, `Other`) VALUES
('Monday', '*', '*', '*', '*', 'yes', '*'),
('Tuesday', '*', 'yes', '*', '*', '*', 'yes'),
('Wednesday', '*', '*', '*', '*', 'yes', '*'),
('Thursday', 'yes', '*', 'yes', 'yes', '*', '*'),
('Friday', '*', '*', '*', '*', 'yes', '*'),
('Saturday', '*', '*', '*', '*', '*', 'yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
