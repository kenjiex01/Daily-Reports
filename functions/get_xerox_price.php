<?php
include('connection.php');

$current_date = date("d-m-Y");
$a = 1;
$sql = "SELECT * FROM item_master_list WHERE item_class ='Xerox' ORDER BY id";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	if($a == 1){
	  		$checked = "checked";
	  	}else
	  	{
	  		$checked = "";
	  	}

	  	echo '
	  	<label class="radio-inline" for="example-inline-radio'.$a.'">
            <input type="radio" id="bond_paper_size" name="bond_paper_size" value="'.$row["item_name"].'" '.$checked.'/> '.$row["item_name"].'
        </label>
	  	';

	  	$a++;

	  }
	}else{
		
	}

?>