-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 26 Octobre 2016 à 01:19
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bloggy_v1_ramla`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `texte` text NOT NULL,
  `date_ajout` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `texte`, `date_ajout`) VALUES
(12, 'titre6', 'tetete', '2016-10-03 00:00:00'),
(13, 'titre55', 'zezed', '2016-11-10 00:00:00'),
(15, 'titre255', 'texte8899', '2017-03-01 00:00:00'),
(16, 'rfsqf', 'frqefersrf', '2016-07-14 00:00:00'),
(17, 'refrfqesrfqerfqe', 'frerfeqfrqe', '2016-04-11 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `sujet` varchar(2000) NOT NULL,
  `message` text NOT NULL,
  `newsletter` tinyint(4) NOT NULL,
  `d_ajout` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `sujet`, `message`, `newsletter`, `d_ajout`) VALUES
(6, 'mohsen@gmail.com', 'sujet1', 'hhhhh', 0, '2016-10-20 19:52:11'),
(7, 'belhadjamorramla@gmail.com', 'ddqsq', 'qsdsdsq', 1, '2016-10-20 19:53:09'),
(8, 'belhadjamorramla@gmail.com', 'ikhk', 'gvkkh', 1, '2016-10-21 01:43:16'),
(9, 'belhadjamorramla@gmail.com', 'ikhk', '84585456/', 1, '2016-10-21 01:43:39'),
(10, 'mimi@gmail.com', 'dwgfdfg', 'dfwgggggggggggg', 1, '2016-10-21 01:44:30'),
(11, 'mimi@gmail.com', 'dwgfdfg', 'dfwgggggggggggg5454', 1, '2016-10-21 01:45:34'),
(12, 'toto@gmail.com', 'sujet22', 'message1', 1, '2016-10-21 01:47:08'),
(14, 'belhadjamorramla@gmail.com', 'sf', 'sf', 1, '2016-10-23 18:23:20'),
(17, 'belhadjamorramla@gmail.com', 'tehegafe', 'efrfrhfr', 1, '2016-10-25 10:18:45'),
(18, 'belhadjamorramla@gmail.com', 'dfvdfv', 'dvffd', 1, '2016-10-25 13:51:30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
