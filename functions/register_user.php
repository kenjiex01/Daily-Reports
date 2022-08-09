<?php
session_start();
include("connection.php");

$username 	= $_POST['username'];
$password 	= $_POST['password'];
$user_type  = $_POST['usertype'];
$enc_pass 	= base64_encode($password);


	$sql = "INSERT INTO account_tbl (username, password, user_type) VALUES ('$username','$enc_pass','$user_type')";

	if ($conn->query($sql) === TRUE) {
	  echo "Registration Successful.";
	} else {
	  echo "Error Adding New data: " . $sql . $conn->error;
	}

$conn->close();

?>