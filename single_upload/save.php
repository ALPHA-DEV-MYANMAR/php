<?php

$tmpfiles = $_FILES['upload']['tmp_name'];
$fileName = $_FILES['upload']['name'];
$saveFolder = "store/";

if(move_uploaded_file($tmpfiles,$saveFolder.$fileName)){
    header("location:index.php");
}