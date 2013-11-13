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
$username=$_GET['username'];
$password=$_GET['password'];
$firstName=$_GET['firstName'];
$lastName=$_GET['lastName'];
$street=$_GET['street'];
$city=$_GET['city'];
$state=$_GET['state'];
$zip=$_GET['zip'];
$phone=$_GET['phone'];
$email=$_GET['email'];

$sql="INSERT INTO $tbl_name (username, password, first_name, last_name, street, city, state, zip, phone, email) VALUES ('$username','$password','$firstName','$lastName','$street','$city', '$state','$zip','$phone', '$email')";
$result = mysql_query($sql); 

echo "<script type='text/javascript'>alert('User Added');</script>";

if ($_GET['register']){
	echo "<script type='text/javascript'>window.location=\"registration.php\";</script>";
}
else{
	echo "<script type='text/javascript'>window.location=\"userLog.php\";</script>";
}


?>
