<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $title = $_POST['title'];
 $color = $_POST['color'];
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
 $image1= $_POST['image1']; 
 $image2= $_POST['image2'];  
 $image3= $_POST['image3']; 
 $image4= $_POST['image4']; 
 $image5= $_POST['image5']; 
 $image6= $_POST['image6']; 
 $image7= $_POST['image7']; 
 $image8= $_POST['image8']; 
 $image9= $_POST['image9']; 


 


    $sql = "INSERT INTO items (title,color,color1,color2,color3,color4,color5,size,size1,size2,size3,size4,size5,short_description,long_description,sale_price,normal_price,how_to_use,stock_available,image1,image2,image3,image4,image5,image6,image7,image8,image9) VALUES 
    (' $title',' $color',' $color1',' $color2',' $color3',' $color4',' $color5',' $size',' $size1',' $size2',' $size3',' $size4',' $size5',' $short_description',' $long_description ',' $sale_price',' $normal_price','$how_to_use',' $stock_available',' $image1',' $image2',' $image3',' $image4',' $image5',' $image6',' $image7',' $image8',' $image9')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Items Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/pendingproduct.php");
?>