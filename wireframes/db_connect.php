<?php

    $host="sulley.cah.ucf.edu"; // Host name 
    $username="mi563669"; // Mysql username 
    $password="66333308"; // Mysql password 
    $db_name="mi563669"; // Database name 
    $tbl_name="products"; // Table name

	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	 

?>