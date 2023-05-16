<?php
    $cookie_name = "admin";
    $cookie_password = "admin123";
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once 'classes.php';
    $admin = null;
if($username == $cookie_name  && $password == $cookie_password){

    $admin = new Admin($username,$password);
    $admin->changedata($username,$password);
    echo $admin->username;
    include('head.php');
    echo "<h1>Welcome Admin!</h1>";
}
else{
   echo"unkown user.";
   echo '  <a href="http://localhost/final-work2/pages/login.php"> Login</a>';
}


?>