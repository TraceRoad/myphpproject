<?php
/*
 * 向数据库中的student表中添加数据
 * mysqli_insert_id($link)自增加的id
 */
$link = mysqli_connect('127.0.0.1', 'root', 'root', 'phplinkmysql', '3306'); 
$name='lucy';
$id=mysqli_insert_id($link);
$insert = "insert into (id,name) values('$id','$name')";
mysqli_query($link, $insert);
mysqli_commit($link);
$query='select * from student';
$result = mysqli_query($link, $query);
$row = mysqli_fetch_all($result);
print_r($row);
mysqli_close($link);