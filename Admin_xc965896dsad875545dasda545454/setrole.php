<?php

include('../pages/config.php');

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
$reponse = $conn->query("SELECT * FROM User");
while($donnees = $reponse->fetch()){

echo "<option>" . $donnees['Mail'] . "</option>"

}
$reponse->closeCursor();



?>