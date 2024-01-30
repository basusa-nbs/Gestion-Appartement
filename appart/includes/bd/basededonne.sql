-- creation de la base de donne pour la gestion des appartements
-- CREATE database if not EXISTS Apparts;

-- Creation des differentes tables
-- creation de la base de donne pour la gestion des appartements
-- CREATE database if not EXISTS Apparts;

-- Creation des differentes tables


CREATE TABLE if NOT EXISTS Categorie(
    idCategorie INT NOT NULL AUTO_INCREMENT,
    Categorie VARCHAR(50) NOT NULL,
    primary key(idCategorie)
);

CREATE TABLE if NOT EXISTS Types(
    idTypes INT NOT NULL AUTO_INCREMENT,
    Types VARCHAR(50) NOT NULL,
    descriptions TEXT NOT NULL,
    primary key(idTypes)
);

CREATE TABLE IF NOT EXISTS Pays(
    idPays INT NOT NULL AUTO_INCREMENT,
    codePays VARCHAR(10) NOT NULL,
    Pays VARCHAR(50) NOT NULL,
    primary key(idPays)
);

CREATE TABLE IF NOT EXISTS Ville(
    idVille INT NOT NULL AUTO_INCREMENT,
    Ville VARCHAR(10) NOT NULL,
    primary key(idVille)
);

