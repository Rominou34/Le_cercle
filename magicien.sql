-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 22 Février 2017 à 10:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `magicien`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(128) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `soustitre` varchar(50) NOT NULL,
  `texte` longtext NOT NULL,
  `image` text NOT NULL,
  `video` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `url`, `titre`, `soustitre`, `texte`, `image`, `video`, `date`) VALUES
(1, 'test', 'Test', 'test article', 'bla', '../img/img_articles/4480381.jpg', 'https://www.youtube.com/watch?v=oJIOKaLRezY&index=5&list=FLIolKVT6SkUBPGMcoh9N__A', '0000-00-00 00:00:00'),
(2, 'test-bis', 'Test bis', 'test bis', 'Blabla', '../img/img_articles/78611l.jpg', 'https://www.youtube.com/watch?v=LEkro9_VPnw', '0000-00-00 00:00:00'),
(3, 'ceci-est-un-article', 'Ceci est un article', 'Article de test', 'Salut les mecs', '11990387_10207430606383245_8543304009195807499_n.jpg', 'https://www.youtube.com/watch?v=IK6pN63Q8fk', '2017-02-21 11:18:52'),
(5, 'test-publication-article', 'Test publication article', 'test publi', 'blabla', '13631609_267292293627965_4982060648728675963_n.jpg', 'https://www.youtube.com/watch?v=DNFqdYrBC5c', '2017-02-21 11:39:29'),
(6, 'test-de-publication', 'Test de publication', 'voila voila', 'test', '1468792948474.png', 'https://www.youtube.com/watch?v=sDc0ZUBm38Y', '2017-02-21 11:42:08'),
(7, 'salut', 'Salut', 'test', 'Coucou', 'aB3zljT.jpg', 'https://www.youtube.com/watch?v=sDc0ZUBm38Y', '2017-02-21 11:43:04');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `date_livraison` datetime DEFAULT NULL,
  `patient_id` varchar(50) NOT NULL,
  `prix_produit_id` varchar(50) NOT NULL,
  `id_praticien` int(11) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`num`,`patient_id`,`prix_produit_id`),
  KEY `fk_commande_patient1_idx` (`patient_id`),
  KEY `fk_commande_prix_produit1_idx` (`prix_produit_id`),
  KEY `id_praticien` (`id_praticien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

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

CREATE TABLE IF NOT EXISTS `commande_calendrier` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `commande_num` int(11) NOT NULL,
  PRIMARY KEY (`id`,`commande_num`),
  KEY `fk_commande_calendrier_commande1_idx` (`commande_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande_calendrier`
--

INSERT INTO `commande_calendrier` (`id`, `title`, `start`, `end`, `commande_num`) VALUES
(77, 'Anniversaire 1 an', '2017-04-01 00:00:00', '2017-04-01 00:00:00', 77),
(79, 'Hypnose de folie', '2017-02-16 00:00:00', '2017-02-16 00:00:00', 79),
(80, 'Test', '2017-02-03 00:00:00', '2017-02-03 00:00:00', 80);

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
