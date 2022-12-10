<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/ui-carousel.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 18:18:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::eBazar:: Ui Carousel </title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- Plugin css -->
    <link rel="stylesheet" href="../assets/plugin/prism/prism.css">

    <!-- project css file  -->
    <link rel="stylesheet" href="../assets/css/ebazar.style.min.css">
</head>
<body>
    <div id="ebazar-layout" class="theme-blue">
    
        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.html" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <span class="logo-text">eBazar</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link" href="../index.html"><i class="icofont-ui-home"></i><span>Home</span></a>
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
                    <li><a class="m-link" href="index.html"><i class="icofont-code"></i> <span>Stater page</span></a></li>
                    <li class="collapsed">
                        <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#menu-Components" href="#"><i
                                class="icofont-paint"></i> <span>UI Components</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse show" id="menu-Components">
                            <li><a class="ms-link" href="ui-alerts.html"><span>Alerts</span> </a></li>
                            <li><a class="ms-link" href="ui-badge.html"><span>Badge</span></a></li>
                            <li><a class="ms-link" href="ui-breadcrumb.html"><span>Breadcrumb</span></a></li>
                            <li><a class="ms-link" href="ui-buttons.html"><span>Buttons</span></a></li>
                            <li><a class="ms-link" href="ui-card.html"><span>Card</span></a></li>
                            <li><a class="ms-link active" href="ui-carousel.html"><span>Carousel</span></a></li>
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
                    <div class="container">
        
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
                                            <a href="../admin-profile.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>
                                            <a href="../order-invoices.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-file-text fs-5 me-3"></i>Order Invoices</a>
                                            <a href="auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
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
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container">
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <div class="col-lg-8 col-sm-12">
                                <h2 id="how-it-works">How it works</h2>
                                <p>The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.</p>
                                <p>In browsers where the <a href="https://www.w3.org/TR/page-visibility/">Page Visibility API</a> is supported, the carousel will avoid sliding when the webpage is not visible to the user (such as when the browser tab is inactive, the browser window is minimized, etc.).</p>
                                <div class="card card-callout mb-3">
                                    <div class="card-body">
                                        The animation effect of this component is dependent on the <code>prefers-reduced-motion</code> media query. See the <a href="https://v5.getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced motion section of our accessibility documentation</a>.
                                    </div>
                                </div>
                                
                                <p>Please be aware that nested carousels are not supported, and carousels are generally not compliant with accessibility standards.</p>
                                <h2 id="example">Example</h2>
                                <p>Carousels don’t automatically normalize slide dimensions. As such, you may need to use additional utilities or custom styles to appropriately size content. While carousels support previous/next controls and indicators, they’re not explicitly required. Add and customize as you see fit.</p>
                                <p><strong>The <code>.active</code> class needs to be added to one of the slides</strong> otherwise the carousel will not be visible. Also be sure to set a unique id on the <code>.carousel</code> for optional controls, especially if you’re using multiple carousels on a single page. Control and indicator elements must have a <code>data-bs-target</code> attribute (or <code>href</code> for links) that matches the id of the <code>.carousel</code> element.</p>
                                
                                <h3 id="slides-only">Slides only</h3>
                                <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.w-100</code> on carousel images to prevent browser default image alignment.</p>
                                <div class="bd-example mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="img-fluid" src="../assets/images/gallery/10.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/8.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/1.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    <pre>
    <code class="language-html" data-lang="html">&lt;div id=&quot;carouselExampleSlidesOnly&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
        &lt;div class=&quot;carousel-inner&quot;&gt;
            &lt;div class=&quot;carousel-item active&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/10.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/8.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/1.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                                </div>
                                
                                <h3 id="with-controls">With controls</h3>
                                <p>Adding in the previous and next controls:</p>
                                <div class="bd-example mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="img-fluid" src="../assets/images/gallery/10.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/8.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    <pre>
    <code class="language-html" data-lang="html">&lt;div id=&quot;carouselExampleControls&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
        &lt;div class=&quot;carousel-inner&quot;&gt;
            &lt;div class=&quot;carousel-item active&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/10.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/8.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/1.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
            &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
        &lt;/a&gt;
        &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
            &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;</code>
    </pre>
                                </div>
                                
                                <h3 id="with-indicators">With indicators</h3>
                                <p>You can also add the indicators to the carousel, alongside the controls, too.</p>
                                <div class="bd-example mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=""></li>
                                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class=""></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="img-fluid" src="../assets/images/gallery/10.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/8.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    <pre>
    <code class="language-html" data-lang="html">&lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
        &lt;ol class=&quot;carousel-indicators&quot;&gt;
            &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;1&quot; class=&quot;&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;2&quot; class=&quot;&quot;&gt;&lt;/li&gt;
        &lt;/ol&gt;
        &lt;div class=&quot;carousel-inner&quot;&gt;
            &lt;div class=&quot;carousel-item active&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/10.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/8.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/1.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
            &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
        &lt;/a&gt;
        &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
            &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;</code>
    </pre>
                                </div>
                                
                                <h3 id="with-captions">With captions</h3>
                                <p>Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. They can be easily hidden on smaller viewports, as shown below, with optional <a href="https://v5.getbootstrap.com/docs/5.0/utilities/display/">display utilities</a>. We hide them initially with <code>.d-none</code> and bring them back on medium-sized devices with <code>.d-md-block</code>.</p>
                                <div class="bd-example mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class=""></li>
                                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class=""></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="img-fluid" src="../assets/images/gallery/1.jpg" alt="" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>First slide label</h5>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/2.jpg" alt="" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Second slide label</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/3.jpg" alt="" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Third slide label</h5>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    <pre>
    <code class="language-html" data-lang="html">&lt;div id=&quot;carouselExampleCaptions&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
        &lt;ol class=&quot;carousel-indicators&quot;&gt;
            &lt;li data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide-to=&quot;1&quot; class=&quot;&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide-to=&quot;2&quot; class=&quot;&quot;&gt;&lt;/li&gt;
        &lt;/ol&gt;
        &lt;div class=&quot;carousel-inner&quot;&gt;
            &lt;div class=&quot;carousel-item active&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/1.jpg&quot; alt=&quot;&quot; /&gt;
                &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                    &lt;h5&gt;First slide label&lt;/h5&gt;
                    &lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/2.jpg&quot; alt=&quot;&quot; /&gt;
                &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                    &lt;h5&gt;Second slide label&lt;/h5&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/3.jpg&quot; alt=&quot;&quot; /&gt;
                &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                    &lt;h5&gt;Third slide label&lt;/h5&gt;
                    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleCaptions&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
            &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
        &lt;/a&gt;
        &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleCaptions&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
            &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;</code>
    </pre>
                                </div>
                                
                                <h3 id="crossfade">Crossfade</h3>
                                <p>Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>
                                <div class="bd-example mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="img-fluid" src="../assets/images/gallery/10.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/8.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="img-fluid" src="../assets/images/gallery/1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    <pre>
    <code class="language-html" data-lang="html">&lt;div id=&quot;carouselExampleFade&quot; class=&quot;carousel slide carousel-fade&quot; data-bs-ride=&quot;carousel&quot;&gt;
        &lt;div class=&quot;carousel-inner&quot;&gt;
            &lt;div class=&quot;carousel-item active&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/10.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/8.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/1.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleFade&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
            &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
        &lt;/a&gt;
        &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleFade&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
            &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;</code>
    </pre>
                                </div>
                                
                                <h3 id="individual-carousel-item-interval">Individual <code>.carousel-item</code> interval</h3>
                                <p>Add <code>data-interval=""</code> to a <code>.carousel-item</code> to change the amount of time to delay between automatically cycling to the next item.</p>
                                <div class="bd-example mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item" data-interval="10000">
                                                        <img class="img-fluid" src="../assets/images/gallery/2.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item active carousel-item-left" data-interval="2000">
                                                        <img class="img-fluid" src="../assets/images/gallery/5.jpg" alt="" />
                                                    </div>
                                                    <div class="carousel-item carousel-item-next carousel-item-left">
                                                        <img class="img-fluid" src="../assets/images/gallery/7.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    <pre>
    <code class="language-html" data-lang="html">&lt;div id=&quot;carouselExampleInterval&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
        &lt;div class=&quot;carousel-inner&quot;&gt;
            &lt;div class=&quot;carousel-item&quot; data-interval=&quot;10000&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/2.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item active carousel-item-left&quot; data-interval=&quot;2000&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/5.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item carousel-item-next carousel-item-left&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/7.jpg&quot; alt=&quot;&quot; /&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleInterval&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
            &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
        &lt;/a&gt;
        &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleInterval&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
            &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;</code>
    </pre>
                                </div>
                                
                                <h2 id="dark-variant">Dark variant</h2>
                                <p>Add <code>.carousel-dark</code> to the <code>.carousel</code> for darker controls, indicators, and captions. Controls have been inverted from their default white fill with the <code>filter</code> CSS property. Captions and controls have additional Sass variables that customize the <code>color</code> and <code>background-color</code>.</p>
                                <div class="bd-example mb-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class=""></li>
                                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class=""></li>
                                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="active"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item" data-interval="10000">
                                                        <img class="img-fluid" src="../assets/images/gallery/3.jpg" alt="" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>First slide label</h5>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item active carousel-item-left" data-interval="2000">
                                                        <img class="img-fluid" src="../assets/images/gallery/8.jpg" alt="" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Second slide label</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item carousel-item-next carousel-item-left">
                                                        <img class="img-fluid" src="../assets/images/gallery/6.jpg" alt="" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Third slide label</h5>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
    <pre>
    <code class="language-html" data-lang="html">&lt;div id=&quot;carouselExampleDark&quot; class=&quot;carousel carousel-dark slide&quot; data-bs-ride=&quot;carousel&quot;&gt;
        &lt;ol class=&quot;carousel-indicators&quot;&gt;
            &lt;li data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide-to=&quot;0&quot; class=&quot;&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide-to=&quot;1&quot; class=&quot;&quot;&gt;&lt;/li&gt;
            &lt;li data-bs-target=&quot;#carouselExampleDark&quot; data-bs-slide-to=&quot;2&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
        &lt;/ol&gt;
        &lt;div class=&quot;carousel-inner&quot;&gt;
            &lt;div class=&quot;carousel-item&quot; data-interval=&quot;10000&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/3.jpg&quot; alt=&quot;&quot; /&gt;
                &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                    &lt;h5&gt;First slide label&lt;/h5&gt;
                    &lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item active carousel-item-left&quot; data-interval=&quot;2000&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/8.jpg&quot; alt=&quot;&quot; /&gt;
                &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                    &lt;h5&gt;Second slide label&lt;/h5&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;carousel-item carousel-item-next carousel-item-left&quot;&gt;
                &lt;img class=&quot;img-fluid&quot; src=&quot;../assets/images/gallery/6.jpg&quot; alt=&quot;&quot; /&gt;
                &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                    &lt;h5&gt;Third slide label&lt;/h5&gt;
                    &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleDark&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
            &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
        &lt;/a&gt;
        &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleDark&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
            &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
            &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
        &lt;/a&gt;
    &lt;/div&gt;</code>
    </pre>
                                </div>
                                
                                <h2 id="usage">Usage</h2>
                                <h3 id="via-data-attributes">Via data attributes</h3>
                                <p>Use data attributes to easily control the position of the carousel. <code>data-slide</code> accepts the keywords <code>prev</code> or <code>next</code>, which alters the slide position relative to its current position. Alternatively, use <code>data-bs-slide-to</code> to pass a raw slide index to the carousel <code>data-bs-slide-to="2"</code>, which shifts the slide position to a particular index beginning with <code>0</code>.</p>
                                <p>The <code>data-bs-ride="carousel"</code> attribute is used to mark a carousel as animating starting at page load. If you don’t use <code>data-bs-ride="carousel"</code> to initialize your carousel, you have to initialize it yourself. <strong>It cannot be used in combination with (redundant and unnecessary) explicit JavaScript initialization of the same carousel.</strong></p>
                                
                                <h3 id="via-javascript">Via JavaScript</h3>
                                <p>Call carousel manually with:</p>
                                <div class="bd-example mb-5">
    <pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCarousel</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'#myCarousel'</span><span class="p">)</span>
    <span class="kd">var</span> <span class="nx">carousel</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Carousel</span><span class="p">(</span><span class="nx">myCarousel</span><span class="p">)</span>
    </code></pre>
                                </div>
                                
                                <h3 id="options">Options</h3>
                                <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-interval=""</code>.</p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 100px;">Name</th>
                                            <th style="width: 50px;">Type</th>
                                            <th style="width: 50px;">Default</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>interval</code></td>
                                            <td>number</td>
                                            <td><code>5000</code></td>
                                            <td>The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.</td>
                                        </tr>
                                        <tr>
                                            <td><code>keyboard</code></td>
                                            <td>boolean</td>
                                            <td><code>true</code></td>
                                            <td>Whether the carousel should react to keyboard events.</td>
                                        </tr>
                                        <tr>
                                            <td><code>pause</code></td>
                                            <td>string | boolean</td>
                                            <td><code>"hover"</code></td>
                                            <td><p>If set to <code>"hover"</code>, pauses the cycling of the carousel on <code>mouseenter</code> and resumes the cycling of the carousel on <code>mouseleave</code>. If set to <code>false</code>, hovering over the carousel won't pause it.</p>
                                            <p>On touch-enabled devices, when set to <code>"hover"</code>, cycling will pause on <code>touchend</code> (once the user finished interacting with the carousel) for two intervals, before automatically resuming. Note that this is in addition to the above mouse behavior.</p></td>
                                        </tr>
                                        <tr>
                                            <td><code>slide</code></td>
                                            <td>string | boolean</td>
                                            <td><code>false</code></td>
                                            <td>Autoplays the carousel after the user manually cycles the first item. If "carousel", autoplays the carousel on load.</td>
                                        </tr>
                                        <tr>
                                            <td><code>wrap</code></td>
                                            <td>boolean</td>
                                            <td><code>true</code></td>
                                            <td>Whether the carousel should cycle continuously or have hard stops.</td>
                                        </tr>
                                        <tr>
                                            <td><code>touch</code></td>
                                            <td>boolean</td>
                                            <td><code>true</code></td>
                                            <td>Whether the carousel should support left/right swipe interactions on touchscreen devices.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <h3 id="methods">Methods</h3>
                                <div class="card card-callout">
                                    <div class="card-body">
                                        <h4 id="asynchronous-methods-and-transitions">Asynchronous methods and transitions</h4>
                                        <p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</p>
                                        <p><a href="https://v5.getbootstrap.com/docs/5.0/getting-started/javascript/#asynchronous-functions-and-transitions">See our JavaScript documentation for more information</a>.</p>
                                    </div>
                                </div>
                                
                                <p>You can create a carousel instance with the carousel constructor, for example, to initialize with additional options and start cycling through items:</p>
                                <div class="bd-example mb-5">
    <pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCarousel</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'#myCarousel'</span><span class="p">)</span>
    <span class="kd">var</span> <span class="nx">carousel</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Carousel</span><span class="p">(</span><span class="nx">myCarousel</span><span class="p">,</span> <span class="p">{</span>
        <span class="nx">interval</span><span class="o">:</span> <span class="mi">2000</span><span class="p">,</span>
        <span class="nx">wrap</span><span class="o">:</span> <span class="kc">false</span>
    <span class="p">})</span>
    </code></pre>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Method</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>cycle</code></td>
                                            <td>Cycles through the carousel items from left to right.</td>
                                        </tr>
                                        <tr>
                                            <td><code>pause</code></td>
                                            <td>Stops the carousel from cycling through items.</td>
                                        </tr>
                                        <tr>
                                            <td><code>prev</code></td>
                                            <td>Cycles to the previous item. <strong>Returns to the caller before the previous item has been shown</strong> (e.g., before the <code>slid.bs.carousel</code> event occurs).</td>
                                        </tr>
                                        <tr>
                                            <td><code>next</code></td>
                                            <td>Cycles to the next item. <strong>Returns to the caller before the next item has been shown</strong> (e.g., before the <code>slid.bs.carousel</code> event occurs).</td>
                                        </tr>
                                        <tr>
                                            <td><code>nextWhenVisible</code></td>
                                            <td>Cycles the carousel to a particular frame (0 based, similar to an array). <strong>Returns to the caller before the target item has been shown</strong> (e.g., before the <code>slid.bs.carousel</code> event occurs).</td>
                                        </tr>
                                        <tr>
                                            <td><code>dispose</code></td>
                                            <td>Destroys an element's carousel.</td>
                                        </tr>
                                        <tr>
                                            <td><code>getInstance</code></td>
                                            <td>Static method which allows you to get the carousel instance associated with a DOM element.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <h3 id="events">Events</h3>
                                <p>Bootstrap’s carousel class exposes two events for hooking into carousel functionality. Both events have the following additional properties:</p>
                                <ul>
                                    <li><code>direction</code>: The direction in which the carousel is sliding (either <code>"left"</code> or <code>"right"</code>).</li>
                                    <li><code>relatedTarget</code>: The DOM element that is being slid into place as the active item.</li>
                                    <li><code>from</code>: The index of the current item</li>
                                    <li><code>to</code>: The index of the next item</li>
                                </ul>
                                <p>All carousel events are fired at the carousel itself (i.e. at the <code>&lt;div class="carousel"&gt;</code>).</p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">Event type</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>slide.bs.carousel</code></td>
                                            <td>Fires immediately when the <code>slide</code> instance method is invoked.</td>
                                        </tr>
                                        <tr>
                                            <td><code>slid.bs.carousel</code></td>
                                            <td>Fired when the carousel has completed its slide transition.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="bd-example mb-5">
    <pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCarousel</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myCarousel'</span><span class="p">)</span>

    <span class="nx">myCarousel</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'slide.bs.carousel'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
        <span class="c1">// do something...
    </span><span class="c1"></span><span class="p">})</span>
    </code></pre>
                                </div>
                                <h3 id="change-transition-duration">Change transition duration</h3>
                                <p>The transition duration of <code>.carousel-item</code> can be changed with the <code>$carousel-transition</code> Sass variable before compiling or custom styles if you’re using the compiled CSS. If multiple transitions are applied, make sure the transform transition is defined first (eg. <code>transition: transform 2s ease, opacity .5s ease-out</code>).</p>
                                
                            </div>
                            <div class="col-lg-3 col-sm-12 d-none d-sm-block">
                                <div class="sticky-lg-top">
                                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                                    <nav class="color-bg-200 py-3">
                                        <ul class="side-navbar">
                                            <li><a href="#how-it-works">How it works</a></li>
                                            <li><a href="#example">Example</a>
                                                <ul>
                                                    <li><a href="#slides-only">Slides only</a></li>
                                                    <li><a href="#with-controls">With controls</a></li>
                                                    <li><a href="#with-indicators">With indicators</a></li>
                                                    <li><a href="#with-captions">With captions</a></li>
                                                    <li><a href="#crossfade">Crossfade</a></li>
                                                    <li><a href="#individual-carousel-item-interval">Individual <code>.carousel-item</code> interval</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#dark-variant">Dark variant</a></li>
                                            <li><a href="#usage">Usage</a>
                                                <ul>
                                                    <li><a href="#via-data-attributes">Via data attributes</a></li>
                                                    <li><a href="#via-javascript">Via JavaScript</a></li>
                                                    <li><a href="#options">Options</a></li>
                                                    <li><a href="#methods">Methods</a></li>
                                                    <li><a href="#events">Events</a></li>
                                                    <li><a href="#change-transition-duration">Change transition duration</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> <!-- Row end  -->
                    </div>
                </div>
            </div>

            <!-- Modal Custom Settings-->
            <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog  modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custom Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body custom_setting">
                            <!-- Settings: Color -->
                            <div class="setting-theme pb-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                                <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                    <li data-theme="indigo"><div class="indigo"></div></li>
                                    <li data-theme="tradewind"><div class="tradewind"></div></li>
                                    <li data-theme="monalisa"><div class="monalisa"></div></li>
                                    <li data-theme="blue" class="active"><div class="blue"></div></li>
                                    <li data-theme="cyan"><div class="cyan"></div></li>
                                    <li data-theme="green"><div class="green"></div></li>
                                    <li data-theme="orange"><div class="orange"></div></li>
                                    <li data-theme="blush"><div class="blush"></div></li>
                                    <li data-theme="red"><div class="red"></div></li>
                                </ul>
                            </div>
                            <div class="sidebar-gradient py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                                <div class="form-check form-switch gradient-switch pt-2 mb-2">
                                    <input class="form-check-input" type="checkbox" id="CheckGradient">
                                    <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                                </div>
                            </div>
                            <!-- Settings: Template dynamics -->
                            <div class="dynamic-block py-3">
                                <ul class="list-unstyled choose-skin mb-2 mt-1">
                                    <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                                </ul>
                                <div class="dt-setting">
                                    <ul class="list-group list-unstyled mt-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Primary Color</label>
                                            <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Secondary Color</label>
                                            <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 1</label>
                                            <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 2</label>
                                            <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 3</label>
                                            <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 4</label>
                                            <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 5</label>
                                            <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Settings: Font -->
                            <div class="setting-font py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                                <ul class="list-group font_setting mt-1">
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                            <label class="form-check-label" for="font-poppins">
                                                Poppins Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                            <label class="form-check-label" for="font-opensans">
                                                Open Sans Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                            <label class="form-check-label" for="font-montserrat">
                                                Montserrat Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                            <label class="form-check-label" for="font-mukta">
                                                Mukta Google Font
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Settings: Light/dark -->
                            <div class="setting-mode py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                                <ul class="list-group list-unstyled mb-0 mt-1">
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-switch mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-switch">
                                            <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-high-contrast mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                            <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-rtl mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-rtl">
                                            <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-start">
                            <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary lift">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>

    <!-- Prism js file please do not add in your project -->
    <script src="../assets/plugin/prism/prism.js"></script>

    <!-- Jquery Page Js -->
    <script src="../../js/template.js"></script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/ui-carousel.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 18:18:54 GMT -->
</html>