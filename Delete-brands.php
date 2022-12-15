<?php

$id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM brands WHERE id = {$id}";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

    header("Location:http://localhost/HomMod-Dashboard-Yousuf/brand-details.php");
?>