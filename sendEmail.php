<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = '2135879@talnet.nl';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message .\n".;

$to = '2135879@talnet.nl';
$headers = "From: $email_from \r\n";

$headers .= "Reply-To; $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: inschrijven.html");
?>
