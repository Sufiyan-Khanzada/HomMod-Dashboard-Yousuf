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
                        <div class="col-xl-10 col-lg-10">
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
                                                <input type="file" name="file" id="file" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>                        
                                            </div>
                                        </div>
                                      
                                              </div>
                                            </div>
                                        </div>
                                    

                                        <!-- banner1 -->
                                    
                                    
                    <div class="row g-3 mb-3">
                    <div class="col-xl-10 col-lg-10">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Banner 1 </h6>
                                </div>
                                <div class="card-body">
                                <!-- <form class="post-form" action="insert-brands.php" method="post" enctype="multipart/form-data">   -->
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Text</label>
                                                <input type="text" name="banner_text" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Normal Price</label>
                                                <input type="text" name="banner_sale_price" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Sale Price</label>
                                                <input type="text" name="banner_normal_price" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Banner Image</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file1" id="file1" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>                        
                                            </div>
                                        </div>
                                      
                                              </div>
                                            </div>
                                        </div>
                                         <!-- Banner #2 -->
                                    
                    <div class="row g-3 mb-3">
                    <div class="col-xl-10 col-lg-10">
                            <div class="card mb-3">
                                <div class="card-header py-2 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Banner 2</h6>
                                </div>
                                <div class="card-body">
                                <!-- <form class="post-form" action="insert-brands.php" method="post" enctype="multipart/form-data">   -->
                                <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Text</label>
                                                <input type="text" name="banner_text1" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Normal Price</label>
                                                <input type="text" name="banner_sale_price1" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Sale Price</label>
                                                <input type="text" name="banner_normal_price1" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Banner Image</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file2" id="file2" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                                </div>                        
                                            </div>
                                        </div>
                                      
                                              </div>
                                            </div>
                                        </div>
                                    
                                    
     <!-- Banner #3 -->
                                        <div class="row g-3 mb-3">
                                        <div class="col-xl-10 col-lg-10">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Banner 3</h6>
                                </div>
                                <div class="card-body">
                                <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Text</label>
                                                <input type="text" name="banner_text2" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Normal Price</label>
                                                <input type="text" name="banner_sale_price2" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Sale Price</label>
                                                <input type="text" name="banner_normal_price2" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Banner Image</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file3" id="file3" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                                </div>                        
                                            </div>
                                        </div>
                                      
                                              </div>
                                            </div>
                                        </div>
                                         <!-- Banner #4 -->
                    <div class="row g-3 mb-3">
                        <div class="col-xl-10 col-lg-10">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Banner 4</h6>
                                </div>
                                <div class="card-body">
                                <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Text</label>
                                                <input type="text" name="banner_text3" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Normal Price</label>
                                                <input type="text" name="banner_sale_price3" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Sale Price</label>
                                                <input type="text" name="banner_normal_price3" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Banner Image</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file4" id="file4" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                                </div>                        
                                            </div>
                                        </div>
                                      
                                              </div>
                                            </div>
                                        </div>
                              
                                        <!-- Banner #5 -->
                                    
                    <div class="row g-3 mb-3">
                        <div class="col-xl-10 col-lg-10">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Banner 5</h6>
                                </div>
                                <div class="card-body">
                                <form class="post-form" action="insert-brands.php" method="post" enctype="multipart/form-data">  
                                        <div class="row g-3 align-items-center">
                                        <div class="col-md-6">
                                                <label  class="form-label">Banner Text</label>
                                                <input type="text" name="banner_text4" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Normal Price</label>
                                                <input type="text" name="banner_sale_price4" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Banner Sale Price</label>
                                                <input type="text" name="banner_normal_price4" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Banner  Image</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file5" id="file5" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
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