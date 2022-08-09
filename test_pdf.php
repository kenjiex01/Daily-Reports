<?php
session_start();
include('functions/connection.php');
include('assets/fpdf/fpdf.php');


$c_date = date('d-m-Y');
$current_date = date('d-m-Y', strtotime('-1 day', strtotime($c_date)));//less 1 day
$tom_date = date('d-m-Y', strtotime('+1 day', strtotime($c_date)));
// $current_date = date('d-m-Y');// current date 
$_SESSION['file_name'] = date("M-d-Y"). " (Daily Reports)";

//Start of Header
$pdf = new FPDF();
$pdf->AddPage('P','Legal');
$pdf->SetFont('arial','B',16);
//$pdf->Image("img/DMMMSU.png",70,8,30,30,'PNG');
//$pdf->Image("img/MLUC.jpg",270,8,30,30,'jpg');
$pdf->Cell(18,8,'',0);
$pdf->Cell(0, 5, "BASIC FRAMES & PHOTOGRAPHY",0,1,"C");

$pdf->Ln(3);
$pdf->SetFont("arial","",8);
$pdf->Cell(150,8,"Date: ".date('M d, Y'),0,0,"L");
$pdf->SetFont('arial','B',10,'C');
$pdf->Cell(50,8,'Prepared By : ' . $_SESSION['username'],0,0,"L");
$pdf->Ln(8);
$pdf->Ln(1);
//End of Header


$pdf->SetFont('arial','B',8,'C');
//$pdf->Cell(40,40,'',0,"C");
$pdf->Cell(100,8,'COLLECTIONS',1,0,"C");
$pdf->Cell(100,8,'Sales',1,0,"C");
$pdf->Ln(8);


$pdf->SetFont('arial','B',8,'C');
//$pdf->Cell(40,40,'',0,"C");
$pdf->Cell(30,8,'INV/JO #',1,0,"C");
$pdf->Cell(50,8,'CUSTOMER',1,0,"C");
$pdf->Cell(20,8,'AMOUNT',1,0,"C");

$pdf->Cell(30,8,'INV/JO #',1,0,"C");
$pdf->Cell(50,8,'CUSTOMER',1,0,"C");
$pdf->Cell(20,8,'AMOUNT',1,0,"C");
$pdf->Ln(8);



$sql = "SELECT COUNT(inv_no) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' ORDER BY is_cheque DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$col_count = $row['COUNT(inv_no)'];
	}
}
else{

}

$sql = "SELECT COUNT(inv_no) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Sales'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$sales_count = $row['COUNT(inv_no)'];
	}
}
else{

}

if($sales_count > $col_count){
	$countss = $sales_count-1;
}
else if($col_count > $sales_count){
	$countss = $col_count-1;
}
else{
	$countss = $sales_count-1;
}


$counter = 1;
$tot_sales = 0;
$tot_collection = 0;
$counting = 0;

while($counting <= $countss){
//get data of collections frome database
$sql = "SELECT * FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' LIMIT $counting,1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {

	$pdf->SetFont('arial','B',8,'C');
	//$pdf->Cell(40,40,'',0,"C");
	$pdf->Cell(30,8,$row['inv_no']." ( ".$row['classification']." )",1,0,"C");
	$pdf->Cell(50,8,$row['customer_name'],1,0,"C");
	$pdf->Cell(20,8,number_format($row['amount'],2),1,0,"R");
	$tot_collection = $tot_collection + $row['amount'];
	}
}
else{

	$pdf->SetFont('arial','B',8,'C');
	//$pdf->Cell(40,40,'',0,"C");
	$pdf->Cell(30,8,'',1,0,"C");
	$pdf->Cell(50,8,'',1,0,"C");
	$pdf->Cell(20,8,'',1,0,"R");

}


$sql1 = "SELECT * FROM payment WHERE date_added = '$current_date' AND payment_type = 'Sales' LIMIT $counting,1";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
	// output data of each row
	while($row1 = $result1->fetch_assoc()) {
	$pdf->SetFont('arial','B',8,'C');
	$pdf->Cell(30,8,$row1['inv_no']." ( ".$row1['classification']." )",1,0,"C");
	$pdf->Cell(50,8,$row1['customer_name'],1,0,"C");
	$pdf->Cell(20,8,number_format($row1['amount'],2),1,0,"R");
	$pdf->Ln(8);
	$tot_sales = $tot_sales + $row1['amount'];
	}
}
else{
	$pdf->SetFont('arial','B',8,'C');
	//$pdf->Cell(40,40,'',0,"C");
	$pdf->Cell(30,8,'',1,0,"C");
	$pdf->Cell(50,8,'',1,0,"C");
	$pdf->Cell(20,8,'',1,0,"R");
	$pdf->Ln(8);
}
$counting++;
}

