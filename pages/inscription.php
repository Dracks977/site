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
        <h1 id="toph">inscription</h1>
      </aside>
    </section>
    
    <section id="con">
      <aside>
      </aside>
      <article>  
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
  echo '<ul style="padding:0; color:red;">';
  foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '<li>',$msg,'</li>'; 
  }
  echo '</ul>';
  unset($_SESSION['ERRMSG_ARR']);
}
?>  
        <center>
          <form id="font1" action="vreg.php" method="POST">
            Nom     : <input id="ins1" size="25px" type="text" name="Nom" placeholder="Nom" required><br>
            Prenom  : <input id="ins2" size="25px" type="text" name="Prenom" placeholder="Prenom" required><br>
            Mail    : <input size="25px" type="email" name="mail" placeholder="mail@domaine.fr" pattern='^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$' required><br>
            Adresse : <input id="ins3" size="25px" type="text" name="adr" placeholder="5 rue, vile 94600" required><br>
            Pass    : <input size="25px" type="password" name="pass" placeholder="Mot de Pass" required><br>
            <a><input type="submit" placeholder="Submit" value="Submit"></a>
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

