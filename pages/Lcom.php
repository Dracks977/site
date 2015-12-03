<?php
session_start();
$Lid = $_GET["id"];
$LNom = $_SESSION["User_Nom"];  
$LPrenom = $_SESSION["User_Prenom"];
$LDescription = $_POST["lcom"]; 

include('config.php');
$Lerrmsg_arr = array();
$Lerrflag = false;
// configuration
 try {
    $Lconn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $Lconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $Le)
    {
    echo "Connection failed (check config.php):    " . $Le->getMessage();
    exit();
    }

if ($LDescription == '') {
	$Lerrmsg_arr[] = 'Vous avez oublié votre commentaire';
	$Lerrflag = true;
	header("location: dproduit.php?p=" . $Lid);
}
else{

	$Lresult = $Lconn->prepare("INSERT INTO Commentaire_Produit (ID_produit,Nom,Prenom,Description) VALUES (:id, :Nom, :Prenom, :Description);");
	$Lresult->bindParam(':Description', $LDescription);
	$Lresult->bindParam(':Nom', $LNom);
	$Lresult->bindParam(':Prenom', $LPrenom);
	$Lresult->bindParam(':id', $Lid);
	$Lresult->execute();
		if($Lerrflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		header("location: dproduit.php?p=" . $Lid);
		exit();
	}
		else{
		header("location: dproduit.php?p=" . $Lid);
	}
}
?>
