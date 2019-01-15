<?php 

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
 
    function MoveWheels(){
      echo $this->wheels = 10;
    
    } 
    
    function CreateDoors(){
      $this->doors = 6;
    
    } 

}

$bmw = new Car();

class Plane extends Car{
    var $wheels=20;
    
    }
$newPlane = new Plane();
echo $newPlane->wheels;
//$newPlane->MoveWheels();

//if(class_exists("Plane")){
//        echo"exists";
//}
//

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