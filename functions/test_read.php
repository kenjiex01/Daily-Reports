<?php 
date_default_timezone_set('Asia/Manila');
$file=fopen("try_bio.TXT","r");

$i=0;

$tot_time = "00:00:00";
$line=array();
while(($data=fgetcsv($file,1000,"\t"))!==FALSE){
/*if($i>0){
$data[0]="";
$data[1]="";
$data[3]="";
$data[4]="";
$data[5]="";
$data[6]="";

//unset($data[0],$data[1],$data[3],$data[4],$data[5],$data[6]);
$line[]=$data;
} 
$i++;*/
if($i == 0 OR $data[2] != "14"){
	
}else{
print_r(array_values($data));
$date_time = explode(" ", $data[6]);	
// $tot_time = $date_time[1] + $tot_time;
$tot_time .= strtotime($tot_time)+strtotime($date_time[1]);
$tot_time = date("H:i:s",strtotime($tot_time));
echo $date_time[1];
echo "<br>";

}
$i++;
foreach($data as $d){
if($data[0]){
//echo $d." | ";
}
else{
}
}

}

fclose($file);
//array_shift($line);

//$converted=fopen("try_bio.txt","w");

//foreach($line as $li){
//fputcsv($converted,$li);
//print_r(array_values($li));
//}
//fclose($converted);

// echo "import successful";

?>