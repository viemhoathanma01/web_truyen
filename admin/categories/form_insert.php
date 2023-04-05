<?php require '../check_super_admin_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h3>Thêm Thể Loại Truyện</h3>
	<?php 
	    include '../menu.php';
	?>
<form action="process_insert.php" method="post">
	Tên
	<input type="text" name="name">
	<br>
	<button>Thêm</button>
</form>
</body>
</html>