<?php
    class Products extends Controller{
        function index(){
            
            $products = $this -> model("ProductModel");
            $result = $products -> getProduct();
            
            $this -> view("default-layout",
            ["page" => "products", "product" => $result]
            );
        }
        function product($param){
            
            
            $product = $this -> model("ProductModel");
            $result = $product -> getSingleProduct($param);
            
            
            $this -> view("product-layout",
            ["page" => "product","product" => $result]
            );
        }

    }
   
?>