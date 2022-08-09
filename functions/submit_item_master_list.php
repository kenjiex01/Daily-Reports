<?php
include("connection.php");
session_start();
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];
$item_class = $_POST['item_class'];



if($item_id != ""){

	$sql = "UPDATE item_master_list SET item_name = '$item_name', price = '$item_price', item_class = '$item_class' WHERE id = '$item_id'";

	if ($conn->query($sql) === TRUE) {
		$_SESSION['item_submitted'] = "Successfully Updated item details of (Item ID : ".$item_id.")";
	  	header('location:../item_master_list.php');
	} else {
	  echo "Error updating record: " . $conn->error;
	}


}else{

function check_barcode(){

}

function generate_barcode(){
	$result = "";
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$charArray = str_split($chars);
	for ($i = 0 ; $i < 15 ; $i++) {
	$randItem = array_rand($charArray);
	$result .= "".$charArray[$randItem];
	}
}


//inserting item master list
	$sql = "INSERT INTO item_master_list (item_name, price, item_class) VALUES ('$item_name', '$item_price', '$item_class')";

	if ($conn->query($sql) === TRUE) {
	  // echo "Full Payment Successful.";
	  $_SESSION['item_submitted'] = "Successfully added a new Item";
	  header('location:../item_master_list.php');
	} else {
	  echo "Error Inserting Item Details : " . $sql . $conn->error;
	}



}
$conn->close();
?>