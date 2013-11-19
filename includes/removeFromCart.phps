<?php

session_start();

$sku = $_GET['sku'];

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

$_SESSION['cart'] = array_diff($_SESSION['cart'], array($sku));

header('Location: ../cart.php?action=removed&productid='.$sku);

?>