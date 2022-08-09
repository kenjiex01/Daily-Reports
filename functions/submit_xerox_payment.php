<?php
session_start();
include("connection.php");

$number_input 	= $_POST['number_input'];
$total_amount 	= $_POST['total_amount'];
$size  			= $_POST['bond_paper_size'];
$is_reduced		= $_POST['is_reduced'];
$added_by 		= $_SESSION['username'];

$current_time 	= date("H:i:s");
$current_date 	= date("d-m-Y");
$added_date 	= date('d-m-Y', strtotime($current_date . ' +1 day'));

	$sql = "INSERT INTO xerox_table (copies, paper_size, total_amount, time_added, date_added, added_by, is_reduced) VALUES ('$number_input','$size','$total_amount','$current_time','$current_date', '$added_by', '$is_reduced')";

	if ($conn->query($sql) === TRUE) {
		$action = "Added a Xerox payment of Php".number_format($total_amount,2). " with Bond Paper size of: ".$size. " and with a number of copies of: ".$number_input;
		include('user_logs.php');
	  echo "Xerox Payment Successful.";
	} else {
	  echo "Error Adding New data: " . $sql . $conn->error;
	}

$conn->close();

?>