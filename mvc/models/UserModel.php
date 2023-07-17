<?php
    class UserModel extends Database{
    public $user_name;
    function getUser($email, $password)
        {
        
         $sql = "SELECT user.*, role.id, role.name as role_name FROM user
         LEFT JOIN role ON user.role_id = role.id
         where user.email = '$email' AND user.password = '$password'
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
             return $login_result;
            }
            else
            {
             return $login_result;
            } 

         
        }
    function createUser($email,$password,$fullname,$phone){
       
        $sql = "INSERT INTO user VALUES(NULL,?,?,NULL,0,3,?,?)";
       
        $data = [$email,$password,$fullname,$phone];
        print_r($data);
        $result = $this->ProcessSQL($sql,$data);
        if($result == FALSE){
            die("Lỗi SQL");
        }
    }
    
    }
?>