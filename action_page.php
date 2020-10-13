<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = $email;
$email_subject = $subject;
$email_body = "Name: $name.\n". "Email: $email.\n". "Message: $message.\n";

$to ="preston.harry99@gmail.com";
$headers = "From: $email_form \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Organization: Sender Organization\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");
