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

    $id_cat = $_GET['User_ID'];
	
	$result2 = $conn->prepare("SELECT * FROM Categories WHERE ID= :id");
	$result2->bindParam(':id', $id_cat);
	$result2->execute();
	$donnees2 = $result2->fetch();
	
	echo "    <section id='top'>
      <aside>
        <h1 id='toph'>" . $donnees2['Libelle'] . "</h1>
      </aside>
    </section>";
	
    $result = $conn->prepare("SELECT P.* FROM Categorie_Produit CP, Produits P WHERE CP.ID_categorie= :$id AND CP.ID_produit = P.ID");
	$result->bindParam(':id', $id_cat);
	$result->execute();
	while ($donnees = $result->fetch()){
		
		echo "<a href='dproduit.php?p=" . $donnees['ID'] . "'><section id='section01'>
            <aside>
                <h1 id='tpop'>" . $donnees['Libelle'] . "</h1>
                <center><image src='" . $donnees['image'] . "' height='250px'></image></center>
            </aside>
            <article>                
            </article>
        </section></a>";
		
	}
?>