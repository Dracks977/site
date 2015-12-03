# etape 2 encodage utf8 encodage universel, un des plus utilise, fonctione parfetement bien avec les langue latine (moins efficace qu un latin-1, mais plus universel)
CREATE DATABASE site_vanhem_n CHARACTER SET utf8 COLLATE utf8_general_ci;
# etape 3 VARCHAR = valeur grande et fluctuante, CHAR = petit valeur peut fluctuante ou fixe.
USE site_vanhem_n;
CREATE TABLE Rôle
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Libelle VARCHAR(255),
    Description VARCHAR(510),
    Date_creation DATE,
    Date_modification DATE
);
CREATE TABLE User
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nom CHAR(32),
    Prenom CHAR(32),
    Adresse VARCHAR(500),
    Mail varchar(255),
    Pass varchar(1000),
	Question varchar(1000),
    Rôle INT DEFAULT 3,
    Date_creation DATE,
    Date_modification DATE,
    FOREIGN KEY (Rôle) REFERENCES Rôle(ID)
);
CREATE TABLE Produits
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Libelle VARCHAR(255),
    Description VARCHAR(510),
    image varchar(510),
    Prix FLOAT,
    Nombres_produit INT,
    Date_creation DATE,
    Date_modification DATE
);
CREATE TABLE Categories
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Libelle VARCHAR(255),
    Description VARCHAR(510),
	image varchar(510),
    Date_creation DATE,
    Date_modification DATE
);
CREATE TABLE Categorie_Produit
(
    ID_categorie TINYINT,
    ID_produit INT
);
CREATE TABLE Commentaire_Produit
(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ID_produit INT,
    Nom CHAR(32),
    Prenom CHAR(32),
    Description VARCHAR(510)
);
CREATE TABLE Produit_User
(
    ID_produit INT,
    ID_utilisateur INT
);

# etape 4

INSERT INTO Rôle (Libelle,Description,Date_creation,Date_modification) VALUES ('ADMIN', 'full power', '2001-11-05', '2001-08-12');
INSERT INTO Rôle (Libelle,Description,Date_creation,Date_modification) VALUES ('MODO', 'less power', '2001-12-15', '2005-10-01');
INSERT INTO Rôle (Libelle,Description,Date_creation,Date_modification) VALUES ('USER', 'just user', '2001-01-01', '2001-01-01');

INSERT INTO User (Nom,Prenom,Adresse,Mail,Pass,Question,Rôle,Date_creation,Date_modification) VALUES ('Admin', 'Test', 'secret 94600 choisy le roi', 'Admin@Test', '28d1cf1e2ea46f182a1ac706a30967ef523bc4106c6971e7935862875545b432', 'chat','1', '2015-05-30', '2015-06-01');
INSERT INTO User (Nom,Prenom,Adresse,Mail,Pass,Question,Rôle,Date_creation,Date_modification) VALUES ('Modo', 'Test', 'secret 94600 choisy le roi', 'Modo@Test', '28d1cf1e2ea46f182a1ac706a30967ef523bc4106c6971e7935862875545b432', 'chien', '2', '2015-05-30', '2015-06-01');
INSERT INTO User (Nom,Prenom,Adresse,Mail,Pass,Question,Rôle,Date_creation,Date_modification) VALUES ('User', 'Test', 'secret 94600 choisy le roi', 'User@Test', '28d1cf1e2ea46f182a1ac706a30967ef523bc4106c6971e7935862875545b432', 'peliquant', '3', '2015-05-30', '2015-06-01');

