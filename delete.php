<?php
header("Content-type: text/html; charset=gbk");  
require 'config.php';

$id=$_GET['id'];

if(empty($id)){
	exit('id����ȷ');
}

$sql="delete from score where id=$id" ;
if($db->query($sql)){
	header("location:index.php"); 
}else{
	echo "ɾ��ʧ�ܣ�<a href='index.php'>�����б�ҳ</a>" ; 
}

$db->close();