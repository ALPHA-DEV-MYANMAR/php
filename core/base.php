<?php

function con(){
    return mysqli_connect('localhost','root','','php_blog');
}

$info = array(
  "name" => "Blog",
  "short" => "sb",
  "description" => "Simple Project",
);

$role = ["Admin","Editor","User"];

$url = "http://{$_SERVER['HTTP_HOST']}/web/PHP/blog";
