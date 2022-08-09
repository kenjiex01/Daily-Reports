<?php
session_start();
include("connection.php");


$cd_1000 		= $_POST['cd_1000'];
$cd_500			= $_POST['cd_500'];
$cd_200			= $_POST['cd_200'];
$cd_100 		= $_POST['cd_100'];
$cd_50 			= $_POST['cd_50'];
$cd_20 			= $_POST['cd_20'];
$cd_10 			= $_POST['cd_10'];
$cd_5 			= $_POST['cd_5'];
$cd_1 			= $_POST['cd_1'];
$cd_25_cents 	= $_POST['cd_25_cents'];
$cd_coinbag 	= $_POST['cd_coinbag'];
$meter_reading 	= $_POST['meter_reading'];


$added_by 		= $_SESSION['user_id'];
$current_time 	= date("H:i:s");
$current_date 	= date("d-m-Y");
$yes_date = date('d-m-Y', strtotime('-1 day', strtotime($current_date)));//less 1 day
$added_date 	= date('d-m-Y', strtotime($current_date . ' +1 day'));

$total_amount	= ($cd_1000 * 1000)  + ($cd_500 * 500) + ($cd_200 * 200) + ($cd_100 * 100) + ($cd_50 * 50) + ($cd_20 * 20) + ($cd_10 * 10) + ($cd_5 * 5) + ($cd_1 * 1) + ($cd_25_cents * .25);


	$sql1 = "INSERT INTO cash_inputs (coinbags, added_by, date_added) VALUES ('$cd_coinbag', '$added_by', '$yes_date')";

	if ($conn->query($sql1) === TRUE) {
		$action = "Added a Coinbag count : Php".number_format($cd_coinbag,2);
		include('user_logs.php');
	} else {
	  echo "Error Adding New data: " . $sql1 . $conn->error;
	}


	$sql = "INSERT INTO money_count (cash_1000,cash_500,cash_200,cash_100,cash_50,cash_20,cash_10,cash_5,cash_1,cash_25_cents,date_added,time_added,added_by) VALUES ('$cd_1000','$cd_500','$cd_200','$cd_100','$cd_50','$cd_20','$cd_10','$cd_5','$cd_1','$cd_25_cents','$yes_date','$current_time','$added_by')";

	if ($conn->query($sql) === TRUE) {
		$action = "Added a Cash Denomination with a total of Php".number_format($total_amount,2);
		include('user_logs.php');
	  echo "Cash Denomination Saved Successfully.";
	} else {
	  echo "Error Adding New data: " . $sql . $conn->error;
	}

	$sql2 = "INSERT INTO meter_reading (date_reading, reading) VALUES ('$yes_date', '$meter_reading')";
	if ($conn->query($sql2) === TRUE) {
		$action = "Added a Meter Reading count : ".number_format($meter_reading);
		include('user_logs.php');
	} else {
	  echo "Error Adding New data: " . $sql2 . $conn->error;
	}

$conn->close();

?>