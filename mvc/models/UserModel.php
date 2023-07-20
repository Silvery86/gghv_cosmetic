<?php
    class UserModel extends Database{
    public $user_name;
    public $userdata;

    public $admindata;
    function getUser($email, $password)
        {
        
         $sql = "SELECT users.*, roles.id as role_id, roles.name as role_name FROM users
         LEFT JOIN roles ON users.role_id = roles.id
         where users.email = '$email' AND users.password = '$password'
         ";
         
         $result = $this->ProcessSQL($sql);
         if($result == FALSE)
            die("Lỗi SQL");
         $login_result = $this -> pdo_stm->rowCount()>0;
           
            if($login_result) //Số bản ghi trả về >0
            {
             $row = $this -> pdo_stm ->fetch();//lấy về 1 dòng dữ liệu từ SELECT (dạng Array)
             
             $_SESSION["logined"] ="OK";//tạo ra biến $_SESSION["logined"]
             $_SESSION["email"] = $row["email"];//lấy giá trị cột username
             $_SESSION["user-id"] = $row["id"];
             $_SESSION["full-name"] = $row["fullname"];
             $_SESSION["role"] = $row["role_id"];
             
             return $login_result;
            }
            else
            {
             return $login_result;
            } 

         
        }
    function createUser($fullname,$email,$phone,$password){
       
        $sql = "INSERT INTO users VALUES(NULL,?,?,?,NULL,?,NULL,NULL,NULL)";
       
        $data = [$fullname,$email,$phone,$password];
        
        $result = $this->ProcessSQL($sql,$data);
        if($result == FALSE){
            die("Lỗi SQL");
        }
    }
    function getUserOrder($userId){
        $sql = "SELECT users.id, users.email, users.phone_number, 
         orders.id as order_id, orders.order_address as customer_address,
         orders.customer_name, orders.customer_phone, orders.total_money, orders.note FROM users
         LEFT JOIN orders ON users.id = orders.user_id
         where users.id = '$userId'
         ";
         $result = $this->ProcessSQL($sql);
         if($result == FALSE)
            die("Lỗi SQL");
         $login_result = $this -> pdo_stm->rowCount()>0;
           
            if($login_result) //Số bản ghi trả về >0
            {
             $this -> userdata = $this -> pdo_stm ->fetchAll();
             return $login_result;
            }else{
             return $login_result;
            }
    }
    function getAllOrder(){
        $sql = "SELECT orders.id as order_id, orders.order_address as customer_address,
         orders.customer_name, orders.customer_phone, orders.total_money, orders.note, 
         users.id as user_id, users.email as user_email FROM orders
         LEFT JOIN users ON  orders.user_id = users.id        
         ";
         $result = $this->ProcessSQL($sql);
         if($result == FALSE)
            die("Lỗi SQL");
         $login_result = $this -> pdo_stm->rowCount()>0;
           
            if($login_result) //Số bản ghi trả về >0
            {
             $this -> admindata = $this -> pdo_stm ->fetchAll();
             return $login_result;
            }else{
             return $login_result;
            }
    }

    function getUserOrderDetail($userId,$orderId){
        $sql = "SELECT users.id, users.email, users.phone_number, orders.order_address as customer_address,
         orders.id as order_id, orders.customer_name, orders.customer_phone, orders.total_money as order_total,
         order_details.product_id as product_id, order_details.price as product_price, order_details.num as product_quantity,
         products.title as product_name, products.thumbnail as product_thumbnail FROM users
         LEFT JOIN orders ON users.id = orders.user_id
         LEFT JOIN order_details ON orders.id = order_details.order_id
         LEFT JOIN products ON order_details.product_id = products.id
         where users.id = '$userId' and orders.id = '$orderId'
         ";
         $result = $this->ProcessSQL($sql);
         if($result == FALSE)
            die("Lỗi SQL");
         $login_result = $this -> pdo_stm->rowCount()>0;
           
            if($login_result) //Số bản ghi trả về >0
            {
             $this -> userdata = $this -> pdo_stm ->fetchAll();
             return $login_result;
            }else{
             return $login_result;
            }
    }

    function getAllOrderDetail($orderId){
        $sql = "SELECT users.id, users.email, users.phone_number, orders.order_address as customer_address,
         orders.id as order_id, orders.customer_name, orders.customer_phone, orders.total_money as order_total,
         order_details.product_id as product_id, order_details.price as product_price, order_details.num as product_quantity,
         products.title as product_name, products.thumbnail as product_thumbnail FROM users
         LEFT JOIN orders ON users.id = orders.user_id
         LEFT JOIN order_details ON orders.id = order_details.order_id
         LEFT JOIN products ON order_details.product_id = products.id
         where orders.id = '$orderId'
         ";
         $result = $this->ProcessSQL($sql);
         if($result == FALSE)
            die("Lỗi SQL");
         $login_result = $this -> pdo_stm->rowCount()>0;
           
            if($login_result) //Số bản ghi trả về >0
            {
             $this -> admindata = $this -> pdo_stm ->fetchAll();
             return $login_result;
            }else{
             return $login_result;
            }
    }
    
    
    }
?>