

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Products Wrapper -->
            <div class="products-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2">
                            <main id="primary" class="site-main">
                                <div class="shop-wrapper">
                                   <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <h1>Shop</h1>
                                            <div class="shop-toolbar">
                                                <div class="toolbar-inner">
                                                    <div class="product-view-mode">
                                                        <ul role="tablist" class="nav shop-item-filter-list">
                                                            <li role="presentation" class="active"><a href="#grid" aria-controls="grid" role="tab" data-bs-toggle="tab" class="active show" aria-selected="true"><i class="ion-md-grid"></i></a></li>
                                                            <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-bs-toggle="tab"><i class="ion-md-list"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="toolbar-amount">
                                                        <span>Showing 10 to 18 of 27</span>
                                                    </div>
                                                </div>
                                                <div class="product-select-box">
                                                    <div class="product-sort">
                                                        <p>Sort By:</p>
                                                        <select class="nice-select" name="sortby">
                                                            <option value="trending">Relevance</option>
                                                            <option value="sales">Name (A - Z)</option>
                                                            <option value="sales">Name (Z - A)</option>
                                                            <option value="rating">Price (Low > High)</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->
                                    
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="shop-products-wrapper">
                                                <div class="tab-content">
                                                    <div id="grid" class="tab-pane anime-tab active show" role="tabpanel">
                                                        <?php
                                                        if($data){
                                                        ?>
                                                        <div class="row">
                                                            <?php 
                                                           
                                                            foreach ($data["products_list"] as $product)
                                                            {
                                                           
                                                            ?>
                                                            <article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            
                                                                            <a href="products/product/<?=$product["id"]?>">
                                                                                <img src="<?=$product["thumbnail"]?>" alt="Compete Track Tote" title="Compete Track Tote">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="cart/addtocart/<?=$product["id"]?>" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                        
                                                                            </div>
                                                                           
                                                                        </div>  

                                                                        <div class="product-caption">
                                                                            <div class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#"><?=$product["brand_name"]?></a>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <h4 class="product-name"><a href="single-product.html"><?=$product["title"]?></a></h4>
                                                                            <p class="product-price">
                                                                                <span class="price-new"><?=number_format($product["price"])?></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <?php 
                                                            }
                                                            ?>
                                                            
                                                        </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    
                                                </div>
                                            </div> <!-- end of shop-products-wrapper -->

                                            <div class="pagination-area">
                                                <div class="row align-items-center">
                                                    <div class="col-12 order-2 col-sm-12 col-md-6 order-md-1 col-lg-6">
                                                        <div class="page-amount d-flex justify-content-center justify-content-md-start">
                                                            <p>Showing 10 to 18 of 27 (3 Pages)</p>
                                                        </div>
                                                    </div>
                                                    <?php 
                                                       $link = "";
                                                       $urlArr = explode("/", filter_var(trim($_GET["url"],"/")));
                                                       if(count($urlArr) > 1){
                                                         $link = "";
                                                       }else{
                                                         $link = "products/page/";
                                                       }
                                                       
                                                    ?>
                                                    <div class="col-12 order-1 col-sm-12 col-md-6 order-md-2 col-lg-6">
                                                       
                                                            <ul class="pagination">
                                                                <li class="page-item"><a href='<?=$link?>1'> Đầu </a></li>
                                                        
                                                            <?php
                                                            
                                                            //tính vị trí trang trước
                                                            $page = (($data["current_page"]-1)>0)?($data["current_page"]-1):1;
                                                            ?> 
                                                            |<li class="page-item"><a href="<?=$link?><?=$page?>"> <i class="fa fa-angle-left"></i> </a></li> 
                                                            <?php
                                                            for($page=1; $page<=$data["total_pages"]; $page++)
                                                            {
                                                                $CSS_curPage = ($page==$data["current_page"])?" class='curPage' ": "";
                                                            
                                                            ?>
                                                            |<li class="page-item"><a href="<?=$link?><?=$page?>" <?=$CSS_curPage?>> <?=$page?> </a> </li>
                                                            <?php
                                                            }
                                                            //tính vị trí trang tiếp
                                                            $page = (($data["current_page"]+1)<=$data["total_pages"])?($data["current_page"]+1):$data["total_pages"];
                                                            ?>
                                                            |<li class="page-item"><a href="<?=$link?><?=$page?>"> <i class="fa fa-angle-right"></i></a></li>
                                                            |<li class="page-item"><a href="<?=$link?><?=$data["total_pages"]?>"> Cuối </a></li>
                                                            </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div> <!-- end of pagination-area -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of shop-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
                            <aside id="secondary" class="widget-area">
                                <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Categories</h2>
                                    <div class="list-widget-wrapper">
                                        <div class="list-group">
                                            <a href="#">Sữa rửa mặt</a>
                                            <a href="#">Nước tẩy trang</a>
                                            <a href="#">Nước hoa</a>
                                            <a href="#">Kem chống nắng</a>
                                        </div>
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Brands</h2>
                                    <div class="list-widget-wrapper">
                                        <div class="list-group">
                                            <a href="#">Senka</a>
                                            <a href="#">Studio Design (14)</a>
                                            <a href="#">Tommy Hilfiger (14)</a>
                                            <a href="#">Versace (14)</a>
                                        </div>
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <!-- <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Price</h2>
                                    <div class="list-widget-wrapper">
                                        <div class="list-group">
                                            <a href="#">$43.00 - $45.00 (10)</a>
                                            <a href="#">$54.00 - $58.00 (4)</a>
                                            <a href="#">$62.00 - $70.00 (5)</a>
                                            <a href="#">$78.00 - $83.00 (10)</a>
                                            <a href="#">$85.00 - $89.00 (13)</a>
                                        </div>
                                    </div>
                                </div>  -->
                                <div class="sidebar-widget tag-cloud">
                                    <h2 class="widgettitle">Popular Tags</h2>
                                    <div class="tags-widget">
                                        <ul>
                                            <li><a href="#">Ecommerce</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">bags</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Smart</a></li>
                                        </ul>
                                    </div>
                                </div> <!-- end of sidebar-widget -->
                            </aside> <!-- end of #secondary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Products Wrapper -->
        </div>
        <!-- End of Main Content Wrapper -->

       