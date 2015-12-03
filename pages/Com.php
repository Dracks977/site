<?php
include('config.php');

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
$reponse = $conn->query("SELECT * FROM Commentaire_Produit WHERE ID_produit={$id}");

while ($donnees = $reponse->fetch()){
echo $donnees['Description'];
}


$reponse->closeCursor();
?>