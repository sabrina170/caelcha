<?php
session_start();
session_destroy();
session_unset();

session_start();
$_SESSION['COMPRA'] = "success"; 

header("location:tienda.php");
?>