<?php 

class Car {
    
    static $wheels = 4;
    var $hood = 1;
    
  
    function MoveWheels(){
    
      echo Car::$wheels = 10;
    }
}

$bmw = new Car();
//echo $bmw->wheels;
echo Car::$wheels; //to access static property
Car::MoveWheels(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>