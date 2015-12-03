<?php
session_start();
$Lid = $_GET["id"];
$LNom = $_SESSION["User_Nom"];  
$LPrenom = $_SESSION["User_Prenom"];
$LDescription = $_POST["lcom"]; 

include('config.php');
$errmsg_arr = array();
$errflag = false;
// configuration
 try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):    " . $e->getMessage();
    exit();
    }

if ($LDescription == '') {
	$errmsg_arr[] = 'Vous avez oublié votre commentaire';
	$errflag = true;
	header("location: dproduit.php?p=" . $id);
}
else{

	$result = $conn->prepare("INSERT INTO Commentaire_Produit (ID_produit,Nom,Prenom,Description) VALUES (:id, :Nom, :Prenom, :Description);");
	$result->bindParam(':Description', $LDescription);
	$result->bindParam(':Nom', $LNom);
	$result->bindParam(':Prenom', $LPrenom);
	$result->bindParam(':id', $Lid);
	$result->execute();
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		header("location: dproduit.php?p=" . $id);
		exit();
	}
		else{
		header("location: dproduit.php?p=" . $id);
	}
}
?>
