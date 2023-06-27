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
            
            
            $product = $this -> model("ProductModel");
            $result = $product -> getSingleProduct($param);
            if($result == False){
                $this -> view("product-layout",
                    ["page" => "error404"]
                );
            }
            $result_data = $product -> data;
            $this -> view("product-layout",
            ["page" => "product","product" => $result_data]
            );
        }

    }
   
?>