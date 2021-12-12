<?php

require_once '../db.php';

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

if ($password == $cpassword) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
    mysqli_query($connect, $query);
    header("Location: ../../index.php");
}
else{
    echo 'Passwords Doesnt Match!';
}
?>