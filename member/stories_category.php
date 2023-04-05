<style type="text/css">
	.stories_category_list{
		width: 20%;
		border: 0px solid black;
		height: 250px;
		float: left;
		text-align: center;
	}
}
</style>

<?php 
    $id = $_GET['id'];
    require '../admin/connect.php';
    $sql = "select * from categories where id = $id";
    $category = mysqli_query($connect,$sql);

    $sql = "select * from stories where category_id = $id";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
?>

<div id="div_giua">
	<div class="trai"></div>
	<div class="giua">
		<div>
			<div class="title_list">
				<font color="purple">
					<h3> TRUYỆN 
					    <?php foreach ($category as $each): ?>
				            <?php echo mb_strtoupper($each['name']); ?>
					    <?php endforeach ?>
				    </h3>
				</font> 
		    </div>
		    
		    <?php foreach ($result as $each): ?>
			    <div class="stories_category_list">
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