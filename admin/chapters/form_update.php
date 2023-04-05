<?php require '../check_admin_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h3>Sửa Chương</h3>
    <?php 
    $id = $_GET['id'];
    require '../menu.php';
    require '../connect.php';

    $sql = "select * from chapters where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);

	$sql = "select * from stories";
	$stories = mysqli_query($connect,$sql);
    ?>
<form method="post" action="process_update.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
	Tên
	<input type="text" name="name" value="<?php echo $each['name'] ?>">
	<br>
	Nội dung
	<textarea name="content"><?php echo $each['content'] ?></textarea>
	<br>
	Tên truyện
	<select name="story_id">
		<?php foreach ($stories as $story): ?>
			<option value="<?php echo $story['id'] ?>"
			<?php if($each['story_id'] == $story['id']){ ?>
				selected
			<?php } ?>
			>
				<?php echo $story['title'] ?>
			</option>
		<?php endforeach ?>
	</select>
	<br> 
	<button>Sửa</button>
</form>
</body>
</html>