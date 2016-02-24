<?php
/*字符串的定义
 *1、单引号
 *2、双引号
 *3、heredoc语法结构.注意必须在文段的开头
 *4、单引号和双引号的区别：双引号串中直接包含字串变量，单引号串中的内容总被认为是普通字符。
 *5、字符串的连结用"."
 *6、去除字符串首位的空格：trim去除一个字符串两端空格。
 *                 rtrim是去除一个字符串右部空格，其中的r是right的缩写。
 *                 ltrim是去除一个字符串左部空格，其中的l是left的缩写。        
 */
$str01 = 'hello world'; 
$str02 = "hello world";
$hello = <<<TAG
hello world
TAG;
/*
 *7、取出字符串的长度：     strlen()擅长计算英文字符串长度。
 *                mb_strlen()擅长计算中文字符串长度
 */
$str03='hello world';
echo strlen($str03)."<br/>";
$str04="你好";
echo mb_strlen($str04,"UTF-8")."<br/>";
/*
 *8、 字符串的截取：substr(字符串变量,开始截取的位置，截取个数）擅长截取英文字符串
 *           mb_substr(字符串变量,开始截取的位置，截取个数, 网页编码）擅长截取中文字符串
 */
$str05='I love you';
echo substr($str05, 2,4)."<br/>";
$str06="我爱你";
echo  mb_substr($str06, 1,1,"UTF-8")."<br/>";
/*
 *9、 查找某字符串在文中的位置：strpos(要处理的字符串, 要定位的字符串, 定位的起始位置[可选])
 */
echo strpos($str05, "love")."<br/>";
/*
 *10、 替换字符串：str_replace(将被替换的字符串, 要替换的字符串, 被搜索的字符串, 替换进行计数[可选])
 */
 echo str_replace("love","hate", $str05)."<br/>";
 /*
  *11、 格式化字符串：sprintf(格式, 要转化的字符串)
  */
 $str07 = '99.9';
 $result = sprintf('%01.2f', $str07)."<br/>";
 echo $result;//结果显示99.90
 /*
  *12、 字符串的合并：implode(分隔符[可选], 数组)
  */
 $arrStr01=array("你","好","吗");
 var_dump(implode($arrStr01))."<br/>";
 /*
  *13、 字符串的分割：explode(分隔符[可选], 字符串)
  */
 var_dump(explode(" ",$str05))."<br/>";
 /*
  *14、 字符串转义：addslashes(要转义字符串)
  */
 $str08="what's your name?";
 echo  addslashes($str08);