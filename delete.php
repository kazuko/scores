<?php
header("Content-type: text/html; charset=gbk");  
require 'config.php';

$id=$_GET['id'];

if(empty($id)){
	exit('id不正确');
}

$sql="delete from score where id=$id" ;
if($db->query($sql)){
echo "删除成功！<a href='javascript:back();'>返回</a>" ; 
}else{
	echo "删除失败！<a href='javascript:back();'>返回</a>" ; 
}

