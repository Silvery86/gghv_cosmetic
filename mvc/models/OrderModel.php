<?php 

class OrderModel extends Database{
    function addOrder($userId,$address,$fullname,$phone,$note,$total)
    {       

        
            //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
            $sql = "INSERT INTO orders VALUES(NULL, ?, ?, ?,?,?, NULL, NULL, ?)";
            
            $data = [$userId,$address,$fullname,$phone,$note,$total];
                       
            $result = $this->ProcessSQL($sql,$data);
            if($result == FALSE){
                die("Lỗi SQL");
            }else{
                $orderId = $this->getInsertId();
                
                return $orderId;
               
            }             
    }

    function addOderDetail($orderdata,$orderId){
        foreach($orderdata as $orderproduct){
            $sql = "INSERT INTO order_details VALUES(NULL, ?, ? , ? , ?)";
            $data = [$orderId,$orderproduct["id"],$orderproduct["price"],$orderproduct["quantity"]];
            $result = $this -> ProcessSQL($sql,$data);
            if($result == FALSE){
                die("Lỗi SQL");
            }
            
        }
       
        $orderDetailId = $this->getInsertId();
        
        return $orderDetailId;
    
        
       
    }

}
?>