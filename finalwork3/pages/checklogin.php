<?php

if(!isset($_SESSION['username'])){
echo "Welcome";
}else{
    header("Location: /final-work3/pages/login.php");
}
?>