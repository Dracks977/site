<?php
session_start();
$Lid = $_POST["id"];
$LNom = $_SESSION["User_Nom"];  
$LPrenom = $_SESSION["User_Prenom"];
$LDescription = $_POST["lcom"]; 

// include('config.php');
// $errmsg_arr = array();
// $errflag = false;
// // configuration
// include('config.php');
//  try {
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully"; 
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed (check config.php):    " . $e->getMessage();
//     exit();
//     }
echo $_SESSION["User_Nom"];
echo $_SESSION["User_Prenom"];
echo $Lid;
echo $LDescription;


// if ($Description == '') {
// 	$errmsg_arr[] = 'Vous avez oublié votre commentaire';
// 	$errflag = true;
// }
// else{

// 	$result = $conn->prepare("INSERT INTO Commentaire_Produit (ID_produit,Nom,Prenom,Description) VALUES ({$id}, :Nom, :Prenom, :Description);");
// 	$result->bindParam(':Description', $Description);
// 	$result->bindParam(':Nom', $_SESSION['User_Nom']);
// 	$result->bindParam(':Prenom', $Prenom);
// 	$result->execute();
// 		if($errflag) {
// 		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
// 		header("location: dproduit.php?p=" . $id);
// 		exit();
// 	}
// 		else{
// 		header("location: dproduit.php?p=" . $id);
// 	}
// }
?>
