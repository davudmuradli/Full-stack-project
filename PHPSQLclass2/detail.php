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


if($_GET && !empty($_GET['PersonID'])){
$sql = "SELECT * FROM persons where PersonID=" . $_GET['PersonID'] ;
$result = $connection->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        echo "Name: <b>" . $row['FirstName'] . "</b><br/>";
        echo "Last Name: <b>" . $row['LastName'] . "</b><br/>";
      } 
}

}
?>