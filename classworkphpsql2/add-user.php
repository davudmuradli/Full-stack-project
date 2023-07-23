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



$sql_statement = $connection->prepare("INSERT INTO `examples`(`firstname`, `lastname`, `email`, `country`) VALUES (?,?,?,?)");

$firstname = $_POST['firstname'];
$lastname =$_POST['lastname'];
$email = $_POST['email'];
$country = $_POST['country'];
$sql_statement->bind_param ("ssss:", $firstname, $lastname,$email,$country);

$sql_statement->execute();


header("Location: users.php");

?>