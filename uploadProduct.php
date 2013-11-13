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
$productImage=$_POST['productImage'];
$productName=$_POST['productName'];
$productCategory=$_POST['productCategory'];
$productSku=$_POST['productSku'];
$productQty=$_POST['productQty'];
$productPrice=$_POST['productPrice'];
$productRating=$_POST['productRating'];
$productConsole=$_POST['productConsole'];
$productCreator=$_POST['productCreator'];

if ($_POST['productImage']==""){
	$productImage="img/noImage.jpg";
}
else{
	$productImage=$_POST['productImage'];
}

$sql="INSERT INTO $tbl_name (product_name, category, sku, price, product_image, rating, gaming_console, creator, qty) VALUES ('$productName','$productCategory','$productSku','$productPrice','$productImage','$productRating', '$productConsole','$productCreator','$productQty')";
$result = mysql_query($sql); 

echo "<script type='text/javascript'>alert('Product Uploaded');</script>";
echo "<script type='text/javascript'>window.location=\"admin.php\";</script>";


?>
