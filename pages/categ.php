<?php
include('config.php');

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
$reponse = $conn->query("SELECT * FROM Categories WHERE ID>2");
while ($donnees = $reponse->fetch()){

 echo "<a href='listprod01.php?id=" . $donnees['ID'] . "'><section id='section03'>
       <aside>
         <h1 id='tpop'>" . $donnees['Libelle'] . "</h1>
         <center><image src='" . $donnees['image'] . "' height='250px'></image></center>
       </aside>
       <article>                
         <center><h4>" . $donnees['Description'] . "</h4></center>
       </article>
        </section></a>";

}
$reponse->closeCursor();
?>