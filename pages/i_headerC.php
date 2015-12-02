<div id="header">
<h1>E-quitable</h1>
<image id= "opa" src="assets/anime_pony.gif" width="100"></image>
<ul>
    <li><a href="index.php">Acceuil</a></li>
    <li><a href="pages/cat.php">Catégories</a></li>
    <li><a href="pages/panier.php">Mon panier</a></li>
</ul>
<div id="log">
    <p id= "log2">Bienvenue <?php echo $_SESSION['User_Nom'] . ' ' . $_SESSION['User_Prenom'] ?>, <a id="log3" href="pages/panier.php">vous avez $nb dans votre panier</a></p>
    <ul>
    
    <a id="po" href="pages/onbuild">gestion du compte</a>
	
	 <a id="po" href="pages/dest.php">deconection</a>
	
    </ul>
</div>
</div>