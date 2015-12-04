<?php
include('config.php');
session_start();
$id_prod = $_GET['id'];

 try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):    " . $e->getMessage();
    exit();
    }

    $id_user = $_SESSION['User_ID'];

$result = $conn->prepare("INSERT INTO Produit_User (ID_produit,ID_utilisateur) VALUES (:ID_produit, :ID_utilisateur)");
	$result->bindParam(':ID_produit', $id_prod);
	$result->bindParam(':ID_utilisateur', $id_user);
	$result->execute();
	header("location pannier.php")
?>