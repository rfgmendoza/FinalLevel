<?php

	$host="sulley.cah.ucf.edu"; // Host name 
    $username="as932055"; // Mysql username 
    $password="01knights!"; // Mysql password 
    $db_name="as932055"; // Database name 
    $tbl_name="Products"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// define number and name
$productId=$_GET['id'];
$productImage=$_POST['productImage'];
$productName=$_POST['productName'];
$productCategory=$_POST['productCategory'];
$productSku=$_POST['productSku'];
$productQty=$_POST['productQty'];
$productPrice=$_POST['productPrice'];
$productRating=$_POST['productRating'];
$productConsole=$_POST['productConsole'];
$productCreator=$_POST['productCreator'];

$sql="UPDATE $tbl_name SET product_name=IF(LENGTH('$productName')=0, product_name, '$productName'), category=IF(LENGTH('$productCategory')=0, category, '$productCategory'), sku=IF(LENGTH('$productSku')=0, sku, '$productSku'), price=IF(LENGTH('$productPrice')=0, price, '$productPrice'), product_image=IF(LENGTH('$productImage')=0, product_image, '$productImage'), rating=IF(LENGTH('$productRating')=0, rating, '$productRating'), gaming_console=IF(LENGTH('$productConsole')=0, gaming_console, '$productConsole'), creator=IF(LENGTH('$productCreator')=0, creator, '$productCreator'), qty=IF(LENGTH('$productQty')=0, qty, '$productQty') WHERE indentifyer='$productId'"; 
$result = mysql_query($sql); 

echo "<script type='text/javascript'>alert('Product Revised');</script>";
echo "<script type='text/javascript'>window.location=\"admin.php\";</script>";


?>
