-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 08 avr. 2018 à 12:10
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
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`idAnnale`),
  UNIQUE KEY `idAnnale` (`idAnnale`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annale`
--

INSERT INTO `annale` (`idAnnale`, `nom`, `datePublication`, `fichier`, `niveau`, `matiere`, `username`) VALUES
(7, 'Le c et ces particularités en lousdéé', 2019, '2014_vorsteiner_mercedes_benz_c63_amg-1920x1080.jpg', 'L2', 'L2 UP1: PG', 'mathis@gmail.com'),
(6, 'tchoin', 1987, 'even1.jpg', 'L1', 'C', 'mathis@gmail.com'),
(8, 'le zgeg 2.0 okkkk', 2017, '', 'L3', 'L3 UPE: Droit', 'payet@gmail.com'),
(17, 'Le java et ses particularités avancées', 2015, 'CCMars2014-POOMIAGEL3.pdf', 'L3', 'JAVA', 'payet@gmail.com'),
(18, 'BD et les triggers ', 2011, 'CTDec2014-POOMIAGEL3-COR.pdf', 'M2', 'BD', 'payet@gmail.com'),
(19, 'sssssssssssssssssss', 2015, 'logo.png', 'L1', 'L1 UP1: App/ réussite', 'payet@gmail.com'),
(20, 'test user', 1990, 'segmisolidaire.sql', 'L2', 'L2 UP2: PG', 'mathis@gmail.com'),
(22, 'salalalaa', 2018, '2017_abt_audi_r8_spyder_4k_2-1920x1080.jpg', 'L3', 'L3 Franco-chinois- cursus international', 'mathis@gmail.com'),
(23, 'test 3.0', 2017, 'microcms.log', 'L2', 'L2 UP3: Langues', 'mathis@gmail.com'),
(25, 'test user fichier', 2017, 'Dossier_de_demande_d_inscription_Candidature 2018_19-VF-3.pdf', 'L2', 'L2 UP2: PG', 'mathis@gmail.com');

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
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`idCours`),
  UNIQUE KEY `idCours` (`idCours`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `nomCours`, `description`, `niveau`, `matiere`, `username`) VALUES
(1, 'Aide pour la BD modifié simple', '<p>Aide pour la BD</p>\r\n', 'L2', 'L2 UP3: Droit', 'mathis@gmail.com'),
(5, 'aide en java pour les pros', '<p>on va t&#39;aider en lousd&eacute;</p>\r\n', 'M1', 'JAVA', 'payet@gmail.com'),
(4, 'Bonjour', '<p>test</p>\r\n', 'L1', 'JAVA', 'payet@gmail.com'),
(8, 'specialite test', '<p>dfhgdfgdfgj!kgjmdfklgjdfklgjdfklgj gi sdg</p>\r\n\r\n<p>gksdigsdfigujpsdfgosdfg</p>\r\n\r\n<p>$qsgopsdfjpgosdfg</p>\r\n', 'L2', 'JAVA', 'payet@gmail.com'),
(9, 'CECI EST UN TEST', '<p>go&ugrave;fjkgjdfklgjfklgdfg</p>\r\n', 'L2', '', 'payet@gmail.com'),
(10, 'lmmmmmmmmmmmmm', '<p>gfffffffffffffffffffff</p>\r\n', 'L1', '1', 'payet@gmail.com'),
(11, 'mpppppppppppppp', '<p>khhhhhhhhhhhhhhhhhh</p>\r\n', 'L1', '1', 'payet@gmail.com'),
(12, 'hjhhhhhhhhhhhhhh', '<p>hhhhhhhhhhhhhhhhhhhh</p>\r\n', 'L1', '1', 'payet@gmail.com'),
(13, 'fffffffffffffffffffff', '<p>fffffffffffffffffffffff</p>\r\n', 'L1', '1', 'payet@gmail.com'),
(14, 'xxxxxxxxxxxxxxxx', '<p>xxxxxxxxxxxxxxxxxxx</p>\r\n', 'L2', '1', 'payet@gmail.com'),
(15, 'qqqqqqqqqqqqqqqqq', '<p>qqqqqqqqqqq</p>\r\n', 'L1', 'L1 UP1: App/ réussite', 'payet@gmail.com'),
(16, 'gfggggggg', '<p>bbbbbbbbbbbbbbbbbb</p>\r\n', 'M2', 'M2: OSPS', 'payet@gmail.com'),
(17, 'tes user', '<p>hghgfhghfghfghgf</p>\r\n', 'M1', 'M1:MEEF-PLC-SES', 'payet@gmail.com'),
(18, 'test user2222', '<p>gdgdfg</p>\r\n', 'L3', 'L3 UP Economie', 'mathis@gmail.com'),
(20, 'gfgdfgdf', '<p>gfdgfd</p>\r\n', 'L3', 'L3 UPE: Droit', 'mathis@gmail.com'),
(21, 'gfgdfgdf', '<p>gfdgfd</p>\r\n', 'L3', 'L3 UPE: Droit', 'mathis@gmail.com'),
(22, 'gfgdfgdf', '<p>gfdgfd</p>\r\n', 'L3', 'L3 UPE: Droit', 'mathis@gmail.com'),
(23, 'gfgdfgdf', '<p>gfdgfd</p>\r\n', 'L3', 'L3 UPE: Droit', 'mathis@gmail.com'),
(24, 'gdgfdgd', '<p>fgddfgdffgdg</p>\r\n', 'M2', 'Autre', 'mathis@gmail.com');

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
  `roles` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idEtudiant`),
  UNIQUE KEY `idEtudiant` (`idEtudiant`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `nom`, `prenom`, `username`, `telephone`, `mdp`, `roles`) VALUES
