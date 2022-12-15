<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $brand_name = $_POST['brand_name'];
 $brand_status = $_POST['brand_status'];
 $brand_image = $_POST['brand_image'];

 


    $sql = "INSERT INTO brands (brand_name,brand_status,brand_image) VALUES ('$brand_name','$brand_status','$brand_image')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Brands Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/brand-details.php");
?>