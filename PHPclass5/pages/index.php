<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'get_template.php';

if(isset($_GET) && isset($_GET['page'])){
    get_template($_GET['page']);
} else{
    get_template('404');
}