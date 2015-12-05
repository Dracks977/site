<!DOCTYPE html>

<html lang='fr'>
  
  <link rel="stylesheet" href="../assets/style.css">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <title>E-quitable</title>

  </head>
  
  <body>
<?php
session_start();
if (isset($_SESSION['c'])){
include('headerC.php');
}
else{
include("headerD.php");
}
?>
    <section id="top">
      <aside>
        <h1 id="toph">Modification compte</h1>
      </aside>
    </section>
    
    <section id="con">
      <aside>
      </aside>
      <article>  
	  <center><p style="padding:0; color:black;"><h3 style='margin-left: 6%;'>Laissez vide les champ que vous ne voulez pas modifier</h3><br><h4 style='margin-left: 6%;'>apres avoir validez, vous serais deconnecté et redirigé vers l'index</h4></p></center>

        <center>
          <form id="font1" action="modifcompte.php" method="POST">
            Mail    : <input size="25px" type="email" name="mail" placeholder="mail@domaine.fr" pattern='^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$' ><br>
            Adresse : <input id="ins3" size="25px" type="text" name="adr" placeholder="5 rue, vile 94600" ><br>
            Pass    : <input size="25px" type="password" name="pass" placeholder="Mot de Pass" ><br>
			Question : <input id="ins3" size="25px" type="text" name="Question" placeholder="Quel est votre animal préféré" ><br>
            <a><input type="submit" placeholder="Submit" value="Modifier mes infos"></a>
          </form>
        </center>
      </article>
    </section>
    
    <div id="footer">
      Copyright © e-quitable<br>
      <a id="cont" href="mailto:vanhem_n@etna-alternance.net">Contact<a/>
    </div>
    
  </body>
  
</html>
