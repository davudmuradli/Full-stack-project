<?php
header('Access-Control-Allow-Origin: *'); // means allowed to be consume by javacript 
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $data = json_decode(file_get_contents("php://input")); // some value has been sent to this api
  $namesurname = $data->namesurname;
  $adress = $data->adress;
  $salary = $data->salary;
  $id = $data->id;

  include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/database.php';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/products.php';

  $users = new Users($db);
  $result = $users->create($id, $namesurname, $adress, $salary);
  
  /*
  *  1 - Get the data from form 
  *  2 - Connect to database 
  *  3 - Create a new record on product table 
  *  4 - return a successful status 
  */
  if($result){
    http_response_code(201);  
    echo json_encode(array("message" => "Product ".$users." was created.", "status" => 201));
  } else {
    http_response_code(500);
    echo json_encode(array("message" => "Error is ".$users, "status" => 500));
  }
}