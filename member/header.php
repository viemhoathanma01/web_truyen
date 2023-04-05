<style type="text/css">
	a:hover{
		color: red; 
	}
</style> 

<?php 
session_start();
if(empty($_SESSION['id'])){
	header('location:../signin.php?error=Vui lòng đăng nhập.');
}
?>

<div id="div_tren">
	<div class="trai">
		<img src="../images/logo.png" width="70%" height="100%">
	</div>
	<div class="giua">
		<div class="tren"></div>
		<div class="duoi">
		    <form>
				<input type="text" placeholder="Tìm truyện" size="70%">
				<button type="submit">
					Tìm kiếm
				</button>
			</form>
		</div>
	</div>
	<div class="phai">
		<div class="tren">
			<img src="../images/anhgoc.png">
		</div>
		<div class="duoi">
			Xin chào bạn 
			<?php echo $_SESSION['name'] ?>
			<br>
			<a href="signout.php">
			    Đăng xuất
			</a>
		</div>
	</div>
</div>