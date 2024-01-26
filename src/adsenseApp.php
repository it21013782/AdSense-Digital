<?php 

	require 'config.php';

	$fname     = $_POST['fname'];
	$lname     = $_POST['lname'];
	$email     = $_POST['email'];
	$phone     = $_POST['phone'];
	$location  = $_POST['location'];
	$position  = $_POST['position'];
	$beginner  = $_POST['beginner'];
	$message   = $_POST['message'];

	$sql = "INSERT INTO apply (fname,lname,email,phone,location,position,message) VALUES ('$fname','$lname','$email','$phone','$location','$position','$message')";

	if ($con -> query($sql)) {
		echo "Inserted Successfully";
	} else {
		echo "Error:" . $con->error;
	}

	$con->close();

	$target_direct = "CV/";
	$target_file = $target_direct . basename($_FILES['adsenseCV']['name']);
	if (isset($_FILES['adsenseCV'])) {
		if (move_uploaded_file($_FILES["adsenseCV"]["tmp_name"],$target_file)) {
			echo "The file".basename($_FILES["adsenseCV"]["name"])."is uploaded";
		} else {
			echo "Error whil uploading your file.";
		}
	} else {
		echo "File not available";
	}

 ?>