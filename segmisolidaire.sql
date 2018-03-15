-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 15 mars 2018 à 16:47
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

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
  `idAnnale` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `datePublication` int(4) NOT NULL,
  `niveau` varchar(2) NOT NULL,
  `fichier` text NOT NULL,
  `matiere` varchar(64) NOT NULL,
  PRIMARY KEY (`idAnnale`),
  UNIQUE KEY `idAnnale` (`idAnnale`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annale`
--

INSERT INTO `annale` (`idAnnale`, `nom`, `datePublication`, `niveau`, `fichier`, `matiere`) VALUES
(6, 'tchoin', 1987, 'L1', 'even1.jpg', 'C');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idCours` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomCours` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `niveau` varchar(2) NOT NULL,
  `idEtudiant` int(11) DEFAULT NULL,
  `matiere` varchar(64) NOT NULL,
  PRIMARY KEY (`idCours`),
  UNIQUE KEY `idCours` (`idCours`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `nomCours`, `description`, `niveau`, `idEtudiant`, `matiere`) VALUES
(1, 'Aide pour la BD', 'test test dhsjfhdjfhjsdfhsdjkfhjksdhfdjlfhjkfhsdklmhdksmghdfkgkdfjgmdfkljsdkjgksdfg', 'L1', NULL, 'BD'),
(4, 'Bonjour', '<p>test</p>\r\n', 'L1', NULL, 'JAVA');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEtudiant` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `email` text NOT NULL,
  `telephone` int(10) NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`idEtudiant`),
  UNIQUE KEY `idEtudiant` (`idEtudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `idEvenement` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `type` varchar(64) NOT NULL,
  `image` text NOT NULL,
  `idEtudiant` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEvenement`),
  UNIQUE KEY `idEvenement` (`idEvenement`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`idEvenement`, `titre`, `description`, `dateDebut`, `dateFin`, `type`, `image`, `idEtudiant`) VALUES
(1, 'Safari dans le desert', 'Dubai Le safari dans le désert est une activité incontournable à Dubaï. Vous allez vivre une expérience palpitante dans les dunes de sable du désert d’Arabie. Profitez d’un excellent dîner-barbecue en admirant un spectacle de danse orientale dans un campement situé au cœur du désert, juste en dehors de la ville moderne de Dubaï.', '2018-02-13', '2018-02-14', 'soirée', 'even1.jpg', NULL),
(2, 'Match PSG-REAL', 'Le meilleur match attendu', '2018-02-28', '2018-02-28', 'sport', 'foot.jpg', NULL),
(3, 'Conférence du PDG d\'Apple', 'Presentation de l\'iphone X', '2018-02-28', '2018-03-22', 'conférence', 'conf.jpg', NULL),
(6, 'Trump sa conférence ', 'Le président américain Donald Trump s\'est vanté d\'avoir affirmé au premier ministre canadien Justin Trudeau que Washington affichait un déficit commercial avec Ottawa alors qu\'il n\'en avait «aucune idée», a rapporté jeudi le Washington Post.\r\n\r\nS\'exprimant dans une soirée de collecte de fonds mercredi soir dans le Missouri, M. Trump a raconté cette anecdote, dont le journal dit avoir obtenu un enregistrement audio.\r\n\r\n«Trudeau est venu me voir. C\'est un bon gars, Justin. Il a dit \"non, non, nous n\'avons pas de déficit commercial avec vous, nous n\'en avons aucun\"», a raconté le président en imitant le premier ministre canadien, selon la retranscription du Washington Post.\r\n\r\n«J\'ai dit \"Faux, Justin, vous en avez un\". Je ne savais même pas... Je n\'en avais aucune idée. J\'ai simplement dit \"vous avez tort\"», a poursuivi M. Trump. «Vous savez pourquoi? Parce que nous sommes tellement stupides... Et je pensais qu\'ils étaient malins».\r\n\r\n«J\'ai dit \"eh bien dans ce cas, mon sentiment est différent (...) mais je n\'y crois pas\"», a ajouté le président, affirmant avoir alors «envoyé un de nos gars, son gars, mon gars, ils sont sortis et j\'ai dit \"vérifiez parce que je n\'arrive pas à y croire\"».\r\n\r\nIl est revenu sur le sujet jeudi matin en tweetant: «Nous avons bien un déficit commercial avec le Canada comme nous en avons avec presque tous les pays (certains sont énormes)».', '2018-03-28', '2018-03-30', 'conférence', 'even4.jpg', NULL),
(5, 'Gros zbeul sa grand mere', 'On va tout niké tkt meme pas ', '2018-03-20', '2018-03-30', 'soirée', 'even1.jpg', NULL),
(7, 'Soirée de fou malade', 'Et de poursuivre: «PM Justin Trudeau du Canada, un gars très bien, n\'aime pas dire que le Canada a un surplus face aux USA (en négociation), mais c\'est le cas... c\'est le cas pour presque tous... et c\'est comme ça que je sais!»\r\n\r\nD\'après les statistiques américaines, les États-Unis présentaient un excédent commercial (biens et services) avec le Canada de 12,5 milliards de dollars en 2016, pour 627,8 milliards de dollars d\'échanges. Dans le détail, ils affichaient un déficit de 12,1 milliards dans les biens et un excédent de 24,6 milliards dans les services.', '2018-03-22', '2018-03-31', 'soirée', 'even3.jpg', NULL),
(8, 'Choc des héros L\'angleterre ', '«Le Canada et les États-Unis ont une relation commerciale équilibrée et mutuellement bénéfique», a-t-il insisté auprès de l\'AFP.\r\n\r\nDu reste, le cabinet de Justin Trudeau a refusé de commenter les propos que M. Trump auraient tenus mercredi soir.', '2018-03-16', '2018-04-20', 'sport', 'even5.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `idJob` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `categorie` varchar(64) NOT NULL,
  `idEtudiant` int(11) DEFAULT NULL,
  PRIMARY KEY (`idJob`),
  UNIQUE KEY `idJob` (`idJob`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `job`
--

INSERT INTO `job` (`idJob`, `titre`, `description`, `categorie`, `idEtudiant`) VALUES
(1, 'Film X', '<ul>\r\n	<li><strong>comme never tu vas prendre cher</strong></li>\r\n</ul>\r\n', 'babysitting', NULL),
(2, 'mlmlm', '<ul>\r\n	<li>lmlmll</li>\r\n</ul>\r\n', 'babysitting', NULL),
(3, 'vbcbcvbv', '<p>vbbvbvb</p>\r\n', 'vendanges', NULL),
(4, 'Aide aux devoirs', '<ul>\r\n	<li>test&nbsp;</li>\r\n	<li>test</li>\r\n	<li>test</li>\r\n	<li><em>okkkkkk</em></li>\r\n</ul>\r\n', 'services', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `idLivre` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `matiere` varchar(100) NOT NULL,
  `niveau` varchar(2) NOT NULL,
  `prix` float NOT NULL,
  `idEtudiant` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLivre`),
  UNIQUE KEY `idLivre` (`idLivre`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`idLivre`, `titre`, `auteur`, `matiere`, `niveau`, `prix`, `idEtudiant`) VALUES
(1, 'ZEBI', 'Jules cesar', 'BD', 'M2', 12.2, NULL),
(2, 'java et ses particularités en lousdé', 'Lom Hillat', 'JAVA', 'L3', 3.03, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
