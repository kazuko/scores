<?php
header("Content-type: text/html; charset=gbk");  
require 'config.php';

$name=$_POST['name'];
$stu_num=$_POST['stu_num'];
$grade=$_POST['grade'];

if(empty($stu_num)){
	exit("学号不能为空") ;
	exit;
}elseif(empty($name)){
	exit("姓名不能为空") ;
	exit;
 }elseif(empty($grade)){
	exit("成绩不能为空") ;
	exit;
 }

$sql="insert into score (name,stu_num,grade)values('".$name."','".$stu_num."',".$grade.")" ;
$result = $db->query($sql);
if($result===TRUE){
	echo "成绩增加成功！<a href='javascript:back();'>返回</a>";
}else{
	echo '增加出错！，请返回检查数据！';
	 
}

$db->close();
