<?php
/*
 * 1.属性的重载通过__set，__get，__isset，__unset来分别实现
 * 对不存在属性的赋值、读取、判断属性是否设置、销毁属性
 * 2.方法的重载通过__call来实现，当调用不存在的方法的时候，将会转为参数调用__call方法，
 * 当调用不存在的静态方法时会使用__callStatic重载。
 */
class Car{
private $ary = array();
    
    public function __set($key, $val) {
        $this->ary[$key] = $val;
    }
    
    public function __get($key) {
        if (isset($this->ary[$key])) {
            return $this->ary[$key];
        }
        return null;
    }
    
    public function __isset($key) {
        if (isset($this->ary[$key])) {
            return true;
        }
        return false;
    }
    
    public function __unset($key) {
        unset($this->ary[$key]);
    }
    //通过关键字clone来复制一个对象，这时__clone方法会被调用
    public function __clone(){
        $obj=new Car();
    }
}
$car = new Car();
$car->name="汽车";
echo $car->name."<br/>";
//对象序列化成字符串
$str  = serialize($car);
echo $str."<br/>";
//反序列化为对象
$object = unserialize($str);
var_dump($object);