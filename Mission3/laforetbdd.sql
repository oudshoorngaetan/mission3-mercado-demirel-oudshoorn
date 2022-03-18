-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 18 mars 2022 à 11:02
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`ID`, `Description`, `IDType`, `prix`, `ville`, `superficie`, `nbpieces`) VALUES
(2, '			Proche Cabinet Médical, Villa T5 sur terrain de 960 m² env. comprenant :<br>\r\n			Au Rdc : Entrée-séjour-salon avec coin cuisine aménagé (évier, éléments, plan de travail, hotte), cellier, 3 chambres avec placard, salle de bains (baignoire , vasque sur meuble), salle d\'eau (douche, double vasque sur meuble), WC, buanderie.<br><br>\r\n			A l\'étage :<br> Mezzanine\r\n			Garage et abri voiture\r\n			Chauffage individuel central gaz avec production eau chaude sanitaire.<br><br>\r\n			DISPONIBLE LE 15 MARS 2022, après travaux d\'embellissements.<br><br>\r\n			Dépôt de garantie :  950 € TTC<br><br>\r\n			Honoraires TTC charge locataire : 1210 € TTC**, dont 330 € au titre de la réalisation de l\'état des lieux', 1, 1210, 'Saint-Denis-lès-Bourg', 960, 5);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
