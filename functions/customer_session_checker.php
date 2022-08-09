<?php 
session_start();

if(isset($_SESSION['submitted'])){
	echo $_SESSION['submitted'];
}

?>