(6, 'VIEIRA', 'Dorian', 'vieira.dorian@outlook.fr', 624927641, 'DAwGQYiTQrBp0IWFrNQymdbVLJAjgZC1zLl5r735pdN74+t1SFAKj47yZlz+rPVM/mWR/XhKvG91zwsyovupGg==', 'ROLE_ADMIN'),
(10, 'vieira', 'mathis', 'mathis@gmail.com', 656456458, '3aRnurCyrdhxxYopyRpawmx55lG8u3BjZTMYtIz0xR3CbsPidUbtXvlfxue4g7QCCjKn6tb+0XE1rtAVfjHKCA==', ' ROLE_USER'),
(11, 'admin', 'admin', 'admin@admin.com', 0, 'nhDr7OyKlXQju+Ge/WKGrPQ9lPBSUFfpK+B1xqx/+8zLZqRNX0+5G1zBQklXUFy86lCpkAofsExlXiorUcKSNQ==', ' ROLE_ADMIN '),
(12, 'jon', 'payet', 'payet@gmail.com', 545454544, '7o+uxswqjMFr+52vAVQKNZra1IHaXrGjAUJMFt6/1pHAPz8uwkrHyvwwJC1FH+uBPGLJ8HIHwbPMqeqS/euG0Q==', ' ROLE_ETUDIANT ');

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
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`idEvenement`),
  UNIQUE KEY `idEvenement` (`idEvenement`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`idEvenement`, `titre`, `description`, `lieu`, `dateDebut`, `dateFin`, `type`, `image`, `username`) VALUES
