<?php
class database
{
    private $db_name = "mu_application";
    private $host = "localhost";
    private $user_name = "root";
    private $password = "";
    public $connection;

//public function create_connection(){
//    try
//    {
//        $this->conn=new PDO("mysql:host=".
//        $this->host.";dbname=".$this
//        )
//    }
//    catch
//    {
//
//    }
//}


//}

    public function db_connection()
    {
        try {

            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user_name, $this->password);
//            echo  'cobnmgj';
            return $this->connection;

        } catch (PDOExecption $exception) {
            echo $exception->getMessage();
        }

    }
}
?>
