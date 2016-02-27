<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=utf-8"></meta>
	</head>
	<body>
		<?php
//1传入页码
$page=$_GET['p'];
$pagesize=2;
$show_page=5;//展示出5个页码
$pageoffset=($show_page-1)/2;//偏移量
//2.根据页码获取数据
$host='127.0.0.1';
$user='root';
$password='root';
$database='phplinkmysql';
$port='3306';
$link = mysqli_connect($host, $user, $password, $database, $port);
if(!$link){
	echo '数据库连接失败';
	exit;
}else{
	//查找数据
	$query="select * from student limit ".($page-1)*$pagesize .",".$pagesize;
	$result = mysqli_query($link, $query);
	//获取总共数据
	$allcountquery = "select count(*) from student";
	$alltotal = mysqli_query($link, $allcountquery);
	$allcount = mysqli_fetch_array($alltotal);
	$total=$allcount[0];
	$total_pages = ceil($total/$pagesize);
	//展示数据
	echo "<table border=1 cellspacing=0 width=40%>";
	echo "<td>id</td><td>name</td>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<tr>';
		echo "<td>{$row["id"]}</td>";
		echo "<td>{$row["name"]}</td>";
		echo "</tr>";
	}
	echo "</table>";
}
mysqli_free_result($result);
mysqli_close($link);
//3.显示数据+分页条
$page_banner="";
if($page>1){
	$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=1'>首页</a>";
	$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($page-1)."'>上一页</a>";
}
$start=1;
$end=$total_pages;
if($total_pages>$page){
	if($page>$pageoffset+1){
		$page_banner.="...";
	}
	if($page>$pageoffset){
		$start=$page-$pageoffset;
		$end=$total_pages>$page+$pageoffset?$page+$pageoffset:$total_pages;
	}else{
		$start=1;
		$end=$total_pages>$show_page?$show_page:$total_pages;
	}
	if($page+$pageoffset>$total_pages){
		$start=$start-($page+$pageoffset-$end);
	}
}
for ($i=$start;$i<=$end;$i++){
	$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($i)."'>".$i."</a>";
}
if($total_pages>$page&&$total_pages>$page+$pageoffset){
	$page_banner.="...";
}
if($page<$total_pages){
	$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($page+1)."'>下一页</a>";
	$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".$total_pages."'>尾页</a>";
}
echo $page_banner;
$allpage = "共".$total_pages."页";
echo $allpage;
echo "<form action='page.php'>跳到<input type='text' size='3' name='p' value='".$page."'/>页<input type='submit' value='确定'/></form>";
?>
	</body>
</html>
