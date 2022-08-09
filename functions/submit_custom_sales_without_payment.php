<?php
session_start();
include("connection.php");

$invoice 			= $_POST['invoice'];
$classification		= $_POST['classification'];
$customer_name 		= $_POST['customer_name'];
$total_amount		= $_POST['total_amount'];
$current_date		= date('d-m-Y');
$user_id			= $_SESSION['user_id'];
$yes_date = date('d-m-Y', strtotime('-1 day', strtotime($current_date)));//less 1 day

//inserting sales
	$sql = "INSERT INTO payment (inv_no, classification, customer_name, amount, payment_type, date_added, added_by) VALUES ('$invoice', '$classification', '$customer_name', '$total_amount', 'Sales', '$yes_date', '$user_id')";

	if ($conn->query($sql) === TRUE) {
		$action = "Added a Sales without Payment of Php".number_format($total_amount,2). " with Receipt No of: ".$invoice;
		include('user_logs.php');

	  echo "Sales Added Successful.";
	} else {
	  echo "Error Inserting Payment : " . $sql . $conn->error;
	}

$conn->close();

?>