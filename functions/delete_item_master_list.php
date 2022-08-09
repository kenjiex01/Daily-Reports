<?php
include('connection.php');
session_start();

$delete_id = $_POST['delete_id'];
// sql to delete a record
$sql = "DELETE FROM item_master_list WHERE id='$delete_id'";

if ($conn->query($sql) === TRUE) {
	$action = "Deleted Item Details with a ID : ".$delete_id;
	include('user_logs.php');
} else {
  echo "Error deleting record: " . $conn->error;
}
?>