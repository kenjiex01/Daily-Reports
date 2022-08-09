<?php
include('./functions/connection.php');


$length = $_POST['length_input'];
$width = $_POST['width_input'];
$frame_class = $_POST['class_input'];
$with_mattboard = $_POST['with_mattboard'];
$double_mattboard = $_POST['double_mattboard'];
$double_frame = $_POST['double_frame'];
$expander_class = $_POST['expander_class'];
$expander_size = $_POST['expander_size'];
$with_design = $_POST['with_design'];
$with_double_glass = $_POST['with_double_glass'];

$a = 0;
$b = 4;

//computation ng length
$sql = "SELECT * FROM frame_base_details WHERE class='$frame_class' ";
$result = $conn->query($sql);



	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	$length_multiplier = $row['length_multiplier'];
	  	$width_multiplier = $row['width_multiplier'];
	  	$base_price = $row['base_price'];

	  }
	}else{
		
	}

$lagtaw_length = abs($length - 5); 
$length_compute = ($length_multiplier * $lagtaw_length) + $base_price;


$lagtaw_width = abs($width - 7);
$final_width_multiplier = ($lagtaw_width * .7) + $length_multiplier;
// $width_compute = 
$final_width = ($lagtaw_width * $width_multiplier) + $base_price;
$final_total =  ($final_width_multiplier * $lagtaw_length) + $final_width;





//computation ng width
$sql = "SELECT * FROM frame_base_details WHERE class='Mattboard' ";
$result = $conn->query($sql);


	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	$matt_length_multiplier = $row['length_multiplier'];
	  	$matt_width_multiplier = $row['width_multiplier'];
	  	$matt_base_price = $row['base_price'];

	  }
	}else{
		
	}

while($b <= $width){
	$a++;
	$b++;
	$b++;
}
	$matt_lagtaw_width = $a -1;

$matt_lagtaw_length = abs($length - 5); 
$matt_length_compute = ($matt_length_multiplier * $matt_lagtaw_length) + $matt_base_price;


$matt_width_mul = ($matt_lagtaw_width * .6 )+ $matt_length_multiplier;
$matt_final_width_multiplier = (($width / 2)*$matt_width_multiplier) + ($matt_width_mul * $matt_lagtaw_length);
$matt_final_width = ($matt_lagtaw_width * $matt_width_multiplier) + $matt_base_price;

$matt_final_total =  ($matt_final_width_multiplier * $matt_lagtaw_length) + $matt_final_width;


$matts_final_width_multiplier = ($matt_lagtaw_width * $matt_length_multiplier) ;




if($double_frame != ""){
	$double_frame_length = $length + $expander_size;
	$double_frame_width = $width + $expander_size;



	if($expander_class == "a" OR $expander_class == "A"){
	$expander_multiplier = 4;
	}
	elseif($expander_class == "b" OR $expander_class == "B"){
	$expander_multiplier = 5;	
	}
	elseif($expander_class == "c" OR $expander_class == "C"){
	$expander_multiplier = 6;	
	}
	elseif($expander_class == "d" OR $expander_class == "D"){
	$expander_multiplier = 7;	
	}
	elseif($expander_class == "e" OR $expander_class == "E"){
	$expander_multiplier = 8;	
	}
	elseif($expander_class == "f" OR $expander_class == "F"){
	$expander_multiplier = 9;	
	}
	elseif($expander_class == "g" OR $expander_class == "G"){
	$expander_multiplier = 10;
	}
	elseif($expander_class == "h" OR $expander_class == "H"){
	$expander_multiplier = 12;
	}
	elseif($expander_class == "i" OR $expander_class == "I"){
	$expander_multiplier = 14;
	}
	elseif($expander_class == "j" OR $expander_class == "J"){
	$expander_multiplier = 16;
	}
	elseif($expander_class == "k" OR $expander_class == "K"){
	$expander_multiplier = 20;
	}
	elseif($expander_class == "l" OR $expander_class == "L"){
	$expander_multiplier = 24;
	}
	elseif($expander_class == "m" OR $expander_class == "M"){
	$expander_multiplier = 28;
	}
	elseif($expander_class == "n" OR $expander_class == "N"){
	$expander_multiplier = 32;
	}
	else{
		$expander_multiplier = 0;
	}



	$double_frame_total = ($double_frame_width + $double_frame_length) * $expander_multiplier;

	if($with_mattboard != ""){
		if($double_mattboard != ""){
			if($with_design != ""){
				$total_amount =  (($matt_final_width_multiplier * 2) + $final_total)+ $double_frame_total+100; // printing of double matt and with double frame with design
			}else{
				$total_amount = (($matt_final_width_multiplier * 2) + $final_total)+ $double_frame_total; // printing of double matt and with double frame
			}
		}else{
			$total_amount = ($matt_final_width_multiplier + $final_total) + $double_frame_total; // printing of single matt and with double frame
		}

	}else{
	$total_amount = $final_total + $double_frame_total; // printing of no matt and with double frame
	}


}else{

if($with_mattboard != ""){
	if($double_mattboard != ""){
		if($with_design != ""){
			$total_amount = ($matt_final_width_multiplier * 2) + $final_total+100;// printing of double matt with design
		}
		else{
			$total_amount = ($matt_final_width_multiplier * 2) + $final_total;// printing of double matt
		}
	}else{
		$total_amount = $matt_final_width_multiplier + $final_total;// printing of single matt
	}

}else{
$total_amount = $final_total;// printing of no matt
}
}


if($with_double_glass == ""){
$total_amount = $total_amount;
}else{
$total_amount = (($length * $width) * .45 ) + $total_amount;
}


if($length == "" OR $width == ""){
	$total_amount = 0;
}

echo number_format($total_amount,2);
?>