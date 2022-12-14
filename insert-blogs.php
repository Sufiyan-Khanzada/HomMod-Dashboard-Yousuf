<?php include 'connection.php'; ?>

<?php
//  $id = $_POST['id'];
 $title = $_POST['title'];
 $content = $_POST['content'];
 $short_content = $_POST['short_content'];
 $author = $_POST['author'];
 $post_status = $_POST['post_status'];
 $featured_image = $_POST['featured_image'];
 


    $sql = "INSERT INTO blogs (title,content,short_content,author,post_status,featured_image) VALUES ('$title','$content',' $short_content','$author','$post_status ','$featured_image ')";
    $result = mysqli_query($conn, $sql);
    if($result === TRUE){
        echo "<script type=text/javascript>alert('Blogs Added');</script>";
    }
    

header("Location: http://localhost/HomMod-Dashboard-Yousuf/blogs-add.php");
?>