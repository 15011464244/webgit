<?php 
// $link=mysql_connect("localhost","root",""); 
$link=mysql_connect("bdm282141455.my3w.com", "bdm282141455","gongjie321","bdm282141455_db");
if(!$link) echo "FAILD!连接错误，用户名密码不对"; 
else echo "OK!可以连接"; 
$sql="INSERT INTO bsbdj(user_login,user_pass)VALUES('firstname','haha')";
// $sql="select * from bsbdj";
mysql_select_db("bdm282141455_db", $link);
$result=mysql_query($sql);
if(!$result){
die("Could not enter data:".mysql_error());
}
echo "Entered data successfully!";
// mysql_close($conn);
?>