<?php
session_start();


unset($_SESSION['submitted']);
echo $_SESSION['submitted'];
?>