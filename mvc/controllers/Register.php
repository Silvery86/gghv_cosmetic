<?php
    class Register extends Controller{
        function index(){
         
           

            $this -> view("default-layout",
            ["page" => "register"]
            );
        }
    }
   
?>