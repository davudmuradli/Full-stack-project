<?php

function get_template($file){
    include('header.php');
    include( $file . '.php');
    include('footer.php');
}
?>