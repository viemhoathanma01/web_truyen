<?php require '../check_admin_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h3>Thêm Chương</h3>
	<?php 
    require '../menu.php';
    require '../connect.php';
    $sql = "select * from stories";
    $result = mysqli_query($connect,$sql);
    ?>
<form method="post" action="process_insert.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
	Tên
	<input type="text" name="name">
	<br>
	Nội dung
	<textarea name="content"></textarea>
	<br>
	Tên truyện
	<select name="story_id">
		<?php foreach ($result as $each): ?>
			<option value="<?php echo $each['id'] ?>">
			    <?php echo $each['id'], $each['title']?>
			</option>
		<?php endforeach ?>
	</select>
	<br> 
	<button>Thêm</button>
</form>
</body>
</html>