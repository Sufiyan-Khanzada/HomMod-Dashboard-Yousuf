<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $main_category = $_POST['main_category'];
 $sub_category = $_POST['sub_category'];
 $sub_category1 = $_POST['sub_category1'];
 $main_category1 = $_POST['main_category1'];
//  $main_cat_pic = $_POST['main_cat_pic'];
$name=$_FILES['file']['name'];
$target_dir='categories_image/';
$target_file = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
 


    $sql = "INSERT INTO categories (main_category,sub_category,sub_category1,main_category1,main_cat_pic) VALUES ('$main_category','$sub_category',' $sub_category1','$main_category1','$target_file')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Categories Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/categories-add.php");
?>