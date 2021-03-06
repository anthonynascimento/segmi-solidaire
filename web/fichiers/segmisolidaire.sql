-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 mars 2018 à 18:41
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
  `fichier` text NOT NULL,
  `niveau` varchar(2) NOT NULL,
  `matiere` varchar(64) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idAnnale`),
  UNIQUE KEY `idAnnale` (`idAnnale`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annale`
--

INSERT INTO `annale` (`idAnnale`, `nom`, `datePublication`, `fichier`, `niveau`, `matiere`, `username`) VALUES
(7, 'Le c et ces particularités en lousdé', 2019, '2014_vorsteiner_mercedes_benz_c63_amg-1920x1080.jpg', 'L3', 'L3 UP Gestion', 'mathis@gmail.com'),
(6, 'tchoin', 1987, 'even1.jpg', 'L1', 'C', '0'),
(8, 'Le zgeg', 2017, '', 'M1', 'C', '0'),
(10, 'encore un test', 2016, '', 'L2', 'JAVA', '0'),
(17, 'Le java et ses particularités avancées', 2015, 'CCMars2014-POOMIAGEL3.pdf', 'L3', 'JAVA', '0'),
(18, 'BD et les triggers ', 2011, 'CTDec2014-POOMIAGEL3-COR.pdf', 'M2', 'BD', NULL),
(19, 'QQQQQQQQQQQQQQ', 2015, 'logo.png', 'M1', 'M1: MBFA', NULL);

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
  `matiere` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCours`),
  UNIQUE KEY `idCours` (`idCours`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `nomCours`, `description`, `niveau`, `matiere`, `username`) VALUES
(1, 'Aide pour la BD modifié', '<p>Aide pour la BD</p>\r\n', 'L2', 'L2 UP2: PG', 'mathis@gmail.com'),
(5, 'aide en java pour les pros', '<p>on va t&#39;aider en lousd&eacute;</p>\r\n', 'M1', 'JAVA', NULL),
(4, 'Bonjour', '<p>test</p>\r\n', 'L1', 'JAVA', NULL),
(6, 'test', '<p>fdfdfd</p>\r\n', 'M1', 'C', NULL),
(8, 'specialite test', '<p>dfhgdfgdfgj!kgjmdfklgjdfklgjdfklgj gi sdg</p>\r\n\r\n<p>gksdigsdfigujpsdfgosdfg</p>\r\n\r\n<p>$qsgopsdfjpgosdfg</p>\r\n', 'L2', 'JAVA', NULL),
(9, 'CECI EST UN TEST', '<p>go&ugrave;fjkgjdfklgjfklgdfg</p>\r\n', 'L2', '', NULL),
(10, 'lmmmmmmmmmmmmm', '<p>gfffffffffffffffffffff</p>\r\n', 'L1', '1', NULL),
(11, 'mpppppppppppppp', '<p>khhhhhhhhhhhhhhhhhh</p>\r\n', 'L1', '1', NULL),
(12, 'hjhhhhhhhhhhhhhh', '<p>hhhhhhhhhhhhhhhhhhhh</p>\r\n', 'L1', '1', NULL),
(13, 'fffffffffffffffffffff', '<p>fffffffffffffffffffffff</p>\r\n', 'L1', '1', NULL),
(14, 'xxxxxxxxxxxxxxxx', '<p>xxxxxxxxxxxxxxxxxxx</p>\r\n', 'L2', '1', NULL),
(15, 'qqqqqqqqqqqqqqqqq', '<p>qqqqqqqqqqq</p>\r\n', 'L1', 'L1 UP1: App/ réussite', NULL),
(16, 'gfggggggg', '<p>bbbbbbbbbbbbbbbbbb</p>\r\n', 'M2', 'M2: OSPS', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEtudiant` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `username` text NOT NULL,
  `telephone` int(10) NOT NULL,
  `mdp` text NOT NULL,
  `roles` varchar(50) NOT NULL,
  PRIMARY KEY (`idEtudiant`),
  UNIQUE KEY `idEtudiant` (`idEtudiant`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `nom`, `prenom`, `username`, `telephone`, `mdp`, `roles`) VALUES
