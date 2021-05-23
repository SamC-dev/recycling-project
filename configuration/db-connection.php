<?php
class database {
  private $host = "localhost";
  private $db_name = "project";
  private $username = "root";
  private $password = "";
  private $conn;

public function connect () {
  $this-> conn = null;

try {
  $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);  //connection with PDO
  $this->conn->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}
catch (PDOExcpetion $e) {
echo "connection failed: " . $e->getMessage();
}
return $this-> conn;
}
}

?>
