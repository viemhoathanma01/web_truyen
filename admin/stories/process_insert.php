<?php  

require '../check_admin_login.php'; 

// if(empty($_POST['title']) || empty($_POST['description']) || empty($_POST['image']) || empty($_POST['author']) || empty($_POST['status'])){ //nếu trống 1 cái gì thì trở về form insert
// 	header('location:form_insert.php?error=Vui lòng điền đầy đủ thông tin.');
// 	exit;
// }

$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];
$author = $_POST['author'];
$status = $_POST['status'];
$category_id = $_POST['category_id'];

$folder = 'images/';
$file_extensive = explode('.', $image['name'])[1];
$file_name = time() . '.' . $file_extensive;
$path_file = $folder . $file_name; //file ảnh cho vào 1 folder theo thời gian tạo, tránh trùng

move_uploaded_file($image["tmp_name"], $path_file); //ảnh lưu vào folder tạm sau đó chuyển đến folder chính

require '../menu.php';
require '../connect.php';
$sql = "insert into stories(title, description, image, author, status, category_id)
values('$title', '$description', '$file_name', '$author', '$status','$category_id')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?success= Thêm thành công');