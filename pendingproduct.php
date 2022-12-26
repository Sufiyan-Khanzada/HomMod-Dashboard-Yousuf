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
                                <h3 class="fw-bold mb-0">Items List</h3>
                                <!-- <a href="categories-add.php" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Add Categories</a> -->
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-12 mb-3">
                   
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                <?php
                   $sql = "SELECT * FROM  items";
                   $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                   if(mysqli_num_rows($result) > 0) {
                      ?>
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 10%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Item name</th>
                                                <th>Normal Price</th>
                                                <th>Sale Price</th>
                                                <th>Color</th>
                                                <th>Dealbox</th>
                                                <!-- <th>Color1</th>
                                                <th>Color2</th> -->
                                                <!-- <th>Color3</th> -->
                                                <!-- <th>Color4</th>
                                                <th>Color5</th> -->
                                                <!-- <th>Size</th>
                                                <th>Size1</th>
                                                <th>Size2</th> -->
                                                <!-- <th>Size3</th> -->
                                                <!-- <th>Size4</th>
                                                <th>Size5</th> -->
                                                <th>Stock Available</th>
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
                                                <td><?php echo $row['normal_price'];?></td>
                                                <td><?php echo $row['sale_price'];?></td>
                                                <td><?php echo $row['color'];?></td>
                                                <td><?php echo $row['isitem_dealbox'];?></td>
                                                <!-- <td><?php echo $row['color1'];?></td>
                                                <td><?php echo $row['color2'];?></td> -->
                                                <!-- <td><?php echo $row['color3'];?></td> -->
                                                <!-- <td><?php echo $row['color4'];?></td>
                                                <td><?php echo $row['color5'];?></td> -->
                                                <!-- <td><?php echo $row['size'];?></td>
                                                <td><?php echo $row['size1'];?></td>
                                                <td><?php echo $row['size2'];?></td> -->
                                                <!-- <td><?php echo $row['size3'];?></td> -->
                                                <!-- <td><?php echo $row['size4'];?></td>
                                                <td><?php echo $row['size5'];?></td> -->
                                                <td><?php echo $row['stock_available'];?></td>

                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href='Edit-items.php ?id=<?php echo $row['id']; ?>' class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <a href='Delete-Items.php ?id=<?php echo $row['id']; ?>'class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>
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