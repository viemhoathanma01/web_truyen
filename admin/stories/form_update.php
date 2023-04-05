<?php require '../check_admin_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h3>Sửa Truyện</h3>
	<?php
	    $id = $_GET['id'];
	    require '../menu.php';
	    require '../connect.php';
	    $sql = "select * from stories where id = '$id'";
	    $result = mysqli_query($connect,$sql);
	    $each = mysqli_fetch_array($result);

	    $sql = "select * from categories";
	    $categories = mysqli_query($connect,$sql);
	?>
<form method="post" action="process_update.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
	Tiêu đề
	<input type="text" name="title" value="<?php echo $each['title'] ?>">
	<br>
	Mô tả
	<textarea name="description"> value="<?php echo $each['description'] ?>"</textarea>
	<br>
	Đổi ảnh mới
	<input type="file" name="image">
	<br>
	Hoặc giữ ảnh cũ
	<img src="images/<?php echo $each['image'] ?>" height='100'>
	<input type="hidden" name="image_old" value="<?php echo $each['image'] ?>">
	<br>
	Tác giả
	<input type="text" name="author"  value="<?php echo $each['author'] ?>">
	<br>
	Trạng thái
	<input type="radio" name="status" value="Đang cập nhật">Đang cập nhật
	<input type="radio" name="status" value="Hoàn thành">Hoàn thành
	<br>
	Thể loại
	<select name="category_id">
		<?php foreach ($categories as $category): ?>
			<option value="<?php echo $category['id'] ?>"
			<?php if($each['category_id'] == $category['id']){ ?>
				selected
			<?php } ?>
			>
				<?php echo $category['name'] ?>
			</option>
		<?php endforeach ?>
	</select>
	<br> 
	<button>Sửa</button>
</form>
</body>
</html>