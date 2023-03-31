-- phpMyAdmin SQL Dump
-- version 5.2.0-1.fc36
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 14 nov. 2022 à 09:55
-- Version du serveur : 10.5.16-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laforetbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

CREATE TABLE `biens` (
  `ID` int(11) NOT NULL,
  `Description` varchar(6000) NOT NULL,
  `IDType` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `superficie` int(11) NOT NULL,
  `nbpieces` int(11) NOT NULL,
  `jardin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`ID`, `Description`, `IDType`, `prix`, `ville`, `superficie`, `nbpieces`, `jardin`) VALUES
(1, 'Tourcoing, en plein centre-ville, à proximité immédiate des transports, des écoles et des commerces, Local commercial en rez-de-chaussée d\'environ 295 m2 Ce local comporte de nombreuses pièces, un hall d\'entrée avec accueil, des vestiaires, WC, pièces avec évier. Vente des murs, libre d\'occupation. Local commercial avec de nombreuses vitrines, très beau visuel. Axe passant Anciennement utilisé par une profession libérale, de nombreuses possibilités s\'offrent aux acquéreurs. Possibilité d\'y installer plusieurs activités de type : centre d\'affaires, bureaux, local commercial, Local professionnel, fleuriste, salon de coiffure, boucherie, boulangerie, supérette, salon d\'esthétique, cabinet médical, centre dentaire, centre kiné, rééducation, profession libérale ou Idéal investisseur pour investissement locatif, déficit foncier, rentabilité Caractéristiques supplémentaires: -Etablissement autorisé à recevoir du public - Double accès - Electricité récente avec disjoncteur - Cloison amovible, très large visuel, nombreuses vitrines Prix: 365 000€ frais d\'agence inclus à la charge du vendeur', 3, 365000, 'Tourcoing', 295, 15, 1),
(2, '			Proche Cabinet Médical, Villa T5 sur terrain de 960 m² env. comprenant :<br>\r\n			Au Rdc : Entrée-séjour-salon avec coin cuisine aménagé (évier, éléments, plan de travail, hotte), cellier, 3 chambres avec placard, salle de bains (baignoire , vasque sur meuble), salle d\'eau (douche, double vasque sur meuble), WC, buanderie.<br><br>\r\n			A l\'étage :<br> Mezzanine\r\n			Garage et abri voiture\r\n			Chauffage individuel central gaz avec production eau chaude sanitaire.<br><br>\r\n			DISPONIBLE LE 15 MARS 2022, après travaux d\'embellissements.<br><br>\r\n			Dépôt de garantie :  950 € TTC<br><br>\r\n			Honoraires TTC charge locataire : 1210 € TTC**, dont 330 € au titre de la réalisation de l\'état des lieux', 1, 1210, 'Saint-Denis-lès-Bourg', 960, 5, 0),
(3, 'Situés à moins de 15 kilomètres de Suippes, deux terrains à bâtir bornés de 1098 m² et 1115 m².\r\n\r\nCes terrains sont exclusivement à vendre par Laforêt en mandat Favoriz.\r\n\r\nPrenez contact avec votre agence Laforêt pour une première visite!\r\n\r\nHonoraires à la charge du vendeur', 4, 17000, 'Saint-Jean-sur-Tourbe', 1098, 1, 1),
(4, 'Appartement T5 Paris 14 Métro PERNETY / GAITE (Ligne 13) Rue du Château 75014 PARIS Appartement en dupleix avec terrasse et jardin, comprenant en rez-de-chaussée une entrée, une salle de séjour (41.40m²), une cuisine aménagée et équipée, un bureau (7.09m²), un wc. Le rez-de-chaussée donne sur le jardin privatif. Au premier étage: 4 chambres (13.41m², 12.35m², 12.04m², 17.85m² dont deux donnent sur une terrasse), une salle de bains, une salle de douches avec wc, un buanderie et une penderie. Ces deux étages communiquent par un escalier particulier privatif. Venez découvrir cet appartement maison. Chauffage et eau chaude individuels électriques. Libre de suite. Loyer hors charges 4570 € par mois, provision charges 230 € par mois, loyer charges comprises 4800 € par mois Dépôt de garantie : 9140 € TTC Surface : 158,76 m² 5 pièce(s) 4 chbre(s) Meublé 4800 € par mois ', 2, 4570, 'Paris', 158, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `ID` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(60) NOT NULL,
  `consentement` tinyint(1) NOT NULL,
  `type` varchar(30) NOT NULL,
  `dateCrea` date NOT NULL,
  `dateLastConn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`ID`, `nom`, `prenom`, `email`, `password`, `consentement`, `type`, `dateCrea`, `dateLastConn`) VALUES
