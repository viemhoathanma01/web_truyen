<style type="text/css">
	.title {
		padding: 5px;
		margin: 10px;
        border-bottom: 1px solid #b5b5b5;
        float: right;
        width: 68%;
        text-align: center;
    }
    .info_image{
    	width: 35%;
    	padding: 10px;
    	margin: 5px;
    	margin-top: 50px;
    }
    .info {
    padding: 13px;
    }
    .info_description{
    	margin-top: 10px;
    	width: 67%;
        float: right;
        text-align: left;
    }
    
</style>

<?php 
    $id = $_GET['id'];
    require 'admin/connect.php';

    $sql = "select * from stories where id = $id";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);

    $sql = "select * from categories";
    $categories = mysqli_query($connect,$sql);

?>

<div id="div_giua">
	<div class="trai"></div>
	<div class="giua">
		<div class="tren">
			<div>
	    	    <font color="purple">
	    		    <h3>THÔNG TIN TRUYỆN</h3>
	    	    </font>
	        </div>
            <?php foreach ($result as $each): ?>
            <div>
            	<h2 class="title">
		        <?php echo mb_strtoupper($each['title']); ?>
	            </h2>
	            <div class="info_description">
	        		<div>
	    		        Tác Giả:
	    	            <?php echo $each['author'] ?>
	    	        </div>
	    	        <br>
	    	        <div>
	    	            Thể Loại:
	    	            <?php foreach($categories as $category): ?>
	    	            	<?php if($each['category_id'] == $category['id']){
	    	            	    echo $category['name'];
	    	            	} ?>
	    	            <?php endforeach ?>
	    	        </div>
	    	        <br>
	    	        <div>
	    		        Giới Thiệu:
	    		        <br><br>
	    	            <?php echo nl2br($each['description']) ?>
	    	        </div>
	        	</div>
	        </div>
	        
	        <div class="info_image">
	    	    <div class="image">
	    	        <img src="admin/stories/images/<?php echo $each['image'] ?>" height='340'>
	            </div>
	            <div class="info">
	    	        <div>
	    		        Tác Giả:
	    	            <a href="author.php" title="<?php echo $each['author'] ?>">
	    	                <?php echo $each['author'] ?>
	    	            </a>
	    	        </div>
	    	        <div>
	    	            Thể Loại:
	    	            <?php foreach($categories as $category): ?>
	    	            	<a href="show_category.php?id=<?php echo $category['id'] ?>">
	    	            		<?php if($each['category_id'] == $category['id']){
	    	            		    echo $category['name'];
	    	            	    } ?>
	    	            	</a>	
	    	            <?php endforeach ?>
	    	        </div>
	    	        <div>
	    		        Trạng Thái:
	    	            <?php echo $each['status'] ?>
	    	        </div>
	            </div>
	        </div>
	        <?php endforeach ?>
		</div>

		<div class="duoi">
            <?php include 'list_chapter.php'; ?>
		</div>
	</div>
	<div class="phai"></div>
</div>