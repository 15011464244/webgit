<?php 
	if(!empty($_GET['type'])){
		$type = $_GET['type'];
	}else{
		$type = 1;
	}
	if(!empty($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 1;
	}
	if(!empty($_GET['pre_page'])){
		$pre_page = $_GET['pre_page'];
	}else{
		$pre_page = 1;
	}
	// $url = "http://api.shudong.wang/v1/db.php?page=".$page."&pre_page=".$pre_page;
	// echo $data = file_get_contents($url);



// 	$data = array (‘foo' => ‘bar');
// $data = http_build_query($data);
 
// $opts = array (
// ‘http' => array (
// ‘method' => ‘POST',
// ‘header'=> “Content-type: application/x-www-form-urlencodedrn” .
// “Content-Length: ” . strlen($data) . “rn”,
// ‘content' => $data
// )
// );
 
// $context = stream_context_create($opts);

// $html = file_get_contents(‘http://localhost/e/admin/test.html', false, $context);
 
// echo $html;
	// showapi_appid=40563&showapi_sign=983100feb3364ed7bb63bd01e653fdcd&type=2&page=1&rows=10
$data = array("showapi_appid"=>"40563","showapi_sign"=>"983100feb3364ed7bb63bd01e653fdcd","type"=>$type,"page" => $page,"rows" => $pre_page);  
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
 $sFile = file_get_contents("http://route.showapi.com/1208-2", false, $cxContext);  
 
 echo $sFile;  