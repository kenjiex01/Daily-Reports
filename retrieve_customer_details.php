<?php
include('./functions/connection.php');
session_start();

$current_date = date("d-m-Y");
$current_date = date('d-m-Y', strtotime($current_date . ' +1 day'));

$searching = $_GET['searching'];




echo '<table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="customer">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer Full Name</th>
                                <th>Customer Contact Number</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';



if($searching == ''){

$sql = "SELECT * FROM customer_details ORDER BY id desc LIMIT 10 ";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	echo "<tr>";
	  	echo "<td>" . $row['id'] . "</td>";
	  	echo "<td>". $row['first_name'] . " ". $row['middle_name'] . " " . $row['last_name'] . "</td>";
	  	echo "<td>" . $row['contact_number'] . "</td>";
	  	echo "<td>" . $row['address'] . "</td>";
	  	echo "<td><a href='customer_management.php?id=".$row['id']."' ><button class='btn btn-app-cyan' id='edit_customer' name='edit_customer'><i class='fa fa-pencil'></i> Edit</button></a> &nbsp";
	  	echo "<a href='customer_management.php?delete_id=".$row['id']."' ><button class='btn btn-danger' id='delete_customer' name='delete_customer'><i class='fa fa-trash'></i> Delete</button></td>";
	  	echo "</tr>";
	  }
	}else{
		
	}

}
else{
	$sql = "SELECT * FROM customer_details WHERE first_name LIKE '%$searching%' OR middle_name LIKE '%$searching%' OR last_name LIKE '%$searching%' OR contact_number LIKE '%$searching%' OR address LIKE '%$searching%' OR id LIKE '%$searching%' ORDER BY id desc LIMIT 10 ";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	echo "<tr>";
	  	echo "<td>" . $row['id'] . "</td>";
	  	echo "<td>". $row['first_name'] . " ". $row['middle_name'] . " " . $row['last_name'] . "</td>";
	  	echo "<td>" . $row['contact_number'] . "</td>";
	  	echo "<td>" . $row['address'] . "</td>";
	  	echo "<td><a href='customer_management.php?id=".$row['id']."' ><button class='btn btn-app-cyan' id='edit_customer' name='edit_customer'><i class='fa fa-pencil'></i> Edit</button></a> &nbsp";
	  	echo "<a href='customer_management.php?delete_id=".$row['id']."' ><button class='btn btn-danger' id='delete_customer' name='delete_customer'><i class='fa fa-trash'></i> Delete</button></td>";
	  	echo "</tr>";
	  }
	}else{
		
	}
}





echo'           <div id="customer_table"></div>
        </tbody>
    </table>';

?>