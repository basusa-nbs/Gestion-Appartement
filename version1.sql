-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `Lesappartements`; 
USE `Lesappartements`;

CREATE TABLE IF NOT EXISTS `tarif`(
  `idTarif` int NOT NULL AUTO_INCREMENT,
  `code_tarif` int NOT NULL,
  `prix_semhs` int NOT NULL,
  `prix_semBs` int NOT NULL,
  PRIMARY KEY (`idTarif`),
  UNIQUE KEY `code_tarif` (`code_tarif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS `Locataire` (
  `idLocataire` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `codePostal` int NOT NULL,
  `mail` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`idLocataire`),
  UNIQUE KEY `identifiant` (`Nom`, `Prenom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS `Proprietaire` (
  `idProprietaire` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `codePostal` int NOT NULL,
  `mail` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`idProprietaire`),
  UNIQUE KEY `identifiant` (`Nom`, `Prenom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE IF NOT EXISTS `NumeroTelProprietaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idProprietaire` int NOT NULL,
  `codePays` varchar(10) NOT NULL,
  `numero` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProprietaire` (`idProprietaire`),
  CONSTRAINT `idProprietaire` FOREIGN KEY (`idProprietaire`) REFERENCES `Proprietaire` (`idProprietaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE IF NOT EXISTS `NumeroTelLocataire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idLocataire` int NOT NULL,
  `codePays` varchar(10) NOT NULL,
  `numero` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idLocataire` (`idLocataire`),
  CONSTRAINT `idLocataire` FOREIGN KEY (`idLocataire`) REFERENCES `Locataire` (`idLocataire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE IF NOT EXISTS `AdressProprietaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adProprietaire` int NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Commune` varchar(50) NOT NULL,
  `Quartier` varchar(50) NOT NULL,
  `Avenue` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `adProprietaire` (`adProprietaire`),
  CONSTRAINT `adProprietaire` FOREIGN KEY (`adProprietaire`) REFERENCES `Proprietaire` (`idProprietaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE IF NOT EXISTS `AdressLocataire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adLocataire` int NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Commune` varchar(50) NOT NULL,
  `Quartier` varchar(50) NOT NULL,
  `Avenue` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `adLocataire` (`adLocataire`),
  CONSTRAINT `adLocataire` FOREIGN KEY (`adLocataire`) REFERENCES `Locataire` (`idLocataire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS `appartements` (
  `idApparts` int NOT NULL AUTO_INCREMENT,
  `NbrePersonnes` int NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Commune` varchar(50) NOT NULL,
  `Quartier` varchar(50) NOT NULL,
  `Avenue` varchar(50) NOT NULL,
  `numeroMaison` int NOT NULL,
  `idProprio` int NOT NULL,
  `idTarif` int NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Types` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`idApparts`),
  KEY `idProprio` (`idProprio`),
  KEY `idTarif` (`idTarif`),
  CONSTRAINT `idProprio` FOREIGN KEY (`idProprio`) REFERENCES `proprietaire` (`idProprietaire`),
  CONSTRAINT `idTarif` FOREIGN KEY (`idTarif`) REFERENCES `tarif` (`idTarif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE IF NOT EXISTS `contrat` (
  `idContrat` int NOT NULL AUTO_INCREMENT,
  `Etat` varchar(50) NOT NULL,
  `DateCreation` date NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `idApparts` int NOT NULL,
  `idLocataire` int NOT NULL,
  PRIMARY KEY (`idContrat`),
  KEY `idApparts` (`idApparts`),
  KEY `idContrat` (`idContrat`),
  CONSTRAINT `idApparts` FOREIGN KEY (`idApparts`) REFERENCES `appartements` (`idApparts`),
  CONSTRAINT `idContrat` FOREIGN KEY (`idContrat`) REFERENCES `contrat` (`idContrat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- ------------------------------------------------------------------------
