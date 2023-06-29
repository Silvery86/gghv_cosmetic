<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending Product Section</title>
</head>
<body>
    <!-- Start of New Arrivals Section -->
<section class="new-arrivals-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title">
                                <h2>New Trending Products</h2>
                                <p class="subtitle"></p>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
                
                <div class="container-fluid">
                    <div class="row product-row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="new-products pos-r">
                                <div class="element-carousel anime-element-multi" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000" data-autoplay-delay="5000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                        <?php 
                                            foreach($data["product"] as $product)
                                            {
                                        ?>
                                        <div class="swiper-slide">
                                           

                                            <article class="product-layout">
                                           
                                                <div class="product-thumb">
                                                    <div class="product-inner">
                                                        <div class="product-image">
                                                            <div class="label-product label-new">New</div>
                                                            <a href="single-product.html">
                                                                <img src="<?=$product["image"]?>" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                                            </a>
                                                            <div class="action-links">
                                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                            </div>
                                                        </div> <!-- end of product-image -->

                                                        <div class="product-caption">
                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                <div class="product-manufacturer">
                                                                    <a href="#"><?=$product["brand_name"]?></a>
                                                                </div>
                                                                <div class="product-ratings">
                                                                    <div class="rating-box">
                                                                        <ul class="rating d-flex">
                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                            <li><i class="ion ion-md-star-outline"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h4 class="product-name"><a href="single-product.html"><?=$product["name"]?></a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new"><?=$product["price"]?></span>
                                                            </p>
                                                        </div><!-- end of product-caption -->
                                                    </div><!-- end of product-inner -->
                                                </div><!-- end of product-thumb -->
                                               
                                            </article> <!-- end of product-layout -->
                                           
                                        </div> <!-- end of swiper-slide -->

                                        <?php
                                                }
                                        ?>

                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of new-products -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container-fluid -->
            </section>
            <!-- End of New Arrivals Section -->
</body>
</html>