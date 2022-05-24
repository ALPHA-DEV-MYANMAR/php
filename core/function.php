<?php

//common start
function alert($data,$color="danger"){
    return "<p class='alert alert-$color'>$data</p>";
}

function runQuery($sql){
    if(mysqli_query(con(),$sql)){
        return true;
    }else{
        die('MySql error!');
    }
}

function redirect($l){
    header("location:$l");
}
//common end

//auth start
function register(){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if($password == $cpassword){
        $sPass = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (`name`, `email`, `password`) VALUES ('$name','$email','$sPass')";
        if(runQuery($sql)){
            redirect("login.php");
        }
    }else{
        return alert("စကား၀က်မတူဘူး");
    }
}

function login(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE email='$email'";
    $query = mysqli_query(con(),$sql);
    $row = mysqli_fetch_assoc($query);
    if(!$row){
        return alert("မအောင်မြင်ပါ။","danger");
    }else{
        if(!password_verify($password,$row['password'])){
            return alert("မအောင်မြင်ပါ");
        }else{
            session_start();
            $_SESSION['user'] = $row;
            redirect("dashboard.php");
        }
    }
}
//end auth start
