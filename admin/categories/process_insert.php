<?php  

require '../check_super_admin_login.php'; 

if(empty($_POST['name'])){
	header('location:form_insert.php?error=Phải điền tên');
}

$name = $_POST['name'];

require '../menu.php';
require '../connect.php';
$sql = "insert into categories(name)
values('$name')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?success=Thêm thành công');