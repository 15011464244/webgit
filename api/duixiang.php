 <?php
class stdObject {
    
}

$obj = new stdObject();
$obj->name = "Nick";
$arr = [];
$arr["id"] = 1;
$arr["arr"] = "bb";
$obj->age = $arr;
print_r($obj->age['arr']);
$bbb=[
	"cc"=>'aa',
];
print_r($bbb["cc"]);
$cc = new $arrayName = array('' => , );