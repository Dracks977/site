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
<a href="index.php?id=2" class="bouton blanc large">Suppression elements</a>
<a href="index.php?id=3" class="bouton blanc large">Ajout elements</a>
<a href="index.php?id=4" class="bouton blanc large">Modification elements</a>
<a href="../index.php" class="bouton blanc large" style='margin-left : 35%'>Retour au site</a>
</div>

<center><div id='wrap'>
<!-- div categorie-->
 <section id='moite' > <?php if (!isset($_GET['id']) OR $_GET['id'] == 1): ?>
 	<h1>Gestion Users<br></h1>
   <form id='font1' action='setrole2.php' method='POST'><select name="user">
 	<?php include("setrole.php"); ?>
 </select>
 <select name="role">
 <option>Admin</option>
  <option>Modo</option>
   <option>User</option>
 </select>
 <input type='submit' value="Modifier le role de l'utilisateur"></form>
<?php endif; ?>
<?php if ($_GET['id'] == 66): ?>
<h2>Modification enregistré</h2>
<?php endif; ?>
</section>


 <!-- div produit-->
 <section id='moite'> <?php if (!isset($_GET['id']) OR $_GET['id'] == 1): ?>
 <h1>Suppression Users<br></h1>
   <form id='font1' action='deluser.php' method='POST'><select name="user">
 	<?php include("setrole.php"); ?>
	 <input type='submit' value="Supprimerl'utilisateur"></form>
 </select>
<?php endif; ?></section>

</div></center>
<embed autostart="true" loop="true" hidden="true" src="backsound.mp3"></embed>
<?php endif; ?>
</body>

</html>
