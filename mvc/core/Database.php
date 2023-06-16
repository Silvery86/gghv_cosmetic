<?php 
class Database{
    public $conn = NULL; 
	public $pdo_stm = NULL;
   
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "mysql";
    protected $dbname = "test";

    function __construct(){
        try
		{
			$this->conn = new PDO("mysql:host=".$this -> servername.";dbname=".$this->dbname."","".$this->username."","".$this->password."");
			$this->conn->exec("SET NAMES UTF8");//Thiết lập làm việc với unicode
		}
		catch(PDOException $ex)
		{
			echo "<h3>" . $ex->getMessage() . "</h3>";
			die("<h3> LỖI KẾT NỐI CSDL </h3>");
		}
    }
    function ProcessSQL($sql, $data=NULL)
        {
            $this->pdo_stm = $this->conn->prepare($sql);
            $ketqua=false;
            if($data!=NULL)
                $ketqua = $this->pdo_stm->execute($data);
            else
                $ketqua = $this->pdo_stm->execute();
            return $ketqua;
        }    
}
?>