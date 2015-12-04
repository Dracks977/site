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
$id = $_GET['id'];

    $result = $conn->prepare("DELETE PU.* FROM Produit_User PU WHERE PU.ID_produit = :idp AND PU.ID_utilisateur = :idu AND PU.ID= :id");
	$result->bindParam(':idp', $idp);
	$result->bindParam(':idu', $idu);
	$result->bindParam(':id', $id);
	$result->execute();
	header("location: panier.php");

?>