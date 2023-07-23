<?php
class Car{
    public string $colour;
    protected float $engineSize;
    private bool $isStarted;

function start(){
    $this -> colour ='white';
    echo 'I want to run anything that makes my car engine started';
    $this -> isStarted = true;
}

function car_started(): bool{
    return $this -> isStarted;
}
}
$toyota = new Car();
$toyota -> start();

echo "<br/>";
if( $toyota->car_started()){
    echo "yeah the cr has started";
};

?>