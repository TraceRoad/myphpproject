<?php
//自定义函数
$a="Hello";
$b="World";
say($a,$b);
function  say($a,$b){
    echo $a.$b;
}
echo "<br />";
/*
 * 可变函数的调用，即通过变量的值来调用函数，因为变量的值是可变的，所以可以通过改变一个变量的值来实现调用不同的函数。
 * 经常会用在回调函数、函数列表，或者根据动态参数来调用不同的函数。可变函数的调用方法为变量名加括号
 */
function varfun($a){
    echo "Hello".$a;
}
$fun='varfun';
$fun($a);
echo "<br />";
$fun02='varfun';
$fun02($b);
echo "<br />";
/*
 * 内置函数指的是PHP默认支持的函数.包括字符串处理、数组函数、文件处理、session与cookie处理等。
 */
 //str_replace内置方法的使用
$str="i am jack";
$str01="tom";
$str = str_replace("jack", $str01, $str);
echo  $str;
echo "<br />";
//检测函数是否存在function_exists\method_exists\class_exists\file_exists等
function  isexist(){
    echo "isexist";
}
if (function_exists('isexist')){
    echo "function exists-----";
    isexist();
}else{
    echo "function no`t exists-----";
}