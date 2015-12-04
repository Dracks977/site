<?php
include('../pages/config.php');
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
	$mail = $_POST['user'];
	
	if ($_POST['role'] == "User")
		$role = 3;
	else if ($_POST['role'] == "Modo")
		$role = 2;
		else if ($_POST['role'] == "Admin")
		$role = 1;
	
	
	$result = $conn->prepare("UPDATE User SET Rôle= :Role , Date_modification= NOW() WHERE mail= :user");
	$result->bindParam(':user', $mail);
	$result->bindParam(':Role', $role);
	$result->execute();
	echo "utilisateur modifié";
	header("location: index.php?id=66");
	
?>