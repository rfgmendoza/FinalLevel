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
$key=$_GET['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$phone=$_POST['phone'];
 
$sql="UPDATE $tbl_name SET username=IF(LENGTH('$username')=0, username, '$username'), password=IF(LENGTH('$password')=0, password, '$password'), first_name=IF(LENGTH('$firstName')=0, first_name, '$firstName'), last_name=IF(LENGTH('$lastName')=0, last_name, '$lastName'), street=IF(LENGTH('$street')=0, street, '$street'), city=IF(LENGTH('$city')=0, city, '$city'), state=IF(LENGTH('$state')=0, state, '$state'), zip=IF(LENGTH('$zip')=0, zip, '$zip'), phone=IF(LENGTH('$phone')=0, phone, '$phone') WHERE `key`='$key'"; 
$result = mysql_query($sql); 
 
echo "<script type='text/javascript'>alert('User Revised');</script>";
echo "<script type='text/javascript'>window.location=\"userLog.php\";</script>";


?>
