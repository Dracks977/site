Avant propos : 

Un fichier config.php se trouvant des le dossier pages, permet de modifier les information de connections a la base de donn�e.

Toute les pages contienne une ent�te (header) qui seras donc d�taill� une seule fois.
 

ent�te (header.php)
le header se d�cline en trois versions :
La version d�connecter
Contenant les bouton pour s�inscrire et se connecter
La version connecter
Contenant un bouton de gestion du compte, un bouton de d�connections, des information sur le panier et l�utilisateur connecter actuellement.
La version admin
Contenant en plus de la version connecter, un bouton panel admin.
Pour des besoin technique une version sp�cifique a l�index du site est pr�sent et poss�de les m�me caract�ristique (liens redirection diff�rent, car pas dans le m�me dossier)

Pour des besoin technique des compte �Test� on �t�s impl�ment�s :

role : admin
mail : Admin@Test
pass : pass

role : modo
mail : Modo@Test
pass : pass

role : user
mail : User@Test
pass : pass


Une fois votre compte cr�e, vous pourrez donc vous propulser admin du site avec le compte Admin@Test.





Descriptions des pages

accueil (index.php)
l�index contient deux cat�gorie dynamique, c�est a dire relier a une base de donn�.
la cat�gorie Nouveaut� contenant comme sont nom l�indique les nouveaux produit
et la cat�gorie top des ventes qui contient �galement les produits les plus vendu.
les produit pr�sent dans ces deux cat�gorie sont interchangeable a partir de la base de donn� ou directement sur le panel admin (en construction)
l�index contiens �galement 3 paragraphe �ditorial
Qui somme nous ?
Qu�est-ce que c�est (le site)
Nous contact�

Inscription (inscription.php)
Comme sont nom l�indique cette page permet de s�inscrire, elle n�est disponible que si on n�est d�connecter
plusieurs information sont demand� a l�utilisateur
Nom
Pr�nom
Mail
Adresse
Mot de passe
le mot de passe est crypter lors de la cr�ation du compte
Question secret
Permet de changer sont mot de passe en cas d�oubli

Connexion (connexion.php)
Comme sont nom l�indique cette page permet de se connecter
Pour proc�der l�utilisateur doit rentrer son mail et sont mot de passs
si l�utilisateur entre une mauvaise combinaison, il lui est proposer d'�tre diriger vers la page de mot de passe oubli�

Mot de passe oubli� (oublie.php)
l�utilisateur doit rentrer ses information de compte 
Nom
Prenom
Mail
Question secret
Le nouveaux mots de passe
si elle sont correct, il est dirig� vers la Connexion

d�connexion (dest.php)
Permet a l�utilisateur de se d�connecter, il est ensuite diriger vers l�index

Gestion du compte (compte.php)
permet de modifier ses information personnelle
une fois les modification effectuer le compte est d�connecter et l�utilisateur dirig� vers l�index

Cat�gorie (cat.php)
affiche de mani�re dynamique les diff�rentes cat�gories pr�sent dans le base de donn�e, peuvent �tre g�r�es a partir du panel admin (en construction)
cliqu� sur une cat�gorie am�ne vers la liste des produits pr�sent dans celle ci

liste Produit_categ (listprod01.php)
affiche dynamiquement les produit pr�sent dans la cat�gorie s�lectionn�e auparavant
il y a une unique page listprod pour une infinit� de cat�gorie
les produit relier aux cat�gories peuvent �tre g�r�e a partir du panel admin (en construction)


Produit (dproduit.php)
affiche dynamiquement le produit s�lectionn�
Nom
Description
Prix
un bouton ajouter aux panier permet d�ajouter se produit au panier
si le produit est d�j� dans le panier seule la quantit� seras modifi�e
les produits peuvent �tre g�r� a partir du panel admin (en construction)





Panier
Contient tous les produit ajouter au panier (garde en m�moire si vous vous d�connecter)
il est possible de modifier la quantit� de produit, ainsi que de le retirer du panier







Beta Panel Admin (/Admin_xc965896dsad875545dasda545454/)
Le Panel admin n�est disponible seulement pour les utilisateur ayant le r�le admin.
Si un utilisateur non admin se rend sur la page il n�y auras pas acc�s et une surprise l�attendras.
Une fois sur le panel (en supposant que vous soyez admin) vous avez acc�s a trois onglet de gestion
Gestion des Users
permettant la modification des role
et la suppression d�un utilisateur
Gestion Produit
permettant la suppression des produits
et dans un avenir proche :
l�ajout
Gestion Cat�gories
Permettant dans un avenir proche :
l�ajout
la suppression
l�association produits cat�gorie
l'exclusion d�un produit d�une cat�gorie
un bouton Retour au site est �galement pr�sent
