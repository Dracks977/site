<?php

include('../pages/config.php');

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):   " . $e->getMessage();
    }

    $result = $conn->prepare("SELECT P.Libelle PLibelle, C.Libelle CLibelle FROM Produits P, Categorie_Produit CP, Categories C WHERE CP.ID_produit = P.ID AND CP.ID_categorie = C.ID");
	$result->execute();
	while ($donnees = $result->fetch()){

echo "<option id='SelectP'>" . $donnees['CLibelle'] . " >>> " . $donnees['PLibelle'] . "</option>";

}
$result->closeCursor();



?>