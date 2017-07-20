
<?php
// mysql
// 连接数据库
// 连接是通过创建 PDO 基类的实例而建立的。
// 不管使用哪种驱动程序，都是用 PDO 类名。
// 构造函数接收用于指定数据库源（所谓的 DSN）以及可能还包括用户名和密码（如果有的话）的参数。

// Example #1 连接到 MySQL
header("Content-type: text/html; charset=utf-8");

$host = "bdm282141455.my3w.com";
$username = "bdm282141455";
$password = "gongjie321";
$dbname = "bdm282141455_db";

try {
	$utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8');
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,$utf8);
    $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password,$utf8);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

?>

