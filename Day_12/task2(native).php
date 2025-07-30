<?php
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "training_system";
    public $conn;
    public function connect()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->dbname,
            
        );
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
$new_name = new Database();
$email="kareem@gamil.com";
$sql = "SELECT * FROM students WHERE email= ?";
$new_name-> connect();
$result = $new_name->conn->prepare($sql);
$result->bind_param("s",$email);
$result->execute();
$result1=$result->get_result();

while ($row = $result1->fetch_assoc()) {
   echo $row["name"]; 
}

