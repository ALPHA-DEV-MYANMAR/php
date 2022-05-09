<?php 

    require_once "conn.php";
    // echo "<pre>";

    if(isset($_GET['addBtn'])){

        // print_r($_GET);
        $message = $_GET['message'];
        $sql = "INSERT INTO to_do (message) VALUES ('$message')";
        // die($sql);
    
        //insert data 
        if(mysqli_query($conn,$sql)){
            header('Location:create.php');
        }else{
            echo "Ma Aung Pu";
        }

    }
    
    // echo "</pre>";

?>

<?php  include('nav.php') ?>

<form method="get">
    <input type="text" name="message" required>
    <button name="addBtn">ADD</button>
</form>