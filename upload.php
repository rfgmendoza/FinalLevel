<?php

	require db_connect.php;
	if(isset($_POST['upload'])){

		$sql="INSERT INTO Products (Product Name, Category, Price, Sales Price, Product Image) VALUES ('$_POST[Title]', '$_POST[Category]', '$_POST[Price]', '$_POST[Sales Price]', '$_POST[Image]')";
		mysqli_query($sql);
		
	}


?>
