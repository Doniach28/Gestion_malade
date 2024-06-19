-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2023 at 09:58 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `mal`
--

DROP TABLE IF EXISTS `mal`;
CREATE TABLE IF NOT EXISTS `mal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mal`
--

INSERT INTO `mal` (`id`, `nom`, `prenom`, `email`, `adresse`) VALUES
(19, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(4, 'samar', 'chaouch', 'samar.chaouch07@gmail.com', 'moknine'),
(32, 'Abdej', 'cerine', 'cici@gmail.com', 'monastir'),
(6, 'donia', 'chaouch', 'samar.chaouch07@gmail.com', 'moknine'),
(7, 'donia', 'chaouch', 'samar.chaouch07@gmail.com', 'moknine'),
(11, 'donia', 'chaouch', 'samar.chaouch07@gmail.com', 'moknine'),
(12, 'samar', 'chaouch', 'samar.chaouch07@gmail.com', 'moknine'),
(13, 'samar', 'chaouch', 'samar.chaouch07@gmail.com', 'moknine'),
(14, 'samar', 'chaouch', 'samar.chaouch07@gmail.com', 'moknine'),
(15, 'samar', 'chaouch', 'samar.chaouch07@gmail.com', 'moknine'),
(16, 'samar', 'chaouch', 'samar.chaouch07@gmail.com', 'moknine'),
(20, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(21, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(23, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(24, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(25, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(26, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(27, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(28, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(29, 'chaouch', 'layane', 'samar.chaouch07@gmail.com', 'france'),
(30, 'abde', 'mouna', 'mouna07@gmail.com', 'suisse'),
(31, 'abdejeyhd', 'soumaya', 'soumaya07@gmail.com', 'suisse');

-- --------------------------------------------------------

--
-- Table structure for table `malade`
--

DROP TABLE IF EXISTS `malade`;
CREATE TABLE IF NOT EXISTS `malade` (
  `NCIN` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `ntel` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  PRIMARY KEY (`NCIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `malade`
--

INSERT INTO `malade` (`NCIN`, `nom`, `prenom`, `ntel`, `email`, `adresse`) VALUES
(6970617, 'chaouch', 'donia', 53299887, 'dchaouch01@gmail.com', 'moknine');

-- --------------------------------------------------------

--
-- Table structure for table `malade1`
--

DROP TABLE IF EXISTS `malade1`;
CREATE TABLE IF NOT EXISTS `malade1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `NomPrenom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `malade1`
--

INSERT INTO `malade1` (`id`, `NomPrenom`) VALUES
(1, 'donia ch');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `NCIN` int NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` int NOT NULL,
  `Email` int NOT NULL,
  `Login` int NOT NULL,
  `Motdepasse` int NOT NULL,
  `dateinscription` datetime NOT NULL,
  PRIMARY KEY (`NCIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient1`
--

DROP TABLE IF EXISTS `patient1`;
CREATE TABLE IF NOT EXISTS `patient1` (
  `NCIN` int NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Motdepasse` varchar(50) NOT NULL,
  `dateinscription` datetime NOT NULL,
  PRIMARY KEY (`NCIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient1`
--

INSERT INTO `patient1` (`NCIN`, `Nom`, `Prenom`, `Email`, `Login`, `Motdepasse`, `dateinscription`) VALUES
(6970617, 'chaouch', 'samar', 'dchaouch@gmailcom', 'donia', '4fee9ba15c93bb71e118e291bdb5d35e', '2023-04-29 21:14:02'),
(697061, 'chaouch', 'samar', 'dchaouch@gmailcom', 'donia', '4fee9ba15c93bb71e118e291bdb5d35e', '2023-04-29 21:15:04'),
(6980617, 'chaouch', 'idriss', 'idrchaouch@gmailcom', 'idriss', '1b7e64a971f291fcf2e77a9df71b84b1', '2023-04-30 07:53:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
