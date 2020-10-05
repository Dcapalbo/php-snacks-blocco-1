<?php
//make a variable to get the name
$name = $_GET["name"];
//make a variable to get the email
$email = $_GET["email"];
//make a variable to get the age
$age = $_GET["age"];
//make conditions for each variable
 if (strlen($name) <= 3) {
   $name = "Name is not right, please insert it again";
 };

 if (!strpos($email, "@") || !strpos($email, ".")) {
   $email = "The email is not valid, please insert it again";
 };

 if (!is_numeric($age)) {
   $age = "The age is not valid, please insert the age again";
 };

echo
?>
