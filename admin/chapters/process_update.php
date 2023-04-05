<?php  

require '../check_admin_login.php'; 

$id = $_POST['id'];
$name = $_POST['name'];
$content = $_POST['content'];
$story_id = $_POST['story_id'];

require '../menu.php';
require '../connect.php';
$sql = "update chapters
set
name = '$name',
content = '$content',
story_id = '$story_id'
where
id = '$id'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
