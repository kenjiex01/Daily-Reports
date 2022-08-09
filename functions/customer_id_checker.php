<?php 
include('./functions/connection.php');

$sql = "SELECT * FROM customer_details WHERE id = '$cus_id' ";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	$customer_fname = $row['first_name'];
	  	$customer_mname = $row['middle_name'];
	  	$customer_lname = $row['last_name'];
	  	$customer_contact_number = $row['contact_number'];
	  	$customer_address = $row['address'];
	  }
	}else{
		
	}




?>