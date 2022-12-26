<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $title = $_POST['title'];
 $color = $_POST['color'];
 $isitem_dealbox = $_POST['isitem_dealbox'];
 $color1 = $_POST['color1'];
 $color2 = $_POST['color2'];
 $color3 = $_POST['color3'];
 $color4 = $_POST['color4'];
 $color5 = $_POST['color5'];
 $size = $_POST['size'];
 $size1 = $_POST['size1'];
 $size2 = $_POST['size2'];
 $size3 = $_POST['size3'];
 $size4 = $_POST['size4'];
 $size5 = $_POST['size5'];
 $short_description = $_POST['short_description'];
 $long_description = $_POST['long_description'];
 $sale_price = $_POST['sale_price']; 
 $normal_price = $_POST['normal_price'];
 $how_to_use = $_POST['how_to_use']; 
 $stock_available = $_POST['stock_available'];
//  $image1= $_POST['image1']; 
$name=$_FILES['file']['name'];
$target_dir='product_images/';
$target_file = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
//  $image2= $_POST['image2'];  
$target_file1 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file1"]["name"]);
move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name);
//  $image3= $_POST['image3'];
$target_file2 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file2"]["name"]);
move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name);
//  $image4= $_POST['image4']; 
$target_file3 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file3"]["name"]);
move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$name);
//  $image5= $_POST['image5']; 
$target_file4 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file4"]["name"]);
move_uploaded_file($_FILES['file4']['tmp_name'],$target_dir.$name);
//  $image6= $_POST['image6']; 
$target_file5 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file5"]["name"]);
move_uploaded_file($_FILES['file5']['tmp_name'],$target_dir.$name);
//  $image7= $_POST['image7']; 
$target_file6 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file6"]["name"]);
move_uploaded_file($_FILES['file6']['tmp_name'],$target_dir.$name);
//  $image8= $_POST['image8']; 
$target_file7 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file7"]["name"]);
move_uploaded_file($_FILES['file7']['tmp_name'],$target_dir.$name);
//  $image9= $_POST['image9']; 
$target_file8 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file8"]["name"]);
move_uploaded_file($_FILES['file8']['tmp_name'],$target_dir.$name);


 


    $sql = "INSERT INTO items (title,color,isitem_dealbox,color1,color2,color3,color4,color5,size,size1,size2,size3,size4,size5,short_description,long_description,sale_price,normal_price,how_to_use,stock_available,image1,image2,image3,image4,image5,image6,image7,image8,image9) VALUES 
    (' $title',' $color','$isitem_dealbox',' $color1',' $color2',' $color3',' $color4',' $color5',' $size',' $size1',' $size2',' $size3',' $size4',' $size5',' $short_description',' $long_description ',' $sale_price',' $normal_price','$how_to_use',' $stock_available',' $target_file',' $target_file1',' $target_file2',' $target_file3',' $target_file4',' $target_file5',' $target_file6',' $target_file7',' $target_file8')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Items Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/pendingproduct.php");
?>