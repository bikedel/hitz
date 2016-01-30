<?php

$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject1    = @trim(stripslashes($_POST['subject'])); 
$message1    = @trim(stripslashes($_POST['message'])); 




$to = "info@hitz.co.za";
$test = "bikedel@mail.com";

$subject = "Hitz Website - Contact Form";

$message = "Name : " . $name . "\r\n" ;
$message .= "Email : " . $from . "\r\n" ;
$message .= "Subject : " . $subject1 . "\r\n" ;
$message .= "Message : " . $message1 . "\r\n" ;


$headers = "From: webmaster@hitz.co.za" . "\r\n" ;


mail($to,$subject,$message,$headers);
//test is mail getting received?
mail($test,$subject,$message,$headers);
?>