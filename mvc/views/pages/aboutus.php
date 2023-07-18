<head>
     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <!-- Swiper CSS -->
     <link rel="stylesheet" href="https://unpkg.com/swiper@7.0.7/swiper-bundle.min.css" />

     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper@7.0.7/swiper-bundle.min.js"></script>
     <style>
         .swiper-container {
             width: 100%;
             height: 100%;
         }

         .swiper-slide {
             width: 100%;
             height: 100%;
         }

         .swiper-pagination {
             position: absolute;
             bottom: 20px;
             left: 0;
             width: 100%;
             text-align: center;
         }

         .swiper-pagination-bullet {
             width: 10px;
             height: 10px;
             margin: 0 5px;
             border-radius: 50%;
             background-color: rgba(0, 0, 0, 0.5);
             cursor: pointer;
         }

         .swiper-pagination-bullet-active {
             background-color: rgba(0, 0, 0, 0.8);
         }

         .swiper-button-prev,
         .swiper-button-next {
             position: absolute;
             top: 50%;
             transform: translateY(-50%);
             width: 30px;
             height: 30px;
             border-radius: 50%;
             background-color: rgba(0, 0, 0, 0.5);
             color: #fff;
             font-size: 20px;
             text-align: center;
             cursor: pointer;
             z-index: 10;
         }

         .swiper-button-prev {
             left: 20px;
         }

         .swiper-button-next {
             right: 20px;
         }

         .swiper-button-prev:hover,
         .swiper-button-next:hover {
             background-color: rgba(0, 0, 0, 0.8);
         }
     </style>
 </head>
 <!-- Start of Main Content Wrapper -->
 <main id="content" class="main-content-wrapper page-about">

     <section class="about-section">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6 order-lg-2">
                     <div class="overview-img text-center">
                         <a href="#">
                             <img src="../../gghv_cosmetic/public/assets/images/about/about.jpg" alt="About Us" style="width: 100%; max-width: 500px; max-height: 100%; height: 250px;">
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-6 order-lg-1">
                     <div class="content-wrapper">
                         <div class="section-title left-aligned">
                             <h2 class="text-pink">Welcome To <span class="gghv-cosmetic">GGHV Cosmetic!</span></h2>
                         </div>
                         <p class="lead">GGHV Cosmetic nghiên cứu các tiêu chuẩn cao nhất cho các sản phẩm dưỡng da. Chúng tôi tìm kiếm các nguyên liệu từ khắp các đại dương, sa mạc và rừng trên toàn thế giới để mang đến cho bạn những sản phẩm chất lượng nhất.</p>
                         <p>Bắt đầu cho cuộc hành trình này, chúng tôi phát hiện ra một loại nguyên liệu đỉnh cao là Rau má từ vùng đất Madagascar. Rau má là một loài thực vật phát triển tự nhiên mạnh mẽ và không bị can thiệp bởi bất kì chất hóa học nào. Chiết xuất từ Rau má là thành phần cốt lõi của các sản phẩm dưỡng da được yêu thích nhất của GGHV Cosmetic.</p>
                         <a class="btn btn-primary" href="shop-grid.html">Shop now</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <style>
         .about-section {
             background-color: #f9f9f9;
             padding: 100px 0;
         }

         .overview-img img {
             max-width: 100%;
         }

         .section-title {
             margin-bottom: 30px;
         }

         .lead {
             font-size: 20px;
             line-height: 1.6;
             margin-bottom: 30px;
         }

         .btn-primary {
             background-color: #f80a5d;
             color: #fff;
             border-radius: 50px;
             padding: 15px 30px;
             font-size: 22px;
             font-weight: bold;
             text-transform: uppercase;
             transition: background-color 0.3s ease-in-out;
         }

         .btn-primary:hover {
             background-color: #d7064a;
         }

         .gghv-cosmetic {
             font-size: 36px;
             font-weight: bold;
             text-transform: uppercase;
             color: #ff69b4;
             text-shadow: 3px 3px 0 #fff;
             margin-bottom: 15px;
             padding: 10px;
             display: inline-block;
         }
     </style>
     <section class="team-section pt-full pb-half bgc-offset">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="section-title">
                         <h2><span class="gghv-cosmetic">GGHV Cosmetic Members</span></h2>
                     </div>
                 </div>
             </div>

             <div class="col-12">
                 <div class="swiper-container">
                     <div class="swiper-wrapper">
                         <div class="swiper-slide">
                             <div class="team-wrapper">
                                 <div class="team-media">
                                     <a href="#">
                                         <img src="../../gghv_cosmetic/public/assets/images/about/team-1.jpg" alt="Team Image">
                                     </a>
                                     <div class="team-socials">
                                         <div class="chain-animation">
                                             <a class="bg-facebook" href="#">
                                                 <i class="fa fa-facebook"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-twitter" href="#">
                                                 <i class="fa fa-twitter"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-gplus" href="#">
                                                 <i class="fa fa-google-plus"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="team-content">
                                     <h4>Nguyễn Bắc Giang</h4>
                                     <span>Team Leader</span>
                                 </div>
                             </div>
                         </div>

                         <div class="swiper-slide">
                             <div class="team-wrapper">
                                 <div class="team-media">
                                     <a href="#">
                                         <img src="../../gghv_cosmetic/public/assets/images/about/team-4.jpg" alt="Team Image">
                                     </a>
                                     <div class="team-socials">
                                         <div class="chain-animation">
                                             <a class="bg-facebook" href="#">
                                                 <i class="fa fa-facebook"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-twitter" href="#">
                                                 <i class="fa fa-twitter"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-gplus" href="#">
                                                 <i class="fa fa-google-plus"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="team-content">
                                     <h4>Phạm Quốc Hoàng</h4>
                                     <span>Second-in-command</span>
                                 </div>
                             </div>
                         </div>

                         <div class="swiper-slide">
                             <div class="team-wrapper">
                                 <div class="team-media">
                                     <a href="#">
                                         <img src="../../gghv_cosmetic/public/assets/images/about/team-2.jpg" alt="Team Image">
                                     </a>
                                     <div class="team-socials">
                                         <div class="chain-animation">
                                             <a class="bg-facebook" href="#">
                                                 <i class="fa fa-facebook"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-twitter" href="#">
                                                 <i class="fa fa-twitter"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-gplus" href="#">
                                                 <i class="fa fa-google-plus"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="team-content">
                                     <h4>Bùi Tuấn Vũ</h4>
                                     <span>Members</span>
                                 </div>
                             </div>
                         </div>

                         <div class="swiper-slide">
                             <div class="team-wrapper">
                                 <div class="team-media">
                                     <a href="#">
                                         <img src="../../gghv_cosmetic/public/assets/images/about/team-3.jpg" alt="Team Image">
                                     </a>
                                     <div class="team-socials">
                                         <div class="chain-animation">
                                             <a class="bg-facebook" href="#">
                                                 <i class="fa fa-facebook"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-twitter" href="#">
                                                 <i class="fa fa-twitter"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-gplus" href="#">
                                                 <i class="fa fa-google-plus"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="team-content">
                                     <h4>Nguyễn Trường Giang</h4>
                                     <span>Members</span>
                                 </div>
                             </div>
                         </div>

                         <div class="swiper-slide">
                             <div class="team-wrapper">
                                 <div class="team-media">
                                     <a href="#">
                                         <img src="../../gghv_cosmetic/public/assets/images/about/team-3.jpg" alt="Team Image">
                                     </a>
                                     <div class="team-socials">
                                         <div class="chain-animation">
                                             <a class="bg-facebook" href="#">
                                                 <i class="fa fa-facebook"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-twitter" href="#">
                                                 <i class="fa fa-twitter"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-gplus" href="#">
                                                 <i class="fa fa-google-plus"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="team-content">
                                     <h4>Nguyễn Hoàng Nam</h4>
                                     <span>Members</span>
                                 </div>
                             </div>
                         </div>

                         <div class="swiper-slide">
                             <div class="team-wrapper">
                                 <div class="team-media">
                                     <a href="#">
                                         <img src="../../gghv_cosmetic/public/assets/images/about/team-3.jpg" alt="Team Image">
                                     </a>
                                     <div class="team-socials">
                                         <div class="chain-animation">
                                             <a class="bg-facebook" href="#">
                                                 <i class="fa fa-facebook"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-twitter" href="#">
                                                 <i class="fa fa-twitter"></i>
                                             </a>
                                         </div>
                                         <div class="chain-animation">
                                             <a class="bg-gplus" href="#">
                                                 <i class="fa fa-google-plus"></i>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="team-content">
                                     <h4>Nguyễn Hùng Phi</h4>
                                     <span>Members</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- Add Pagination -->
                     <div class="swiper-pagination"></div>

                     <!-- Add Arrows -->
                     <div class="swiper-button-next"></div>
                     <div class="swiper-button-prev"></div>

                 </div>
             </div>
         </div>
     </section>
     <!-- End of Team Section -->

     <script>
         $(document).ready(function() {
             initSlider();
         });

         function initSlider() {
             var swiper = new Swiper('.swiper-container', {
                 slidesPerView: '3',
                 loop: true,
                 autoplay: {
                     delay: 5000,
                     disableOnInteraction: false
                 },
                 pagination: {
                     el: '.swiper-pagination',
                     clickable: true,
                 },
                 navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                 },
                 breakpoints: {
                     768: {
                         slidesPerView: 2,
                     },
                     992: {
                         slidesPerView: 3,
                     },
                 },
             });
         }
     </script>

     </div>
     </section>
     <!-- Start of Testimonial Section -->
     <section class=" testimonial-section">
         <div class="container">
             <div class="row">
                 <div class="col-12 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 position-relative">
                     <div class="testimonial-container">

                         <!-- Slides -->
                         <div class="swiper-wrapper">
                             <div class="swiper-slide">
                                 <div class="testimonial-media" data-swiper-parallax="-100">
                                     <img src="../../gghv_cosmetic/public/assets/images/testimonial/testimonial-1.jpg" alt="Alva Ono">
                                 </div>
                                 <div class="testimonial-content" data-swiper-parallax="-500">
                                     <p>Chăm sóc da rất quan trọng để duy trì làn da khỏe mạnh, sáng mịn. Ba bước thiết yếu trong bất kỳ quy trình chăm sóc da nào là làm sạch, dưỡng ẩm và bảo vệ khỏi tia UV có hại. Điều quan trọng là chọn các sản phẩm phù hợp với loại da của bạn và lựa chọn lối sống lành mạnh, chẳng hạn như ăn một chế độ ăn uống cân bằng và giữ đủ nước. Bằng cách chăm sóc làn da của mình, bạn có thể đạt được làn da rạng rỡ và cảm thấy tự tin với làn da của chính mình.</p>
                                     <div class="client-meta" data-swiper-parallax="-300">
                                         <h3 class="client-name">Alva Ono</h3>
                                     </div>
                                 </div>
                             </div> <!-- end of swiper-slide -->

                             <div class="swiper-slide">
                                 <div class="testimonial-media" data-swiper-parallax="-100">
                                     <img src="../../gghv_cosmetic/public/assets/images/testimonial/testimonial-2.jpg" alt="Dewey Tetzlaff">
                                 </div>
                                 <div class="testimonial-content" data-swiper-parallax="-500">
                                     <p>Chăm sóc da cũng rất quan trọng đối với nam giới. Da của nam giới đòi hỏi các sản phẩm và cách chăm sóc khác nhau, bao gồm làm sạch, dưỡng ẩm và bảo vệ khỏi tia UV. Chọn sản phẩm được thiết kế cho làn da của nam giới và lựa chọn lối sống lành mạnh. Một thói quen đơn giản có thể giúp đạt được một làn da khỏe mạnh, trẻ trung và tăng cường sự tự tin.</p>
                                     <div class="client-meta" data-swiper-parallax="-300">
                                         <h3 class="client-name">Dewey Tetzlaff</h3>
                                     </div>
                                 </div>
                             </div> <!-- end of swiper-slide -->

                             <div class="swiper-slide">
                                 <div class="testimonial-media" data-swiper-parallax="-100">
                                     <img src="../../gghv_cosmetic/public/assets/images/testimonial/testimonial-3.jpg" alt="Amber Laha">
                                 </div>
                                 <div class="testimonial-content" data-swiper-parallax="-500">
                                     <p>Chăm sóc da là rất quan trọng cho làn da khỏe mạnh. Làm sạch, dưỡng ẩm và bảo vệ khỏi tác hại của ánh nắng mặt trời để có làn da rạng rỡ.</p>
                                     <div class="client-meta" data-swiper-parallax="-300">
                                         <h3 class="client-name">Amber Laha</h3>
                                     </div>
                                 </div>
                             </div> <!-- end of swiper-slide -->
                         </div> <!-- end of swiper-wrapper -->

                         <!-- Pagination -->
                         <div class="swiper-pagination-testimonial"></div>
                     </div> <!-- end of testimonial-container -->
                 </div>
             </div> <!-- end of row -->
         </div> <!-- end of container -->
     </section>
     <!-- End of Testimonial Section -->

     <!-- Start of Banner Section -->
     <div class="banner-section mb-half">
         <div class="container">
             <div class="row">
                 <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                     <div class="promo-banner hover-effect-1">
                         <a href="#">
                             <img src="../../gghv_cosmetic/public/assets/images/banners/banner-9.jpg" alt="Promo Banner">
                         </a>
                     </div> <!-- end of promo-banner -->
                 </div>

                 <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                     <div class="promo-banner hover-effect-1">
                         <a href="#">
                             <img src="../../gghv_cosmetic/public/assets/images/banners/banner-10.jpg" alt="Promo Banner">
                         </a>
                     </div> <!-- end of promo-banner -->
                 </div>
             </div> <!-- end of row -->
         </div> <!-- end of container -->
     </div>
     <!-- End of Banner Section -->

     <!-- Start of Client Section -->
     <div class="client-section mb-full">
         <div class="container">
             <div class="row">
                 <div class="col-12 col-sm-12 col-md-12">
                     <div class="clients element-carousel" data-visible-slide="5" data-visible-xl-slide="5" data-visible-lg-slide="5" data-visible-md-slide="4" data-visible-sm-slide="3" data-visible-xs-slide="2" data-loop="true" data-autoplay-delay="3000" data-space-between="0" data-effect="slide">
                         <!-- Slides -->
                         <div class="swiper-wrapper">
                             <div class="item-brand swiper-slide">
                                 <img src="../../gghv_cosmetic/public/assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                             </div>
                             <div class="item-brand swiper-slide">
                                 <img src="../../gghv_cosmetic/public/assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                             </div>
                             <div class="item-brand swiper-slide">
                                 <img src="../../gghv_cosmetic/public/assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                             </div>
                             <div class="item-brand swiper-slide">
                                 <img src="../../gghv_cosmetic/public/assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                             </div>
                         </div>
                     </div> <!-- end of element-carousel -->
                 </div> <!-- end of col -->
             </div> <!-- end of row -->
         </div> <!-- end of container -->
     </div>
     <!-- End of Client Section -->

     <style>
         .item-brand img {
             height: 80px;
             width: auto;
             display: block;
             margin: 0 auto;
         }
     </style>

     <!-- Start of Newsletter Section -->
     <section class="newsletter-section vpadding bgc-offset mb0">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                     <div class="newsletter-title d-lg-flex justify-content-lg-start">
                         <h6>Đăng ký GGHV_Cosmetic</h6>
                         <h3>Đăng ký GGHV_Cosmetic của chúng tôi để biết trước về tất cả các chương trình khuyến mãi và giảm giá.</h3>
                     </div>
                 </div>
                 <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                     <div class="newsletter-form-wrapper">
                         <form class="mc-subscribe-form">
                             <input type="email" autocomplete="off" placeholder="Nhập địa chỉ email của bạn ở đây..." required>
                             <input type="submit" class="default-btn" value="Subscribe">
                         </form>

                         <div class="mailchimp-alerts">
                             <div class="mailchimp-submitting"></div>
                             <div class="mailchimp-success"></div>
                             <div class="mailchimp-error"></div>
                         </div><!-- end of mailchimp-alerts -->
                     </div>
                 </div>
             </div> <!-- end of row -->
         </div> <!-- end of container -->
     </section>
     <!-- End of Newsletter Section -->
 </main>
 <!-- End of Main Content Wrapper -->