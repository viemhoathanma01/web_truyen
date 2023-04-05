<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng Ký - TruyenFull.vn</title>
	<link rel="stylesheet" type="text/css" href="css/sign.css">
</head>
<body>   
    <form method="post" action="process_signup.php">
    	<h1>Đăng Ký</h1>

    	<?php 
	        if(isset($_GET['error'])){
        ?>
	        <span style='color: red'>
	       	    <?php echo $_GET['error'];
	       	    unset($_GET['error']) ?>
	        </span>
        <?php 
            }
        ?> 

		<label for="name">Họ và tên</label>
		<input type="text" name="name" id="name" placeholder="Điền tên của bạn">
		<br>

		<label>Giới tính</label>
		<input type="radio" name="gender" value="Nam">Nam
		<input type="radio" name="gender" value="Nữ">Nữ
		<input type="radio" name="gender" value="Khác">Khác
		<br>

		<label for="birthday">Ngày sinh</label>
		<input type="date" id="birthday" name="birthday">
		<br>

		<label for="email">Email</label>
		<input type="email" name="email" id="email" placeholder="Điền email của bạn">
		<br>

		<label for="password">Mật khẩu</label>
		<input type="password" name="password" id="password" placeholder="Điền mật khẩu">
		<br>
		<br>

		<button>Đăng ký</button>
	</form>
</body>
</html>