$pdf->SetFont('arial','B',8,'C');
$pdf->SetFillColor(250,149,129);
$pdf->Cell(30,8,'',1,0,"C",true);
$pdf->Cell(50,8,'TOTAL COLLECTIONS',1,0,"C",true);
$pdf->Cell(20,8,'Php '.number_format($tot_collection,2),1,0,"R",true);
// $pdf->ln();



// $pdf->Cell(30,8,$current_date,1,0,"C");
$pdf->Cell(30,8,'',1,0,"C",true);
$pdf->Cell(50,8,'TOTAL SALES',1,0,"C",true);
$pdf->Cell(20,8,'Php '.number_format($tot_sales,2),1,0,"C",true);
$pdf->Ln(8);
			
$pdf->SetFont('arial','B',8,'C');
//$pdf->Cell(40,40,'',0,"C");
$pdf->Cell(100,8,'EXPENSES',1,0,"C");
$pdf->Cell(100,8,'TRIAL BALANCE',1,0,"C");
$pdf->Ln(8);




//getting the money count/the number of bills
$sql = "SELECT * FROM money_count WHERE date_added = '$current_date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {

		if($row['cash_1000'] != "0"){
			$one_thousand = $row['cash_1000'];
		}else{
			$one_thousand = 0;
		}

		if($row['cash_500'] != "0"){
			$five_hundred = $row['cash_500'];
		}else{
			$five_hundred = 0;
		}

		if($row['cash_200'] != "0"){
			$two_hundred = $row['cash_200'];
		}else{
			$two_hundred = 0;
		}

		if($row['cash_100'] != "0"){
			$one_hundred = $row['cash_100'];
		}else{
			$one_hundred = 0;
		}

		if($row['cash_50'] != "0"){
			$fifthy = $row['cash_50'];
		}else{
			$fifthy = 0;
		}

		if($row['cash_20'] != "0"){
			$twenty = $row['cash_20'];
		}else{
			$twenty = 0;
		}

		if($row['cash_10'] != "0"){
			$ten = $row['cash_10'];
		}else{
			$ten = 0;
		}

		if($row['cash_5'] != "0"){
			$five = $row['cash_5'];
		}else{
			$five = 0;
		}

		if($row['cash_1'] != "0"){
			$one_peso = $row['cash_1'];
		}else{
			$one_peso = 0;
		}

		if($row['cash_25_cents'] != "0"){
			$twenty_five_centavos = $row['cash_25_cents'];
		}else{
			$twenty_five_centavos = 0;
		}
	}
}else{
	$one_thousand = 0;
	$five_hundred = 0;
	$two_hundred = 0;
	$one_hundred = 0;
	$fifthy = 0;
	$twenty = 0;
	$ten = 0;
	$five = 0;
	$one_peso = 0;
	$twenty_five_centavos = 0;

}



//AR / Xerox
$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' AND classification = 'arx'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$ar_x = $row['SUM(amount)'];
	
	}
}else{
		$ar_x = 0;
}


// AR / Others
$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' AND classification = 'aro'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$ar_o = $row['SUM(amount)'];
	
	}
}else{
		$ar_o = 0;
}


// Frames
$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' AND classification = 'rf' OR date_added = '$current_date' AND payment_type = 'Collection' AND classification = 'cf'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$frames = $row['SUM(amount)'];
	
	}
}else{
		$frames = 0;
}


// Prints
$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' AND classification = 'p'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$prints = $row['SUM(amount)'];
	
	}
}else{
		$prints = 0;
}

// AR/F
$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' AND classification = 'arf'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$ar_f = $row['SUM(amount)'];
	
	}
}else{
		$ar_f = 0;
}

// AR/P
$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' AND classification = 'arp'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$ar_p = $row['SUM(amount)'];
	
	}
}else{
		$ar_p = 0;
}

// Others
$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' AND classification = 'o'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$othersss = $row['SUM(amount)'];
	
	}
}else{
		$othersss = 0;
}

 //--------------------------------------------------------------------------------------------------------------

$sql = "SELECT SUM(total_amount) FROM xerox_table WHERE date_added = '$c_date' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$xerox_input = $row['SUM(total_amount)'];
	}
}else{
	$xerox_input = 0;
}

 //inputs

$sql = "SELECT * FROM cash_inputs WHERE date_added = '$current_date' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$coinbags = $row['coinbags'];
		$over_input = $row['over'];
	
	}
}else{
		$coinbags = 0;
		$over_input = 0;
}

$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' AND is_cheque = '1' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$tot_cheque = $row['SUM(amount)'];
	}
}else{
		$tot_cheque = 0;
}



$sql = "SELECT SUM(amount) FROM payment WHERE date_added = '$current_date' AND payment_type = 'Collection' AND classification
='x'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$xerox = $row['SUM(amount)'];
	}
}else{
		$tot_cheque = 0;
}

