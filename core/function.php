<?php 

function categoryList(){
    global $conn;
    // $sql = 'SELECT * FROM to_do ORDER BY id DESC '; 
    $sql = 'SELECT * FROM to_do';
    $query = mysqli_query($conn,$sql);
    $total_rows = mysqli_num_rows($query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)){
        array_push($rows,$row);
    }
    return $rows;
}

function categoryCreate(){
    global $conn;
    $message = $_GET['message'];
    $sql = "INSERT INTO to_do (message) VALUES ('$message')";
    if(mysqli_query($conn,$sql)){
        echo "<script>location.href = 'category_list.php'</script>";
    }else{
        die("Query failed");
    }
}

function categoryDelete(){
    global $conn;
    $id = $_GET['id'];
    $sql = "DELETE FROM to_do WHERE  id = $id";

    if(!mysqli_query($conn,$sql)){
        die('Failed');
    }else{
        echo "<script>window.location.href = 'category_list.php'</script>";
    }
}

function categoryShow($id){
    global $conn;
    $id = $_GET['id'];
    $sql = "SELECT * FROM to_do WHERE id=$id";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

function categoryUpdate(){
    global $conn;
    $message = $_GET["message"];
    $id = $_GET['id'];
    $sql  = "UPDATE to_do SET message='$message' WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        echo "<script>window.location.href = 'category_list.php'</script>";
    }
}

