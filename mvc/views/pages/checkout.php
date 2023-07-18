<!-- Start of Main Content Wrapper -->
<div id="content" class="main-content-wrapper">
            
            <!-- Start of Checkout Wrapper -->
            <div class="checkout-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="user-actions-area">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <?php
                                        if(isset($_SESSION["logined"])==false ||$_SESSION["logined"]=="")
                                        {
                                        ?>
                                            <div class="user-actions user-login">
                                                <h3>Please login to place order <a id="show_login" href="login">Click here to login.</a></h3>                                                                                
                                            </div> <!-- end of user-actions -->
                                            <div class="user-actions user-register">
                                                <h3>Don’t have account? <a id="show_login" href="register">Register here.</a></h3>                                                                                
                                            </div> <!-- end of user-actions -->
                                        <?php
                                        }else{
                                        ?>
                                        <div class="user-actions user-login">
                                                <h3> Hello <b><?=$_SESSION["email"]?></b></h3>
                        
                                            </div> <!-- end of user-actions -->
                                        
                                            <div class="user-actions user-coupon">
                                                <h3>Have A Coupon? <span id="show_coupon">Click Here To Enter Your Code.</span></h3>
                                                <div id="checkout_coupon" class="display-content">
                                                    <div class="coupon-info">
                                                        <form action="#">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-6">
                                                                    <div class="input-group">
                                                                        <input type="text" name="coupon" value="" placeholder="Coupon Code" id="input-coupon" class="form-control me-3" required>
                                                                        <input type="submit" value="Apply Coupon" id="button-coupon" class="btn btn-secondary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- end of user-actions -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of user-actions -->

                                <div class="checkout-area">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                                            <div class="checkout-form">
                                                <div class="section-title left-aligned">
                                                    <h2>Billing Details</h2>
                                                </div>

                                                <form action="checkout/checkoder" name="checkout-form" id="checkout-form" method="post">
                                                    <div class="form-row mb-3">
                                                       
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="last_name">Full Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="full-name" name="full-name" required>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="p_address">Address <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="address" name="address" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="city_name">City <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="city" name="city" required>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="city_name">Country <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="country" name="country" required>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="tel_number">Telephone <span class="text-danger">*</span></label>
                                                            <input type="tel" class="form-control" id="phone" name="phone" required>
                                                        </div>                                                      
                                                    </div> 
                                                    <div class="form-row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <label for="order_notes">Order Notes</label>
                                                            <textarea class="form-control" id="note" name="note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        
                                                        <div class="custom-radio">
                                                            <input class="form-check-input" type="radio" name="payment" id="cash_delivery_payment" value="cash">
                                                            <span class="checkmark"></span>
                                                            <label class="form-check-label" for="cash_delivery_payment">Cash on Delivery</label>

                                                            <div class="payment-info" id="cash_pay">
                                                                <p>Pay with cash upon delivery.</p>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="custom-radio">
                                                            <input class="form-check-input" type="radio" name="payment" id="paypal_payment" value="paypal">
                                                            <span class="checkmark"></span>
                                                            <label class="form-check-label" for="paypal_payment">PayPal Express Checkout</label>

                                                            <div class="payment-info" id="paypal_pay">
                                                                <p>Pay via PayPal. You can pay with your credit card if you don’t have a PayPal account.</p>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-check">
                                                            <div class="custom-checkbox">
                                                                <input class="form-check-input" type="checkbox" id="terms_acceptance" required>
                                                                <span class="checkmark"></span>
                                                                <label class="form-check-label" for="terms_acceptance">I agree to the <a href="#">terms of service</a> and will adhere to them unconditionally.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row justify-content-end">
                                                        <input type="submit" name="submit-btn" id="submit-btn" class="btn btn-secondary dark" value="Continue to Payment">
                                                    </div>
                                                    
                                                   
                                                                    
                                                </form>
                                            </div> <!-- end of checkout-form -->
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                                            <div class="order-summary">
                                                <div class="section-title left-aligned">
                                                    <h2>Your Order</h2>
                                                </div>
                                                <?php
                                                if(isset($_SESSION["cart"])==false || count($_SESSION["cart"])==0)//nếu chưa có giỏ hàng
                                                {
                                                    ?>
                                                <ul class="list-unstyled">                                
                                                    <li class="single-cart-item media">
                                                        <div class="pro">
                                                            <p> Bạn chưa có sản phẩm nào trong giỏ hàng</p>
                                                            <a href="products"> Vào Danh sách sản phẩm</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <?php
                                                }else{
                                                ?>
                                                <div class="product-container">
                                                <?php               
                                                
                                                foreach($_SESSION["cart"] as $productId)
                                                {
                                                ?>
                                                    <div class="product-list">
                                                        <div class="product-inner d-flex align-items-center">
                                                            <div class="product-image me-4 me-sm-5 me-md-4 me-lg-5">
                                                                <a href="#">
                                                                    <img src="<?=$productId["thumbnail"]?>" alt="<?=$productId["title"]?>" title="<?=$productId["title"]?>">
                                                                </a>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5><?=$productId["title"]?></h5>
                                                                <p class="product-quantity">Quantity: <?=$productId["quantity"]?></p>
                                                                 <!-- end of checkout-payment -->
                                                                <p class="product-final-price"><?=number_format($productId["price"])?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                </div> <!-- end of product-container -->
                                                <?php
                                                }
                                                ?>
                                                <div class="order-review">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr class="cart-subtotal">
                                                                    <th>Shipping</th>
                                                                    <td class="text-center">0</td>
                                                                </tr>            
                                                                <tr class="order-total">
                                                                    <th>Total</th>
                                                                    <td class="text-center"><strong><span class="color-primary"><?=number_format($total)?></span></strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div> <!-- end of order-summary -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div>
                                <?php
                                 }
                                ?> <!-- end of checkout-area -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Checkout Wrapper -->
        </div>