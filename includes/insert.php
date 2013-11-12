<?php
	$con=mysqli_connect("sulley.cah.ucf.edu","as932055","01knights!","as932055");
	// Check connection
	if (mysqli_connect_errno())
	  {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	$sql="INSERT INTO Shipping (fName, lName, address, state, zipcode, phone, ccNum, cvs, expDate)
	VALUES
	('$_POST[firstName]','$_POST[lastName]','$_POST[street]','$_POST[state]','$_POST[zip]','$_POST[phone]','$_POST[credit]','$_POST[cvs]','$_POST[expire]')";

	if (!mysqli_query($con,$sql))
	  {
		die('Error: ' . mysqli_error($con));
	  }
	echo "1 record added";
	header('Location: ../home.php');
	
	mysqli_close($con);
?>