<?php
/* watch the video for detailed instructions */
$to = "09306707290";
$from = "sms.alltelwireless.com";
$message = "This is a text message\nNew line...";
$headers = "From: $from\n";
mail($to, '', $message, $headers);
?>