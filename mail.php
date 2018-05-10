<?php
$name = $_POST['contactName'];
$email = $_POST['email'];
$message = $_POST['comments'];
$formcontent="Name: $name \n Email: $email \n Message: $message";
$recipient = "rimpisuman@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
