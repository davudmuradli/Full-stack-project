<?php
    $cookie_name = "admin";
    $cookie_password = "admin123";
    $username = $_POST['username'];
    $password = $_POST['password'];
  
if($username == $cookie_name  && $password == $cookie_password){

setcookie("username", "admin", time()+3600, true);
header("Location: ./index.php");
    
}
else{
  
   echo '  <a href="http://localhost/finalwork3/newproject/login.php"> Login</a>';
}


?>