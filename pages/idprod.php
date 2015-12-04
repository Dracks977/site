<?php
include('config.php');

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8",$dbuser,$dbpass);
$reponse = $conn->query("SELECT * FROM Produits WHERE ID={$id}");
$donnees = $reponse->fetch();
$reponse->closeCursor();

if (isset($_SESSION['c'])){
echo "<section id='top'>
		<aside>
			<h1 id='toph'>" . $donnees['Libelle'] . "</h1>
		</aside>
	  </section>
		<section id='con'>
          	<aside>
          		<image id='marg2' src='". $donnees['image'] ."' width='20%''></image>
          	</aside>
          	<article>
          		<h4 id='dprod'>" . $donnees['Libelle'] . "<br />" . $donnees['Description'] . 
          			"<ul>
                    <form id='font1' action='cady.php?id=" . $donnees['ID'] ."' method='POST'> 
                		<li><input type='submit' value='ajouter au panier'></li>
                		<li id='prix'>Prix : " . $donnees['Prix'] . "€</li>
              		</ul>
            	</h4>
          	</article>
		</section>";
  }
  else{
echo "<section id='top'>
    <aside>
      <h1 id='toph'>" . $donnees['Libelle'] . "</h1>
    </aside>
    </section>
    <section id='con'>
            <aside>
              <image id='marg2' src='". $donnees['image'] ."' width='20%''></image>
            </aside>
            <article>
              <h4 id='dprod'>" . $donnees['Libelle'] . "<br />" . $donnees['Description'] . 
                "<ul>
                    <form id='font1' action='connexion.php' method='POST'> 
                    <li><input type='submit' value='ajouter au panier'></li>
                    <li id='prix'>Prix : " . $donnees['Prix'] . "€</li>
                  </ul>
              </h4>
            </article>
    </section>";
  }
?>