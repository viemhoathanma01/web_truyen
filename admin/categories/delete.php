<?php 

require '../check_super_admin_login.php'; 

if(empty($_GET['id'])){
	header('location:form_update.php?error=Phải truyền mã để xóa');
	exit;
}

$id = $_GET['id'];

require '../menu.php';
require '../connect.php';
$sql = "delete from categories
where
id = '$id'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?success=Xóa thành công');