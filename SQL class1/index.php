<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$tshirst = 50; //stock
interface Stock {
    public function sell();
}

class Store implements Stock {
    public function sell(){
        echo "Selling tshrits";
    }
}

$tshirt1 = new Store();

$thirt1->sell();





?>