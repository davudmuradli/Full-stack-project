<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Class 2</title>
</head>
<body>
<?php $cars = array("BMW","Mercedes","Nissan");

    print_r($cars);

    print count($cars);

    $colour1 = array("red","green");
    $colour2 = array("white,black");
    $colour3 = array("blue","purple");
    $allcolours = array_merge($colour1, $colour2, $colour3);

    ?>

    <pre> <?=print_r($allcolours)?></pre>

    <br/>

    <?=implode('<br/>', $allcolours)?>

    <br/> 

    <h1>Array slided</h1>
    <?php
    $subColours = array_slice($allcolours,2 ,4);

    echo implode('<br/>',$subColours);
    ?>

    <?php
    
    $ages ["Davud"]= 17;
    $ages ["Gilberto"]= 35;


    foreach($ages as $name => $ages){
        echo "<br/><b>$name</b> is $ages years old <br/>";
    }
    ?> 



    <?php
    $basket = array();
    $basket['cereal'] = 'rice';
    $basket['meat']= array('chicken','beef');
    $basket['sweet']= null;


    foreach($basket as $key => $value){

        if(is_array($value)){
            foreach($value as $v){
                echo "basket $key has $value <br/>";
            }
        }
        else if(is_string($value)){
            echo " item $key has $value <br/>";
         }
         else{
            echo "nothing";
         }
    }
    ?>

</body>
</html>