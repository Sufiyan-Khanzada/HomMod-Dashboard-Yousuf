<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $name = $_POST['name'];
 $price = $_POST['price'];
 $items = $_POST['items'];

foreach($items as $itemname){
    echo $itemname."<br>";

}
 


    $sql = "INSERT INTO build_box (name,price,items) VALUES ('$name','$price',' $items')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Buildbox  Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/bluild_box.php");
?>