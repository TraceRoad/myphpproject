<?php
//类和对象的使用
class Car{
    var $name="汽车";
    function getName(){
       return $this->name;
    }
}
$car = new Car();
echo  $car->getName();