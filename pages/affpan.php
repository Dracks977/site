<?php
include('config.php');
session_start();

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




    $result = $conn->prepare("SELECT P.* FROM Produits P, Produit_User PU WHERE P.ID=PU.ID_produit AND PU.ID_utilisateur = :id_user ");
	$result->bindParam(':id_user', $id_user);
	$result->execute();
	while ($donnees = $result->fetch()){
		echo $donnees['Libelle'] . "<br>";
	}
	$reponse->closeCursor();

?>