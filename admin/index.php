<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - TruyenFull.vn</title>
	<link rel="stylesheet" type="text/css" href="../css/sign.css">
</head>
<body>
	<form action="process_signin.php" method="post">
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
	</form>
</body>
</html>