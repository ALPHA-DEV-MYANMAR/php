<?php 

require_once 'conn.php';

$id = $_GET['id'];
$sql = "DELETE FROM to_do WHERE  id = $id";

if(!mysqli_query($conn,$sql)){
    echo "Delete Fail : " .$mysqli -> error;
}else{
    header('Location:read.php');
}

?>