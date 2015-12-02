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
    Date_creation DATE,
    Date_modification DATE
);
CREATE TABLE Categorie_Produit
(
    ID_categorie TINYINT,
    ID_produit INT
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

INSERT INTO User (Nom,Prenom,Adresse,Mail,Pass,Rôle,Date_creation,Date_modification) VALUES ('Admin', 'Test', 'secret 94600 choisy le roi', 'Admin@Test', '28d1cf1e2ea46f182a1ac706a30967ef523bc4106c6971e7935862875545b432', '1', '2015-05-30', '2015-06-01');
INSERT INTO User (Nom,Prenom,Adresse,Mail,Pass,Rôle,Date_creation,Date_modification) VALUES ('Modo', 'Test', 'secret 94600 choisy le roi', 'Modo@Test', '28d1cf1e2ea46f182a1ac706a30967ef523bc4106c6971e7935862875545b432', '2', '2015-05-30', '2015-06-01');
INSERT INTO User (Nom,Prenom,Adresse,Mail,Pass,Rôle,Date_creation,Date_modification) VALUES ('User', 'Test', 'secret 94600 choisy le roi', 'User@Test', '28d1cf1e2ea46f182a1ac706a30967ef523bc4106c6971e7935862875545b432', '3', '2015-05-30', '2015-06-01');

INSERT INTO Produits (Libelle,Description,image, Prix,Nombres_produit,Date_creation,Date_modification) VALUES ('Torsades au petit épeautre Bio 250g - Lazzaretti', "Pâtes à base d'une variété de blé totalement perméable aux engrais et pesticides, 
              cultivée dans le sud de la Françe.", '../assets/pates.png', '5', '200', '2001-11-05', '2002-08-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Huile en Crème Corps L'Argan Bio - 175ml", "Enrichie en Huile de Tournesol nourrissante et en Cire d’Abeille protectrice, l’Huile en Crème restructure le film hydrolipidique des peaux sèches et déshydratées. La peau est nourrie, régénérée, protégée grâce à l’exceptionnelle concentration en acides gras (près de 25 % de la formule), elle retrouve un toucher velouté.", "../assets/b2.png",'15', '30', '2005-11-05', '2008-09-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ('Komodo Manteau Pea Coat Grey', 'Origine : Népal (issu du commerce équitable) Composition : 65% polyester recyclé et 35% laine', "../assets/manteaux.png", '75', '30', '2005-11-05', '2008-09-12');

INSERT INTO Categories (Libelle,Description,Date_creation,Date_modification) VALUES ('Venu de Chine', 'Produit chinoi', '2001-01-01', '2001-01-01');
INSERT INTO Categories (Libelle,Description,Date_creation,Date_modification) VALUES ('Venu du Japon', 'Produit Japonais', '2002-01-01', '2002-01-01');
INSERT INTO Categories (Libelle,Description,Date_creation,Date_modification) VALUES ('Venu de France', 'Produit Totalement Francais', '2008-01-01', '2008-01-01');

INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '1');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '1');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '2');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '3');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '4');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '5');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '6');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '7');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '8');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '9');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '10');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '11');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '12');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '13');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '14');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '15');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '16');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '17');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '18');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '19');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('1', '20');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '21');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '22');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '23');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '24');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '25');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '26');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '27');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('2', '28');

INSERT INTO Produit_User(ID_utilisateur, ID_produit) VALUES ('5', '19');
INSERT INTO Produit_User(ID_utilisateur, ID_produit) VALUES ('3', '20');
INSERT INTO Produit_User (ID_utilisateur, ID_produit) VALUES ('9', '1');