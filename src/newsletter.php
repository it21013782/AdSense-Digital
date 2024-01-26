<?php
	require 'config.php';
	
	$email = $_POST["email"];
	
	$sql = "INSERT INTO newsletter(email) VALUES ('$email')";

	// Check connection
	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Submitted successfully!')</script>" ;
	}
	else{
		echo "<script> alert('ERROR')</script>" ;
		echo $sql;
	}
	
?>