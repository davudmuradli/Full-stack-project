<?php
setcookie("username", "admin", time() - 1);
header("Location: ./login.php");
?>