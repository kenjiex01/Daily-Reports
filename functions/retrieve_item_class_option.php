<?php
include('connection.php');

$sql = "SELECT * FROM item_class";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	if($_SESSION['item_class'] == $row['item_class_name']){
	  	echo "<option value='". $row['item_class_name'] ."' selected>". $row['item_class_name'] ."</option>";
	  	}else{
	  	echo "<option value='". $row['item_class_name'] ."'>". $row['item_class_name'] ."</option>";
	  	}
	  }
	}else{
		
	}

?>