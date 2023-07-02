<?php
    class Products extends Controller{
        function index(){
            
            $products = $this -> model("ProductModel");
            $result = $products -> getProduct();
            if(!$result){
                echo "Error";
            }
            $result_data = $products -> data;
            $this -> view("default-layout",
            ["page" => "products", "product" => $result_data]
            );
        }
        function product($param){
            
            
          
            if(($param === "home")){
                header("Location:"."http://localhost/gghv_cosmetic/home");
            }
            else{
                $params = explode("=", filter_var(trim($param,"/")));
                
                $product = $this -> model("ProductModel");
                $result = $product -> getSingleProduct($param);
                if($result == False){

                    if($param == "addtocart=".$params[1].""){
                        $cart = $this -> model("CartModel");
                        $productId = $params[1];

                        if($productId=="" || is_numeric($productId)==false){
                            echo "id must be a number";
                            
                        }else{
                            if (isset($_SESSION['cart'][$productId])) {
                            
                                //nếu đã có sp trong giỏ hàng thì số lượng công thêm $number
                                $_SESSION['cart'][$productId]['quantity']++;
                            } else {
                                $cart -> addCart($productId);
                            }
                        }
                        header("Location:"."http://localhost/gghv_cosmetic/products/product/".$params[1]."");
                    }if($param == "viewcart"){
                        header("Location:"."http://localhost/gghv_cosmetic/viewcart");
                    }else{
                        $this -> view("product-layout",
                        ["page" => "error404"]
                    );
                    }
                   
                }
                $result_data = $product -> data;
                $this -> view("product-layout",
                ["page" => "product","product" => $result_data]
                );
            }
            
            
            
            
        }
        
        

    }
   
?>