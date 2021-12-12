<?php
require_once '../db.php';
$email = $_POST["email"];
$password = $_POST["password"];
$query = "SELECT * FROM user";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
    $match = password_verify($password, $row["password"]);
    if($email == $row["email"] && $match){
        session_start();
        $_SESSION["username"] = $row["name"];
        header("Location: ../../index.php");
        break;
    }
    else{
        $incorrect = true;
    }
}
if ($incorrect) echo 'Username or Password is incorrect';
?>