<?php
include('config.php');

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

$idu = $_GET['idu'];
$idp = $_GET['idp'];
$qu = $_GET['qu'];
$qu = $qu + 1;

    $result = $conn->prepare("UPDATE Produit_User SET Quant= :qu WHERE ID_produit = :idp AND ID_utilisateur = :idu");
	$result->bindParam(':idp', $idp);
	$result->bindParam(':idu', $idu);
	$result->bindParam(':qu', $qu);
	$result->execute();
	header("location: panier.php");

?>