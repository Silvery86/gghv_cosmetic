<?php
    class Logout extends Controller{
        function index(){
            unset($_SESSION["logined"]);
            session_destroy();
            
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