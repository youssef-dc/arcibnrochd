-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 10 août 2018 à 15:42
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_arcchu`
--

-- --------------------------------------------------------

--
-- Structure de la table `soumission`
--
-- Création :  ven. 10 août 2018 à 13:36
--

DROP TABLE IF EXISTS `soumission`;
CREATE TABLE `soumission` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `services` varchar(100) NOT NULL,
  `etablissements` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `pays` int(100) NOT NULL,
  `auteurs` text NOT NULL,
  `texte` text NOT NULL,
  `date_heure_insertion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_compte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `soumission`
--

INSERT INTO `soumission` (`id`, `titre`, `services`, `etablissements`, `ville`, `pays`, `auteurs`, `texte`, `date_heure_insertion`, `id_compte`) VALUES
(1, 'test', 'anatomopathologie', 'etablissement', 'Casablanca', 0, 'auteur', 'text', '2018-08-10 13:37:14', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `soumission`
--
ALTER TABLE `soumission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `soumission`
--
ALTER TABLE `soumission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


--
-- Métadonnées
--
USE `phpmyadmin`;

--
-- Métadonnées pour la table soumission
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
