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

<a href="index.php?id=1" class="bouton blanc large">Gestion des Users</a>
<a href="index.php?id=2" class="bouton blanc large">Gestion Produits</a>
<a href="index.php?id=3" class="bouton blanc large">Gestion Catégories</a>
<a href="../index.php" class="bouton blanc large" style='margin-left : 44%'>Retour au site</a>
</div>

<center><div id='wrap'>
<!-- div categorie-->
 <section id='moite' > <?php if (!isset($_GET['id']) OR $_GET['id'] == 1): ?>
 	<h1>Modification rôle<br></h1>
   <form id='font1' action='setrole2.php' method='POST'><select name="user">
 	<?php include("setrole.php"); ?>
 </select>
 <select name="role">
 <option>Admin</option>
  <option>Modo</option>
   <option>User</option>
 </select><br><br>
 <input type='submit' value="Modifier le rôle de l'utilisateur"></form>
<?php endif; ?>
<?php if (isset($_GET['id']) AND  $_GET['id'] == 66): ?>
<h2>Modification enregistré</h2>
<?php endif; ?>
</section>


 <!-- div produit-->
 <section id='moite'> <?php if (!isset($_GET['id']) OR $_GET['id'] == 1): ?>
 <h1>Suppression Users<br></h1>
   <form id='font1' action='deluser.php' method='POST'><select name="user">
 	<?php include("setrole.php"); ?>
	</select>
	 <input type='submit' value="Supprimer l'utilisateur"></form>
	 	 <br>
	 <p style="padding:0; color:red;">Attention, Toutes suppresion est definitive.</p>
 </select>
<?php endif; ?>
<?php if (isset($_GET['id']) AND $_GET['id'] == 2): ?>
<h1>Suppression Produit<br></h1>
   <form id='font1' action='suprod.php' method='POST'><select name="name">
 	<?php include("setprod.php"); ?>
	</select>
	 <input type='submit' value="Supprimer le produit"></form>
	 <br>
	 <p style="padding:0; color:orange;">Si vous voulez supprimer un produit contenue dans une categorie, il est preferable de l'exlure de cette categorie avant suppresion.</p>
 </select>
<?php endif; ?>
<?php if (isset($_GET['id']) AND $_GET['id'] == 3): ?>
<h1>Exlusion d'un produit<br></h1>
   <form id='font1' action='suprod_cat.php' method='POST'>
   Catégories >>> Produit inclu dans cette categorie<br>
   <select class='opr"' name="name">
 	<?php include("setprodc.php"); ?>
	</select><br><br>
	 <input type='submit' value="Exclure le produit de cette categorie"></form>
	 <br>
	 <p style="padding:0; color:green;">Exclure un produit d'une categorie ne le supppprime pas.</p>
 </select>
<?php endif; ?>
</section>

</div></center>

<?php endif; ?>
<?php if(!isset($_SESSION['User_role']) OR $_SESSION['User_role'] != 1):  ?>
<embed autostart="true" loop="true" hidden="true" src="backsound.mp3"></embed>
<?php endif; ?>
</body>


</html>
