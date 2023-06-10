<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">


    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pe-icon-7-stroke.css'); ?>">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.css'); ?>">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">

    <!-- Customs stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/landing-page.css'); ?>">

    <!-- modernizr JS
    ============================================ -->
    <script src="<?php echo base_url('assets/js/modernizr-2.8.3.min.js'); ?>"></script>
    
    <title><?= esc($title) ?></title>
</head>
<body>
<body>

    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper">

        <!-- Start of Newsletter Popup 
        <div id="newsletter_popup" class="newsletter-popup">
            <div class="popup-container">
                <div class="popup-close">
                    <span class="p-close"><span>X</span></span>
                </div>  end of popup-close 

                <div class="popup-area text-center">
                    <h2>Subscribe to our Newsletter</h2>
                    <div class="popup-body">
                        <p>Subscribe to the Pebona mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <div class="subscribe-form-group">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="Enter your email address" required>
                                    <button class="default-btn secondary" type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>  end of popup-body 

                    <div class="popup-footer">
                        <div class="form-check">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" id="cancel_popup">
                                <span class="checkmark"></span>
                                <label class="form-check-label" for="cancel_popup">Don't show this popup again</label>
                            </div>
                        </div>
                    </div>  end of popup-footer 
                </div>  end of popup-area 
            </div>  end of popup-container 
        </div>
        End of Newsletter Popup -->

        <!-- Start of Header -->
        <header class="header header-type-2 black-scheme">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12 order-2 col-sm-12 order-sm-2 col-md-8 order-md-1 align-self-center">
                            <p>With FREESHIPPING, orders of $500+ get free shipping</p>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </div> <!-- end of top-bar -->

            <div class="header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 order-2 col-sm-6 order-sm-2 col-md-4 order-md-1 col-lg-3">
                            <div class="header-search-area">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search entire store here ...">
                                        <div class="input-group-append">
                                            <button class="header-search-btn" type="submit"><i class="pe-7s-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2 col-lg-6">
                            <div class="logo">
                                <a href="index.html"><img src="./favicon.ico" alt="Logo" class="img-fluid"><h1>Pea Fashion</h1></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </div> <!-- end of header-top -->



            <!-- Start of Main and Mobile Navigation -->
            <div class="main-nav-area">
                <div class="container">
                    <nav id="main_nav" class="stellarnav black-scheme">
                        <ul>
                            <li><a href="home"><span>Home</span></a></li>
                            <li><a href="products"><span>Products</span></a></li>
                            <!-- <li class="mega" data-columns="4"><a href="shop-grid.html"><span>Products</span></a>
                                <ul class="mega-container">
                                    <li><a href="#" class="mega-menu-title"><h3>Shop pages 03</h3></a>
                                        <ul>
                                            <li><a href="cart.html">Cart Page</a><li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="last"><a href="#" class="mega-menu-title"><h3>Shop pages 04</h3></a>
                                        <ul>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li class="fullwidth-banner">
                                        <a href="#"><img src="assets/images/banners/menu-banner.jpg" alt="Menu Banner"></a>
                                    </li>
                                </ul>
                            </li> -->
                            <li><a href="about"><span>About Us</span></a></li>
                            <li><a href="contact"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div> <!-- end of container -->
            </div>
            <!-- End of Main and Mobile Navigation -->
        </header>
