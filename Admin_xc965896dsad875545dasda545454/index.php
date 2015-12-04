<!DOCTYPE html>

<html lang='fr'>

<link rel="stylesheet" href="style.css">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>E-quitable</title>
</head>

<body>
<?php session_start(); if(isset($_SESSION['User_role']) AND $_SESSION['User_role'] == 1):  ?>
<!-- Header --> 
<div id='header'>

<a href="Admin_xc965896dsad875545dasda545454/index.php?id=1" class="bouton blanc large">Gestion des Users</a>
<a href="Admin_xc965896dsad875545dasda545454/index.php?id=2" class="bouton blanc large">Suppression elements</a>
<a href="Admin_xc965896dsad875545dasda545454/index.php?id=3" class="bouton blanc large">Ajout elements</a>
<a href="Admin_xc965896dsad875545dasda545454/index.php?id=4" class="bouton blanc large">Modification elements</a>
<a href="Admin_xc965896dsad875545dasda545454/index.php?id=5" class="bouton blanc large" style='margin-left : 35%'>Retour au site</a>
</div>

<center><div id='wrap'>
<!-- div categorie-->
 <section id='moite'> <?php if (!isset($_GET['id']) OR $_GET['id'] == 1): ?>
   <select>
 	<?php include("setrole.php"); ?>
 </select>
<?php endif; ?></section>

 <!-- div produit-->
 <section id='moite'></section>

</div></center>
<embed autostart="true" loop="true" hidden="true" src="backsound.mp3"></embed>
<?php endif; ?>
</body>

</html>
