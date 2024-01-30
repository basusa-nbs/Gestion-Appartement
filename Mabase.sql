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
  `NumLocation` int DEFAULT NULL,
  `NbrePersonnes` int NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `commune` varchar(50) NOT NULL,
  `Quartier` varchar(50) NOT NULL,
  `Avenue` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `idProprio` int NOT NULL,
  `idTarif` int NOT NULL,
  `Categorie` int NOT NULL,
  `Types` int NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`idApparts`),
  UNIQUE KEY `NumLocation` (`NumLocation`),
  KEY `idProprio` (`idProprio`),
  KEY `idTarif` (`idTarif`),
  KEY `Categorie` (`Categorie`),
  KEY `Types` (`Types`),
  CONSTRAINT `Categorie` FOREIGN KEY (`Categorie`) REFERENCES `categorie` (`idCategorie`),
  CONSTRAINT `idProprio` FOREIGN KEY (`idProprio`) REFERENCES `proprietaire` (`idProprio`),
  CONSTRAINT `idTarif` FOREIGN KEY (`idTarif`) REFERENCES `tarif` (`idTarif`),
  CONSTRAINT `Types` FOREIGN KEY (`Types`) REFERENCES `types` (`idTypes`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.appartements : ~5 rows (environ)
INSERT INTO `appartements` (`idApparts`, `NumLocation`, `NbrePersonnes`, `Ville`, `commune`, `Quartier`, `Avenue`, `numero`, `idProprio`, `idTarif`, `Categorie`, `Types`, `photo`) VALUES
	(10, NULL, 5, 'goma', 'goma', 'himbi', 'walikale', '14', 17, 5, 3, 3, 'th (1).jpg'),
	(11, NULL, 4, 'goma', 'goma', 'keyshero', 'akale', '3', 18, 8, 3, 3, 'th (6).jpg'),
	(12, NULL, 6, 'ruthshuru', 'kiwanja', 'mabungo', 'ituri', '255', 16, 6, 4, 2, 'th (7).jpg'),
	(13, NULL, 7, 'goma', 'karisimbi', 'katoyi', 'idjwi', '6', 21, 8, 2, 2, 'th (10).jpg'),
	(14, NULL, 5, 'Butembo', 'bibo', 'kakale', 'kolwezi', '-1', 21, 8, 2, 2, 'th (8).jpg'),
	(15, NULL, 15, 'Goma', 'Goma', 'katoyi', 'idjwi', '52', 23, 10, 2, 2, 'th (6).jpg'),
	(16, NULL, 15, 'Goma', 'Goma', 'katoyi', 'idjwi', '12', 24, 18, 2, 3, 'th (7).jpg'),
	(17, NULL, 15, 'Goma', 'Goma', 'katoyi', 'idjwi', '16', 23, 15, 3, 3, 'th (8).jpg'),
	(18, NULL, 45, 'Goma', 'Goma', 'katoyi', 'idjwi', '46', 24, 15, 4, 4, 'th (7).jpg'),
	(19, NULL, 45, 'Goma', 'Goma', 'katoyi', 'idjwi', '46', 24, 15, 4, 4, 'th (7).jpg'),
	(20, NULL, 45, 'Goma', 'Goma', 'katoyi', 'idjwi', '46', 24, 15, 4, 4, 'th (7).jpg');

-- Listage de la structure de table apparts. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.categorie : ~5 rows (environ)
INSERT INTO `categorie` (`idCategorie`, `Categorie`) VALUES
	(1, 'appartement neuf'),
	(2, 'appartement ancien'),
	(3, 'appartment en copropriété'),
	(4, 'appartment meublé'),
	(5, 'appartment non meublé');

-- Listage de la structure de table apparts. contrat
CREATE TABLE IF NOT EXISTS `contrat` (
  `idContrat` int NOT NULL AUTO_INCREMENT,
  `Num` int DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.contrat : ~12 rows (environ)
INSERT INTO `contrat` (`idContrat`, `Num`, `Etat`, `DateCreation`, `DateDebut`, `DateFin`, `idApparts`, `idLocataire`) VALUES
	(1, NULL, 'signe', '2023-07-22', '2023-07-22', '2023-07-15', 14, 5),
	(2, NULL, 'encours', '2023-07-20', '2023-07-21', '2024-01-16', 14, 4),
	(3, NULL, 'signe', '2023-07-20', '2023-07-26', '2024-06-26', 14, 1),
	(4, NULL, 'resilie', '2023-07-21', '2023-07-21', '2023-07-21', 14, 5),
	(5, NULL, 'signe', '2023-07-21', '2023-07-21', '2023-11-21', 14, 3),
	(6, NULL, 'encours', '2023-07-27', '2023-07-21', '2022-12-12', 14, 5),
	(7, NULL, 'encours', '2023-07-21', '2023-07-21', '2023-07-21', 14, 5),
	(8, NULL, 'resilie', '2023-07-23', '2023-07-29', '2024-07-29', 14, 5),
	(9, NULL, 'resilie', '2023-07-24', '2023-07-14', '2023-11-23', 10, 1),
	(10, NULL, 'resilie', '2023-07-24', '2023-07-14', '2023-11-23', 14, 5),
	(11, NULL, 'resilie', '2023-07-29', '2023-07-14', '2023-11-23', 10, 1),
	(12, NULL, 'resilie', '2023-07-23', '2023-07-23', '2024-02-23', 10, 2),
	(13, NULL, 'resilie', '2023-07-26', '2023-07-26', '2023-07-26', 14, 4),
	(14, NULL, 'encours', '2023-08-16', '2023-08-09', '2023-08-30', 11, 4),
	(15, NULL, 'signe', '2023-08-02', '2023-08-08', '2023-08-29', 15, 10);

-- Listage de la structure de table apparts. equipements
CREATE TABLE IF NOT EXISTS `equipements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Equipements` varchar(50) NOT NULL,
  `idAppartement` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAppartement` (`idAppartement`),
  CONSTRAINT `idAppartement` FOREIGN KEY (`idAppartement`) REFERENCES `appartements` (`idApparts`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.equipements : ~0 rows (environ)
INSERT INTO `equipements` (`id`, `Equipements`, `idAppartement`) VALUES
	(1, 'Chaise', 20),
	(2, 'table', 20);

-- Listage de la structure de table apparts. historique
CREATE TABLE IF NOT EXISTS `historique` (
  `id` int NOT NULL,
  `nomTable` varchar(50) NOT NULL,
  `operation` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='pour suivre toutes les actions effectuer sur la base de données\r\n';

-- Listage des données de la table apparts.historique : ~0 rows (environ)

-- Listage de la structure de table apparts. identifiants
CREATE TABLE IF NOT EXISTS `identifiants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.identifiants : ~1 rows (environ)
INSERT INTO `identifiants` (`id`, `email`, `password`, `photo`, `nom`) VALUES
	(1, 'seraphinndibwami@gmail.com', '$2y$10$Kqfiv9kekdYnwBFhZyj0QOhzOBBuLpA8W77pyPwQhc/fy1ZwalQNC', 'appart/includes/media/image/admin.png', 'seraphin ndibwami');

-- Listage de la structure de table apparts. locataire
CREATE TABLE IF NOT EXISTS `locataire` (
  `idLocataire` int NOT NULL AUTO_INCREMENT,
  `Num` int DEFAULT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `idPays1` varchar(50) NOT NULL DEFAULT '',
  `idPays2` varchar(50) NOT NULL DEFAULT '',
  `NumeroTel1` varchar(50) NOT NULL DEFAULT '',
  `NumeroTel2` varchar(50) NOT NULL DEFAULT '',
  `Ville1` varchar(50) NOT NULL,
  `Ville2` varchar(50) NOT NULL,
  `Commune1` varchar(50) NOT NULL,
  `Commune2` varchar(50) NOT NULL,
  `Quartier1` varchar(50) NOT NULL,
  `Quartier2` varchar(50) NOT NULL,
  `Avenue1` varchar(50) NOT NULL,
  `Avenue2` varchar(50) NOT NULL,
  `Numero1` varchar(50) NOT NULL DEFAULT '',
  `Numero2` varchar(50) NOT NULL DEFAULT '',
  `codePostal` varchar(50) NOT NULL DEFAULT '',
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idLocataire`),
  UNIQUE KEY `Num` (`Num`),
  KEY `idpays1` (`idPays1`),
  KEY `idpays2` (`idPays2`),
  CONSTRAINT `idpays1loc` FOREIGN KEY (`idPays1`) REFERENCES `pays` (`codePays`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `idpays2loc` FOREIGN KEY (`idPays2`) REFERENCES `pays` (`codePays`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.locataire : ~11 rows (environ)
INSERT INTO `locataire` (`idLocataire`, `Num`, `Nom`, `Prenom`, `idPays1`, `idPays2`, `NumeroTel1`, `NumeroTel2`, `Ville1`, `Ville2`, `Commune1`, `Commune2`, `Quartier1`, `Quartier2`, `Avenue1`, `Avenue2`, `Numero1`, `Numero2`, `codePostal`, `mail`, `photo`) VALUES
	(1, NULL, 'ndibwami', 'seraphin', '+242', '+243', '991642552', '850374002', 'goma', 'Goma', 'goma', 'Goma', 'idwi', 'katoy', 'mulere', 'kakale', '13', '3', '9767', 'seraphinndibwami@gmail.com', 'IMG_20220429_191739_608.JPG'),
	(2, NULL, 'ndibwami', 'seraphin', '+242', '+243', '991642552', '850374002', 'goma', 'Goma', 'goma', 'Goma', 'idwi', 'katoy', 'mulere', 'kakale', '13', '3', '9767', 'seraphinndibwami@gmail.com', 'IMG_20220202_122858.jpg'),
	(3, NULL, 'ndibwami', 'seraphin', '+242', '+243', '991642552', '850374002', 'goma', 'Goma', 'goma', 'Goma', 'idwi', 'katoy', 'mulere', 'kakale', '13', '3', '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(4, NULL, 'ndibwami', 'seraphin', '+242', '+243', '991642552', '850374002', 'goma', 'Goma', 'goma', 'Goma', 'idwi', 'katoy', 'mulere', 'kakale', '13', '3', '9767', 'seraphinndibwami@gmail.com', 'IMG_20220223_202123_096.jpg'),
	(5, NULL, 'Atawale ', 'sandrine', '+242', '+243', '991642552', '997848660', 'Goma', 'goma', 'Goma', 'goma', 'idwi', 'katoy', 'mulere', 'kakale', '13', '3', '7600', 'seraphinndibwami2002@gmail.com', 'IMG_20220429_192056_856.jpg'),
	(6, NULL, 'kalegamire', 'julien', '+243', '+242', '972345314', '991645205', 'lubumbashi', 'kisangani', 'lushi', 'boyole', 'ikwetu', 'boboto', 'godo', 'bitika', '13', '12', '96456', 'julienkalegamire@gmail.com', 'Capture d’écran 2023-06-03 132452.png'),
	(8, NULL, 'nelson', 'bigeti', '+243', '+244', '9845314301', '3419845589', 'Goma', 'Goma', 'Goma', 'Goma', 'garale', 'himbi', 'kokutu', 'idjwi', '24', '12', '9767', 'neslosnbiget@gmail.com', 'th (7).jpg'),
	(9, NULL, 'akale', 'kidjiti', '+243', '+243', '9845314301', '3419845589', 'Goma', 'Goma', 'Goma', 'Goma', 'garale', 'himbi', 'kokutu', 'idjwi', '24', '12', '9767', 'akale@gmail.com', 'th.jpg'),
	(10, NULL, 'akale', 'kidjiti', '+243', '+243', '9845314301', '3419845589', 'Goma', 'Goma', 'Goma', 'Goma', 'garale', 'himbi', 'kokutu', 'idjwi', '24', '12', '9767', 'akale@gmail.com', 'th.jpg'),
	(11, NULL, 'akale', 'kidjiti', '+243', '+243', '9845314301', '3419845589', 'Goma', 'Goma', 'Goma', 'Goma', 'garale', 'himbi', 'kokutu', 'idjwi', '24', 'ituri', '9767', 'akalekidjiti@gmail.com', 'th (7).jpg'),
	(12, NULL, 'kivutu', 'elie', '+243', '+243', '991188998', '974535425', 'Goma', 'Goma', 'Goma', 'Goma', 'idwji', 'kelozi', 'kafake', 'akato', '17', '14', '9767', 'elie@gmail.com', 'th.jpg');

-- Listage de la structure de table apparts. pays
CREATE TABLE IF NOT EXISTS `pays` (
  `idPays` int NOT NULL AUTO_INCREMENT,
  `codePays` varchar(10) NOT NULL,
  `Pays` varchar(50) NOT NULL,
  PRIMARY KEY (`idPays`),
  UNIQUE KEY `codePays` (`codePays`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.pays : ~74 rows (environ)
INSERT INTO `pays` (`idPays`, `codePays`, `Pays`) VALUES
	(1, '+93', 'Afghanistan'),
	(2, '+355', 'Albania'),
	(3, '+213', 'Algeria'),
	(4, '+376', 'Andorra'),
	(5, '+244', 'Angola'),
	(6, '+1268', 'Antigua & Barbuda'),
	(7, '+54', 'Argentina'),
	(8, '+374', 'Armenia'),
	(9, '+61', 'Australia'),
	(10, '+43', 'Austria'),
	(11, '+994', 'Azerbaijan'),
	(12, '+1242', 'Bahamas'),
	(13, '+973', 'Bahrain'),
	(14, '+880', 'Bangladesh'),
	(15, '+1246', 'Barbados'),
	(16, '+375', 'Belarus'),
	(17, '+32', 'Belgium'),
	(18, '+501', 'Belize'),
	(19, '+229', 'Benin'),
	(20, '+975', 'Bhutan'),
	(21, '+591', 'Plurinational State ofBolivia'),
	(22, '+387', 'Bosnia & Herzegovina'),
	(23, '+267', 'Botswana'),
	(24, '+55', 'Brazil'),
	(25, '+673', 'Brunei Darussalam'),
	(26, '+359', 'Bulgaria'),
	(27, '+226', 'Burkina Faso'),
	(28, '+257', 'Burundi'),
	(29, '+855', 'Cambodia'),
	(30, '+237', 'Cameroon'),
	(31, '+1', 'Canada'),
	(32, '+238', 'Cape Verde'),
	(33, '+236', 'Central African Republic'),
	(34, '+235', 'Chad'),
	(35, '+56', 'Chile'),
	(36, '+86', 'China'),
	(37, '+57', 'Colombia'),
	(38, '+269', 'Comoros'),
	(39, '+243', 'Democratic Republic of the Congo'),
	(40, '+242', 'Republic of theCongo'),
	(41, '+506', 'Costa Rica'),
	(42, '+225', 'Côte d\'Ivoire'),
	(43, '+385', 'Croatia'),
	(44, '+53', 'Cuba'),
	(45, '+357', 'Cyprus'),
	(46, '+420', 'Czech Republic'),
	(47, '+45', 'Denmark'),
	(48, '+253', 'Djibouti'),
	(49, '+1767', 'Dominica'),
	(50, '+1809', 'Dominican Republic'),
	(51, '+670', 'East Timor'),
	(52, '+593', 'Ecuador'),
	(53, '+20', 'Egypt'),
	(54, '+503', 'El Salvador'),
	(55, '+44', 'England'),
	(56, '+240', 'Equatorial Guinea'),
	(57, '+291', 'Eritrea'),
	(58, '+372', 'Estonia'),
	(59, '+268', 'Eswatini'),
	(60, '+251', 'Ethiopia'),
	(61, '+691', 'Federated States of Micronesia'),
	(62, '+679', 'Fiji'),
	(63, '+358', 'Finland'),
	(64, '+33', 'France'),
	(65, '+241', 'Gabon'),
	(66, '+220', 'Gambia'),
	(67, '+995', 'Georgia'),
	(68, '+49', 'Germany'),
	(69, '+233', 'Ghana'),
	(70, '+30', 'Greece'),
	(71, '+1473', 'Grenada'),
	(72, '+502', 'Guatemala'),
	(73, '+224', 'Guinea'),
	(74, '+245', 'GuineaBissau');

-- Listage de la structure de table apparts. proprietaire
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `idProprio` int NOT NULL AUTO_INCREMENT,
  `Num` int DEFAULT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `idPays1` varchar(50) NOT NULL DEFAULT '',
  `idPays2` varchar(50) NOT NULL DEFAULT '',
  `NumeroTel1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `NumeroTel2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Ville1` varchar(50) NOT NULL,
  `Ville2` varchar(50) NOT NULL,
  `Commune1` varchar(50) NOT NULL,
  `Commune2` varchar(50) NOT NULL,
  `Quartier1` varchar(50) NOT NULL,
  `Quartier2` varchar(50) NOT NULL,
  `Avenue1` varchar(50) NOT NULL,
  `Avenue2` varchar(50) NOT NULL,
  `Numero1` varchar(50) NOT NULL DEFAULT '',
  `Numero2` varchar(50) NOT NULL DEFAULT '',
  `Cacumule` int DEFAULT NULL,
  `codePostal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idProprio`),
  UNIQUE KEY `Num` (`Num`),
  KEY `idPays1` (`idPays1`),
  KEY `idPays2` (`idPays2`),
  CONSTRAINT `FK_proprietaire_pays` FOREIGN KEY (`idPays1`) REFERENCES `pays` (`codePays`),
  CONSTRAINT `FK_proprietaire_pays_2` FOREIGN KEY (`idPays2`) REFERENCES `pays` (`codePays`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.proprietaire : ~11 rows (environ)
INSERT INTO `proprietaire` (`idProprio`, `Num`, `Nom`, `Prenom`, `idPays1`, `idPays2`, `NumeroTel1`, `NumeroTel2`, `Ville1`, `Ville2`, `Commune1`, `Commune2`, `Quartier1`, `Quartier2`, `Avenue1`, `Avenue2`, `Numero1`, `Numero2`, `Cacumule`, `codePostal`, `mail`, `photo`) VALUES
	(8, NULL, 'ndibwami', 'seraphin', '+243', '+243', '972345314', '850381023', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', 'Capture d’écran 2023-06-03 132452.png'),
	(10, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(11, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(12, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(13, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(14, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(15, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(16, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(17, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(18, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(19, NULL, 'ndibwami', 'seraphin', '+243', '+243', '991645202', '850422545', 'goma', 'Goma', 'goma', 'Goma', 'Himbi', 'keyshero', 'walikale', 'bukama', '3', '13', NULL, '9767', 'seraphinndibwami@gmail.com', '307232036_111662368274613_5335259884318257180_n.jpg'),
	(20, NULL, 'bas', 'seraphin', '+242', '+243', '972345314', '850381023', 'goma', 'goma', 'goma', 'karisimbi', 'carmel', 'ndosho', 'bututu', 'mikeno', '52', '42', NULL, '7456', 'basusaseraphin@gmail.com', 'IMG_20220429_192056_8567.jpg'),
	(21, NULL, 'jonas', 'kulimushi', '+243', '+243', '972345314', '972345314', 'goma', 'Goma', 'goma', 'Goma', 'keyshero', 'kilijiwe', 'kizito', 'esperance', '14', '12', NULL, '9767', 'seraphinndibwami@gmail.com', 'Capture d’écran 2023-06-03 132452.png'),
	(22, NULL, 'Djuma', 'joyce', '+243', '+243', '991188998', '974535425', 'Goma', 'Goma', 'Goma', 'Goma', 'idwji', 'kelozi', 'kafake', 'akato', '17', '14', NULL, '9767', 'djumajoyce@gmail.com', 'background2.jpg'),
	(23, NULL, 'Neza', 'Esther', '+243', '+242', '972345310', '850371045', 'Goma', 'Goma', 'Goma', 'Goma', 'himbi', 'himbié', 'musée', 'miami', '13', '45', NULL, '9767', 'estherneza@gmail.com', 'th (9).jpg'),
	(24, NULL, 'basusa', 'alpha', '+93', '+213', '972345314', '850381223', 'Goma', 'Goma', 'Goma', 'Goma', 'keyshero', 'himbi', 'bukama', 'bukavu', '13', '12', NULL, '9767', 'seraphinndibwami@gmail.com', 'th (7).jpg');

-- Listage de la structure de table apparts. tarif
CREATE TABLE IF NOT EXISTS `tarif` (
  `idTarif` int NOT NULL AUTO_INCREMENT,
  `code_tarif` int NOT NULL,
  `prix_semhs` int NOT NULL,
  `prix_semBs` int NOT NULL,
  PRIMARY KEY (`idTarif`),
  UNIQUE KEY `code_tarif` (`code_tarif`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.tarif : ~8 rows (environ)
INSERT INTO `tarif` (`idTarif`, `code_tarif`, `prix_semhs`, `prix_semBs`) VALUES
	(1, 121434, 1310, 1500),
	(2, 231, 1410, 1500),
	(3, 23141, 1562, 2000),
	(4, 32141, 150, 200),
	(5, 6528, 250, 300),
	(6, 475, 80, 100),
	(7, 342, 150, 200),
	(8, 221, 80, 100),
	(9, 78, 458, 700),
	(10, 456, 4587, 5000),
	(11, 5668, 450, 600),
	(12, 1500, 15000, 15500),
	(13, 140, 15000, 15500),
	(15, 144, 15000, 15500),
	(18, 145, 15000, 15500),
	(19, 146, 15000, 15500);

-- Listage de la structure de table apparts. types
CREATE TABLE IF NOT EXISTS `types` (
  `idTypes` int NOT NULL AUTO_INCREMENT,
  `Types` varchar(50) NOT NULL,
  `descriptions` text NOT NULL,
  PRIMARY KEY (`idTypes`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table apparts.types : ~7 rows (environ)
INSERT INTO `types` (`idTypes`, `Types`, `descriptions`) VALUES
	(1, 'Studio', 'Un studio est un petit appartement d\'une seule pièce qui comprend une cuisine, une salle de bain et un espace de vie/chambre à coucher.'),
	(2, 'T1', 'Un T1 est un appartement d\'une pièce avec une cuisine séparée de la salle de vie.'),
	(3, 'T2', 'Un T2 est un appartement de deux pièces avec une cuisine et une salle de vie séparée.'),
	(4, 'T3', 'Un T3 est un appartement de trois pièces avec une cuisine, une salle de vie et une chambre à coucher séparée.'),
	(5, 'T4', 'Un T4 est un appartement de quatre pièces avec une cuisine, une salle de vie et deux chambres à coucher séparées.'),
	(6, 'T5', 'Un T5 est un appartement de cinq pièces avec une cuisine, une salle de vie et trois chambres à coucher séparées.'),
	(7, 'T6', 'Un T6 est un appartement de six pièces avec une cuisine, une salle de vie et quatre chambres à coucher séparées');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
