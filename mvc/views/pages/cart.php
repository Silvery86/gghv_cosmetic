
<div class="header-cart">
    <div class="btn-group">
        <button class="btn-link dropdown-toggle icon-cart">
            <i class="pe-7s-shopbag"></i>
            <span class="count-style"><?=count($_SESSION["cart"])?></span>
        </button>
        <div class="dropdown-menu">
        
            <div class="shopping-cart-content">
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
            }
            else
            {
                ?>
                <ul class="list-unstyled">
                <?php
                $total = 0;
                foreach($_SESSION["cart"] as $productId)
                {
                    
                    $total += $productId["price"]*$productId["quantity"];
                ?>
                    <li class="single-cart-item media">
                        <div class="shopping-cart-img me-4">
                            <a href="#">
                                <img class="img-fluid" alt="Cart Item" src="<?=$productId["image"]?>">
                                <span class="product-quantity"><?=$productId["quantity"]?></span>
                            </a>
                        </div>
                        <div class="shopping-cart-title flex-grow-1">
                            <h4><a href="#"><?=$productId["name"]?></a></h4>
                            <p class="cart-price"><?=$productId["price"]?></p>
                            
                        </div>
                        <div class="shopping-cart-delete">
                            <a href="#"><i class="ion ion-md-close"></i></a>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <?php
                }
                ?>
                <div class="shopping-cart-total">
                    <h4>Sub-Total : <span><?=number_format($total)?></span></h4>
                    <h4>Total : <span><?=number_format($total)?></span></h4>
                </div>
                <div class="shopping-cart-btn">
                    <a class="default-btn" href="viewcart">view cart</a>
                    <a class="default-btn" href="checkout">checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>