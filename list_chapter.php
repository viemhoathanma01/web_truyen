<style type="text/css">
    .chapters_list{
        color: purple;
        padding: 5px;
        margin: 10px;
        border-bottom: 1px solid #b5b5b5;
        float: left;
        width: 100%;
        text-align: left;
    }
    .list_chapter{
        padding: 30px;
        margin: 15px;
    }
</style>

<?php 
    $id = $_GET['id'];
    require 'admin/connect.php';

    $sql = "select * from stories where id = $id";
    $result = mysqli_query($connect,$sql);
    
    $sql = "select * from chapters where story_id = $id";
    $chapters = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($chapters);

?>

<h3 class="chapters_list">DANH SÁCH CHƯƠNG</h3>
<div> 
    <div class="list_chapter">
        <?php foreach ($chapters as $each): ?>
        <div>
            <a href="show_chapter.php?id=<?php echo $each['id'] ?>">
                <?php echo $each['name'] ?> 
            </a> 
        </div>
        <?php endforeach ?>
    </div>    
</div>