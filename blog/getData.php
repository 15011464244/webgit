<?php
require_once("db.php");
$name = $_POST['name'];
$content = $_POST['content'];
$insertsql = "insert into haha (
            name,
            status,
            content
    ) values (
            '{$name}',
            20,
            '{$content}'
        )";
$result = $dbh->exec($insertsql);
$sql = "select name,content from haha where status = 20 order by id desc limit 0,8";
    $arr = [];
   foreach($dbh->query($sql) as $key => $value){
    $arr[$key] = $value;
   }
    echo json_encode($arr);

