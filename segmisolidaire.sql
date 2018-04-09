-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 avr. 2018 à 18:54
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
(7, 'Le c et ces particularités en lousdé', 2019, '2014_vorsteiner_mercedes_benz_c63_amg-1920x1080.jpg', 'L2', 'L2 UP1: PG', 'mathis@gmail.com'),
(6, 'tchoin', 1987, 'even1.jpg', 'L1', 'C', 'mathis@gmail.com'),
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
(5, 'Java pour les débutants', '<p>Une s&eacute;lection des meilleurs tutoriels et cours de formation gratuits pour apprendre la programmation Java. Vous trouverez les meilleures m&eacute;thodes &eacute;ducatives pour une formation agr&eacute;able et compl&egrave;te, ainsi que des exercices int&eacute;ressants, voire ludiques, vous pouvez aussi trouver des&nbsp;<a href=\"http://sebastien-estienne.developpez.com/tutoriels/java/\">exercices offerts</a>&nbsp;en sus des cours pour perfectionner votre niveau et acqu&eacute;rir de l&#39;exp&eacute;rience. Si vous avez besoin, n&#39;h&eacute;sitez pas aussi &agrave; vous r&eacute;f&eacute;rer &agrave; la&nbsp;<a href=\"http://java.developpez.com/faq\">FAQ Java</a>&nbsp;et &agrave; poser vos questions sur les&nbsp;<a href=\"http://www.developpez.net/forums/f6/java/\">forums</a>&nbsp;d&#39;entraide Java.</p>\r\n', 'M1', 'M1:SES (SSA)', 'payet@gmail.com'),
(4, 'Contôle de production (key performances)', '<p>On va pour voir travailler tranquillmeent sur les key succes&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Diff&eacute;rents formes de marketing mix</li>\r\n	<li>Le model canvas</li>\r\n</ul>\r\n', 'L2', 'L2 UP3: Droit', 'payet@gmail.com'),
(8, 'Economie: chapitre 2', '<p>Je suis dispo pour revoir le chapitre 2 en &eacute;co: la monnaie fiduciaire etc.</p>\r\n', 'L3', 'L3 UP Economie', 'payet@gmail.com'),
(15, 'Gestion et prix psychologique', '<p>je propose mon aide sur le chapitre 5 : <strong><em>Les prix psycho ? Un facteur de r&eacute;uissite des entreprise.&nbsp;</em></strong>On verra des sch&eacute;mas et diff&eacute;rents graphiques ensemble.</p>\r\n', 'M2', 'M2: OSPS', 'payet@gmail.com'),
(16, 'Droit public vs privé exercice 4 ', '<p>Je peux aider les personnes qui ont pas pu faire l&#39;exercice 3 du ch 10</p>\r\n', 'M2', 'M2: PULV', 'payet@gmail.com'),
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
(6, 'VIEIRA', 'Dorian', 'vieira.dorian@outlook.fr', 624927641, 'DAwGQYiTQrBp0IWFrNQymdbVLJAjgZC1zLl5r735pdN74+t1SFAKj47yZlz+rPVM/mWR/XhKvG91zwsyovupGg==', 'ROLE_ADMINISTRATEUR'),
(10, 'vieira', 'mathis', 'mathis@gmail.com', 656456458, '3aRnurCyrdhxxYopyRpawmx55lG8u3BjZTMYtIz0xR3CbsPidUbtXvlfxue4g7QCCjKn6tb+0XE1rtAVfjHKCA==', 'ROLE_ETUDIANT'),
(11, 'admin', 'admin', 'admin@admin.com', 678787878, 'nhDr7OyKlXQju+Ge/WKGrPQ9lPBSUFfpK+B1xqx/+8zLZqRNX0+5G1zBQklXUFy86lCpkAofsExlXiorUcKSNQ==', ' ROLE_ADMINISTRATEUR'),
(12, 'PAYET', 'Dimitri', 'payet@gmail.com', 645454544, '7o+uxswqjMFr+52vAVQKNZra1IHaXrGjAUJMFt6/1pHAPz8uwkrHyvwwJC1FH+uBPGLJ8HIHwbPMqeqS/euG0Q==', ' ROLE_ETUDIANT ');

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
(1, 'Safari dans le desert', '<p>Dubai Le safari dans le d&eacute;sert est une activit&eacute; incontournable &agrave; Duba&iuml;. Vous allez vivre une exp&eacute;rience palpitante dans les dunes de sable du d&eacute;sert d&rsquo;Arabie. Profitez d&rsquo;un excellent d&icirc;ner-barbecue en admirant un spectacle de danse orientale dans un campement situ&eacute; au c&oelig;ur du d&eacute;sert, juste en dehors de la ville moderne de Duba&iuml;.</p>\r\n', ' gfgfggfgfgdfg ', '2020-01-01', '2020-01-01', 'soirée', 'even1.jpg', 'mathis@gmail.com'),
(2, 'Match PSG-REAL-JUV', '<p>Le meilleur match attendu</p>\r\n', '250 George Street, Cité de Sydney Nouvelle-Galles du Sud, Australie', '2018-04-19', '2018-04-28', 'soirée', 'foot.jpg', 'mathis@gmail.com'),
(3, 'Conférence du PDG d\'Apple', '<p>Presentation de l&#39;iphone X,&nbsp;<strong>On parle beaucoup ces derniers temps de</strong>&nbsp;<a href=\"https://www.macg.co/materiel/2018/04/la-longue-liste-puces-dapple-101929\">futurs Mac</a>&nbsp;troquant les processeurs Intel par des puces Arm d&#39;Apple. Mais il est d&#39;ores et d&eacute;j&agrave; possible de faire rouler Mac OS sur un appareil mobile du constructeur ! Bon certes, il s&#39;agit de Mac OS 8. Et le Mac ici &eacute;mul&eacute; est un Quadra 900, une machine &eacute;quip&eacute;e d&#39;un processeur Motorola (un 68040 en l&#39;occurrence).</p>\r\n', '250 Pitt Street, Cité de Sydney Nouvelle-Galles du Sud, Australie ', '2018-04-05', '2018-04-07', 'conférence', 'conf.jpg', 'payet@gmail.com'),
(6, 'Trump sa conférence ', '<p>Le pr&eacute;sident am&eacute;ricain Donald Trump s&#39;est vant&eacute; d&#39;avoir affirm&eacute; au premier ministre canadien Justin Trudeau que</p>\r\n\r\n<ul>\r\n	<li>Washington affichait un d&eacute;ficit commercial avec Ottawa alors qu&#39;il n&#39;en avait &laquo;aucune id&eacute;e&raquo;, a rapport&eacute; jeudi le Washington Post. S&#39;exprimant dans une soir&eacute;e de collecte de fonds mercredi soir dans le Missouri, M. Trump a racont&eacute; cette anecdote, dont le journal dit avoir obtenu un enregistrement audio. &laquo;Trudeau est venu me voir. C&#39;est un bon gars, Justin. Il a dit &quot;non, non, nous n&#39;avons pas de d&eacute;ficit commercial avec vous, nous n&#39;en avons aucun&quot;&raquo;, a racont&eacute; le pr&eacute;sident en imitant le premier ministre canadien, selon la retranscription du Washington Post. &laquo;J&#39;ai dit &quot;Faux, Justin, vous en avez un&quot;. Je ne savais m&ecirc;me pas... Je n&#39;en avais aucune id&eacute;e. J&#39;ai simplement dit &quot;vous avez tort&quot;&raquo;, a poursuivi M. Trump. &laquo;Vous savez pourquoi? Parce que nous sommes tellement stupides... Et je pensais qu&#39;ils &eacute;taient malins&raquo;. &laquo;J&#39;ai dit &quot;eh bien dans ce cas, mon sentiment est diff&eacute;rent (...) mais je n&#39;y crois pas&quot;&raquo;, a ajout&eacute; le pr&eacute;sident, affirmant avoir alors &laquo;envoy&eacute; un de nos gars, son gars, mon gars, ils sont sortis et j&#39;ai dit &quot;v&eacute;rifiez parce que je n&#39;arrive pas &agrave; y croire&quot;&raquo;. Il est revenu sur le sujet jeudi matin en tweetant: &laquo;Nous avons bien un d&eacute;ficit commercial avec le Canada comme nous en avons avec presque tous les pays (certains sont &eacute;normes)&raquo;.</li>\r\n</ul>\r\n', '250 Pitt Street, Waterloo Nouvelle-Galles du Sud, Australie', '2018-03-28', '2018-03-30', 'conférence', 'even4.jpg', 'payet@gmail.com'),
(5, 'La fibre d\'orange', '<p><em><strong>Avec la Fibre optique,</strong></em> Orange vous propose une technologie accessible et s&ucirc;re pour une exp&eacute;rience digitale hors du commun. Profitez d&rsquo;une connexion internet 30 fois plus rapide compar&eacute; &agrave; l&rsquo;ADSL&nbsp;:&nbsp;<a href=\"https://reseaux.orange.fr/decouvrir-le-reseau/a-la-maison/fibre-la-fibre-selon-orange\">d&eacute;couvrez la puissance de la Fibre</a><strong>.</strong>&nbsp;Nos d&eacute;bits descendants annonc&eacute;s &agrave; 500Mbit/s minimum (et montant de 200 Mbit/s) ont &eacute;t&eacute; mesur&eacute;s &agrave; des niveaux sup&eacute;rieurs par des sites ind&eacute;pendants tels que speedtest, ou le test de mire ADSL, partout en France. &nbsp;</p>\r\n', 'Rue de Rivoli, France', '2018-10-10', '2018-10-11', 'conférence', 'even1.jpg', 'payet@gmail.com'),
(7, 'Soirée de fou malade', 'Et de poursuivre: «PM Justin Trudeau du Canada, un gars très bien, n\'aime pas dire que le Canada a un surplus face aux USA (en négociation), mais c\'est le cas... c\'est le cas pour presque tous... et c\'est comme ça que je sais!»\r\n\r\nD\'après les statistiques américaines, les États-Unis présentaient un excédent commercial (biens et services) avec le Canada de 12,5 milliards de dollars en 2016, pour 627,8 milliards de dollars d\'échanges. Dans le détail, ils affichaient un déficit de 12,1 milliards dans les biens et un excédent de 24,6 milliards dans les services.', '', '2018-03-22', '2018-03-31', 'soirée', 'even3.jpg', 'payet@gmail.com'),
(8, 'Zinédine Zidane (Real Madrid) ', '<p>Zin&eacute;dine Zidane,</p>\r\n\r\n<ol>\r\n	<li>l&#39;entra&icirc;neur du Real Madrid, refuse le statut de favori en C1. Son &eacute;quipe affrontera la Juventus Turin ce mercredi,</li>\r\n	<li>en quart de finale retour de Ligue des Champions, apr&egrave;s s&#39;&ecirc;tre impos&eacute;e 0-3 lors du match aller.</li>\r\n</ol>\r\n', 'Aliqua, Reggio de Calabre, Italie', '2018-09-14', '2018-09-14', 'sport', 'even5.jpg', 'payet@gmail.com'),
(9, 'Sortie entre poto', '<p><strong>Vous aurez pour occasion de :</strong></p>\r\n\r\n<ul>\r\n	<li>Traverser&nbsp;un lac rude</li>\r\n	<li>Avoir de bons amis</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>De faire du kayak</li>\r\n</ol>\r\n', '148 Pitt Street, Cité de Sydney Nouvelle-Galles du Sud, Australie', '2018-01-01', '2018-05-02', 'soirée', 'even2.jpg', 'payet@gmail.com'),
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
(1, 'Film Xxxxllll', '<ul>\r\n	<li><strong>comme never tu vas prendre cher</strong></li>\r\n</ul>\r\n', 'cueillette', 'mathis@gmail.com'),
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
(1, 'ZEBI', 'Jules cesar', '12.00', 'M2', 'M2: SES-IES', 'mathis@gmail.com'),
(2, 'java et ses particularités en lousdé', 'Lom Hillat', '3.00', 'L3', 'L3 UP Gestion', 'payet@gmail.com'),
(5, 'la cuisine et ses tech', 'yves cote de porc', '2.50', 'L3', 'Autre', 'payet@gmail.com'),
(7, 'le renard et la fourmie', 'jean de la fontaine', '3.50', 'L1', 'L1 UP1: App/ réussite', 'payet@gmail.com'),
(8, 'test user000', 'fdgdfgdfg', '1.40', 'L3', 'L3 UPE: Droit', 'mathis@gmail.com'),
(10, 'test 3.0000', 'fdfdffdf', '1.50', 'M1', 'M1: ECO DU DROIT', 'mathis@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
