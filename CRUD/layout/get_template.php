<?php 
function get_template($file) {
  include ('head.php');
  include ('pages/' . $file . '/index.php');
  include ('footer.php');  
}