(1, 'Mercado', 'Basile', 'basile.mercado@gmail.com', '$2y$10$y/rIbnjCxtPKeHLOPpNVoufbBZzx473GknAxFewgH.uPUrWZzrBMu', 1, 'agent', '2022-09-20', '2022-10-17'),
(22, 'Truc', 'Bidule', 'mahcin@azedaz.com', '$2y$10$iqmaLkO7MS1CX30eVl9uD.Q6WYDznyFLUkaa2Vd8nwXtOJnO.ePO2', 1, 'utilisateur', '2022-10-17', '2022-10-17'),
(32, 'Oudshoorn', 'Gaeztan', 'gaetan.oudshoorn@gmail.com', '$2y$10$rl.5jn7PsH8GxV8pVwH4jOwtZagqUd1fBQFiA5t37nn30Rm7qGswK', 1, 'utilisateur', '2022-11-14', '2022-11-14');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `nom` varchar(35) NOT NULL,
  `IDbien` int(11) NOT NULL,
  `chemin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`nom`, `IDbien`, `chemin`) VALUES
('local 1_7', 1, '../img/local1_7.jpg'),
('local1_1', 1, '../img/local1_1.jpg'),
('local1_2', 1, '../img/local1_2.jpg'),
('local1_3', 1, '../img/local1_3.jpg'),
('local1_4', 1, '../img/local1_4.jpg'),
('local1_5', 1, '../img/local1_5.jpg'),
('local1_6', 1, '../img/local1_6.jpg'),
('local1_8', 1, '../img/local1_8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `json`
--

CREATE TABLE `json` (
  `id` int(11) NOT NULL,
  `json` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE `operation` (
  `libelle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`libelle`) VALUES
('connexion'),
('creerCompte'),
('deconnexion');

-- --------------------------------------------------------

--
-- Structure de la table `trace`
--

CREATE TABLE `trace` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `operation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trace`
--

INSERT INTO `trace` (`id`, `user`, `date`, `operation`) VALUES
(7, 1, '2022-10-17 11:17:56', 'connexion'),
(8, 1, '2022-10-17 11:17:59', 'deconnexion'),
(29, 16, '2022-11-14 09:36:51', 'deconnexion'),
(31, 21, '2022-11-14 09:55:51', 'deconnexion'),
(33, 29, '2022-11-14 09:56:41', 'deconnexion'),
(35, 30, '2022-11-14 10:10:12', 'deconnexion'),
(36, 30, '2022-11-14 10:10:24', 'deconnexion'),
(38, 31, '2022-11-14 10:11:14', 'deconnexion'),
(39, 32, '2022-11-14 10:55:05', 'connexion');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `ID` int(11) NOT NULL,
  `libelle` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`ID`, `libelle`) VALUES
(1, 'maison'),
(2, 'appartement'),
(3, 'local'),
(4, 'terrain_nu'),
(5, 'immeuble');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `biens`
--
ALTER TABLE `biens`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idtype` (`IDType`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`nom`),
  ADD KEY `idbien` (`IDbien`);

--
-- Index pour la table `json`
--
ALTER TABLE `json`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`libelle`);

--
-- Index pour la table `trace`
--
ALTER TABLE `trace`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ce_trace_operation` (`operation`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `biens`
--
ALTER TABLE `biens`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `json`
--
ALTER TABLE `json`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `trace`
--
ALTER TABLE `trace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `biens`
--
ALTER TABLE `biens`
  ADD CONSTRAINT `idtype` FOREIGN KEY (`IDType`) REFERENCES `type` (`ID`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `idbien` FOREIGN KEY (`IDbien`) REFERENCES `biens` (`ID`);

--
-- Contraintes pour la table `json`
--
ALTER TABLE `json`
  ADD CONSTRAINT `json_ibfk_1` FOREIGN KEY (`id`) REFERENCES `compte` (`ID`);

--
-- Contraintes pour la table `trace`
--
ALTER TABLE `trace`
  ADD CONSTRAINT `ce_trace_operation` FOREIGN KEY (`operation`) REFERENCES `operation` (`libelle`);

DELIMITER $$
--
-- Évènements
--
CREATE DEFINER=`root`@`localhost` EVENT `Suppression compte quotidien` ON SCHEDULE EVERY 1 DAY STARTS '2022-10-10 11:58:34' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'ça supprime' DO delete from compte where DATEDIFF(CURRENT_DATE, dateLastConn) > 365$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
