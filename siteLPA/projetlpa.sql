-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mar 28 Mai 2013 à 09:43
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projetlpa`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idEspece` int(11) NOT NULL,
  `idRace` int(11) NOT NULL,
  `numMedaille` int(11) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `dateSterilisation` date NOT NULL,
  `collier` int(11) NOT NULL,
  `numTatouage` int(11) NOT NULL,
  `emplacementTatouage` varchar(50) NOT NULL,
  `numPuceElectronique` int(11) NOT NULL,
  `refVaccin1` int(11) NOT NULL,
  `dateVaccin1` date NOT NULL,
  `rappelVaccin1` date NOT NULL,
  `refVaccin2` int(11) NOT NULL,
  `dateVaccin2` date NOT NULL,
  `rappelVaccin2` date NOT NULL,
  `dateNaissance` date NOT NULL,
  `ageApproximatif` int(11) NOT NULL,
  `moisApproximatif` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `idTaille` int(11) NOT NULL,
  `idOreilles` int(11) NOT NULL,
  `idPoil` int(11) NOT NULL,
  `idTailleQueue` int(11) NOT NULL,
  `etatAnimal` varchar(50) NOT NULL,
  `couleurPrincipale` varchar(50) NOT NULL,
  `couleurSecondaire` varchar(50) NOT NULL,
  `signeParticulier` varchar(50) NOT NULL,
  `motif` varchar(50) NOT NULL,
  `observations` varchar(50) NOT NULL,
  `mordeur` varchar(50) NOT NULL,
  `controleSanitaireLPA` varchar(50) NOT NULL,
  `idTypeEntree` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idEspece` (`idEspece`),
  KEY `idRace` (`idRace`),
  KEY `idTaille` (`idTaille`),
  KEY `idOreilles` (`idOreilles`),
  KEY `idPoil` (`idPoil`),
  KEY `couleurPrincipale` (`couleurPrincipale`),
  KEY `refVaccin1` (`refVaccin1`),
  KEY `refVaccin2` (`refVaccin2`),
  KEY `idTypeEntree` (`idTypeEntree`),
  KEY `idTailleQueue` (`idTailleQueue`),
  KEY `collier` (`collier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE IF NOT EXISTS `chauffeur` (
  `reference` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chauffeur`
--

INSERT INTO `chauffeur` (`reference`, `nom`) VALUES
('1', '"Philippe PACKET"'),
('2', '"Guy HAUTEKEETE"'),
('3', '"Christopher DUBRUL"'),
('4', '"Walter DUBRUL"'),
('5', '"Anthony FIGUEROA"'),
('6', '"S?bastien COTON"');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `CP` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `telephone1` varchar(50) NOT NULL,
  `telephone2` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `adresse`, `CP`, `ville`, `telephone1`, `telephone2`) VALUES
(2, 'TALEB', 'SALIM', '40/10 AllÃ©e Pierre de Roubaix', '59100', 'Roubaix', '06 66 32 27 95', '03 20 73 37 71'),
(3, 'CATTEAU', 'CYRIL', '40 RUE ARGENTEE', '59200', 'TOURCOING', '0600000000', '0600000000');

-- --------------------------------------------------------

--
-- Structure de la table `cliententree`
--

CREATE TABLE IF NOT EXISTS `cliententree` (
  `refClientEntree` int(11) NOT NULL AUTO_INCREMENT,
  `sommeVersee` varchar(50) NOT NULL,
  `sommeRendue` varchar(50) NOT NULL,
  `modePaiement` int(50) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`refClientEntree`),
  KEY `idClient` (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `collier`
--

CREATE TABLE IF NOT EXISTS `collier` (
  `refCollier` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`refCollier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `collier`
--

INSERT INTO `collier` (`refCollier`, `libelle`) VALUES
(1, 'M?tal LPA'),
(2, 'Colson LPA'),
(3, 'Cuir Naturel'),
(4, 'Cuir Rouge'),
(5, 'Cuir Vert'),
(6, 'Nylon Fantaisie'),
(7, 'Avec Tube Adresse'),
(8, 'Avec M?daille LPA'),
(9, 'Anti-Puces'),
(10, 'A Lui'),
(11, 'Harnais'),
(12, 'M?tallique');

-- --------------------------------------------------------

--
-- Structure de la table `espece`
--

CREATE TABLE IF NOT EXISTS `espece` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `espece`
--

INSERT INTO `espece` (`id`, `libelle`) VALUES
(1, 'CHIEN'),
(2, 'CHAT'),
(3, 'CHIOTS'),
(4, 'CHATONS'),
(5, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE IF NOT EXISTS `etat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `etat`
--

INSERT INTO `etat` (`id`, `libelle`) VALUES
(1, 'BON'),
(2, 'MOYEN'),
(3, 'MAUVAIS'),
(4, 'TRES MAUVAIS'),
(5, 'BLESSE'),
(6, 'MORT'),
(7, 'A TOILETTER');

-- --------------------------------------------------------

--
-- Structure de la table `fraisdivers`
--

CREATE TABLE IF NOT EXISTS `fraisdivers` (
  `reference` varchar(50) NOT NULL,
  `frais` varchar(50) NOT NULL,
  `tarifFrais` varchar(50) NOT NULL,
  `tva2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fraisdivers`
--

INSERT INTO `fraisdivers` (`reference`, `frais`, `tarifFrais`, `tva2`) VALUES
('1', 'Pension Chien', '5,85 ?', '0,19'),
('12', 'Pension Chat', '4,18 ?', '0,19');

-- --------------------------------------------------------

--
-- Structure de la table `oreilles`
--

CREATE TABLE IF NOT EXISTS `oreilles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `oreilles`
--

INSERT INTO `oreilles` (`id`, `libelle`) VALUES
(1, 'TOMBANTES'),
(2, 'DROITES'),
(3, 'MI-DROITES'),
(4, 'DROITE CASSEE'),
(5, 'GAUCHE CASSEE');

-- --------------------------------------------------------

--
-- Structure de la table `poils`
--

CREATE TABLE IF NOT EXISTS `poils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `poils`
--

INSERT INTO `poils` (`id`, `libelle`) VALUES
(1, 'COURTS'),
(2, 'MI LONGS'),
(3, 'LONGS'),
(4, 'FRISES');

-- --------------------------------------------------------

--
-- Structure de la table `queue`
--

CREATE TABLE IF NOT EXISTS `queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `queue`
--

INSERT INTO `queue` (`id`, `libelle`) VALUES
(1, 'LONGUE'),
(2, 'COUPEEE'),
(3, 'MI-LONGUE'),
(4, 'INEXISTANTE'),
(5, 'CASSEE');

-- --------------------------------------------------------

--
-- Structure de la table `race`
--

CREATE TABLE IF NOT EXISTS `race` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `race`
--

INSERT INTO `race` (`id`, `libelle`) VALUES
(1, 'BERGER ALLEMAND'),
(2, 'BRAQUE ALLEMAND'),
(3, 'EPAGNEUL BRETON'),
(4, 'CANICHE'),
(5, 'BEAUCERON'),
(6, 'EUROPEEN'),
(7, 'CHARTREUX'),
(8, 'PERSAN'),
(9, 'ANGORA'),
(10, 'SIAMOIS'),
(11, 'BRIARD'),
(12, 'BICHON'),
(13, 'COCKER'),
(14, 'WHIPPET'),
(15, 'SETTER'),
(16, 'SETTER IRLANDAIS'),
(17, 'GRIFFON'),
(18, 'BASSET x GRIFFON'),
(19, 'MATIN DE NAPLES'),
(20, 'BOXER'),
(21, 'BERGER D''ECOSSE'),
(22, 'X EPAGNEUL'),
(23, 'X LABRADOR'),
(24, 'X RATIER'),
(25, 'LOUP D''ALSACE'),
(26, 'X GRIFFON KORTHAL'),
(27, 'X EPAGNEUL COCKER'),
(28, 'X GRIFFON'),
(29, 'LOULOU DE POMERANIE'),
(30, 'X BRAQUE LABRADOR'),
(31, 'X GRONENDAEL'),
(32, 'X GOLDEN RETRIEVER'),
(33, 'X GRIFFON CANICHE'),
(34, 'X HUSKY'),
(35, 'X COLLEY'),
(36, 'LABRADOR'),
(37, 'EPAGNEUL PICARD'),
(38, 'GOLDEN RETRIEVER'),
(39, 'X BICHON CANICHE'),
(40, 'X LOUP D''ALSACE'),
(41, 'X GRIFFON LABRADOR'),
(42, 'X BASSET GRIFFON'),
(43, 'X FOX TERRIER'),
(44, 'X EPAGNEUL PAPILLON'),
(45, 'X MALINOIS'),
(46, 'X MONTAGNE DES PYRENNES'),
(47, 'X CANICHE'),
(48, 'X KAIRN TERRIER'),
(49, 'SPITZ'),
(50, 'X SETTER'),
(51, 'X TECKEL'),
(52, 'X BERGER EPAGNEUL'),
(53, 'X MALINOIS LABRADOR'),
(54, 'SETTER GORDON'),
(55, 'HUSKY'),
(56, 'X SAINT BERNARD'),
(57, 'X GRIFFON FOX'),
(58, 'X EPAGNEUL MALINOIS'),
(59, 'X CHOW-CHOW'),
(60, 'X DOBERMAN'),
(61, 'X GRIFFON MALINOIS'),
(62, 'X EPAGNEUL BRETON'),
(63, 'X PAPILLON'),
(64, 'X SHITZU PEKINOIS'),
(65, 'X GRIFFON YORKSHIRE'),
(66, 'YORKSHIRE'),
(67, 'BASSET'),
(68, 'ROTTWEILLER'),
(69, 'X YORKSHIRE'),
(70, 'FOX TERRIER'),
(71, 'X BRIARD'),
(72, 'RATIER'),
(73, 'MONTAGNE DES PYRENNEES'),
(74, 'GRIFFON KORTHAL'),
(75, 'DOGUE ALLEMAND'),
(76, 'EPAGNEUL SETTER'),
(77, 'GRONENDA?L'),
(78, 'TERVUEREN'),
(79, 'X BEAUCERON COCKER'),
(80, 'COLLEY'),
(81, 'WESTY'),
(82, 'X LOULOU PAPILLON'),
(83, 'X BEAUCERON'),
(84, 'LEONBERG'),
(85, 'DOBERMAN'),
(86, 'TERRIER DU THIBET'),
(87, 'BERGER PICARD'),
(88, 'X LOULOU'),
(89, 'X BOUVIER'),
(90, 'PYRENEEN'),
(91, 'X BERGER ALLEMAND'),
(92, 'X BERGER BOXER'),
(93, 'X BERGER MALINOIS'),
(94, 'X BASSET'),
(95, 'PINSHER'),
(96, 'BULL TERRIER'),
(97, 'AM STAFF'),
(98, 'BICHON HAVANAIS'),
(99, 'X EPAGNEUL BERGER'),
(100, 'LABRIT'),
(101, 'X ROTTWEILLER'),
(102, 'CAVALIER KING CHARLES'),
(103, 'PEKINOIS'),
(104, 'X BEAGGLE'),
(105, 'X BERGER GRIFFON'),
(106, 'BORDER TERRIER'),
(107, 'X BASSET EPAGNEUL'),
(108, 'X LABRADOR SETTER'),
(109, 'SHITZU'),
(110, 'BASSET ARTESIEN'),
(111, 'SETTER ANGLAIS'),
(112, 'X SPRINGER SETTER'),
(113, 'X LABRIT'),
(114, 'X COCKER CAVALIER KING  CH'),
(115, 'X BRAQUE ALLEMAND'),
(116, 'X BRAQUE POINTER'),
(117, 'X EPAGNEUL LABRADOR'),
(118, 'BOBTAIL'),
(119, 'X BEARDED COLLIE'),
(120, 'Autres'),
(121, 'X ANGORA'),
(122, 'X SIAMOIS'),
(123, 'BEARDED COLLIE'),
(124, 'X BOXER LABRADOR'),
(125, 'TERRE NEUVE'),
(126, 'X PERSAN'),
(127, 'CHARPLANINATZ'),
(128, 'BOUVIER BERNOIS'),
(129, 'CHIHUAHUA'),
(130, 'CHOW- CHOW'),
(131, 'SPRINGER SPANIEL'),
(132, 'X PINSHER'),
(133, 'LHASSA APSO'),
(134, 'SHARPEI'),
(135, 'X MALINOIS BOXER'),
(136, 'COCKER AMERICAIN'),
(137, 'X CAVALIER KING CHARLES'),
(138, 'SCHNAUZER'),
(139, 'DALMATIEN'),
(140, 'X BERGER HUSKY'),
(141, 'POINTER'),
(142, 'X WESTY'),
(143, 'DRATHAAR'),
(144, 'X LHASSA APSO'),
(145, 'MALINOIS'),
(146, 'BASSET HOUND'),
(147, 'X FOX EPAGNEUL'),
(148, 'SAINT BERNARD'),
(149, 'X LABRADOR BERGER'),
(150, 'X PINSHER YORKSHIRE'),
(151, 'X EPAGNEUL BRAQUE'),
(152, 'X TECKEL GRIFFON'),
(153, 'JACK RUSSEL'),
(154, 'X CHARTREUX'),
(155, 'SETTER NOIR'),
(156, 'PITT BULL'),
(157, 'X GRIFFON EPAGNEUL'),
(158, 'GRIFFON SETTER'),
(159, 'BEAGLE'),
(160, 'X BOXER'),
(161, 'X COCKER'),
(162, 'X PYRENEEN'),
(163, 'SCOTTISH TERRIER'),
(164, 'TECKEL'),
(165, 'X PEKINOIS CANICHE'),
(166, 'X TERVUREN'),
(167, 'X BERGER AMERICAIN'),
(168, 'X PITBULL'),
(169, 'X POINTER'),
(170, 'X BORDER COLLIE'),
(171, 'X EPAGNEUL COLLEY'),
(172, 'SACRE DE BIRMANIE'),
(173, 'X LEONBERG'),
(174, 'X EPAGNEUL SETTER'),
(175, 'X HUSKY MALINOIS'),
(176, 'X RATIER BERGER'),
(177, 'DOGUE ARGENTIN'),
(178, 'COTTON DE TULEAR'),
(179, 'RETRIEVER LABRADOR'),
(180, 'X RATIER FOX'),
(181, 'X BEAUCERON BOXER'),
(182, 'X LEVRIER'),
(183, 'X SHITZU'),
(184, 'X YORKSHIRE BICHON'),
(185, 'BERGER DES PYRENE'),
(186, 'BERGER DES PYRENNEE'),
(187, 'X EURASIER'),
(188, 'X BERGER SETTER'),
(189, 'X BERGER LABRADOR'),
(190, 'X BERGER BEAUCERON'),
(191, 'INCONNUE OU NON TROUVEE'),
(192, 'X BOXER ROTTWEILLER'),
(193, 'ABYSSIN'),
(194, 'BIRMESE (chat Egyptien)'),
(195, 'X WHIPPET'),
(196, 'X DOGUE ALLEMAND LABRADOR'),
(197, 'BERGER AMERICAIN'),
(198, 'X EPAGNEUL DOG ARGENTIN'),
(199, 'BICHON MALTAIS'),
(200, 'X GRIFFON COLLEY'),
(201, 'X DOGUE ARGENTIN'),
(202, 'MANCHESTER TERRIER'),
(203, 'BERGER HOLLANDAIS'),
(204, 'X GRIFFON BRAQUE DE WEIMAR'),
(205, 'X ANGORA ECAILLE DE TORTUE'),
(206, 'SHAPENDOES'),
(207, 'X GRIFFON LOULOU'),
(208, 'X LABRADOR BEAUCERON'),
(209, 'X AMSTAFF'),
(210, 'X BEAUCERON MALINOIS'),
(211, 'BORDER COLLIE'),
(212, 'X EPAGNEUL POINTER'),
(213, 'LAPIN NAIN'),
(214, 'JAGD TERRIER'),
(215, 'X DALMATIEN'),
(216, 'BOULEDOGUE FRANCAIS'),
(217, 'AKITA INU'),
(218, 'X BICHON'),
(219, 'X EPAGNEUL PEKINOIS'),
(220, 'BASSET FAUVE DE BRETAGNE'),
(221, 'CARLIN'),
(222, 'X RATIER EPAGNEUL'),
(223, 'X SCHNAUZER NAIN'),
(224, 'X DRATHAAR'),
(225, 'X EPAGNEUL CANICHE'),
(226, 'X SAINT HUBERT'),
(227, 'PAPILLON'),
(228, 'X SHITZU PAPILLON'),
(229, 'X RATIER MALINOIS'),
(230, 'X RATIER LOULOU'),
(231, 'X SHARPEI'),
(232, 'X DOGUE ARGENTIN BERGER'),
(233, 'X CHIHUAHUA'),
(234, 'X EPAGNEUL LOULOU'),
(235, 'X COCKER CANICHE'),
(236, 'DOGUE DE BORDEAUX'),
(238, 'X JACQ RUSSEL'),
(241, 'KAIRN TERRIER'),
(242, 'X GRIFFON BERGER'),
(243, 'BERGER MALINOIS'),
(244, 'COCHON CHINOIS'),
(245, 'X COLLEY RATIER'),
(246, 'X BIRMAN SIAMOIS'),
(247, 'X GPAPILLON EPAGNEUL'),
(248, 'STAFF'),
(249, 'BRAQUE DE WEIMAR'),
(250, 'X BERGER DES PYRENEES'),
(251, 'BOUVIER DES FLANDRES'),
(252, 'X BASSET FAUVE DE BRETAGNE'),
(253, 'MALAMUTE'),
(254, 'EPAGNEUL FRANCAIS'),
(255, 'X CHASSE'),
(256, 'COCKER BERGER'),
(257, 'X PINCHER'),
(258, 'X SCOTTICH'),
(259, 'AIREDALE'),
(260, 'BERGER PAPILLON'),
(262, 'CARN TERRIER'),
(263, 'PEKINOIS GRIFFON'),
(264, 'X PEKINOIS GRIFFON'),
(265, 'BERGER BELGE'),
(266, 'BERGER'),
(267, 'X BERGER COLLEY'),
(268, 'X FOX'),
(269, 'X BOUVIER BERNOIS'),
(270, 'X SHOW SHOW'),
(271, 'BRAQUE DU BOURBONNAIS'),
(272, 'X BERGER PAPILLON'),
(273, 'X PEKINOIS YORCK'),
(274, 'BOULEDOGUE AMERICAIN'),
(275, 'X BULL TERRIER'),
(276, 'X BULLDOG FRANCAIS'),
(277, 'X GROENDAEL'),
(278, 'COCKER ANGLAIS'),
(279, 'BOULLEDOGUE ANGLAIS'),
(280, 'MAIN'),
(281, 'MAIN COON'),
(283, 'WEST HIGHLAND WHITE'),
(286, 'X BICHON SHIT'),
(288, 'X SHITZY'),
(289, 'X SHITZU BICHON'),
(290, 'X CANICHE ET GRIFFON'),
(291, 'X BERGER'),
(292, 'SHIBA INU'),
(293, 'X BERGER MALAMUTE'),
(294, 'X SACRE DE BIRMANIE'),
(295, 'X PEKINOIS'),
(296, 'FURET'),
(297, 'X YORCK GRIFFON'),
(298, 'X HUSKY BASSET'),
(299, 'SCHETLAND'),
(300, 'X TERRENEUVE'),
(301, 'X COLLEY HUSKY'),
(302, 'SAMOYEDE'),
(303, 'X GRIFFON VENDEEN'),
(304, 'X YORCK TECKEL'),
(305, 'X FOX BOXER'),
(306, 'X BOBTAIL'),
(307, 'x berger belge'),
(308, 'CANE CORSO'),
(309, 'X EPAGNEUL  LABRADOR'),
(310, 'X GRIFFON SHITZU'),
(311, 'X COLLEY BERGER'),
(312, 'X STAFF LABRADOR'),
(313, 'X BOULEDOGUE'),
(314, 'X YORCK CANICHE'),
(315, 'X CHASSE EPAGNEUL'),
(316, 'X RETRIEVER PAPILLON'),
(317, 'X WELSH CORGI'),
(318, 'X BEAUCERON HUSKY'),
(319, 'LEVRIER AFGHAN'),
(320, 'X DOGUE ALLAND'),
(321, 'X DOGUE ALLEMAND'),
(322, 'BOUVIER DES ARDENNES'),
(323, 'BERGER TERVURENNE'),
(324, 'RHODESIAN RIDGEBACK'),
(325, 'X TERRENEUVE CHASSE'),
(326, 'X GRIFFON TECKEL'),
(327, 'LOUP DE SAARLOS'),
(328, 'X HUSKY LABRADOR'),
(329, 'GRIFFON FAUVE DE BRETAGNE'),
(330, 'X PEKINOIS PAPILLON'),
(331, 'BRAQUE HONGROIS'),
(332, 'BULLDOG ANGLAIS'),
(334, 'X DOGUE ARGENTIN LABRADOR'),
(335, 'X GOLDEN CHOW CHOW'),
(336, 'WELCH TERRIER'),
(338, 'X RETRIEVER'),
(339, 'X SHITZU YORCK'),
(340, 'X CANICHE LASSA APSO'),
(341, 'BOULLEDOGUE'),
(342, 'RHODESIAN RIDGBACK'),
(343, 'X SPITZ'),
(344, 'SPITZ NAIN'),
(345, 'X BASSET CHOW CHOW'),
(346, 'EPAGEUL PAPILLON'),
(347, 'X STAFF'),
(348, 'PERROQUET'),
(349, 'X YORCK LOULOU'),
(350, 'CHAR PEI'),
(351, 'X BERGER PICARD'),
(352, 'X CANE CORSO'),
(353, 'BERGER GROENDAL'),
(354, 'X BULL MASTIFF'),
(355, 'X DOGUE DE BORDEAU'),
(356, 'BORDED COLLIE'),
(357, 'X TECKEL PAPILLION'),
(358, 'BULL MASTIF'),
(359, 'CYGNE'),
(360, 'X MALINOIS HUSKY'),
(361, 'CHIEN DE PRAIRIE'),
(362, 'SPHYNX'),
(363, 'X GREY HOUND'),
(364, 'SHIPPERKE'),
(365, 'X CARLIN'),
(366, 'EPAGNEUL JAPONAIS'),
(367, 'X COCKER GRIFFON'),
(368, 'SHAPPENDOS'),
(369, 'X LABRADOR DRATHAAR'),
(370, 'X BOXER BERGER'),
(371, 'X BICHON YORCK'),
(372, 'BICHON NAIN'),
(373, 'X AM STAFF ROTTWEILER'),
(374, 'X COCKER TECKEL'),
(375, 'X EPAGNEUL BICHON'),
(376, 'X DANOIS'),
(377, 'GRIFFON VANDEEN'),
(378, 'X FLAT CAOT'),
(379, 'X AM STAFF BERGER'),
(380, 'X GRIFFON AFGHAN'),
(381, 'X JACK CANICHE'),
(382, 'X SIAMOIS ANGORA'),
(383, 'FAUVE DE BRETAGNE'),
(384, 'RAT'),
(385, 'X BRAQUE BEAUCERON'),
(386, 'X LABRADOR GRIFFON'),
(387, 'OISEAU'),
(388, 'BRAQUE D AUVERGNE'),
(389, 'X SHARPEI FOX'),
(390, 'DOGO CANARIO'),
(391, 'X LHASSA APSO TECKEL'),
(392, 'X BEAUCERON LABRADOR'),
(393, 'EPAGNEUL HONGROIS'),
(394, 'BULLDOG AMERICAN'),
(395, 'X BOULEDOGUE FRANCAIS'),
(396, 'X FOX GRIFFON'),
(397, 'BRAQUE'),
(398, 'X BERGER AUSTRALIEN'),
(399, 'X AM STAFF SHARPEI'),
(400, 'X WHIPPED'),
(401, 'NORVEGIEN'),
(402, 'X YORK COCKER'),
(403, 'PARSON RUSSEL TERRIER'),
(404, 'X BERGER BOUVIER'),
(405, 'X YORK BASSET'),
(406, 'KUVASZ'),
(407, 'X BRAQUE DE WEIMAR BERGER'),
(408, 'TORTUE'),
(409, 'X EUROPEEN EGYTIEN'),
(410, 'W SAMOYEDE'),
(411, 'X SAMOYEDE'),
(412, 'X CANICHE YORCK'),
(413, 'X ANGORA TURQUE'),
(414, 'X YORK JACK RUSSEL'),
(415, 'TERRIER'),
(416, 'X BERGER DES ?PYRENEES'),
(417, 'KORAT'),
(418, 'SKIPPER'),
(419, 'RETRIEVER FLAT COATED'),
(420, 'X DOGUE AM STAFF'),
(421, 'CHAPEDST'),
(422, 'X STAFF BULL'),
(423, 'COCHON DINDE'),
(424, 'SCHIPPERKE'),
(425, 'X GRIFFON COCKER'),
(426, 'X BOXER GRIFFON'),
(427, 'X BORTAIL CANICHE'),
(428, 'AKITA AMERICAN'),
(429, 'X HUSKY GOLDEN R'),
(430, 'PONEY CATELANDE'),
(431, 'X COTTON DE TULEAR'),
(432, 'crois? basset'),
(433, 'crois? berger'),
(434, 'LEVRIERE AZAWAKH'),
(435, 'X HUSKY SPITZ'),
(436, 'CHIEN D ARRET ALLEMAND'),
(437, 'X GRIFFON BRIARD'),
(438, 'X PARSON'),
(439, 'BRITISCH'),
(440, 'X BERGER TECKEL'),
(441, 'X MALINOIS STAFF'),
(442, 'X SHIBA INU'),
(443, 'X FOX LABRADOR'),
(444, 'BERGER YORGOLVAVE'),
(445, 'X BERGER ROTT'),
(446, 'EPAGNEUL TIBETAIN'),
(447, 'X COTON TULEAR'),
(448, 'PERUCHE'),
(449, 'LOUP TCHEQUE'),
(450, 'CHIBERCK'),
(451, 'BERGER CATALAN'),
(452, 'BERGER AUSTRALIEN'),
(453, 'SHELTIE'),
(454, 'EXOTIQUE ESTERT'),
(455, 'X MAIN COON'),
(456, 'BARZOI'),
(457, 'CAIRN TERRIER'),
(458, 'X'),
(459, 'X CAIRN'),
(460, 'EPAGEUL Fran?ais'),
(461, 'COCHON'),
(462, 'X LABRADOR ROTT'),
(463, 'PIGEON'),
(464, 'PIE VERT'),
(465, 'nizinny'),
(466, 'X LABRADOR KORTHAL'),
(467, 'EPAGNEUL PEKINOIS'),
(468, 'BOULDOGUE Fran?ais'),
(469, 'PYTHON'),
(470, 'X LABRADOR BRAQUE'),
(471, 'OIE'),
(472, 'X BERGER SHOW SHOW'),
(473, 'LEVRIER ESPAGNOL'),
(474, 'SCOTTICH FOLD'),
(475, 'PIE'),
(476, 'X BOXER STAFF'),
(478, 'EPAGNEUL PONT AUDEMER'),
(480, 'EPAHNEUL PONTA'),
(481, '?pagneul pont audemer'),
(483, 'X MALINOIS SETTER'),
(484, 'CANARD'),
(485, 'X BOULEDOGUE CKC'),
(486, 'BERGER BLANC'),
(487, 'X AIREDALE'),
(488, 'FLAT COAT'),
(489, 'TOURTERELLE'),
(490, 'X JACK FOX'),
(491, 'HERON'),
(492, ' PONEY'),
(493, 'BERGER D ANATOLIE'),
(494, 'LEZARD'),
(495, 'x beagle'),
(496, 'CHIEN LION'),
(497, 'X BLEU RUSSE'),
(498, 'X BRAQUE'),
(499, 'X GOLDEN'),
(501, 'BOUC'),
(502, 'LEVRIER'),
(503, 'SERPENT'),
(504, 'RONGEUR'),
(505, 'WALABI'),
(506, 'ORIENTAL'),
(507, 'X BICHON GRIFFON'),
(508, 'X GRIFFON SHIH TZU'),
(509, 'COLOMBE'),
(510, 'MOUETTE'),
(511, 'BECASSE'),
(513, 'X BERGER BULL TERRIER'),
(514, 'X BEAGLE GRIFFON'),
(515, 'FAISAN'),
(516, 'CHIEN NUE'),
(517, 'X LABRADOR HUSKY'),
(519, 'AIGLE'),
(520, 'X LABRADOR MALINOIS'),
(521, 'POULE D EAU'),
(522, 'GROENDAEL'),
(523, 'HIBOU'),
(524, 'X BORDER TERRIER'),
(525, 'X BERGER TERRE-NEUVE'),
(526, 'X BERGER AUSTRALIEN BORDER COLLIE'),
(527, 'X BORDER'),
(528, 'X BERGER STAFF'),
(529, 'X RATIER YORK'),
(530, 'BLEU DE GASCOGNE'),
(531, 'FAUCON'),
(532, 'X YORK RATIER'),
(533, 'CHOUETTE'),
(534, 'EXOTIC SHORTHAIR'),
(535, 'CALOPSITTE'),
(536, 'X LABRADOR CHOW CHOW'),
(537, 'X COYOTTE'),
(539, 'SHIBA  INU'),
(540, 'X BERGER BORDER'),
(541, 'X B'),
(542, 'X BASSET BEAGLE'),
(543, 'chasse'),
(544, 'X RATIER PINSCHER'),
(545, 'HAMSTER'),
(546, 'BASENJI'),
(547, 'X JACK RUSSEL'),
(548, 'CHIBA INOU'),
(549, 'X TECKEL EPAGENEUL'),
(552, 'X ROTT BERGER'),
(553, 'X BORDER GRIFFON'),
(554, 'HERISSON'),
(555, 'STAFF ANGLAIS'),
(556, 'X EPAGEUL Fran?ais'),
(557, 'CHAUVE - SOURIS'),
(558, 'BLEU DE BIRMANIE'),
(559, 'BERGER SUISSE'),
(560, 'BARBU TCHEQUE'),
(561, 'BRAQUE DE GASCOGNE'),
(562, 'STAFFY'),
(563, 'X DOGUE BERGER'),
(564, 'X GRIFFON BARZOI'),
(565, 'X GRIFFON BOBTAIL'),
(567, 'X LABRADOR CHASSE'),
(568, 'PAON');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

CREATE TABLE IF NOT EXISTS `responsable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `responsable` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `responsable`
--

INSERT INTO `responsable` (`id`, `responsable`) VALUES
(1, 'DUBRUL Jennifer'),
(2, 'IDEBSKI AMANDINE'),
(7, 'Le V?t?rinaire du Refuge'),
(8, 'SI YOUCEF DOROTHEE'),
(9, 'MARINE PREVOTS'),
(10, 'PACKET PHILIPPE'),
(11, 'SEBASTIEN'),
(12, 'JULIE ABED'),
(13, 'morhad');

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

CREATE TABLE IF NOT EXISTS `taille` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `taille`
--

INSERT INTO `taille` (`id`, `libelle`) VALUES
(1, 'PETIT'),
(2, 'GRAND');

-- --------------------------------------------------------

--
-- Structure de la table `typeentree`
--

CREATE TABLE IF NOT EXISTS `typeentree` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typeentree`
--

INSERT INTO `typeentree` (`id`, `libelle`) VALUES
(4, 'TROUVE'),
(5, 'ABANDON'),
(6, 'RETOUR ADOPTION'),
(7, 'CONFIE Provisoirement'),
(8, 'SAISI'),
(16, 'PERDU'),
(17, 'TROUVE ( Gard? )'),
(18, 'IMMATRICULE Volontaire'),
(19, 'Port?e ? Eutha'),
(20, 'ENQUETE'),
(21, 'DEPOT DE PIEGE'),
(22, 'Port?e TR'),
(23, 'Port?e AB'),
(24, 'Ab suite enqu?te'),
(25, 'PR?T D''UN PANIER'),
(26, 'PIEGEAGE CHAT');

-- --------------------------------------------------------

--
-- Structure de la table `typesortie`
--

CREATE TABLE IF NOT EXISTS `typesortie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typesortie`
--

INSERT INTO `typesortie` (`id`, `libelle`) VALUES
(1, 'ADOPTE'),
(2, 'RECUPERE'),
(3, 'REPRIS PAR MAITRE'),
(4, 'EUTHANASIE'),
(5, 'EVADE'),
(6, 'VOLE'),
(7, 'DECEDE'),
(8, 'CADAV. POUR EQUARRISSAGE'),
(9, 'CADAV. IDENTIFIE + EQUAR.'),
(10, 'CADAV. IDENTIFIE + REPRIS'),
(11, 'RETOUR SANS ANIMAL'),
(12, 'TRANSFERE A LILLE'),
(13, 'CHAT Pi?g? Rel?ch? ou Transf?r');

-- --------------------------------------------------------

--
-- Structure de la table `vaccin`
--

CREATE TABLE IF NOT EXISTS `vaccin` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `vaccin`
--

INSERT INTO `vaccin` (`num`, `libelle`) VALUES
(1, 'CHPPi2+Bb/Pi2'),
(2, 'CHPPi2'),
(3, 'Bb/Pi2'),
(4, 'TC'),
(5, 'HCP'),
(6, 'FéligenCRP'),
(7, 'CHL'),
(8, 'CHPL'),
(9, 'CHPLR'),
(10, 'CHPPiLR'),
(11, 'Rage'),
(12, 'Tetrafel(Typh-Cory-Chlamyd)'),
(13, 'FelV(Leucode)'),
(14, 'CHPPi2 L'),
(15, 'CHPPi2 LR'),
(16, 'CHPPi/L'),
(17, 'CHPPi2 + Nobivac KC'),
(18, 'CHP+Bb/Pi2'),
(19, 'Nobivac KC');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_55` FOREIGN KEY (`idEspece`) REFERENCES `espece` (`id`),
  ADD CONSTRAINT `animal_ibfk_56` FOREIGN KEY (`idRace`) REFERENCES `race` (`id`),
  ADD CONSTRAINT `animal_ibfk_57` FOREIGN KEY (`collier`) REFERENCES `collier` (`refCollier`),
  ADD CONSTRAINT `animal_ibfk_58` FOREIGN KEY (`refVaccin1`) REFERENCES `vaccin` (`num`),
  ADD CONSTRAINT `animal_ibfk_59` FOREIGN KEY (`refVaccin2`) REFERENCES `vaccin` (`num`),
  ADD CONSTRAINT `animal_ibfk_60` FOREIGN KEY (`idTaille`) REFERENCES `taille` (`id`),
  ADD CONSTRAINT `animal_ibfk_61` FOREIGN KEY (`idOreilles`) REFERENCES `oreilles` (`id`),
  ADD CONSTRAINT `animal_ibfk_62` FOREIGN KEY (`idPoil`) REFERENCES `poils` (`id`),
  ADD CONSTRAINT `animal_ibfk_63` FOREIGN KEY (`idTailleQueue`) REFERENCES `queue` (`id`),
  ADD CONSTRAINT `animal_ibfk_64` FOREIGN KEY (`idTypeEntree`) REFERENCES `typeentree` (`id`);

--
-- Contraintes pour la table `cliententree`
--
ALTER TABLE `cliententree`
  ADD CONSTRAINT `cliententree_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
