-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 17 oct. 2023 à 22:27
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_pharmacie`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbpharma`
--

CREATE TABLE `tbpharma` (
  `code` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL,
  `qte` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `payer` int(255) NOT NULL,
  `reste` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbpharma`
--

INSERT INTO `tbpharma` (`code`, `nom`, `prix`, `qte`, `total`, `payer`, `reste`) VALUES
(1, 'lno', 15, 5, 75, 14, 61),
(2, '14', 12, 2, 24, 14, 10),
(3, 'azerty', 3, 3, 3, 3, 3),
(4, 'crayon', 1500, 2, 0, 150, 0),
(5, 'crayon', 1500, 2, 0, 150, 0),
(6, 'ndiasseProduct', 9, 9, 81, 11, 70);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbpharma`
--
ALTER TABLE `tbpharma`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbpharma`
--
ALTER TABLE `tbpharma`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
