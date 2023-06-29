<?php
    class Login extends Controller{
        function index(){
            if(isset($_SESSION["logined"])==false ||$_SESSION["logined"]=="")
            {

            $this -> view("default-layout",
            ["page" => "login"]
            );
            }
            
        }
    }
   
?>