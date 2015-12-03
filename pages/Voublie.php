<?php
session_start();
$oerrmsg_arr = array();
$ooerrflag = false;
// configuration
include('config.php');
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
$Nom = $_POST['Nom'];   
$Prenom = $_POST['Prenom']; 
$user = $_POST['mail'];
$password = $_POST['pass'];
$Question = $_POST['Question'];

$passh = hash_hmac('sha256', $password, '123789');

if($user == '') {
	$oerrmsg_arr[] = 'Vous avez oublié votre mail';
	$oerrflag = true;
}
else if($password == '') {
	$oerrmsg_arr[] = 'Vous avez oublié votre mot de pass';
	$oerrflag = true;
}
else if($Nom == '') {
	$oerrmsg_arr[] = 'Vous avez oublié votre Nom';
	$oerrflag = true;
}
else if($Prenom == '') {
	$oerrmsg_arr[] = 'Vous avez oublié votre adresse';
	$oerrflag = true;
}

// verif compte

	$result2 = $conn->prepare("SELECT * FROM User WHERE mail= :user AND Nom= :Nom AND Prenom= :Prenom AND Question= :Question" );
	$result2->bindParam(':user', $user);
	$result2->bindParam(':Nom', $Nom);
	$result2->bindParam(':Prenom', $Prenom);
	$result2->bindParam(':Question', $Question);
	$result2->execute();
	$rows = $result2->fetch(PDO::FETCH_NUM);
	if($rows > 0) {
	$result = $conn->prepare("UPDATE User SET Pass= :pass , Date_modification= NOW() WHERE mail= :user AND Nom= :Nom AND Prenom= :Prenom AND Question= :Question");
	$result->bindParam(':pass', $passh);
	$result->bindParam(':user', $user);
	$result->bindParam(':Nom', $Nom);
	$result->bindParam(':Prenom', $Prenom);
	$result->bindParam(':Question', $Question);
	$result->execute();
	header("location: connexion.php");
	}
	else{
		$oerrmsg_arr[] = 'Votre compte est introuvable';
		$oerrflag = true;
		$_SESSION['oerrmsg_arr'] = $oerrmsg_arr;
		header("location: oublie.php");
	}	
?>
