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
    <?php include("PHPcat.php"); ?>
<div id="footer">
  Copyright © e-quitable<br>
  <a id="cont" href="mailto:vanhem_n@etna-alternance.net">Contact<a/>
</div>

</body>

</html>

