<?php  

require '../check_super_admin_login.php'; 

if(empty($_POST['id'])){
	header('location:form_update.php?error=Phải truyền mã để sửa');
	exit;
}

$id = $_POST['id'];
if(empty($_POST['name'])){
	header("location:form_update.php?id=$id&error=Phải điền tên");
	exit;
}

$name = $_POST['name'];

require '../menu.php';
require '../connect.php';
$sql = "update categories
set 
name = '$name'
where
id = '$id'
";

mysqli_query($connect,$sql);
$error = mysqli_error($connect);
mysqli_close($connect);
if(empty($error)){
	header('location:index.php?success=Sửa thành công');
}else{
	header("location:form_update.php?id=$id&error=Lỗi truy vấn");
}

//lỗi truy vấn <=> thiết SET
