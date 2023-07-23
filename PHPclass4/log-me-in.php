<?php

session_start();

if(isset($_POST['loggedlnName'])){
    $cookie_name = "user";
    $cookie_value = true;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $_SESSION ['user'] = $_POST['loggedlnName'];
    header("Location: index.php");
}
else{
    header("Location: login.php");
}


?>