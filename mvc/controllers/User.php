<?php
    class User extends Controller{
        function index(){
            $user_model = $this -> model("UserModel");
            $user = $_REQUEST["email"];
            $pass = md5($_REQUEST["password"]);
           

            $result = $user_model -> getUser($user,$pass);
            
            if($result>0){
                $this -> view("default-layout",
                ["page" => "user","user"=>$result]
                );
            }else{
                $this -> view("default-layout",
                ["page" => "login","user"=>$result]
                );
            }
            
        }
    }
   
?>