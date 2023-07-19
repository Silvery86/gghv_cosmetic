<?php 

class CartModel extends Database{

    public $cart_item;
    public $quantity = 1;

    function addCart($productId)
    {
        
            //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
            $sql = "SELECT products.*, brands.name as brand_name, categories.name as category_name FROM products  
            LEFT JOIN brands ON products.brand_id = brands.id 
            LEFT JOIN categories ON products.category_id = categories.id 
            WHERE products.id = $productId
            ";
            $result = $this->ProcessSQL($sql);

            $this->cart_item=NULL;
            if($result==TRUE)
                $this->cart_item = $this->pdo_stm->fetchAll();
            
            $_SESSION['cart'][$productId] = array(
                'id' => $productId,
                'title' => $this->cart_item[0]['title'],
                'thumbnail' => $this->cart_item[0]['thumbnail'],
                'quantity' => $this -> quantity++,
                'price' => $this->cart_item[0]['price'],
            );
            return $this -> cart_item;
              
    }
    function delCart($productId){
        unset($_SESSION["cart"][$productId]);
        
        
        if($_SESSION["cart"] == NULL){
            $_SESSION["total"] = 0;
            
        }
    }
    function updateCart($productId,$newQuantity){
        $_SESSION["cart"][$productId]["quantity"] = $newQuantity;
    }

}

?>