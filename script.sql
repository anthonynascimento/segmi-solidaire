-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 22 fév. 2018 à 10:11
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `segmisolidaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `annale`
--

DROP TABLE IF EXISTS `annale`;
CREATE TABLE IF NOT EXISTS `annale` (
  `idAnnale` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(60) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `idMatiere` varchar(4) NOT NULL,
  PRIMARY KEY (`idAnnale`),
  KEY `FK_Annale_idMatiere` (`idMatiere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avoir_participer`
--

DROP TABLE IF EXISTS `avoir_participer`;
CREATE TABLE IF NOT EXISTS `avoir_participer` (
  `idMatiere` varchar(4) NOT NULL,
  `numEtu` varchar(8) NOT NULL,
  PRIMARY KEY (`idMatiere`,`numEtu`),
  KEY `FK_avoir_participer_numEtu` (`numEtu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idCours` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(60) DEFAULT NULL,
  `description` text,
  `idMatiere` varchar(4) NOT NULL,
  `numEtu` varchar(8) DEFAULT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`idCours`),
  KEY `FK_Cours_idMatiere` (`idMatiere`),
  KEY `FK_Cours_numEtu` (`numEtu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `nom`, `description`, `idMatiere`, `numEtu`, `image`) VALUES
(1, 'BD', 'SQL,trigger,pl/sql', '1', '37005063', 'cours.jpg'),
(2, 'Java - Heritages', 'Polymorphisme', '3', '37005063', 'cours.jpg'),
(3, 'C - Les bases', 'depuis le debut du C', '2', '37005063', 'cours.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `etre`
--

DROP TABLE IF EXISTS `etre`;
CREATE TABLE IF NOT EXISTS `etre` (
  `idNiveau` varchar(2) NOT NULL,
  `numEtu` varchar(8) NOT NULL,
  PRIMARY KEY (`idNiveau`,`numEtu`),
  KEY `FK_etre_numEtu` (`numEtu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `numEtu` varchar(8) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mdp` varchar(25) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`numEtu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`numEtu`, `nom`, `prenom`, `mdp`, `email`, `tel`) VALUES
('37005063', 'Sankar', 'Vijay', 'vijay', 'vijay93700@gmail.com', '0141526352');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `idEvenement` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `description` text,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `idType` int(11) NOT NULL,
  `numEtu` varchar(8) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`idEvenement`),
  KEY `FK_Evenement_idType` (`idType`),
  KEY `FK_Evenement_numEtu` (`numEtu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`idEvenement`, `titre`, `description`, `date_debut`, `date_fin`, `idType`, `numEtu`, `image`) VALUES
(1, 'Safari dans le desert', 'Dubai Le safari dans le désert est une activité incontournable à Dubaï. Vous allez vivre une expérience palpitante dans les dunes de sable du désert d’Arabie. Profitez d’un excellent dîner-barbecue en admirant un spectacle de danse orientale dans un campement situé au cœur du désert, juste en dehors de la ville moderne de Dubaï.', '2018-02-13', '2018-02-14', 1, '37005063', 'even1.jpg'),
(2, 'Match PSG-REAL', 'Le meilleur match attendu', '2018-02-28', '2018-02-28', 2, '37005063', 'foot.jpg'),
(3, 'Conférence du PDG d\'Apple', 'Presentation de l\'iphone X', '2018-02-28', '2018-03-22', 3, '37005063', 'conf.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `idJob` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) DEFAULT NULL,
  `description` text,
  `idRubrique` int(11) NOT NULL,
  `numEtu` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`idJob`),
  KEY `FK_Job_idRubrique` (`idRubrique`),
  KEY `FK_Job_numEtu` (`numEtu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `idLivre` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `auteur` varchar(50) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `idMatiere` varchar(4) NOT NULL,
  PRIMARY KEY (`idLivre`),
  KEY `FK_Livre_idMatiere` (`idMatiere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `idMatiere` varchar(4) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `idNiveau` varchar(2) NOT NULL,
  PRIMARY KEY (`idMatiere`),
  KEY `FK_Matiere_idNiveau` (`idNiveau`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idMatiere`, `nom`, `idNiveau`) VALUES
('', 'BD', ''),
('1', 'BD', '1'),
('2', 'Java', '2'),
('3', 'C', '3');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `idNiveau` varchar(2) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idNiveau`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`idNiveau`, `nom`) VALUES
('', 'L3'),
('1', 'L3'),
('2', 'L2'),
('3', 'L1'),
('4', 'M1'),
('5', 'M2');

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

DROP TABLE IF EXISTS `rubrique`;
CREATE TABLE IF NOT EXISTS `rubrique` (
  `idRubrique` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idRubrique`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typeevenement`
--

DROP TABLE IF EXISTS `typeevenement`;
CREATE TABLE IF NOT EXISTS `typeevenement` (
  `idType` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idType`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typeevenement`
--

INSERT INTO `typeevenement` (`idType`, `nom`) VALUES
(1, 'Soiree'),
(2, 'Sport'),
(3, 'Conference');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annale`
--
ALTER TABLE `annale`
  ADD CONSTRAINT `FK_Annale_idMatiere` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`);

--
-- Contraintes pour la table `avoir_participer`
--
ALTER TABLE `avoir_participer`
  ADD CONSTRAINT `FK_avoir_participer_idMatiere` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`),
  ADD CONSTRAINT `FK_avoir_participer_numEtu` FOREIGN KEY (`numEtu`) REFERENCES `etudiant` (`numEtu`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `FK_Cours_idMatiere` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`),
  ADD CONSTRAINT `FK_Cours_numEtu` FOREIGN KEY (`numEtu`) REFERENCES `etudiant` (`numEtu`);

--
-- Contraintes pour la table `etre`
--
ALTER TABLE `etre`
  ADD CONSTRAINT `FK_etre_idNiveau` FOREIGN KEY (`idNiveau`) REFERENCES `niveau` (`idNiveau`),
  ADD CONSTRAINT `FK_etre_numEtu` FOREIGN KEY (`numEtu`) REFERENCES `etudiant` (`numEtu`);

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `FK_Evenement_idType` FOREIGN KEY (`idType`) REFERENCES `typeevenement` (`idType`),
  ADD CONSTRAINT `FK_Evenement_numEtu` FOREIGN KEY (`numEtu`) REFERENCES `etudiant` (`numEtu`);

--
-- Contraintes pour la table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `FK_Job_idRubrique` FOREIGN KEY (`idRubrique`) REFERENCES `rubrique` (`idRubrique`),
  ADD CONSTRAINT `FK_Job_numEtu` FOREIGN KEY (`numEtu`) REFERENCES `etudiant` (`numEtu`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `FK_Livre_idMatiere` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`);

--
-- Contraintes pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `FK_Matiere_idNiveau` FOREIGN KEY (`idNiveau`) REFERENCES `niveau` (`idNiveau`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
