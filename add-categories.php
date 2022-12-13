<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $main_category = $_POST['main_category'];
 $sub_category = $_POST['sub_category'];
 $sub_category1 = $_POST['sub_category1'];
 $main_category1 = $_POST['main_category1'];
 $main_cat_pic = $_POST['main_cat_pic'];
 
 


    $sql = "INSERT INTO categories (main_category,sub_category,sub_category1,main_category1,main_cat_pic) VALUES ('$main_category','$sub_category',' $sub_category1','$main_category1','$main_cat_pic ')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Categories Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/categories-add.php");
?>