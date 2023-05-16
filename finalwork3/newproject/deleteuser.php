<?php
include ('check.php');
$conn = mysqli_connect("localhost", "root", "","users");;

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$user_id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header('Location: index.php');
    exit();
} else {
    echo 'Error deleting user';
}

mysqli_close($conn);
?>
