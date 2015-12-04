<?php
session_start();
$errmsg_arr = array();
$errflag = false;
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
    echo "Connection failed (check config.php):   " . $e->getMessage();
    }
$user = $_POST['mail'];
$password = $_POST['pass'];

$passh = hash_hmac('sha256', $password, '123789');
 
if($user == '') {
	$errmsg_arr[] = 'Vous avez oublié votre mail';
	$errflag = true;
}
else if($password == '') {
	$errmsg_arr[] = 'Vous avez oublié votre mot de pass';
	$errflag = true;
}
// query
	$result = $conn->prepare("SELECT * FROM User WHERE mail= :hjhjhjh AND pass= :asas");
	$result->bindParam(':hjhjhjh', $user);
	$result->bindParam(':asas', $passh);
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_NUM);
	if($rows > 0) {
	$_SESSION['c'] = true;
	$_SESSION['User_ID'] = $rows[0];
	$_SESSION['User_Nom'] = $rows[1];
	$_SESSION['User_Prenom'] = $rows[2];
	$_SESSION['User_Adresse'] = $rows[3];
	$_SESSION['User_mail'] = $rows[4];
	$_SESSION['User_role'] = $rows[7];
	header("location: ../index.php");
	}
	else{
		$errmsg_arr[] = "mauvaise combinaison, <a style='font-size: 90%' href='oublie.php'>Mot de pass oublié</a>";
		$errflag = true;
	}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: connexion.php");
		exit();
	}
 
?>
