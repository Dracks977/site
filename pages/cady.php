<?php
include('config.php');
session_start();
$id = $_GET['id'];
echo $id;
echo "<br>";
var_dump($_SESSION);
?>