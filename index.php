<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk">
	<title>�б�1111</title>
</head>
<?php
 header("Content-type: text/html; charset=gbk");   
require 'config.php';

if ($db->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

$sql="select * from score order by id desc";
$result = $db->query($sql);


?>
<body>
<a href="add.php">���ӳɼ�</a>
	<table border="1">
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
	</table>
</body>
</html>