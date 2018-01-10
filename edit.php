<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk">
<title>编辑成绩</title>
</head>
<?php
 header("Content-type: text/html; charset=gbk");  
require 'config.php';
$id = $_GET['id'];

if(empty($id)){
exit("id错误！");
}

$sql="select * from score where id=$id";
$result = $db->query($sql);
$row=$result->fetch_array(1)
?>
<body>
<form action="update.php" method="post" name="form1">
	<table>
		<tr>
			<td>姓名：<input type="text" name="name" value="<?=$row['name']?>"/> 
			<input type="hidden" name="id"  value="<?=$id?>" /></td>
		
		</tr>
		<tr>
			<td>学号：<input type="text" name="stu_num" value="<?=$row['stu_num']?>"/></td>
		</tr>
		<tr>
			<td>成绩：<input type="text" name="grade" value="<?=$row['grade']?>"/></td>
		</tr>

<tr><td><input type="submit" value="更新" /></td></tr>
	</table>
</form>
</body>
</html>