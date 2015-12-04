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
        <h1 id="toph">panier</h1>
      </aside>
    </section>
        
    <section id="con">
      <form method="post" action="panier.php">
	<center><table>
	    <tr>
	      <th>Libellé</th>
	      <th>Quantité</th>
	      <th>Prix HT (€)</th>
		<th>Prix TTC (€)</th>
	    </tr>
	    <tr>
	      <td><image src="../assets/b2.png" width="100"></image><br />Huile en Crème Corps L'Argan Bio - 175ml</td>
	      <td><center>1</center><a id="po2">+</a><a id="po2">-</a></td>
	      <td>15</td>
	      <td>18</td>
	    </tr>
	    <tr>
		<td><image src="../assets/pates.png" width="100"></image><br />pates épeautre Bio 250g</td>
		<td><center>1</center><a id="po2">+</a><a id="po2">-</a></td>
		<td>5</td>
		<td>5.28</td>
	    </tr>
	    <tr>
	      <td><image src="../assets/manteaux.png" width="100"></image><br />Komodo Manteau Pea Coat Grey</td>
	      <td><center>1</center><a id="po2">+</a><a id="po2">-</a></td>
	      <td>75</td>
	      <td>90</td>
	    </tr>
	    <tr id="fin">
	      <th>total TTC :</th>
	      <th> </th>
	      <th> </th>
	      <th>113.28</th>
	    </tr>
	  </table>
	  <ul>
	    <li><a id="fina" href="../index.html">Finaliser la commande</a></li>
	  </ul>
	</center>
      </form>
    </section>
    
    <div id="footer">
      Copyright © e-quitable<br>
      <a id="cont" href="mailto:vanhem_n@etna-alternance.net">Contact<a/>
    </div>
    <script type="text/javascript" src="jquery.js" ></script>
    <script type="text/javascript" src="panier.js" ></script>
  </body>
  
</html>
