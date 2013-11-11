<?php
session_start();

// get the product sku
$sku = $_GET['sku'];
$prod = $_GET['prod'];

/* 
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

// check if the item is in the array, if it is, do not add
if(in_array($sku, $_SESSION['cart'])){
    // redirect to cart and tell the user it was added
    header('Location: ../cart.php?action=exists&id' . $sku . '&name=' . $prod);	
}

// else, add the item to the array
else{
    array_push($_SESSION['cart'], $sku);
    
    // redirect to cart and tell the user it was added
    header('Location: ../cart.php?action=add&id' . $sku . '&name=' . $prod);
}
?>
