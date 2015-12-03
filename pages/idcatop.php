<?php
include('config.php');

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);

$reponse = $conn->query("SELECT P.* FROM Categorie_Produit CP, Produits P WHERE CP.ID_categorie='1' AND CP.ID_produit = P.ID");

while ($donnees = $reponse->fetch()){

echo "<a href='pages/dproduit.php?p=" . $donnees['ID'] . "'><section id='section01'>
            <aside>
                <h1 id='tpop'>" . $donnees['Libelle'] . "</h1>
                <center><image src='" . $donnees['image'] . "' width='33%'></image></center>
            </aside>
            <article>                
            </article>
        </section></a>";


}
$reponse->closeCursor();
?>