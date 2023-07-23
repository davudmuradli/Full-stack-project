<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


interface Stock {
    public function sell();
}

class Store implements Stock {
    public $tshirst = 50; //stock
    public function sell(){
        $this->tshirst = $this->tshirst-1;
        echo "Selling tshrits" . "<br/>" . $this->tshirst.  " tshirts are avaible in stock" . "<br/>";
    }
}

$tshirt1 = new Store();

$tshirt1->sell();
$tshirt1->sell();
$tshirt1->sell();
$tshirt1->sell();





?>