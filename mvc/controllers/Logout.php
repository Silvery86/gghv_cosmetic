<?php
    class Logout extends Controller{
        function index(){
            unset($_SESSION["logined"]);
            session_destroy();
            
           
            $this -> view("default-layout",
            ["page" => "logout"]
            );
                        
        }
    }
   
?>