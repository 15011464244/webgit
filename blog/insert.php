<?php
	require_once("db.php");
	$post = $_POST;
	// print_r($post);
	$name = $post["name"];
	$password = $post["password"];
    $sql = "insert into haha (name,password) values('{$name}','{$password}')";
    $select = $dbh->exec($sql);
    // echo $select;
    if ($select) {
    	echo "注册成功";
    	$_SESSION["Name"] = $name;
    	// header("Location:index.php");
    	header("refresh:3;url=index.php");
		print('正在加载，请稍等...<br>三秒后跳转到主页');
    }