$tial_balance_tot = $ar_x + $ar_o + $othersss + $prints + $frames + $ar_f + $ar_p + $xerox;
									

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'AR/XEROX : ' . $ar_x,1,0,"L");
$pdf->Cell(50,8,'',1,0,"C");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'AR/OTHERS : '.number_format($ar_o,2),1,0,"L");
$pdf->Cell(50,8,'',1,0,"C");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'xerox : '. number_format($xerox,2),1,0,"L");
$pdf->Cell(50,8,'1000 x '. $one_thousand . " = " . 1000*$one_thousand,1,0,"L");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'others : '.number_format($othersss,2),1,0,"L");
$pdf->Cell(50,8,'500 x '. $five_hundred . " = " . 500*$five_hundred,1,0,"L");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'P = '.number_format($prints,2),1,0,"L");
$pdf->Cell(50,8,'200 x '. $two_hundred . " = " . 200*$two_hundred,1,0,"L");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'F =  ' . number_format($frames,2),1,0,"L");
$pdf->Cell(50,8,'100 x ' . $one_hundred . " = " . 100*$one_hundred,1,0,"L");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'A/RF : '.number_format($ar_f,2),1,0,"L");
$pdf->Cell(50,8,'50 x '. $fifthy . " = " . 50*$fifthy,1,0,"L");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'A/RP : '.number_format($ar_p,2),1,0,"L");
$pdf->Cell(50,8,'20 x '. $twenty . " = " . 20*$twenty,1,0,"L");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'TOTAL : ' .number_format($tial_balance_tot,2),1,0,"L");
$pdf->Cell(50,8,'10 x '. $ten . " = " . 10*$ten,1,0,"L");
$pdf->Ln(8);
$tot_coinbags = $coinbags + ($one_thousand *1000) + ($five_hundred*500) + ($two_hundred*200) + ($one_hundred*100) + ($fifthy*50) + ($twenty*20) + ($ten*10) + ($five*5) + ($one_peso*1) + ($twenty_five_centavos*0.25) + $tot_cheque;
$kaha = $tot_coinbags - 2000;
$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'XEROX : ',1,0,"L");
$pdf->Cell(50,8,'XEROX : '.number_format($kaha - $tot_collection,2),1,0,"L");
$pdf->Cell(50,8,'5 x '. $five . " = " . 5*$five,1,0,"L");
$pdf->Ln(8);
$xerox_taas = $kaha - $tot_collection;
$meter_counter = 1;
$meter_date_checher = $current_date;
while($meter_counter < 3){

	$sql = "SELECT * FROM meter_reading WHERE date_reading = '$meter_date_checher' ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$meter_count[$meter_counter] = $row['reading'];
			$meter_counter++;
		}
	}else{
			$meter_count[$meter_counter] = $row['reading'];

	}
	$meter_date_checher = date('d-m-Y', strtotime('-1 day', strtotime($meter_date_checher)));//less 1 day

}

$total_copies = $meter_count[1] - $meter_count[2];


$xerox_trial = $kaha - $tot_collection;
$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,$meter_count[2] ." - ". $meter_count[1] . " = " . $total_copies . " Copies" ,1,0,"L"); //Meter Reading
$pdf->Cell(50,8,'TOTAL : ' . number_format($tial_balance_tot + $xerox_trial,2),1,0,"L",true);
$pdf->Cell(50,8,'1 x '. $one_peso . " = " . 1*$one_peso,1,0,"L");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'',1,0,"L");
$pdf->Cell(50,8,'.25 x '. $twenty_five_centavos . " = " . 0.25*$twenty_five_centavos,1,0,"L");
$pdf->Ln(8);


$tots_check = "";
$sql = "SELECT * FROM payment WHERE date_added = '$current_date' AND is_cheque = '1' AND payment_type ='Collection' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		// $tot_cheque = $row['SUM(amount)'];
$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'',1,0,"L");
$pdf->Cell(50,8,$row['cheque_no'] . " = " . $row['amount'],1,0,"L");
$pdf->Ln(8);
$tots_check = $tots_check + $row['amount'];
	}
}else{
		$tot_cheque = 0;
}



$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'',1,0,"L");
$pdf->Cell(50,8,'COINBAGS : '.number_format($coinbags,2),1,0,"L");
$pdf->Ln(8);


$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'XEROX : '.number_format($xerox_input,2),1,0,"L");
$pdf->Cell(50,8,'TOTAL : '.number_format($tot_coinbags,2),1,0,"L");
$pdf->Ln(8);

$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,'OVER : '.number_format($xerox_taas - $xerox_input,2),1,0,"L");
$pdf->Cell(50,8,'PETTY CASH : 2000.00',1,0,"L");
$pdf->Ln(8);
$over = $xerox_taas - $xerox_input;
$totz = $xerox_input + $over;


$pdf->SetFont('arial','B',8,'C');
$pdf->Cell(100,8,'',1,0,"C");
$pdf->Cell(50,8,number_format($totz,2),1,0,"C");
$pdf->Cell(50,8,'TOTAL : '. number_format($tot_coinbags - 2000,2),1,0,"L",true);
$pdf->Ln(8);




$pdf->Output();

?>