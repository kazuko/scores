<?php
header("Content-type: text/html; charset=gbk");  
require 'config.php';

$name=$_POST['name'];
$stu_num=$_POST['stu_num'];
$grade=$_POST['grade'];

if(empty($stu_num)){
	exit("ѧ�Ų���Ϊ��") ;
	exit;
}elseif(empty($name)){
	exit("��������Ϊ��") ;
	exit;
 }elseif(empty($grade)){
	exit("�ɼ�����Ϊ��") ;
	exit;
 }

$sql="insert into score (name,stu_num,grade)values('".$name."','".$stu_num."',".$grade.")" ;
$result = $db->query($sql);
if($result===TRUE){
	echo "�ɼ����ӳɹ���<a href='javascript:back();'>����</a>";
}else{
	echo '���ӳ������뷵�ؼ�����ݣ�';
	 
}

$db->close();
