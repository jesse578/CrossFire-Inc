<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'Jesse@CrossFireIncs.com';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: Contact@CrossFireIncs.com' . "\r\n";

?>
