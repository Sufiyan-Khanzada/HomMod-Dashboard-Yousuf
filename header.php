<!doctype php>
<php class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HomMod - Admin|Dashboard </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ebazar.style.min.css">
</head>
<body>
    <div id="ebazar-layout" class="theme-blue">
        
        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.php" class="mb-0 brand-icon">
                <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <span class="logo-text">HomMod Admin Panel</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link active" href="index.php"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Products</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-product">
                                <li><a class="ms-link" href="product-add.php">Products Add</a></li>
                                <!-- <li><a class="ms-link" href="product-list.php">Product List</a></li>
                                <li><a class="ms-link" href="product-edit.php">Product Edit</a></li> -->
                                <li><a class="ms-link" href="product-detail.php">Product Details</a></li>
                                <li><a class="ms-link" href="pendingproduct.php">Product Edit/Delete</a></li>
                                <!-- <li><a class="ms-link" href="product-cart.php">Shopping Cart</a></li>
                                <li><a class="ms-link" href="checkout.php">Checkout</a></li> --> 
                            </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#cards" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Cards</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="cards">
                                <li><a class="ms-link" href="add-card.php">Add card</a></li>
                                <!-- <li><a class="ms-link" href="product-list.php">Product List</a></li>
                                <li><a class="ms-link" href="product-edit.php">Product Edit</a></li> -->
                                <li><a class="ms-link" href="#">Edit card</a></li>
                                <li><a class="ms-link" href="#">All cards</a></li>
                                <!-- <li><a class="ms-link" href="product-cart.php">Shopping Cart</a></li>
                                <li><a class="ms-link" href="checkout.php">Checkout</a></li> --> 
                            </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#categories" href="#">
                            <i class="icofont-chart-flow fs-5"></i> <span>Categories</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="categories">
                                 <li><a class="ms-link" href="categories-add.php">Categories Add</a></li>
                                <li><a class="ms-link" href="categorie-list.php">Categories List</a></li>
                              
                               
                            </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                        <i class="icofont-notepad fs-5"></i> <span>Orders</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-order">
                            <li><a class="ms-link" href="order-list.php">Orders List</a></li>
                            <li><a class="ms-link" href="order-details.php">Order Details</a></li>
                            <li><a class="ms-link" href="order-invoices.php">Order Invoices</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#payment" href="#">
                        <i class="icofont-notepad fs-5"></i> <span>Payment</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="payment">
                            <li><a class="ms-link" href="payment-add-card.php">Add Card</a></li>
                            <li><a class="ms-link" href="#">Edit Card</a></li>
                            <li><a class="ms-link" href="#">Remove Card</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#customers-info" href="#">
                        <i class="icofont-funky-man fs-5"></i> <span>Customers</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="customers-info">
                            <li><a class="ms-link" href="customers.php">All Customers</a></li>
                            <li><a class="ms-link" href="customer-detail.php">Customers Details</a></li>
                        </ul>
                    </li>
                    <!-- <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-sale" href="#">
                        <i class="icofont-sale-discount fs-5"></i> <span>Sales Promotion</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        Menu: Sub menu ul
                        <ul class="sub-menu collapse" id="menu-sale">
                            <li><a class="ms-link" href="coupons-list.php">Coupons List</a></li>
                            <li><a class="ms-link" href="coupon-add.php">Coupons Add</a></li>
                            <li><a class="ms-link" href="coupon-edit.php">Coupons Edit</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-inventory" href="#">
                        <i class="icofont-chart-histogram fs-5"></i> <span>Inventory</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        Menu: Sub menu ul
                        <ul class="sub-menu collapse" id="menu-inventory">
                            <li><a class="ms-link" href="inventory-info.php">Stock List</a></li>
                            <li><a class="ms-link" href="purchase.php">Purchase</a></li>
                            <li><a class="ms-link" href="supplier.php">Supplier</a></li>
                            <li><a class="ms-link" href="returns.php">Returns</a></li>
                            <li><a class="ms-link" href="department.php">Department</a></li>
                        </ul>
                    </li> -->
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                                class="icofont-ui-calculator"></i> <span>Orders</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                         

                                <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Componentsone">
                            <li><a class="ms-link" href="#">All Orders List</a></li>
                             <li><a class="ms-link" href="#">Edit/ Delte Order Details</a></li>
                            <!-- <li><a class="ms-link" href="salaryslip.php">Salary Slip </a></li>
                            <li><a class="ms-link" href="create-invoice.php">Create Invoice </a></li> --> 
                        </ul>
                    </li>
                    <!-- <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#app" href="#">
                        <i class="icofont-code-alt fs-5"></i> <span>App</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        Menu: Sub menu ul
                        <ul class="sub-menu collapse" id="app">
                            <li><a class="ms-link" href="calendar.php">Calandar</a></li>
                            <li><a class="ms-link" href="chat.php"> Chat App</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a class="m-link" href="store-locator.php"><i class="icofont-focus fs-5"></i> <span>Store Locator</span></a></li> -->
                    <!-- <li><a class="m-link" href="ui-elements/ui-alerts.php"><i class="icofont-paint fs-5"></i> <span>UI Components</span></a></li> -->
                    <!-- <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#page" href="#">
                        <i class="icofont-page fs-5"></i> <span>Other Pages</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        Menu: Sub menu ul
                        <ul class="sub-menu collapse" id="page">
                            <li><a class="ms-link" href="admin-profile.php">Profile Page</a></li>
                            <li><a class="ms-link" href="purchase-plan.php">Price Plan Example</a></li>
                            <li><a class="ms-link" href="charts.php">Charts Example</a></li>
                            <li><a class="ms-link" href="table.php">Table Example</a></li>
                            <li><a class="ms-link" href="forms.php">Forms Example</a></li>
                            <li><a class="ms-link" href="icon.php">Icons</a></li>
                            <li><a class="ms-link" href="contact.php">Contact Us</a></li>
                            <li><a class="ms-link" href="todo-list.php">Todo List</a></li>
                        </ul>
                    </li> -->
                </ul>
                <!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 18:17:50 GMT -->
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
                            <!-- <div class="d-flex">
                                <a class="nav-link text-primary collapsed" href="help.php" title="Get Help">
                                    <i class="icofont-info-square fs-5"></i>
                                </a>
                            </div>
                           -->  <div class="dropdown zindex-popover">
                                <!-- <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="assets/images/flag/GB.png" alt="">
                                </a> -->
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0">
                                        <!-- <ul class="list-unstyled py-2 px-3">
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/GB.png" alt=""> English</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/DE.png" alt=""> German</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/FR.png" alt=""> French</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/IT.png" alt=""> Italian</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="assets/images/flag/RU.png" alt=""> Russian</a>
                                            </li>
                                        </ul>
 -->                                    </div>
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
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar1.svg" alt="">
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
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar3.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Melanie	Oliver</span> <small>1HR</small></p>
                                                                <span class="">Orader  Return RT-00004</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar5.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Boris Hart</span> <small>13MIN</small></p>
                                                                <span class="">Product Order to Toyseller</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar6.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Lambert</span> <small>1HR</small></p>
                                                                <span class="">Leave Apply</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar7.svg" alt="">
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
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Admin</span></p>
                                    <small>Admin Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.svg" alt="profile">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="assets/images/profile_av.svg" alt="profile">
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
                                            <a href="ui-elements/auth-signin.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
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

 </body>


</php> 