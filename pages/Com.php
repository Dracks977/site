<?php
include('config.php');

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
$reponse = $conn->query("SELECT * FROM Commentaire_Produit WHERE ID_produit={$id}");


while ($donnees = $reponse->fetch()){
	echo "<div id='con'><h4>" . $donnees['Nom'] . "_" . $donnees['Prenom'] . ":<h3 id='loi'>" . $donnees['Description'] . "</h3></h4></div>";
}

$reponse->closeCursor();
?>