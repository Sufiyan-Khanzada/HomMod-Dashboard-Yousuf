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
                                <h3 class="fw-bold mb-0">Build box</h3>
                                <!-- <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button> -->
                            </div>
                        </div>
                    </div> <!-- Row end  -->  
                    
                    <div class="row g-3 mb-3">
                        
                        <div class="col-xl-12 col-lg-8">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Basic information</h6>
                                </div>
                                <div class="card-body">
                               
                                <form class="post-form" action="insert-buildbox.php" method="post" enctype="multipart/form-data">  
                                        <div class="row g-3 align-items-center">
                                            <!-- <div class="col-md-6">
                                                <label  class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control">
                                            </div> -->
                                            <div class="col-md-12">
                                                <label  class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            
                                           
                                           
                                            <div class="col-md-6">
                                                <label  class="form-label">Price</label>
                                                <input type="text" name="price" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                            <label  class="form-label">Items</label>
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="items"  size="3" multiple="multiple"  tabindex="1">
                                            <?php
                   $sql = "SELECT * FROM  items";
                   $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                   if(mysqli_num_rows($result) > 0) {
                      ?>  
                    
                <?php
                while($row = mysqli_fetch_assoc($result)){
             ?>
                                                <!-- <label  class="form-label">Items</label> -->
                                                <option value=<?php echo $row['title'];?>><?php echo $row['title'];?></option>
                                                <!-- <input type="text" name="post_status" class="form-control"> -->
                                                <?php 
                    }
                       
                       
                   }
                      
                      ?>  
                    
                                                </select>
                                            </div>
                                                                 
                                            </div>
                                        </div>
                                 
                                    
                               

                                       <div>
                                       <button style="margin-left:20px" type="submit" value="Save" class="btn btn-icon btn-icon-end btn-primary" >
                                        
                                         <span>Create</span>
                                        <i data-cs-icon="send"></i>
                                          </button>
                 
                            </form>
                                       </div>
                                    
                  
                                           
                                              </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  --> 
                    
                </div>
            </div>    
             
            <?php
  include 'footer.php';
  ?>