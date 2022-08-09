<?php
include('connection.php');
session_start();

$current_date = date("d-m-Y");
// $current_date = date('d-m-Y', strtotime($current_date . ' +1 day'));

$sql = "SELECT SUM(total_amount) FROM xerox_table WHERE date_added = '$current_date' ";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	echo number_format($row['SUM(total_amount)'],2);
	  }
	}else{
		
	}

?>