(1, 'Safari dans le desertt', '<p>Dubai Le safari dans le d&eacute;sert est une activit&eacute; incontournable &agrave; Duba&iuml;. Vous allez vivre une exp&eacute;rience palpitante dans les dunes de sable du d&eacute;sert d&rsquo;Arabie. Profitez d&rsquo;un excellent d&icirc;ner-barbecue en admirant un spectacle de danse orientale dans un campement situ&eacute; au c&oelig;ur du d&eacute;sert, juste en dehors de la ville moderne de Duba&iuml;.</p>\r\n', ' gfgfggfgfgdfg', '2019-01-01', '2019-01-02', 'soirée', 'even1.jpg', 'mathis@gmail.com'),
(2, 'Match PSG-REAL-JUV', '<p>Le meilleur match attendu</p>\r\n', '250 George Street, Cité de Sydney Nouvelle-Galles du Sud, Australie', '2018-04-19', '2018-04-28', 'soirée', 'foot.jpg', 'mathis@gmail.com'),
(3, 'Conférence du PDG d\'Apple', '<p>Presentation de l&#39;iphone X1 insolent</p>\r\n', '250 Pitt Street, Cité de Sydney Nouvelle-Galles du Sud, Australie', '2018-04-19', '2018-04-28', 'soirée', 'conf.jpg', 'payet@gmail.com'),
(6, 'Trump sa conférence ', 'Le président américain Donald Trump s\'est vanté d\'avoir affirmé au premier ministre canadien Justin Trudeau que Washington affichait un déficit commercial avec Ottawa alors qu\'il n\'en avait «aucune idée», a rapporté jeudi le Washington Post.\r\n\r\nS\'exprimant dans une soirée de collecte de fonds mercredi soir dans le Missouri, M. Trump a raconté cette anecdote, dont le journal dit avoir obtenu un enregistrement audio.\r\n\r\n«Trudeau est venu me voir. C\'est un bon gars, Justin. Il a dit \"non, non, nous n\'avons pas de déficit commercial avec vous, nous n\'en avons aucun\"», a raconté le président en imitant le premier ministre canadien, selon la retranscription du Washington Post.\r\n\r\n«J\'ai dit \"Faux, Justin, vous en avez un\". Je ne savais même pas... Je n\'en avais aucune idée. J\'ai simplement dit \"vous avez tort\"», a poursuivi M. Trump. «Vous savez pourquoi? Parce que nous sommes tellement stupides... Et je pensais qu\'ils étaient malins».\r\n\r\n«J\'ai dit \"eh bien dans ce cas, mon sentiment est différent (...) mais je n\'y crois pas\"», a ajouté le président, affirmant avoir alors «envoyé un de nos gars, son gars, mon gars, ils sont sortis et j\'ai dit \"vérifiez parce que je n\'arrive pas à y croire\"».\r\n\r\nIl est revenu sur le sujet jeudi matin en tweetant: «Nous avons bien un déficit commercial avec le Canada comme nous en avons avec presque tous les pays (certains sont énormes)».', '', '2018-03-28', '2018-03-30', 'conférence', 'even4.jpg', 'payet@gmail.com'),
(5, 'Gros zbeul sa grand mere', 'On va tout niké tkt meme pas ', '', '2018-03-20', '2018-03-30', 'soirée', 'even1.jpg', 'payet@gmail.com'),
(7, 'Soirée de fou malade', 'Et de poursuivre: «PM Justin Trudeau du Canada, un gars très bien, n\'aime pas dire que le Canada a un surplus face aux USA (en négociation), mais c\'est le cas... c\'est le cas pour presque tous... et c\'est comme ça que je sais!»\r\n\r\nD\'après les statistiques américaines, les États-Unis présentaient un excédent commercial (biens et services) avec le Canada de 12,5 milliards de dollars en 2016, pour 627,8 milliards de dollars d\'échanges. Dans le détail, ils affichaient un déficit de 12,1 milliards dans les biens et un excédent de 24,6 milliards dans les services.', '', '2018-03-22', '2018-03-31', 'soirée', 'even3.jpg', 'payet@gmail.com'),
(8, 'Choc des héros L\'angleterre ', '«Le Canada et les États-Unis ont une relation commerciale équilibrée et mutuellement bénéfique», a-t-il insisté auprès de l\'AFP.\r\n\r\nDu reste, le cabinet de Justin Trudeau a refusé de commenter les propos que M. Trump auraient tenus mercredi soir.', '', '2018-03-16', '2018-04-20', 'sport', 'even5.jpg', 'payet@gmail.com'),
(9, 'Sortie entre poto', '<p><strong>Vous aure pour occasion de :</strong></p>\r\n\r\n<ul>\r\n	<li>Traversez un lac rude</li>\r\n	<li>Avoir de bons amis</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>De faire du kayak</li>\r\n</ol>\r\n', '', '2008-02-27', '2022-08-28', 'soirée', 'even2.jpg', 'payet@gmail.com'),
(14, 'test user', '<p>gfgdfgdgdgf</p>\r\n', 'gfdfgdfgdffgdfg', '2018-01-01', '2018-01-01', 'conférence', '2017_novitec_tesla_model_s_4k_6-1920x1080.jpg', 'mathis@gmail.com'),
(16, 'test image', '<p><strong>Vous aurez pour occasion de :</strong></p>\r\n\r\n<ol>\r\n	<li><strong>pouvoir vous ballader le long dee la plage&nbsp;</strong></li>\r\n	<li><strong>pouori faire de la peche</strong></li>\r\n	<li><strong>pouvoir marcher dans la jungle</strong></li>\r\n	<li><strong>vous faire des amis les singes</strong></li>\r\n</ol>\r\n\r\n<p><strong><em>Enfin vous saurez si vous &ecirc;tes apte &agrave; afaire un saut e parachute!!!</em></strong></p>\r\n', '250 Oxford Street, Paddington Nouvelle-Galles du Sud, Australie ', '2018-04-05', '2018-04-08', 'soirée', '73008-stars-galaxy-lights-planet-reflection.jpg', 'mathis@gmail.com');

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
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`idJob`),
  UNIQUE KEY `idJob` (`idJob`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `job`
--

INSERT INTO `job` (`idJob`, `titre`, `description`, `categorie`, `username`) VALUES
(1, 'Film Xxxxllll', '<ul>\r\n	<li><strong>comme never tu vas prendre cher</strong></li>\r\n</ul>\r\n', 'babysitting', 'mathis@gmail.com'),
(2, 'mlmlm', '<ul>\r\n	<li>lmlmll</li>\r\n</ul>\r\n', 'babysitting', 'payet@gmail.com'),
(3, 'Agent d\'acceuil', '<p>En gare ou a&eacute;roport</p>\r\n', 'hotessariat', 'payet@gmail.com'),
(4, 'Aide aux devoirs', '<ul>\r\n	<li>test&nbsp;</li>\r\n	<li>test</li>\r\n	<li>test</li>\r\n	<li><em>okkkkkk</em></li>\r\n</ul>\r\n', 'services', 'payet@gmail.com'),
(7, 'test user000000', '<p>fdfgsdggdfgdfgdfggfgggffg</p>\r\n', 'babysitting', 'mathis@gmail.com'),
(9, 'test', '<p>flkmdsjkflkfslsfkdl</p>\r\n', 'babysitting', 'mathis@gmail.com');

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
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`idLivre`),
  UNIQUE KEY `idLivre` (`idLivre`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`idLivre`, `titre`, `auteur`, `prix`, `niveau`, `matiere`, `username`) VALUES
(1, 'ZEBI', 'Jules cesar', '12.00', 'M2', 'BD', 'mathis@gmail.com'),
(2, 'java et ses particularités en lousdé', 'Lom Hillat', '3.00', 'L3', 'JAVA', 'payet@gmail.com'),
(5, 'la cuisine et ses tech', 'yves cote de porc', '2.50', 'L3', 'Autre', 'payet@gmail.com'),
(7, 'le renard et la fourmie', 'jean de la fontaine', '3.50', 'L2', 'L2 UP3: Droit', 'payet@gmail.com'),
(8, 'test user000', 'fdgdfgdfg', '1.40', 'L3', 'L3 UPE: Droit', 'mathis@gmail.com'),
(10, 'test 3.0000', 'fdfdffdf', '1.50', 'M1', 'M1: ECO DU DROIT', 'mathis@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
