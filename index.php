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
                 <?php include("pages/idcatop.php") ?>
        <section id="top">
            <aside>
                <h1 id= "toph">Nouveauté :</h1>
            </aside>
        </section>
                 <?php include("pages/idcatop2.php") ?>
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
