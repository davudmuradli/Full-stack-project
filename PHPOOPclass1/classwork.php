<?php

class Rectangle{
    private $height;
    private  $width;


    function __construct($height,$width)
    {
      $this->height = $height;
      $this->width = $width;
    }
  
  
  function calculate_area(){
      $area = $this->height * $this->width;
      echo $area. ' is area of figure. <br/>';
  
  }
  
  function calculate_perimeter(){
      $perimeter = ($this->height + $this->width) * 2;
      echo $perimeter. ' is perimeter of figure. <br/>';
  }
  
  function is_square(){
      if($this->height == $this->width){
          echo "It is square. <br/>";
      }
      else{
          echo "It is just rectangular. <br/><br/>";
      }
  }

}


$square = new Rectangle(45,45);
$figure = new Rectangle(30,64);

echo 'Square: <br/>';
$square -> calculate_area();
$square -> calculate_perimeter();
$square ->  is_square();
echo 'Random rectangular: <br/>';
$figure -> calculate_area();
$figure -> calculate_perimeter();
$figure ->  is_square();

?>



