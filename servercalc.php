<?php
include("config.php");
include("form-process.php");


$no1 = $_REQUEST['n1'];
$no2 = $_REQUEST['n2'];
$req = $_REQUEST['req'];

if ($req == 'somar' ){

	$result = $no1 + $no2;

}elseif ($req == 'subtrair') {

	$result =  $no1 - $no2;

}elseif ($req == 'multiplicar') {

	$result =  $no1 * $no2;

}elseif ($req == 'dividir') {

	$result =  $no1 / $no2;
}

$ip = getIP();
$dateOp = getDateT();
$calcObj = array(
	"resultado"=>$result, 
	"req"=>$req, 
	"ip"=>$ip,
	"date"=>$ip,
	"bonus"=>"",
);

$datatempo = date("Y-m-d H:i:s");  
$bonus = "sem bonus"; 

echo  json_encode($calcObj);

$req = $no1." ".$req." ".$no2;

InsertOperacao( $ip, $req, $result, $datatempo, $bonus );


function getIp(){

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

return $ip;

}

function getDateT(){

$date=date_create();
return date_timestamp_get($date);

}

