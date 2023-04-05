<?php 

if(empty($_POST['name']) || empty($_POST['gender']) || empty($_POST['birthday']) || empty($_POST['email']) || empty($_POST['password'])){ //nếu trống 1 cái gì thì trở về form insert
	header('location:signup.php?error=Vui lòng điền đầy đủ thông tin.');
	exit;
}

$name = $_POST['name'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$password = $_POST['password'];

require 'admin/connect.php';
$sql = "select count(*) from members where email = '$email'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if ($number_rows == 1) {
	header('location:signup.php?error=Email của bạn đã bị trùng. Vui lòng nhập email khác.');
	exit;
}

$sql = "insert into members(name,gender,birthday,email,password)
value ('$name','$gender','$birthday','$email','$password')";
mysqli_query($connect,$sql);

$sql = "select id from members where email = '$email'";
$result = mysqli_query($connect,$sql);
$id = mysqli_fetch_array($result)['id'];
session_start();
$_SESSION['id'] = $id;
$_SESSION['name'] = $name;

header('location:signin.php');
mysqli_close($connect);