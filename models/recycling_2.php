<?php
class recycling {
  private $conn;
  private $table_name = "recycling_2";
  public $Day;
  public $Waste;

  public function __construct($db){
    $this->conn = $db;
  }
  public function read() {
    $query = "SELECT *
    FROM " . $this ->table_name;

    $stmt = $this ->conn ->prepare ($query);
    $stmt->execute();
    return $stmt;
  }
}
?>
