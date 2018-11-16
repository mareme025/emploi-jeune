-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Octobre 2018 à 16:17
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sousemploi`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande_emploi`
--

CREATE TABLE IF NOT EXISTS `demande_emploi` (
`idDemande` int(11) NOT NULL,
  `typedmd` varchar(45) DEFAULT NULL,
  `profildmder` varchar(45) DEFAULT NULL,
  `Entreprise_idEntreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demande_formation`
--

CREATE TABLE IF NOT EXISTS `demande_formation` (
`idDemande_Formation` int(11) NOT NULL,
  `nomFormation` varchar(45) DEFAULT NULL,
  `Etudiant_idEtudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE IF NOT EXISTS `ecole` (
`idEcole` int(11) NOT NULL,
  `nomecole` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `motdepasse` varchar(10) DEFAULT NULL,
  `emplacement` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ecole`
--

INSERT INTO `ecole` (`idEcole`, `nomecole`, `email`, `motdepasse`, `emplacement`) VALUES
(1, 'ESP', 'esp@gmail.com', 'c6caac2d95', 'Dakar'),
(2, 'Edacy', 'edacy@gmail.com', '741b22108b', 'sacre coeur'),
(3, 'ISI Dakar', 'isidakar@gmail.com', 'cda7300a22', 'Dakar'),
(4, 'IAM', 'iam@gmail.com', 'bd0c7a3966', 'Mermoz');

-- --------------------------------------------------------

--
-- Structure de la table `ecole_has_demande_formation`
--

CREATE TABLE IF NOT EXISTS `ecole_has_demande_formation` (
  `Ecole_idEcole` int(11) NOT NULL,
  `Demande_Formation_idDemande_Formation` int(11) NOT NULL,
  `Demande_Formation_Etudiant_idEtudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ecole_has_formation`
--

CREATE TABLE IF NOT EXISTS `ecole_has_formation` (
  `Ecole_idEcole` int(11) NOT NULL,
  `Formation_idFormation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
`idEntreprise` int(11) NOT NULL,
  `nomese` varchar(45) DEFAULT NULL,
  `NINEA` varchar(45) DEFAULT NULL,
  `emplacement` varchar(45) DEFAULT NULL,
  `motdepasse` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`idEntreprise`, `nomese`, `NINEA`, `emplacement`, `motdepasse`, `email`) VALUES
(1, 'Sonatel', '1236', 'Dakar', 'b52d5a158c', 'sonatel@senegal.sn'),
(2, 'SGBS', '123616489', 'Mermoz', '3cc85f71f1', 'sgbsenegal@sgbs.org'),
(3, 'Sensoft', '9486154689', 'Dakar', '022aea8b4f', 'sensoft@senegal.sn'),
(6, 'Sonatel', '1236', 'Dakar', 'd9371fcb3c', 'sonatel@senegal.sn'),
(7, 'Sensoft', '12589451', 'Dakar', '643ffde25d', 'sensoft@senegal.sn'),
(8, 'Innov4Africa', '845312', 'sacre coeur', '6fbf5a58dc', 'innov4africa@gmail.com'),
(9, 'Orabant', '645365964', 'Dakar', '81dc9bdb52', 'orabank@gmail.com'),
(10, 'BGFI', '18451289451', 'Dakar', 'bgfi1', 'bgfi@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
`idEtudiant` int(11) NOT NULL,
  `nometu` varchar(45) DEFAULT NULL,
  `prenometu` varchar(45) DEFAULT NULL,
  `emailetu` varchar(45) DEFAULT NULL,
  `motdepasse` varchar(10) DEFAULT NULL,
  `datenaiss` date DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `nometu`, `prenometu`, `emailetu`, `motdepasse`, `datenaiss`, `username`) VALUES
(2, 'sene', 'ndia', 'sene@edacy.com', 'edacy', '0000-00-00', 'ndiate'),
(3, 'Seck', 'Mareme', 'maremeseck95@gmail.com', '123654', '2018-10-28', 'mareme05');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
`idFormation` int(11) NOT NULL,
  `nomformation` varchar(45) DEFAULT NULL,
  `dureeformation` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `nomformation`, `dureeformation`) VALUES
(1, 'Developpement Mobile', '9'),
(2, 'Data Science', '12'),
(3, 'Economie', '21'),
(4, 'comptabilitÃ© Gestion', '9'),
(5, 'Marketing Communication', '9');

-- --------------------------------------------------------

--
-- Structure de la table `formation_has_profil_recherche`
--

CREATE TABLE IF NOT EXISTS `formation_has_profil_recherche` (
  `Formation_idFormation` int(11) NOT NULL,
  `Profil_Recherche_idProfil_Recherche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offre_emploi`
--

CREATE TABLE IF NOT EXISTS `offre_emploi` (
`idOffre` int(11) NOT NULL,
  `nomOffre` varchar(100) NOT NULL,
  `typeContrat` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `idEntreprise` int(11) NOT NULL,
  `idProfil_Recherche` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `offre_emploi`
--

INSERT INTO `offre_emploi` (`idOffre`, `nomOffre`, `typeContrat`, `description`, `idEntreprise`, `idProfil_Recherche`) VALUES
(13, 'Developpeur Web', 'CDD', 'uuuu', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `profil_recherche`
--

CREATE TABLE IF NOT EXISTS `profil_recherche` (
`idProfil_Recherche` int(11) NOT NULL,
  `nom_profil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `profil_recherche`
--

INSERT INTO `profil_recherche` (`idProfil_Recherche`, `nom_profil`) VALUES
(1, 'Software Engineer'),
(2, 'Data Scientist'),
(3, 'comptable');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `demande_emploi`
--
ALTER TABLE `demande_emploi`
 ADD PRIMARY KEY (`idDemande`,`Entreprise_idEntreprise`), ADD KEY `fk_Demande_Entreprise1_idx` (`Entreprise_idEntreprise`);

--
-- Index pour la table `demande_formation`
--
ALTER TABLE `demande_formation`
 ADD PRIMARY KEY (`idDemande_Formation`,`Etudiant_idEtudiant`), ADD KEY `fk_Demande_Formation_Etudiant1_idx` (`Etudiant_idEtudiant`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
 ADD PRIMARY KEY (`idEcole`);

--
-- Index pour la table `ecole_has_demande_formation`
--
ALTER TABLE `ecole_has_demande_formation`
 ADD PRIMARY KEY (`Ecole_idEcole`,`Demande_Formation_idDemande_Formation`,`Demande_Formation_Etudiant_idEtudiant`), ADD KEY `fk_Ecole_has_Demande_Formation_Demande_Formation1_idx` (`Demande_Formation_idDemande_Formation`,`Demande_Formation_Etudiant_idEtudiant`), ADD KEY `fk_Ecole_has_Demande_Formation_Ecole1_idx` (`Ecole_idEcole`);

--
-- Index pour la table `ecole_has_formation`
--
ALTER TABLE `ecole_has_formation`
 ADD PRIMARY KEY (`Ecole_idEcole`,`Formation_idFormation`), ADD KEY `fk_Ecole_has_Formation_Formation1_idx` (`Formation_idFormation`), ADD KEY `fk_Ecole_has_Formation_Ecole1_idx` (`Ecole_idEcole`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
 ADD PRIMARY KEY (`idEntreprise`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
 ADD PRIMARY KEY (`idEtudiant`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
 ADD PRIMARY KEY (`idFormation`);

--
-- Index pour la table `formation_has_profil_recherche`
--
ALTER TABLE `formation_has_profil_recherche`
 ADD PRIMARY KEY (`Formation_idFormation`,`Profil_Recherche_idProfil_Recherche`), ADD KEY `fk_Formation_has_Profil_Recherche_Profil_Recherche1_idx` (`Profil_Recherche_idProfil_Recherche`), ADD KEY `fk_Formation_has_Profil_Recherche_Formation1_idx` (`Formation_idFormation`);

--
-- Index pour la table `offre_emploi`
--
ALTER TABLE `offre_emploi`
 ADD PRIMARY KEY (`idOffre`), ADD KEY `idEntreprise` (`idEntreprise`), ADD KEY `idProfil_Recherche` (`idProfil_Recherche`);

--
-- Index pour la table `profil_recherche`
--
ALTER TABLE `profil_recherche`
 ADD PRIMARY KEY (`idProfil_Recherche`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `demande_emploi`
--
ALTER TABLE `demande_emploi`
MODIFY `idDemande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `demande_formation`
--
ALTER TABLE `demande_formation`
MODIFY `idDemande_Formation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
MODIFY `idEcole` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
MODIFY `idEntreprise` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
MODIFY `idEtudiant` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
MODIFY `idFormation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `offre_emploi`
--
ALTER TABLE `offre_emploi`
MODIFY `idOffre` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `profil_recherche`
--
ALTER TABLE `profil_recherche`
MODIFY `idProfil_Recherche` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `demande_emploi`
--
ALTER TABLE `demande_emploi`
ADD CONSTRAINT `fk_Demande_Entreprise1` FOREIGN KEY (`Entreprise_idEntreprise`) REFERENCES `entreprise` (`idEntreprise`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `demande_formation`
--
ALTER TABLE `demande_formation`
ADD CONSTRAINT `fk_Demande_Formation_Etudiant1` FOREIGN KEY (`Etudiant_idEtudiant`) REFERENCES `etudiant` (`idEtudiant`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `ecole_has_demande_formation`
--
ALTER TABLE `ecole_has_demande_formation`
ADD CONSTRAINT `fk_Ecole_has_Demande_Formation_Demande_Formation1` FOREIGN KEY (`Demande_Formation_idDemande_Formation`, `Demande_Formation_Etudiant_idEtudiant`) REFERENCES `demande_formation` (`idDemande_Formation`, `Etudiant_idEtudiant`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Ecole_has_Demande_Formation_Ecole1` FOREIGN KEY (`Ecole_idEcole`) REFERENCES `ecole` (`idEcole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `ecole_has_formation`
--
ALTER TABLE `ecole_has_formation`
ADD CONSTRAINT `fk_Ecole_has_Formation_Ecole1` FOREIGN KEY (`Ecole_idEcole`) REFERENCES `ecole` (`idEcole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Ecole_has_Formation_Formation1` FOREIGN KEY (`Formation_idFormation`) REFERENCES `formation` (`idFormation`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `formation_has_profil_recherche`
--
ALTER TABLE `formation_has_profil_recherche`
ADD CONSTRAINT `fk_Formation_has_Profil_Recherche_Formation1` FOREIGN KEY (`Formation_idFormation`) REFERENCES `formation` (`idFormation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Formation_has_Profil_Recherche_Profil_Recherche1` FOREIGN KEY (`Profil_Recherche_idProfil_Recherche`) REFERENCES `profil_recherche` (`idProfil_Recherche`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `offre_emploi`
--
ALTER TABLE `offre_emploi`
ADD CONSTRAINT `offre_emploi_ibfk_1` FOREIGN KEY (`idProfil_Recherche`) REFERENCES `profil_recherche` (`idProfil_Recherche`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `offre_emploi_ibfk_2` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`idEntreprise`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
