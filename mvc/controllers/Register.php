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
                if(isset($_REQUEST['submit-btn'])){
    
                    $fullname = $_REQUEST["full-name"];
                    $email = $_REQUEST["email"];
                    $phone = $_REQUEST["phone"];
                    $password = md5($_REQUEST["password"]);
                    
                }
                $user_model = $this -> model("UserModel");
                $user_model -> createUser($email,$password,$fullname,$phone);
                
                
        }
        
    }
   
?>