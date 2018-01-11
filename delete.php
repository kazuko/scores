<?php
header("Content-type: text/html; charset=gbk");  
require 'config.php';

$id=$_GET['id'];

if(empty($id)){
	exit('id不正确');
}

$sql="delete from score where id=$id" ;
if($db->query($sql)){
	header("location:index.php"); 
}else{
	echo "删除失败！<a href='index.php'>返回列表页</a>" ; 
}

$db->close();