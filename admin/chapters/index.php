<?php require '../check_admin_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Danh sách chương</h1>
<br>
<?php 
    if(empty($_GET['id'])){
	    header('location:../stories?error=Bạn chưa truyền mã truyện');
	}
    $id = $_GET['id'];
    require '../menu.php';
    require '../connect.php';
    $sql = "select * from stories where id = $id";
    $result = mysqli_query($connect,$sql);
    
    $sql = "select * from chapters where story_id = $id";
	$chapters = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($chapters);
?>
<a href="form_insert.php">
	Thêm
</a>
<br>
<table border="1" width="100%">
	<tr>
		<th>Mã</th>
		<th>Tên Chương</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($chapters as $each): ?>
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
</body>
</html>