<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php
  include 'header.php';
  ?>
    <?php include 'connection.php'; ?>
  </head>     
  <?php 
$msg="";
$upd_id=$_GET['id'];
if(isset($_POST['updatevid']))
{
    $img=$_FILES['file']['tmp_name'];
    $brand_name = $_POST['brand_name'];
    $brand_status = $_POST['brand_status'];
    // $brand_image = $_POST['brand_image'];
 
    if($img!="")
    {
    $name=$_FILES['file']['name'];
    $target_dir='brands_images/';
    $target_file = "http://localhost/HomMod-Dashboard-Yousuf/".$target_dir . basename($_FILES["file"]["name"]);
    
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
    
        // Upload file

        $query="UPDATE brands SET brand_name='$brand_name', brand_status='$brand_status',brand_image='$target_file' WHERE id='$upd_id'";
    
    }
    else{
 
    
    
    }



$result_query=mysqli_query($conn,$query);

if($result_query){

    $msg="<div class='alert alert-success'>
  <strong>Success!</strong> Brands Updated Done Succesfully.
</div>";

}
else{
$msg="<div class='alert alert-danger'>
  <strong>Warning!</strong> Sorry Brands is not Update in Database
</div>";
 }




}

?>
  
  <!-- Menu: menu collepce btn -->
                
              <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">

                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0"> Edit Brands</h3>
                                <!-- <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button> -->
                            </div>
                        </div>
                    </div> <!-- Row end  -->  
                    
                    <div class="row g-3 mb-3">
                        <div class="col-lg-4">
                         
                               
                            
                            </div>
                        </div>
                        <?php
                     $id=$_GET['id'];
                    $sql = "SELECT * FROM  brands where id=$id";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    ?>
                    
                    <?php
                    while($row = mysqli_fetch_assoc($result)){

                    ?>
                        <div class="col-lg-8">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Basic information</h6>
                                </div>
                                <div class="card-body">
                                <!--<form class="post-form" action="insertbrands.php" method="post" enctype="multipart/form-data">    -->
                                 <form method="post" action="" enctype="multipart/form-data">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">ID</label>
                                                  <input type="text" class="form-control" name="id" readonly value="<?php  echo $row['id']?>">
                                              
                                            </div>
                                             <div class="col-md-6">
                                                <label  class="form-label">Barnd name</label>
                                                <input type="text" name="brand_name" class="form-control" value="<?php  echo $row['brand_name']?>">
                                            </div> 
                                        
                                         
                                            
                                            <div class="col-md-6">
                                                <label  class="form-label"> Brand Status</label>
                                                <input type="text" name="brand_status" class="form-control" value="<?php  echo $row['brand_status']?>">
                                            </div>
                                          
                                           
                                       
                                            
                                            
                                            <div class="col-md-12">
                                              
  
 

   
                     
                     <div class="col-md-12">
                                                <label class="form-label"> Brand Image</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="brand_image"  id="file" value="<?php  echo $row['brand_image']?>" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>                   
                                         
<br>
  <div class="mb-3">
</div>





                    </div>
                                                

                                            </div>
                                            <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <button  type="submit" value="Save" name="updatevid" class="btn  btn-icon btn-icon-end btn-primary">
                             <span>Update</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-send"><path d="M12.6593 16.3217L17.5347 3.86248C17.7992 3.18632 17.9315 2.84824 17.8212 2.6442C17.7749 2.55869 17.7048 2.48852 17.6193 2.44227C17.4152 2.33191 17.0771 2.46421 16.401 2.72879L3.94178 7.60412L3.94177 7.60412C3.24083 7.87841 2.89035 8.01555 2.81681 8.23919C2.78604 8.33276 2.78359 8.43333 2.80977 8.52828C2.87235 8.75524 3.21574 8.90927 3.90252 9.21732L8.53015 11.293L8.53015 11.293C8.65873 11.3507 8.72302 11.3796 8.77576 11.4235C8.79906 11.4429 8.82056 11.4644 8.83997 11.4877C8.88389 11.5404 8.91273 11.6047 8.9704 11.7333L11.0461 16.3609C11.3542 17.0477 11.5082 17.3911 11.7352 17.4537C11.8301 17.4799 11.9307 17.4774 12.0243 17.4466C12.2479 17.3731 12.385 17.0226 12.6593 16.3217Z"></path><path d="M11.8995 8.36395L9.07107 11.1924"></path></svg>
                        </button>
                        </form>
                                <!-- <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-50">Create</button> -->
                            </div>
                        </div>
                    </div> 
                    
                    

 
                                </div><!-- Row end  --> 

                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  --> 
                    <?php 
                    }}
                     ?>
                </div>
            </div>    
        
            <?php
  include 'footer.php';
  ?>