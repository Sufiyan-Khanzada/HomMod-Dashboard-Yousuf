<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/ui-modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 18:18:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::eBazar:: Ui Modal </title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- Plugin css  -->
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
                            <li><a class="ms-link" href="ui-carousel.html"><span>Carousel</span></a></li>
                            <li><a class="ms-link" href="ui-collapse.html"><span>Collapse</span></a></li>
                            <li><a class="ms-link" href="ui-dropdowns.html"><span>Dropdowns</span></a></li>
                            <li><a class="ms-link" href="ui-listgroup.html"><span>List group</span></a></li>
                            <li><a class="ms-link active" href="ui-modal.html"><span>Modal</span></a></li>
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
                        <div class="bd-content">

                            <h2 id="how-it-works">How it works</h2>
                            <p>Before getting started with Bootstrap’s modal component, be sure to read the following as our menu options have recently changed.</p>
                            <div class="alert alert-danger" role="alert">
                                <strong>Modal</strong> for more bootstrao components <a href="https://v5.getbootstrap.com/docs/5.0/components/modal/" target="_blank">Bootstrap Modal documentation <i class="fa fa-external-link"></i></a>
                            </div>
                            <ul class="ps-3"> 
                                <li>Modals are built with HTML, CSS, and JavaScript. They’re positioned over everything else in the document and remove scroll from the <code>&lt;body&gt;</code> so that modal content scrolls instead.</li>
                                <li>Clicking on the modal “backdrop” will automatically close the modal.</li>
                                <li>Bootstrap only supports one modal window at a time. Nested modals aren’t supported as we believe them to be poor user experiences.</li>
                                <li>Modals use <code>position: fixed</code>, which can sometimes be a bit particular about its rendering. Whenever possible, place your modal HTML in a top-level position to avoid potential interference from other elements. You’ll likely run into issues when nesting a <code>.modal</code> within another fixed element.</li>
                                <li>Once again, due to <code>position: fixed</code>, there are some caveats with using modals on mobile devices. <a href="https://v5.getbootstrap.com/docs/5.0/getting-started/browsers-devices/#modals-and-dropdowns-on-mobile">See our browser support docs</a> for details.</li>
                                <li>Due to how HTML5 defines its semantics, <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-autofocus">the <code>autofocus</code> HTML attribute</a> has no effect in Bootstrap modals. To achieve the same effect, use some custom JavaScript:</li>
                            </ul>
                            <div class="mb-5">
    <pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myModal</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myModal'</span><span class="p">)</span>
    <span class="kd">var</span> <span class="nx">myInput</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myInput'</span><span class="p">)</span>

    <span class="nx">myModal</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'shown.bs.modal'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
        <span class="nx">myInput</span><span class="p">.</span><span class="nx">focus</span><span class="p">()</span>
    <span class="p">})</span>
    </code></pre>
                            </div>

                            <div class="border-top mt-5 pt-3">
                                <h4 id="modal-components">Modal components</h4>
                                <p>Below is a <em>static</em> modal example (meaning its <code>position</code> and <code>display</code> have been overridden). Included are the modal header, modal body (required for <code>padding</code>), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</p>
                                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview1" role="tab">Preview</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML1" role="tab">HTML</a></li>
                                </ul>
                                <div class="card mb-3 bg-transparent">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-Preview1" role="tabpanel">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalLive">Launch demo modal</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalLive" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLiveLabel">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Woohoo, you're reading this text in a modal!</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-HTML1" role="tabpanel">
    <pre class="language-html" data-lang="html">
    <code>&lt;!-- Button trigger modal --&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalLive&quot;&gt;Launch demo modal&lt;/button&gt;

    &lt;!-- Modal --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalLive&quot; tabindex=&quot;-1&quot;&gt;
        &lt;div class=&quot;modal-dialog&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                    &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLiveLabel&quot;&gt;Modal title&lt;/h5&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                    &lt;p&gt;Woohoo, you're reading this text in a modal!&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-footer&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top mt-5 pt-3">
                                <h5 id="static-backdrop">Static backdrop</h5>
                                <p>When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>
                                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview2" role="tab">Preview</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML2" role="tab">HTML</a></li>
                                </ul>
                                <div class="card mb-3 bg-transparent">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-Preview2" role="tabpanel">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">Launch static backdrop modal</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdropLive" data-backdrop="static" data-keyboard="false" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLiveLabel">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Understood</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-HTML2" role="tabpanel">
    <pre class="language-html" data-lang="html">
    <code>&lt;!-- Button trigger modal --&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#staticBackdropLive&quot;&gt;Launch static backdrop modal&lt;/button&gt;

    &lt;!-- Modal --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;staticBackdropLive&quot; data-backdrop=&quot;static&quot; data-keyboard=&quot;false&quot; tabindex=&quot;-1&quot;&gt;
        &lt;div class=&quot;modal-dialog&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                    &lt;h5 class=&quot;modal-title&quot; id=&quot;staticBackdropLiveLabel&quot;&gt;Modal title&lt;/h5&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                    &lt;p&gt;I will not close if you click outside me. Don't even try to press escape key.&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-footer&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Understood&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top mt-5 pt-3">
                                <h5 id="vertically-centered">Vertically centered</h5>
                                <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the modal.</p>
                                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview3" role="tab">Preview</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML3" role="tab">HTML</a></li>
                                </ul>
                                <div class="card mb-3 bg-transparent">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-Preview3" role="tabpanel">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Vertically centered modal</button>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Vertically centered scrollable modal</button>

                                                <!-- Modal Modal Center-->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Modal Centered Scrollable-->
                                                <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-HTML3" role="tabpanel">
    <pre class="language-html" data-lang="html">
    <code>&lt;!-- Button trigger modal --&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalCenter&quot;&gt;Vertically centered modal&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalCenteredScrollable&quot;&gt;Vertically centered scrollable modal&lt;/button&gt;

    &lt;!-- Modal Modal Center--&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalCenter&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalCenterTitle&quot; style=&quot;display: none;&quot; aria-hidden=&quot;true&quot;&gt;
        &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                    &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalCenterTitle&quot;&gt;Modal title&lt;/h5&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                    ...
                &lt;/div&gt;
                &lt;div class=&quot;modal-footer&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Modal Modal Centered Scrollable--&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalCenteredScrollable&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalCenteredScrollableTitle&quot; style=&quot;display: none;&quot; aria-hidden=&quot;true&quot;&gt;
        &lt;div class=&quot;modal-dialog modal-dialog-centered modal-dialog-scrollable&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                    &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalCenteredScrollableTitle&quot;&gt;Modal title&lt;/h5&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                    ...
                &lt;/div&gt;
                &lt;div class=&quot;modal-footer&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top mt-5 pt-3">
                                <h2 id="optional-sizes">Optional sizes</h2>
                                <p>Modals have three optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Size</th>
                                            <th>Class</th>
                                            <th>Modal max-width</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Small</td>
                                            <td><code>.modal-sm</code></td>
                                            <td><code>300px</code></td>
                                        </tr>
                                        <tr>
                                            <td>Default</td>
                                            <td class="text-muted">None</td>
                                            <td><code>500px</code></td>
                                        </tr>
                                        <tr>
                                            <td>Large</td>
                                            <td><code>.modal-lg</code></td>
                                            <td><code>800px</code></td>
                                        </tr>
                                        <tr>
                                            <td>Extra large</td>
                                            <td><code>.modal-xl</code></td>
                                            <td><code>1140px</code></td>
                                        </tr>
                                        <tr>
                                            <td>Fullscreen</td>
                                            <td><code>.modal-fullscreen</code></td>
                                            <td><code>Always</code></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview4" role="tab">Preview</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML4" role="tab">HTML</a></li>
                                </ul>
                                <div class="card mb-3 bg-transparent">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-Preview4" role="tabpanel">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Extra large modal</button>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Large modal</button>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Small modal</button>

                                                <!-- Modal Fullscreen -->
                                                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-fullscreen">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal XL -->
                                                <div class="modal fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title h4" id="exampleModalXlLabel">Extra large modal</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            ...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal LG -->
                                                <div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title h4" id="exampleModalLgLabel">Large modal</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal SM -->
                                                <div class="modal fade" id="exampleModalSm" tabindex="-1" aria-labelledby="exampleModalSmLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title h4" id="exampleModalSmLabel">Small modal</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-HTML4" role="tabpanel">
    <pre class="language-html" data-lang="html">
    <code>&lt;!-- Button trigger modal --&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreen&quot;&gt;Full screen&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalXl&quot;&gt;Extra large modal&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalLg&quot;&gt;Large modal&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalSm&quot;&gt;Small modal&lt;/button&gt;

    &lt;!-- Modal Fullscreen --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreen&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenLabel&quot; aria-hidden=&quot;true&quot; style=&quot;display: none;&quot;&gt;
        &lt;div class=&quot;modal-dialog modal-fullscreen&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                    &lt;h5 class=&quot;modal-title h4&quot; id=&quot;exampleModalFullscreenLabel&quot;&gt;Full screen modal&lt;/h5&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                    ...
                &lt;/div&gt;
                &lt;div class=&quot;modal-footer&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Modal XL --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalXl&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalXlLabel&quot; style=&quot;display: none;&quot; aria-hidden=&quot;true&quot;&gt;
        &lt;div class=&quot;modal-dialog modal-xl&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title h4&quot; id=&quot;exampleModalXlLabel&quot;&gt;Extra large modal&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                ...
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Modal LG --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalLg&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalLgLabel&quot; aria-hidden=&quot;true&quot; style=&quot;display: none;&quot;&gt;
        &lt;div class=&quot;modal-dialog modal-lg&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                    &lt;h5 class=&quot;modal-title h4&quot; id=&quot;exampleModalLgLabel&quot;&gt;Large modal&lt;/h5&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                    ...
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Modal SM --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalSm&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalSmLabel&quot; aria-hidden=&quot;true&quot; style=&quot;display: none;&quot;&gt;
        &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
            &lt;div class=&quot;modal-content&quot;&gt;
                &lt;div class=&quot;modal-header&quot;&gt;
                    &lt;h5 class=&quot;modal-title h4&quot; id=&quot;exampleModalSmLabel&quot;&gt;Small modal&lt;/h5&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;modal-body&quot;&gt;
                    ...
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
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

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/ui-modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 18:18:55 GMT -->
</html>