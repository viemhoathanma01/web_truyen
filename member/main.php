 <style type="text/css">
	.stories_list{
		width: 20%;
		border: 0px solid black;
		height: 250px;
		float: left;
		text-align: center;
	}
</style>

<?php 
include '../admin/connect.php';

$search = '';

if(isset($_GET['search'])){
	$search = $_GET['search'];
	$sql = "select * from stories
    where
    title like '%$search%'";
}else{
	$sql = "select * from stories";
}

$result = mysqli_query($connect,$sql);
?>

<div id="div_giua">
	<div class="trai"></div>
	<div class="giua">
		<div>
			<div class="title">
			<font color="purple">
				<h3> TRUYỆN ĐỀ CỬ > </h3>
			</font>
		    </div>
		    <?php foreach ($result as $each): ?>
		    <div class="stories_list">
			    <a href="show_story.php?id=<?php echo $each['id'] ?>" title="<?php echo $each['title'] ?>">
			        <img src="../admin/stories/images/<?php echo $each['image'] ?>" height='200'>
				    <br>
				    <?php echo $each['title'] ?>
			    </a>	
	        </div>
	        <?php endforeach ?>
		</div>
		<div>
			<div class="title">
			<font color="purple">
				<h3> TRUYỆN MỚI CẬP NHẬT > </h3>
			</font>
		    </div>
		    <?php foreach ($result as $each): ?>
		    <div class="stories_list">
			    <a href="show_story.php?id=<?php echo $each['id'] ?>" title="<?php echo $each['title'] ?>">
			        <img src="../admin/stories/images/<?php echo $each['image'] ?>" height='200'>
				    <br>
				    <?php echo $each['title'] ?>
			    </a>	
	        </div>
	        <?php endforeach ?>
		</div>
		<div>
			<div class="title">
			<font color="purple">
				<h3> TRUYỆN HOT > </h3>
			</font>
		    </div>
		    <?php foreach ($result as $each): ?>
		    <div class="stories_list">
			    <a href="show_story.php?id=<?php echo $each['id'] ?>" title="<?php echo $each['title'] ?>">
			        <img src="../admin/stories/images/<?php echo $each['image'] ?>" height='200'>
				    <br>
				    <?php echo $each['title'] ?>
			    </a>	
	        </div>
	        <?php endforeach ?>
		</div>
	</div>
	<div class="phai"></div>
</div>