<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'bhattacharyasayan.21@gmail.com';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: sayan@reachoutsolution.com' . "\r\n";

?>