-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 06 avr. 2018 à 20:13
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd-cyb`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `idadress` bigint(20) NOT NULL,
  `numero_rue` int(11) DEFAULT NULL,
  `libelle_rue` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `code_postale` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`idadress`, `numero_rue`, `libelle_rue`, `ville`, `code_postale`) VALUES
(23, 5, 'rue alendre', 'saint denis', 93200),
(24, NULL, NULL, NULL, NULL),
(25, 0, '', '', 0),
(26, 0, '', '', 0),
(27, 5, 'Albert Dhalenne', 'Saiint Ouen', 93400),
(28, NULL, NULL, NULL, NULL),
(29, 22, 'rue mamelade', 'peter pan', 93200),
(30, 2, 'rue pouloulou', 'saint denis', 93200);

-- --------------------------------------------------------

--
-- Structure de la table `animateur`
--

CREATE TABLE `animateur` (
  `idanimateur` bigint(20) NOT NULL,
  `nom_animateur` varchar(50) DEFAULT NULL,
  `mdp_animateur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animateur`
--

INSERT INTO `animateur` (`idanimateur`, `nom_animateur`, `mdp_animateur`) VALUES
(1, 'sivo', 'norn'),
(2, 'teddy', 'soreze');

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `idcour` bigint(20) NOT NULL,
  `niveau_cour` int(11) DEFAULT NULL,
  `nom_cour` varchar(50) DEFAULT NULL,
  `video_cour` varchar(50) DEFAULT NULL,
  `img_cour` varchar(50) DEFAULT NULL,
  `quizzcour` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`idcour`, `niveau_cour`, `nom_cour`, `video_cour`, `img_cour`, `quizzcour`) VALUES
(1, 0, 'debuter', 'debuter_video', 'img', 'quizz1'),
(2, 1, 'debuter', 'debutercouravi', 'imgcour', '1'),
(3, 1, 'debuter', 'debutercouravi', 'imgcour', '1'),
(4, 1, 'debuter', 'debutercouravi', 'imgcour', '1'),
(5, 0, 'on veut des sous', 'gagner de largent', 'billcoint', 'ez win');

-- --------------------------------------------------------

--
-- Structure de la table `creer`
--

CREATE TABLE `creer` (
  `idanimateur` bigint(20) NOT NULL,
  `idcour` bigint(20) NOT NULL,
  `idcreation` bigint(20) DEFAULT NULL,
  `date_creation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `modification`
--

CREATE TABLE `modification` (
  `idanimateur` bigint(20) NOT NULL,
  `idcour` bigint(20) NOT NULL,
  `idmodification` bigint(20) DEFAULT NULL,
  `date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

CREATE TABLE `suivre` (
  `idusager` bigint(20) NOT NULL,
  `idcour` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `usager`
--

CREATE TABLE `usager` (
  `idusager` bigint(20) NOT NULL,
  `num_carte` int(11) DEFAULT NULL,
  `nom_usager` varchar(50) DEFAULT NULL,
  `prenom_usager` varchar(50) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `mdp_usager` varchar(50) DEFAULT NULL,
  `nivaeu_usager` int(11) DEFAULT NULL,
  `idadress` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `usager`
--

INSERT INTO `usager` (`idusager`, `num_carte`, `nom_usager`, `prenom_usager`, `date_naissance`, `mdp_usager`, `nivaeu_usager`, `idadress`) VALUES
(35, 0, '', '', '0000-00-00', '', 0, NULL),
(36, 123, 'demo', 'demo-d', '2018-04-14', 'mdp', 0, NULL),
(37, 123, 'demo', 'demo-d', '2018-04-14', 'mdp', 0, NULL),
(38, 156, 'demo', 'demod', '2010-05-05', 'mdp', NULL, NULL),
(39, 156, 'demo', 'demod', '2010-05-05', 'mdp', 0, NULL),
(40, 0, '', '', '0000-00-00', '', 0, NULL),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 156, 'john', 'wood', '2018-04-11', 'fff', 10, NULL),
(43, 0, '', '', '0000-00-00', '', 0, NULL),
(44, 0, '', '', '0000-00-00', '', 0, NULL),
(45, 0, 'cyber', '', '0000-00-00', '', 0, NULL),
(46, 0, '', '', '0000-00-00', '', 0, NULL),
(47, 0, '', '', '0000-00-00', '', 0, NULL),
(48, 1234568, 'freeman', 'morgen', '1998-08-21', '1234', 0, NULL),
(49, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL),
(50, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL),
(51, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL),
(52, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL),
(53, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL),
(54, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL),
(55, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL),
(56, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL),
(57, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL),
(58, 648559, 'test3', 'test3', '1998-08-21', '0000', 0, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`idadress`);

--
-- Index pour la table `animateur`
--
ALTER TABLE `animateur`
  ADD PRIMARY KEY (`idanimateur`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`idcour`);

--
-- Index pour la table `creer`
--
ALTER TABLE `creer`
  ADD PRIMARY KEY (`idanimateur`,`idcour`),
  ADD KEY `FK_creer_idcour` (`idcour`);

--
-- Index pour la table `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`idanimateur`,`idcour`),
  ADD KEY `FK_modification_idcour` (`idcour`);

--
-- Index pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD PRIMARY KEY (`idusager`,`idcour`),
  ADD KEY `FK_suivre_idcour` (`idcour`);

--
-- Index pour la table `usager`
--
ALTER TABLE `usager`
  ADD PRIMARY KEY (`idusager`),
  ADD KEY `FK_Usager_idadress` (`idadress`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `idadress` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `animateur`
--
ALTER TABLE `animateur`
  MODIFY `idanimateur` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `idcour` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `creer`
--
ALTER TABLE `creer`
  MODIFY `idanimateur` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `modification`
--
ALTER TABLE `modification`
  MODIFY `idanimateur` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `suivre`
--
ALTER TABLE `suivre`
  MODIFY `idusager` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `usager`
--
ALTER TABLE `usager`
  MODIFY `idusager` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `creer`
--
ALTER TABLE `creer`
  ADD CONSTRAINT `FK_creer_idanimateur` FOREIGN KEY (`idanimateur`) REFERENCES `animateur` (`idanimateur`),
  ADD CONSTRAINT `FK_creer_idcour` FOREIGN KEY (`idcour`) REFERENCES `cour` (`idcour`);

--
-- Contraintes pour la table `modification`
--
ALTER TABLE `modification`
  ADD CONSTRAINT `FK_modification_idanimateur` FOREIGN KEY (`idanimateur`) REFERENCES `animateur` (`idanimateur`),
  ADD CONSTRAINT `FK_modification_idcour` FOREIGN KEY (`idcour`) REFERENCES `cour` (`idcour`);

--
-- Contraintes pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD CONSTRAINT `FK_suivre_idcour` FOREIGN KEY (`idcour`) REFERENCES `cour` (`idcour`),
  ADD CONSTRAINT `FK_suivre_idusager` FOREIGN KEY (`idusager`) REFERENCES `usager` (`idusager`);

--
-- Contraintes pour la table `usager`
--
ALTER TABLE `usager`
  ADD CONSTRAINT `FK_Usager_idadress` FOREIGN KEY (`idadress`) REFERENCES `adresse` (`idadress`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
