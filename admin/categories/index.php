<?php require '../check_super_admin_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Thể loại truyện</h1>
<br>
<a href="form_insert.php">
	Thêm 
</a>
<?php 
include '../menu.php'; 
?>
<?php 
require '../connect.php';
$sql = "select * from categories";
$result = mysqli_query($connect,$sql);
?>
<table border="1" width="100%">
	<tr>
		<th>Mã</th>
		<th>Tên</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['id'] ?></td>
			<td><?php echo $each['name'] ?></td>
			<td>
				<a href="form_update.php?id=<?php echo $each['id'] ?>">
					Sửa
				</a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $each['id'] ?>">
					Xóa
				</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>