<?php
use app\core\View;
    class Home extends Controller{
        function index(){
            $product = $this -> model("ProductModel");
            $result = $product -> getProduct();
            if($result){
            $result_data = $product -> data;
            $this -> view("default-layout",
                        ["product" => $result_data, "page" => "home"]
                        );
            }
            
            
        }
    }
    
?>