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
    echo "Connection failed (check config.php):   " . $e->getMessage();
    }

    $result = $conn->prepare("SELECT * FROM Produits");
	$result->execute();
	while ($donnees = $result->fetch()){

echo "<option id='SelectP'>" . $donnees['Libelle'] . "</option>";

}
$result->closeCursor();



?>