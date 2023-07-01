<?php
    class Cart extends Controller{
        function add($params){
            $products = $this -> model("ProductModel");
            $result = $products -> getProduct();
            if(!$result){
                echo "Error";
            }
            $result_data = $products -> data;
            $cart = $this -> model("CartModel");
            $productId = $params;
            
            if (isset($_SESSION['cart'][$productId])) {
                //nếu đã có sp trong giỏ hàng thì số lượng công thêm $number
                $_SESSION['cart'][$productId]['quantity']++;
            } else {
                $cart_item = $cart -> addCart($productId);
            }
           
            
            
            $this -> view("product-layout",
            ["page" => "products", "product" => $result_data]
            );
        }
            
    }
    
   
?>