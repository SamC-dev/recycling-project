<?php
class recycling {
  private $conn;
  private $table_name = "recycling_1";
  public $Day;
  public $Paper;
  public $Plastic;
  public $Glass;
  public $Metal;
  public $Organic;
  public $Other;

  public function __construct($db){
    $this->conn = $db;
  }
  //Now the function to read data of the table
  public function read() {
    //query to select all from the table
    $query = "SELECT *
     FROM " . $this->table_name;
    //prepare the query
    $stmt = $this->conn->prepare($query);
    //execute the query
    $stmt->execute();
    return $stmt;
  }
}

 ?>
