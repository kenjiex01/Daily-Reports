<?php
include('connection.php');

$current_date = date("d-m-Y");
$bond_paper_size = $_POST['bond_paper_size'];
$sql = "SELECT * FROM item_master_list WHERE item_name = '$bond_paper_size'";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	echo $row['price'];
	  }
	}
?>