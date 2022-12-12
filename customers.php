<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 18:18:24 GMT -->
<head>
  <?php
  include 'header.php';
  ?>
  <?php include 'connection.php'; ?>
  </head>
                  <!-- Menu: menu collepce btn -->
       

            <!-- Body: Body -->       
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Customers Information</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Customers</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row clearfix g-3">
                         <?php
                   $sql = "SELECT * FROM  users";
                   $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                   if(mysqli_num_rows($result) > 0) {
                      ?>
                      
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>First Name</th> 
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                    
        <?php
                      while($row = mysqli_fetch_assoc($result)){
                        ?>
                        
                    
                                            <tr>
                                               
                                                
                                               <td>
                                                    <!--<a href='customer-detail.php?id=<?php echo $row['id']; ?>'-->
                                                   <a  href='customer-detail.php?id=<?php echo $row['id'];?>'>
                                                   <?php echo $row['id'];?>
                                                   </td>
                                                </a>
                                                <td>
                                                        <a >
                                                            <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                            <span class="fw-bold ms-1"><?php echo $row['name'];?></span>
                                                        </a>
                                                </td>
                                                <td><?php echo $row['lastname'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                              
                                                <td><a href='Edit-customer.php?id=<?php echo $row['id']; ?>' class="text-truncate h-100 d-flex align-items-center"
                                     class="text-alternate">Edit</a></td>
                                     <td><a href='Delete-customer.php?id=<?php echo $row['id']; ?>' class="text-truncate h-100 d-flex align-items-center"
                                     class="text-alternate">Delete</a></td>
  
                                            <td>
                                                   <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    
                                                   <!-- <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button> -->
                                                       <!-- <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button> -->
                                                   </div>
                                                </td>
                                            </tr>
                                           
                      <?php 
                    }}
                      
                      ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div>
            
            <?php
  include 'footer.php';
  ?>
  