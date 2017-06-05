<?php
session_start();
// mysql
// 链接数据库
// 连接是通过创建 PDO 基类的实例而建立的。
// 不管使用哪种驱动程序，都是用 PDO 类名。
// 构造函数接收用于指定数据库源（所谓的 DSN）以及可能还包括用户名和密码（如果有的话）的参数。
//
// Example #1 连接到 MySQL
header("Content-type: text/html; charset=utf-8");
$user = "root";
$pass = "";
$host = 'localhost';
$dbh = new PDO('mysql:host='.$host.';dbname=gongjie', $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'));
// require_once("db.php");
$post = $_POST;
$name = $post['name'];
$password = $post['password'];
$sql = "select password from haha where name = '{$name}'";
$select = $dbh->query($sql);
// if(empty($select)){
//     echo "用户名不存在";
//     return false;
// }
    $user = [];
   foreach ($select as $row) {
       // print_r($row);
       $user = $row;
   }if (empty($user)) {
   		echo "您输入的用户名错误"."       "."<a href='login.php'>返回</a>";
   }else{
	   if ($user["password"] == $password) {
	   	# code...
	   	echo "密码正确";
	   	//$_SESSION["Name"] = $name;
	   	$_SESSION["Name"] = $name;
	   	echo $_SESSION["Name"];
	   	// header("Location:index.php");
	   	header("refresh:3;url=index.php");
		print('正在加载，请稍等...<br>三秒后跳转到主页');
	   }else{
	   		echo "您输入的密码错误"."       "."<a href='login.php'>返回</a>";
	   }
    }
// if (!$select) {

// 	 // header("Location:login.html");
// }
// echo empty($select);

// 如果出现
// 如果是一个空对象证明链接成功了
// PDO Object ( )
// 如果出现
 // Access denied for user
 // 用户拒绝访问

 // Fatal error: Uncaught exception 'PDOException'
 // with message 'SQLSTATE[HY000] [1045] Access denied for
 // user 'root'@'localhost' (using password: YES)'
 // in D:\web7\shangke\php\day2\demo\02.lian_jie_shu_ju_ku.php
 // :13 Stack trace: #0 D:\web7\shangke\php\day2\demo\02.
 // lian_jie_shu_ju_ku.php(13): PDO->__construct('mysql:hos
 // t=loca...', 'root', 'wsd') #1 {main} thrown in D:\web7\
 // shangke\php\day2\demo\02.lian_jie_shu_ju_ku.php on line
 //  13
