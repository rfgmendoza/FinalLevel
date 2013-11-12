<?php
session_start();



if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}


$_SESSION['cart'] = null;


header('Location: ../cart.php?action=removed&productid=' . $sku);
?>