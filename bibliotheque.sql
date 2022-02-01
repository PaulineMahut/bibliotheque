-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 01 fév. 2022 à 16:42
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `Bibliotheque`
--

CREATE TABLE `Bibliotheque` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Livre`
--

CREATE TABLE `Livre` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `editor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isbn` int(11) NOT NULL,
  `exemplaires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Livre`
--

INSERT INTO `Livre` (`id`, `title`, `resume`, `author`, `editor`, `isbn`, `exemplaires`) VALUES
(1, 'Au revoir', '...........', 'Quelqu&#039;un', 'Autre', 756984, 5);

-- --------------------------------------------------------

--
-- Structure de la table `Note`
--

CREATE TABLE `Note` (
  `id` int(11) NOT NULL,
  `livre_id` int(11) DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`id`, `pseudo`) VALUES
(1, 'titou'),
(2, 'Carmen'),
(3, 'Lia'),
(4, 'Cat');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Bibliotheque`
--
ALTER TABLE `Bibliotheque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Livre`
--
ALTER TABLE `Livre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Note`
--
ALTER TABLE `Note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6F8F552A37D925CB` (`livre_id`),
  ADD KEY `IDX_6F8F552AA76ED395` (`user_id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Bibliotheque`
--
ALTER TABLE `Bibliotheque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Livre`
--
ALTER TABLE `Livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Note`
--
ALTER TABLE `Note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Note`
--
ALTER TABLE `Note`
  ADD CONSTRAINT `FK_6F8F552A37D925CB` FOREIGN KEY (`livre_id`) REFERENCES `Livre` (`id`),
  ADD CONSTRAINT `FK_6F8F552AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
