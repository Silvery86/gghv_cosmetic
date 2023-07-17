<?php
    class User extends Controller{
        function index(){
            if(isset($_SESSION["logined"])==false ||$_SESSION["logined"]==""){
                $user_model = $this -> model("UserModel");
                $email = $_REQUEST["email"];
                $pass = md5($_REQUEST["password"]);
                $result = $user_model -> getUser($email,$pass);
                
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
            $this -> view("default-layout",
                    ["page" => "user"]
                    );
            
        }
    }
   
?>