<?php

    $host="sulley.cah.ucf.edu"; // Host name 
    $username="as932055"; // Mysql username 
    $password="01knights!"; // Mysql password 
    $db_name="as932055"; // Database name 
    $tbl_name="Products"; // Table name

	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	 

?>