<?php 
session_start();
include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];
$enc_pass = base64_encode($password);

$sql = "SELECT * FROM account_tbl WHERE username = '$username' AND password = '$enc_pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	$_SESSION['user_id'] = $row['id'];
  	$_SESSION['username'] = $row['username'];
  	$_SESSION['user_type'] = $row['user_type'];
  	echo "1";
  }
} else {
  echo "Incorrect Password!";
}
$conn->close();



?>