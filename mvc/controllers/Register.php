<?php
    class Register extends Controller{
        function index(){
            if(isset($_SESSION["logined"])==false ||$_SESSION["logined"]==""){
                
               
    
                $this -> view("default-layout",
                ["page" => "register"]
                );
            }
        }
        function check(){
                $fullname = "";
                $email = "";
                $phone = "";
                $password = "";
                $c_password = "";
                if(isset($_REQUEST['submit-btn'])){
    
                    $fullname = $_REQUEST["full-name"];
                    $email = $_REQUEST["email"];
                    $phone = $_REQUEST["phone"];
                    $password = md5($_REQUEST["password"]);
                    $c_password = md5($_REQUEST["c-password"]);
                }

                $user_model = $this -> model("UserModel");
                $user_model -> createUser($fullname,$email,$phone,$password);
                
                header("Location:"."http://localhost/gghv_cosmetic/login");
        }
        
    }
   
?>