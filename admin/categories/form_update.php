<?php require '../check_super_admin_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h3>Thay Đổi Thể Loại Truyện</h3>
	<?php
	    if(empty($_GET['id'])){
	    	header('location:index.php?error=Phải truyền mã để sửa');
	    }
	    $id = $_GET['id'];
	    include '../menu.php';
	    require '../connect.php';
	    $sql = "select * from categories
	    where id = '$id'";
	    $result = mysqli_query($connect,$sql);
	    $each = mysqli_fetch_array($result);
	?>
<form action="process_update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
	Tên
	<input type="text" name="name" value="<?php echo $each['name'] ?>">
	<br>
	<button>Sửa</button>
</form>
</body>
</html>