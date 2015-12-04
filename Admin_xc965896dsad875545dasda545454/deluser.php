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
	
	$result = $conn->prepare("DELETE U.* FROM user U WHERE U.mail = :user");
	$result->bindParam(':user', $mail);
	$result->execute();
	header("location: index.php?id=66");
?>