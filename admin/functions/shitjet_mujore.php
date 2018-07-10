<?php 
include '../../DataBase/DB.php';
include '../../functions/Login.php';
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];

$shitjet = DB::query('SELECT * FROM shitjet_mujore WHERE user_id=:user_id AND year=:year', array(':user_id'=>$user_id, ':year'=>date('Y')));
foreach ($shitjet as $key) {
	$janar = $key['janar'];
	$shkurt = $key['shkurt'];
	$mars = $key['mars'];
	$prill = $key['prill'];
	$maj = $key['maj'];
	$qershor = $key['qershor'];
	$korrik = $key['korrik'];
	$gusht = $key['gusht'];
	$shtator = $key['shtator'];
	$tetor = $key['tetor'];
	$nentor = $key['nentor'];
	$dhjetore = $key['dhjetore'];
}

$janar = json_encode($janar);
echo json_decode($janar);
$shkurt = json_encode($shkurt);
echo json_decode($shkurt);
$mars = json_encode($mars);
echo json_decode($mars);
$prill = json_encode($prill);
echo json_decode($prill);
$maj = json_encode($maj);
echo json_decode($maj);
$qershor = json_encode($qershor);
echo json_decode($qershor);
$korrik = json_encode($korrik);
echo json_decode($korrik);
$gusht = json_encode($gusht);
echo json_decode($gusht);
$shtator = json_encode($shtator);
echo json_decode($shtator);
$tetor = json_encode($tetor);
echo json_decode($tetor);
$nentor = json_encode($nentor);
echo json_decode($nentor);
$dhjetore = json_encode($dhjetore);
echo json_decode($dhjetore);
?>