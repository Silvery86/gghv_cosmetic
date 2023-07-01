<?php 
    class Controller{
        public function model($model){
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }
        public function view($view, $data=[]){
            require_once "./mvc/views/".$view.".php";
        }
        function redirectUrl(){
            if (isset($_GET["url"])){
                unset($_GET["url"]);
                require_once "./mvc/controllers/Products.php";
                
            }
        }
    }
    
?>