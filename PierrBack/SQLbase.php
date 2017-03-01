-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 28 Février 2017 à 12:50
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `magicien`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `soustitre` varchar(50) NOT NULL,
  `texte` longtext NOT NULL,
  `image` text NOT NULL,
  `video` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `soustitre`, `texte`, `image`, `video`, `date`) VALUES
(33, 'Journée portes ouvertes', 'Découvrez le cercle ', 'Tous les cours reprennent dés le lundi 19 Septembre, c\'est pourquoi afin que vous puissiez vous renseigner, nous rencontrer ou tout simplement vous inscrire pour cette saison 2016 - 2017, nous organisons une journée portes ouvertes le samedi 17 septembre 2016 de 10h à 18h.\r\nNos nouveaux locaux se situe au GAM (Groupement Artistique Montpellierain) Zi Fréjorgues ouest, rue roland Garros, 34130 Mauguio - Lattes', 'yep.png', '', '2017-02-28 08:21:11'),
(34, 'C\'est la Rentrée', 'Finis les vacances !', 'Vous avez entre 6 et 106 ans et vous souhaitez vous engouffrer dans l’apprentissage d’un vrai savoir magique.\r\n\r\nAlors rendez vous sur le site du Centre Cultuel Le GAM, ou par téléphone au 06.61.20.32.28. pour prendre connaissance de nos tarifs, alors profitez-en pour decrouvrir cet art hors du commun.', 'pouces.png', '', '2017-02-28 08:22:05'),
(35, 'Nouveau Local', 'Sa déménage', 'Votre espace Boutique de Magie a définitivement disparu, nous ne faisons plus de vente.\r\nMais attention l\'ecole et la salle de spectacle Magique n\'ont fait que déménager au Centre Cultuel Le GAM, Esp. Com. Fréjorgues Ouest, 46, Rue R. Garros, Mauguio/Lattes.\r\n\r\nCours collectif ou particulier, spectcale de close-up, d\'hypnose ou café theatre.\r\nVous retrouverez tout ce que vous avez toujours aimé et bien plus dans nos nouveaux locaux.', 'dev.png', '', '2017-02-28 08:22:50');

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
(83, '2017-03-09 00:00:00', 'La Comédie du Mas, Mas du Pont, 34920 Le Crès ', 'Raconte-moi ta Magie', 12, 'Ladies and Gentlemen, we are so happy to introduce the great... ok ok !\r\n\r\nLe stand up n’est pas que l’affaire des américains, encore plus lorsqu’il s’agit de stand up magique pour enfants. C’est en réalité l’affaire de Pierr Cika, qui va durant une heure zigzaguer le long de sa vie de magicien et nous en raconter quelques anecdotes, du premier tour de sa vie, jusqu’à la recherche de son successeur, en passant par la fée avec qui il s’est marié, il vous racontera tout.\r\nUn moment plein de rire et d’émotion à partager en famille, à partir de 4ans, avec en final un grande illusion (vu à la télé).\r\nConseillé pour les C.E et les collectivité. Ideal pour un spectacle de Noël'),
(84, '2017-02-11 00:00:00', 'La Comédie du Mas, Mas du Pont, 34920 Le Crès ', 'Le Magie Chiant', 12, 'À l’adolescence, Pierr Cika croise la route d’un magicien qui lui enseigne un simple tour de disparition de pièce, mais qui deviendra pour lui le début d’une passion, d’un métier, d’une vie.\r\nAujourd’hui, il met ses talents de grand magicien au service d’un spectacle composé de ses plus célèbres tours, dans une ambiance intimiste, le tout avec humour et dérision.\r\nSoirée bluffante en perspective !'),
(85, '2017-03-15 00:00:00', 'La Comédie du Mas, Mas du Pont, 34920 Le Crès ', 'Hypnose Xperience', 12, 'Durant près de deux heures vous partagerez en groupe, une expérience hors du commun.\r\n\r\nDes plus interactif ce spectacle d\'hypnose aborde cette discipline comme rarement elle a déjà était abordé.Endormissement en rafale, modification des sens, de la mémoire et du comportement,inductions hypnotiques liées à des sons d’ambiancespour plonger les sujets ainsi que les spectateurs encore plus loin dans l’action, présence d’une application web pour repousser les limites de l’interactivité, le tout saupoudré de beaucoup d’humour et réalisé dans le respect le plus total des sujets et des spectateurs.\r\n\r\nTel est le programme d’Hypnose Xpérience.');

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
(83, 'Raconte-moi ta Magie', '2017-03-09 00:00:00', '2017-03-09 00:00:00', 83),
(84, 'Le Magie Chiant', '2017-02-11 00:00:00', '2017-02-11 00:00:00', 84),
(85, 'Hypnose Xperience', '2017-03-15 00:00:00', '2017-03-15 00:00:00', 85);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `image` text,
  `video` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `titre`, `image`, `video`, `date`) VALUES
(14, 'https://www.francebleu.fr/emissions/l-invite-de-ca-vaut-le-detour-france-bleu-herault/herault/ca-vaut-le-detour-l-hypnotiseur-pierre-cika', 'media2.png', '', '2017-02-28 10:25:29'),
(15, 'http://www.ladepeche.fr/article/2016/03/23/2310023-hypnose-xperience-spectacle-le-29mars.html', 'media1.png', '', '2017-02-28 10:25:12'),
(16, 'http://www.midilibre.fr/2016/10/08/la-doline-ouvre-la-porte-a-l-hypnotiseur-pierr-cika,1406166.php', 'media3.png', '', '2017-02-28 10:24:47');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande_calendrier`
--
ALTER TABLE `commande_calendrier`
  ADD CONSTRAINT `fk_commande_calendrier_commande1` FOREIGN KEY (`commande_num`) REFERENCES `commande` (`num`) ON DELETE NO ACTION ON UPDATE NO ACTION;
