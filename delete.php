<?php
header("Content-type: text/html; charset=gbk");  
require 'config.php';

$id=$_GET['id'];

if(empty($id)){
	exit('id����ȷ');
}


$sql="delete from score where id=$id" ;
$db->query($sql);
echo "ɾ���ɹ���<a href='javascript:back();'>����</a>" ;

