<?php
header("Content-type: text/html; charset=gbk");  

require 'config.php';

$id=$_POST['id'];

if(empty($id)){
	exit('id����ȷ');
}

$name=$_POST['name'];
$stu_num=$_POST['stu_num'];
$grade=$_POST['grade'];

$sql="update score set name='".$name."',stu_num='".$stu_num."',grade='".$grade."' where id=$id";
if($db->query($sql)===TRUE){
	echo "���³ɹ���";
}else{
	echo '����ʧ�ܣ�';
}