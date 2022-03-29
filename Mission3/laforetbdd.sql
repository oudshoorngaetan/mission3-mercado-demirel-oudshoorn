-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 29 mars 2022 à 10:02
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

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

DROP TABLE IF EXISTS `biens`;
CREATE TABLE IF NOT EXISTS `biens` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(6000) NOT NULL,
  `IDType` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `superficie` int(11) NOT NULL,
  `nbpieces` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `idtype` (`IDType`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`ID`, `Description`, `IDType`, `prix`, `ville`, `superficie`, `nbpieces`) VALUES
(1, 'Tourcoing, en plein centre-ville, à proximité immédiate des transports, des écoles et des commerces, Local commercial en rez-de-chaussée d\'environ 295 m2 Ce local comporte de nombreuses pièces, un hall d\'entrée avec accueil, des vestiaires, WC, pièces avec évier. Vente des murs, libre d\'occupation. Local commercial avec de nombreuses vitrines, très beau visuel. Axe passant Anciennement utilisé par une profession libérale, de nombreuses possibilités s\'offrent aux acquéreurs. Possibilité d\'y installer plusieurs activités de type : centre d\'affaires, bureaux, local commercial, Local professionnel, fleuriste, salon de coiffure, boucherie, boulangerie, supérette, salon d\'esthétique, cabinet médical, centre dentaire, centre kiné, rééducation, profession libérale ou Idéal investisseur pour investissement locatif, déficit foncier, rentabilité Caractéristiques supplémentaires: -Etablissement autorisé à recevoir du public - Double accès - Electricité récente avec disjoncteur - Cloison amovible, très large visuel, nombreuses vitrines Prix: 365 000€ frais d\'agence inclus à la charge du vendeur', 3, 365000, 'Tourcoing', 295, 15),
(2, '			Proche Cabinet Médical, Villa T5 sur terrain de 960 m² env. comprenant :<br>\r\n			Au Rdc : Entrée-séjour-salon avec coin cuisine aménagé (évier, éléments, plan de travail, hotte), cellier, 3 chambres avec placard, salle de bains (baignoire , vasque sur meuble), salle d\'eau (douche, double vasque sur meuble), WC, buanderie.<br><br>\r\n			A l\'étage :<br> Mezzanine\r\n			Garage et abri voiture\r\n			Chauffage individuel central gaz avec production eau chaude sanitaire.<br><br>\r\n			DISPONIBLE LE 15 MARS 2022, après travaux d\'embellissements.<br><br>\r\n			Dépôt de garantie :  950 € TTC<br><br>\r\n			Honoraires TTC charge locataire : 1210 € TTC**, dont 330 € au titre de la réalisation de l\'état des lieux', 1, 1210, 'Saint-Denis-lès-Bourg', 960, 5),
(3, 'Situés à moins de 15 kilomètres de Suippes, deux terrains à bâtir bornés de 1098 m² et 1115 m².\r\n\r\nCes terrains sont exclusivement à vendre par Laforêt en mandat Favoriz.\r\n\r\nPrenez contact avec votre agence Laforêt pour une première visite!\r\n\r\nHonoraires à la charge du vendeur', 4, 17000, 'Saint-Jean-sur-Tourbe', 1098, 1),
(4, 'Appartement T5 Paris 14 Métro PERNETY / GAITE (Ligne 13) Rue du Château 75014 PARIS Appartement en dupleix avec terrasse et jardin, comprenant en rez-de-chaussée une entrée, une salle de séjour (41.40m²), une cuisine aménagée et équipée, un bureau (7.09m²), un wc. Le rez-de-chaussée donne sur le jardin privatif. Au premier étage: 4 chambres (13.41m², 12.35m², 12.04m², 17.85m² dont deux donnent sur une terrasse), une salle de bains, une salle de douches avec wc, un buanderie et une penderie. Ces deux étages communiquent par un escalier particulier privatif. Venez découvrir cet appartement maison. Chauffage et eau chaude individuels électriques. Libre de suite. Loyer hors charges 4570 € par mois, provision charges 230 € par mois, loyer charges comprises 4800 € par mois Dépôt de garantie : 9140 € TTC Surface : 158,76 m² 5 pièce(s) 4 chbre(s) Meublé 4800 € par mois ', 2, 4570, 'Paris', 158, 5);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`ID`, `email`, `password`) VALUES
(1, 'basile.mercado@gmail.com', '$2y$10$y/rIbnjCxtPKeHLOPpNVoufbBZzx473GknAxFewgH.uPUrWZzrBMu');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDbien` int(11) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `chemin` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `idbien` (`IDbien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(35) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`ID`, `libelle`) VALUES
(1, 'Maison'),
(2, 'Appartement'),
(3, 'Local'),
(4, 'Terrain Nu'),
(5, 'Immeuble');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
