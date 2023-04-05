<?php  

require '../check_admin_login.php'; 

if(empty($_POST['name']) || empty($_POST['content'])){ //nếu trống 1 cái gì thì trở về form insert
	header('location:form_insert.php?error=Vui lòng điền đầy đủ thông tin.');
	exit;
}

$name = $_POST['name'];
$content = $_POST['content'];
$story_id = $_POST['story_id'];

require '../menu.php';
require '../connect.php';
$sql = "insert into chapters(name, content, story_id)
values('$name', '$content', '$story_id')";

mysqli_query($connect,$sql);
mysqli_close($connect);
