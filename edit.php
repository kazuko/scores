<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk">
<title>�༭�ɼ�</title>
</head>
<?php
 header("Content-type: text/html; charset=gbk");  
require 'config.php';
$id = $_GET['id'];

if(empty($id)){
exit("id����");
}

$sql="select * from score where id=$id";
$result = $db->query($sql);
$row=$result->fetch_array(1)
?>
<body>
<form action="update.php" method="post" name="form1">
	<table>
		<tr>
			<td>������<input type="text" name="name" value="<?=$row['name']?>"/> 
			<input type="hidden" name="id"  value="<?=$id?>" /></td>
		
		</tr>
		<tr>
			<td>ѧ�ţ�<input type="text" name="stu_num" value="<?=$row['stu_num']?>"/></td>
		</tr>
		<tr>
			<td>�ɼ���<input type="text" name="grade" value="<?=$row['grade']?>"/></td>
		</tr>

<tr><td><input type="submit" value="����" /></td></tr>
	</table>
</form>
</body>
</html>