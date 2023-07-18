<?php
    class UserModel extends Database{
    public $user_name;
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
    
    }
?>