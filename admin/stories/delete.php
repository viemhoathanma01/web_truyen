<?php 

require '../check_admin_login.php'; 

$id = $_GET['id'];

require '../menu.php';
require '../connect.php';
$sql = "delete from stories where id = '$id'";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?success=Xóa thành công');