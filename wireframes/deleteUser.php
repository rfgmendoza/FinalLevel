<?php


	$host="sulley.cah.ucf.edu"; // Host name 
    $username="as932055"; // Mysql username 
    $password="01knights!"; // Mysql password 
    $db_name="as932055"; // Database name 
    $tbl_name="Directory"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$key = $_GET['id'];


$query = "DELETE FROM Directory WHERE `key`='$key'";	 
$result = mysql_query($query); 

echo "<script type='text/javascript'>alert('User Deleted');</script>";
echo "<script type='text/javascript'>window.location=\"userLog.php\";</script>";

?>