<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server_name = "localhost";
$username ='root';
$password='';
$database_name="test";


$connection = new mysqli($server_name,$username,$password, $database_name);

if($connection->connect_error){
    die("Connection failed:" . $connection->connect_error);
}

?>