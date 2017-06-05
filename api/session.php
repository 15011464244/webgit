
<?php
Session_start();
$Name = "这是一个Session例子";
Session_Register("Name");//注意,不要写成：Session_Register("$Name");
Echo $_SESSION["Name"];
//之后$_SESSION["Name"]为"这是一个Session例子"
?>