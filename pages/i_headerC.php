<?php
include('pages/config.php');

 try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):    " . $e->getMessage();
    exit();
    }

    $id_user = $_SESSION['User_ID'];
	$produitT = 0;
	
	$resultQ = $conn->prepare("SELECT PU.* FROM Produit_User PU WHERE PU.ID_utilisateur = :id_user ");
	$resultQ->bindParam(':id_user', $id_user);
	$resultQ->execute();
	while ($donnees = $resultQ->fetch()){
		$produitT = $produitT + $donnees['Quant'];
	}
?>

<div id="header">
<h1>E-quitable</h1>
<image id= "opa" src="assets/anime_pony.gif" width="100"></image>
<ul>
    <li><a href="index.php">Acceuil</a></li>
    <li><a href="pages/cat.php">Catégories</a></li>
    <li><a href="pages/panier.php">Mon panier (<?php echo $produitT; ?>)</a></li>
</ul>
<div id="log">
    <p id= "log2">Bienvenue <?php echo $_SESSION['User_Nom'] . ' ' . $_SESSION['User_Prenom'] ?>, <a id="log3" href="pages/panier.php">vous avez <?php echo $produitT; ?> produits dans votre panier</a></p>
    <ul>
    
    <a id="po" href="pages/onbuild">gestion du compte</a>
	
	 <a id="po" href="pages/dest.php">deconection</a>
     <?php if ($_SESSION['User_role'] == 1){
        echo "<a id='po' href='Admin_xc965896dsad875545dasda545454/'>Panel Admin</a>";
     }
     ?>
	
    </ul>
</div>
</div>