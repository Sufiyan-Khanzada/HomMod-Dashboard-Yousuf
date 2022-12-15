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
                                <h3 class="fw-bold mb-0">Brands Add</h3>
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
                                <form class="post-form" action="insert-brands.php" method="post" enctype="multipart/form-data">  
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Brand Name</label>
                                                <input type="text" name="brand_name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Brand Status</label>
                                                <input type="text" name="brand_status" class="form-control">
                                            </div>
                                            
                                           
                                           
                                            
                                           
                                            <div class="col-md-12">
                                                <label class="form-label">Brand Image</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="brand_image" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
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