<?php
	session_start();
	session_unset(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	.right{display: block;position: fixed;right: 10px;top: 10px;}
	.login{right: 100px;}
</style>
<body>
	<h1>登录</h1>
	<form action="sign.php" method="post">
	姓名<input type="text" name="name">
	密码<input type="text" name="password">
	<input type="submit">
</form>
	<span class="right login">
		<?php
			echo "<a href='zhuce.html'>注册</a>";
		?>
	</span>
</body>
</html>