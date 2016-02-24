<?php
//創建數組.在PHP中有2中數組  索引數組、关联数组
$arraay = array();
//索引数组是指数组的键是整数的数组，并且键的整数顺序是从0开始，依次类推
//关联数组是指数组的键是字符串的数组。
$fruit = array("苹果","香蕉","菠萝");
print_r($fruit[0]);
echo "<br />";
/*
 * 索引数组赋值
 * 1.用数组变量的名字后面跟一个中括号的方式赋值.$arr[0]='苹果'
 * 2.用array()创建一个空数组，使用=>符号来分隔键和值，左侧表示键，右侧表示值.array('0'=>'苹果');
 * 3.用array()创建一个空数组，直接在数组里用英文的单引号'或者英文的双引号"赋值.array('苹果');
 */

/*
 * for循环访问索引数组里的值
 */ 
 foreach ($fruit as $val){
     echo $val;
 }
 /*
  * 关联数组复制
  */
 echo "<br />";
 $arrLink=array();
 $arrLink['apple']="苹果";
 isset($arrLink);
 print_r($arrLink);