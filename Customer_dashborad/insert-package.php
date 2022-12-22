<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $package_name = $_POST['package_name'];
 $package_desc = $_POST['package_desc'];
 $package_price = $_POST['package_price'];





    $sql = "INSERT INTO package (package_name,package_desc,package_price) VALUES ('$package_name','$package_desc',' $package_price')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Buildbox  Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/package-add.php");
?>