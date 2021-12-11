<?php
$id = $_GET["id"];
require_once '../db.php';
$query = "DELETE FROM product WHERE id = '$id'";
mysqli_query($connect, $query);
header("Location: ../../pages/home.php");
?>