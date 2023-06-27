
<div id="content" class="main-content-wrapper">
            
            <!-- Start of Main Product Wrapper -->
            <div class="main-product-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="single-product-wrapper">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="product-gallery">
	                                            <div class="gallery-with-thumbs">
                                                    <div class="product-image-container">
                                                        <div class="product-full-image main-slider image-popup">

                                                            <!-- Slides -->
                                                            <div class="swiper-wrapper">
                                                                <figure class="swiper-slide">
                                                                    <a href="<?=$data['product'][0]['image']?>" data-size="600x600">
                                                                        <img src="<?=$data['product'][0]['image']?>" alt="Product Image">
                                                                        <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>
                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <figure class="swiper-slide">
                                                                    <a href="<?=$data['product'][0]['image']?>" data-size="600x600">
                                                                        <img src="<?=$data['product'][0]['image']?>" alt="Product Image">
                                                                        <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                                                                    </a>
                                                                    <figcaption class="visually-hidden">
                                                                        <span>Product Image</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <figure class="swiper-slide">
                                                                    <a href="<?=$data['product'][0]['image']?>" data-size="600x600">
                                                                        <img src="<?=$data['product'][0]['image']?>" alt="Product Image">
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
                                                                        <img src="<?=$data['product'][0]['image']?>" alt="Product Thumbnail Image">
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="<?=$data['product'][0]['image']?>" alt="Product Thumbnail Image">
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="<?=$data['product'][0]['image']?>" alt="Product Thumbnail Image">
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
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="product-details">
                                                <h3 class="product-name"><?=$data['product'][0]['name']?></h3>
                                                <div class="product-ratings d-flex">
                                                    <!-- <ul class="rating d-flex me-4">
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline"></i></li>
                                                        <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                    </ul>
                                                    <ul class="comments-advices list-inline d-flex">
                                                        <li class="list-inline-item me-3"><a href="#">2 Reviews</a></li>
                                                        <li class="list-inline-item"><a href="#">Write a Review</a></li>
                                                    </ul> -->
                                                </div>
                                                <div class="product-price">
                                                    <p class="d-flex align-items-center">
                                                       
                                                        <span class="price-new"><?=$data['product'][0]['price']?></span>
                                                        <!-- <span class="price-discount">-20%</span> -->
                                                    </p>
                                                </div>
                                                <div class="product-description">
													<p><?=$data['product'][0]['description']?></p>
                                                </div>
                                                <div class="product-actions">
                                                    <h3>Available Options</h3>
	                                                <div class="product-stock d-flex">
	                                                    <div class="stock-value">
	                                                        <label><?=$data['product'][0]['stock']?> Items</label>
	                                                    </div>
	                                                    
	                                                </div>
                                                    <div class="product-stock">
                                                        <form action="#">
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
                                                        </form>
                                                    </div>
                                                    <div class="wishlist-compare">
                                                        <button class="btn-wishlist" type="button" title="Add to Wishlist">Add to Wishlist</button>
                                                        
                                                    </div>
                                                </div>

                                                <div class="social-sharing d-flex align-items-center">
                                                    <span>Share</span>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><a href="#" class="bg-facebook" data-bs-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-twitter" data-bs-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-gplus" data-bs-toggle="tooltip" data-position="top" data-original-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-pinterest" data-bs-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                                                    </ul>
                                                </div>
                                            </div> <!-- end of product-details -->
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="product-info mt-half">
                                                 <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="nav_desctiption" data-bs-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">Mô tả sản phẩm - Description</a>
                                                    </li>
                                                   
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                                                        <p><?=$data['product'][0]['long_description']?></p>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of single-product-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Main Product Wrapper -->
<?php
$related_products = $this -> model("ProductModel");
$result = $related_products -> getRelatedProduct($data['product'][0]['brand_id'],$data['product'][0]['category_id']);
$related_product_data = $related_products -> data;
?>
            <!-- Start of Related Products -->
            <section class="related-products">
                <div class="container">
                    <div class="row product-row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title">
                                <h2>Related Products</h2>
                            </div>
                            <div class="latest-product-wrapper pos-r">
                                <div class="element-carousel anime-element" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                    <?php
                                    foreach($related_product_data as $related_product)
                                    {
                                    ?>
                                        <article class="swiper-slide product-layout">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        
                                                        <a href="<?=$related_product["id"]?>">
                                                            <img src="<?=$related_product["image"]?>" alt="Fusion Backpack" title="Fusion Backpack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                    	<div class="product-meta d-flex justify-content-between align-items-center">
	                                                    	<div class="product-manufacturer">
	                                                    		<a href="#"><?=$related_product["brand_name"]?></a>
	                                                    	</div>
	                                                        <div class="product-ratings">
	                                                            <div class="rating-box">
	                                                                <ul class="rating d-flex">
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                        <h4 class="product-name"><a href="single-product.html"><?=$related_product["name"]?></a></h4>
                                                        <p class="product-price">
                                                            <span class="price-new"><?=$related_product["price"]?></span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout --> 
                                        <?php
                                        }
                                        ?>                                      
                                    </div> <!-- end of swiper-wrapper -->
                                    
                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of latest-product-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>

            <!-- End of Related Products -->
        </div>