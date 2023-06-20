<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- favicon
    ============================================ -->
<!--    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">-->

    <?php 
    use app\core\View;
    $assets = new View();
    $cssTags = $assets -> registerCSS('frontend');
    ?>
    

    <!-- modernizr JS
    ============================================ -->
    <!-- <script src="../../gghv_cosmetic/public/assets/js/modernizr-2.8.3.min.js"></script> -->
</head>

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
                        <div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2 col-lg-6 d-flex align-items-center justify-content-center">
                            <div class="logo " style="width: 150px; height: 150px;">
                                <a href="home"><img src="../../../gghv_cosmetic/public/assets/images/gghv-logo.png" alt="Logo" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-6 order-3 col-sm-6 col-md-4 col-lg-3">
                            <div class="header-cart-area">
                                <div class="header-cart">
                                    <div class="btn-group">
                                        <button class="btn-link dropdown-toggle icon-cart">
                                            <i class="pe-7s-shopbag"></i>
                                            <span class="count-style">2</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <div class="shopping-cart-content">
                                                <ul class="list-unstyled">
                                                    <li class="single-cart-item media">
                                                        <div class="shopping-cart-img me-4">
                                                            <a href="#">
                                                                <img class="img-fluid" alt="Cart Item" src="../../../gghv_cosmetic/public/assets/images/cart/cart-1.jpg">
                                                                <span class="product-quantity">1x</span>
                                                            </a>
                                                        </div>
                                                        <div class="shopping-cart-title flex-grow-1">
                                                            <h4><a href="#">Rival Field Messenger</a></h4>
                                                            <p class="cart-price">$120.00</p>
                                                            <div class="product-attr">
                                                                <span>Size: S</span>
                                                                <span>Color: Black</span>
                                                            </div>
                                                        </div>
                                                        <div class="shopping-cart-delete">
                                                            <a href="#"><i class="ion ion-md-close"></i></a>
                                                        </div>
                                                    </li>
                                                    <li class="single-cart-item media">
                                                        <div class="shopping-cart-img me-4">
                                                            <a href="#">
                                                                <img class="img-fluid" alt="Cart Item" src="../../../gghv_cosmetic/public/assets/images/cart/cart-2.jpg">
                                                                <span class="product-quantity">2x</span>
                                                            </a>
                                                        </div>
                                                        <div class="shopping-cart-title flex-grow-1">
                                                            <h4><a href="#">Fusion Backpack</a></h4>
                                                            <p class="cart-price">$200.00</p>
                                                            <div class="product-attr">
                                                                <span>Color: White</span>
                                                                <span>Accessories: Yes</span>
                                                            </div>
                                                        </div>
                                                        <div class="shopping-cart-delete">
                                                            <a href="#"><i class="ion ion-md-close"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="shopping-cart-total">
                                                    <h4>Sub-Total : <span>$320.00</span></h4>
                                                    <h4>Total : <span>$320.00</span></h4>
                                                </div>
                                                <div class="shopping-cart-btn">
                                                    <a class="default-btn" href="cart.html">view cart</a>
                                                    <a class="default-btn" href="checkout.html">checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline">
                                    <li class="top-links list-inline-item">
                                        <div class="btn-group">
                                            <button class="btn-link dropdown-toggle"><i class="pe-7s-config"></i></button>
                                            <div class="dropdown-menu">
                                                <ul>
                                                   <li><a href="register.html">Register</a></li>
                                                   <li><a href="login.html">Login</a></li>
                                                   <li><a href="my-account.html">My Account</a></li>
                                                   <li><a href="wishlist.html">Wishlist</a></li>
                                                   <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of header-cart-area -->
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
                            <li><a href="aboutus"><span>About Us</span></a></li>
                            <li><a href="contact"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div> <!-- end of container -->
            </div>
            <!-- End of Main and Mobile Navigation -->
        </header>
        <!-- End of Header -->

        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">

         <!-- Slider Section -->
      
        <?php include __DIR__."./pages/".$data["page"].".php" ?>
           
            
        </main>
        <!-- End of Main Content Wrapper -->

        <!-- Start of Footer -->
        <footer id="colophon" class="bgc-secondary pt-full">

            <!-- Footer Widgets Area -->
            <div class="footer-widgets-area">
                <div class="container">
                    <div class="footer-inner">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                <aside class="widget-container">
                                    <div class="widget-content">
                                        <div class="logo mb-half" style="width: 150px; height: 150px;">
                                            <img src="../../../gghv_cosmetic/public/assets/images/gghv-logo.png" alt="Footer Logo">
                                        </div>
                                        <p>Fulfilling your ideas on demand</p>
                                        <div class="footer-contact">
                                            <p><span>Address: Ha Noi, Viet Nam</span></p>
                                            <p><span>Phone: 090.999.999.999</span><a href="#"></a></p>
                                            <p><span>Email:</span><a href="#">gghv-cosmetic@gmail.com</a></p>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-md-3 col-lg-2 order-lg-2">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Products</h4>
                                    <div class="widget-content">
                                        <div class="widgetized-menu">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Prices drop</a></li>
                                                <li><a href="#">New Products</a></li>
                                                <li><a href="#">Best Sales</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">Login</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-md-4 col-lg-2 order-lg-3">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Our Company</h4>
                                    <div class="widget-content">
                                        <div class="widgetized-menu">
                                            <ul class="list-unstyled">
                                                <li><a href="aboutus">About Us</a></li>
                                                <li><a href="home">Site Map</a></li>
                                                <li><a href="#">Stores</a></li>
                                                <li><a href="#">Terms &amp; Conditions</a></li>
                                                <li><a href="#">My Account</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-md-2 col-lg-4 order-lg-4">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Sign up for our newsletter</h4>
                                    <div class="widget-content">
                                        <div class="newsletter-widget">
                                            <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                            <form class="mc-subscribe-form">
                                                <div class="input-group">
                                                    <input type="email" autocomplete="off" placeholder="Your Email Address" required>
                                                    <button class="default-btn" type="submit">Sign Up</button>
                                                </div>
                                            </form> <!-- end of form -->

                                            <div class="mailchimp-alerts">
                                                <div class="mailchimp-submitting"></div>
                                                <div class="mailchimp-success"></div>
                                                <div class="mailchimp-error"></div>
                                            </div><!-- end of mailchimp-alerts -->
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->

                                <aside class="widget-container">
                                    <div class="widget-content">
                                        <div class="social-widget mt-half">
                                            <div class="socials d-flex align-items-center justify-content-center justify-content-md-start">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><a href="#" class="bg-facebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-gplus" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-pinterest" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-instagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                                    <li class="list-inline-item"><a href="#" class="bg-linkedin" title="Linked In" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>
                        </div> <!-- end of row -->
                    </div> <!-- end of footer-inner -->
                </div> <!-- end of container -->
            </div> <!-- end of footer-widgets-area -->

            <!-- Footer Copyright -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <p class="copyright-text">Copyright © 2023 <a href="#" rel="nofollow">GGHV Cosmetic</a>. All Right Reserved.</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="footer-payment">
                                <a href="#"><img src="../../../gghv_cosmetic/public/assets/images/icons/payment.png" alt="Payment Icons"></a>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of footer-copyright -->
        </footer>
        <!-- End of Footer -->

        <!-- Quick View Content Start -->
        <div class="product-quick-view">
            <div class="container">
                <!-- Start of Modal -->
                <div class="modal fade" id="product_quick_view">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                            </div> <!-- end of modal-header -->

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-7">
                                        <div class="product-gallery">
                                            <div class="gallery-with-thumbs" data-nav-center="false">
                                                <div class="product-image-container">
                                                    <div class="product-full-image main-slider image-popup">

                                                        <!-- Slides -->
                                                        <div class="swiper-wrapper">
                                                            <figure class="swiper-slide">
                                                                <a href="../../../gghv_cosmetic/public/assets/images/products/single/product-1.jpg" data-size="600x600">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-1.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="../../../gghv_cosmetic/public/assets/images/products/single/product-2.jpg" data-size="600x600">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-2.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="../../../gghv_cosmetic/public/assets/images/products/single/product-3.jpg" data-size="600x600">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-3.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="../../../gghv_cosmetic/public/assets/images/products/single/product-4.jpg" data-size="600x600">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-4.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="../../../gghv_cosmetic/public/assets/images/products/single/product-5.jpg" data-size="600x600">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-5.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            <figure class="swiper-slide">
                                                                <a href="../../../gghv_cosmetic/public/assets/images/products/single/product-6.jpg" data-size="600x600">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-6.jpg" alt="Product Image">
                                                                    <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                    </div> <!-- end of product-full-image -->
                                                </div>
                                                
                                                <div class="product-thumb-container">
                                                    <div class="product-thumb-image pos-r">
                                                        <div class="nav-slider">
                                                            <!-- Slides -->
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-thumb-1.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-thumb-2.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-thumb-3.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-thumb-4.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-thumb-5.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="../../../gghv_cosmetic/public/assets/images/products/single/product-thumb-6.jpg" alt="Product Thumbnail Image">
                                                                </div>
                                                            </div>

                                                            <!-- Navigation -->
                                                            <div class="swiper-arrow next"><i class="fa fa-angle-down"></i></div>
                                                            <div class="swiper-arrow prev"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </div> <!-- end of product-thumb-image -->
                                                </div>
                                            </div> <!-- end of gallery-with-thumbs -->
                                        </div> <!-- end of product-gallery -->
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-5">
                                        <div class="product-details">
                                            <h3 class="product-name">Cas Meque Metus</h3>
                                            <div class="product-ratings">
                                                <ul class="rating d-flex">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product-price">
                                                <p class="d-flex align-items-center">
                                                    <span class="price-old">$54.65</span>
                                                    <span class="price-new">$43.72</span>
                                                    <span class="price-discount">-20%</span>
                                                </p>
                                            </div>
                                            <div class="product-description">
                                                <p>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton.</p>
                                            </div>
                                            <form action="#" class="product-actions">
                                                <h3>Available Options</h3>
                                                <div class="product-size-color d-flex">
                                                    <div class="product-size">
                                                        <label>Size</label>
                                                        <select class="nice-select">
                                                            <option>S</option>
                                                            <option>M</option>
                                                            <option>L</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-color">
                                                        <label>color</label>
                                                        <ul class="color-list">
                                                           <li>
                                                                <a class="white" href="#"></a>
                                                            </li>
                                                            <li>
                                                                <a class="orange active" href="#"></a>
                                                            </li>
                                                            <li>
                                                                <a class="paste" href="#"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-stock">
                                                    <label>Quantity</label>
                                                    <ul class="d-flex flex-wrap align-items-center">
                                                        <li class="box-quantity">
                                                            <div class="cart-input">
                                                                <input class="cart-input-box" type="text" value="0">
                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="default-btn">Add to Cart</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="wishlist-compare">
                                                    <button class="btn-wishlist" type="button" title="Add to Wishlist">Add to Wishlist</button>
                                                    <button class="btn-compare" type="button" title="Add to Compare">Add to Compare</button>
                                                </div>
                                            </form>
                                        </div> <!-- end of product-details -->
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of modal-body -->

                            <div class="modal-footer justify-content-start">
                                <div class="social-sharing d-flex align-items-center">
                                    <span>Share</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" class="bg-facebook" data-bs-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a></li>
                                        <li class="list-inline-item"><a href="#" class="bg-twitter" data-bs-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a></li>
                                        <li class="list-inline-item"><a href="#" class="bg-gplus" data-bs-toggle="tooltip" data-position="top" data-original-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                        <li class="list-inline-item"><a href="#" class="bg-pinterest" data-bs-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                                    </ul>
                                </div>
                            </div> <!-- end of modal-footer -->
                        </div> <!-- end of modal-content -->
                    </div> <!-- end of modal-dialog -->
                </div> <!-- end of modal -->
            </div> <!-- end of container -->
        </div>
        <!-- Quick View Content End -->

        <!-- Start of Scroll to Top -->
        <div id="to_top">
            <i class="ion ion-ios-arrow-forward"></i>
            <i class="ion ion-ios-arrow-forward"></i>
        </div>
        <!-- End of Scroll to Top -->
    </div>
    <!-- End of Whole Site Wrapper -->

    <!-- Initializing Photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Photoswipe -->
    <?php 
    $jsTags = $assets -> registerJS('frontend');
    ?>

    <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <!-- <script src="../../gghv_cosmetic/public/assets/js/jquery.1.12.4.min.js"></script> -->

    <!-- Popper JS -->
    <!-- <script src="../../gghv_cosmetic/public/assets/js/popper.min.js"></script> -->

    <!-- Bootstrap JS -->
    <!-- <script src="../../gghv_cosmetic/public/assets/js/bootstrap.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="../../gghv_cosmetic/public/assets/js/plugins.js"></script> -->

    <!-- Main JS -->
    <!-- <script src="../../gghv_cosmetic/public/assets/js/main.js"></script> -->

</body>

<!-- Mirrored from htmldemo.net/pebona/pebona/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2023 14:58:39 GMT -->
</html>