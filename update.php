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
	echo "更新成功！";
}else{
	echo '更新失败！';
}