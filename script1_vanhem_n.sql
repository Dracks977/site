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
    Quant INT DEFAULT 1,
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


#prod index
INSERT INTO Produits (Libelle,Description,image, Prix,Nombres_produit,Date_creation,Date_modification) VALUES ('Torsades au petit épeautre Bio 250g - Lazzaretti', "Pâtes à base d'une variété de blé totalement perméable aux engrais et pesticides, 
              cultivée dans le sud de la Françe.", '../assets/pates.png', '5', '200', '2001-11-05', '2002-08-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Huile en Crème Corps L'Argan Bio - 175ml", "Enrichie en Huile de Tournesol nourrissante et en Cire d’Abeille protectrice, l’Huile en Crème restructure le film hydrolipidique des peaux sèches et déshydratées. La peau est nourrie, régénérée, protégée grâce à l’exceptionnelle concentration en acides gras (près de 25 % de la formule), elle retrouve un toucher velouté.", "../assets/b2.png",'15', '30', '2005-11-05', '2008-09-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ('Komodo Manteau Pea Coat Grey', 'Origine : Népal (issu du commerce équitable) Composition : 65% polyester recyclé et 35% laine', "../assets/manteaux.png", '75', '30', '2005-11-05', '2008-09-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Café en Grains Pure Origine d'Ethiopie", 'Ce grand arabica nous vient d’Ethiopie, terre natale du café. Cultivé entre 1770 et 2200 mètres d’altitude de manière traditionnelle, ce café équilibré se caractérise par de puissants arômes et une pointe cacaotée.', "../assets/caf.png", '8.66', '30', '2005-11-05', '2008-09-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Lanterne Fnar", "Cette magnifique lanterne typiquement marocaine éclairera votre interieur avec la douceur d'un soleil couchant", "../assets/lanterne.png", '43', '30', '2005-11-05', '2008-09-12');
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Bracelet Ethnique Manchette", "Ce bracelet faits main au Kenya parera avec classe votre beauté.", "../assets/bracelet.png", '27', '30', '2005-11-05', '2008-09-12');

#prod aux

# insertion type : INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("lib", "desc", "../assets/bracelet.png", '5', '30', NOW(), NOW());

INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Riz Thaï Blanc Jasmin", "Ce riz thaï, variété native appelée Hom Mali, est cultivé sur le vaste plateau de l’Isan, 
            bordé au Sud par la frontière cambodgienne.", "../assets/riz.png", '5', '30', NOW(), NOW());
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES (" Chocolat Lait Caramel Beurre Salé", "Ce chocolat au gout finement relevé par la pointe de sel des éclats de caramel au beurre salé vous surprendra.
            Fabriqué au Pérou.", "../assets/choco.png", '7', '30', NOW(), NOW());
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Sucre de Canne en Morceaux", "Ce sucre blond semi-raffiné est produit au Paraguay.
      Ses notes caramélisées accompagnent subtilement une tasse de thé ou de café.", "../assets/sucremorceaux.png", '5', '30', NOW(), NOW());
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Nectar Ananas Mangue Passion", "Ce nectar équilibré et intense allie la douceur de la mangue aux arômes floraux de l’ananas, 
        le tout relevé par la légère acidité des fruits de la passion.", "../assets/jus.png", '8', '30', NOW(), NOW());
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Gousse de vanille bourbon", "Ces gousses de vanille Bourbon entières non fendues proviennent de la région de Mananara à Madagascar. 
        Vanille noire de haute qualité, elle est cultivée à l’ombre des cocotiers, litchis et girofliers.", "../assets/goussevanille.png", '15', '30', NOW(), NOW());

INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Pur Cacao Non Sucré En Poudre", "Ce cacao produit en equateur et a haïti vous ravira par la pureté de son gout", "../assets/cacao.png", '9', '30', NOW(), NOW());
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Thé Noir bio Chaï Ceylan", "Les feuilles de ce thé noir aux épices sont récoltées avec soin dans la région montagneuse d’Haputale au Sri Lanka. Ce thé libère une liqueur de belle couleur cuivrée aux notes boisées et épicées, dominées par la cannelle.", "../assets/the2.png", '22', '30', NOW(), NOW());
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Café Pur Arabica du Mexique", "Découvrez la douceur de cet arabica cultivé entre 1100 et 1700m dans la
      région du Chiapas au Mexique, équilibré et sans amertume.", "../assets/cfg.png", '16', '30', NOW(), NOW());
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Thé Vert Menthe Ceylan", "Ce thé vert 'mid grown' est récolté entre 500 et 1000 mètres d'altitude, dans la région montagneuse de Gampola. Dans les jardins des petits producteurs de SOFA se mêlent théiers, poivriers, canneliers et vanilliers.", "../assets/the3.png", '5', '30', NOW(), NOW());
INSERT INTO Produits (Libelle,Description, image,Prix,Nombres_produit,Date_creation,Date_modification) VALUES ("Thé rouge bio Rooibos Nature", "Issue du plateau de Bokkevelberg en Afrique du Sud, ce thé rouge traditionnelle se distingue par une robe corail, des notes vanillées, une texture ronde et veloutée. Goûtez à la douceur de cette infusion de «buisson rouge» !", "../assets/roi.png", '5', '30', NOW(), NOW());







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
#categ
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('3', '1');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('3', '7');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('3', '8');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('3', '9');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('3', '10');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('3', '11');

INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('4', '12');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('4', '4');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('4', '13');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('4', '14');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('4', '15');
INSERT INTO Categorie_Produit (ID_categorie, ID_produit) VALUES ('4', '16');


