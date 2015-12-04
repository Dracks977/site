<?php
include('config.php');

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed (check config.php):    " . $e->getMessage();
    exit();
    }

    $id_user = $_SESSION['User_ID'];




    $result = $conn->prepare("SELECT P.* FROM Produits P, Produit_User PU WHERE P.ID=PU.ID_produit AND PU.ID_utilisateur = :id_user LIMIT 1");
	$result->bindParam(':id_user', $id_user);
	$result->execute();
	while ($donnees = $result->fetch()){
		$prix = $donnees['Prix'] + (($donnees['Prix'] + 19.6) / 100);
		echo "<tr>
	      <td><image src='" . $donnees['image'] . "' width='100'></image><br />" . $donnees['Libelle'] . "</td>
	      <td>
	      <form action='Sprop.php?idp=" . $donnees['ID'] ."&idu=" . $id_user  . "' method='POST'>
	      <input id='po2' type='submit' value='-'></td>
	      </form>
	      <td>" . $donnees['Prix'] . "</td>
	      <td>" . $prix . "</td>
	    </tr>";
	}
	$result->closeCursor();

?>