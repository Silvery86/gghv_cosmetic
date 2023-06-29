<?php
    class UserModel extends Database{
    public $user_name;
    function getUser($username, $password)
        {
        session_start();
         $sql = "SELECT * FROM user
         LEFT JOIN role ON user.role_id = role.id
         where user.name = '$username' AND user.password = '$password'
         ";
         
         $result = $this->ProcessSQL($sql);
         if($result == FALSE)
            die("Lỗi SQL");
         $login_result = $this -> pdo_stm->rowCount()>0;
           
            if($login_result) //Số bản ghi trả về >0
            {
             $row = $this -> pdo_stm ->fetch();//lấy về 1 dòng dữ liệu từ SELECT (dạng Array)
             $_SESSION["logined"] ="OK";//tạo ra biến $_SESSION["logined"]
             $_SESSION["user"] = $row["name"];//lấy giá trị cột username
             return $login_result;
            }
            else
            {
             return $login_result;
            } 

         
        }
    
    }
?>