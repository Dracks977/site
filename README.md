Avant propos : 

Un fichier config.php se trouvant des le dossier pages, permet de modifier les information de connections a la base de donnée.

Toute les pages contienne une entête (header) qui seras donc détaillé une seule fois.
 

entête (header.php)
le header se décline en trois versions :
La version déconnecter
Contenant les bouton pour s’inscrire et se connecter
La version connecter
Contenant un bouton de gestion du compte, un bouton de déconnections, des information sur le panier et l’utilisateur connecter actuellement.
La version admin
Contenant en plus de la version connecter, un bouton panel admin.
Pour des besoin technique une version spécifique a l’index du site est présent et possède les même caractéristique (liens redirection diffèrent, car pas dans le même dossier)

Pour des besoin technique des compte “Test” on étés implémentés :

role : admin
mail : Admin@Test
pass : pass

role : modo
mail : Modo@Test
pass : pass

role : user
mail : User@Test
pass : pass


Une fois votre compte crée, vous pourrez donc vous propulser admin du site avec le compte Admin@Test.





Descriptions des pages

accueil (index.php)
l’index contient deux catégorie dynamique, c’est a dire relier a une base de donné.
la catégorie Nouveauté contenant comme sont nom l’indique les nouveaux produit
et la catégorie top des ventes qui contient également les produits les plus vendu.
les produit présent dans ces deux catégorie sont interchangeable a partir de la base de donné ou directement sur le panel admin (en construction)
l’index contiens également 3 paragraphe éditorial
Qui somme nous ?
Qu’est-ce que c’est (le site)
Nous contacté

Inscription (inscription.php)
Comme sont nom l’indique cette page permet de s’inscrire, elle n’est disponible que si on n’est déconnecter
plusieurs information sont demandé a l’utilisateur
Nom
Prénom
Mail
Adresse
Mot de passe
le mot de passe est crypter lors de la création du compte
Question secret
Permet de changer sont mot de passe en cas d’oubli

Connexion (connexion.php)
Comme sont nom l’indique cette page permet de se connecter
Pour procéder l’utilisateur doit rentrer son mail et sont mot de passs
si l’utilisateur entre une mauvaise combinaison, il lui est proposer d'être diriger vers la page de mot de passe oublié

Mot de passe oublié (oublie.php)
l’utilisateur doit rentrer ses information de compte 
Nom
Prenom
Mail
Question secret
Le nouveaux mots de passe
si elle sont correct, il est dirigé vers la Connexion

déconnexion (dest.php)
Permet a l’utilisateur de se déconnecter, il est ensuite diriger vers l’index

Gestion du compte (compte.php)
permet de modifier ses information personnelle
une fois les modification effectuer le compte est déconnecter et l’utilisateur dirigé vers l’index

Catégorie (cat.php)
affiche de manière dynamique les différentes catégories présent dans le base de donnée, peuvent être gérées a partir du panel admin (en construction)
cliqué sur une catégorie amène vers la liste des produits présent dans celle ci

liste Produit_categ (listprod01.php)
affiche dynamiquement les produit présent dans la catégorie sélectionnée auparavant
il y a une unique page listprod pour une infinité de catégorie
les produit relier aux catégories peuvent être gérée a partir du panel admin (en construction)


Produit (dproduit.php)
affiche dynamiquement le produit sélectionné
Nom
Description
Prix
un bouton ajouter aux panier permet d’ajouter se produit au panier
si le produit est déjà dans le panier seule la quantité seras modifiée
les produits peuvent être géré a partir du panel admin (en construction)





Panier
Contient tous les produit ajouter au panier (garde en mémoire si vous vous déconnecter)
il est possible de modifier la quantité de produit, ainsi que de le retirer du panier







Beta Panel Admin (/Admin_xc965896dsad875545dasda545454/)
Le Panel admin n’est disponible seulement pour les utilisateur ayant le rôle admin.
Si un utilisateur non admin se rend sur la page il n’y auras pas accès et une surprise l’attendras.
Une fois sur le panel (en supposant que vous soyez admin) vous avez accès a trois onglet de gestion
Gestion des Users
permettant la modification des role
et la suppression d’un utilisateur
Gestion Produit
permettant la suppression des produits
et dans un avenir proche :
l’ajout
Gestion Catégories
Permettant dans un avenir proche :
l’ajout
la suppression
l’association produits catégorie
l'exclusion d’un produit d’une catégorie
un bouton Retour au site est également présent
