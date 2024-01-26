<?php
	require 'config.php';
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$mail = $_POST["email"];
	$mobile = $_POST["mobile"];
	$compname = $_POST["companyname"];
	$compregno = $_POST["companyid"];
	$staddress = $_POST["staddress"];
	$staddress2 = $_POST["staddress2"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zipcode = $_POST["zipcode"];
	$country = $_POST["country"];
	$cardname = $_POST["cname"];
	$cardnum = $_POST["cnum"];
	$expmon = $_POST["expmonth"];
	$expyr = $_POST["expyear"];
	$cvv = $_POST["cvv"];
	$password = $_POST["psw"];
	$conpassword = $_POST["cnfrmpwd"];
	
	
	$sql = "INSERT INTO user_registration(user_firstname, user_lastname, mail, mobile, comp_name, comp_regno, staddress, staddress2, city, state, zipcode, country, card_name, card_num, exp_mon, exp_yr, cvv, pwd, cpwd) VALUES ('$firstname', '$lastname', '$mail', '$mobile', '$compname', '$compregno', '$staddress',	'$staddress2', '$city',	'$state', '$zipcode', '$country', '$cardname', '$cardnum', '$expmon', '$expyr', '$cvv', '$password', '$conpassword')";

	// Check connection
	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Registered successfully!')</script>" ;
	}
	else{
		echo "<script> alert('ERROR')</script>" ;
		echo $sql;
	}
	
?>