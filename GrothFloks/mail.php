<?php
$data=$_POST['mail'];
$fp = fopen('newsletter.csv', 'a+');
fwrite($fp, $data);  
fwrite($fp, "\n");  
fclose($fp); 

$to_email = "paragikjain786@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>