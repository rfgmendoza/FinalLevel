<?php


	$host="sulley.cah.ucf.edu"; // Host name 
    $username="as932055"; // Mysql username 
    $password="01knights!"; // Mysql password 
    $db_name="as932055"; // Database name 
    $tbl_name="Products"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$productId = $_GET['id'];

$query = "DELETE FROM Products WHERE indentifyer='$productId'";	 
$result = mysql_query($query); 

echo "<script type='text/javascript'>alert('Product Deleted');</script>";
echo "<script type='text/javascript'>window.location=\"admin.php\";</script>";

?>