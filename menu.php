<?php 
require 'admin/connect.php';
$sql = "select * from categories";
$result = mysqli_query($connect,$sql);
?>

<div id="div_cong_cu">
	<div class="trai"></div>
	<div class="giua">
		<ul>
			<li>
				<a href="index.php">
					<font size="+1">Trang Chủ</font>
				</a>
			</li>
			<li>
				<a href="#">
					<font size="+1">Thể Loại</font>
				</a>
				<ul>
					<?php foreach ($result as $each): ?>
					<li>
			            <div class="categories_list">
			            	<a href="show_category.php?id=<?php echo $each['id'] ?>" >
				                <?php echo $each['name'] ?>
			            	</a>
			            </div>
					</li>
					<?php endforeach ?>
				</ul>
			</li>
			<li>
				<a href="rank.php">
					<font size="+1">Bảng Xếp Hạng</font>
				</a>
			</li>
			<li>
				<a href="author.php">
					<font size="+1">Tác Giả</font>
				</a>
			</li>
			<li>
				<a href="favorite.php">
					<font size="+1">Yêu Thích</font>
				</a>
			</li>
		</ul>
	</div>
	<div class="phai"></div>
</div>