(6, 'VIEIRA', 'Dorian', 'vieira.dorian@outlook.fr', 624927641, 'DAwGQYiTQrBp0IWFrNQymdbVLJAjgZC1zLl5r735pdN74+t1SFAKj47yZlz+rPVM/mWR/XhKvG91zwsyovupGg==', 'ROLE_ADMIN'),
(5, 'henry', 'jack', 'jackh@gmail.com', 647877878, 'p+c207X6Onpv/NW823IU/MGiluOEIA2VyrDYaaJD6oyD4IQN2/sxsH1MNKwDEJNCKwRdto5mQBQiqG5TmfivDw==', ''),
(10, 'vieira3.0', 'mathis', 'mathis@gmail.com', 656456454, '3aRnurCyrdhxxYopyRpawmx55lG8u3BjZTMYtIz0xR3CbsPidUbtXvlfxue4g7QCCjKn6tb+0XE1rtAVfjHKCA==', ' ROLE_ETUDIANT '),
(8, 'gfdgfdg', 'gfdggdfg', 'gfdgfdgfdgd@gmail.com', 212515454, 'VZa0Yp8zFGS+hEbBkQiyICBr3fPI6VjOEMb28ecXRpter1+rVdUoUSPDb4Ss+CYEbjNsI6dME3ygBUq97QzIcw==', ''),
(9, 'test', 'test', 'test@gmail.com', 634545454, 'ys9cl2Ssstru+cgafY2knjno4bnOBENyuxklrFFJvZOq8xQvCdgiouq9ZKnTSntsyD17SxvzMavHGzg8g86IPA==', ''),
(11, 'admin', 'admin', 'admin@admin.com', 0, 'nhDr7OyKlXQju+Ge/WKGrPQ9lPBSUFfpK+B1xqx/+8zLZqRNX0+5G1zBQklXUFy86lCpkAofsExlXiorUcKSNQ==', ' ROLE_ADMIN ');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `idEvenement` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `lieu` text NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `type` varchar(64) NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEvenement`),
  UNIQUE KEY `idEvenement` (`idEvenement`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`idEvenement`, `titre`, `description`, `lieu`, `dateDebut`, `dateFin`, `type`, `image`, `username`) VALUES
(1, 'Safari dans le desert', 'Dubai Le safari dans le désert est une activité incontournable à Dubaï. Vous allez vivre une expérience palpitante dans les dunes de sable du désert d’Arabie. Profitez d’un excellent dîner-barbecue en admirant un spectacle de danse orientale dans un campement situé au cœur du désert, juste en dehors de la ville moderne de Dubaï.', '', '2018-02-13', '2018-02-14', 'soirée', 'even1.jpg', 'mathis@gmail.com'),
(2, 'Match PSG-REAL', 'Le meilleur match attendu', '', '2018-02-28', '2018-02-28', 'sport', 'foot.jpg', 'mathis@gmail.com'),
(3, 'Conférence du PDG d\'Apple', 'Presentation de l\'iphone X', '', '2018-02-28', '2018-03-22', 'conférence', 'conf.jpg', NULL),
(6, 'Trump sa conférence ', 'Le président américain Donald Trump s\'est vanté d\'avoir affirmé au premier ministre canadien Justin Trudeau que Washington affichait un déficit commercial avec Ottawa alors qu\'il n\'en avait «aucune idée», a rapporté jeudi le Washington Post.\r\n\r\nS\'exprimant dans une soirée de collecte de fonds mercredi soir dans le Missouri, M. Trump a raconté cette anecdote, dont le journal dit avoir obtenu un enregistrement audio.\r\n\r\n«Trudeau est venu me voir. C\'est un bon gars, Justin. Il a dit \"non, non, nous n\'avons pas de déficit commercial avec vous, nous n\'en avons aucun\"», a raconté le président en imitant le premier ministre canadien, selon la retranscription du Washington Post.\r\n\r\n«J\'ai dit \"Faux, Justin, vous en avez un\". Je ne savais même pas... Je n\'en avais aucune idée. J\'ai simplement dit \"vous avez tort\"», a poursuivi M. Trump. «Vous savez pourquoi? Parce que nous sommes tellement stupides... Et je pensais qu\'ils étaient malins».\r\n\r\n«J\'ai dit \"eh bien dans ce cas, mon sentiment est différent (...) mais je n\'y crois pas\"», a ajouté le président, affirmant avoir alors «envoyé un de nos gars, son gars, mon gars, ils sont sortis et j\'ai dit \"vérifiez parce que je n\'arrive pas à y croire\"».\r\n\r\nIl est revenu sur le sujet jeudi matin en tweetant: «Nous avons bien un déficit commercial avec le Canada comme nous en avons avec presque tous les pays (certains sont énormes)».', '', '2018-03-28', '2018-03-30', 'conférence', 'even4.jpg', NULL),
(5, 'Gros zbeul sa grand mere', 'On va tout niké tkt meme pas ', '', '2018-03-20', '2018-03-30', 'soirée', 'even1.jpg', NULL),
(7, 'Soirée de fou malade', 'Et de poursuivre: «PM Justin Trudeau du Canada, un gars très bien, n\'aime pas dire que le Canada a un surplus face aux USA (en négociation), mais c\'est le cas... c\'est le cas pour presque tous... et c\'est comme ça que je sais!»\r\n\r\nD\'après les statistiques américaines, les États-Unis présentaient un excédent commercial (biens et services) avec le Canada de 12,5 milliards de dollars en 2016, pour 627,8 milliards de dollars d\'échanges. Dans le détail, ils affichaient un déficit de 12,1 milliards dans les biens et un excédent de 24,6 milliards dans les services.', '', '2018-03-22', '2018-03-31', 'soirée', 'even3.jpg', NULL),
(8, 'Choc des héros L\'angleterre ', '«Le Canada et les États-Unis ont une relation commerciale équilibrée et mutuellement bénéfique», a-t-il insisté auprès de l\'AFP.\r\n\r\nDu reste, le cabinet de Justin Trudeau a refusé de commenter les propos que M. Trump auraient tenus mercredi soir.', '', '2018-03-16', '2018-04-20', 'sport', 'even5.jpg', NULL),
(9, 'Sortie entre poto', '<p><strong>Vous aure pour occasion de :</strong></p>\r\n\r\n<ul>\r\n	<li>Traversez un lac rude</li>\r\n	<li>Avoir de bons amis</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>De faire du kayak</li>\r\n</ol>\r\n', '', '2008-02-27', '2022-08-28', 'soirée', 'even2.jpg', NULL),
(10, 'Le feu mec ', '<p><strong>On va tester tous &ccedil;a&nbsp;</strong></p>\r\n\r\n<p><em><s>ouaiisss</s></em></p>\r\n', '', '2018-03-01', '2018-06-04', 'sport', 'even2.jpg', NULL);

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
  `username` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idJob`),
  UNIQUE KEY `idJob` (`idJob`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `job`
--

INSERT INTO `job` (`idJob`, `titre`, `description`, `categorie`, `username`) VALUES
(1, 'Film X', '<ul>\r\n	<li><strong>comme never tu vas prendre cher</strong></li>\r\n</ul>\r\n', 'babysitting', 'mathis@gmail.com'),
(2, 'mlmlm', '<ul>\r\n	<li>lmlmll</li>\r\n</ul>\r\n', 'babysitting', NULL),
(3, 'Agent d\'acceuil', '<p>En gare ou a&eacute;roport</p>\r\n', 'hotessariat', NULL),
(4, 'Aide aux devoirs', '<ul>\r\n	<li>test&nbsp;</li>\r\n	<li>test</li>\r\n	<li>test</li>\r\n	<li><em>okkkkkk</em></li>\r\n</ul>\r\n', 'services', NULL),
(5, 'test', '<p>gfgfgfgdfdfgdf</p>\r\n', 'vente', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `idLivre` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `niveau` varchar(2) NOT NULL,
  `matiere` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idLivre`),
  UNIQUE KEY `idLivre` (`idLivre`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`idLivre`, `titre`, `auteur`, `prix`, `niveau`, `matiere`, `username`) VALUES
(1, 'ZEBI', 'Jules cesar', '12.00', 'M2', 'BD', 'mathis@gmail.com'),
(2, 'java et ses particularités en lousdé', 'Lom Hillat', '3.00', 'L3', 'JAVA', NULL),
(3, 'ceci est un test', 'Zebi Ducand', '13.00', 'L3', 'JAVA', NULL),
(5, 'la cuisine ', 'yves cote de porc', '2.50', 'M2', 'M2: OSPS', NULL),
(7, 'le renard et la fourmie', 'jean de la fontaine', '3.50', 'L2', 'L2 UP3: Droit', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
