<?php
    class Cart extends Controller{
        function addToCart($params){
            $products = $this -> model("ProductModel");
            $result = $products -> getProduct();
            if(!$result){
                echo "Error";
            }
            $result_data = $products -> data;
            $cart = $this -> model("CartModel");
            $productId = $params;

            if($productId=="" || is_numeric($productId)==false){
                echo "loi id";
                
            }else{
                if (isset($_SESSION['cart'][$productId])) {
                
                    //nếu đã có sp trong giỏ hàng thì số lượng công thêm $number
                    $_SESSION['cart'][$productId]['quantity']++;
                } else {
                    $cart -> addCart($productId);
                }
            }
            
            
            header("Location:"."http://localhost/gghv_cosmetic/products");
            
            
        }
            
    }
    
   
?>