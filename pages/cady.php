<?php
include('config.php');
session_start();
$id_prod = $_GET['id'];

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



    $result2 = $conn->prepare("SELECT PU.* FROM Produit_User PU WHERE PU.ID_produit= :id_prod AND PU.ID_utilisateur = :id_user ");
	$result2->bindParam(':id_prod', $id_prod);
	$result2->bindParam(':id_user', $id_user);
	$result2->execute();
	$rows = $result2->fetch(PDO::FETCH_NUM);
	$donnees = $result2->fetch();
	if($rows > 0) {

		$Quant = ($donnees['Quant'] + 1);

	$result3 = $conn->prepare("UPDATE Produit_User SET Quant= :Quant");
	$result3->bindParam(':Quant', $Quant);
	$result3->execute();
	}
	else{
	$result = $conn->prepare("INSERT INTO Produit_User (ID_produit,ID_utilisateur) VALUES (:ID_produit, :ID_utilisateur)");
	$result->bindParam(':ID_produit', $id_prod);
	$result->bindParam(':ID_utilisateur', $id_user);
	$result->execute();
	}

	header("location: panier.php");



?>