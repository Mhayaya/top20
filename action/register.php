<?php

include("../includes/dbcon.php");

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed = hash("sha512", $password);

    $status = "2";

    $sql = "INSERT INTO user (name, email, username, password, status) VALUES ('$name', '$email', '$username','$hashed','$status')";
    
    if($mysqli->query($sql) === true){
        echo 'success';
        header("location: ../dashboard/");
        }else{
            echo 'unsuccess';
            header("location: ../create/?error='Failed to Create New Account please try again!'");

            exit();
        }

}


?>