<?php


if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
}else{
    header("Location: ./login.php");
}
  

?>