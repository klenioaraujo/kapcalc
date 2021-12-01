<?php
include("config.php");
/*teste direto
$ip = "1.1.1.8.9";
$req = "soma";
$result =  "8";
$datatempo = date("Y-m-d H:i:s");  
$bonus = "sem bonus"; 

InsertOperacao($ip, $req, $result, $datatempo, $bonus );
*/

function InsertOperacao($ip, $req, $result, $datatempo, $bonus ){
global $db;
$sql = "INSERT INTO calculos (ip, operation, result, time_stamp, bonus  ) VALUES ('$ip', '$req', '$result', '$datatempo', '$bonus' )";
$result = $db->query($sql);
if(!$result){
    die("Couldn't enter data: ".$db->error);
}

$db->close();

}

function ViewOperacoes($ip){
global $db;
$sql = "SELECT * FROM calculos where ip = '$ip'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: ".
    $row["Id"]." - Ip: ". 
    $row["ip"]."   Data: ". 
    $row["time_stamp"]. " Calculo: " . 
    $row["operation"]." = ".
    $row["result"]." Premio  ".
    $row["bonus"]."<br>";
  }
} else {
  echo "0 results";
}
$db->close();

}


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


?>