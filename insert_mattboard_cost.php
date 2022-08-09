<?php
include('./functions/connection.php');
ini_set('max_execution_time', 0); // 0 = Unlimited
echo "<table>";
$file = fopen('csv_files/mattboard.csv', 'r');
$column_count = 0;
$counter = 5;
while (($line = fgetcsv($file)) !== FALSE) {
array_shift($line);
$a = 0;
$b = 16;
if($column_count == 0){

}else{
$length = 4;
	
   //$line[0] = '1004000018' in first iteration
	while($a <= $b){
	

	$price = $line[$a];
	$sql = "INSERT INTO mattboard_cost (matt_length, matt_width, price) VALUES ('$length', '$counter', '$price')";

	if ($conn->query($sql) === TRUE) {
		echo $line[$a];
	} else {
	  echo "Error Adding New data: " . $sql . $conn->error;
	}

	$a++;
	$length++;
	$length++;
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