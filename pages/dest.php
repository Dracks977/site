<?php
session_start();
session_destroy();
unset($_SESSION['c']);
header("location: ../index.php");
?>