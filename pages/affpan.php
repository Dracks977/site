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
    $total = 0;



    $result = $conn->prepare("SELECT P.*, PU.Quant FROM Produits P, Produit_User PU WHERE P.ID=PU.ID_produit AND PU.ID_utilisateur = :id_user ");
	$result->bindParam(':id_user', $id_user);
	$result->execute();
	while ($donnees = $result->fetch()){
		$Rprix = $donnees['Prix'] * $donnees['Quant'];
		$prix = $Rprix + (($Rprix + 20) / 100);
		echo "<tr>
	      <td><image src='" . $donnees['image'] . "' width='100'></image><br />" . $donnees['Libelle'] . "</td>
	      <td><center>" . $donnees['Quant'] . "</center>
	      <form action='Sprop.php?idp=" . $donnees['ID'] ."&idu=" . $id_user  . "' method='POST'>
	      <input id='po2' type='submit' value='X'></td>
	      </form>
	      <td>" . $Rprix . "</td>
	      <td>" . $prix . "</td>
	    </tr>";
	    $total = $total + $prix;
	}

	echo "<tr id='fin'>
	      <th>total TTC :</th>
	      <th> </th>
	      <th> </th>
	      <th>" . $total . "</th>
	    </tr>";

	$result->closeCursor();

?>