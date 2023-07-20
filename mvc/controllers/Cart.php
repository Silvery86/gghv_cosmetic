<?php
    class Cart extends Controller{
        function addToCart($params){
            
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
        function deleteCart($params){
            $cart = $this -> model("CartModel");
            $productId = $params;
            if (isset($_SESSION['cart'][$productId])) {
                $cart -> delCart($productId);
                header("Location:"."http://localhost/gghv_cosmetic/viewcart");
            }
        }
        
        function updateCart($params){
            $cart = $this -> model("CartModel");
            
            $newQuantity = 0;
            if(isset($_REQUEST['update-btn'])){
                $newQuantity = $_REQUEST["quantity"];
                $productId = $params;
                
                
                $cart -> updateCart($productId,$newQuantity);
                header("Location:"."http://localhost/gghv_cosmetic/viewcart");
            }
        }
    }
    
   
?>