  <?php
  
  //THIS PART OF THE FILE IS THE API REST TO RECEIVE DATA FROM THE TABLE
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  //We have to include the db-connection and recycling files
  include_once  "configuration/db-connection.php";
  include_once  "models/recycling_1.php";

  //create new object
  $database = new database();
  $db = $database->connect();
  $recycling = new recycling($db);
  //query products
  $stmt = $recycling->read();
  $num = $stmt->rowCount();
  //create a conditional : if data exist(num > 0), they are represented in a json file
  if ($num > 0){
    //We want an array
    $recycling_arr = array();
    $recycling_arr["Weekly Recycling"] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);

      $recycling_item = array (
       "Day" => $Day,
       "Paper" => $Paper,
       "Plastic" => $Plastic,
       "Glass" => $Glass,
       "Metal" => $Metal,
       "Organic" => $Organic,
       "Other" => $Other);

      array_push($recycling_arr["Weekly Recycling"], $recycling_item);
    }
    //Turn to json
    echo json_encode($recycling_arr);
  }
  else {
    echo json_encode(array("message" => "No data"));
  }

   ?>
