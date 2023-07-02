<?php
    class ViewCart extends Controller{
        function index(){
            $product = $this -> model("ProductModel");
            $result = $product -> getProduct();
           

            $this -> view("default-layout",
            ["product" => $result, "page" => "viewcart"]
            );
        }
    }
   
?>