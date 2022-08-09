<?php
include('connection.php');

$current_date = date("d-m-Y");
$current_date = date('d-m-Y', strtotime($current_date . ' +1 day'));

$sql = "SELECT * FROM item_master_list";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	if($row['price'] != ""){
	  		$color = "";
	  	}else{
	  		$color = "red";
	  	}
	  	echo "<tr style='color:".$color.";'>";
	  	echo "<td>".$row['id']."</td>";
	  	echo "<td>".$row['item_name']."</td>";
	  	echo "<td>".$row['price']."</td>";
	  	echo "<td>".$row['item_class']."</td>";
	  	echo "<td>
	  	<a href='item_master_list.php?edit_id=".$row['id']."'><button id='edit_item' class='btn btn-success' data-toggle='tooltip' data-placement='left' title='Edit Item'><i class='fa fa-pencil'></i></button></a>
	  	<a href='item_master_list.php?delete_id=".$row['id']."'><button id='delete_item' class='btn btn-danger' data-toggle='tooltip' data-placement='right' title='Delete Item'><i class='fa fa-trash'></i></button></a>
	  	</td>";
	  	echo "</tr>";
	  }
	}else{
		
	}

?>