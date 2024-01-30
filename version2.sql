-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour apparts
CREATE DATABASE IF NOT EXISTS `apparts` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `apparts`;

-- Listage de la structure de table apparts. appartements
CREATE TABLE IF NOT EXISTS `appartements` (
  `idApparts` int NOT NULL AUTO_INCREMENT,
  `NumLocation` int NOT NULL,
  `NbrePersonnes` int NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Quartier` varchar(50) NOT NULL,
  `Avenue` varchar(50) NOT NULL,
  `idProprio` int NOT NULL,
  `idTarif` int NOT NULL,
  `Categorie` int NOT NULL,
  `Types` int NOT NULL,
  PRIMARY KEY (`idApparts`),
  UNIQUE KEY `NumLocation` (`NumLocation`),
  KEY `idProprio` (`idProprio`),
  KEY `idTarif` (`idTarif`),
  KEY `Categorie` (`Categorie`),
  KEY `Types` (`Types`),
  CONSTRAINT `Categorie` FOREIGN KEY (`Categorie`) REFERENCES `categorie` (`idCategorie`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idProprio` FOREIGN KEY (`idProprio`) REFERENCES `proprietaire` (`idProprio`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `idTarif` FOREIGN KEY (`idTarif`) REFERENCES `tarif` (`idTarif`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `Types` FOREIGN KEY (`Types`) REFERENCES `types` (`idTypes`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. avenue
CREATE TABLE IF NOT EXISTS `avenue` (
  `idAvenue` int NOT NULL AUTO_INCREMENT,
  `idQuartier` int NOT NULL,
  `Avenue` varchar(50) NOT NULL,
  PRIMARY KEY (`idAvenue`),
  UNIQUE KEY `idQuartier` (`idQuartier`,`Avenue`),
  CONSTRAINT `idQuartier` FOREIGN KEY (`idQuartier`) REFERENCES `quartier` (`idQuartier`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. commune
CREATE TABLE IF NOT EXISTS `commune` (
  `idCommune` int NOT NULL AUTO_INCREMENT,
  `idVille` int NOT NULL,
  `Commune` varchar(50) NOT NULL,
  PRIMARY KEY (`idCommune`),
  UNIQUE KEY `idVille` (`idVille`,`Commune`),
  CONSTRAINT `idVille` FOREIGN KEY (`idVille`) REFERENCES `ville` (`idVille`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. contrat
CREATE TABLE IF NOT EXISTS `contrat` (
  `idContrat` int NOT NULL AUTO_INCREMENT,
  `Num` int NOT NULL,
  `Etat` varchar(50) NOT NULL,
  `DateCreation` date NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `idApparts` int NOT NULL,
  `idLocataire` int NOT NULL,
  PRIMARY KEY (`idContrat`),
  UNIQUE KEY `Num` (`Num`),
  KEY `idApparts` (`idApparts`),
  KEY `idLocataire` (`idLocataire`),
  CONSTRAINT `idApparts` FOREIGN KEY (`idApparts`) REFERENCES `appartements` (`idApparts`),
  CONSTRAINT `idLocataire` FOREIGN KEY (`idLocataire`) REFERENCES `locataire` (`idLocataire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. identifiants
CREATE TABLE IF NOT EXISTS `identifiants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. locataire
CREATE TABLE IF NOT EXISTS `locataire` (
  `idLocataire` int NOT NULL AUTO_INCREMENT,
  `NumLoc` int NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `idPays1Loc` int NOT NULL,
  `idPays2Loc` int NOT NULL,
  `NumeroTel1` int NOT NULL,
  `NumeroTel2` int NOT NULL,
  `VilleLoc1` varchar(50) NOT NULL,
  `VilleLoc2` varchar(50) NOT NULL,
  `Commune1Loc` varchar(50) NOT NULL,
  `Commune2Loc` varchar(50) NOT NULL,
  `Quartier1Loc` varchar(50) NOT NULL,
  `Quartier2Loc` varchar(50) NOT NULL,
  `Avenue1Loc` varchar(50) NOT NULL,
  `Avenue2Loc` varchar(50) NOT NULL,
  `Numero1` int NOT NULL,
  `Numero2` int NOT NULL,
  `codePostal` int NOT NULL,
  `mail` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`idLocataire`),
  UNIQUE KEY `NumLoc` (`NumLoc`),
  KEY `idPays1Loc` (`idPays1Loc`),
  KEY `idPays2Loc` (`idPays2Loc`),
  CONSTRAINT `idPays1Loc` FOREIGN KEY (`idPays1Loc`) REFERENCES `pays` (`idPays`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `idPays2Loc` FOREIGN KEY (`idPays2Loc`) REFERENCES `pays` (`idPays`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. pays
CREATE TABLE IF NOT EXISTS `pays` (
  `idPays` int NOT NULL AUTO_INCREMENT,
  `codePays` varchar(10) NOT NULL,
  `Pays` varchar(50) NOT NULL,
  PRIMARY KEY (`idPays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. photos
CREATE TABLE IF NOT EXISTS `photos` (
  `idPhotos` int NOT NULL AUTO_INCREMENT,
  `photoApparts` int NOT NULL,
  `photos` varchar(50) NOT NULL,
  PRIMARY KEY (`idPhotos`),
  UNIQUE KEY `photoApparts` (`photoApparts`,`photos`),
  CONSTRAINT `photoApparts` FOREIGN KEY (`photoApparts`) REFERENCES `appartements` (`idApparts`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. proprietaire
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `idProprio` int NOT NULL AUTO_INCREMENT,
  `Num` int NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `idPays1` int NOT NULL,
  `idPays2` int NOT NULL,
  `NumeroTel1` int NOT NULL,
  `NumeroTel2` int NOT NULL,
  `Ville1` varchar(50) NOT NULL,
  `Ville2` varchar(50) NOT NULL,
  `Commune1` varchar(50) NOT NULL,
  `Commune2` varchar(50) NOT NULL,
  `Quartier1` varchar(50) NOT NULL,
  `Quartier2` varchar(50) NOT NULL,
  `Avenue1` varchar(50) NOT NULL,
  `Avenue2` varchar(50) NOT NULL,
  `Numero1` int NOT NULL,
  `Numero2` int NOT NULL,
  `Cacumule` int DEFAULT NULL,
  `codePostal` int NOT NULL,
  `mail` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`idProprio`),
  UNIQUE KEY `Num` (`Num`),
  KEY `idPays1` (`idPays1`),
  KEY `idPays2` (`idPays2`),
  CONSTRAINT `idPays1` FOREIGN KEY (`idPays1`) REFERENCES `pays` (`idPays`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `idPays2` FOREIGN KEY (`idPays2`) REFERENCES `pays` (`idPays`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. quartier
CREATE TABLE IF NOT EXISTS `quartier` (
  `idQuartier` int NOT NULL AUTO_INCREMENT,
  `idCommune` int NOT NULL,
  `Quartier` varchar(50) NOT NULL,
  PRIMARY KEY (`idQuartier`),
  UNIQUE KEY `idCommune` (`idCommune`,`Quartier`),
  CONSTRAINT `idCommune` FOREIGN KEY (`idCommune`) REFERENCES `commune` (`idCommune`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. tarif
CREATE TABLE IF NOT EXISTS `tarif` (
  `idTarif` int NOT NULL AUTO_INCREMENT,
  `code_tarif` int NOT NULL,
  `prix_semhs` int NOT NULL,
  `prix_semBs` int NOT NULL,
  PRIMARY KEY (`idTarif`),
  UNIQUE KEY `code_tarif` (`code_tarif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. types
CREATE TABLE IF NOT EXISTS `types` (
  `idTypes` int NOT NULL AUTO_INCREMENT,
  `Types` varchar(50) NOT NULL,
  `descriptions` text NOT NULL,
  PRIMARY KEY (`idTypes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table apparts. ville
CREATE TABLE IF NOT EXISTS `ville` (
  `idVille` int NOT NULL AUTO_INCREMENT,
  `Ville` varchar(10) NOT NULL,
  PRIMARY KEY (`idVille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Les données exportées n'étaient pas sélectionnées.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
