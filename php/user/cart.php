<?php
session_start();
include '../db.php';

$id = $_GET["id"];
if(empty($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}
array_push($_SESSION["cart"], $id);
header("Location: ../../../index.php");
?>