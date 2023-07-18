<?php
    class Checkout extends Controller{
        function index(){
            $product = $this -> model("ProductModel");
            $result = $product -> getProduct();
           

            $this -> view("default-layout",
            ["product" => $result, "page" => "checkout"]
            );
        }

        function checkoder(){
            $fullname = "";
           
            $phone = "";
            $address = "";
            $note = "";
            $orderdata = [];
            $order_model = $this -> model("OrderModel");
            
            if(isset($_REQUEST['submit-btn'])){
                $fullname = $_REQUEST["full-name"];
              
                $phone = $_REQUEST["phone"];
                $address = join("-",array($_REQUEST["address"],$_REQUEST["city"]));
                $note = $_REQUEST["note"];
                $orderdata = $_SESSION["cart"];
                            
                if(isset($_SESSION["logined"])==false ||$_SESSION["logined"]==""){
    
                }else{
                    $userId = $_SESSION["user-id"];
                    $total = $_SESSION["total"];
                    
                    $orderId = $order_model -> addOrder($userId,$address,$fullname,$phone,$note,$total);

                    $result = $order_model -> addOderDetail($orderdata,$orderId);
                    if(isset($result)){
                        unset($_SESSION["cart"]);
                        unset($_SESSION["total"]);
                        header("Location:"."http://localhost/gghv_cosmetic/products");
                    }else{
                        die("Lỗi đặt hàng!");
                    }
                    
                }
            }

        }
    }
   
?>