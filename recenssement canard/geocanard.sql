-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mar 09 Octobre 2018 à 12:32
-- Version du serveur :  5.7.23-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `geocanard`
--

-- --------------------------------------------------------

--
-- Structure de la table `canard`
--

CREATE TABLE `canard` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `race` varchar(100) NOT NULL,
  `quant` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `infosup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `canard`
--

INSERT INTO `canard` (`id`, `quantite`, `race`, `quant`, `adresse`, `infosup`) VALUES
(1, 6, 'col-vert', '', '', ''),
(37, 1, 'Tadorne de Belon', '2018-08-09', '13 route de saclay appt 5316', 'sa marche'),
(38, 15, 'Non identifié', '2018-08-26', '32 Place de l\'Hôtel de Ville', 'sa marche ha ha ha'),
(39, 1, 'Non identifié', '2018-08-16', '13 route de saclay appt 5316', 'lol');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `canard`
--
ALTER TABLE `canard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `canard`
--
ALTER TABLE `canard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
