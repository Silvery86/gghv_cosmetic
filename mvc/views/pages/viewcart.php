<div id="content" class="main-content-wrapper">
            
            <!-- Start of Shopping Cart Wrapper -->
            <div class="shopping-cart-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="shopping-cart">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title">
                                                <h2>Giỏ hàng</h2>
                                            </div>

                                            
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <td>Ảnh</td>
                                                                <td>Tên sản phẩm</td>
                                                                <td>Mã</td>
                                                                <td>Số lượng</td>
                                                                <td>Giá</td>
                                                                <td>Tổng</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if(isset($_SESSION["cart"])){
                                                            $total = 0;   
                                                            foreach($_SESSION["cart"] as $product)
                                                            {
                                                            $total += $product["price"]*$product["quantity"];
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <a href="single-product.html"><img src="<?=$product["thumbnail"]?>" alt="Cart Product Image" title="Compete Track Tote" class="img-thumbnail"></a>
                                                                </td>
                                                                <td>
                                                                    <a href="single-product.html"><?=$product["title"]?></a>
                                                                   
                                                                </td>
                                                                <td><?=$product["id"]?></td>
                                                                <td>
                                                                    <form action="cart/updateCart/<?=$product["id"]?>" name="quantity-form" method="post">
                                                                    <div class="input-group btn-block">
                                                                            <div class="cart-input">
                                                                                <input class="cart-input-box" type="text" name="quantity" id="quantity"  value="<?=$product["quantity"]?>">
                                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                                            </div>
                                                                            <span class="input-group-btn">
                                                                                <button type="submit" name="update-btn" id="update-btn" data-bs-toggle="tooltip" data-direction="top" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                                                                <button type="button" data-bs-toggle="tooltip" data-direction="top" class="btn btn-danger pull-right" data-original-title="Remove"><a href="cart/deleteCart/<?=$product["id"]?>" style="color: white;"><i class="fa fa-times-circle"></a></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                <td><?=number_format($product["price"])?></td>
                                                                <td><?=number_format($product["price"] * $product["quantity"])?></td>
                                                            </tr>
                                                        <?php 
                                                            }
                                                        }else{
                                                        ?>
                                                            
                                                                <p> Bạn chưa có sản phẩm nào trong giỏ hàng</p>
                                                                <a href="products"> Vào Danh sách sản phẩm</a>
                                                                
                                                        <?php
                                                        } 
                                                        ?>    
                                                        </tbody>
                                                    </table>
                                                </div>
                                            

                                            <!-- <div class="cart-accordion-wrapper mt-full">
                                                <h2>What would you like to do next?</h2>
                                                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                                <div id="cart_accordion" class="mt-4" role="tablist">
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingCoupon">
                                                            <h4 class="mb-0">
                                                                <a data-bs-toggle="collapse" href="#collapseCoupon" aria-expanded="false" aria-controls="collapseCoupon">Use Coupon Code<i class="ion ion-ios-arrow-down"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseCoupon" class="collapse" role="tabpanel" aria-labelledby="headingCoupon" data-bs-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-coupon">Enter your coupon here</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <div class="input-group">
                                                                        <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
                                                                        <input type="button" value="Apply Coupon" id="button-coupon" class="btn btn-secondary">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingTax">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapseTax" aria-expanded="false" aria-controls="collapseTax">Estimate Shipping &amp; Taxes<i class="ion ion-ios-arrow-down"></i></a>
                                                              </h4>
                                                        </div>
                                                        <div id="collapseTax" class="collapse" role="tabpanel" aria-labelledby="headingTax" data-bs-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <p>Enter your destination to get a shipping estimate.</p>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-country"><span class="text-danger">*</span> Country</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="country_id" id="input-country" class="form-control nice-select">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Argentina</option>
                                                                            <option value="">Bangladesh</option>
                                                                            <option value="">Belgium</option>
                                                                            <option value="">Brazil</option>
                                                                            <option value="">Germany</option>
                                                                            <option value="">India</option>
                                                                            <option value="">United Kingdom</option>
                                                                            <option value="">United States</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-zone"><span class="text-danger">*</span> Region / State</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="zone_id" id="input-zone" class="form-control nice-select">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Alabama</option>
                                                                            <option value="">Arizona</option>
                                                                            <option value="">California</option>
                                                                            <option value="">Florida</option>
                                                                            <option value="">Newyork</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group mb-5">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-postcode"><span class="text-danger">*</span> Post Code</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control mb-0">
                                                                    </div>
                                                                </div>
                                                                <button type="button" id="button-quote" class="btn btn-secondary">Get Quotes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingGift">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapseGift" aria-expanded="false" aria-controls="collapseGift">Use Gift Certificate<i class="ion ion-ios-arrow-down"></i></a>
                                                              </h4>
                                                        </div>
                                                        <div id="collapseGift" class="collapse" role="tabpanel" aria-labelledby="headingGift" data-bs-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-voucher">Enter your gift certificate code here</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <div class="input-group">
                                                                            <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
                                                                            <input type="button" value="Apply Gift Certificate" id="button-boucher" class="btn btn-secondary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="cart-amount-wrapper">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>Tổng tiền:</strong></td>
                                                                    <td><?=number_format($_SESSION["total"])?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Phí vận chuyển:</strong></td>
                                                                    <td><?=0?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Thanh toán:</strong></td>
                                                                    <td><span class="color-primary"><?=number_format($_SESSION["total"])?></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                                <a href="products" class="btn btn-secondary dark">Tiếp tục mua hàng</a>
                                                <a href="checkout" class="btn btn-secondary dark align-self-end">Thanh toán</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of shopping-cart -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Shopping Cart Wrapper -->
        </div>