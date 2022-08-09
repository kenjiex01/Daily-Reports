<?php
session_start();


unset($_SESSION['item_name']);
unset($_SESSION['price']);
unset($_SESSION['item_class']);
header('location:../item_master_list.php');
?>