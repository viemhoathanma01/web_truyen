<style type="text/css">
	a:hover{
		color: red; 
	}
</style> 
<div id="div_tren">
	<div class="trai">
		<img src="images/logo.png" width="70%" height="100%">
	</div>
	<div class="giua">
		<div class="tren"></div>
		<div class="duoi">
			<form>
				<input type="text" placeholder="Tìm truyện" size="70%" name="search" 
				<?php if(isset($search)){ ?>
					value="<?php echo $search ?>"
				<?php } ?>
				>
				<button type="submit" >
					Tìm kiếm
				</button> 
			</form>
		</div>
	</div>
	<div class="phai">
		<div class="tren">
			<img src="images/anhgoc.png">
		</div>
		<div class="duoi">
			<a href="signin.php">
				Đăng Nhập /
			</a>
			<a href="signup.php">
				Đăng Ký
			</a>
		</div>
	</div>
</div>