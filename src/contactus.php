<?php
	require 'config.php';

	$cfirstname = $_POST["cfirstname"];
	$clastname = $_POST["clastname"];
	$cphone = $_POST["cphone"];
	$cbudget = $_POST["cbudget"];
	$cmore = $_POST["cmore"];

	$sql = "INSERT INTO inquiries(cfirstname, clastname, cphone, cbudget, cmore) VALUES ('$cfirstname', '$clastname', '$cphone', '$cbudget', '$cmore')";

	// Check connection
	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Submitted successfully!')</script>" ;
	}
	else{
		echo "<script> alert('ERROR')</script>" ;
		echo $sql;
	}
?>