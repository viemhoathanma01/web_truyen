<?php 

require '../check_admin_login.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$image_new = $_FILES['image_new'];
if ($image_new['size'] > 0) {
	$folder = 'images/';
    $file_extensive = explode('.', $image['name'])[1];
    $file_name = time() . '.' . $file_extensive;
    $path_file = $folder . $file_name; //file ảnh cho vào 1 folder theo thời gian tạo, tránh trùng
    move_uploaded_file($image["tmp_name"], $path_file); //ảnh lưu vào folder tạm sau đó chuyển đến folder chính
} else {
	$file_name = $_POST['image_old'];
}
$author = $_POST['author'];
$status = $_POST['status'];
$category_id = $_POST['category_id'];

require '../menu.php';
require '../connect.php';
$sql = "update stories
set
title = '$title',
description = '$description',
image = '$file_name',
author = '$author',
status = '$status',
category_id = '$category_id'
where
id = '$id'
";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?success= Sửa thành công');