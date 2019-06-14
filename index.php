<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk">
	<title>成绩列表</title>
</head>
<?php
header("Content-type: text/html; charset=gbk");   
require 'config.php';

if ($db->connect_error) {
    die('Connect Error ');
}

//***********分页
$page=isset($_GET['page'])?$_GET['page']:1;
$next=$page+1;
$prev=($page-1>0)?($page-1):1;
$pagesize=10;
$start = ($page-1)*$pagesize;
//***********分页//

$sql="select * from score order by id desc limit $start,$pagesize";
$result = $db->query($sql);


?>
<body>
<a href="add.php"><h3>增加成绩</h3></a>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<td>id</td>
			<td>姓名</td>
			<td>学号</td>
			<td>成绩</td>
			<td>操作</td>
	
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
			<td><a href="delete.php?id=<?php echo $row['id']?>" onclick="if(!confirm('确定要删除吗？')){return false}" >删除</a> /<a href="edit.php?id=<?php echo $row['id']?>">编辑</td>
		</tr>
<?
}

$db->close();
?>
<tr><td colspan="5"><a href="index.php?page=1">首页</a> <a href="index.php?page=<?php echo $prev;?>">上一页</a> <a href="index.php?page=<?php echo $next;?>">下一页</a></td></tr>
	</table>
</body>
</html>