<?php
session_start();

$sku = $_GET['sku'];
$prod = $_GET['prod'];
$id = $_GET['id'];

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

if(in_array($sku, $_SESSION['cart'])){
    header('Location: ../cart.php?action=exists&productid=' . $sku . '&name=' . $prod);	
}

else{
    array_push($_SESSION['cart'], $id);

    header('Location: ../cart.php?action=add&productid=' . $sku . '&name=' . $prod);
}
?>
