<?php 
	if(!empty($_GET['area'])){
		$area = $_GET['area'];
	}else{
		$area = "北京";
  }
$data = array("showapi_appid"=>"40563","showapi_sign"=>"983100feb3364ed7bb63bd01e653fdcd","area"=>$area);  
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
 $sFile = file_get_contents("http://route.showapi.com/9-8", false, $cxContext);  
 
 echo $sFile;  