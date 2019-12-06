-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 03 déc. 2019 à 12:34
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `backoffice`
--

-- --------------------------------------------------------

--
-- Structure de la table `champs`
--

CREATE TABLE `champs` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `champs`
--

INSERT INTO `champs` (`id`, `libelle`) VALUES
(1, 'champ1'),
(2, 'email'),
(3, 'email'),
(4, 'adresse'),
(5, 'numero de telephone'),
(8, 'Hebergement'),
(13, 'ID FTP'),
(14, 'Administration du site en production'),
(16, 'ID OVH'),
(18, 'hello world'),
(19, 'blabla');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`) VALUES
(1, 'Doctor Agency'),
(2, 'Pepite Agency'),
(3, 'Immo Agency'),
(4, 'Desk Agency'),
(5, 'Karting Agency'),
(6, 'Groovy Agency'),
(7, 'Racing Agency'),
(8, 'Wolf Agency'),
(9, 'Billard Agency'),
(10, 'Music Agency'),
(11, 'Phone Agency'),
(12, 'Heisenberg Agency'),
(13, 'Igloo Agency'),
(14, 'Tacos Agency'),
(15, 'Skateboard Agency'),
(16, 'Cinema Agency'),
(17, 'FIA Agency'),
(18, 'Hifi Agency'),
(19, 'Let\'s GO Agency'),
(20, 'Youpi Agency');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `valeurchamps`
--

CREATE TABLE `valeurchamps` (
  `id` int(11) NOT NULL,
  `id_clients` int(11) NOT NULL,
  `id_champs` int(11) NOT NULL,
  `valeurs` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `valeurchamps`
--

INSERT INTO `valeurchamps` (`id`, `id_clients`, `id_champs`, `valeurs`) VALUES
(1, 1, 1, 'azertyuiop'),
(2, 2, 2, 'tartampion@tartampion.fr'),
(3, 3, 3, 'machin@machin.com'),
(5, 1, 4, 'rue untel'),
(6, 2, 5, '0689875623'),
(7, 1, 8, 'Ovh'),
(8, 1, 13, 'js255'),
(9, 1, 14, 'Bonjour'),
(10, 1, 16, 'js3131'),
(11, 1, 18, 'Bonjour tout le monde'),
(12, 1, 19, 'lala');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `champs`
--
ALTER TABLE `champs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `valeurchamps`
--
ALTER TABLE `valeurchamps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_client_client_id` (`id_clients`),
  ADD KEY `fk_id_champ_champ_id` (`id_champs`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `champs`
--
ALTER TABLE `champs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `valeurchamps`
--
ALTER TABLE `valeurchamps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `valeurchamps`
--
ALTER TABLE `valeurchamps`
  ADD CONSTRAINT `fk_id_champ_champ_id` FOREIGN KEY (`id_champs`) REFERENCES `champs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_client_client_id` FOREIGN KEY (`id_clients`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
