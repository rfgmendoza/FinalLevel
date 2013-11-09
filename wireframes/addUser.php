<?php

	$host="sulley.cah.ucf.edu"; // Host name 
    $username="as932055"; // Mysql username 
    $password="01knights!"; // Mysql password 
    $db_name="as932055"; // Database name 
    $tbl_name="Directory"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// define number and name
$username=$_POST['username'];
$password=$_POST['password'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$phone=$_POST['phone'];

$sql="INSERT INTO $tbl_name (username, password, first_name, last_name, street, city, state, zip, phone) VALUES ('$username','$password','$firstName','$lastName','$street','$city', '$state','$zip','$phone')";
$result = mysql_query($sql); 

echo "<script type='text/javascript'>alert('User Added');</script>";
echo "<script type='text/javascript'>window.location=\"userLog.php\";</script>";


?>
