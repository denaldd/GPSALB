<?php 
include '../../DataBase/DB.php';
include '../../functions/Login.php';
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];


$date = DB::query('SELECT date_registered FROM gps_users WHERE user_id=:user_id', array(':user_id'=>$user_id));

foreach ($date as $key) {
	$n1 = $key['date_registered'];
	$n1 = setlocale(LC_TIME, 'sq_AL.UTF-8');
    $n1 = strftime("%e %B %G");
}

$date_registered = json_encode($n1);
echo json_decode($date_registered);
?>