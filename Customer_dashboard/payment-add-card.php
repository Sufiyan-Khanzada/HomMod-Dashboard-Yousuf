<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php
  include 'header.php';
  ?>
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
                                        <h6 class="m-0 fw-bold">Pricing Info</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-12">
                                                <label  class="form-label">Product Price Sale</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label  class="form-label">Product Price Without Sale</label>
                                                <input type="text" class="form-control">
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
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
                                                Hidden
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Size</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="sizechek1">
                                            <label class="form-check-label" for="sizechek1">
                                            XS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="sizechek2">
                                            <label class="form-check-label" for="sizechek2">
                                            S
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="sizechek3">
                                            <label class="form-check-label" for="sizechek3">
                                            M
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="sizechek4">
                                            <label class="form-check-label" for="sizechek4">
                                            L
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="sizechek5">
                                            <label class="form-check-label" for="sizechek5">
                                            XL
                                            </label>
                                        </div>
                                    </div>
                                </div>
                              <!--   <div class="card mb-3">
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
                                </div> -->
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Tags</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group demo-tagsinput-area">
                                            <div class="form-line">
                                                <input type="text" class="form-control" data-role="tagsinput">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Categories</h6>
                                    </div>
                                    <div class="card-body">
                                        <label  class="form-label">Categories Select</label>
                                        <select class="form-select" size="3" aria-label="size 3 select example">
                                            <option value="1">Watch</option>
                                            <option value="2">Clothes</option>
                                            <option value="3">Toy</option>
                                            <option value="4">Cosmetic</option>
                                            <option value="5">Laptop</option>
                                            <option value="6">Mobile</option>
                                            <option value="7">Gaming accessories</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Sub Categories</h6>
                                    </div>
                                    <div class="card-body">
                                        <label  class="form-label">Categories Select</label>
                                        <select class="form-select" size="3" aria-label="size 3 select example">
                                            <option value="1">Watch</option>
                                            <option value="2">Clothes</option>
                                            <option value="3">Toy</option>
                                            <option value="4">Cosmetic</option>
                                            <option value="5">Laptop</option>
                                            <option value="6">Mobile</option>
                                            <option value="7">Gaming accessories</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                        <h6 class="m-0 fw-bold">Inventory Info</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-12">
                                                <label  class="form-label">SKU</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label  class="form-label">Total Stock Quantity</label>
                                                <input type="text" class="form-control">
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
                                    
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>Bank 1</option>
                                <option>Bank 2</option>
                                <option>Bank 3</option>
                                <option>Bank 4</option>
                                <option>Bank 5</option>
                                <option>Bank 6</option>
                                <option>Bank 7</option>
                                <option>Bank 8</option>
                                <option>Bank 9</option>
                                <option>Bank 10</option>
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <!-- <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Shipping Country</h6>
                                </div>
                                 --><!-- <div class="card-body">
                                    <select id="optgroup" class="ms w-100" multiple="multiple">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div> -->
                            </div>
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Images</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Product Images Upload</label>
                                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                                <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
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
                                             -->    
                                             </div>
                                            </div>
                                        </div>
                                    </form>
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