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
        <h1 id="toph">mot de pass oublié</h1>
      </aside>
    </section>
    
    <section id="con">
      <aside>
      </aside>
      <article>  
<?php
if( isset($_SESSION['oerrmsg_arr']) && is_array($_SESSION['oerrmsg_arr']) && count($_SESSION['oerrmsg_arr']) >0 ) {
  echo '<ul style="padding:0; color:red;">';
  foreach($_SESSION['oerrmsg_arr'] as $msg) {
    echo '<li>',$msg,'</li>'; 
  }
  echo '</ul>';
  unset($_SESSION['oerrmsg_arr']);
}
?>  
        <center>
          <form id="font1" action="Voublie.php" method="POST">
            Nom      : <input id="ins1" size="25px" type="text" name="Nom" placeholder="Nom" required><br>
            Prenom   : <input id="ins2" size="25px" type="text" name="Prenom" placeholder="Prenom" required><br>
            Mail     : <input size="25px" type="email" name="mail" placeholder="mail@domaine.fr" pattern='^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$' required><br>
			      Question : <input id="ins3" size="25px" type="text" name="Question" placeholder="Quel est votre animal préféré" required><br><br>
            New Pass : <input id="ins3" size="25px" type="password" name="pass" placeholder="Nouveaux Mot de Pass" required><br>
            <a><input type="submit" placeholder="Submit" value="Changer votre mots de pass"></a>
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

