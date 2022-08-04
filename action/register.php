<?php

include("../includes/dbcon.php");

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed = hash("sha512", $password);

    $status = "2";

 $sql = "SELECT id, email, username FROM user WHERE email = '$email' OR username= '$username'";
 $result = mysqli_query($mysqli, $sql);
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 $email1 = $row["email"];
 $username1 = ["username"];
 
 $count = mysqli_num_rows($result);

 if($count == 0){
    $sql = "INSERT INTO user (name, email, username, password, status) VALUES ('$name', '$email', '$username','$hashed','$status')";
    
    if($mysqli->query($sql) === true){
        echo 'success';
        header("location: ../dashboard/");
        }else{
            echo 'unsuccess';
            header("location: ../create/?error=Failed to Create New Account please try again!");

            exit();
        }
 }else{
    header("location: ../create/?error=Failed to Create New Account This user already exist!");
    exit();
 }
 }

   




?>