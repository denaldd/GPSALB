<?php 
include '../../DataBase/DB.php';
include '../../functions/Login.php';
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];


$number = DB::query('SELECT count(user_id) FROM shtepineshitje WHERE user_id=:user_id', array(':user_id'=>$user_id));
$number1 = DB::query('SELECT count(user_id) FROM shtepimeqera WHERE user_id=:user_id', array(':user_id'=>$user_id));
$number2 = DB::query('SELECT count(user_id) FROM elektronike WHERE user_id=:user_id', array(':user_id'=>$user_id));

foreach ($number as $key) {
	$n1 = $key['count(user_id)'];
}
foreach ($number1 as $key) {
	$n2 = $key['count(user_id)'];
}
foreach ($number2 as $key) {
	$n3 = $key['count(user_id)'];
}

$num = $n1 + $n2 + $n3;
$nums = json_encode($num);
echo json_decode($nums);
?>