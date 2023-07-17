<?php 
class Database{
    public $conn = NULL; 
	public $pdo_stm = NULL;
   
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "mysql";
    protected $dbname = "gghv_cosmestic";

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
            $result=false;
            if($data!=NULL)
                $result = $this->pdo_stm->execute($data);
            else
                $result = $this->pdo_stm->execute();
            return $result;
        }    
}
?>