<?php
/*
 * 正则表达式.匹配模式使用分隔符与元字符组成
 *         分隔符可以是非数字、非反斜线、非空格的任意字符。经常使用的分隔符是正斜线(/)、hash符号(#) 以及取反符号(~),如果模式中包含分隔符，则分隔符需要使用反斜杠（\）进行转义。"/http:\/\//"
 *         如果模式中包含较多的分割字符，建议更换其他的字符作为分隔符，也可以采用preg_quote进行转义。'/'.preg_quote($p, '/').'/';
 *         分隔符后面可以使用模式修饰符，模式修饰符包括：i, m, s, x等，例如使用i修饰符可以忽略大小写匹配：
 *   \ 一般用于转义字符
     ^ 断言目标的开始位置(或在多行模式下是行首)
     $ 断言目标的结束位置(或在多行模式下是行尾)
     . 匹配除换行符外的任何字符(默认)
     [ 开始字符类定义
     ] 结束字符类定义
     | 开始一个可选分支
     ( 子组的开始标记
     ) 子组的结束标记
     ? 作为量词，表示 0 次或 1 次匹配。位于量词后面用于改变量词的贪婪特性。 (查阅量词)
     * 量词，0 次或多次匹配
     + 量词，1 次或多次匹配
     { 自定义量词开始标记
     } 自定义量词结束标记      
 */
 /*
  * 匹配"apple banna"是否存在"apple"
  */
$p = '/apple/';
$str = "apple banna";
if (preg_match($p, $str)) {
    echo 'matched'."<br/>";
} 

$p = '/bbc/i';
$str = "BBC是英国的一个电视台";
if (preg_match($p, $str)) {
    echo '匹配成功'."<br/>";
}
/*
 * \d匹配数字
 */
$p = '/\d+\-\d+/';
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0]."<br/>";
/*
 * 贪婪模式与懒惰模式
 * 1.使用+之后将会变的贪婪，它将匹配尽可能多的字符
 * 贪婪模式：在可匹配与可不匹配的时候，优先匹配
 * 2.使用问号?字符时，它将尽可能少的匹配字符
 * 懒惰模式：在可匹配与可不匹配的时候，优先不匹配
 */
 //\w匹配字母或数字或下划线，\s匹配任意的空白符，包括空格、制表符、换行符
$p = '/\w+\s\w+/';
$str = "name:steven jobs";
preg_match($p, $str, $match);
echo $match[0]."<br/>";

$p='/\@\w+\.\w+/';
$subject = "my email is spark@imooc.com";
preg_match($p, $subject, $match);
var_dump($match)."<br/>";
echo $match[0]."<br/>";

$p = "|<[^>]+>(.*?)</[^>]+>|i";
$str = "<b>example: </b><div align=left>this is a test</div>";
preg_match_all($p, $str, $matches);
print_r($matches)."<br/>";
/*
 * preg_match_all可以循环获取一个列表的匹配结果数组
 */
$str = "<ul>
            <li>item 1</li>
            <li>item 2</li>
        </ul>";
//在这里补充代码，实现正则匹配所有li中的数据
$p='/<li>(.*)/i';
preg_match_all($p, $str,$matches);
print_r($matches[1])."<br/>";
/*
 * 正则表达式的搜索和替换preg_replace($p,$replacement,$str)
 */
$string = 'April 15, 2014';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '$3, ${1} $2';//${1}与$1的写法是等效的，表示第一个匹配的字串，$2代表第二个匹配的。
echo preg_replace($pattern, $replacement, $string)."<br/>";

$str = '主要有以下几个文件：index.php, style.css, common.js';
$p='/(\w+.\w+),\s(\w+.\w+),\s(\w+.\w+)/i';
$replacement='<em>$3</em>,<em>$1</em>,<em>$2</em>';
preg_match($p, $str,$matche);
echo preg_replace($p, $replacement, $str);
/*
 * 验证用户注册
 */
$user = array(
    'name' => 'spark1985',
    'email' => 'spark@imooc.com',
    'mobile' => '13312345678'
);
//进行一般性验证
if (empty($user)) {
    die('用户信息不能为空');
}
if (strlen($user['name']) < 6) {
    die('用户名长度最少为6位');
}
//用户名必须为字母、数字与下划线
if (!preg_match('/^\w+$/i', $user['name'])) {
    die('用户名不合法');
}
//验证邮箱格式是否正确
if (!preg_match('/^[\w\.]+@\w+\.\w+$/i', $user['email'])) {
    die('邮箱不合法');
}
//手机号必须为11位数字，且为1开头
if (!preg_match('/^1\d{10}$/i', $user['mobile'])) {
    die('手机号不合法');
}
echo '用户信息验证成功'; 