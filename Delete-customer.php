<?php

$id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM users WHERE id = {$id}";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

    header("Location: http://localhost/HomMod-Dashboard-Yousuf/customers.php");
?>