<?php
include("connection.php");
session_start();

$invoice 			= $_POST['invoice'];
$classification		= $_POST['classification'];
$customer_name 		= $_POST['customer_name'];
$paid_amount		= $_POST['paid_amount'];
$cheque				= $_POST['is_cheque'];
$cheque_no			= $_POST['cheque_no'];
$current_date		= date('d-m-Y');
$added_by			= $_SESSION['user_id'];
$yes_date = date('d-m-Y', strtotime('-1 day', strtotime($current_date)));//less 1 day

//inserting collections
	$sql = "INSERT INTO payment (inv_no, classification, customer_name, amount, payment_type, is_cheque, cheque_no, date_added, added_by) VALUES ('$invoice', '$classification', '$customer_name', '$paid_amount', 'Collection', '$cheque', '$cheque_no', '$yes_date', '$added_by')";

	if ($conn->query($sql) === TRUE) {
	  // echo "Full Payment Successful.";
		$action = "Added a Collection of Php".number_format($paid_amount,2). " with Receipt No of: ".$invoice;
		include('user_logs.php');

	  echo "Successfully added a new Collection";
	} else {
	  echo "Error Inserting Payment : " . $sql . $conn->error;
	}


$conn->close();

?>