<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $title = $_POST['title'];
 $content = $_POST['content'];
 $short_content = $_POST['short_content'];
 $author = $_POST['author'];
 $post_status = $_POST['post_status'];
//  $featured_image = $_POST['featured_image'];
$name=$_FILES['file']['name'];
$target_dir='blogs_images/';
$target_file = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
 


    $sql = "INSERT INTO blogs (title,content,short_content,author,post_status,featured_image) VALUES ('$title','$content',' $short_content','$author','$post_status ','$target_file ')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Blogs Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/blogs-add.php");
?>