<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $brand_name = $_POST['brand_name'];
 $brand_status = $_POST['brand_status'];

 $banner_text = $_POST['banner_text'];
 $banner_normal_price = $_POST['banner_normal_price'];
 $banner_sale_price = $_POST['banner_sale_price'];

 $banner_text1 = $_POST['banner_text1'];
 $banner_normal_price1 = $_POST['banner_normal_price1'];
 $banner_sale_price1 = $_POST['banner_sale_price1'];
 
 $banner_text2 = $_POST['banner_text2'];
 $banner_normal_price2 = $_POST['banner_normal_price2'];
 $banner_sale_price2 = $_POST['banner_sale_price2'];
 
 $banner_text3 = $_POST['banner_text3'];
 $banner_normal_price3 = $_POST['banner_normal_price3'];
 $banner_sale_price3= $_POST['banner_sale_price3'];
 
 $banner_text4 = $_POST['banner_text4'];
 $banner_normal_price4 = $_POST['banner_normal_price4'];
 $banner_sale_price4 = $_POST['banner_sale_price4'];
 
 
 

// $brand_image = $_POST['brand_image'];
$name=$_FILES['file']['name'];
$target_dir='brands_images/';
$target_file = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

 //  $banner_image = $_POST['banner_image'];
 $target_file1 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file1"]["name"]);
 move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name);

 
 //  $banner_image = $_POST['banner_image1'];
 $target_file2 = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file2"]["name"]);
 move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name);
 
 //  $banner_image = $_POST['banner_image2'];
 $target_file3= "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file3"]["name"]);
 move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$name);

  //  $banner_image = $_POST['banner_image3'];
  $target_file4= "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file4"]["name"]);
  move_uploaded_file($_FILES['file4']['tmp_name'],$target_dir.$name);

    //  $banner_image = $_POST['banner_image4'];
    $target_file5= "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file5"]["name"]);
    move_uploaded_file($_FILES['file5']['tmp_name'],$target_dir.$name);

    $sql = "INSERT INTO brands (brand_name,brand_status,brand_image,banner_text,banner_normal_price,banner_sale_price,banner_image,banner_text1,banner_normal_price1,banner_sale_price1,banner_image1,banner_text2,banner_normal_price2,banner_sale_price2,banner_image2,banner_text3,banner_normal_price3,banner_sale_price3,banner_image3,banner_text4,banner_normal_price4,banner_sale_price4,banner_image4) VALUES
     ('$brand_name','$brand_status','$target_file','$banner_text',' $banner_normal_price',' $banner_sale_price ','$target_file1','$banner_text1',' $banner_normal_price1',' $banner_sale_price1','$target_file2','$banner_text2',' $banner_normal_price2',' $banner_sale_price2 ','$target_file3','$banner_text3',' $banner_normal_price3',' $banner_sale_price3 ','$target_file4','$banner_text4',' $banner_normal_price4',' $banner_sale_price4','$target_file5')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Brands Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/brand-details.php");
?>