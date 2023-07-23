<header><?=include './header.php'?></header>

<?php 
$city1 = array('Baku','Vilnius');
$city2 = array("Dublin");

$allcities = array_merge($city1,$city2);


$text = array();
function output(&$arr){
    print_r($arr);
}

output($allcities)
?>