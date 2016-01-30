<?php

$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject1    = @trim(stripslashes($_POST['subject'])); 
$message1    = @trim(stripslashes($_POST['message'])); 




$to = "bikedel@mail.com";

$subject = "Hitz Website";

$message = "<html>
<head>
<title>HTML email</title>
</head>
<body>
<p></p>
<table width='100%' border='0' cellpadding='50' style='border-collapse:collapse;background-color:#272727;font-family:arial,helvetica,sans-serif;'> <tr><td>
<table width='80%' border='1' align='center' cellpadding='5' cellspacing='0' style='border-collapse:collapse;background-color:#e7e7bd;font-family:arial,helvetica,sans-serif;''>
<tbody><tr><td colspan='2' style='padding:15px;'>Contact Form</td></tr>
<tr><td>Name</td><td>".$name."</td></tr>
<tr><td>Email</td><td>".$from."</td></tr>
<tr><td>Subject</td><td>".$subject1."</td></tr>
<tr><td>Message</td><td>".$message1."</td></tr>
</tbody></table>
<tr><td></td>
</td></tr></table>
</body>
</html>
";

$random_hash = md5(date('r', time())); 

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8;" . $random_hash ."\r\n";

// More headers
$headers .= 'From: <bikedel@mail.com>' . "\r\n";


mail($to,$subject,$message,$headers);
?>