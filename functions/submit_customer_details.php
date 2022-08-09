<?php
session_start();
include("connection.php");

$customer_id = $_POST['customer_id'];
$customer_first_name = $_POST['customer_f_name'];
$customer_middle_name = $_POST['customer_m_name'];
$customer_last_name = $_POST['customer_l_name'];
$customer_contact_number = $_POST['customer_contact_num'];
$customer_address = $_POST['customer_address'];

$current_date		= date('d-m-Y');
$user_id			= $_SESSION['user_id'];


if($customer_id != ""){
//update customer details
$sql = "UPDATE customer_details SET first_name = '$customer_first_name', middle_name = '$customer_middle_name', last_name = '$customer_last_name', contact_number = '$customer_contact_number', address = '$customer_address' WHERE id = '$customer_id'";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error updating record: " . $conn->error;
}

	if ($conn->query($sql) === TRUE) {
	$action = "Updated Customer with a ID : ".$customer_id;
	include('user_logs.php');
  		echo "Updated Customer Details (ID : ".$customer_id.")";
  		$_SESSION['submitted'] = "Updated Customer Details (ID : ".$customer_id.")";
	  	header('location: ../customer_management.php');
	} else {
	  echo "Error Inserting Payment : " . $sql . $conn->error;
	}

$conn->close();
}//if
else{



//inserting new customer details
	$sql = "INSERT INTO customer_details (first_name, middle_name, last_name, contact_number, address, date_added, added_by) VALUES ('$customer_first_name', '$customer_middle_name', '$customer_last_name', '$customer_contact_number', '$customer_address', '$current_date', '$user_id')";

	if ($conn->query($sql) === TRUE) {
		$action = "Added a new Customer with a Full Name of ". $customer_first_name . " " . $customer_middle_name . " " . $customer_last_name;
		include('user_logs.php');

	  echo "New Customer Details Added Successfully.";
	  $_SESSION['submitted'] = "New Customer Details Added Successfully.";
	  header('location: ../customer_management.php');
	} else {
	  echo "Error Inserting Customer Details : " . $sql . $conn->error;
	}

$conn->close();
}//else

?>