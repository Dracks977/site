<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
include('config.php');
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
$Nom = $_POST['Nom'];   
$Prenom = $_POST['Prenom']; 
$user = $_POST['mail'];
$password = $_POST['pass'];
$adr = $_POST['adr'];
$Question = $_POST['Question'];

$passh = hash_hmac('sha256', $password, '123789');

if($user == '') {
	$errmsg_arr[] = 'Vous avez oublié votre mail';
	$errflag = true;
}
else if($password == '') {
	$errmsg_arr[] = 'Vous avez oublié votre mot de pass';
	$errflag = true;
}
else if($Nom == '') {
	$errmsg_arr[] = 'Vous avez oublié votre Nom';
	$errflag = true;
}
else if($adr == '') {
	$errmsg_arr[] = 'Vous avez oublié votre adresse';
	$errflag = true;
}

// verif double compte

	$result2 = $conn->prepare("SELECT * FROM User WHERE mail= :hjhjhjh");
	$result2->bindParam(':hjhjhjh', $user);
	$result2->execute();
	$rows = $result2->fetch(PDO::FETCH_NUM);
	if($rows > 0) {
	$errmsg_arr[] = 'Vous avez deja un compte';
	$errflag = true;
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	header("location: inscription.php");
	}
	else{
	$result = $conn->prepare("INSERT INTO User (Nom,Prenom,Adresse,Mail,Pass,Question,Date_creation,Date_modification) VALUES (:Nom, :Prenom, :adr, :user, :password, :Question,NOW(), NOW())");
	$result->bindParam(':user', $user);
	$result->bindParam(':Nom', $Nom);
	$result->bindParam(':Prenom', $Prenom);
	$result->bindParam(':adr', $adr);
	$result->bindParam(':Question', $Question;
	$result->bindParam(':password', $passh);
	$result->execute();
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: inscription.php");
		exit();
	}
	else{
		header("location: connexion.php");
	}
	}

// query


	
?>
