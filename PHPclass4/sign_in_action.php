<?php

if(isset($_POST)){
   
}




$cookie_name = "user";
$cookie_value ="Gilberto Santos";
setcookie($cookie_name, $cookie_value, time() + (86400*30)."/");

if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named" . $cookie_name . "Is not set!";
}

else{
    echo "cookie" . $cookie_name . "is set> <br/>";
    echo "Value is " . $_COOKIE($cookie_name);
}


?>