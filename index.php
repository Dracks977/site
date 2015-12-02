<!DOCTYPE html>

<html lang='fr'>

<link rel="stylesheet" href="assets/style.css">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>E-quitable</title>
</head>

<body>

<?php
session_start();
if (isset($_SESSION['c'])){
include('pages/i_headerC.php');
}
else{
include("pages/i_headerD.php");
}
?>

        <section id="top">
            <aside>
                <h1 id= "toph">Top des ventes :</h1>
            </aside>
        </section>
   <a href="pages/dproduit.php?p=1"><section id="section01">
            <aside>
                <h1 id="tpop">Torsades au petit épeautre Bio 250g- Lazzaretti</h1>
                <center><image src="assets/pates.png" width="170"></image></center>
            </aside>
            <article>                
                <center><h4>Produit phare de notre rayon alimentation!</h4></center>
            </article>
        </section></a>
          <a href="pages/dproduit.php?p=2"><section id="section01">
            <aside>
                <h1 id="tpop">Huile en Crème Corps L'Argan Bio - 175ml</h1>
                <center><image src="assets/b2.png" width="170"></image></center>
            </aside>
            <article>                
                <center><h4>Approuvé par nos consommateurs, découvrez le plus grand succès de notre rayon produits de beauté!</h4></center>
            </article>
        </section></a>
         <a href="pages/dproduit.php?p=3"><section id="section01">
            <aside>
                <h1 id="tpop">Komodo Manteau Pea Coat Grey</h1>
                <center><image src="assets/manteaux.png" width="120"></image></center>
            </aside>
            <article>                
                <center><h4>Origine : Népal (issu du commerce équitable)
                            Composition : 65% polyester recyclé et 35% laine</h4></center>
            </article>
        </section></a>
        <section id="top">
            <aside>
                <h1 id= "toph">Nouveauté :</h1>
            </aside>
        </section>
         <a href="pages/dproduit4.html"><section id="section01">
            <aside>
                <h1 id="tpop">ETHIQUABLE - Thé Vert Hibiscus Gingembre</h1>
                <center><image src="assets/the.png" width="170"></image></center>
            </aside>
            <article>                
                <center><h4>Ce thé puissant vous fera voyager au coeur du Vietnam.</h4></center>
            </article>
        </section></a>
         <a href="pages/dproduit5.html"><section id="section01">
            <aside>
                <h1 id="tpop">Lanterne Fnar</h1>
                <center><image src="assets/lanterne.png" width="100"></image></center>
            </aside>
            <article>                
                <center><h4>Cette magnifique lanterne typiquement marocaine éclairera votre interieur avec la douceur d'un soleil couchant</h4></center>
            </article>
        </section></a>
         <a href="pages/dproduit6.html"><section id="section01">
            <aside>
                <h1 id="tpop">Bracelet Ethnique Manchette</h1>
                <center><image src="assets/bracelet.png" width="190"></image></center>
            </aside>
            <article>                
                <center><h4>Ce bracelet faits main au Kenya parera avec classe votre beauté.</h4></center>
            </article>
        </section></a>
                <section id="section02">
            <aside>
                <h1 id="squi">Qui sommes nous ?</h1>
                <p>Sally et Nathan, deux étudiants engagés dans la cause équitable, nous avons voulu participer à la cause altermondialiste en proposant un site regroupant à la 
                fois non seulement des produits de consommation courants mais également des vêtements issus de l'agriculture bio et du commerce équitable.</p>
            </aside>
        </section>
                <section id="section02">
            <aside>
                <h1 id="squi">Qu'est-ce que c'est ?</h1>
                <p>Le commerce équitable permet aux petits producteurs du monde entier d'avoir une activité pérène et respectueuse des traditions, 
                en effet, vous paierez plus cher un produit issu du commerce équitable, cependant il sera de meilleur qualité et le producteur pourra vivre de sa culture.</p>
            </aside>
        </section>
        <section id="section02">
            <aside>
                <h1 id="squi">Nous contacter:</h1>
                <p><a href="mailto:Sally.stitch17@gmail.com">Sally.stitch17@gmail.com</a><br /><a href="mailto:vanhem_n@etna-alternance.net">vanhem_n@etna-alternance.net</p><a/>
            </aside>
        </section>
<div id="footer">
Copyright © e-quitable<br>
</div>

</body>

</html>
