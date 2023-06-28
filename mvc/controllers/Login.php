<?php
    class Login extends Controller{
        function index(){
         
           

            $this -> view("default-layout",
            ["page" => "login"]
            );
        }
    }
   
?>