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
        <h1 id="toph">connexion</h1>
      </aside>
    </section>
    
    <section id="con2">
      <aside>
      </aside>
      <article>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
  echo '<ul style="padding:0; color:red;">';
  foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '<li><p>',$msg,'</p></li>'; 
  }
  echo '</ul>';
  unset($_SESSION['ERRMSG_ARR']);
}
?>  
        <center>
          <form id="font1" action="Vlogin.php" method="POST">
            Mail    : <input size="25px" type="email" name="mail" placeholder="mail@domaine.fr" ><br>
            Pass: <input size="25px" type="password" name="pass" placeholder="pass" ><br>
            <a><input type="submit" value="Submit"></a>
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
