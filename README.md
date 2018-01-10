# scores

成绩管理信息系统
一、系统文件目录结构
    
二、数据库
1. 打开phpMyAdmin，新建数据库scores；
2. 字符集(排序规则)选择gbk_chinese_ci；
3. 新建数据库表score，表中包括id（主键，自增长），name，stu_num(学号,唯一)，grade四个字段；
4. 添加10条记录（必须包含你自己的信息），为后续程序做好准备。
三、系统功能
 本系统主要实现学生成绩查看、修改、增加和删除功能，主要程序说明如下：
1. index.php
运行程序文件index.php，界面如下图：

读取数据库表score中所有数据，并显示在表格中；点击”编辑”超链接到程序edit.php,点击”删除”超链接到程序delete.php。
2. edit.php
功能：显示在index.php页面中选中的学生信息，其中只有成绩可修改，点击“修改”按钮，修改后的信息提交给程序update.php，在此程序中完成将修改后的数据保存到数据库表中，保存后，页面跳转至index.php。


3. delete.php
     功能：删除在index.php页面中选中的学生信息，删除后，页面跳转至index.php。
4. add.php
功能：提供可添加学生信息的表单，点击“增加”按钮后，表单数据提交给程序save.php进行保存至数据库表中，保存后，页面跳转至index.php。


四、整理系统文档
1. 将文件夹scores的名字修改为“十位的学号+姓名”，所有文件都保存在此文件夹中。
2.打开“phpMyAdmin”，将scores数据库导出到scores.sql，将scores.sql保存至“十位的学号+姓名”文件夹中。