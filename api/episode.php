<?php 
	// if(!empty($_GET['id'])){
	// 	$id = $_GET['id'];
	// }
$data = array("webp"=>"1","essence"=>"1","content_type"=>"-102","message_cursor"=>"-1","count"=>"10","double_col_mode"=>"0","ac"=>"wifi","aid"=>"7","app_name"=>"joke_essay","ssmix"=>"a");  
 $data = http_build_query($data);  
 $opts = array(  
   'http'=>array(  
     'method'=>"POST",  
     'header'=>"Content-type: application/x-www-form-urlencoded\r\n".  
               "Content-length:".strlen($data)."\r\n" .   
               "Cookie: foo=bar\r\n" .   
               "\r\n",  
     'content' => $data,  
   )  
 );  
 $cxContext = stream_context_create($opts);  
 // echo "$cxContext";
 $sFile = file_get_contents("http://iu.snssdk.com/neihan/stream/mix/v1/", false, $cxContext);  
 
 echo $sFile;  