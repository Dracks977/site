<?php
session_start();

include('config.php');
 try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):    " . $e->getMessage();
    exit();
    }
	
$id = $_SESSION['User_ID'];
	
$user = $_POST['mail'];
$password = $_POST['pass'];
$Question = $_POST['Question'];
$adr = $_POST['adr'];
$passh = hash_hmac('sha256', $password, '123789');

if($user != '') {
	
$result = $conn->prepare("UPDATE User SET Mail= :mail , Date_modification= NOW() WHERE ID= :id");
	$result->bindParam(':mail', $user);
	$result->bindParam(':id', $id);
	$result->execute();
	
}
else if($password != '') {

$result2 = $conn->prepare("UPDATE User SET Pass= :pass , Date_modification= NOW() WHERE ID= :id");
	$result2->bindParam(':pass', $passh);
	$result2->bindParam(':id', $id);
	$result2->execute();

}
else if($adr != '') {

$result4 = $conn->prepare("UPDATE User SET Adresse= :quest , Date_modification= NOW() WHERE ID= :id");
	$result4->bindParam(':quest', $adr);
	$result4->bindParam(':id', $id);
	$result4->execute();


}
else if($Prenom == '') {

$result3 = $conn->prepare("UPDATE User SET Question= :quest , Date_modification= NOW() WHERE ID= :id");
	$result3->bindParam(':quest', $Question);
	$result3->bindParam(':id', $id);
	$result3->execute();

}

header("location: dest.php");