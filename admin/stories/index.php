<?php require '../check_admin_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Danh sách truyện</h1>
<br>
<a href="form_insert.php">
	Thêm
</a>
<?php 
    require '../menu.php';
    require '../connect.php';

    $sql = "select 
    stories.*,
    categories.name as category_name
    from stories
    join categories on stories.category_id = categories.id";
    $result = mysqli_query($connect,$sql);
?>
<table border="1" width="100%">
	<tr>
		<th>Mã</th>
		<th>Tiêu đề Truyện</th>
		<th>Ảnh</th>
		<th>Tác giả</th>
		<th>Trạng thái</th>
		<th>Tên thể loại</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['id'] ?></td>
			<td>
				<a href="../chapters?id=<?php echo $each['id'] ?>">
					<?php echo $each['title'] ?>
				</a>
			</td>
			<td>
				<img height="100" src="images/<?php echo $each['image'] ?>">
			</td>
			<td><?php echo $each['author'] ?></td>
			<td><?php echo $each['status'] ?></td>
			<td><?php echo $each['category_name'] ?></td>
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