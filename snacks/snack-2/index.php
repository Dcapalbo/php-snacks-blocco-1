<?php
//make a variable to get the name
$name = $_GET["name"];
//make a variable to get the email
$email = $_GET["email"];
//make a variable to get the age
$age = $_GET["age"];
//make conditions for each variable
 //check the name data
 if (strlen($name) <= 3) {
   $name = "Name is not right, please insert it again";
 }
 //check the email data
 if (!strpos($email, "@") || !strpos($email, ".")) {
   $name = "Name is not right, please insert it again";
 }
 //check the age data
 if (!is_numeric($age)) {
   $age = "The age is not valid, please insert the age again";
 }
 //make a general conditions to check if all the data are right or wrong
 if ((((strlen($name) > 3) && (is_numeric($age))) && ((strpos($email, ".")))) && (strpos($email, "@"))) {
   echo "Access Confirmed";
 } else {
   echo "Access Denied";
 }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css">
    <title>php-snacks-blocco-1</title>
  </head>
  <body class="wrapper">
   <ul class="menu_list">
    <li class="list_item"><?php echo $name;?></li>
    <li class="list_item"><?php echo $email;?></li>
    <li class="list_item"><?php echo $age;?></li>
   </ul>
  </body>
</html>
