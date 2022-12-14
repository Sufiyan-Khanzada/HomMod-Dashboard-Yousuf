<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php
  include 'header.php';
  ?>
    <?php include 'connection.php'; ?>
  </head>
              

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Blog List</h3>
                                <!-- <a href="categories-add.php" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Add Categories</a> -->
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-4 mb-4">
                   
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                <?php
                   $sql = "SELECT * FROM  blogs";
                   $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                   if(mysqli_num_rows($result) > 0) {
                      ?>
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Short Content</th>
                                                <th>Author </th>
                                                <th>Post Status</th>
                                                <th>Featured image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                      while($row = mysqli_fetch_assoc($result)){
                        ?>
                                            <tr>
                                                <td><strong><?php echo $row['id'];?></strong></td>
                                                <td><?php echo $row['title'];?></td>
                                                <td><?php echo $row['content'];?></td>
                                                <td><?php echo $row['short_content'];?></td>
                                                <td><?php echo $row['author'];?></td>
                                                <td><?php echo $row['post_status'];?></td>
                                                <td> 
           <a href="<?php echo $row['featured_image']; ?>">
               <img src="<?php echo $row['featured_image'];?>"  width=50 height=50>
               </a>

            </td>  

            <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href='Edit-blogs.php ?id=<?php echo $row['id']; ?>' class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                        <a href='Delete-blogs.php ?id=<?php echo $row['id']; ?>'class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>
                                    </div>
                                                </td>
                         
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                                 
                                     <!-- <a href=Edit-customer.php?id=<?php echo $row['id']; ?> class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a> -->
                                                        <!-- <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button> -->
                                                    </div>
                                                </td>
                                            </tr>
                                          
                                           
                                                                                           
    
                                            </tr>
                                            <?php 
                    }}
                      
                      ?>
                                        </tbody>
                                    </table>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                
           
                           
            <?php
  include 'footer.php';
  ?>