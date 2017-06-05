<?php
require_once("db.php");
$name = $_POST['name'];
$index = $_POST['index'];
$insertsql = "select Id from haha  where status = 20 order by Id desc limit {$index},1";
// echo $insertsql;
$arr = [];
 foreach($dbh->query($insertsql) as $key => $value){
    $arr[$key] = $value;
   }
$sql = "update haha set status = 30 where id = '{$arr[0][0]}'";
 $result = $dbh->exec($sql);
$sql = "select name,content from haha where status = 20 order by id desc limit 0,8";
    $arr = [];
   foreach($dbh->query($sql) as $key => $value){
    $arr[$key] = $value;
   }
    echo json_encode($arr);