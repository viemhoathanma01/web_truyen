<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng Nhập - TruyenFull.vn</title>
	<link rel="stylesheet" type="text/css" href="css/sign.css">
</head>
<body>
	<form method="post" action="process_signin.php">
		<h1>Đăng Nhập</h1>

		<?php 
	        if(isset($_GET['error'])){
        ?>
	        <span style='color: red'>
	       	    <?php echo $_GET['error'] ?>
	        </span>
        <?php 
            }
        ?> 

		<label>Email</label>
		<input type="email" name="email" id="email" placeholder="Điền email của bạn">
		<br><br>

		<label>Mật khẩu</label>
		<input type="password" name="password" id="password" placeholder="Điền mật khẩu">
		<br>
		<br>
		<button>Đăng nhập</button>
		<br>
		<small>
                <p>
                	Bạn chưa có tài khoản? Đăng ký <a href="signup.php">Tại đây</a>
                </p>
        </small>
	</form>
</body>
</html>