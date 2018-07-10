<?php 
include '../../DataBase/DB.php';
include '../../functions/Login.php';
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];

$login = DB::query('SELECT * FROM gps_users WHERE user_id = :user_id', array(':user_id'=>$user_id));
foreach ($login as $key) {
	$online = $key['user_online'];
}
$date_expire = $online;
$date = new DateTime($date_expire);
$now = new DateTime();
$minutes = $date->diff($now)->format("%i");
if ($minutes >= "0" && $minutes <= "3") {
	$online = "Online ";
}
else{
	$online = "Offline";
}
$json =  json_encode($online);
echo json_decode($json);
?>