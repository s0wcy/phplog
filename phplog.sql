-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 17 fév. 2019 à 22:41
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phplog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(22) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(127) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `author`, `date`, `content`, `image`) VALUES
(1, 'My first Dribbble Shot', 'Alex', '17/02/2019', 'Hello Dribbble, I’m Alexandre Chabeau. I’m happy to be part of the community , I’m here to learn and share inspirations and I hope you’ll like my first shot as a player ! I would like to thanks @Cr. Cruz for the invitation, and @yoangross !', 'article_dribbble.png'),
(2, 'Creating my own blog!', 'Alex', '05/02/2019', 'To apply what we learn during lasts weeks in class, I started creating my own PHP blog based on mySQL. I’ll work using only native PHP and GitHub to maintain the project further.\r\nIt’s also a way to introduce myself, my hobbies and share my works in illustration, development and some interesting articles / diaries of my life (not narcissic at all ¯\\_(ツ)_/¯ ) !', 'article_php.png'),
(3, 'Nike Hyperadapt ad', 'Alex', '09/02/2019', 'I spend my time looking without really watching at the ads on the docks while waiting for my train.\r\nI wondered what, on these big posters, could catch my attention. And the answer is the difficulty.\r\n\r\nWhat I can not perceive and understand instantly is strangely what fascinates me the most. It’s paradoxical, because the strength of the greatest design is their ability to distinguish quickly.', 'article_nike.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` tinyint(127) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `age`, `gender`) VALUES
(6, 'Caxa', 'caxa@caxa.fr', 'f9824ba4a0c1053d3c448d752236fe4f', 10, 'male'),
(5, 'John', 'johndoe@proton.com', '9cdfb439c7876e703e307864c9167a15', 99, 'male'),
(4, 'Batou', 'batou@batou.fr', '098f6bcd4621d373cade4e832627b4f6', 20, 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
