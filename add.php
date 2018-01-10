<!DOCTYPE html>
<html>
<head>
<?php
header("Content-type: text/html; charset=gbk");  
?>
<meta http-equiv="content-type" content="text/html;charset=gbk">
	<title>添加成绩</title>
</head>
<body>
<form action="save.php" method="post" name="form1">
<table>
	<tr>
	<td>姓名：<input type="text" name="name" /></td>
	</tr>
	<tr>
	<td>学号：<input type="text" name="stu_num" /></td>
	</tr>
	<tr>
	<td>成绩<input type="text" name="grade" /></td>
	</tr>
	<tr><td><input type="submit" value="增加" /></td></tr>
</table>
</form>
</body>
</html>