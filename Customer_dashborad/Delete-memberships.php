<?php

$id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM membership WHERE id = {$id}";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

    header("Location: http://localhost/HomMod-Dashboard-Yousuf/memberships_details.php");
?>