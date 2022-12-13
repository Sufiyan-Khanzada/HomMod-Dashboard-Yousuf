<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php
  include 'header.php';
  ?>
<?php include 'connection.php'; ?>
  </head>                <!-- Menu: menu collepce btn -->
                
            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">

                  
                    <div class="row g-3 mb-3">
                        <div class="col-lg-4">
                            <div class="sticky-lg-top">
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Visibility Status</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="couponsstatus" checked>
                                            <label class="form-check-label">
                                                Published
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="couponsstatus">
                                            <label class="form-check-label">
                                                Scheduled
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="couponsstatus">
                                            <label class="form-check-label">
                                                Hidden
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Publish Schedule</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-12">
                                                <label  class="form-label">Publish Date</label>
                                                <input type="date" class="form-control w-100">
                                            </div>
                                            <div class="col-md-12">
                                                <label  class="form-label">Publish Time</label>
                                                <input type="time" class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Categories</h6>
                                    </div>
                                    <div class="card-body">
                                        <label  class="form-label">Parent category Select</label>
                                        <select class="form-select" size="3" aria-label="size 3 select example">
                                            <option value="2">Clothes</option>
                                            <option value="3">Toy</option>
                                            <option value="4">Cosmetic</option>
                                            <option value="5">Laptop</option>
                                            <option value="6">Mobile</option>
                                            <option value="7">Watch</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Categories Image Upload</h6>
                                        <small>With event and default file try to remove the image</small>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" id="dropify-event" data-default-file="assets/images/product/cropimg-upload.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Basic information</h6>
                                </div>
                                <div class="card-body">
                                <form class="post-form" action="add-categories.php" method="post" enctype="multipart/form-data"> 
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label  class="form-label">Name</label>
                                                <input type="text" name ="main_category" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                               <br>
                                               <br>
                                                <label class="form-label">Category Select</label>
                                                <div class="form-label" data-childselector="span">
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="user" >
                                                      <option>Select Category</option>  
                                                        <option value="Main">Main</option>
                                                        <option value="Sub1">Sub1</option>
                                                        <option value="Sub2">Sub1</option>
                                                      </select>
                                                      <br>
                                                    <div class="mb-3"></div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                               <br>
                                               <br>
                                                <label class="form-label">Sub Category</label>
                                             
                                                <div class="form-label" data-childselector="span">

                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="sub_category" >
                                                      <option>Sub Category</option>  
                                                        <option value="Main">Main</option>
                                                        <option value="White">White </option>
                                                        <option value="Black">Black</option>
                                                      </select>
                                                      <br>
                                                    <div class="mb-3"></div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                               <br>
                                               <br>
                                                <label class="form-label">Sub Category1</label>
                                             
                                                <div class="form-label" data-childselector="span">

                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="sub_category1" >
                                                      <option>Sub Category1</option>  
                                                        <option value="Main">Main</option>
                                                        <option value="C-White">C-White</option>
                                                        <option value="C-Black">C-Black</option>
                                                      </select>
                                                      <br>
                                                    <div class="mb-3"></div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                               <br>
                                               <br>
                                                <label class="form-label">Main Category1</label>
                                                <div class="form-label" data-childselector="span">
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="main_category1" >
                                                      <option>Main Category</option>  
                                                        <option value="Main">Main</option>
                                                        <option value="Sub1">Sub1</option>
                                                        <option value="Sub2">Sub2</option>
                                                      </select>
                                                      <br>
                                                    <div class="mb-3"></div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                               <br>
                                               <br>
                                                <label class="form-label">Main Cat Pic</label>
                                                <div class="form-label" data-childselector="span">
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="main_cat_pic" >
                                                      <option>Main Cat Pic</option>  
                                                        <option value="Main">Main</option>
                                                        <option value="Cat-Sub1">Cat-Sub1</option>
                                                        <option value="Cat-Sub2">Cat-Sub2</option>
                                                      </select>
                                                      <br>
                                                    <div class="mb-3"></div>
                                                    </div>
                                            </div>

                                          
                                            <div>
                                       <button type="submit" value="Save" class="btn btn-icon btn-icon-end btn-primary" >
                            <span>Create</span>
                            <i data-cs-icon="send"></i>
                            </button>
                            </form>
                                       </div>
                                            <div class="col-md-12">
                                                <!-- <label class="form-label">Product Identifier URL</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">https://sofia.com</span>
                                                    <input type="text" class="form-control">
                                                </div> -->
                                            </div>
                                            <div class="col-md-12">
                                                <!-- <label class="form-label">Product Description</label>
                                                <div id="editor">
                                                    <h4>Please add Product Description here</h4>
                                                </div> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <!-- <div class="card-header py-3 bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Cropped Images</h6>
                                    <small>If You Cropped Images Please Upload and croppd easily.</small>
                                </div> -->
                                <!-- <div class="card-body"> -->
                                    <!-- <div class="row g-3 mb-3">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                                            <div class="img-container">
                                                <img id="image" src="assets/images/product/upload.png" class="img-responsive" alt="Picture">
                                            </div> -->
                                        <!-- </div> -->
                                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                                            <div class="docs-preview clearfix">
                                                <!-- <div class="img-preview preview-lg"></div>
                                                <div class="img-preview preview-md"></div>
                                                <div class="img-preview preview-sm"></div>
                                                <div class="img-preview preview-xs"></div> -->
                                            </div>                                
                                            <div class="docs-data">
                                                <div class="input-group">
                                                    <!-- <div class="input-group-prepend">
                                                        <span class="input-group-text">X</span>
                                                    </div> -->
                                                    <!-- <input type="text" class="form-control" id="dataX" placeholder="x"> -->
                                                    <!-- <div class="input-group-append">
                                                        <span class="input-group-text">PX</span>
                                                    </div> -->
                                                </div>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-prepend">
                                                        <span class="input-group-text">Y</span>
                                                    </div> -->
                                                    <!-- <input type="text" class="form-control" id="dataY" placeholder="y"> -->
                                                    <!-- <div class="input-group-append">
                                                        <span class="input-group-text">PX</span>
                                                    </div> -->
                                                </div>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-prepend">
                                                        <span class="input-group-text">Width</span>
                                                    </div> -->
                                                    <!-- <input type="text" class="form-control" id="dataWidth" placeholder="width"> -->
                                                    <!-- <div class="input-group-append">
                                                        <span class="input-group-text">PX</span>
                                                    </div> -->
                                                </div>
                                                <div class="input-group">
                                                    <!-- <div class="input-group-prepend">
                                                        <span class="input-group-text">Height</span>
                                                    </div> -->
                                                    <!-- <input type="text" class="form-control" id="dataHeight" placeholder="height"> -->
                                                    <!-- <div class="input-group-append">
                                                        <span class="input-group-text">PX</span>
                                                    </div> -->
                                                </div>
                                               
                                                <!-- /.pixels of image -->
                                            </div>
                                        </div>
                                    </div><!-- Row end  --> 
                                    <div class="row g-3">
                                        <div class="col-lg-8 col-md-12 docs-buttons">
                                            <!-- .btn groups -->
                                            <!-- <button type="button" class="btn btn-sm btn-info" data-method="setDragMode" data-option="move" title="Move"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)"> <i class="icofont-drag1"></i> </span></button>
                                            <button type="button" class="btn btn-sm btn-info" data-method="setDragMode" data-option="crop" title="Crop"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)"> <i class="icofont-crop"></i> </span></button>
                    
                                            <button type="button" class="btn btn-sm btn-success" data-method="zoom" data-option="0.1" title="Zoom In"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)"> <i class="icofont-ui-zoom-in"></i> </span></button>
                                            <button type="button" class="btn btn-sm btn-success" data-method="zoom" data-option="-0.1" title="Zoom Out"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)"> <i class="icofont-ui-zoom-out"></i> </span></button>
                                            
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="move" data-option="-10" data-second-option="0" title="Move Left"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)"> <i class="icofont-circled-left"></i></span></button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="move" data-option="10" data-second-option="0" title="Move Right"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)"> <i class="icofont-circled-right"></i> </span></button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="move" data-option="0" data-second-option="-10" title="Move Up"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)"> <i class="icofont-circled-up"></i> </span></button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="move" data-option="0" data-second-option="10" title="Move Down"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)"> <i class="icofont-circled-down"></i></span></button>                                
                                            
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="rotate" data-option="-45" title="Rotate Left"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)"> <i class="icofont-rotation"></i> </span></button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="rotate" data-option="45" title="Rotate Right"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)"> <i class="icofont-rotation"></i> </span></button>
                                                                            
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="scaleX" data-option="-1" title="Flip Horizontal"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)"> <i class="icofont-exchange"></i> </span></button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="scaleY" data-option="-1" title="Flip Vertical"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;, -1)"> <i class="icofont-expand-alt"></i> </span></button>
                                            
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="crop" title="Crop"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)"> <i class="icofont-checked"></i> </span></button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="clear" title="Clear"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)"> <i class="icofont-ui-delete"></i> </span></button>
                                            
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="disable" title="Disable"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)"> <i class="icofont-lock"></i> </span></button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="enable" title="Enable"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)"> <i class="icofont-unlock"></i> </span></button>
                                            
                                            <button type="button" class="btn btn-sm btn-secondary" data-method="reset" title="Reset"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)"> <i class="icofont-refresh"></i> </span></button>
                                                <label class="btn btn-sm btn-secondary btn-upload" for="inputImage" title="Upload image file">
                                                    <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs"> <i class="icofont-upload"></i> </span>
                                                </label>
                                            <button type="button" class="btn btn-sm  btn-secondary" data-method="destroy" title="Destroy"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)"> <i class="icofont-power"></i> </span></button>
                                            
                                            <button type="button" class="btn btn-sm btn-danger" data-method="getCroppedCanvas" data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)"> Get Cropped Canvas </span> </button>
                                            <button type="button" class="btn btn-sm btn-danger" data-method="getCroppedCanvas" data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })"> 160&times;90 </span> </button>
                                            <button type="button" class="btn btn-sm btn-danger" data-method="getCroppedCanvas" data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })"> 320&times;180 </span> </button>
                                            
                                            <button type="button" class="btn btn-secondary" data-method="getData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)"> Get Data </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="setData" data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)"> Set Data </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="getContainerData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)"> Get Container Data </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="getImageData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)"> Get Image Data </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="getCanvasData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)"> Get Canvas Data </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="setCanvasData" data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)"> Set Canvas Data </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="getCropBoxData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)"> Get Crop Box Data </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="setCropBoxData" data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)"> Set Crop Box Data </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="moveTo" data-option="0"> <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)"> 0,0 </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="zoomTo" data-option="1"> <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)"> 100% </span> </button>
                                            <button type="button" class="btn btn-secondary" data-method="rotateTo" data-option="180"> <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)"> 180° </span> </button>
                                            <input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value"> -->
                                        </div>
                                        <div class="col-lg-4 col-md-12 docs-toggles">
                                            <!-- .btn groups -->
                                            
                                          
                                            <div class="dropdown dropup docs-options">
                                             
                                            </div>
                                        </div>
                                    </div><!-- Row end  --> 
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  --> 

                </div>
            </div>    
        
            <?php
  include 'footer.php';
  ?>