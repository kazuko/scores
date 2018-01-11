<?php
header("Content-type: text/html; charset=gbk");  

require 'config.php';

$id=$_POST['id'];

if(empty($id)){
	exit('id不正确');
}

$name=$_POST['name'];
$stu_num=$_POST['stu_num'];
$grade=$_POST['grade'];

$sql="update score set name='".$name."',stu_num='".$stu_num."',grade='".$grade."' where id=$id";
if($db->query($sql)===TRUE){
	header("location:index.php"); 
}else{
	echo '更新失败！<a href='index.php'>返回列表页</a>';
}
$db->close();