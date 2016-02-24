<?php
class  Car{
    //定义属性
    private $price=100;
    private $name="汽车";
    //定义静态属性.静态属性与方法可以在不实例化类的情况下调用，直接使用[类名::方法名]的方式进行调用
    //静态方法也可通过变量进行调用$func = 'getSpeed';$className = 'Car';$className::$func();
    private static $speed=10;
    
    //定义方法
    public function  getName(){
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function  setPrice($price){
        $this->price=$price;
    }
    //定义静态方法
    //静态方法中，$this伪变量不允许使用。可以使用self，parent，static在内部调用静态方法与属性
    public static function getSpeed(){
        return self::$speed;
    }
    public static function setSpeed($speed){
        self::$speed=$speed;
    }
}
$car  =new Car();
echo $car->getName()."<br />";
echo $car->getPrice()."<br />";
echo Car::getSpeed()."<br />";
//更改属性
$price=222;
$name="轿车";
$speed=20;
$car->setName($name);
$car->setPrice($price);
Car::setSpeed($speed);
echo $car->getName()."<br />";
echo $car->getPrice()."<br />";
echo Car::getSpeed()."<br />";
//通过变量来进行动态调用静态方法
$fun='getSpeed';
$className='Car';
echo "通过变量来进行动态调用静态方法：".$className::$fun();