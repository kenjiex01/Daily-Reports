<?php
include('connection.php');
session_start();

$current_date = date("d-m-Y");
$tom_date = date('d-m-Y', strtotime('+1 day', strtotime($current_date)));

$sql = "SELECT SUM(copies) FROM xerox_table WHERE date_added = '$current_date'";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	echo $row['SUM(copies)'];
	  }
	}else{
		echo 0;
	}

?>