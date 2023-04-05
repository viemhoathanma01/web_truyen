<?php  

$email = $_POST['email'];
$password = $_POST['password'];

require 'connect.php';
//require: nếu sai đường dẫn thì code dưới sẽ ngừng luôn, k chạy
//include: nếu sai đường dẫn thì code dưới vẫn chạy bình thường

$sql = "select * from admin
where email = '$email' and password = '$password'";
$result = mysqli_query($connect,$sql);
if(mysqli_num_rows($result) == 1){
	$each = mysqli_fetch_array($result);
	session_start();

	$_SESSION['id'] = $each['id'];
	$_SESSION['name'] = $each['name'];
	$_SESSION['level'] = $each['level'];

	header('location:root/index.php');
	exit;
}

header('location:index.php?error=Đăng nhập thất bại. Vui lòng thử lại.');