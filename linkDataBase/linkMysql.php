<?php
/*
 * 判定是否已经安装mysql扩展
 */
if(function_exists('mysqli_connect')){
	echo '已经安装mysqli扩展'.'<br/>';
} else{
	echo '还未安装mysqli扩展'.'<br/>';
}
/*
 * mysql扩展进行链接数据库
 * 其中使用mysqlli扩展链接数据库为：$link = mysqli_connect('mysql_host', 'mysql_user', 'mysql_password');
 * 使用	PDO扩展链接数据库为：$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
 *						 $user = 'dbuser';
 *						 $password = 'dbpass';
 *						 $dbh = new PDO($dsn, $user, $password);
 */
	$link = mysqli_connect('127.0.0.1:3306','root','root');
	mysqli_select_db($link, 'phplinkmysql');
	$result = mysqli_query($link, 'select * from student');
	$row = mysqli_fetch_row($result);
