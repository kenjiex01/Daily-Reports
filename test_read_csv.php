<?php
include('./functions/connection.php');
ini_set('max_execution_time', 0); // 0 = Unlimited
echo "<table>";
$file = fopen('csv_files/Class_n.csv', 'r');
$column_count = 0;
$counter = 5;
$frame_class = "N";
while (($line = fgetcsv($file)) !== FALSE) {
array_shift($line);
$a = 0;
$b = 14;
if($column_count == 0){

}else{
	$length = "";
   //$line[0] = '1004000018' in first iteration
	while($a <= $b){
	
	if($a == 0 AND $column_count == 1){
	$length = 7 ;
	}
	elseif($a == 1){
	$length = 8;
	}
	elseif($a == 2){
		$length = 9;
	}
	elseif ($a == 3) {
		$length = 10;
	}
	elseif ($a == 4) {
		$length = 12;
	}
	elseif ($a == 5) {
		$length = 14;
	}
	elseif ($a == 6) {
		$length = 16;
	}
	elseif ($a == 7) {
		$length = 18;
	}
	elseif ($a == 8) {
		$length = 20;
	}
	elseif ($a == 9) {
		$length = 22;
	}
	elseif ($a == 10) {
		$length = 24;
	}
	elseif ($a == 11) {
		$length = 26;
	}
	elseif ($a == 12) {
		$length = 28;
	}
	elseif ($a == 13) {
		$length = 30;
	}
	elseif ($a == 14) {
		$length = 36;
	}else {
		$length = "";
	}
	$price = $line[$a];
	$sql = "INSERT INTO frames_prize (frame_length, frame_width, price, class) VALUES ('$length', '$counter', '$price', '$frame_class')";

	if ($conn->query($sql) === TRUE) {
		echo $line[$a];
	} else {
	  echo "Error Adding New data: " . $sql . $conn->error;
	}

	$a++;
	}
echo "<br>";
	$counter++;
}
$column_count++;
   // print_r($line)."<br>";
}
fclose($file);
echo "</table>";

?>