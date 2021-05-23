<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "configuration/db-connection.php";
include_once "models/recycling_2.php";

 $database = new database();
 $db = $database ->connect();
 $recycling = new recycling($db);
 $stmt = $recycling->read();
 $num = $stmt->rowCount();

 if ($num > 0) {
   $recycling_arr = array();
   $recycling_arr["Daily Recycling"] = array();
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     extract($row);

     $recycling_item = array (
       "Day" => $Day,
       "Waste" => $Waste);


       array_push($recycling_arr["Daily Recycling"], $recycling_item);
     }
     echo json_encode($recycling_arr);
 }
 else {
   echo json_encode(array("message" => "no data"));
   }
?>
