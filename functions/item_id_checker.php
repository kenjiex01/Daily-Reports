<?php 
include('./functions/connection.php');

$sql = "SELECT * FROM item_master_list WHERE id = '$item_id' ";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	$_SESSION['item_name'] = $row['item_name'];
	  	$_SESSION['price'] = $row['price'];
	  	$_SESSION['item_class'] = $row['item_class'];
	  }
	}else{
		
	}




?>