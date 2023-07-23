<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json; charset=UTF-8');

  include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/database.php';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/user.php';

  $users = new Users($db);
  $result = $users->readAll();

  echo json_encode($result->fetch_all(MYSQLI_ASSOC));