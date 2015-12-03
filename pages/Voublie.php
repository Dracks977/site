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
else if($Prenom == '') {
	$errmsg_arr[] = 'Vous avez oublié votre adresse';
	$errflag = true;
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
	$result = $conn->prepare("UPDATE User (Pass,Date_modification) SET Pass= :pass , Date_modification= NOW() WHERE mail= :user AND Nom= :Nom AND Prenom= :Prenom AND Question= :Question");
	$result->bindParam(':pass', $passh);
	$result->execute();
	header("location: connexion.php");
	}
	else{
		$errmsg_arr[] = 'Vous avez deja un compte';
		$errflag = true;
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		header("location: oublie.php");
	}	
?>
