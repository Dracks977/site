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

$reponse = $conn->query("SELECT * FROM User");
while($donnees = $reponse->fetch()){

echo "<option>" . $donnees['Mail'] . "</option>"

}
$reponse->closeCursor();



?>