<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk">
	<title>�ɼ��б�</title>
</head>
<?php
header("Content-type: text/html; charset=gbk");   
require 'config.php';

if ($db->connect_error) {
    die('Connect Error ');
}

//***********��ҳ
$page=isset($_GET['page'])?$_GET['page']:1;
$next=$page+1;
$prev=($page-1>0)?($page-1):1;
$pagesize=10;
$start = ($page-1)*$pagesize;
//***********��ҳ//

$sql="select * from score order by id desc limit $start,$pagesize";
$result = $db->query($sql);


?>
<body>
<a href="add.php"><h3>���ӳɼ�</h3></a>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<td>id</td>
			<td>����</td>
			<td>ѧ��</td>
			<td>�ɼ�</td>
			<td>����</td>
	
		</tr>
	<?php
while($row=$result->fetch_array(MYSQLI_BOTH))
{
	?>		
		<tr>
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['stu_num']?></td>
			<td><?php echo $row['grade']?></td>
			<td><a href="delete.php?id=<?php echo $row['id']?>" onclick="if(!confirm('ȷ��Ҫɾ����')){return false}" >ɾ��</a> /<a href="edit.php?id=<?php echo $row['id']?>">�༭</td>
		</tr>
<?
}

$db->close();
?>
<tr><td colspan="5"><a href="index.php?page=1">��ҳ</a> <a href="index.php?page=<?php echo $prev;?>">��һҳ</a> <a href="index.php?page=<?php echo $next;?>">��һҳ</a></td></tr>
	</table>
</body>
</html>