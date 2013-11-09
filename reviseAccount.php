<?php

$host="sulley.cah.ucf.edu"; // Host name 
$username="as932055"; // Mysql username 
$password="01knights!"; // Mysql password 
$db_name="as932055"; // Database name 
$tbl_name="Directory"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");  

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// define number and name
$key=$_GET['id'];
$firstName=$_GET['firstName'];
$lastName=$_GET['lastName'];
$street=$_GET['street'];
$city=$_GET['city'];
$state=$_GET['state'];
$zip=$_GET['zip'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$userQuery =$_GET['user']; 

$sql="UPDATE $tbl_name SET first_name=IF(LENGTH('$firstName')=0, first_name, '$firstName'), last_name=IF(LENGTH('$lastName')=0, last_name, '$lastName'), street=IF(LENGTH('$street')=0, street, '$street'), city=IF(LENGTH('$city')=0, city, '$city'), state=IF(LENGTH('$state')=0, state, '$state'), zip=IF(LENGTH('$zip')=0, zip, '$zip'), phone=IF(LENGTH('$phone')=0, phone, '$phone'), email=IF(LENGTH('$email')=0, email, '$email') WHERE username='$userQuery'"; 
$result = mysql_query($sql); 

echo "<script type='text/javascript'>alert('Account Revised');</script>";
echo "<script type='text/javascript'>window.location=\"client.php\";</script>";


?>
