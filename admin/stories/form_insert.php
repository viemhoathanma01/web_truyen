<?php require '../check_admin_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h3>Thêm Truyện</h3>
<?php 
    require '../menu.php';
    require '../connect.php';
    $sql = "select * from categories";
    $result = mysqli_query($connect,$sql);
?>
<form method="post" action="process_insert.php" enctype="multipart/form-data">
	Tiêu đề
	<input type="text" name="title">
	<br>
	Mô tả
	<textarea name="description"></textarea>
	<br>
	Ảnh
	<input type="file" name="image">
	<br>
	Tác giả
	<input type="text" name="author">
	<br>
	Trạng thái
	<input type="radio" name="status" value="Đang cập nhật">Đang cập nhật
	<input type="radio" name="status" value="Hoàn thành">Hoàn thành
	<br>
	Thể loại
    <select name="category_id">
		<?php foreach ($result as $each): ?>
			<option value="<?php echo $each['id'] ?>">
			    <?php echo $each['name'] ?>
			</option>
		<?php endforeach ?>
	</select>
	<br> 
	<button>Thêm</button>
</form>
</body>
</html>