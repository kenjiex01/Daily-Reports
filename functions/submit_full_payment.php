<?php
include("connection.php");
session_start();

$invoice 			= $_POST['full_payment_invoice'];
$classification		= $_POST['full_payment_classification'];
$customer_name 		= $_POST['full_payment_customer_name'];
$amount				= $_POST['full_payment_amount'];
$cheque				= $_POST['full_payment_cheque'];
$cheque_no			= $_POST['cheque_no'];
$current_date		= date('d-m-Y');
$added_by			= $_SESSION['user_id'];
$yes_date			= date('d-m-Y', strtotime('-1 day', strtotime($current_date)));//less 1 day

//inserting collections
	$sql = "INSERT INTO payment (inv_no, classification, customer_name, amount, payment_type, is_cheque, cheque_no, date_added, added_by) VALUES ('$invoice', '$classification', '$customer_name', '$amount', 'Collection', '$cheque', '$cheque_no', '$yes_date', '$added_by')";

	if ($conn->query($sql) === TRUE) {
	  // echo "Full Payment Successful.";
	} else {
	  echo "Error Inserting Payment : " . $sql . $conn->error;
	}


//inserting sales
	$sql = "INSERT INTO payment (inv_no, classification, customer_name, amount, payment_type, is_cheque, cheque_no, date_added, added_by) VALUES ('$invoice', '$classification', '$customer_name', '$amount', 'Sales', '$cheque', '$cheque_no', '$yes_date', '$added_by')";

	if ($conn->query($sql) === TRUE) {
		$action = "Added a Full payment of Php".number_format($amount,2). " with Receipt No of: ".$invoice;
		include('user_logs.php');

	  echo "Full Payment Successful.";
	} else {
	  echo "Error Inserting Payment : " . $sql . $conn->error;
	}

$conn->close();

?>