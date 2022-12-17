<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $brand_name = $_POST['brand_name'];
 $brand_status = $_POST['brand_status'];
//  $brand_image = $_POST['brand_image'];
$name=$_FILES['file']['name'];
$target_dir='product_images/';
$target_file = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
 


    $sql = "INSERT INTO brands (brand_name,brand_status,brand_image) VALUES ('$brand_name','$brand_status','$target_file')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Brands Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/brand-details.php");
?>