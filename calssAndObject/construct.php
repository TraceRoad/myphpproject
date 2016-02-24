<?php
class Car{
    //构造函数__construct()。
    //具有构造函数的类，会在每次对象创建的时候调用该函数，因此常用来在对象创建的时候进行一些初始化工作。
    function __construct(){
        echo "Car构造函数被调用";
    }
    //析构函数
    //析构函数指的是当某个对象的所有引用被删除，或者对象被显式的销毁时会执行的函数。
    function __destruct(){
        echo "Car的析构函数被调用";
    }
}
/*
 * 子类中如果定义了__construct则不会调用父类的__construct，
 * 如果需要同时调用父类的构造函数，需要使用parent::__construct()显式的调用。
 */
class Trunk extends Car{
    function __construct(){
        echo "Trunk的构造函数被调用";
        parent::__construct();
    }
    function __destruct(){
        echo "Trunk的析构函数被调用";
        parent::__destruct();
    }
}
$trunk = new Trunk();
unset($trunk);//销毁时会调用析构函数