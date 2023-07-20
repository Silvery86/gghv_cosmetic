<?php
    class User extends Controller{
        function index(){

            if(isset($_SESSION["logined"])==false ||$_SESSION["logined"]==""){
                $user_model = $this -> model("UserModel");
                $email = $_REQUEST["email"];
                $pass = md5($_REQUEST["password"]);
                $result = $user_model -> getUser($email,$pass);
                
                

                
                if($result>0){
                    $orders_result = $user_model -> getUserOrder($_SESSION["user-id"]);
                    if(!$orders_result){
                        die("Error");
                    }else{
                        $order = $user_model -> userdata;
                        $this -> view("default-layout",                    
                        ["page" => "user","user"=>$result,"order" =>  $order]
                        );
                    }
                }else{
                    $this -> view("default-layout",
                    ["page" => "login","user"=>$result]
                    );
                }
            }else{
                $user_model = $this -> model("UserModel");
                $orders_result = $user_model -> getUserOrder($_SESSION["user-id"]);
                if(!$orders_result){
                    die("Error");
                }
                $order = $user_model -> userdata;
                $this -> view("default-layout",
                        ["page" => "user","order" =>  $order]
                        );
            }
            
        }
        function showOrder($param) {
            if($param == "products" | $param == "home" | $param == "aboutus" | $param == "contact" | $param == "viewcart" | $param == "checkout" | $param == "user" | $param == "logout"){
                header("Location:"."http://localhost/gghv_cosmetic/".$param."");
            }
            if(isset($_SESSION["logined"])==false ||$_SESSION["logined"]==""){
                
            }else{
                $user_model = $this -> model("UserModel");
                $orders_result = $user_model -> getUserOrderDetail($_SESSION["user-id"],$param);
                if(!$orders_result){
                    die("Error");
                }
                $orderDetail = $user_model -> userdata;
                $this -> view("product-layout",
                        ["page" => "vieworder","order" =>  $orderDetail]
                        );
            }
        }
        
    }
   
?>