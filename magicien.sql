-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 22 Février 2017 à 21:03
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `magicien`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `soustitre` varchar(50) NOT NULL,
  `texte` longtext NOT NULL,
  `image` text,
  `video` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `url`, `titre`, `soustitre`, `texte`, `image`, `video`, `date`) VALUES
(28, 'rominou', 'rominou', 'romain', 'jdzjdoz', 'romain.jpg', NULL, '2017-02-22 18:47:39');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `num` int(11) NOT NULL,
  `date_livraison` datetime DEFAULT NULL,
  `patient_id` varchar(50) NOT NULL,
  `prix_produit_id` varchar(50) NOT NULL,
  `id_praticien` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`num`, `date_livraison`, `patient_id`, `prix_produit_id`, `id_praticien`, `description`) VALUES
(77, '2017-04-01 00:00:00', 'Montpellier', 'Anniversaire 1 an', 10, 'trop de love'),
(79, '2017-02-16 00:00:00', 'Marseille', 'Hypnose de folie', 23, 'super spectacle'),
(80, '2017-02-03 00:00:00', 'Madrid', 'Test', 12, 'super');

-- --------------------------------------------------------

--
-- Structure de la table `commande_calendrier`
--

CREATE TABLE `commande_calendrier` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `commande_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande_calendrier`
--

INSERT INTO `commande_calendrier` (`id`, `title`, `start`, `end`, `commande_num`) VALUES
(77, 'Anniversaire 1 an', '2017-04-01 00:00:00', '2017-04-01 00:00:00', 77),
(79, 'Hypnose de folie', '2017-02-16 00:00:00', '2017-02-16 00:00:00', 79),
(80, 'Test', '2017-02-03 00:00:00', '2017-02-03 00:00:00', 80);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `image` text,
  `video` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `url`, `titre`, `image`, `video`, `date`) VALUES
(3, 'blop', 'blop', NULL, NULL, '2017-02-22 20:38:15'),
(4, 'blip', 'blip', '1371867985_01-36.jpg', NULL, '2017-02-22 20:40:45');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`num`,`patient_id`,`prix_produit_id`),
  ADD KEY `fk_commande_patient1_idx` (`patient_id`),
  ADD KEY `fk_commande_prix_produit1_idx` (`prix_produit_id`),
  ADD KEY `id_praticien` (`id_praticien`);

--
-- Index pour la table `commande_calendrier`
--
ALTER TABLE `commande_calendrier`
  ADD PRIMARY KEY (`id`,`commande_num`),
  ADD KEY `fk_commande_calendrier_commande1_idx` (`commande_num`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande_calendrier`
--
ALTER TABLE `commande_calendrier`
  ADD CONSTRAINT `fk_commande_calendrier_commande1` FOREIGN KEY (`commande_num`) REFERENCES `commande` (`num`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
