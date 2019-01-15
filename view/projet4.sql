DROP DATABASE IF EXISTS jeanForteroche;
CREATE DATABASE jeanForteroche;
USE jeanForteroche;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Structure de la table `ecrivain`
--
CREATE TABLE `ecrivain` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Structure de la table `billet`
--
CREATE TABLE `billet` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `postedDate` datetime NOT NULL,
  `slug` varchar(255) NOT NULL,
  `idEcrivain` INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idEcrivain) REFERENCES ecrivain(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `commentaire`
--
CREATE TABLE `commentaire` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `postedDate` datetime NOT NULL,
  `signaled` boolean NOT NULL,
  `moderate` boolean NOT NULL,
  `idBillet` INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idBillet) REFERENCES billet(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ecrivain` (`mp`, `email`) VALUES ('pass', 'jfr@yopmail.com');