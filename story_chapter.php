<style type="text/css">
    .title{
        padding: 5px;
        margin: 10px;
        text-align: center;
    }
    .name{
        color: purple;
        padding: 5px;
        margin: 10px;
        text-align: center;
    }
    .nut{
        width: 100%;
        float: left;
        text-align: center;
        padding: 5px;
        margin: 10px;
    }
    .content{
        padding: 5px;
        margin: 10px;
        text-align: left;
    }
</style>

<?php 
    $id = $_GET['id'];
    require 'admin/connect.php';
    
    $sql = "select * from chapters where id = $id";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);

    $sql = "select * from stories";
    $stories = mysqli_query($connect,$sql);

?>

<div id="div_giua">
	<div class="trai"></div>
	<div class="giua">
        <?php include 'list.php'; ?>
        <div>
            <?php echo $each['story_id']; ?>
        
		<div>
            <a href="show_story.php?id=<?php echo $each['story_id'] ?>">
                <h1 class="title">
                    <?php foreach($stories as $story): ?>
                        <?php if($each['story_id'] == $story['id']){
                            echo $story['title'];
                        } ?>  
                    <?php endforeach ?>
                </h1>
            </a>
            <h4 class="name">
                <?php echo $each['name'] ?>
            </h4>

            <div>
                <div class="nut">
                    <a href="#">< Chương Trước</a>
                    <a href="#">Chương Tiếp ></a>
                </div>
            </div>
            
            <div class="content">
                <?php echo nl2br($each['content']); ?>  
            </div>
        </div>
        </div>
	</div>
	<div class="phai"></div>
</div>