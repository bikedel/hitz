<?php

$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject1    = @trim(stripslashes($_POST['subject'])); 
$message1    = @trim(stripslashes($_POST['message'])); 




$to = "info@hitz.co.za";

$subject = "Contact us form from Hitz Website";

$message = '<html><body>';
 
$message .= '<table width="80%"; rules="all" style="border:1px solid #3A5896;" cellpadding="10">';
 
$message .= "<tr><td><img src='http://www.proteadb.co.za/ht/images/slider/Hitz-1.jpg' alt='Hitz' /></td></tr>";
 
$message .= "<tr><td colspan=2>From : {$name} <br/> Email : {$from}</td></tr>"; 

$message .= "<tr><td colspan=2>Subject : {$subject1}</td></tr>";
 
$message .= "<tr><td colspan=2 font='colr:#999999;'>Message : {$message1}</td></tr>"; 
 
$message .= "</table>";
 
$message .= "</body></html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@hitz.co.za>' . "\r\n";


mail($to,$subject,$message,$headers);
?>