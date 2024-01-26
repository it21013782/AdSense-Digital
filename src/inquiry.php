<?php
	require 'config.php';

	$fullname = $_POST["fullname"];
	$fullemail = $_POST["fullemail"];
	$more = $_POST["more"];

	$sql = "INSERT INTO inquiries(cus_name, cus_email, cus_inq) VALUES ('$fullname', '$fullemail', '$more')";

	// Check connection
	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Submitted successfully!')</script>" ;
	}
	else{
		echo "<script> alert('ERROR')</script>" ;
		echo $sql;
	}
?>