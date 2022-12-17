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
                                <h3 class="fw-bold mb-0">Products Add</h3>
                                <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                            </div>
                        </div>
                    </div> <!-- Row end  -->  
                    
                    <div class="row g-3 mb-3">
                        <div class="col-xl-4 col-lg-4">
                            <div class="sticky-lg-top">
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Sizes</h6>
                                    </div>
                                    <div class="card-body">
                                    <form class="post-form" action="add-items.php" method="post" enctype="multipart/form-data">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">X-Small</label>
                                                <input  type="text" name="size1"  class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Small</label>
                                                <input type="text" name="size2"  class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Medium</label>
                                                <input  type="text" name="size3"  class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Large</label>
                                                <input type="text" name="size4"  class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label  class="form-label">X-Large</label>
                                                <input type="text" name="size5"  class="form-control">
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                              

                                
                              
                               
                              
                                <div class="card">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Colors</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Color1</label>
                                                <input  type="text" name="color1" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Color2</label>
                                                <input type="text" name="color2" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Color3</label>
                                                <input type="text" name="color3" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Color4</label>
                                                <input type="text" name="color4" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Color5</label>
                                                <input  type="text" name="color5" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-8 col-lg-8">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Basic information</h6>
                                </div>
                                <div class="card-body">
                                <!-- <form class="post-form" action="add-items.php" method="post" enctype="multipart/form-data">   -->
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Name</label>
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Color</label>
                                                <input type="text" name="color" class="form-control">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label  class="form-label">Short Description</label>
                                                <textarea type="text" name="short_description" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Size</label>
                                                <input type="text" name="size" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label  class="form-label">Long Description</label>
                                                <textarea type="text"  name="long_description" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Normal Price</label>
                                                <input type="text" name="normal_price" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Sale Price</label>
                                                <input type="text" name="sale_price" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">How To Use</label>
                                                <input type="text" name= "how_to_use" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Stock Available</label>
                                                <input type="text" name="stock_available" class="form-control">
                                            </div>
                                            <!-- <div class="col-md-12">
                                                <label class="form-label">Product Identifier URL</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">https://eBazar.com/</span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                             --><!-- <div class="col-md-12">
                                                <label class="form-label">Product Description</label>
                                                <textarea id="editor"></textarea>
                                                   
                                                </div> -->
                                            </div>
                                        </div>
                                 
                                    
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Images</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file" id="file" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file1" id="file1" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file"  name="file2" id="file2" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file3"  id="file3" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file4"  id="file4" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file5"  id="file6" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file6"  id="file6" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file7"  id="file7" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" name="file8"  id="file8" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                       <div>
                                       <button type="submit" value="Save" class="btn btn-icon btn-icon-end btn-primary" >
                            <span>Create</span>
                            <i data-cs-icon="send"></i>
                            </button>
                            </form>
                                       </div>
                                     
                                            <!-- <div class="col-md-12">
                                                <label  class="form-label w-100">Select Product Color</label>
                                                <input type="color" id="color">
                                            </div> -->
                                            <!-- <div class="col-md-12">
                                                <div class="product-cart">
                                                    <div class="checkout-table table-responsive">
                                                        <table id="myCartTable" class="table display dataTable table-hover align-middle" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product">Product</th>
                                                                    <th class="product">Product Tag Name</th>
                                                                    <th class="quantity">Color</th>
                                                                    <th class="quantity">Quantity</th>
                                                                    <th class="quantity">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="product-cart d-flex align-items-center">
                                                                            <div class="product-thumb">
                                                                                <img src="assets/images/product/upload.png" class="img-fluid avatar xl" alt="Product">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text"  class="form-control" placeholder="Product tag name">
                                                                    </td>
                                                                    <td>
                                                                        <input type="color" class="form-control">
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-quantity d-inline-flex">
                                                                            <input type="number">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="product-cart d-flex align-items-center">
                                                                            <div class="product-thumb">
                                                                                <img src="assets/images/product/upload.png" class="img-fluid avatar xl" alt="Product">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text"  class="form-control" placeholder="Product tag name">
                                                                    </td>
                                                                    <td>
                                                                        <input type="color" class="form-control">
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-quantity d-inline-flex">
                                                                            <input type="number">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="product-cart d-flex align-items-center">
                                                                            <div class="product-thumb">
                                                                                <img src="assets/images/product/upload.png" class="img-fluid avatar xl" alt="Product">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text"  class="form-control" placeholder="Product tag name">
                                                                    </td>
                                                                    <td>
                                                                        <input type="color" class="form-control">
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-quantity d-inline-flex">
                                                                            <input type="number">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="product-cart d-flex align-items-center">
                                                                            <div class="product-thumb">
                                                                                <img src="assets/images/product/upload.png" class="img-fluid avatar xl" alt="Product">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text"  class="form-control" placeholder="Product tag name">
                                                                    </td>
                                                                    <td>
                                                                        <input type="color" class="form-control">
                                                                    </td>
                                                                    <td>
                                                                        <div class="product-quantity d-inline-flex">
                                                                            <input type="number">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                             -->    </div>
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