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

</head>

<body>

    
    <div id="whole" class="whole-site-wrapper">
 <!-- Start of Header -->
        <header class="header header-type-2 black-scheme">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12 order-2 col-sm-12 order-sm-2 col-md-8 order-md-1 align-self-center">
                            <p>Với FREESHIPPING, Giao hàng miễn phí cho đơn hàng từ 1.000.000 trở lên</p>
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
                        <div class="col-6 order-3 col-sm-6 col-md-4 col-lg-3 d-flex align-items-center justify-content-center">
                            <div class="header-cart-area">
                                <?php include __DIR__."./pages/cart.php" ?>
                            </div>
                            <div class="function-area">
                                <ul class="list-inline">
                                    <li class="top-links list-inline-item">
                                        <div class="btn-group">
                                                    <button class="btn-link dropdown-toggle"><i class="pe-7s-config"></i></button>
                                                    <div class="dropdown-menu">
                                                    <?php
                                                    if(isset($_SESSION["logined"])==false ||$_SESSION["logined"]=="")
                                                    {
                                                    ?>
                                                        <ul>
                                                     <li><a href="register">Đăng ký</a></li>
                                                        <li><a href="login">Đăng nhập</a></li>
                                                        
                                                        </ul>
                                                    <?php
                                                    }else{
                                                    ?>
                                                        <ul>
                                                        <li><a href="user">Tài khoản của bạn</a></li>
                                                        <li><a href="logout">Đăng xuất</a></li>
                                                        
                                                        </ul>
                                                    <?php
                                                    }
                                                    ?>                                                        
                                                </div>
                                        </div>
                                    </li>
                                </ul>
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
                            <li><a href="home"><span>Trang chủ</span></a></li>
                            <li><a href="products"><span>Sản phẩm</span></a></li>
                            
                            <li><a href="aboutus"><span>About</span></a></li>
                            <li><a href="contact"><span>Contact</span></a></li>
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
                                        <p>Thực hiện ý tưởng của bạn theo yêu cầu</p>
                                        <div class="footer-contact">
                                            <p><span>ĐỊA CHỈ: Ha Noi, Viet Nam</span></p>
                                            <p><span>ĐIỆN THOẠI: 090.999.999.999</span><a href="#"></a></p>
                                            <p><span>EMAIL:</span><a href="#">gghv-cosmetic@gmail.com</a></p>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-md-3 col-lg-2 order-lg-2">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Các Sản Phẩm</h4>
                                    <div class="widget-content">
                                        <div class="widgetized-menu">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Giá Giảm</a></li>
                                                <li><a href="#">Sản Phẩm Mới</a></li>
                                                <li><a href="#">Hàng Bán Tốt Nhất</a></li>
                                                <li><a href="#">Liên Hệ Chúng Tôi</a></li>
                                                <li><a href="#">Đăng Nhập</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-md-4 col-lg-2 order-lg-3">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Công Ty Chúng Tôi</h4>
                                    <div class="widget-content">
                                        <div class="widgetized-menu">
                                            <ul class="list-unstyled">
                                                <li><a href="aboutus">Về Chúng Tôi</a></li>
                                                <li><a href="home">Sơ Đồ Trang Web</a></li>
                                                <li><a href="#">Các Cửa Hàng</a></li>
                                                <li><a href="#">Điều Khoản &amp; Điều Kiện</a></li>
                                                <li><a href="#">Tài Khoản Của Tôi</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end of widget-content -->
                                </aside> <!-- end of widget-container -->
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 order-md-2 col-lg-4 order-lg-4">
                                <aside class="widget-container">
                                    <h4 class="widgettitle">Đăng Ký Nhận Bản Tin Của Chúng Tôi</h4>
                                    <div class="widget-content">
                                        <div class="newsletter-widget">
                                            <p>Bạn có thể hủy đăng ký bất cứ lúc nào. Vì mục đích đó, vui lòng tìm thông tin liên hệ của chúng tôi trong thông báo pháp lý.

                                            </p>
                                            <form class="mc-subscribe-form">
                                                <div class="input-group">
                                                    <input type="email" autocomplete="off" placeholder="Địa Chỉ Email Của Bạn" required>
                                                    <button class="default-btn" type="submit">Đăng Ký</button>
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
                            <p class="copyright-text">Copyright © 2023 <a href="#" rel="nofollow">GGHV Cosmetic</a>. Tất cả các quyền.</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="footer-payment">
                                <a href="#"><img src="../../../gghv_cosmetic/public/assets/images/icons/mastercard.png" alt="Payment Icons"></a>
                                <a href="#"><img src="../../../gghv_cosmetic/public/assets/images/icons/paypal.png" alt="Payment Icons"></a>
                                <a href="#"><img src="../../../gghv_cosmetic/public/assets/images/icons/visa.png" alt="Payment Icons"></a>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of footer-copyright -->
        </footer>
        <!-- End of Footer -->

     
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
    <div id="to_top">
            <i class="ion ion-ios-arrow-forward"></i>
            <i class="ion ion-ios-arrow-forward"></i>
        </div>
    <!-- End of Photoswipe -->
    <?php 
    $jsTags = $assets -> registerJS('frontend');
    ?>

   

</body>

</html>