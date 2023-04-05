<?php 

$email = $_POST['email'];
$password = $_POST['password'];

require 'admin/connect.php';
$sql = "select * from members where email = '$email' and password = '$password'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_num_rows($result);

if($number_rows == 1){
	session_start();
	$each = mysqli_fetch_array($result);
	$_SESSION['id'] = $each['id'];
	$_SESSION['name'] = $each['name'];	

	header('location:member');
	exit;
}

header('location:signin.php?error=Đăng nhập thất bại. Vui lòng thử lại.');