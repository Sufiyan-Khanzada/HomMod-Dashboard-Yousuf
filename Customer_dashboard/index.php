<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <?php
  include 'header.php';
  ?>
     <?php include 'connection.php'; ?>
  </head>
  <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.php" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <span class="logo-text">eBazar</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link" href="index.php"><i class="icofont-ui-home"></i><span>Home</span></a>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#"><i
                                class="icofont-ui-lock"></i> <span>Authentication</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Authentication">
                            <li><a class="ms-link" href="auth-signin.html"><span>Sign in</span></a></li>
                            <li><a class="ms-link" href="auth-signup.html"><span>Sign up</span></a></li>
                            <li><a class="ms-link" href="auth-password-reset.html"><span>Password reset</span></a></li>
                            <li><a class="ms-link" href="auth-two-step.html"><span>2-Step Authentication</span></a></li>
                            <li><a class="ms-link" href="auth-404.html"><span>404</span></a></li>
                        </ul>
                    </li>
                    <li><a class="m-link active" href="index.php"><i class="icofont-code"></i> <span>Stater page</span></a></li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Components" href="#"><i
                                class="icofont-paint"></i> <span>UI Components</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Components">
                            <li><a class="ms-link" href="ui-alerts.html"><span>Alerts</span> </a></li>
                            <li><a class="ms-link" href="ui-badge.html"><span>Badge</span></a></li>
                            <li><a class="ms-link" href="ui-breadcrumb.html"><span>Breadcrumb</span></a></li>
                            <li><a class="ms-link" href="ui-buttons.html"><span>Buttons</span></a></li>
                            <li><a class="ms-link" href="ui-card.html"><span>Card</span></a></li>
                            <li><a class="ms-link" href="ui-carousel.html"><span>Carousel</span></a></li>
                            <li><a class="ms-link" href="ui-collapse.html"><span>Collapse</span></a></li>
                            <li><a class="ms-link" href="ui-dropdowns.html"><span>Dropdowns</span></a></li>
                            <li><a class="ms-link" href="ui-listgroup.html"><span>List group</span></a></li>
                            <li><a class="ms-link" href="ui-modal.html"><span>Modal</span></a></li>
                            <li><a class="ms-link" href="ui-navs.html"><span>Navs</span></a></li>
                            <li><a class="ms-link" href="ui-navbar.html"><span>Navbar</span></a></li>
                            <li><a class="ms-link" href="ui-pagination.html"><span>Pagination</span></a></li>
                            <li><a class="ms-link" href="ui-popovers.html"><span>Popovers</span></a></li>
                            <li><a class="ms-link" href="ui-progress.html"><span>Progress</span></a></li>
                            <li><a class="ms-link" href="ui-scrollspy.html"><span>Scrollspy</span></a></li>
                            <li><a class="ms-link" href="ui-spinners.html"><span>Spinners</span></a></li>
                            <li><a class="ms-link" href="ui-toasts.html"><span>Toasts</span></a></li>
                            <li><a class="ms-link" href="ui-tooltips.html"><span>Tooltips</span></a></li>
                        </ul>
                    </li>
                    <li><a class="m-link" href="documentation.html"><i class="icofont-law-document"></i>
                            <span>Documentation</span></a></li>
                    <li><a class="m-link" href="changelog.html"><i class="icofont-edit"></i> <span>Changelog</span> <span
                            class="ms-auto small-14 fw-bold">v1.0.0</span></a></li>
                </ul>
                <!-- Menu: menu collepce btn -->
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar py-4">
                    <div class="container-xxl">
        
                        <!-- header rightbar icon -->
                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="d-flex">
                                <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                                    <i class="icofont-info-square fs-5"></i>
                                </a>
                            </div>
                            <div class="dropdown zindex-popover">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="../assets/images/flag/GB.png" alt="">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0">
                                        <ul class="list-unstyled py-2 px-3">
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/GB.png" alt=""> English</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/DE.png" alt=""> German</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/FR.png" alt=""> French</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/IT.png" alt=""> Italian</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/RU.png" alt=""> Russian</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown notifications">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="icofont-alarm fs-5"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0 w380">
                                        <div class="card-header border-0 p-3">
                                            <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                                <span>Notifications</span>
                                                <span class="badge text-white">06</span>
                                            </h5>
                                        </div>
                                        <div class="tab-content card-body">
                                            <div class="tab-pane fade show active">
                                                <ul class="list-unstyled list mb-0">
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar1.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Chloe Walkerr</span> <small>2MIN</small></p>
                                                                <span class="">Added New Product 2021-07-15 <span class="badge bg-success">Add</span></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="avatar rounded-circle no-thumbnail">AH</div>
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Hill</span> <small>13MIN</small></p>
                                                                <span class="">Invoice generator </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar3.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Melanie	Oliver</span> <small>1HR</small></p>
                                                                <span class="">Orader  Return RT-00004</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar5.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Boris Hart</span> <small>13MIN</small></p>
                                                                <span class="">Product Order to Toyseller</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar6.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Lambert</span> <small>1HR</small></p>
                                                                <span class="">Leave Apply</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar7.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                                <span class="">Product Stoke Entry Updated</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">John Quinn</span></p>
                                    <small>Admin Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail" src="../assets/images/profile_av.svg" alt="profile">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="../assets/images/profile_av.svg" alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold">John	Quinn</span></p>
                                                    <small class="">Johnquinn@gmail.com</small>
                                                </div>
                                            </div>
                                            
                                            <div><hr class="dropdown-divider border-dark"></div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a href="admin-profile.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>
                                            <a href="order-invoices.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-file-text fs-5 me-3"></i>Order Invoices</a>
                                            <a href="auth-signin.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>vv</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="setting ms-2">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i class="icofont-gear-alt fs-5"></i></a>
                            </div>
                        </div>
        
                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>
        
                        <!-- main menu Search-->
                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                            <div class="input-group flex-nowrap input-group-lg">
                                <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                                
                            </div>
                        </div>
        
                    </div>
                </nav>
            </div>
  

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">

                    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                        <div class="col">
                            <div class="alert-success alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-success text-light"><i class="fa fa-dollar fa-lg"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Revenue</div>
                                        <span class="small">$18,925</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-danger alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="fa fa-credit-card fa-lg"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Expense</div>
                                        <span class="small">$11,024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-warning alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="fa fa-smile-o fa-lg"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Happy Clients</div>
                                        <span class="small">8,925</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-info alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-info text-light"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">New StoreOpen</div>
                                        <span class="small">8,925</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->
                    <?php
                   $sql = "SELECT COUNT(id) AS users FROM users";
                   $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                   if(mysqli_num_rows($result) > 0) {

                      ?>
                      
                                                              
        <?php
                      while($row = mysqli_fetch_assoc($result)){
                        $sql1 = "SELECT COUNT(id) AS item FROM items";
                        $result1 = mysqli_query($conn, $sql1);
                        if(mysqli_num_rows($result) > 0){
                      while($row1 = mysqli_fetch_assoc($result1)){
                        $sql2 = "SELECT COUNT(id) AS categ FROM categories";
                        $result2 = mysqli_query($conn, $sql2);
                        if(mysqli_num_rows($result) > 0){
                      while($row2 = mysqli_fetch_assoc($result2)){
                        $sql3 = "SELECT COUNT(id) AS brand FROM brands";
                        $result3= mysqli_query($conn, $sql3);
                        if(mysqli_num_rows($result) > 0){
                      while($row3 = mysqli_fetch_assoc($result3)){
                      ?>
                
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12">
                            
                            </div>
                            <div class="tab-content mt-1">
                                <div class="tab-pane fade show active" id="summery-today">
                                    <div class="row g-1 g-sm-3 mb-3 row-deck">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Customers</span>
                                                        <div><span class="fs-6 fw-bold me-2"><?php echo $row['users'];?></span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Products</span>
                                                        <div><span class="fs-6 fw-bold me-2"><?php echo $row1['item'];?></span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Categories</span>
                                                        <div><span class="fs-6 fw-bold me-2"><?php echo $row2['categ'];?></span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Total Brands</span>
                                                        <div><span class="fs-6 fw-bold me-2"><?php echo $row3['brand'];?></span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Total Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">$35000</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Visitors</span>
                                                        <div><span class="fs-6 fw-bold me-2">11452</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-users-social fs-3 color-light-success"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Total Products</span>
                                                        <div><span class="fs-6 fw-bold me-2">184511</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-bag fs-3 color-light-orange"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Top Selling Item</span>
                                                        <div><span class="fs-6 fw-bold me-2">122</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-star fs-3 color-lightyellow"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Dealership</span>
                                                        <div><span class="fs-6 fw-bold me-2">32</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- row end -->
                                </div>
                                <div class="tab-pane fade" id="summery-week">
                                    <div class="row g-3 mb-4 row-deck">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Customers</span>
                                                        <div><span class="fs-6 fw-bold me-2">54,208</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Order</span>
                                                        <div><span class="fs-6 fw-bold me-2">12314</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Avg Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">$11770</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Avg Item Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">1185</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Total Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">$135000</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Visitors</span>
                                                        <div><span class="fs-6 fw-bold me-2">111452</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-users-social fs-3 color-light-success"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Total Products</span>
                                                        <div><span class="fs-6 fw-bold me-2">194511</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-bag fs-3 color-light-orange"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Top Selling Item</span>
                                                        <div><span class="fs-6 fw-bold me-2">1122</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-star fs-3 color-lightyellow"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Dealership</span>
                                                        <div><span class="fs-6 fw-bold me-2">132</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- row end -->
                                </div>
                                <div class="tab-pane fade" id="summery-month">
                                    <div class="row g-3 mb-4 row-deck">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Customers</span>
                                                        <div><span class="fs-6 fw-bold me-2">74,208</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Order</span>
                                                        <div><span class="fs-6 fw-bold me-2">22314</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Avg Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">$21770</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Avg Item Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">2185</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Total Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">$235000</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Visitors</span>
                                                        <div><span class="fs-6 fw-bold me-2">211452</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-users-social fs-3 color-light-success"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Total Products</span>
                                                        <div><span class="fs-6 fw-bold me-2">284511</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-bag fs-3 color-light-orange"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Top Selling Item</span>
                                                        <div><span class="fs-6 fw-bold me-2">222</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-star fs-3 color-lightyellow"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Dealership</span>
                                                        <div><span class="fs-6 fw-bold me-2">232</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- row end -->
                                </div>
                                <div class="tab-pane fade" id="summery-year">
                                    <div class="row g-3 mb-4 row-deck">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Customers</span>
                                                        <div><span class="fs-6 fw-bold me-2">104,208</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-student-alt fs-3 color-light-orange"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Order</span>
                                                        <div><span class="fs-6 fw-bold me-2">252314</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-shopping-cart fs-3 color-lavender-purple"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Avg Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">$852770</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-sale-discount fs-3 color-santa-fe"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Avg Item Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">75885</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-calculator-alt-2 fs-3 color-danger"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Total Sale</span>
                                                        <div><span class="fs-6 fw-bold me-2">$350000</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-calculator-alt-1 fs-3 color-lightblue"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Visitors</span>
                                                        <div><span class="fs-6 fw-bold me-2">114521452</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-users-social fs-3 color-light-success"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Total Products</span>
                                                        <div><span class="fs-6 fw-bold me-2">884511</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-bag fs-3 color-light-orange"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Top Selling Item</span>
                                                        <div><span class="fs-6 fw-bold me-2">7522</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-star fs-3 color-lightyellow"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body py-xl-4 py-3 d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="left-info">
                                                        <span class="text-muted">Dealership</span>
                                                        <div><span class="fs-6 fw-bold me-2">1832</span></div>
                                                    </div>
                                                    <div class="right-icon">
                                                        <i class="icofont-handshake-deal fs-3 color-lavender-purple"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- row end -->
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->

                    <div class="row g-3 mb-3">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Sales Status</h6>
                                </div>
                                <div class="card-body">
                                    <div id="apex-GenderOverview"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->
                    <?php 
                    }}
                      }}}}}}
                      ?>
                    <div class="row g-3 mb-3">
                        <div class="col-xxl-8 col-xl-8">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Shopping Status</h6>
                                </div>
                                <div class="card-body">
                                    <div class="ac-line-transparent" id="apex-shoppingstatus"></div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Top Selling Product</h6>
                                </div>
                                <div class="card-body">
                                    <div id="topselling"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Our Branch Location & Revenue</h6>
                                </div>
                                <div class="card-body">
                                    <div id="googleMap" style="width:100%;height:397px;"></div>
                                    <div class="location-revenue mt-5">
                                        <label class="fw-bold">India</label>
                                        <div class="progress mb-4" style="height: 8px;">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="30"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <label class="fw-bold">Mauritius</label>
                                        <div class="progress mb-4" style="height: 8px;">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 45%" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <label class="fw-bold">Colombia</label>
                                        <div class="progress mb-4" style="height: 8px;">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <label class="fw-bold">Russia</label>
                                        <div class="progress mb-4" style="height: 8px;">
                                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <label class="fw-bold">France</label>
                                        <div class="progress mb-3" style="height: 8px;">
                                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->

                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Active Users Status</h6>
                                </div>
                                <div class="card-body">
                                    <div class="p-4 active-user bg-lightblue rounded-2 mb-2">
                                        <span class="fw-bold d-flex justify-content-center fs-3">1345</span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Active pages</th>
                                                <th scope="col">Users</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><a href="#">/dist/product.php</a></td>
                                                <td>245</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">/dist/product-cart.php</a></td>
                                                <td>455</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">/dist/admin-profile.php</a></td>
                                                <td>45</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">/dist/order-history.php</a></td>
                                                <td>545</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">/dist/product-detail.php</a></td>
                                                <td>55</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Avg Expense Costs</h6>
                                </div>
                                <div class="card-body">
                                    <div class="h2 mb-0">$1105.5</div>
                                    <span class="text-muted small">Avg Expense Costs All Month</span>
                                    <div id="apex-expense"></div>  
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->

                    <div class="row g-3 mb-3"> 
                        <div class="col-md-12">
                            <div class="card"> 
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Recent Transactions</h6>
                                </div>
                                <div class="card-body"> 
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">  
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Item</th>
                                                <th>Customer Name</th>
                                                <th>Payment Info</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>#Order-78414</strong></td>
                                                <td><img src="assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"><span> Oculus VR </span></td>
                                                <td>Molly</td>
                                                <td>Credit Card</td>
                                                <td>
                                                    $420
                                                </td>
                                                <td><span class="badge bg-warning">Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>#Order-58414</strong></td>
                                                <td><img src="assets/images/product/product-2.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Wall Clock</span></td>
                                                <td>Brian</td>
                                                <td>Debit Card</td>
                                                <td>
                                                    $220
                                                </td>
                                                <td><span class="badge bg-success">Complited</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>#Order-48414</strong></td>
                                                <td><img src="assets/images/product/product-3.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Note Diaries</span></td>
                                                <td>Julia</td>
                                                <td>Debit Card</td>
                                                <td>
                                                    $250
                                                </td>
                                                <td><span class="badge bg-success">Complited</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>#Order-38414</strong></td>
                                                <td><img src="assets/images/product/product-4.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Flower Port</span></td>
                                                <td>Sonia</td>
                                                <td>Credit Card</td>
                                                <td>
                                                    $320
                                                </td>
                                                <td><span class="badge bg-warning">Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>#Order-28414</strong></td>
                                                <td><img src="assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Oculus VR</span></td>
                                                <td>Adam H</td>
                                                <td>Debit Card</td>
                                                <td>
                                                    $20
                                                </td>
                                                <td><span class="badge bg-warning">Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>#Order-18414</strong></td>
                                                <td><img src="assets/images/product/product-2.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Wall Clock</span></td>
                                                <td>Alexander</td>
                                                <td>Debit Card</td>
                                                <td>
                                                    $820
                                                </td>
                                                <td><span class="badge bg-success">Complited</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>#Order-11414</strong></td>
                                                <td><img src="assets/images/product/product-3.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Note Diaries</span></td>
                                                <td>Gabrielle</td>
                                                <td>Bank Emi</td>
                                                <td>
                                                    $620
                                                </td>
                                                <td><span class="badge bg-success">Complited</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->
                    
                </div>
            </div>
        
            <?php
  include 'footer.php';
  ?>