CREATE TABLE IF NOT EXISTS Commune(
    idCommune INT NOT NULL AUTO_INCREMENT,
    idVille INT NOT NULL,
    Commune VARCHAR(50) NOT NULL,

    primary key(idCommune),
    unique index idVille (idVille, Commune),
    constraint idVille foreign key (idVille) references Ville(idVille) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE IF NOT EXISTS Quartier(
    idQuartier INT NOT NULL AUTO_INCREMENT,
    idCommune INT NOT NULL,
    Quartier VARCHAR(50) NOT NULL,

    primary key(idQuartier),
    unique index idCommune (idCommune, Quartier),
    constraint idCommune foreign key (idCommune) references Commune(idCommune) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE IF NOT EXISTS Avenue(
    idAvenue INT NOT NULL AUTO_INCREMENT,
    idQuartier INT NOT NULL,
    Avenue VARCHAR(50) NOT NULL,

    primary key(idAvenue),
    unique index idQuartier (idQuartier, Avenue),
    constraint idQuartier foreign key (idQuartier) references Quartier(idQuartier) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE if NOT EXISTS Tarif (
        idTarif INT NOT NULL AUTO_INCREMENT,
        code_tarif INT NOT NULL,
        prix_semhs INT NOT NULL,
        prix_semBs INT not NULL,
        primary key (idTarif),
        unique index (code_tarif)
);


CREATE TABLE if NOT EXISTS Proprietaire(
    idProprio INT NOT NULL AUTO_INCREMENT,
    Num INT NOT NULL,
    Nom VARCHAR(50) NOT NULL,
    Prenom VARCHAR(50) NOT NULL,
    idPays1 INT NOT NULL,
    idPays2 INT not NULL,
    NumeroTel1 INT(15) NOT NULL,
    NumeroTel2 INT(15) NOT NULL,
    Ville1 VARCHAR(50) NOT NULL,
    Ville2 VARCHAR(50) NOT NULL,
    Commune1 VARCHAR(50) NOT NULL,
    Commune2 VARCHAR(50) NOT NULL,
    Quartier1 VARCHAR(50) NOT NULL,
    Quartier2 VARCHAR(50) NOT NULL,
    Avenue1 VARCHAR(50) NOT NULL,
    Avenue2 VARCHAR(50) NOT NULL,
    Numero1 INT NOT NULL,
    Numero2 INT NOT NULL,
    Cacumule INT,
    codePostal INT NOT NULL,
    mail varchar(50) NOT NULL,
    photo VARCHAR(50) NOT NULL,


    -- creation des index
    primary key(idProprio),
    unique index(Num),
    index idPays1(idPays1),
    index idPays2(idPays2),

    constraint idPays1 foreign key (idPays1) references Pays(idPays) ON UPDATE CASCADE ON DELETE RESTRICT,
    constraint idPays2 foreign key (idPays2) references Pays(idPays) ON UPDATE CASCADE ON DELETE RESTRICT

);


CREATE TABLE if NOT EXISTS Appartements (
    idApparts INT NOT NULL AUTO_INCREMENT,
    NumLocation INT NOT NULL,
    NbrePersonnes INT NOT NULL,
    Ville VARCHAR(50) NOT NULL,
    Quartier VARCHAR(50) NOT NULL,
    Avenue VARCHAR(50) NOT NULL,
    idProprio INT NOT NULL,
    idTarif INT NOT NULL,
    Categorie INT NOT NULL,
    Types INT NOT NULL,

    -- creation des index
    primary key (idApparts),
    unique index (NumLocation),
    index idProprio (idProprio),
    index idTarif (idTarif),
    index Categorie(Categorie),
    index Types(Types),

    constraint idProprio foreign key (idProprio) references Proprietaire(idProprio) ON UPDATE CASCADE ON DELETE RESTRICT,
    constraint idTarif foreign key (idTarif) references Tarif(idTarif) ON UPDATE CASCADE ON DELETE RESTRICT,
    constraint Categorie foreign key (Categorie) references Categorie(idCategorie) ON UPDATE CASCADE ON DELETE CASCADE,
    constraint Types foreign key (Types) references Types(idTypes) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE if NOT EXISTS Photos(
    idPhotos INT NOT NULL AUTO_INCREMENT,
    photoApparts INT NOT NULL,
    photos VARCHAR(50) NOT NULL,

    primary key(idPhotos),
    unique index photoApparts(photoApparts, photos),
    constraint photoApparts foreign key (photoApparts) references Appartements(idApparts) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE if NOT EXISTS Locataire(
    idLocataire INT NOT NULL AUTO_INCREMENT,
    Num INT NOT NULL,
    Nom VARCHAR(50) NOT NULL,
    Prenom VARCHAR(50) NOT NULL,
    idPays1 INT NOT NULL,
    idPays2 INT not NULL,
    NumeroTel1 INT(15) NOT NULL,
    NumeroTel2 INT(15) NOT NULL,
    Ville1 VARCHAR(50) NOT NULL,
    Ville2 VARCHAR(50) NOT NULL,
    Commune1 VARCHAR(50) NOT NULL,
    Commune2 VARCHAR(50) NOT NULL,
    Quartier1 VARCHAR(50) NOT NULL,
    Quartier2 VARCHAR(50) NOT NULL,
    Avenue1 VARCHAR(50) NOT NULL,
    Avenue2 VARCHAR(50) NOT NULL,
    Numero1 INT NOT NULL,
    Numero2 INT NOT NULL,
    codePostal INT NOT NULL,
    mail varchar(50) NOT NULL,
    photo VARCHAR(50) NOT NULL,


    -- creation des index
    primary key(idLocataire),
    unique index(Num),
    index idpays1(idpays1),
    index idpays2(idpays2),

    constraint idpays1loc foreign key (idpays1) references Pays(idPays) ON UPDATE CASCADE ON DELETE RESTRICT,
    constraint idpays2loc foreign key (idpays2) references Pays(idPays) ON UPDATE CASCADE ON DELETE RESTRICT

);

CREATE TABLE IF NOT EXISTS Contrat(
    idContrat INT NOT NULL AUTO_INCREMENT,
    Num INT NOT NULL,
    Etat VARCHAR(50) NOT NULL,
    DateCreation DATE NOT NULL,
    DateDebut DATE NOT NULL,
    DateFin DATE NOT NULL,
    idApparts INT NOT NULL,
    idLocataire INT NOT NULL,

    primary key(idContrat),
    unique index Num(Num),
    index idApparts(idApparts),
    index idLocataire(idLocataire),
    constraint idApparts foreign key (idApparts) references Appartements(idApparts) ON UPDATE NO ACTION ON DELETE NO ACTION,
    constraint idLocataire foreign key (idLocataire) references Locataire(idLocataire) ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE IF NOT EXISTS identifiants(
    id INT NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    passwords varchar(255) NOT NULL,
    photo varchar(255) NOT NULL,

    primary key(id)
);