INSERT INTO Produits (Libelle,Description,image, Prix,Nombres_produit,Date_creation,Date_modification) VALUES ('Torsades au petit épeautre Bio 250g - Lazzaretti', "Pâtes à base d'une variété de blé totalement perméable aux engrais et pesticides, 
              cultivée dans le sud de la Françe.", '../assets/pates.png', '5', '200', '2001-11-05', '2002-08-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Huile en Crème Corps L'Argan Bio - 175ml", "Enrichie en Huile de Tournesol nourrissante et en Cire d’Abeille protectrice, l’Huile en Crème restructure le film hydrolipidique des peaux sèches et déshydratées. La peau est nourrie, régénérée, protégée grâce à l’exceptionnelle concentration en acides gras (près de 25 % de la formule), elle retrouve un toucher velouté.", "../assets/b2.png",'15', '30', '2005-11-05', '2008-09-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ('Komodo Manteau Pea Coat Grey', 'Origine : Népal (issu du commerce équitable) Composition : 65% polyester recyclé et 35% laine', "../assets/manteaux.png", '75', '30', '2005-11-05', '2008-09-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Café en Grains Pure Origine d'Ethiopie", 'Ce grand arabica nous vient d’Ethiopie, terre natale du café. Cultivé entre 1770 et 2200 mètres d’altitude de manière traditionnelle, ce café équilibré se caractérise par de puissants arômes et une pointe cacaotée.', "../assets/caf.png", '8.66', '30', '2005-11-05', '2008-09-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Lanterne Fnar", "Cette magnifique lanterne typiquement marocaine éclairera votre interieur avec la douceur d'un soleil couchant", "../assets/lanterne.png", '43', '30', '2005-11-05', '2008-09-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Bracelet Ethnique Manchette", "Ce bracelet faits main au Kenya parera avec classe votre beauté.", "../assets/bracelet.png", '27', '30', '2005-11-05', '2008-09-12');

#cat for index
INSERT INTO Categories (Libelle,Date_creation,Date_modification) VALUES ('Nouveauté :',NOW(), NOW());
INSERT INTO Categories (Libelle,Date_creation,Date_modification) VALUES ('Top des ventes :',NOW(), NOW());
#categorie for cat.php
INSERT INTO Categories (Libelle,Description, image,Date_creation,Date_modification) VALUES ('Alimentation', 'Des produits bio et issus du commerce équitable, venant du monde entier!', "../assets/pates.png",NOW(), NOW());
INSERT INTO Categories (Libelle,Description, image,Date_creation,Date_modification) VALUES ('Thés et Cafés', "Des thés et cafés de qualité superieur, cultivés dans la tradition de leur pays d'origine", "../assets/cacao.png",NOW(), NOW());
INSERT INTO Categories (Libelle,Description, image,Date_creation,Date_modification) VALUES ('Produits de beauté', "Parce que la beauté n'implique pas forcément des molécules de synthèse et l'assassinat brutal d'animaux. 
             (oui ce site est aussi engagé) Découvrez donc cette gamme de produits naturels et bio venant du monde entier!", "../assets/creme.png",NOW(), NOW());
INSERT INTO Categories (Libelle,Description, image,Date_creation,Date_modification) VALUES ('Vêtements', 'Vêtements des quatre coins du monde, traditionels ou en coton bio. ', "../assets/lanterne.png",NOW(), NOW());
INSERT INTO Categories (Libelle,Description, image,Date_creation,Date_modification) VALUES ('Maison', 'Objets artisanaux pour le confort et la déco.', "../assets/encens.png",NOW(), NOW());
INSERT INTO Categories (Libelle,Description, image,Date_creation,Date_modification) VALUES ('Bijoux', 'Bijoux faits main, pour sublimer votre beauté.', "../assets/bijoux.png",NOW(), NOW());

INSERT INTO Commentaire_Produit (ID_produit,Nom,Prenom,Description) VALUES ('1', 'Jawad', 'paul', 'Super, merci !');
INSERT INTO Commentaire_Produit (ID_produit,Nom,Prenom,Description) VALUES ('3', 'Copilard', 'Julien', "pas ouf :(");

#new
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '1');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '2');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '3');
#top
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '5');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '4');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '6');



#a faire

INSERT INTO Produit_User(ID_utilisateur, ID_produit) VALUES ('5', '19');
INSERT INTO Produit_User(ID_utilisateur, ID_produit) VALUES ('3', '20');
INSERT INTO Produit_User (ID_utilisateur, ID_produit) VALUES ('9', '1');