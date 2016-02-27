<?php
/*
 * 分页
 */
$host='127.0.0.1';
$user='root';
$password='root';
$database='phplinkmysql';
$port='3306';
$link = mysqli_connect($host, $user, $password, $database, $port);
$page = 2;
$pagesize = 3;
$start = ($page-1)*$pagesize;
$query = "select * from student limit '$start','$pagesize'";
$result = mysqli_query($link, $query);
$data = array();
while ($row =mysqli_fetch_array($result)){
	$data[]=$row;
}
print_r($data);


