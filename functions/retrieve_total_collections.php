<?php
include('connection.php');
session_start();

$current_date = date("d-m-Y");
$yes_date = date('d-m-Y', strtotime('-1 day', strtotime($current_date)));//less 1 day

$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$yes_date' AND payment_type = 'Collection' ";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	echo number_format($row['SUM(amount)'],2);
	  }
	}else{
		
	}

?>