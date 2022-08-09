<?php
include('connection.php');
session_start();

$current_date = date("d-m-Y");
// $current_date = date('d-m-Y', strtotime($current_date . ' +1 day'));

echo '<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th>Copies</th>
                                        <th>Size</th>
                                        <th>Total Amount</th>
                                        <th>Time Added</th>
                                    </tr>
                                </thead>
                                <tbody>
                            ';
$sql = "SELECT * FROM xerox_table WHERE date_added = '$current_date' order by time_added desc ";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	echo "<tr>";
	  	echo "<td>" . $row['copies']. "</td>";
	  	if($row['is_reduced'] == 'yes'){
	  	echo "<td>Reduced</td>";
	  	}else{
	  	echo "<td>" . $row['paper_size']. "</td>";
	  	}
	  	echo "<td>" . $row['total_amount']. "</td>";
	  	echo "<td>" . date('h:i:s A', strtotime($row['time_added'])). "</td>";
	  	// echo "<td>" . $row['date_added'] . "</td>";
	  	// echo '<td><button class="btn btn-app"><i class="fa fa-pencil"></i></button>&nbsp<button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>';
	  	echo "</tr>";
	  }
	}else{
		
	}
    echo '</tbody>
    </table>';


?>